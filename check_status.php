<?php
require "db.php";

// Verificar o valor atual da coluna para determinar se a calibração foi concluída
$result = $conn->query("SELECT booleano FROM parametros WHERE parametro = 'calibrar'");
$row = $result->fetch_assoc();

if ($row['booleano'] == 0) {
    // Se for 0, significa que a calibração foi concluída
    echo json_encode(array("status" => "complete"));
} else {
    // Se ainda for 1, significa que ainda está calibrando
    echo json_encode(array("status" => "calibrating"));
}

$conn->close();
?>
