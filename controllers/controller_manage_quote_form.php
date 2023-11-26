<?php
session_start();
require "../models/Quote.php";
require "../helpers/Database.php";


$quotes = getAllQuotes($db);



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_POST["delete"]))
    {
                // Supprimer le devis
                $quote_id = $_POST['delete'];
                $deleteQuote = deleteQuote($db, $quote_id);
                if ($deleteQuote) {
                    header('Location: controller_manage_quote_form.php');
                    exit();
                } else {
                    echo "Erreur lors de la suppression du devis.";
                }
    }
}


require "../views/manage_quote_form.php";
?>
