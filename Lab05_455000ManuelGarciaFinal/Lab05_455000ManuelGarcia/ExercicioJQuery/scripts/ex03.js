$(document).ready(function(){  // do not delete 
// ----------------------------------------------------------------------------
// EXERCISE 3
// In the HTML file, first look at the code to see what has been hidden 
// with this jQuery.
// Then figure out how to make the appropriate character appear when we
// hover on his or her name in the main text.
//
// Hint: var amount = $(this).closest('.vacation').data('price');
// ----------------------------------------------------------------------------


var rama = $('#rama');
var sita = $('#sita');
var hanuman = $('#hanuman');
var ravana = $('#ravana');
var lakshmana = $('#lakshmana');

$('.character').hide();
$('.right').prepend("<p>Roll over a character's name to learn more.</p>");


$('.name').hover(function() {
    var characterID = $(this).data('person');
    $(characterID).toggle();
}, function() {
    var characterID = $(this).data('person');
    $(characterID).hide();
});



// ----------------------------------------------------------------------------
}); // do not delete
