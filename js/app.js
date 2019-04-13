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
  }).on('change', '.fillable-type', function(e) {
    $('.rules').hide();
    $('.' + this.value).show();
  }).on('click', '.add-another', function(e) {
    e.preventDefault();
    var copy = $(this).prev().find('.question-select-option:last-child').clone();
    copy.find('input').val('');
    copy.find('.x').removeClass('hidden');
    $(this).prev().append(copy);
  }).on('click', '.x', function(e) {
    e.preventDefault();
    $(this).closest('.question-select-option').remove();    
  });
})
