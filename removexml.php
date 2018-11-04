<?php
$dom = new DomDocument();
$dom->load("student.xml");
$root = $dom->documentElement;
$students = $root->getElementsByTagName("student");
$a=$_GET['id']; // id for delete
echo "$a";
foreach($students as $p)
{
$pid = $p->getAttribute("id");
if ($pid == $a)
{
$parent = $p->parentNode;
$parent->removeChild($p);
}
}
 Header("Location:showxml.php");
echo $dom->saveXML();
$dom->save('student.xml');
?>