<h3>ค้นหา</h3>

<body bgcolor="#ffff66">
	<form action="search.php" method="post">
	ID <input name="id" size="40">
	<input type="submit" value="Search">
<?php
$num=0;
$xml= simplexml_load_file("student.xml");
foreach($xml->children() as $student)
{
$id=$student->id;
$name=$student->name;
$address=$student->address;
$tel=$student->tel;
$major=$student->major;
$num++;
}
echo "<input name=\"num\" size=\"10\" value=\"$num\" hidden>";

?>

</form>
<<<a href="add_db.php">Home</a>