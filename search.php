<body>
<style>
 td {
  text-align: center;
 background-color: white;
 color: #000000;
}
</style>
<a href="add_db.php">Home</a>
<center><table border="1">

<br>
<table border="1">
<?php
$x=0;
$id=$_POST['id'];
$num=$_POST['num'];
//echo "sss $id $num";
echo "  <tr><td>ID<td>Name<td>address<td>Tel<td>major<br>";
$xml= simplexml_load_file("student.xml");
foreach($xml->children() as $student){
if($student->id==$id){ 
$id=$student->id;
$name=$student->name;
$address=$student->address;
$tel=$student->tel;
$major=$student->major;

echo "  <tr> <td>$id <td>$name<td>$address<td>$tel<td>$major<br>";
echo "<td><a href=\"edit.php?id=$id\">edit</a>";
echo "<td><a href=\"removexml.php?id=$id \">delete</a>";
break;
//echo "</table></center>";
	}else if($x==$num-1){
	echo "</table>";
	echo"ไม่พบข้อมูล";
	//echo "</table></center>";
	}

	$x++;
}


//echo "$x";
?>