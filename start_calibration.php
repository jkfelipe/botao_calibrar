<?php
require "db.php";

// Atualizar o valor no banco para iniciar a calibração (true -> false, por exemplo)
$sql = "UPDATE parametros SET booleano = 1 WHERE parametro = 'calibrar'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("status" => "started"));
} else {
    echo json_encode(array("status" => "error", "message" => "Erro ao iniciar calibração"));
}

$conn->close();
?>
