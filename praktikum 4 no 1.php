<!-- Nama   : Ahmad Daniyal Fayyadh -->
<!-- NIM    : 20051397037 -->
<!-- Kelas  : 2020 A - D4 Manajemen Informatika -->


<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="No 1.css">
    <title>Praktikum_4</title>
</head>
<body>
<div class="container">
<h1>Soal nomor 1</h1>
<?php

class Orang{
    protected $nama,$umur;

    public function __construct($nama,$umur){

    $this->nama = $nama;
    $this->umur = $umur;
    }
}

class Dosen extends Orang{
    private $nip;
    
    public function __construct($nama, $umur, $nip){
    $this->nip = $nip;
    parent::__construct($nama, $umur);    
    }

    public function hasil(){
        return $this->nama . ' berumur ' . $this->umur. ' dengan NIP ' . $this->nip;
    }
}

$dosen1 = new Dosen('Ahmad', 40, 20051397037); 
$dosen2 = new Dosen('Daniyal', 50, 20051397038);
$dosen3 = new Dosen('Fayyadh', 60, 20051397039);

echo $dosen1->hasil();
echo '<br> <br>';
echo $dosen2->hasil();
echo '<br> <br>';
echo $dosen3->hasil();
echo '<br> <br>';

?>
<!-- Akhir Program PHP -->
</div>
</body>
</html>