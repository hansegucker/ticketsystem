<?php
session_start();
 ?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Bitte scannen sie ihre Karte ein!</h1>
<h2>Betrag zu zahlen: <?php echo $_SESSION["gesamtsumme"]; ?> €</h2>
<?php
include("zugriff.inc.php");
if(!empty($_POST['barcode']) && !empty($_SESSION['gesamtsumme'])){
  $barcode=$_POST['barcode'];
  if(strlen($barcode)==13){
    $sql="INSERT INTO `konto`(`barcode`, `betrag`) VALUES ('".$barcode."',".$_SESSION['gesamtsumme'].")";
    if(mysqli_query($db,$sql)){
      $payok=1;
    }
    if($payok=1){
      $_SESSION["payok"]=1;
      echo "<script>alert('Angaben sind korrekt!');location.href='print.php';</script>";
    }else{
      echo "<div class='error'>Bitte versuchen sie es später nochmal!</div>";
    }
  }else{
    echo "<div class='error'>Nicht lang genug! Bitte versuchen sie es nochmal!</div>";
  }
}else {
  echo "<div class='error'>Bitte versuchen sie es nochmal!</div>";
}



 ?>
<form action="" method="post">
<input type="text" name="barcode" class="normalbutton" autofocus>
<input type="submit" name="cardpay" value="Jetzt bezahlen!" class="pay">
</form>
</body>
</html>
