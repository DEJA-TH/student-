<?php
include "con_1.php";
$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$tel=$_POST['tel'];
$major=$_POST['major'];
echo "$id $name  $address $tel $major";
$xml= simplexml_load_file("student.xml");
$student=$xml->addchild('student');
$student->addchild('id',$id);
$student->addAttribute('id',$id);
$student->addchild('name',$name);
$student->addchild('address',$address);
$student->addchild('tel',$tel);
$student->addchild('major',$major);
file_put_contents('student.xml',$xml->asXMl());
 Header("Location:showxml.php");
?>