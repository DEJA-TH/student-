

<?php
 $xml = simplexml_load_file('student.xml');
 if(isset($_POST['submitSave'])){
 foreach($xml->student as $student){
 if($student['id']==$_POST['id']){
 $student->name=$_POST['name'];
 $student->address=$_POST['address'];
 $student->tel=$_POST['tel'];
 $student->major=$_POST['major'];

 break;
 }
 }
 file_put_contents('student.xml',$xml->asXML());
 header('location:showxml.php');
}
foreach($xml->student as $student){
 if($student['id']==$_GET['id']){
$id=$student['id'];
$name = $student->name;
$address = $student->address;
$tel = $student->tel;
$major= $student->major;

break;
}
}
?>
<form method="post">
id : <input type="text" name="id" value="<?echo $id?>"><br>
 Name : <input type="text" name="name" value="<?echo $name?>"><br>
  Address : <input type="text" name="address" value="<?echo $address?>"><br>
 Tel : <input type="text" name="tel" value="<?echo $tel?>"><br>
  Major : <input type="text" name="major" value="<?echo $major?>"><br>


<input type="submit" name="submitSave" value="save">
</form>