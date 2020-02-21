<?php
function getJsonData (string $filePath) {
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if
}

function pushNewJson()
{
    $data = getJsonData('Data/guestmsg.json');
    $arr_data = array();

    try {
        $formdata = array(
            'name' => $_POST = ['name'],
            'age' => $_POST = ['age'],
            'origin' => $_POST = ['origin'],
            'message' => $_POST = ['message']
        );

        //get data from json
        $jsondata = file_get_contents($data);

        //convert jsondata to array
        $arr_data = json_decode($jsondata, true);

        //push the thing in the new thing.... y'know
        array_push($arr_data, $formdata);

        //convert new stuff back to json so it can join its friends (json_encode being the important one here)
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

        file_put_contents($data, $jsondata);
    }

    finally
    {
        print "This part is always executed\n";
    }
}
