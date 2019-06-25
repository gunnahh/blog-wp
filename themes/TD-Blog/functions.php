<?php
function jl_remove_post_dates() {
	add_filter('the_date', '__return_false');
	add_filter('the_time', '__return_false');
	add_filter('the_modified_date', '__return_false');
	add_filter('get_the_date', '__return_false');
	add_filter('get_the_time', '__return_false');
	add_filter('get_the_modified_date', '__return_false');
} 
add_action('loop_start', 'jl_remove_post_dates');

function dtbaker_wp_cloudfront(){
    add_filter('user_can_richedit','__return_true');
}
add_action( 'init', 'dtbaker_wp_cloudfront' , 9 );

add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'tdblog', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'TD-Blog' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'TD-Blog' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

// Changing excerpt more
/*
function et_excerpt_length($length) {
    return 12;
}
add_filter('excerpt_length', 'et_excerpt_length');


function et_excerpt_more($more) {
	global $post;
	return ' <a href="'. get_permalink($post->ID) . '" class="more-link">' . '&hellip;Read more' . '</a>';
}
add_filter('excerpt_more', 'et_excerpt_more');
*/

function et_excerpt_length($length) {
    return 15;
}
add_filter('excerpt_length', 'et_excerpt_length');


//Remove [...] default 
function change_excerpt( $text )
{
    $pos = strrpos( $text, '[');
    if ($pos === false)
    {
        return $text;
    }

    return rtrim (substr($text, 0, $pos) );
}
add_filter('get_the_excerpt', 'change_excerpt');

function custom_the_excerpt( $excerpt ) {
    global $post;

    if( $post->post_excerpt ) {
        // If the post has manual excerpt,
        // it already has a point to end
        // the paragraph, so we don't want
        // the point + the ellipsis: ....
        // Clean it!
        $ellipsis = '';
    } else {
        $ellipsis = '';
    }

    // Save the link in a variable
    $readmoreLang = __('Read more','tdblog');
    $link = $ellipsis . '<a href="'. get_permalink($post->ID) . '" class="more-link">' . '&hellip;' . $readmoreLang  . '</a>';

    // Concatenate the link to the excerpt
    return $excerpt . $link;

    }

add_filter( 'get_the_excerpt', 'custom_the_excerpt' );

//Active category link on Single Post
function sgr_show_current_cat_on_single($output) {

	global $post;

	if( is_single() ) {

		$categories = wp_get_post_categories($post->ID);

		foreach( $categories as $catid ) {
			$cat = get_category($catid);
			// Find cat-item-ID in the string
			if(preg_match('#cat-item-' . $cat->cat_ID . '#', $output)) {
				$output = str_replace('cat-item-'.$cat->cat_ID, 'cat-item-'.$cat->cat_ID . ' current-cat', $output);
			}
		}

	}
	return $output;
}
add_filter('wp_list_categories', 'sgr_show_current_cat_on_single');

//define('WP_SCSS_ALWAYS_RECOMPILE', true);


//Custom comment form
function tdblog_comment_form_default_fields( $fields ) {
    $commenter     = wp_get_current_commenter();
    $user          = wp_get_current_user();
    $user_identity = $user->exists() ? $user->display_name : '';
    $req           = get_option( 'require_name_email' );
    $aria_req      = ( $req ? " aria-required='true'" : '' );

    $fields = [
	    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'tdblog') . '</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required data-errormessage-value-missing="' . __( 'Please fill out this field', 'tdblog'  ) . '"></textarea></p>',
	    
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'tdblog'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245" required data-errormessage-value-missing="' . __( 'Please fill out this field', 'tdblog'  ) . '"/></p>',
                    
        'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email', 'tdblog'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes" required data-errormessage-value-missing="' . __( 'Please fill out this field', 'tdblog'  ) . '" /></p>',
        
        'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website', 'tdblog'  ) . '</label> ' .
                    '<input id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p>',
        
    ];

    return $fields;
}
add_filter( 'comment_form_default_fields', 'tdblog_comment_form_default_fields' );

/**
 * Remove the original comment field because we've added it to the default fields
 * using wpse250243_comment_form_default_fields(). If we don't do this, the comment
 * field will appear twice.
 */
function tdblog_comment_form_defaults( $defaults ) {
    if ( isset( $defaults[ 'comment_field' ] ) ) {
        $defaults[ 'comment_field' ] = '';
    }

    return $defaults;
}
add_filter( 'comment_form_defaults', 'tdblog_comment_form_defaults', 10, 1 );
