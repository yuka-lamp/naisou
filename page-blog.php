<?php
/*-- Template Name: 投稿ページ --*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/';
get_header(); ?>

<div class="towcolumn sec">
<div class="container">
<div class="main">
<div class="blog-list">
<?php
$paged = get_query_var('paged')? get_query_var('paged') : 1;
$information= new WP_Query( array(
'post_type' => 'post',
'paged' => $paged,
'post_status' => 'publish',
'posts_per_page' => 10,
));
if ( $information ->have_posts() ) :
$id = get_the_ID();
$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
?>
<?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
<a class="blog-list__inner" href="<?php the_permalink(); ?>">
<div class="blog-list__inner__thumbnail">
<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $t; ?>">
</div>
<div class="blog-list__inner__info">
<h3><?php the_title(); ?></h3>
<p class="d-md-block d-none"><?php echo mb_substr(strip_tags(get_the_content()), 0, 90).'...'; ?></p>
<p class="text-right small mb-0 mt-3"><span><?php the_time('Y-m-d'); ?></span></p>
</div>
</a>
<?php endwhile; ?>
<?php
    if( function_exists('wp_pagenavi') ) {
            wp_pagenavi(array('query' => $information));
     }
?>
<?php endif;?>
</div>
</div>
<!-- main -->
<div class="side">
<?php get_sidebar(); ?>
</div>
<!-- side -->
</div>
<!-- container -->
</div>
<!-- towcolumn -->
<?php get_footer();
