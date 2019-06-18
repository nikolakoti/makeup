
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

            swal({
                icon: "info",
                buttons: false,
                text: 'Vaša poruka se šalje'

            });

            var swalModal = $('.swal-modal');

            var loader = '<img class="img-fluid swal-text" src="/skins/front/images/ajax-loader.gif" alt="loader" style="margin-top:2px; margin-left:-14px;"/>';

            swalModal.find('.swal-text').after(loader);

            setTimeout(function () {

                $.ajax({

                    'type': 'POST',
                    'url': ajax,
                    'data': data
                }).done(function (response) {

                    if (response.errors === true) {

                        for (var i in response.messages) {

                            var errorMsg = response.messages[i];

                            if (response.messages.length > 1) {
                                
                                 swal({
                                    icon: "warning",
                                    buttons: false,
                                    text: response.messages[0],
                                    timer: 2000
                                });
                                
                                swalModal.find('.swal-text').after('<div class="swal-text" style="padding-top:5px;">'+ response.messages[1] +'</div>');

                            } else {

                                swal({
                                    icon: "warning",
                                    buttons: false,
                                    text: errorMsg,
                                    timer: 2000
                                });
                            }


                        }
                    } else {

                        swal({
                            icon: "success",
                            buttons: false,
                            text: response.success,
                            timer: 2000
                        });

                        contactForm[0].reset();
                    }
                });

            }, 3000);


        }
    });
});


