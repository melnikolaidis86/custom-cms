<?php 

class Validation {

    //class Variables
    private $field;
    private $field_name;
    private $rules = array();
    private $error;

    //Conscructor method to initialize validation to be executed
    public function __construct($field = null, $field_name = null, array $rules = null){

        $this->field = $field;
        $this->field_name = $field_name;
        $this->rules = $rules;

        $this->validate(); //Run tests right after the class is constructed
    }

    //A getter method for error message
    public function getError() {

        return $this->error;
    }

    //Main method to run all validation tests
    private function validate() {

        if(isset($this->rules['required'])) {
            
            if($this->check_if_empty()) {

                $this->error = 'Το πεδίο ' . $this->field_name . ' δεν μπορεί να είναι κενό.';
            }
        } else if(isset($this->rules['minLength'])) {

            if(!$this->check_min_length($this->rules['minLength']) && !$this->check_if_empty()) {

                $this->error = 'Το πεδίο ' . $this->field_name . ' πρέπει να περιέχει τουλάχιστον ' . $this->rules['minLength']  . ' χαρακτήρες.';
            }
        } else if(isset($this->rules['maxLength'])) {

            if(!$this->check_max_length($this->rules['maxLength'])) {

                $this->error = 'Το πεδίο ' . $this->field_name . ' πρέπει να περιέχει το πολύ ' . $this->rules['maxLength']  . ' χαρακτήρες.';
            }
        } else if(isset($this->rules['validateEmail'])) {

            if(!$this->validate_email()) {

                $this->error = 'Το πεδίο ' . $this->field_name . ' δεν ταιριάζει με κάποια έγκυρη διεύθυνση e-mail.';
            }
        } else if(isset($this->rules['customRegex'])) {

            if(!$this->custom_regex($this->rules['customRegex'])) {

                $this->error = 'Το πεδίο ' . $this->field_name . ' δεν ταιριάζει με κάποια έγκυρη μορφή.';
            }
        }
    }

    //A method to check if the current field is empty
    private function check_if_empty() {

        return empty($this->field) || trim($this->field) == '' ? true : false;
    }

    //A method to check if the current field length is smaller than the chars expected
    private function check_min_length($minLength) {

        return strlen($this->field) > $minLength ? true : false;
    }

    //A method to check if the current field length is larger than the chars expected
    private function check_max_length($maxLength) {

        return strlen($this->field) < $maxLength ? true : false;
    }

    //A method to check if the current field is a valid address
    private function validate_email() {

        $filtered_field = filter_var($this->field, FILTER_SANITIZE_EMAIL); //First removing any illegal chars from the field

        return filter_var($filtered_field, FILTER_VALIDATE_EMAIL);
    }

    //A method to run a custom regex validation test
    private function custom_regex($regex) {

        return preg_match($regex, $this->field);
    }

}