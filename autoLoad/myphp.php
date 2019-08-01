<?php
if (isset($_GET['offset']) && isset($_GET['limit'])) {
     $limit = $_GET['limit'];
     $offset = $_GET['offset'];

     $db = new PDO("mysql:host=localhost;dbname=oops","root");
    $query = $db->prepare("SELECT * FROM user LIMIT {$limit} OFFSET {$offset}");
    $query->execute();
    while ($rows = $query->fetch()) {
        echo "<div class='data'>Name:- ".$rows['uname']."  Salary:- ".$rows['usalary']."</div>";
    }
    //echo var_dump($db);
}
?>