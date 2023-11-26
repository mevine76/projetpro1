<?php
function insertQuote($db)
{
    try { 
    // On insère le nouveau devis dans la base de données après vérifications
    $stmt = $db->prepare('INSERT INTO quote (lastname, firstname, mail_address, email_address, phone_number, surface, society, work_type, work_description, submission_date)
    VALUES
    (:lastname, :firstname, :mail_address, :email_address, :phone_number, :surface, :society, :work_type, :work_description, :submission_date)');
    // POST htmlspecialchars
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email_address']);
    $phone = htmlspecialchars($_POST['phone_number']);
    $suface = htmlspecialchars($_POST['surface']);
    $society = htmlspecialchars($_POST['society']);
    $work_description = htmlspecialchars($_POST['work_description']);
    $mail_address = htmlspecialchars($_POST['mail_address']);
    $work_type = htmlspecialchars($_POST['work_type']);
    // Binding
    $stmt->bindParam(':lastname',  $lastname, PDO::PARAM_STR);
    $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindParam(':mail_address', $mail_address, PDO::PARAM_STR);
    $stmt->bindParam(':email_address', $email, PDO::PARAM_STR);
    $stmt->bindParam(':phone_number', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':surface', $suface, PDO::PARAM_STR);
    $stmt->bindParam(':society', $society, PDO::PARAM_STR);
    $stmt->bindParam(':work_type', $work_type, PDO::PARAM_STR);
    $stmt->bindParam(':work_description', $work_description, PDO::PARAM_STR);
    $currentDate = date("Y-m-d H:i:s");
    $stmt->bindParam(':submission_date', $currentDate, PDO::PARAM_STR);

    $addQuote = $stmt->execute();
    if ($addQuote) {
        echo "Le devis a été ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du devis.";
        print_r($stmt->errorInfo()); // Affichez les informations sur l'erreur SQL
    }

} catch (PDOException $e) {
    echo "Erreur PDO : " . $e->getMessage();
}
}

?>

<?php

function getQuote($db, $quote_id)
{
    $stmt = $db->prepare('SELECT * FROM quote WHERE quote_id = :quote_id');
    $stmt->bindParam(':quote_id', $quote_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updateQuote($db, $quote_id)
{
    // Mise à jour des champs du devis selon les besoins
    $stmt = $db->prepare('UPDATE quote
    SET
        lastname = :lastname,
        firstname = :firstname,
        mail_address = :mail_address,
        email_address = :email_address,
        phone_number = :phone_number,
        surface = :surface,
        society = :society,
        work_type = :work_type,
        work_description = :work_description
    WHERE
        quote_id = :quote_id; 
    ');

    // POST htmlspecialchars
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email_address']);
    $phone = htmlspecialchars($_POST['phone_number']);
    $suface = htmlspecialchars($_POST['surface']);
    $society = htmlspecialchars($_POST['society']);
    $work_description = htmlspecialchars($_POST['work_description']);
    $mail = htmlspecialchars($_POST['mail_address']);
    // Binding
    $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindParam(':mail_address', $mail, PDO::PARAM_STR);
    $stmt->bindParam(':email_address', $email, PDO::PARAM_STR);
    $stmt->bindParam(':phone_number', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':surface', $suface, PDO::PARAM_STR);
    $stmt->bindParam(':society', $society, PDO::PARAM_STR);
    $stmt->bindParam(':work_type', $_POST['work_type'], PDO::PARAM_STR);
    $stmt->bindParam(':work_description',$work_description, PDO::PARAM_STR);
    $stmt->bindParam(':quote_id', $quote_id, PDO::PARAM_INT);
    // Ajout des autres bindParam pour les champs à mettre à jour
    // ...
    return $stmt->execute();
}

function deleteQuote($db, $quote_id)
{
    $stmt = $db->prepare('DELETE FROM quote WHERE quote_id = :quote_id');
    $stmt->bindParam(':quote_id', $quote_id, PDO::PARAM_INT);
    return $stmt->execute();
}

function getAllQuotes($db) {
    $stmt = $db->prepare('SELECT * FROM quote');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
