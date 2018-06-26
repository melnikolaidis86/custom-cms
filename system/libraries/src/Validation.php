<?php 

class Validation {

    // Check required fields
    public function isRequired($fieldArray)
    {
        foreach($fieldArray as $field) {
            if($_POST["$field"] == '') {
                return false;
            }
        }
        return true;
    }

    // Validate Email Field
    public function isValidEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    // Custom regex check
    public function customRegex($field, $regex){

        if(preg_match($regex, $field)) {
            return true;
        } else {
            return false;
        }
    }

    // Check Password Match
    public function passwordsMatch($password1, $password2) {

        if($password1 == $password2) {
            return true;
        } else {
            return false;
        }
    }
 
}