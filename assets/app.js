/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
import $ from 'jquery';
// start the Stimulus application
import './bootstrap';

$('.custom-file-input').on('change', function (e){
    var inputFile = e.currentTarget;
    $(inputFile).parent().find('.custom-file-label').html(inputFile.files[0].name);
});
$('#searchListCoach').on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $('#tableListCoach tr').filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});
$('#searchListMember').on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $('#tableListMember tr').filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});
