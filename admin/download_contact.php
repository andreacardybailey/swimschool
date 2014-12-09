<?php

$post_date = date("Ymd_his");

$filename = "florida_swim_school_contact_records_".$post_date.".csv";

require_once ($_SERVER['DOCUMENT_ROOT'] . "/inc/db.connect.inc.php");

$sel = "select * from contacts order by timestamp desc";
$query = mysql_query($sel) or die(mysql_error());


$string = "First Name" . ","  .
"Last Name" . "," .
"Email". "," .
"Subject" ."," .
"Message". "," .
"Date" . "," .
"\r\n";

while ($rows = mysql_Fetch_array($query)) {

$string.= "\"" .
stripslashes($rows[first_name]) . "\",\"".
stripslashes($rows[last_name]) . "\",\"".
stripslashes($rows[email]) . "\",\"".
stripslashes($rows[subject]) . "\",\"" .
stripslashes($rows[message]) . "\",\"" .
stripslashes($rows[timestamp])
 ."\"\r\n";
}

header('Content-Disposition: attachment; filename='.$filename);
header('Content-Type: application/x-force-download; name='.$filename);

echo $string;

?>