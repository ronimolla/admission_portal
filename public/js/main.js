$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 100,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Back ',
            next : 'Next'
        },
        
    });

});
