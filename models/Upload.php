<?php

function insertImage($filename, $category)
{
    global $db;

    $sql = "INSERT INTO images (filename, category) VALUES (:filename, :category)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':filename', $filename, PDO::PARAM_STR);
    $stmt->bindParam(':category', $category, PDO::PARAM_STR);

    return $stmt->execute();
}
?>
