<?php
/**
 * Created by PhpStorm.
 * User: Practice
 * Date: 9/3/2015
 * Time: 7:31 PM
 */
?>
<form action="/" method="get">
	<label for="search">Search in <?php echo home_url( '/' ); ?></label>
<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
</form>




<?php //html5 search form?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>