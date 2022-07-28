<?php
    require __DIR__ . '/database.php';
    
    if(empty($_GET['genre']) || $_GET['genre'] === 'all') {
        header('Content-Type: application/json');
        echo json_encode($discsArray);
    } else {
        $filteredArray = [];
    
        foreach($discsArray as $disc) {
            if($disc['genre'] === $_GET['genre']) {
                $filteredArray[] = $disc;
            }
        }
    
        header('Content-Type: application/json');
        echo json_encode($filteredArray);
    }
?>