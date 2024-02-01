 $(document).ready(function(){
       $('.slider').slider();
       $('.collapsible').collapsible();
       $('.carousel').carousel({indicator: true,fullWidth: true});
       $('.carousel.carousel-slider').carousel({fullWidth: true});
       $('.materialboxed').materialbox();
       $('.modal').modal();
       $(".dropdown-button").dropdown({hover: true,alignment: 'right',closeOnClick: true});
       $(".dropdown-buttonelite").dropdown({hover: true,alignment: 'left',closeOnClick: true});
       $('.testimonials div:first').show();
        setInterval(function(){ $('.testimonials div:first-child').fadeOut().next('div').fadeIn().end().appendTo('.testimonials') },3000);
        $('select').material_select();
        $('.button-collapse').sideNav({
                menuWidth: 220, // Default is 300
                edge: 'left', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true, // Choose whether you can drag to open on touch screens,
                onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
                onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
              }
            );

        $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
      });
$(document).ready(function(){
    $("button").click(function(){
        $("div").animate({left: '250px'});
    });
});
});

function prev(){
	$('.carousel').carousel('prev', 4);
}
function next(){
	$('.carousel').carousel('next', 3);
}
function changecolor(){
    document.getElementByTag('p').style.color = 'red';
}

setInterval(function(){$('.carousel').carousel('next')},3000);