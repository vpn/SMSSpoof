# SMSSpoof

## **PLEASE NOTE: THIS IS A DEV BRANCH**
**This branch is not stable, it is currently being updated to use the React framework, as the current PHP setup is a bit too bulky.**

Please feel free to start contributing. Currently we need some contribution guidelines setup and a road map created. The end goal is to have a more up-to-date version of the PHP application that was made a few years ago. The app should be containerised to ensure that it will run anywhere (docker); furthermore, it shouldn't rely on any external API's for number validation, like the PHP version does.
#
# OLD README

![iPhone](https://i.imgur.com/TK6qQ9P.png)


 SMS Spoof allows you to send an SMS message to someone and change who it's from (the **Sender**). For example, you could send a message to someone and make the sender "**Ex Girlfriend**" and set the message body to "**I'm Pregnant!!**" In the images below, there's an example of how that will look on the recipient phone

## Setup
Currently SMSSpoof only supports the [Twilio SMS API](https://www.twilio.com/docs/api/rest/message). In the future there will be support for other SMS API's such as MessageBird, Sinch, Nexmo, etc... If you have a request for specific communications API to be added then post a request in the [Issues area](./issues).

### Requirements
 * A [Twilio](http://twilio.com) account
 * Any WebServer (*Eg, NGINX/Apache*)
 * PHP version 5.3 or higher

### Installation
Clone this repo into your WebServer document root

    git clone https://github.com/vpn/SMSSpoof.git /var/www/SMSSpoof

Edit the config file _(core/config.php)_ and add your **AccountSID** and **AuthToken** to the file. You can find your AccountSID and AuthToken within the [Twilio Console](https://www.twilio.com/console). They can be seen in the image here
![Screenshot of Twilio account details](https://i.imgur.com/V85Ov5f.png)

You need to uncomment the **AccountSid** and **AuthToken** elements in the `$config` array and add your details. It should look something like
```PHP
    $config = array(
        ...
        'AccountSid'        =>  'AC0a2e643f97adc9zzx19h527ghgt71967',
        'AuthToken'         =>  '71wvx21vx79uxuy2ywz92xzxwz657y3x'
    );
```

## Usage
To send a message to someone you need to go to the site `http://yourwebsite.io/SMSSPoof/`. How you access the website will depend on how you have set up your webserver.

You need to fill in all fields,
* **Sender** - This is who you want the recipient to think the message is from. In my first example I was texting someone "I'm Pregnant" from their "Ex Girlfriend", so in that case the Sender would be _Ex Girlfriend_. There are some restrictions that limit what you can enter as the Sender, these restrictions are outlined in the **Restrictions** section, just below the form.
* **Recipient** - This is the number of who you want to send the message to. Make sure that the country that you are sending the message to supports Alphanumeric Sender ID's. A list of the supported countries can be seen in the **Supported Countries** section.
* **Message** - This is the body of the SMS that is being sent. You are limited to 160 characters. This is because after 160 characters messages are then concatenated and may display differently in international countries.

## Contributing
1. Fork this repo
2. Create your branch `git checkout -b some-branch-name`
3. Add something and commit `git commit -am 'Added something amazing!'`
4. Push changes to your branch `git push origin some-branch-name`
5. Submit a new pull request with some details about it!

## Built With
* [Twilio](https://www.twilio.com/) - Messaging API
* [Bootstrap](http://getbootstrap.com/) - Web App framework used
* [Bootswatch-Paper](http://bootswatch.com/paper/) - Theme used with Bootstrap
* [AnchorJS](https://www.bryanbraun.com/anchorjs/) - Deep anchor links
* [BlockUI](http://malsup.com/jquery/block/) - Disabling elements during user interactions
* [Formatter.js](http://firstopinion.github.io/formatter.js/index.html) - Input formatting masks
* [PNotify](https://sciactive.github.io/pnotify/) & [SweetAlert2](https://limonte.github.io/sweetalert2/) - JS notifications

## License
This project has been licensed under the MIT License. Please see the [License](LICENSE) file for more details
