<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/'; ?>

<div class="merchant">

<?php get_template_part('templates/loopclient'); ?>

<?php
$temp = 1;
$args = [
    'posts_per_page' => -1,
    'post_type' => 'merchant',
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => [
        [
            'taxonomy' => 'merchant_pref',
            'field' => 'slug',
            'terms' => 'osaka'
        ]
    ]
];
$posts = get_posts($args);
foreach ($posts as $post):
setup_postdata($post);

$id = get_the_ID();
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $img = get_the_post_thumbnail_url($id, 'medium');
}
$terms = get_the_terms($id, 'merchant_tag');
// var_dump($tems);
// ACF取得
$name = get_field('merchant_name');
$explanation = get_field('merchant_explanation');
$area = get_field('merchant_area');
$genre = get_field('merchant_genre');
$tel = get_field('merchant_tel');
$url = get_field('merchant_url');
if ($temp === 1) {
    $point = [];
    for ($i=1; $i <= 3; $i++) {
      $point[get_field('merchant_point_ttl_'.$i)] = get_field('merchant_point_txt_'.$i);
    }
}
?>

<?php if ($temp >= 3): ?>
<div class="merchant__inner second">
<h3 class="merchant__inner-ttl"><?php echo $name; ?></h3>
<div class="merchant__inner__info">
<table class="merchant__inner__info-support">
<tbody>
<tr>
<th>対応エリア</th>
<td><?php echo $area; ?></td>
</tr>
<tr>
<th>対応できる建物</th>
<td><?php echo $genre; ?></td>
</tr>
</tbody>
</table>
<?php if (is_array($terms)): ?>
<div class="merchant__inner__info-term">
<?php foreach ($terms as $key => $term): ?>
<span><?php echo $term->name; ?></span>
<?php endforeach; ?>
</div>
<?php endif; ?>
<h4 class="merchant__inner-ttl4">概要</h4>
<p class="merchant__inner-explanation"><?php echo $explanation; ?></p>
<a class="merchant__inner-more" href="<?php echo $p; ?>">さらに詳しく見る<i class="fas fa-chevron-right text-success"></i></a>
<div class="merchant__inner-contact">
<a class="btn btn-warning" href="tel:<?php echo $tel; ?>">TEL <?php echo $tel; ?></a>
<a class="btn btn-outline-dark" href="<?php echo $url; ?>" target="_blank">フォームからお問い合わせ</a>
</div>
</div>
</div>
<?php else: // その他の業者 ?>
<div class="merchant__inner">
<h3 class="merchant__inner-ttl"><?php echo $name; ?></h3>
<div class="merchant__inner__info">
<table class="merchant__inner__info-support">
<tbody>
<tr>
<th>対応エリア</th>
<td><?php echo $area; ?></td>
</tr>
<tr>
<th>対応できる建物</th>
<td><?php echo $genre; ?></td>
</tr>
</tbody>
</table>
<?php if (is_array($terms)): ?>
<div class="merchant__inner__info-term">
<?php foreach ($terms as $key => $term): ?>
<span><?php echo $term->name; ?></span>
<?php endforeach; ?>
</div>
<?php endif; ?>
<h4 class="merchant__inner-ttl4">概要</h4>
<p class="merchant__inner-explanation"><?php echo $explanation; ?></p>
<a class="merchant__inner-more" href="<?php echo $p; ?>">さらに詳しく見る<i class="fas fa-chevron-right text-success"></i></a>
<div class="merchant__inner-contact">
<a class="btn btn-warning" href="tel:<?php echo $tel; ?>">TEL <?php echo $tel; ?></a>
<a class="btn btn-outline-dark" href="<?php echo $url; ?>" target="_blank">フォームからお問い合わせ</a>
</div>
</div>
</div>
<?php endif; ?>
<?php ++$temp; endforeach; wp_reset_postdata(); ?>
</div>