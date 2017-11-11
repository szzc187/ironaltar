// click action on submit button
$('#submit').on('click', function(){
    
        // get form values and compose a data string
        var name = $("#inputName").val();
        var email = $("#inputEmail").val();
        var number = $("#inputNumber").val();
        var message = $("#inputMessage").val();
        var data ='name=' + name + '&email=' + email + '&number=' + number + '&message=' + message;
    
        // AJAX call passing dataString in POST
        if((name && number && message)||(name && email && message)||(name && email && number && message)){
        $.ajax({
            type: 'POST',
            data: data,
            url: 'php/mail_handler.php',
            success: function(){
                // success callback
                var x = document.getElementById('contactForm');
                x.style.display = 'none';
                $('#exampleModalLabel').text('Dziękujemy');
                $('#info').text('Wiadomość została wysłana');
                $('#info3').append('<br><button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>');
    
                console.log('message sent! :D');
            }
        });}else{
            $('#info1').text('Wypełnij, jak się nazywasz, podaj e-mail, bądź nr telefonu i wpisz wiadomość do nas');
        }
        
        // prevent the default submit action
        return false;
    });