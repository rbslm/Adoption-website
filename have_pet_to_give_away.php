<?php
session_start();

$dogcat = $_POST['dogcat'];
if(isset($_POST['breedText1'])){
    $breed = $_POST['breedText1'];
}
else if(isset($_POST['breedText2'])){
    $breed = $_POST['breedText2'];
}

$age = $_POST['preferredage'];
$gender = $_POST['gender'];

if(isset($_POST['getAlong'])){
    $getalongarr = $_POST['getAlong'];
    $getAlong = implode(", ", $getalongarr);
}
else{
    $getAlong = null;
}
$moreinfo = $_POST['moreinfo'];
$firstname = $_POST['firstName'];
$familyName = $_POST['familyName'];
$email = $_POST['email'];

if(!file_exists("availablepets.txt")){
    $petcount = 0;
}
else{
    $petfile = file("availablepets.txt", FILE_IGNORE_NEW_LINES); 
    $lastpet = $petfile[sizeof($petfile)-1];
    $petcount = substr($lastpet, 0, 1);
    $petcount++;
}

$username = $_SESSION['username'];

if($moreinfo == ""){
    $petinfo = $petcount.":".$username.":".$dogcat.":".$breed.":".$age.":".$gender.":".$getAlong.":".$firstname.":".$familyName.":".$email."\n";
}
else{
    $petinfo = $petcount.":".$username.":".$dogcat.":".$breed.":".$age.":".$gender.":".$getAlong.":".$moreinfo.":".$firstname.":".$familyName.":".$email."\n";
}

$file = fopen('availablepets.txt', 'a');
fwrite($file, $petinfo);
fclose($file);
include("haveAPetToGiveAway.php");
echo "<script>document.getElementById('form2').innerHTML = '<p>Pet registered.</p>';</script>";
?>