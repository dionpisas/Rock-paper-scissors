<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" href="../css/stylesheet.css" rel="stylesheet">
    <title>Rock Paper Scissor</title>
</head>
<body>

<!-- START BLOCK : FORMULIER -->

<form action="../php/rps.php" method="post">
    <input type="submit" value="rock" name="submit" id="rock">
    <input type="submit" value="paper" name="submit" id="paper">
    <input type="submit" value="scissor" name="submit" id="scissor">



</form>

{win}
<!-- END BLOCK : FORMULIER -->

<!-- START BLOCK : RESULT -->
<p>{eindresultaat}</p>
<p>Uw totaal score is: {WIN}</p>
<!-- END BLOCK : RESULT -->



</html>


