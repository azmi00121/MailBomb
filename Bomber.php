<?php
 
if(isset($_POST['ok'])){
 
 
$send = 1;
$to = $_POST['to'];
$kim = $_POST['kim'];
$subject = $_POST['subject'];
$msg  = $_POST['msg'];

while($send<=$kim){
mail ($to, $subject, $msg);
echo $send . " Gonderildi!, ";
$send++;
}

echo'Tum mailler Gonderildi !';


}

?>

<form action="" method="post">
<input type="text" name="to" placeholder="Kime"/><br>
<input type="text" name="nombre" placeholder="Kimden"/><br>
<input type="text" name="subject" placeholder="kONU"/><br>
<TEXTAREA NAME="msg" placeholder="Mesaj"></TEXTAREA><br>
<input type="submit" value="Baslat" name="ok"/>
</form>
