<?php

    # capturando valores
    $observacoes = $_POST['observacoes'];
    $data = $_POST['data'];
    $siape = $_POST['siape'];
    $campus = $_POST['campus'];
    $protocolo = $_POST['protocolo'];

    # mostrando variaveis
    echo "protocolo: " . $protocolo . "<br>";
    echo "data: " . $data . "<br>";
    echo "campus: " . $campus . "<br>";
    echo "observacoes:" . $observacoes . "<br>";
    echo "siape: " . $siape . "<br>";    
?>