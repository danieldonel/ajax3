<?php
// Get the data sent via AJAX
$matricula = $_POST["matricula"];
$nome = $_POST["nome"];

// Do any necessary processing with the data (you can save it to a database, for example)

// Return the data as JSON to the JavaScript function
$response = array(
    "matricula" => $matricula,
    "nome" => $nome
);

echo json_encode($response);
?>
