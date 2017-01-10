<?php
session_start();
 ?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Bitte scannen sie ihre Karte ein!</h1>
<?php
include("zugriff.inc.php");
if(!empty($_POST['barcode'])){
  $barcode=$_POST['barcode'];
  if($barcode=="0000000000028"){
      echo "<div class='error'>Alles OK!</div>";
      $inhalt = "oeffnenbitte";

      $handle = fopen ("status.txt", "w");
      fwrite ($handle, $inhalt);
      fclose ($handle);

  }else{
      echo "<div class='error'>Bitte versuchen sie es nochmal!</div>";
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
