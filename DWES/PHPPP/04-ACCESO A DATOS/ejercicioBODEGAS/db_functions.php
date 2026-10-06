<?php
require_once "database.php";


function getAllBodegas(): array
{
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM bodega ORDER BY nombre");
    $stmt->execute();

    return $stmt->fetchAll();
}
