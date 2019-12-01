<?php
session_start();
if(!isset($_SESSION['currentDate'])){
    $_SESSION['currentDate'] = $_POST['currentDate'];
}
?>

<!DOCTYPE html>
<html>
<title>Directory</title>

<head>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>FindFlights</title>

<body>

    <label for="Airports">Airports</label>
    <ul id="Airports">
        <li><a href="./AirQueens/AirQueens.php">AirQueens</a></li>
        <li><a href="./AirManhattan/AirManhattan.php">AirManhattan</a></li>
        <li><a href="./AirBrooklyn/AirBrooklyn.php">AirBrooklyn</a></li>
    </ul>

    <label for="Airlines">Airlines</label>
    <ul id="Airlines">
        <li><a href="./JetRed/JetRed.php">JetRed</a></li>
        <li><a href="./JetGreen/JetGreen.php">JetGreen</a></li>
        <li><a href="./JetBlue/JetBlue.php">JetBlue</a></li>
    </ul>
    <a href="searchEngine.php">SearchEngine</a>

</body>

</html>
