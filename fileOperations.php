<?php

$myfile = fopen("newenties.php", "a") or die("Unable to open file!");

$txt = $_POST["name"].'\n';
fwrite($myfile, $txt);

$txt = $_POST["city"].'\n';
fwrite($myfile, $txt);

$txt = "Harsh\n";
fwrite($myfile, $txt);

fclose($myfile);

//Trim N lines
//The variable $path can be a path to the file or a filename.

function trim_lines($path, $max) {
    // Read the lines into an array
    $lines = file($path);
    // Setup counter for loop
    $counter = 0;
    while($counter < $max) {
        // array_pop removes the last element from an array
        array_pop($lines);
        // Increment the counter
        $counter++;
    }  // End loop
    // Write the trimmed lines to the file
    file_put_contents($path, implode('', $lines));
}

//trim_lines("newfile.txt", 1);

?>
