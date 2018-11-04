<?php
include "con_1.php";
$xml=simplexml_load_file("student.xml") or die("Error: Cannot create object"); 
echo "พยาบาล<br>";
echo "  <tr><td>No.<td>ID<td>Name<td>address<td>Tel<br>";
$num3=0;
$mj2="พยาบาล";
foreach($xml->children() as $students){

if($students->major==$mj3){
$num3++;
echo "<tr><td>$num3" ; 
echo "<td>".$students->id ; 
echo "<td>".$students->name; 
echo "<td>".$students->address; 
echo "<td>".$students->tel;
echo "<td><a href=\"edit.php?id=" . $students['id'] . "\">edit</a>";
echo "<td><a href=\"removexml.php?id=" . $students['id'] . "\">delete</a>";
}
}
echo "</table>";
?>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<center>
<a href="add_db.php">Home</a>
</center>