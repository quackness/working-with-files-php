<?php
  $filename = "./demos/books/Charles Dickens/A Tale of Two Cities.txt"; 

  // 1. Read the file options in PHP
  // print(file_get_contents($filename));
  // readfile($filename);
  // print_r(file($filename));

// //2. Reading partial files: open a file with fopen(filename or path, access mode req. args)
//   $f = fopen($filename, 'r');

//   // while ($data = fgets($f)) {
//   //   echo $data;
//   // }
// //while the file is not finished reading loop, adda pagination at every 512 characters 
//   while (!feof($f)) {
//     echo fread($f, 512);
//     fgets(STDIN);
//   }
//   fclose($f);

//3. write to files 
// check the path is correct: $filename = 'library.csv' and add read, I checked and it was fine ;
$f = fopen('library.csv', 'r');
$entries = [];
while(($entry = fgetcsv($f)) != null) {
  if (trim($entry[1]) == 'Charles Dickens') {
    $entries[] = $entry;
  }

}
fclose($f);

$dest = fopen('./dickens_books.csv', 'w');
foreach($entries as $entry) {
  fputcsv($dest, $entry);
}

fclose($dest);


?>