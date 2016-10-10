<html>
<head>
	<title>Book Store</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('bookstore');
$result = mysql_query("SELECT * FROM books");

print "<h1>Books List</h1>";
print "<ul>";
while($data = mysql_fetch_array($result)) {
	print "<li>$dat[book_name] : Rp. $data[book_price]</li>";
}
print "</ul>";
?>
<a href="order.php">[order]</a>
</body>
</html>