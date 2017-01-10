<html>
<body>
<?php
ob_start();
require("fpdf/fpdf.php");
$pdf=new FPDF("P","mm",[58,70]);
$pdf->SetFont("Helvetica","B",12.5);
$pdf->AddPage();
$pdf->Cell(1,1,"EINTRITTSKARTE");
$pdf->SetFont("Helvetica","B",10);
$pdf->Cell(1,20,"Kinderticket (10 EUR)");
$datum=date("d.m.Y H:i");
$datumsmall=date("d.m.Y");
$pdf->Cell(1,34,"Gueltig am ".$datumsmall);
$pdf->SetFont("Helvetica","B",7);
$pdf->Cell(1,30,$datum);
$url = 'http://barcode.tec-it.com/barcode.ashx?translate-esc=off&data=ABC-abc-1234&code=Code128&unit=Fit&dpi=600&imagetype=Gif&rotation=0&color=000000&bgcolor=FFFFFF&qunit=Mm&quiet=0';
$img = 'barcode.gif';
$ch = curl_init($url);
$fp = fopen($img, 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
$pdf->Image("barcode.gif",10,36,40);
$pdf->Output();
?>
</body>
</html>
