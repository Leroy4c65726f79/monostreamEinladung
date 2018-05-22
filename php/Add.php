<?php
namespace autodo\interfaces\writer;

/**
 *  Writes CSV Data to File
 */
class wfile
{
    public $filename="../Data/names.txt";
    private $filehandle;
    private $counter = 0;

    public function init() {
        $this->filehandle = fopen( $this->filename, "w" );
    }

    public function process($data) {

        $tmp = $data->getCSV();
        fwrite( $this->filehandle, "$tmp\n" );
        $this->counter++;
    }

    public function finish() {
        fclose ($this->filehandle);
        echo "\n".$this->counter." sets written to CSV\n";
    }
}

$write = new wfile();
$write->getCSV('hay');








 ?>
