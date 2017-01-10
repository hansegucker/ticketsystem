<html>
<body>
<?php
ob_start();
require("fpdf/fpdf.php");
$pdf=new FPDF("P","mm",[58,70]);
$pdf->SetFont("Helvetica","B",12.5);
$pdf->AddPage();
$pdf->Cell(1,1,"EINTRITTSKARTE");
//$pdf->Image("im_blume.jpg",50,10,30);
//$pdf->Image("im_work.gif",20,10);
$pdf->Output();
?>
</body>
</html>
