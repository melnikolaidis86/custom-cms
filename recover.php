<?php 

//Require main file that includes all classes and functions 
require_once './system/init.php';

//Require email configuration
require_once('./system/config/email_config.php');

//Require models
require_once './system/models/user.php';

//Creating instance of the User model class
$user = new User();
$validate = new Validation();

//Get template and assign variables
$template = new Template('templates/recover.php');

//Assign variables
$template->title = "Recover Password";
$template->no_navigation = true;

//Checking recover form is submitted
if(isset($_POST['recover'])) {

    $email = $_POST['email'];

    if($validate->isValidEmail($email)) {

        //Checking if email address is a valid user record in the database
        $user_email = $user->check_if_valid_user_email($email);

        if($user_email) {

            try {
                $recovery_hash = random_bytes(32);
            } catch (TypeError $e) {
                // Well, it's an integer, so this IS unexpected.
                die("An unexpected error has occurred"); 
            } catch (Error $e) {
                // This is also unexpected because 32 is a reasonable integer.
                die("An unexpected error has occurred");
            } catch (Exception $e) {
                // If you get this message, the CSPRNG failed hard.
                die("Could not generate a random string. Is our OS secure?");
            }
            
            $data = array();

            $data['user_id'] = $user_email->user_id;
            $data['recovery_hash'] = bin2hex($recovery_hash);

            $user->register_recovery_hash($data);

            try {
                //Recipients
                $mail->setFrom('info@melnikolaidis.eu');
                $mail->addAddress($user_email->email);  // Add a recipient
    
                //Content
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = "Reset Your Password.";

                //Email message
                $mail->Body = '<h3><a href=' . BASE_URI . 'reset.php?recovery=' . bin2hex($recovery_hash) . '>Follow this link to reset your password</a></h3>';
 
                //Alternative messafe for clients that don't accept html e-mail
                $mail->AltBody = BASE_URI . 'application/reset.php?recovery=' . bin2hex($recovery_hash);
            
                $mail->send();
                redirect(BASE_URI . 'recover.php', 'Check your e-mail for verifiation link');
                
                } catch (Exception $e) {
                    redirect(BASE_URI . 'recover.php', 'There was an error with your e-mail address. Please try again', 'error');
            }
        } else {

            redirect(BASE_URI . 'recover.php', 'There is no registered user with this e-mail address', 'error');
        }
    } else {

        redirect(BASE_URI . 'recover.php', 'The e-mail you have entered does not seem to be valid', 'error');
    }
}

//Display template
echo $template;