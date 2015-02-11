<?php
require_once('dsn.php');
    $xml = new SimpleXMLElement('<dictionary/>');
    $thu = $xml->addChild('thupui');
   //while($row = mysql_fetch_assoc($result)) {
        // $mydata = $thu->addChild($row['thumal'], $row['sawifiahna']);        
         // }

$dbh  = new PDO($zoweb) or die("database i hawng thei lo");
$query =  "SELECT * FROM zotab";
foreach ($dbh->query($query) as $row)
{
    $mydata=$thu->addChild($row['thumal'], $row['sawifiahna']);
}
$fp = fopen("data.xml","wb");
    fwrite($fp,$xml->asXML());
    fclose($fp);
?>
Hlawtling takin i xml document i update ta.
