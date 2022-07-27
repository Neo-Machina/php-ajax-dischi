<?php
    require __DIR__ . '/database.php';
    $genreParameter = $_GET['genre'];
    $filteredArray = [];
    
    if($genreParameter) {
        $filteredArray = array_filter($discsArray, function ($disc) use ($genreParameter) {
            return (strtolower((string)$disc['genre']) == $genreParameter);
        });

        header('Content-Type: application/json');
        echo json_encode($filteredArray);
    } else {
        header('Content-Type: application/json');
        echo json_encode($discsArray);
    }
?>