<?php 

include('config.php');
class open_weather{

private $api;
private $token=''; // key 
public function __construct($token)
{
    $this->token = $token;

    $this->api = 'http://api.openweathermap.org/data/2.5/weather?units=metric';
}




public function show($city){
    $end_point = $this->api."&q=".$city.",uk&APPID=".$this->token;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $end_point); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       $response = curl_exec($ch);
 
   curl_close($ch);

		
   return json_decode($response, TRUE);

}



    
}

$open = new open_weather($token);

$open->show('london');
