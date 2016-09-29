<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Tickets kaufen - Bitte wählen sie ihre Tickets aus!</h1>
<form action="payaticket.php" method="post" name="tickets">
  <p class="normalbutton">
    normales Ticket(10€)
    <input type="button" onclick="window.document.tickets.art1.value=parseInt(window.document.tickets.art1.value)+1;" value="+" class="plusbutton">
    <input type="text" value="0" class="anzahltext" name="art1">
    <input type="button" onclick="window.document.tickets.art1.value=parseInt(window.document.tickets.art1.value)-1;" value="-" class="minusbutton">
  </p>
  <p class="normalbutton">
    Kinderticket(5€)
    <input type="button" onclick="window.document.tickets.art2.value=parseInt(window.document.tickets.art2.value)+1;" value="+" class="plusbutton">
    <input type="text" value="0" class="anzahltext" name="art2">
    <input type="button" onclick="window.document.tickets.art2.value=parseInt(window.document.tickets.art2.value)-1;" value="-" class="minusbutton">
  </p>
  <p class="normalbutton">
    Studententicket(7€)
    <input type="button" onclick="window.document.tickets.art3.value=parseInt(window.document.tickets.art3.value)+1;" value="+" class="plusbutton">
    <input type="text" value="0" class="anzahltext" name="art3">
    <input type="button" onclick="window.document.tickets.art3.value=parseInt(window.document.tickets.art3.value)-1;" value="-" class="minusbutton">
  </p>
  <p class="normalbutton">
    Seniorenticket(9€)
    <input type="button" onclick="window.document.tickets.art4.value=parseInt(window.document.tickets.art4.value)+1;" value="+" class="plusbutton">
    <input type="text" value="0" class="anzahltext" name="art4">
    <input type="button" onclick="window.document.tickets.art4.value=parseInt(window.document.tickets.art4.value)-1;" value="-" class="minusbutton">
  </p>
<p><input type="submit" value="Weiter" name="checkoutgo" class="normalbutton"></p>
</form>
</body>
</html>
