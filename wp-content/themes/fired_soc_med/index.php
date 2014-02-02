<?php
/* Custome theme developed for Fired Social Media Editors project
Theme developed by Sean Henderson - SeanTHenderson.com
 */

get_header();

$intro = get_bloginfo('description');
echo '<div id="intro-text">' . $intro . '</div>';

echo '<div id="fired-counter">' . wp_count_posts()->publish . '</div>';

echo '<div class="posts-wrapper">';
	echo '<div class="post-date post-label">DATE</div>';
	echo '<div class="post-company post-label">COMPANY</div>';
	echo '<div class="post-offended post-label">OFFENDED PARTY</div>';
	echo '<div class="post-link post-label">STORY</div><br>';
echo '</div>';

$args = array(
	'post_type' => 'post',
	'post_count' => '20'
);
$posts = new WP_Query($args);
if($posts->have_posts()) {
	while($posts->have_posts()) {
		$posts->the_post();
		$date = get_post_meta($post->ID, "date_meta_value_key", true);
		$company = get_post_meta($post->ID, "company_meta_value_key", true);
		$offended = get_post_meta($post->ID, "offended_meta_value_key", true); 
		$link = get_post_meta($post->ID, "link_meta_value_key", true);
		echo '<div class="posts-wrapper">';
			echo '<div class="post-date post-category">' . $date . ' ' . '</div>';
			echo '<div class="post-company post-category">' . $company . ' ' . '</div>';
			echo '<div class="post-offended post-category">' . $offended . ' ' . '</div>';
			echo '<a href="' . $link . '" target="_blank"><div class="post-link post-category">' . $link . '</div></a><br>';
		echo '</div>';
	}
} else {
	//no posts
}
wp_reset_query();

get_footer();

?>
