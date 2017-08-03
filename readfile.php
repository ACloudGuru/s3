<?php
//connection string
include 'connecttoaws.php';

//code to get our bucket and key names
$bucket = $_GET["bucket"];
$key = $_GET["key"];

//code to read the file on S3
$result = $client->getObject(array(
    'Bucket' => $bucket,
    'Key'    => $key
));
$data = $result['Body'];

//HTML to create our webpage
echo "<h2 align=\"center\">The Bucket is $bucket</h2>";
echo "<h2 align=\"center\">The Object's name is $key</h2>";
echo "<h2 align=\"center\">The Data in the object is $data</h2>";
echo "<div align = \"center\"><img src=\"https://acloud.guru/images/logo-small-optimised.png\"></img></div>";
echo "<div align = \"center\"><a href=\"cleanup.php?bucket=$bucket&key=$key\">Click Here To Remove Files & Bucket</a></div>";
?>
