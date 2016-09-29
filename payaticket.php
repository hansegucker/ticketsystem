<?php
session_start();
 ?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Tickets kaufen - Bitte bestätigen sie ihre Tickets aus!</h1>
<h2>Hier ist ihre Bestellung:</h2>
<?php
$art1label="normales Ticket";
$art2label="Kinderticket";
$art3label="Studententicket";
$art4label="Seniorenticket";
$art1price=10;
$art2price=5;
$art3price=7;
$art4price=9;
if(isset($_POST["checkoutgo"])){
  $art1=intval($_POST["art1"]);
  $art2=intval($_POST["art2"]);
  $art3=intval($_POST["art3"]);
  $art4=intval($_POST["art4"]);
  $_SESSION["art1"]=$art1;
  $_SESSION["art2"]=$art2;
  $_SESSION["art3"]=$art3;
  $_SESSION["art4"]=$art4;
  if($art1<0 || $art2<0 || $art3<0 || $art4<0){
    echo "<script>alert('Angaben sind nicht korrekt! Bitte erneut probieren!');location.href='start.php';</script>";
  }else {
    $art1summe=$art1*$art1price;
    $art2summe=$art2*$art2price;
    $art3summe=$art3*$art3price;
    $art4summe=$art4*$art4price;
    $gesamtsumme=$art1summe+$art2summe+$art3summe+$art4summe;
    $_SESSION["gesamtsumme"]=$gesamtsumme;
    echo "<h2>";
    echo $art1."x ".$art1label."(".$art1."€) = ".$art1summe." €<br>";
    echo $art2."x ".$art2label."(".$art2."€) = ".$art2summe." €<br>";
    echo $art3."x ".$art3label."(".$art3."€) = ".$art3summe." €<br>";
    echo $art4."x ".$art4label."(".$art4."€) = ".$art4summe." €<br>";
    echo "---------------------------------------------------------------------------------<br>";
    echo "SUMME                                                = ".$gesamtsumme." €</h2>";

  }
}else{
  echo "<script>location.href='start.php';</script>";
}
?>
<form action="paywithcard.php" method="post">

<input type="submit" name="paywithcard" value="Jetzt mit Karte zahlen!" class="normalbutton">
</form>
</body>
</html>
