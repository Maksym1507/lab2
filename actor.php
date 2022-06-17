<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actor</title>
</head>

<body>
<?php
    include "connect.php";
    $actor = $_GET['actor'];
    $cursor = $db->find(['actor'=>$actor]);
    $result = "<p>Фильмы, которые ты можешь посмотреть с $actor" . ": </p></ol>";
    foreach($cursor as $document){
        $film = $document['title'];
        $result .= "<li>$film</li>";
    }
    $result .="</ol>";
    echo $result;
    echo "<script>localStorage.setItem('$actor', '$result')</script>"
    ?>
</body>
<html>