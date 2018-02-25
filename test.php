<!DOCTYPE html>
<html>
<head>
	<title>Latihan Membuat dan Membaca File .DBF</title>
</head>
<body>

<?php

// database "definition"
/**
$daftar_field = array(
  array("Barang",		"C", 25),
  array("Tgl_beli",		"D"),
  array("Jumlah",      	"N", 2, 0),
  array("Harga",    	"N", 8, 2)
);
*/
//membuat file
/**
$barang = dbase_create("barang.dbf", $daftar_field);

if (! $barang) {
  echo "File tidak dapat dibuat\n";
  exit;
}
*/
//membuka file
$barang = dbase_open("temp_folder/barang.dbf", 2);

//menambah record
/*
$data = array("TV", "20011003", 3, 1500000.00);
dbase_add_record($barang, $data);

$data = array("Kran", "20011004", 4, 7500.00);
dbase_add_record($barang, $data);

$data = array("Ubin", "20010225", 10, 25000.00);
dbase_add_record($barang, $data);
*/

//menghapus barang
/**
dbase_delete_record($barang, 2);
*/

//menampilkan data
print("<table border=\"2\">\n");

$jum_record = dbase_numrecords($barang);
$jum_field = dbase_numfields($barang);

for ($i=1; $i<=$jum_record; $i++) {
	//memperoleh record
	$record = dbase_get_record($barang, $i);

	//mengawali baris
	print("<tr>\n");

	for ($field=0; $field < $jum_field ; $field++) { 
		print("<td>$record[$field]</td>");
	}

	//menampilkan keterangan terhapus/tidak
	if ($record["deleted"] == 1) {
		print("<td>Terhapus </td>");
	} else {
		print("<td>Tidak terhapus </td>");
	}

	//menutup baris
	print("</tr>\n");
}

print("</table>\n");

//menutup file barang
dbase_close($barang);

?>

</body>
</html>

