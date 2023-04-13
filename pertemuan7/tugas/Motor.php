<?php 
class Motor {
  public $merk;
  public $bensin;
  public $topSpeed;
  public $cc;

  public function __construct($merk, $bensin, $topSpeed, $cc) {
    $this->merk = $merk;
    $this->bensin = $bensin;
    $this->topSpeed = $topSpeed;
    $this->cc = $cc;
  }
  public function getInfo()
   {
        echo "<hr>Merk: " . $this->merk;
        echo "<br>Bensin: " . $this->bensin;
        echo "<br>TopSpeed: " . $this->topSpeed;
        echo "<br>CC: " . $this->cc;
   }


  public function jalan($jarak) {
    $bensinDibutuhkan = $jarak / 50; // (1 liter bensin untuk 50km)
    $this->bensin -= $bensinDibutuhkan;
  }
}
$motor = new Motor("Honda Scoopy", 4, 115, 110);
echo "Bensin awal: ".$motor->bensin." liter,\n"; // (Bensin awal: 4 liter)

$motor->jalan(80);
echo "Setelah jalan 80 km, sisa bensin: ".$motor->bensin." liter\n"; // output: Bensin setelah jalan 80 km: 1 liter


$motor->getInfo();

