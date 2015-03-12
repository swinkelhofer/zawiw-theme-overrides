jQuery(document).ready(function() {
	if(jQuery('.nav-secondary').size() != 0)
	{
		jQuery('.site-container').before('<a href="javascript: menu();" id="menu" class="fa fa-bars fa-lg"></a>');
		jQuery('.nav-secondary').prepend('<a href="javascript: menu();" id="minimenu" class="fa fa-arrow-left"></a>');
	}
});

function menu() {
	if(jQuery('.site-container').hasClass('mobileanimate'))
		jQuery('.site-container, .nav-secondary, #menu').each(function(index, elem) {
			jQuery(elem).removeClass('mobileanimate');
		});
	else
		 jQuery('.site-container, .nav-secondary, #menu').each(function(index, elem) {
                        jQuery(elem).addClass('mobileanimate');
                });
}
