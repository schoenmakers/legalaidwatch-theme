jQuery(document).ready(function() {



jQuery('.sidetoggle').click(function() {
  jQuery('#sidebar').slideToggle('slow', function() {
    // Animation complete.
  });
});


/* Menu */

  // This hides all the sub menus on page load
  jQuery('#nav-main ul.sub-menu').hide();
  // This makes sure that all the sub menus are open when applicable
  jQuery('#nav-main li.current-menu-item').children().show();
  // This keeps the nav open to the item that you are navigating to.
  jQuery('#nav-main li.current-menu-item').parents().show(); 
 
  jQuery('#nav-main ul li a').click(
    function() {
      var checkElement = jQuery(this).next();
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      // the next two lines are what take care of the top level
      var thisId = jQuery(this).parent('li').attr('id');
      jQuery('#nav-main ul li#'+thisId+' > ul').slideUp('normal');
        return false;
        }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
		jQuery(this).parent().siblings("li:has(ul)").find("ul").slideUp('normal');      	      	
        jQuery('#nav-main ul ul li ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
        }
      }
    );
  jQuery('#nav-main ul ul li a').click(
    function() {
      var checkElement = jQuery(this).next();
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {     
        return false;
        }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      // the next two lines are what take care of the secondary levels
        var thisId = jQuery(this).parent('li').attr('id');
	jQuery('#nav-main ul ul li#'+thisId+' > ul').slideUp('normal');       
        jQuery('#nav-main ul ul li ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
        }
      }
    );	    
});    
    