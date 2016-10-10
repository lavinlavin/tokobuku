<html>
<head>
	<title>Book Store</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$buku = $_POST['buku'];
$jumlah = $_POST[jumlah];

mysql_connect('localhost', 'root', '');
mysql_select_db('bookstore');
mysql_query("INSERT INTO orders (order_name, order_address, book_id, order_amount)VALUES ('$nama', '$alamat', '$buku', '$jumlah')");

$result = mysql_query("SELECT * FROM books WHERE book_id = '$buku'");
$data = mysql_fetch_array($result);
$total = $jumlah * $data['book_price'];

print "<h2>Terima kasih !!</h2>";
print "<p>Anda telah berhasil melakukan pembelian, berikut data pembelian Anda:</p>";
print "<p>Nama : $nama</p>";
print "<p>Alamat : $alamat</p>";
print "<p>Buku : $data[book_name]</p>";
print "<p>Harga : $jumlah x $data[book_price] = $total</p>";
?>
</body>
</html>