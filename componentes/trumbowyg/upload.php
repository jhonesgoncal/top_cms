<script src="dist/plugins/upload/trumbowyg.upload.js"></script>
<?php
require "../../config.php";
$retorno = $retorno_config['base_url'];

define("UPLOADDIR", "");
        // Detect if it is an AJAX request
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
        {
            $file = array_shift($_FILES);
             
            if(move_uploaded_file($file['tmp_name'],  'img/'.basename($file['name']))) 
            {              
                $retorno = $retorno_config['base_url'];
                echo '{"data":
                        {"link":"'.$retorno.'componentes/trumbowyg/img/'.$file['name'].'"},"success":true,"status":200}';
            } 
            else
            {
                $error = true;
                $data = array('message' => 'uploadError');
                echo json_encode($data);
            }
        }
        else 
        {
            $data = array('message' => 'uploadError1');
            echo json_encode($data);
        }
?>
<input type="text" value="<?=$retorno?>" id="url">