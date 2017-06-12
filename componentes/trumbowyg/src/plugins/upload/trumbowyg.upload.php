<?php
/* ===========================================================
 * trumbowyg.upload.php
 * Upload plugin for Trumbowyg
 * http://alex-d.github.com/Trumbowyg
 * ===========================================================
 * Author : Alexandre Demode (Alex-D)
 *          Twitter : @AlexandreDemode
 *          Website : alex-d.fr
 * ===========================================================
 * /!\ This file was make just for tests. Do not use it in
 *     production because it is not secure.
 */
/**
 * Upload directory
 */
define("UPLOADDIR", "");
// Detect if it is an AJAX request
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
    $file = array_shift($_FILES);

    if(move_uploaded_file($file['tmp_name'], UPLOADDIR . basename($file['name']))) 
    {
        $file = dirname($_SERVER['PHP_SELF']) . str_replace('./', '/', UPLOADDIR).'/'.$file['name'];
        echo '{"data":{"link":"http://www.sisweb.com.br/'.$file.'"},"success":true,"status":200}';
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







