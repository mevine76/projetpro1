<?php
session_start();

require_once '../helpers/Database.php';
require_once '../models/Quote.php';


$errors = [];
$lastname = "";
$firstname = "";
$email = "";
$phone ="";
$suface = "";
$society = "";
$regexName = '/^[a-zA-Z]+$/';

$regexPhone = '\d{10}';
$quote = getQuote($db, $_GET["id"]);

if($_SERVER["REQUEST_METHOD"] == "POST")
{


    if(isset($_POST["lastname"]))
    {
        $lastname = htmlspecialchars($_POST["lastname"]);
        if(empty($lastname))
        {
            $errors["lastname"] = "Nom obligatoire !";
        }
        else if(!preg_match($regexName,$lastname))
        {
            $errors["lastname"] = "Mauvais format !";
        }

    }

        // lastname verification
        if(isset($_POST["firstname"]))
        {
            $firstname = htmlspecialchars($_POST["firstname"]);
            if(empty($firstname))
            {
                $errors["firstname"] = "Prénom obligatoire !";
            }
            else if(!preg_match($regexName,$firstname))
            {
                $errors["firstname"] = "Mauvais format !";
            }
    
        }

                // lastname verification
                if(isset($_POST["phone_number"]))
                {
                    $phone = htmlspecialchars($_POST["phone_number"]);
                    if(empty($firstname))
                    {
                        $errors["phone"] = "Numéro obligatoire !";
                    }

            
                }
                // email verification
                if(isset($_POST["email"]))
                {
                    $email = htmlspecialchars($_POST["email_address"]);
                    if(empty($email))
                    {
                        $errors["email"] = "Email obligatoire !";
                    }
                    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                    {
            
                        $errors["email"] = "Mauvais format !";
                    }

                }

                // society verification
            if(isset($_POST["society"]))
            {
                $society = htmlspecialchars($_POST["society"]);
                if(empty($society))
                {
                    $errors["society"] = "Societé obligatoire !";
                }

    
        }
        // surface verification
        if(isset($_POST["surface"]))
        {
            $surface = htmlspecialchars($_POST["surface"]);
            if(empty($surface))
            {
                $errors["surface"] = "Surface obligatoire !";
            }

    
        }
        // mail verification
        if(isset($_POST["mail_address"]))
        {
            $mail = htmlspecialchars($_POST["mail_address"]);
            if(empty($mail))
            {
                $errors["mail"] = "Adresse obligatoire !";
            }



        }

    // Verify error
    if(count($errors) == 0)
{

    updateQuote($db, $_GET["id"]);
    header('Location: controller_manage_quote_form.php');


}
}

require_once '../views/update_quote_form.php';