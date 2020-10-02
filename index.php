<?php 

    include 'core/init.php';
    include 'core/config.php';
    include 'assets/inc/start.php';

    // Required if your environment does not handle autoloading
    require __DIR__ . '/vendor/autoload.php';

    // Use the REST API Client to make requests to the Twilio REST API
    use Twilio\Rest\Client;

?>
<div class="container">
    <div class="test">

    </div>
    <div class="page-header">
        <h3>SMS Spoof <small>Spoof who an SMS is from</small></h3>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" id="panelSMS">
                <div class="panel-body">
                    <form class="form-horizontal" id="formSMS">
                        <div class="form-group">
                            <label for="inputSender" class="col-sm-2 control-label">Sender</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSender" placeholder="Any Name/Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSender" class="col-sm-2 control-label">Recipient</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control phoneNumber" id="inputRecipient" placeholder="+12 345 678 971">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control maxlength" maxlength="160" rows="3" id="inputMessage"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="btnSend" class="btn btn-default">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>About</h4>
            <p>
                This tool allows for you to modify the <b>sender</b> of an SMS message to something Alphanumeric.<a href="#restrictions">*</a> This will only work when sending a message to one of the <a href="#supportedCountries">supported countries</a>. Check below for all of the restrictions that are in place.
            </p>
        </div>
        <div class="col-md-12">
            <h4 class="wanchored" id="restrictions">Restrictions</h4>
            <p>
                The <b>Sender</b> must be Alphanumeric. The length of the Sender must be between 1 and 11 Alphanumeric characters. Allowing for letters A-Z and numbers, 0-9, both lower case and uppercase characters respectivley: Spaces are also supported.
            </p>
        </div>
        <div class="col-md-12">
            <h4 class="wanchored" id="supportedCountries">Supported Countries</h4>
            <p>
                Below is a list of countries and weather or not they support SMS messages with Alphanumeric Sender ID's.
            </p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Country</th>
                        <th>Alphanumeric Support</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    /*
                        Temp Removal - API IS DOWN

                        $data = getCountryListJson();
                        if ($data['success'] == true){
                            foreach ($data['result'] as $key => $value) {
                    ?>
                        <tr>
                            <td><?php echo $value['country'];?></td>
                            <td><?php echo $value['value'];?></td>
                        </tr>
                    <?php
                            }
                        }
                    */
                    ?>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/af">Afghanistan</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/al">Albania</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/dz">Algeria</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/as" target="_self">American Samoa</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ad">Andorra</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ao">Angola</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ai">Anguilla</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ag">Antigua &amp; Barbuda</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_self">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ar">Argentina</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/am">Armenia</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/aw">Aruba</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/au">Australia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/at">Austria</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/az">Azerbaijan</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bs">Bahamas</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bh">Bahrain</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bd">Bangladesh</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes&nbsp;</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bb">Barbados</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/by">Belarus</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes only for non Belarus based companies - Pre-Registration Required<strong>*</strong></a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/be">Belgium</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bz">Belize</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bj">Benin</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bm">Bermuda</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bt">Bhutan</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bo">Bolivia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ba">Bosnia and Herzegovina</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bw">Botswana</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/br">Brazil</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bn">Brunei</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bg">Bulgaria</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bf">Burkina Faso</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/bi">Burundi</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/kh">Cambodia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/cm">Cameroon</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ca">Canada</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/cv">Cape Verde</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ky">Cayman Islands (UK)</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/cf">Central African Republic</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/td">Chad</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/cl">Chile</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/cn">China</a><strong>**</strong></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/co">Colombia</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/km">Comoros</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/cg">Congo (Republic of the Congo)</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/cd">Congo (Democratic Republic of the Congo)</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ck">Cook Islands</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/cr">Costa Rica</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/hr">Croatia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/cu">Cuba</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/cy">Cyprus</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/cz">Czech Republic</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required<strong>†</strong></a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/dk">Denmark</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_self">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/dj">Djibouti</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/dm">Dominica</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/do">Dominican Republic</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ec">Ecuador</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/eg">Egypt</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/sv">El Salvador</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gq">Equatorial Guinea</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ee">Estonia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/et" target="_self">Ethiopia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/fk">Falkland Islands</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/fo">Faroe Islands</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/fj">Fiji</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/fi">Finland</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/fr">France</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gf">French Guiana</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/pf">French Polynesia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ga">Gabon</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gm">Gambia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ge">Georgia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/de">Germany</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gh">Ghana</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gi">Gibraltar</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gr">Greece</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gl">Greenland</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gd">Grenada</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gp">Guadeloupe &amp; Martinique</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gu">Guam</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gt">Guatemala</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gg">Guernsey</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gn">Guinea</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gw">Guinea-Bissau</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gy">Guyana</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ht">Haiti</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/hn">Honduras</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/hk">Hong Kong</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/hu">Hungary</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/is">Iceland</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/in">India</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/id">Indonesia</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_self">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ir">Iran</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_self">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/iq">Iraq</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ie">Ireland</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td>Isle of Man</td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/il">Israel</a></td>
                        <td>
                            <p><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required for companies based in Israel</a></p>
                            <p>(Not required if company is not based in Israel)</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/it">Italy</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ci">Ivory Coast (Côte d'Ivoire)</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/jm">Jamaica</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/jp">Japan</a></td>
                        <td>
                            <p><a href="https://twiliodoer.secure.force.com/SenderId" target="_self">Numeric Pre-Registration Available</a></p>
                            <p>Alphanumeric Sender ID is not supported in Japan, but a pre-approval option is available – click the link above for more info.</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/je">Jersey</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/jo">Jordan</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/kz">Kazakhstan</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ke">Kenya</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/kw">Kuwait</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/kg">Kyrgyzstan</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/la">Laos (Lao People's Democratic Republic)</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/lv">Latvia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/lb">Lebanon</a></td>
                        <td>
                            <p><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required for companies based in Lebanon</a></p>
                            <p>(Not required if company is not based in Lebanon)</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ls">Lesotho</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/lr">Liberia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ly">Libya</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/li">Liechtenstein</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/lt">Lithuania</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/lu">Luxembourg</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mo">Macau (PRC)</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mk">Macedonia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mg">Madagascar</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mw">Malawi</a></td>
                        <td>
                            <p><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required for companies based in Malawi</a></p>
                            <p>(Not required if company is not based in Malawi)</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/my">Malaysia</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mv">Maldives</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ml">Mali</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mt">Malta</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mq">Martinique</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mr">Mauritania</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mu">Mauritius</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/re">Mayotte</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mx">Mexico</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/md">Moldova</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mc">Monaco</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mn">Mongolia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/me">Montenegro</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ms">Montserrat</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ma">Morocco</a></td>
                        <td>
                            <p><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required for companies based in Morocco</a></p>
                            <p>(Not required if company is not based in Morocco)</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mz">Mozambique</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/mm">Myanmar</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/na">Namibia</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>Nauru</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/np">Nepal</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/nl">Netherlands</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/an">Netherlands Antilles</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/nc">New Caledonia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/nz">New Zealand</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ni">Nicaragua</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ne">Niger</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ng">Nigeria</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/no">Norway</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/om">Oman</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/pk">Pakistan</a></td>
                        <td>
                            <p><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required for companies based in Pakistan</a></p>
                            <p>(Not required if company is not based in Pakistan)</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ps">Palestine</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/pa">Panama</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/pg">Papua New Guinea</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/py">Paraguay</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/pe">Peru</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ph">Philippines</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/pl">Poland</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/pt">Portugal</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/pr">Puerto Rico</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/qa">Qatar</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/re">Réunion</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ro">Romania</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ru">Russia</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required&nbsp;<strong>†</strong><strong>†</strong></a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/rw">Rwanda</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ws">Samoa</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/sm">San Marino</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/st">Sao Tome and Principe</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/sa">Saudi Arabia</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes only for non Saudi Arabia based companies - Pre-Registration Required<strong>*</strong></a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/sn">Senegal</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/rs">Serbia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/sc">Seychelles</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td>Sierra Leone</td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/sg">Singapore</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/sk">Slovakia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/si">Slovenia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td>Solomon Islands</td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/so">Somalia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/za">South Africa</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/kr">South Korea</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ss">South Sudan</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/es">Spain</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/lk">Sri Lanka</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/kn">St. Kitts and Nevis</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/lc">St. Lucia</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/vc">Saint Vincent and the Grenadines</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/sd">Sudan</a></td>
                        <td>
                            <p><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required for companies based in Sudan</a></p>
                            <p>(Not required if company is not based in Sudan)</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/sr">Suriname</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/sz">Swaziland</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/se">Sweden</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ch">Switzerland</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133967-Change-the-From-number-or-Sender-ID-for-Sending-SMS-Messages#Alphanumeric_Sender_ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/sy">Syria</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/tw">Taiwan</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/tj">Tajikistan</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/tz">Tanzania</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/th">Thailand</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/tl">Timor-Leste (East Timor)</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/tg">Togo</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/to">Tonga</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/tt">Trinidad and Tobago</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/tn">Tunisia</a></td>
                        <td>
                            <p><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required for companies based in Tunisia</a></p>
                            <p>(Not required if company is not based in Tunisia)</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/tr">Turkey</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/tm">Turkmenistan</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/tc">Turks and Caicos Islands</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ug">Uganda</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ua">Ukraine</a></td>
                        <td>
                            <p><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required for companies based in Ukraine</a></p>
                            <p>(Not required if company is not based in Ukraine)</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ae">United Arab Emirates</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/gb">United Kingdom</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/us">United States</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/uy">Uruguay</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/uz">Uzbekistan</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td>Vanuatu</td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ve">Venezuela</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/vn">Vietnam</a></td>
                        <td><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/vg">Virgin Islands (British Virgin Islands)</a></td>
                        <td><a href="https://support.twilio.com/hc/en-us/articles/223133767-International-support-for-Alphanumeric-Sender-ID" target="_blank" rel="noopener">Yes</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/ye">Yemen</a></td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/zm">Zambia</a></td>
                        <td>
                            <p><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required for companies based in Zambia</a></p>
                            <p>(Not required if company is not based in Zambia)</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.twilio.com/sms/guidelines/zw">Zimbabwe</a></td>
                        <td>
                            <p><a href="https://twiliodoer.secure.force.com/SenderId" target="_blank" rel="noopener">Yes - Pre-Registration Required for companies based in Zimbabwe</a></p>
                            <p>(Not required if company is not based in Zimbabwe)</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="text-muted">Created by <a href="https://stuf.io/">Patrick McGranaghan</a></p>
    </div>
</footer>


<?php 

    include 'assets/inc/scripts.php';
    include 'assets/inc/end.php';

?>