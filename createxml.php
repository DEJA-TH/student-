<?
echo "ข้อมูลใน database<br>";
include "con_1.php";
$sql="select *from student";
$result=mysql_query($sql);
$num=mysql_numrows($result);
$i=0;

$dom = new DomDocument('1.0','utf-8');
//$dom->load('person.xml');
 $students = $dom->createElement('students'); // ครัง้ ที่สองไม่ต้องใส่
 $dom -> appendChild($students);

while($i<$num){
$rows=mysql_fetch_array($result);
$id=$rows['id'];
$name=$rows['name'];
$address=$rows['address'];
$tel=$rows['tel'];
$major=$rows['major'];
echo "$id $name $address $tel $major<br>";
///
$student=$dom->createElement('student');
$student->setAttribute("id",$id);
$students->appendChild($student);

$id=$dom->createElement('id',$id);
$student->appendChild($id);
 $name=$dom->createElement('name',$name);
$student->appendChild($name);
 $address=$dom->createElement('address',$address);
$student->appendChild($address);
 $tel=$dom->createElement('tel',$tel);
$student->appendChild($tel);

 $major=$dom->createElement('major',$major);
$student->appendChild($major);

$i++;
}
$dom->saveXML();
 $dom->save('student.xml');
  Header("Location:add_db.php");
?>
<a href="add_db.php">home</a>