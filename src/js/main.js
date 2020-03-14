var $ = require('jquery')
require('formstone/dist/js/core.js')
require('formstone/dist/js/mediaquery.js')
require('formstone/dist/js/touch.js')
require('formstone/dist/js/carousel.js')

$(".carousel").carousel({
    paged: true,
    show: 2,
    autoAdvance: true,
    autoTime: 1000,
    pagination: false,
    controls: {
        "container": ".controls",
        "previous": ".previous",
        "next": ".next"
    },
});