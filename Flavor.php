<?php

//Imports Twilio Library.  Make sure you have the Services folder at the same level as this PHP file.
require "Services/Twilio.php";

//Twilio Account Sid.  Log into twilio.com to find this.
$AccountSid = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";

//Twilio Auth Token.  Log into twilio.com to find this.  You'll have to click on the key icon.
$AuthToken = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";

//Instantiates Twilio API
$client = new Services_Twilio($AccountSid, $AuthToken);

//Your Twilio number that texts are sent from.  This is also the number that your users text.
//You need to log into Twilio and buy a number if you haven't already.
//Don't forget the leading 1.
$from = '15555555555';


//Flavor of the Day calendar.  Make sure single digit dates have a leading zero.  (Ex. March 4th is 04).
//Currently, only one month at a time is supported.  This means that on the last day of the month you will
//have to replace that month's flavors with the current month's.
$flavors = array(
	"01" => "Flavor names here",
	"02" => "",
	"03" => "",
	"04" => "",
	"05" => "",
	"06" => "",
	"07" => "",
	"08" => "",
	"09" => "",
	"10" => "",
	"11" => "",
	"12" => "",
	"13" => "",
	"14" => "",
	"15" => "",
	"16" => "",
	"17" => "",
	"18" => "",
	"19" => "",
	"20" => "",
	"21" => "",
	"22" => "",
	"23" => "",
	"24" => "",
	"25" => "",
	"26" => "",
	"27" => "",
	"28" => "",
	"29" => "",
	"30" => "",
	"31" => "",
	);

//optional blacklist.  Adding a number to this array will cause it to not recieve texts from the service.
$blacklist = array(
	"16088675309" //sorry Jenny!
	);

//optional whitelist.  Only numbers in this array will recieve texts from the service.
$whitelist = array(
	"13052220122",
	"15633371285"
	);
//Sets the timezone used for date calculation.  Change to fit your location.
date_default_timezone_set('America/Chicago');

//Calculates today's date in a two digit format (Ex. 23 if today is the 23rd of the month).
$day = date("d");

//Retrieves today's flavor from the array and assigns it to $todaysflavor variable.
$todaysflavor = $flavors[$day];

//Figures out who is texting the service and puts that number in the To field.
$to = $_REQUEST['From'];

//Creates the body of the text message.
$body = $todaysflavor . " is the Flavor of the Day at Culver's of Verona";

//Uncomment this block if you want basic functionality.  Make sure to re-comment other two code blocks
	/*
		$client->account->sms_messages->create($from, $to, $body); //sends SMS
	*/

//Uncomment this block if you want blacklist functionality.  Make sure to re-comment other two code blocks
	/*
	if (!in_array($_REQUEST['From'], $blacklist)){
		$client->account->sms_messages->create($from, $to, $body); //sends SMS
	}
	*/

//Uncomment this block if you want whitelist functionality.  Make sure to re-comment other two code blocks
	/*
	if (in_array($_REQUEST['From'], $whitelist)){
		$client->account->sms_messages->create($from, $to, $body); //sends SMS
	}
	*/
	
	//Aaaand you're done!

?>
