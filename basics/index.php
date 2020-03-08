<?php

$page = $_GET['page'];
$searchTerm = $_GET['search'];
$pages = 10;

echo '<h3> you are searching for:' . $searchTerm . '</h3>';
echo '<h3> you are on page' . $page . '</h3>';

for($i = 1; $i <= $pages; $i++){
    echo '<a href="?search=' .$searchTerm. '&page='. $i . '">' . $i. '</a> ';
}

echo '<h2>isset</h2>';

if(isset($_GET['search'])){
    $searchTerm = $_GET['search'];
    echo '<h3> you are searching for ' . $searchTerm . '</h3>';
}