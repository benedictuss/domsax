<?php
$databarang = simplexml_load_file('barang.xml');

	foreach ($databarang->barang as $barang) {
		echo "Barang : ".$barang."<br>";
		echo "Kode : ".$barang->kode."<br>";
		echo "Satuan : ".$barang->satuan."<br>";
		echo "Harga : ".$barang->harga."<br>";
		echo "Asal : ".$barang->asal."<br>";
		echo "Pt : ".$barang->asal->pt."<br>";
		echo "Kodewil : ".$barang->asal->kodewil."<br>";
		echo "Tujuan : ".$barang->asal."<br>";
		echo "Pt : ".$barang->tujuan->pt."<br>";
		echo "Kodewil : ".$barang->tujuan->kodewil."<br>";
	}

?>