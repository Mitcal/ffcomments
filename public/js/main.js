$(document).ready(function () {
  window._token = $('meta[name="csrf-token"]').attr('content')

  moment.updateLocale('en', {
    week: {dow: 1} // Monday is the first day of the week
  })

  $('.date').datetimepicker({
    format: 'DD/MM/YYYY',
    locale: 'en',
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

  $('.datetime').datetimepicker({
    format: 'DD/MM/YYYY HH:mm:ss',
    locale: 'en',
    sideBySide: true,
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

  $('.timepicker').datetimepicker({
    format: 'HH:mm:ss',
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

  $('.select-all').click(function () {
    let $select2 = $(this).parent().siblings('.select2')
    $select2.find('option').prop('selected', 'selected')
    $select2.trigger('change')
  })
  $('.deselect-all').click(function () {
    let $select2 = $(this).parent().siblings('.select2')
    $select2.find('option').prop('selected', '')
    $select2.trigger('change')
  })

  $('.select2').select2()

  $('.treeview').each(function () {
    var shouldExpand = false
    $(this).find('li').each(function () {
      if ($(this).hasClass('active')) {
        shouldExpand = true
      }
    })
    if (shouldExpand) {
      $(this).addClass('active')
    }
  })

$('button.sidebar-toggler').click(function () {
    setTimeout(function() {
      $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
    }, 275);
  })
  
	$(".comment-reply-link").click(function(){
    if ($(this).find('#comment-form').length > 0) return;

		var comment_id = $(this).attr('data-comment-id');
		  if($('.comment-respond-form-'+comment_id+' h2').length == 0) {
			var comment_author =  $(this).attr('data-comment-author');
			var html = '<h2 id="reply-title" class="comment-reply-title">Reply to '+comment_author+'<small><a rel="nofollow" class="cancel-comment-reply-link" data-comment-id="'+comment_id+'" href="javascript:void(0);">Cancel reply</a></small></h2>';
			$('.comment-respond-form-'+comment_id).show();
      $('.comment-respond-form-'+comment_id).prepend(html);
      var new_form = $('#comment-form').clone().appendTo('.comment-respond-form-'+comment_id);
      new_form.find('.parent_id').val(comment_id);
      new_form.find('.btn').val('Reply');
		  }
	});
	
	//$(".cancel-comment-reply-link").click(function(e){
	$("div.card").on('click', '.cancel-comment-reply-link', function() {
		var comment_id = $(this).attr('data-comment-id');
		 $('.comment-respond-form-'+comment_id).hide();
		 $('.comment-respond-form-'+comment_id+' h2').remove();
 	});
})
