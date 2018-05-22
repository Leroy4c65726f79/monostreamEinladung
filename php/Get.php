<?php

class get {
    public $filename="../Data/names.txt";
    private $filehandle;

    public function CalcTextBig() {
        $obuffer = file_get_contents($this->filename);
        $line = explode(":%;%:", $obuffer);
        // print_r($line);

        foreach ($line as &$value) {
          $tempr = explode(":;:", $value);
        echo '<div class="Zeile">
              <div class="l_e Zeit">'.$tempr[0].'</div>
              <div class="l_e Name">'.$tempr[1].'</div>
              <div class="l_e Personen">'.$tempr[2].'</div>
              <div class="l_e IP">'.$tempr[3].'</div>
            </div>';
            $personeng += intval($tempr[2]);
            $tempr = "";

          }
          echo '<div class="Zeile">
          <div class="l_e Zeit">-</div>
          <div class="l_e Name">-</div>
          <div class="l_e Personen">Insgeesamt: '.$personeng.'</div>
          <div class="l_e IP">-</div>
          </div>';


    //
    //     foreach ($line as $key => $value) {
    //       // code...
    //       $line = explode(":;:", $obuffer);
    //       array_push($persones, $line);
    //       print_r($persones);
    // }
  }
    public function CalcTextsSmal() {

        }
}


?>


<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <title>Angemeldete Personen</title>
  </head>
  <body>
    <div class="m_t">
      Diese Personen haben sich Angemeldet:
    </div>


    <div class="tz Zeile">
          <div class="l_e Zeit">Zeit:</div>
          <div class="l_e Name">Name:</div>
          <div class="l_e Personen">Anzahl:</div>
          <div class="l_e IP">Ip:</div>
        </div>

      <?php

      $get = new get();
      $get->CalcTextBig();
      $get->CalcTextsSmal();



       ?>

<style media="screen">
  body {
    margin: 0;
    padding: 0;
    background-color: #414F90;
    font-family: 'Source Sans Pro', sans-serif;
    box-sizing: border-box;
    overflow: hidden;
  }
  .m_t {
    width: 100%;
    text-align: left;
    padding: 25px;

    margin-bottom: 40px;
    margin-top: 40px;
color: #FBE6C3;
font-size: 30px;
  }
  .Zeile {
    width: calc(100% - 200px);
    line-height: 2;
    vertical-align: middle;
    border-bottom: 1px #FBE6C3 solid;
    height: 30px;
    color: #FBE6C3;
    margin-left: 200px;
  }
  .l_e {
    padding-left: 3px;
    display: inline-block;
    box-sizing: border-box;
    width: 200px;
    height: 100%;
    border-left: 1px #FBE6C3 solid;
    text-align: left;

  }
  .tz {
    border-top: 1px #FBE6C3 solid;
  }
</style>


  </body>
</html>
