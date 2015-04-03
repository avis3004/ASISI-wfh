<?php
include_once("database_connection.php");
//include_once("ViaNettSMS.php");
session_start();
$tbl_name="complaints"; // Table name 
$PhoneString ="";
$SelectQuery="SELECT ContactNumber FROM complaints where ComplaintStatus='Completed' and SMSFlag = 'No'";
$SelectResult = mysql_query($SelectQuery);
$count=mysql_num_rows($SelectResult);
for( $i=1; $i<=$count; $i++ )
{
  $row = mysql_fetch_assoc($SelectResult);
  $UserPhoneNo = $row['ContactNumber'];
  $PhoneString = $PhoneString . $UserPhoneNo.",";
}
$PhoneString =rtrim($PhoneString,",");
$SMSText = 'Your Complaint has been Successfully resolved by Mudichur Panchayat';
SendSMSGateway($PhoneString,$SMSText);

function SendSMSGateway($ContactNumber,$ComplaintDesc)
{
//$url = "http://login.smsgatewayhub.com/smsapi/pushsms.aspx?user=ashok.jan31&pwd=505909&to=9043228888&sid=WEBSMS&msg=Complaint%20Registered%20Successfully%20for%20StreetLights&fl=0&gwid=2";
	echo $ContactNumber;
$SanitizedMsg = trim(str_replace(' ','%20',$ComplaintDesc));
$url = "http://login.smsgatewayhub.com/smsapi/pushsms.aspx?user=mudichurp&pwd=645905&to=$ContactNumber&sid=MUDRPT&msg=$SanitizedMsg&fl=0&gwid=2";
echo $url;

//SMS Code Comented to avoid triggering of SMS in production
/*
$ch = curl_init();
// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL,$url);
// grab URL and pass it to the browser
curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);*/

}
$sql="update complaints set SMSFlag = 'Yes' where ComplaintStatus = 'Completed' and SMSFlag = 'No'";
$result=mysql_query($sql);
if($result)
{
	header('Location: Index.php');
}
// close connection 
mysql_close();
?>