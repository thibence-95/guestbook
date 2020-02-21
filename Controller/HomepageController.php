<?php
function getJsonData (string $filePath)
{
// Check the existence of file
    if (file_exists($filePath)) {
        // Open the file for reading
        $handle = fopen($filePath, "r") or die ("ERROR: Cannot open the" . $filePath);

        $content = fread($handle, filesize($filePath));
        // Closing the file handle
        fclose($handle);
        return json_decode($content);
    } else {
        die("ERROR:" . $filePath . "does not exist.");
    }

}

$data = getJsonData('Data/guestmsg.json');
//var_dump($data);
