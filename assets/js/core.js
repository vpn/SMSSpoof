$(function(){

    PNotify.prototype.options.styling = "fontawesome";

    //Set AnchorJS options
    anchors.options = {
        placement:  'left'
    };
    //Add anchors to heading elements
    anchors.add('.wanchored');

    $('.maxlength').maxlength({
        alwaysShow: true,
        showOnReady: true,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger"
    });

    $('#formSMS').on("submit", function(e){
        e.preventDefault();
    });

    $('#btnSend').click(function(){
        sendSMS();
    });

    $('.phoneNumber').formatter({
        pattern: '+{{99}} {{999}} {{999}} {{9999}}'
    });



});


function sendSMS(){

    if($("#accountInfo").val() == "false"){
        swal({
            title: 'Error!',
            html: 'You must fill in your account information first.</br> Please check <strong>core/config.php</strong>',
            type: 'error',
            confirmButtonText: 'Close'
        });
    }
    if($("#accountInfo").val() == "true"){
        var dataString = 'sendSMS=true&sender=' + $("#inputSender").val() + '&recipient=' + $("#inputRecipient").val() + '&message=' + $("#inputMessage").val();
        block_element("#panelSMS");
        $.ajax({
            type: "POST",
            url: "send.php",
            data: dataString,
            cache: false,
            success: function(data){
                console.log(data);
                if (data.success === true){
                    new PNotify({
                        title: 'Sent',
                        text: 'Your message has been sent',
                        type: 'success',
                        icon: false
                    });
                }else if (data.success === false){
                    new PNotify({
                        title: 'Error',
                        text: 'Your message could not be sent</br>Error message: <strong>' + data.message + '</strong>',
                        type: 'warning',
                        icon: false
                    });
                }
                $("#panelSMS").unblock();
            }
        });
    }
}


function block_element(a){
    var elm = a;
    $(elm).block({
        message: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>',
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            border: 0,
            padding: 0,
            backgroundColor: 'transparent'
        }
    });
}
