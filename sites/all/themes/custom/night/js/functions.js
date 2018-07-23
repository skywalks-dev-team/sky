(function($) {
Drupal.behaviors.myBehavior = {
  attach: function (context, settings) {

    $('#show-search').click(function() {
		$('#search-block-form').show();
		$('#show-search').hide();
	})

  }
};
})(jQuery);