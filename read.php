<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

mkdir('/tmp/testeeee/aa/aa/a', 0777, true);

// file_put_contents('/tmp/teste.txt', 'teste');

$file = file_get_contents('/home/gian/Imagens/cone-50cm-lar-bco-pvc_1979.jpeg');

// header('Content-type: image/jpg');
// echo $file;
 
