<?php

class wfile {
    public $filename="../Data/names.txt";
    private $filehandle;

    public function process($data) {
        $obuffer = file_get_contents($this->filename);
        $buffer = $obuffer . $data;
        file_put_contents($this->filename, $buffer);

    }
}


$ip = $_SERVER['REMOTE_ADDR'];
$name = preg_replace('/[^A-Za-z0-9\-]/', '', $_POST["m_f_name"]);
$ammount = preg_replace('/[^A-Za-z0-9\-]/', '', $_POST["m_f_anual"]);





$buffer = " ". date('d-m-Y G-i-s') . ":;:".$name.":;:".$ammount.":;:".$ip.":%;%:\n";

$write = new wfile();
$write->process($buffer);

header('Location: ../angemeldet');





 ?>
