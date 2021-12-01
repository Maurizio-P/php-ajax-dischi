<?php
require_once __DIR__ . "/../data/albums.php";

header("Content-type: application/json");

echo json_encode([
    "listaAlbum" => $albums
]);
?>