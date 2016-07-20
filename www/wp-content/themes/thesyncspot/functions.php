<?php
add_theme_support('post-thumbnails');

register_nav_menu('top-mnu', 'Верхнее меню');

register_sidebar(array(
	'name' => 'Top promo',
	'id' => 'top-promo',
	'description' => '',
	'before_widget' => '<div class="topPromo">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Sync text',
	'id' => 'synctext',
	'description' => '',
	'before_widget' => '<div class="synctext">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Testimonial',
	'id' => 'testimonial',
	'description' => '',
	'before_widget' => '<div class="testimonial">',
	'after_widget' => '<div class="arrowdown"></div></div>',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Never look',
	'id' => 'never_look',
	'description' => '',
	'before_widget' => '<div class="never_look">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Graphfill',
	'id' => 'graphfill',
	'description' => '',
	'before_widget' => '<div class="graphfill">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Join',
	'id' => 'join',
	'description' => '',
	'before_widget' => '<div class="join">',
	'after_widget' => '<div class="arrowdown"></div></div>',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Searchfilter',
	'id' => 'searchfilter',
	'description' => '',
	'before_widget' => '<div class="searchfilter">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Trackall',
	'id' => 'trackall',
	'description' => '',
	'before_widget' => '<div class="trackall">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Contactcloud',
	'id' => 'contactcloud',
	'description' => '',
	'before_widget' => '<div class="contactcloud">',
	'after_widget' => '<div class="arrowdown"></div></div>',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Contactfrom',
	'id' => 'contactfrom',
	'description' => '',
	'before_widget' => '<div class="contactfrom">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => ''
	));




add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

add_action( 'product_cat_edit_form_fields', 'wpm_taxonomy_edit_meta_field', 10, 2 );

function wpm_taxonomy_edit_meta_field($term) {

	$t_id = $term->term_id;
	$term_meta = get_option( "taxonomy_$t_id" );
	$content = $term_meta['custom_term_meta'] ? wp_kses_post( $term_meta['custom_term_meta'] ) : '';
	$settings = array( 'textarea_name' => 'term_meta[custom_term_meta]' );
	?>
	<tr class="form-field">
		<th scope="row" valign="top"><label for="term_meta[custom_term_meta]">Описание под товарами</label></th>
		<td>
			<?php wp_editor( $content, 'product_cat_details', $settings ); ?>

		</td>
	</tr>
	<?php
}

add_action( 'edited_product_cat', 'save_taxonomy_custom_meta', 10, 2 );  
add_action( 'create_product_cat', 'save_taxonomy_custom_meta', 10, 2 );

function save_taxonomy_custom_meta( $term_id ) {
	if ( isset( $_POST['term_meta'] ) ) {
		$t_id = $term_id;
		$term_meta = get_option( "taxonomy_$t_id" );
		$cat_keys = array_keys( $_POST['term_meta'] );
		foreach ( $cat_keys as $key ) {
			if ( isset ( $_POST['term_meta'][$key] ) ) {
				$term_meta[$key] = wp_kses_post( stripslashes($_POST['term_meta'][$key]) );
			}
		}

		update_option( "taxonomy_$t_id", $term_meta );
	}
}

//add_action( 'woocommerce_after_shop_loop', 'wpm_product_cat_archive_add_meta' );



add_filter('widget_text', 'do_shortcode');

add_filter('loop_shop_per_page', create_function('$cols', 'return 20;'));

//переопределени стандартной функции

function woocommerce_content() {
	if ( is_singular( 'product' ) ) {
		while ( have_posts() ) : the_post();
		wc_get_template_part( 'content', 'single-product' );
		endwhile;
	} else { ?>
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<div class="page-title"><?php woocommerce_page_title(); ?></div>
	<?php endif; ?>
	<?php do_action( 'woocommerce_archive_description' ); ?>
	<?php if ( have_posts() ) : ?>
	<?php do_action('woocommerce_before_shop_loop'); ?>
	<?php woocommerce_product_loop_start(); ?>
	<?php woocommerce_product_subcategories(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php wc_get_template_part( 'content', 'product' ); ?>
<?php endwhile; // end of the loop. ?>
<?php woocommerce_product_loop_end(); ?>
<?php do_action('woocommerce_after_shop_loop'); ?>
<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
	<?php wc_get_template( 'loop/no-products-found.php' ); ?>
<?php endif;
}
}

wp_dequeue_script ( 'prettyPhoto'); 
wp_dequeue_script ( 'prettyPhoto-Init');

remove_filter ( 'the_content', 'easy_image_gallery_append_to_content');