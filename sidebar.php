<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
	<ul id="resources">
		<li><a href="https://www.dropbox.com/s/f2ouhz75lnm7tl4/realcom-styles_2-6-2014.zip" title="Working code featuring the elements of Real.com in the appropriate layout.">Get HTML Element Template <span>ZIP</span><sup>&darr;</sup></a></li>
		<li><a href="https://www.dropbox.com/sh/40y3zyjmve8hfub/xyVDAfO0tO" title="A PSD matching the working code that features the elements of Real.com in the appropriate layout.">Get Photoshop Templates <span>PSD</span><sup>&darr;</sup></a></li>
		<!-- <li><a href="#">Download HTML Element Template <span></span><sup>&darr;</sup></a></li> -->
	</ul>
    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

    	<?php dynamic_sidebar( 'sidebar1' ); ?>

    <?php else : ?>

    	<?php // This content shows up if there are no widgets defined in the backend. ?>

    	<div class="alert alert-help">
    		<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
    	</div>

    <?php endif; ?>

</div>