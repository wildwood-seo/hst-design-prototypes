function add_question_to_mini_list() {
  var question_no = $('.mini-questions').find('li').length + 1;
  $('.mini-questions').append('<li><button class="btn btn-outline btn-light btn-block">Question ' + question_no + '</button></li>');
}

$('#tour').crumble();
$(function() {
  $('body').on('click', '.add-question', function(e) {
    e.preventDefault();
    $('#question-picker').modal('show');
  }).on('click', '.disabled', function(e) {
    e.preventDefault();
  }).on('click', '.delete', function(e) {
    e.preventDefault();
    $(this).parent().remove();
    $('.mini-questions').find('li:last-child').remove();
  }).on('click', '.question-type-1', function(e) {
    e.preventDefault();
    $('#question-picker').modal('hide');
    $('#question-type-1').modal('show');
  }).on('click', '.question-type-2', function(e) {
    e.preventDefault();
    $('#question-picker').modal('hide');
    $('#question-type-2').modal('show');
  }).on('click', '.question-type-3', function(e) {
    e.preventDefault();
    $('#question-picker').modal('hide');
    $('#question-type-3').modal('show');
  }).on('click', '.question-type-4', function(e) {
    e.preventDefault();
    $('#question-picker').modal('hide');
    $('#question-type-4').modal('show');
  }).on('click', '.add-question-1', function(e) {
    e.preventDefault();
    $('#question-type-1').modal('hide');
    $('.questions').append($('#question-1-sample').html());
    add_question_to_mini_list();
  }).on('click', '.add-question-2', function(e) {
    e.preventDefault();
    $('#question-type-2').modal('hide');
    $('.questions').append($('#question-2-sample').html());
    add_question_to_mini_list();
  }).on('click', '.add-question-3', function(e) {
    e.preventDefault();
    $('#question-type-3').modal('hide');
    $('.questions').append($('#question-3-sample').html());
    add_question_to_mini_list();
  }).on('click', '.add-question-4', function(e) {
    e.preventDefault();
    $('#question-type-4').modal('hide');
    $('.questions').append($('#question-4-sample').html());
    add_question_to_mini_list();
  });
})
