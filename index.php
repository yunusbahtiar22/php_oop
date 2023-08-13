<?php

define('PHI', 3.14);

abstract class BangunDatar
{
  abstract public function area();
  abstract public function circumference();
  abstract public function enlarge($faktor);
  abstract public function shrink($faktor);
}

class Lingkaran extends BangunDatar
{

  public $jari_jari;

  public function __construct($jari_jari)
  {
    $this->jari_jari = $jari_jari;
  }

  public static function describe(Lingkaran $bangun_datar)
  {
    echo "Bangun datar ini adalah Lingkaran yang memiliki jari-jari $bangun_datar->jari_jari cm" . "<br />";
  }

  public function area()
  {
    return PHI * $this->jari_jari * $this->jari_jari;
  }

  public function circumference()
  {
    return 2 * PHI * $this->jari_jari;
  }

  public function enlarge($faktor)
  {
    $this->jari_jari *= $faktor;
    return $this;
  }

  public function shrink($faktor)
  {
    $this->jari_jari /= $faktor;
    return $this;
  }
}

class PersegiPanjang extends BangunDatar
{
  public $panjang;
  public $lebar;

  public function __construct($panjang, $lebar)
  {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
  }

  public static function describe(PersegiPanjang $bangun_datar)
  {
    echo "Bangun datar ini adalah Persegi Panjang yang memiliki panjan $bangun_datar->panjang dan lebar $bangun_datar->lebar cm" . "<br />";
  }

  public function area()
  {
    return $this->panjang * $this->lebar;
  }

  public function circumference()
  {
    return 2 * ($this->panjang + $this->lebar);
  }

  public function enlarge($faktor)
  {
    $this->panjang *= $faktor;
    $this->lebar *= $faktor;
    return $this;
  }

  public function shrink($faktor)
  {
    $this->panjang /= $faktor;
    $this->lebar /= $faktor;
    return $this;
  }
}

class Persegi extends BangunDatar
{

  public $sisi;

  public function __construct($sisi)
  {
    $this->sisi = $sisi;
  }

  public static function describe(Persegi $bangun_datar)
  {
    echo "Bangun datar ini adalah Persegi yang memiliki sisi $bangun_datar->sisi cm" . "<br />";
  }

  public function area()
  {
    return $this->sisi * $this->sisi;
  }

  public function circumference()
  {
    return 4 * $this->sisi;
  }

  public function enlarge($faktor)
  {
    $this->sisi *= $faktor;
    return $this;
  }

  public function shrink($faktor)
  {
    $this->sisi /= $faktor;
    return $this;
  }
}

$lingkaran = new Lingkaran(40);
$persegi_panjang = new PersegiPanjang(50, 20);
$persegi = new Persegi(30);

Lingkaran::describe($lingkaran);
echo "luas linkaran adalah: " . $lingkaran->area() . " cm" . "<br />";
echo "keliling linkaran adalah: " . $lingkaran->circumference() . " cm" . "<br />";
echo "luas linkaran setelah diperbesar 2x: " . $lingkaran->enlarge(2)->area() . " cm" . "<br />";
echo "luas linkaran setelah diperkecil 2x: " . $lingkaran->shrink(2)->area() . " cm" . "<br />";

PersegiPanjang::describe($persegi_panjang);
echo "luas persegi panjang adalah: " . $persegi_panjang->area() . " cm" . "<br />";
echo "keliling persegi panjang adalah: " . $persegi_panjang->circumference() . " cm" . "<br />";
echo "luas persegi panjang setelah diperbesar 2x: " . $persegi_panjang->enlarge(2)->area() . " cm" . "<br />";
echo "luas persegi panjang setelah diperkecil 2x: " . $persegi_panjang->shrink(2)->area() . " cm" . "<br />";

Persegi::describe($persegi);
echo "luas persegi adalah: " . $persegi->area() . " cm" . "<br />";
echo "keliling persegi adalah: " . $persegi->circumference() . " cm" . "<br />";
echo "luas persegi setelah diperbesar 2x: " . $persegi->enlarge(2)->area() . " cm" . "<br />";
echo "luas persegi setelah diperkecil 2x: " . $persegi->shrink(2)->area() . " cm" . "<br />";
