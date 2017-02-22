$('.authors-list').click(function (e) {
	 let authorId = $(this).attr('data-toggle');
	 $('.author-details').addClass('hide');
	 $('#' + authorId).removeClass('hide');
});