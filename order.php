<html>
<head>
	<title>Book Store</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h1>Order</h1>
<form method="post" action="order_process.php">
	<p>
		Nama: <br />
		<input type="text" name="nama">
	</p>
	
	<p>
		Alamat: <br />
		<textarea name="alamat"></textarea>
	</p>
	
	<p>
		Buku: <br />
		<select name="buku">
		<?php
		mysql_connect('localhost', 'root', '');
		mysql_select_db('bookstore');
		$result = mysql_query("SELECT * FROM books");
		while($data = mysql_fetch_array($result)) {
			print "<option value ='$data[book_id]'>$data[book_name]: Rp. $data[book_price]</option>";
		}
		?>
		</select>
		</p>
		
		<p>
			Jumlah: <br />
			<input type="text" name="jumlah" size="5">
		</p>
		
		<p>
			<input type="submit" value="Beli" class="button">
		</p>
</form>
</body>
</html>