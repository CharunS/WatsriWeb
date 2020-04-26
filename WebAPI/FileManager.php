<?php 

    $regstration = $_POST['registration'];
    $name= $_POST['name'];
    $email= $_POST['email'];

     echo '<pre>'.print_r($regstration,true).'</pre>';


    if ($regstration == "success"){


        $output['status'] = 'successfuly registered';
    // some action goes here under php
    echo json_encode($output);
    }

    function CreateFile(){
        
    }
     
?>