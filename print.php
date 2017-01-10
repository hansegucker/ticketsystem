<?php
session_start();
 ?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
function createpdfticket(bezeichnung, preis){

}
function addtickettoprintlist(dateiname){
    $inhalt = "generalp1";

    $handle = fopen ("general.txt", "w");
    fwrite ($handle, $inhalt);
    fclose ($handle);

}
if(isset($_SESSION["payok"])){
  if($_SESSION['art1']<>0){
  for($i=0;$i<$_SESSION['art1'];$i++){
    echo "<h3>TICKET</h3>";
    echo "normales Ticket<br><b>10€</b><br>";
    echo "|||||||||||||<br>";
    echo "|||||||||||||<br>";
    echo "7647623483748<br>";
    echo "-->-->-->-->--<br>";
  }}
  if($_SESSION['art2']!=0){
  for($i=0;$i<$_SESSION['art2'];$i++){
    echo "<h3>TICKET</h3>";
    echo "Kinderticket<br><b>5€</b><br>";
    echo "|||||||||||||<br>";
    echo "|||||||||||||<br>";
    echo "7647623483748<br>";
    echo "-->-->-->-->--<br>";
  }}
  if($_SESSION['art3']!=0){
  for($i=0;$i<$_SESSION['art3'];$i++){
    echo "<h3>TICKET</h3>";
    echo "Studententicket<br><b>7€</b><br>";
    echo "|||||||||||||<br>";
    echo "|||||||||||||<br>";
    echo "7647623483748<br>";
    echo "-->-->-->-->--<br>";
  }}
  if($_SESSION['art4']!=0){
  for($i=0;$i<$_SESSION['art4'];$i++){
    echo "<h3>TICKET</h3>";
    echo "Seniorenticket<br><b>9€</b><br>";
    echo "|||||||||||||<br>";
    echo "|||||||||||||<br>";
    echo "7647623483748<br>";
    echo "-->-->-->-->--<br>";
  }}
  echo "<script>window.print();location.href='start.php';</script>";
}
?>
</body>
</html>
