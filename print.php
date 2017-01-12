<?php
session_start();
 ?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
function createpdfticket($bezeichnung, $preis){
    ob_start();
    require("fpdf/fpdf.php");
    $pdf=new FPDF("P","mm",[58,70]);
    $pdf->SetFont("Helvetica","B",12.5);
    $pdf->AddPage();
    $pdf->Cell(1,1,"EINTRITTSKARTE");
    $pdf->SetFont("Helvetica","B",10);
    $pdf->Cell(1,20,$bezeichnung." (".$preis." EUR)");
    $datum=date("d.m.Y H:i");
    $datumsmall=date("d.m.Y");
    $pdf->Cell(1,34,"Gueltig am ".$datumsmall);
    $pdf->SetFont("Helvetica","B",7);
    $pdf->Cell(1,30,$datum);
    $id=date("dmYHi").strval(rand(1,100));
    $url = 'http://barcode.tec-it.com/barcode.ashx?translate-esc=off&data='.$id.'&code=Code128&unit=Fit&dpi=600&imagetype=Gif&rotation=0&color=000000&bgcolor=FFFFFF&qunit=Mm&quiet=0';
    $img = 'barcode.gif';
    $ch = curl_init($url);
    $fp = fopen($img, 'wb');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_exec($ch);
    curl_close($ch);
    fclose($fp);
    $pdf->Image("barcode.gif",10,36,40);
    $pdf->Output($id.".pdf");
    return $id;
}
function addtickettoprintlist($dateiname){
    $inhalt = $dateiname;

    $handle = fopen ("printinfos.txt", "a+");
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
    echo createpdfticket("normales Ticket","10");
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
