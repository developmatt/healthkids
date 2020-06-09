var $ = require('jquery')

require('@fortawesome/fontawesome-free/js/all')

$(document).ready(function() {
    $('.doubt').click(function() {
        $(this).toggleClass('closed');
        $(this).find('.doubt__description-body').slideToggle();
    })
})