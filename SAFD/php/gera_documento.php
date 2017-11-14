<?php

    # capturando valores
    $protocolo = $_POST['protocolo'];
    $setor = $_POST['setor'];        
    $data = $_POST['data'];
    $siape = $_POST['siape'];
    $solicitante = $_POST['solicitante'];
    $campus = $_POST['campus'];
    
    $observacoes = $_POST['observacoes'];        
    $grupo = $_POST['grupo'];
    $item =  $_POST['item'];
    $especificacoes = $_POST['especificacoes'];
    
    # mostrando variaveis
    echo "protocolo: " . $protocolo . "<br>";
    echo "setor: " . $setor . "<br>";
    echo "data: " . $data . "<br>";
    echo "siape: " . $siape . "<br>";
    echo "solicitante: " . $solicitante . "<br>";
    echo "campus: " . $campus . "<br>";
    
    echo "observacoes: " . $observacoes . "<br>";
    echo "grupo: " . $grupo . "<br>";
    echo "item: " . $item . "<br>";
    echo "especificacoes: " . $especificacoes . "<br>";
        
?>