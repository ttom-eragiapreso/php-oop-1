<?php
include 'Models/Movie.php';

$libraryPath = 'library.php';
file_put_contents($libraryPath, []);

$toyStory = new Movie('Toy Story', 2012, 120);
$pulpFiction = new Movie('Pulp Fiction', 1987, 200);

$libraryFile = file_get_contents($libraryPath);

$libraryFile[] = $toyStory;
$libraryFile[] = $pulpFiction;


header('Location: index.php');
echo $libraryFile;
