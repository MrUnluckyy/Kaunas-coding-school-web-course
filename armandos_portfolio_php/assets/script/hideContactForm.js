
var inputElementName = document.getElementById('contact-me__user-name-input');
var inputElementEmail = document.getElementById('contact-me__user-email-input');
var inputElementText = document.getElementById('contact-me__user-text-input');

document.getElementById('contact-me__send-btn').addEventListener('click', function(){
    hideContactForm();
    sayThanksToUser();

});



function getUserName(){
    var inputValue = inputElementName.value;
    return inputValue;
}

function hideContactForm(){
    document.getElementById('contact-me-container__toggle-option').style.display="none";
    document.getElementById('contact-me__send-btn').style.display="none";
}

function sayThanksToUser(){
    var userName = getUserName();
    var message = 'Thank you for your message, ' + userName + '! <br> Artist will come back to you shortly.';
    document.getElementById('thank-for-contact-me-submision').innerHTML = message;
};



