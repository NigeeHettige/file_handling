<?php

$handle = fopen("C:\\xampp\\htdocs\\Assignment_4.4\\19_jul\\assignment_4.4.txt", "w");
fwrite($handle, "Assignment_4.4_WebTechnologies\n");
fwrite($handle, "Assignment_4.4_WebTechnologies\n");
fwrite($handle, "Assignment_4.4_WebTechnologies\n");
fwrite($handle, "Assignment_4.4_WebTechnologies\n");
fwrite($handle, "Assignment_4.4_WebTechnologies\n");
fwrite($handle, "Assignment_4.4_WebTechnologies\n");
fwrite($handle, "Assignment_4.4_WebTechnologies\n");
fclose($handle);

$filename = "C:\\xampp\\htdocs\\Assignment_4.4\\19_jul\\assignment_4.4.txt";
$count = 0;

// Check if the file exists and is readable
if (file_exists($filename) && is_readable($filename)) {
    // Open the file in read mode
    $fileHandle = fopen($filename, 'r');

    // Read the file line by line until the end
    while (($line = fgets($fileHandle)) !== false) {
        $count++;
    }

    // Close the file handle
    fclose($fileHandle);

    echo "Total lines in the file: $count";
} else {
    // Display an error message if the file is not accessible
    echo "Error: Unable to read the file or the file does not exist.";
}

echo "<br><br>";

 



$filename = "C:\\xampp\\htdocs\\Assignment_4.4\\19_jul\\log.txt";
$searchWord = 'Web_Technologies is here';
$found = false;

// Check if the file exists and is readable
if (file_exists($filename) && is_readable($filename)) {
    
    $fileHandle = fopen($filename, 'r');

   
    while (($line = fgets($fileHandle)) !== false) {
       
        if (stripos($line, $searchWord) !== false) {
           
            echo "Found matching line: $line";
            $found = true;
            break; // Stop searching after the first match
        }
    }

    // Close the file handle
    fclose($fileHandle);

    // Display a message if no matching line is found
    if (!$found) {
        echo "No matching line containing '$searchWord' found in the file.";
    }
} else {
    // Display an error message if the file is not accessible
    echo "Error: Unable to read the file or the file does not exist.";
}



$handle1 = fopen("C:\\xampp\\htdocs\\Assignment_4.4\\19_jul\\log.txt","a+");
$date = date("h:i:s");
$time = date("Y/m/d");


fwrite($handle1,$date. "\n");
fwrite($handle1,$time. "\n");

fclose($handle1);



echo "File permission: " .substr(sprintf("%o",fileperms("C:\\xampp\\htdocs\Assignment_4.4\\19_jul\\example.txt")),-4)."<br>";

chmod("C:\\xampp\\htdocs\Assignment_4.4\\19_jul\\example.txt",0644);

if(file_exists("C:\\xampp\\htdocs\Assignment_4.4\\19_jul\\example.txt")){
    
    unlink("C:\\xampp\\htdocs\Assignment_4.4\\19_jul\\example.txt");

    
}

else{
    
    echo "File is not there";
}

?>










