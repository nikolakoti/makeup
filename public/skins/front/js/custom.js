
$(document).ready(function () {

    var contactForm = $('#contact-form');

    var btn = $('[data-action="submit"]');

    contactForm.on('submit', btn, function (e) {

        e.preventDefault();

        var data;

        data = {
            'name': $('#name').val(),
            'email': $('#email').val(),
            'phone': $('#phone').val(),
            'date': $('#date').val(),
            'message': $('#message').val(),
            '_token': $('[name="_token"]').val()
        };

        if (data.name === '' || data.email === '' || data.phone === '' || data.date === '' || data.message === '') {

            swal({
                icon: "warning",
                buttons: false,
                text: 'Molimo Vas da popunite sva polja',
                timer: 2000
            });
        } else {

            $.ajax({

                'type': 'POST',
                'url': ajax,
                'data': data
            }).done(function (response) {

                if (response.errors === true) {

                    for (var i in response.messages) {

                        var errorMsg = response.messages[i];
                       
                        swal({
                            icon: "warning",
                            buttons: false,
                            text: errorMsg,
                            timer: 2000
                        });
                    }
                } else {

                    swal({
                        icon: "success",
                        buttons: false,
                        text: response.success,
                        timer: 2000
                    });
                }
            });
        }
    });
});


