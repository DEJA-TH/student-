<center><h2>ดูข้อมูลผู้สมัคร</h2></center><hr>
 เพิ่มข้อมูล 
<?php

echo "<table>";
echo "<form method=\"post\" action=\"addxml.php\">";
echo"<tr><td>ID<td><input name=\"id\">";	
echo"<tr><td>Name<td><input name=\"name\">";	
echo"<tr><td>Address<td><input name=\"address\">";	
echo"<tr><td>Tel<td><input name=\"tel\">";	
echo"<tr><td>Major<td><input name=\"major\">";	
echo"<tr><td><td><input type=\"submit\" value=\"Add\">";	
echo"</form>";
echo "</table><br>";
$num1=0;
$num2=0;
$mj1="วิทยาการคอมพิวเตอร์";
$mj2="เทคโนโลยีสารสนเทศ";
$xml=simplexml_load_file("student.xml") or die("Error: Cannot create object"); 
echo "<table border=\"1\">";
echo "สาขาวิทยาการคอมพิวเตอร์<br>";
//echo "$mj1<br>";
echo "  <tr><td>No.<td>ID<td>Name<td>address<td>Tel<br>";

foreach($xml->children() as $students){

if($students->major==$mj1){
$num1++;
echo "<tr><td>$num1" ; 
echo "<td>".$students->id ; 
echo "<td>".$students->name; 
echo "<td>".$students->address; 
echo "<td>".$students->tel;
//echo "<td>".$students->major; 
echo "<td><a href=\"edit.php?id=" . $students['id'] . "\">edit</a>";
echo "<td><a href=\"removexml.php?id=" . $students['id'] . "\">delete</a>";
}
}
echo "</table><br>";
//it
echo "<table border=\"1\">";
echo "สาขาเทคโนโลยีสารสนเทศ<br>";
//echo "$mj1<br>";
echo "  <tr><td>No.<td>ID<td>Name<td>address<td>Tel<br>";

foreach($xml->children() as $students){

if($students->major==$mj2){
$num2++;
echo "<tr><td>$num2" ; 
echo "<td>".$students->id ; 
echo "<td>".$students->name; 
echo "<td>".$students->address; 
echo "<td>".$students->tel;
//echo "<td>".$students->major; 
echo "<td><a href=\"edit.php?id=" . $students['id'] . "\">edit</a>";
echo "<td><a href=\"removexml.php?id=" . $students['id'] . "\">delete</a>";
}
}
echo "</table>";
?>

<br>
</form>
<a href="add_db.php">home</a>