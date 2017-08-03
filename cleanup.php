<?php
//Connection String
include'connecttoaws.php';

//Code to get our bucketname and file name
$bucket = $_GET["bucket"];
$key = $_GET["key"];

//buckets cannot be deleted unless they are empty
//Code to delete our object
$result = $client->deleteObject(array(
    'Bucket' => $bucket,
    'Key'    => $key
));

//code to tell user the file has been deleted.
echo "<h2 align=\"center\">Object $key successfully deleted.</h2>";

//Code to delete our bucket
$result = $client->deleteBucket(array(
    'Bucket' => $bucket
));

//code to create our webpage.
echo "<h2 align=\"center\">Bucket $bucket successfully deleted.</h2>";
echo "<div align = \"center\"><img src=\"https://acloud.guru/images/logo-small-optimised.png\"></img></div>";
echo "<h2 align=\"center\">Good Bye Cloud Gurus!</h2>";
?>
