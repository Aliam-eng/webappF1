<!DOCTYPE html>
<html>
<head>
	<title>index</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
<?php
    require "header.php";
    echo("hello all");
    $date = date('Y-m-d H:i:s');
    '<br>';
    print($date);
    require "footer.php";
?>
</body>
</html>