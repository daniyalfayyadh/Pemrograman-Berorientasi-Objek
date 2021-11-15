<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak_5</title>
</head>
<body>
    <div class="container">
        <h2>Soal Nomor 1</h2>

        <?php
class Pegawai
{
	public $nama;
	public	function __construct($nama)
	{
		$this->nama = $nama;
	}
	public	function getNama()
	{
		return $this->nama;
	}
}
class Manajer extends Pegawai
{
	public $tunjangan;
	public	function __construct($nama, $tunjangan)
	{
		parent::__construct($nama);
		$this->tunjangan = $tunjangan;
	}
	public	function getTunjangan()
	{
		return $this->tunjangan;
	}
}
class Kurir extends Pegawai
{
	public $gaji;
	// public	function __construct($nama)
	// {
	// 	parent::__construct($nama);
	// }
	// public	function __construct($nama, $gaji)
	// {
	// 	parent::__construct($nama);
	// 	$this->gaji = $gaji;
	// }

    public	function __construct($nama, $gaji)
	{
		parent::__construct($nama);
		// $this->bonus = $bonus;
		$this->gaji = $gaji;

	}
	public	function getGaji()
	{
		return $this->gaji;
	}
}
class Soal1
{
	public static
	function Proses($peg)
	{
		if ($peg instanceof Manajer)
		{
			$man = $peg;
			echo "<br>Nama manajer: ".$man->nama, "\n";
			echo "<br>Tunjangan: Rp. ".strval($man->tunjangan), "\n";
		}
		else if ($peg instanceof Kurir)
		{
			$kur =  $peg;
			echo "<br>Nama kurir: ".$kur->nama, "\n";
			echo "<br>Gaji: Rp. ".strval($kur->gaji), "\n";
		}
	}
	public static
	function main($args)
	{
		echo "Daniyal 20051397037", "\n";
		$peg1 = new Manajer("Fayyadh", 120000);
		Soal1::Proses($peg1);
		$peg2 = new Kurir("Aulia", 40000);
		Soal1::Proses($peg2);
	}
}
Soal1::main(array());
?>
        <!-- END PHP  -->
    </div>
</body>
</html>