<!DOCTYPE HTML>
<html>

<head>
    <title>Date</title>
</head>

<body>
<?php
    include "connect.php";
    $date = $_GET['date'];
    $cursor = $db->find(['date'=>$date]);
    $result = "<p>Фильмы выпущенные в $date" . ": </p></ol>";
    foreach($cursor as $document){
        $film = $document['title'];
        $result .= "<li>$film</li>"; 
    }
    $result .="</ol>";
    echo $result;
    echo "<script>localStorage.setItem('$date', '$result')</script>"
    ?>
</body>
<html>