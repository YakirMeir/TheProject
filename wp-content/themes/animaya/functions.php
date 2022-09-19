<?php

function add_theme_scripts() {
  
	wp_enqueue_style( 'custostyle', get_template_directory_uri() . '/style.css', array (), uniqid(), 'all');
	wp_enqueue_script( 'custojs', get_template_directory_uri() . '/script.js', array (), uniqid(), true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



function rudr_add_new_tags_metabox(){
	$id = 'rudrtagsdiv-post_tag'; // it should be unique
	$heading = 'Tags'; // meta box heading
	$callback = 'rudr_metabox_content'; // the name of the callback function
	$post_type = 'post';
	$position = 'side';
	$pri = 'default'; // priority, 'default' is good for us
	add_meta_box( $id, $heading, $callback, $post_type, $position, $pri );
}
add_action( 'admin_menu', 'rudr_add_new_tags_metabox');
 
/*
 * Fill
 */
function rudr_metabox_content($post) {  
 
	// get all blog post tags as an array of objects
	$all_tags = get_terms( array('taxonomy' => 'post_tag', 'hide_empty' => 0) ); 
 
	// get all tags assigned to a post
	$all_tags_of_post = get_the_terms( $post->ID, 'post_tag' );  
 
	// create an array of post tags ids
	$ids = array();
	if ( $all_tags_of_post ) {
		foreach ($all_tags_of_post as $tag ) {
			$ids[] = $tag->term_id;
		}
	}
 
	// HTML
	echo '<div id="taxonomy-post_tag" class="categorydiv">';
	echo '<input type="hidden" name="tax_input[post_tag][]" value="0" />';
	echo '<ul>';
	foreach( $all_tags as $tag ){
		// unchecked by default
		$checked = "";
		// if an ID of a tag in the loop is in the array of assigned post tags - then check the checkbox
		if ( in_array( $tag->term_id, $ids ) ) {
			$checked = " checked='checked'";
		}
		$id = 'post_tag-' . $tag->term_id;
		echo "<li id='{$id}'>";
		echo "<label><input type='checkbox' name='tax_input[post_tag][]' id='in-$id'". $checked ." value='$tag->slug' /> $tag->name</label><br />";
		echo "</li>";
	}
	echo '</ul></div>'; // end HTML
}