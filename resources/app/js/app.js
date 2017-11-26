$(document).ready(function(){
    $(".button-collapse").sideNav();
    $('ul.tabs').tabs();
    $('.materialboxed').materialbox();
    $('.slider').slider();
    $('.modal').modal();
    $('select').material_select();
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: '',
        close: 'Close',
        closeOnSelect: true // Close upon selecting a date,
    });
    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: true, // Use AM/PM or 24-hour format
        donetext: 'Ok', // text for done-button
        cleartext: '', // text for clear-button
        canceltext: 'Close', // Text for cancel-button
        autoclose: true, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function(){} //Function for after opening timepicker
    });
});
