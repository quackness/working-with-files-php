<?php

$root = '../../../books';
$dir = opendir($root);
// echo $dir;

$library = [];
while(($author = readdir($dir)) != FALSE) {
    if ($author == '.' || $author = '..') {
        continue;
    }
    echo $author;
}
closedir($dir);






//     $filename = "../../../books/Charles Dickens/A Tale of Two Cities.txt"; 
//     $f = fopen($filename, 'r');

//     while (!feof($f)) {
//         echo fread($f, 512);
//         fgets(STDIN);
//     }
    
//     fclose($f);
// ?>

