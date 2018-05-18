/* NAV BAR JEDI*/
$("#burger").click(function() {
    $(this).toggleClass("active");
    $("nav").toggleClass("show");
});

/* Background */
$(document).ready(function(){
    $('#intro').parallax("50%", 0.1);
    $('#second').parallax("50%", 0.1);
    $('.bg').parallax("0%", 0.3);
    $('#third').parallax("50%", 0.3);
})

/* range selector */
console.clear();

var app = new Vue({
    el: '.wrapper',
    data: {
        value: 10
    },
    computed: {
        total: function () {
            return this.value * 10
        }
    }
});

/*  Feuille match */

$


/* Apparition gif2 */

$(document).ready(function () {
    $('.soulmate').click(function () {
        $('.gif2').css('display', 'block');
    });
});
