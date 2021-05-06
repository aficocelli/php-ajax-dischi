<?php 

    include __DIR__ . '/db.php';

    

   
    

    if( isset($_GET["genere"]) ){

        $genere = $_GET["genere"];
        $temp=[];

        foreach($album as $item){

            if($genere == $item["genre"]){

                $temp[] = $item;
            }
            
        }
        // var_dump($temp);
        $album = $temp;
    }


    header('Content-Type: application/json');

    echo json_encode($album);
    
?>