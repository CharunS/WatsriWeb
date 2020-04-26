<?php 

    $actionName = $_POST['ActionName'];
    $parmArr= $_POST['ParamArr'];

    switch ($actionName) {
        case "CreateFile":
            CreateFile();
            break;
    }

    function CreateFile(){
        try{
            $myfile = fopen("../UserMaintenance/newfile.txt", "w") or die("Unable to open file!");
            $txt = "John Doe\n";
            fwrite($myfile, $txt);
            $txt = "Jane Doe\n";
            fwrite($myfile, $txt);
            fclose($myfile);
            $output['status'] = 'ok';
        }
        catch(Exception $e){
            $output['status'] = 'fail';
        }
        echo json_encode($output);
    }
     
?>