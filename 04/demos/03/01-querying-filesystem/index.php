<?php
//returns a current working directory your program is using 
    $dir = getcwd();
    // echo $dir;

    $fmt = "%s: %g\n";
//sprintf — Return a formatted string
    echo sprintf("%s: %s\n", 'CWD', $dir);
    echo sprintf($fmt, 'Free space', disk_free_space($dir));
    echo sprintf($fmt, 'Total space', disk_total_space($dir));

    echo sprintf($fmt, 'File?',is_file($dir));
    echo sprintf($fmt, 'Directory?',is_dir($dir));
    echo sprintf($fmt, '/foo/bar exists?',file_exists('/foo/bar'));
?>
