<?php
  $filename = "./demos/books/Charles Dickens/A Tale of Two Cities.txt"; 

  // 1. Read the file options in PHP
  // print(file_get_contents($filename));
  // readfile($filename);
  // print_r(file($filename));

//2. Reading partial files: open a file with fopen(filename or path, access mode req. args)
  $f = fopen($filename, 'r');

  while ($data = fgets($f)) {
    echo $data;
  }
  fclose($f);

?>