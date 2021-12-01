<?php
require_once __DIR__ . "/../data/users.php";

header("Content-type: application/json");

echo json_encode([
    "listaAlbum" => $albums
]);
?>