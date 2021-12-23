(function($) {

    var form = $("#signup-form");
    // form.steps({
    //     headerTag: "h3",
    //     bodyTag: "fieldset",
    //     transitionEffect: "slideLeft",
    //     labels: {
    //         previous : 'Previous',
    //         next : 'Next <i class="zmdi zmdi-long-arrow-down"></i>',
    //         finish : 'Submeter',
    //         current : ''
    //     },
    //     titleTemplate : '<span class="title">#title#</span>',
    //     onInit : function (event, currentIndex) { 
    //         // Suppress (skip) "Warning" step if the user is old enough.
    //     },
    //     onStepChanging: function (event, currentIndex, newIndex)
    //     {
    //         form.validate().settings.ignore = ":disabled,:hidden";
    //         return form.valid();
    //     },
    //     onFinishing: function (event, currentIndex)
    //     {
    //         form.validate().settings.ignore = ":disabled";
    //         return form.valid();
    //     },
    //     onFinished: function (event, currentIndex)
    //     {
    //         alert('Sumited');
    //     },
    //     onStepChanged: function (event, currentIndex, priorIndex)
    //     {

         
    //     }
    // });

    $(".acc-wizard").accwizard({
        addButtons  : true,
        nextText : 'Avançar',
        nextClasses : 'au-btn',
        backText : 'Voltar',
        backClasses : 'au-btn au-btn-back'
    });

    // $('.panel-group .panel-default').on('click', function() {
    //     $('.panel-group').find('.active').removeClass("active");
    //     $(this).addClass("active");
    // });
    $('.panel').on('show.bs.collapse', function (e) {
        $(this).addClass('active');
    })
    $('.panel').on('hide.bs.collapse', function (e) {
        $(this).removeClass('active');
    })
    // jQuery(this).toggleClass('isOpen');

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });

    $.dobPicker({
        daySelector: '#birth_date',
        monthSelector: '#birth_month',
        yearSelector: '#birth_year',
        dayDefault: 'Dia',
        monthDefault: 'Mês',
        yearDefault: 'Ano',
        minimumAge: 2,
        maximumAge: 60
    });

   

})(jQuery);