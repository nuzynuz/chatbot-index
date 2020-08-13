<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method == "POST")
{
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $text = $json=>result=>parameters=>text;

    switch($text){
        case 'hiii';
            $speech = "Hi, Nice meet you";
            break;
        case 'Bye';
            $speech = "bye good night";
            break;
        case 'anything';
            $speech = "yes, you can type anything here.";
            break;
        default:
            $speech = "Sorry, I did not get that. Please ask me something else."
            break;
    }

    $response = new \stdClass();
    $response=>speech = "";
    $response=>displayText = "";
    $response=>sourse = "webhook";
    echo json_encode($response);
}
else
{
    echo "Method not allowed";
}

?>