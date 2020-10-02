<?php 

    include 'core/init.php';
    include 'core/config.php';

    // Required if your environment does not handle autoloading
    require __DIR__ . '/vendor/autoload.php';

    // Use the REST API Client to make requests to the Twilio REST API
    use Twilio\Rest\Client;

    
    header('Content-type: application/json');

    // Insert Twillio AccountSid and AuthToken from www.twilio.com/user/account
    // into core/config.php


    if (isset($_POST['sendSMS']) && !empty($_POST['sendSMS'])){
        $required_fields = [
            "sender",
            "recipient",
            "message"
        ];
        //Itterate through POST data and check it against the
        //required fields to ensure that all data is at hand
        foreach ($_POST as $key=>$value) {
            if (empty($value) && in_array($key, $required_fields) === true){
                $responseArray['success'] = false;
                $responseArray['status'] = "error";
                $responseArray['message'] = "All fields must be filled";
                break 1;
            }
        }

        if(!isset($config['AccountSid']) || !isset($config['AuthToken'])){
            $responseArray['success'] = false;
            $responseArray['status'] = "error";
            $responseArray['message'] = "You must fill in your Account info. See core/config.php for more information.";
        }


        if (!isset($responseArray['success'])){
            //Add POST data to array
            $data = [
                "sender"    =>  trim($_POST['sender']),
                "recipient" =>  "+".str_replace(' ', '' ,trim($_POST['recipient'])),
                "message"   =>  trim($_POST['message'])
            ];

            // Creates new Twilio rest client
            $client = new Services_Twilio($config['AccountSid'], $config['AuthToken']);

            // Send message to number
            $sms = $client->account->messages->sendMessage(
     
                // This is the 'Sender'
                $data['sender'], 
     
                // The number the message is being sent to
                $data['recipient'],
     
                // The sms body
                $data['message']
            );
     
            // Return response
            $responseArray = [
                "success"   =>  true,
                "status"    =>  "success",
                "message"   =>  "Sent message to " . $data['recipient'] . ".",
                "data"      =>  $data
            ];

        }

        echo json_encode($responseArray);
    }


?>