(function($) {
Drupal.behaviors.myBehavior = {
  attach: function (context, settings) {
  $('#show-search').click(function() {
		$('#search-block-form').show();
		$('#show-search').hide();
	})
	$('#edit-name').attr('placeholder','username or email');
	$('#edit-pass').attr('placeholder','password');
	var window = "Whoops, at least I only broke my code.";
  console.log(window);

  }
};
})(jQuery);
console.log(window);