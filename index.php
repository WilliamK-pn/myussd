<?php
//Reads the variables sent via POST from AT gateway
$sessionId=$_POST["sessionId"];
$serviceCode=_$POST["serviceCode"];
$phoneNumber=$_POST["phoneNumber"];
$text=$_POST["text"];

if ($text == "") {
//This is the first request> Note how we start the response with CON
$response = "what would you want to check\n";
$response . = "1. My Account Number\n";
$response . = "My phone Number";
} else if ($text =="1") {
//Business logic for the first level response
$response = "CON Choose account information you want to view\n";
$response . = "1. Account Number\n";
$response . = "2. Account Balance"

} else if ($text == "2") {
//Business logic for the first level response
//This is a termiinal request. Note how we start with END
$response = "END Your phone number is" .$phoneNumber;
} else if ($text == "1*1") {
//This is the second level response where the user selected 1 in the first instance
$accountNumber = "Acc1001";

//This is a terminal request. Note how we start with END
$response = "END Your account Number is" .$accountNumber

} else if ($text = "1*2") {
//This is the second level response where the user selected 1 in the first instance
$balance = "KES 10, 000";
 
//This is a terminal request. Note how we start with END
$response = "END Your balance is" .$balance

}
//echo the response to the API. The response depends to the statement that is fulfilled in each instance
header ('content-type; text/plain');
echo $response;

?>