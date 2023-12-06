$(document).ready(function() {
    $('#registrationForm').validate({
        rules: {
            firstName: 'required',
            lastName: 'required',
            dob: 'required',
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                digits: true
            },
            voivodeship: 'required',
            gender: 'required'
        },
        messages: {
            firstName: 'Proszę podać imię',
            lastName: 'Proszę podać nazwisko',
            dob: 'Proszę podać datę urodzenia',
            email: {
                required: 'Proszę podać adres email',
                email: 'Proszę podać poprawny adres email'
            },
            phone: {
                required: 'Proszę podać numer telefonu',
                digits: 'Proszę podać poprawny numer telefonu (tylko cyfry)'
            },
            voivodeship: 'Proszę wybrać województwo',
            gender: 'Proszę wybrać płeć'
        }
    });
});
