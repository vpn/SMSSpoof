<?php 

    include 'core/init.php';
    include 'core/config.php';
    include 'assets/inc/start.php';

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
                    ?>
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