<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/';

$pref = single_cat_title('', false);
$pref_slug = $term;
get_header(); ?>
<section class="mv">
<img class="w-100 border-0 img-switch" src="<?php echo $wp_url; ?>/images/mv_<?php echo $pref_slug; ?>_pc.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $wp_url; ?>/images/mv_<?php echo $pref_slug; ?>_pc.png 1x, <?php echo $wp_url; ?>/images/mv_<?php echo $pref_slug; ?>_pc@2x.png 2x">
</section>
<!-- mv -->

<div class="towcolumn sec">
<div class="container">
<div class="main">
<section class="read">
<div class="read__wrap">
<div class="read__wrap__inner">
<h2 class="read__wrap__inner-ttl"><img src="<?php echo $wp_url; ?>/images/about_ttl_pc.png" alt="業者比較" srcset="<?php echo $wp_url; ?>/images/about_ttl_pc.png 1x, <?php echo $wp_url; ?>/images/about_ttl_pc@2x.png 2x"></h2>
<div class="read__wrap__inner-star"><img src="<?php echo $wp_url; ?>/images/about_star.png" alt="星" srcset="<?php echo $wp_url; ?>/images/about_star.png 1x, <?php echo $wp_url; ?>/images/about_star@2x.png 2x"></div>
<h3 class="read__wrap__inner-h3"><?php echo $pref; ?>で内装解体はどこに頼むべき？</h3>
<p class="read__wrap__inner-p"><?php echo $pref; ?>を中心としたエリアで内装解体を行う業者は数え切れない程たくさんありますが、一体どこに依頼するべきなのでしょうか？
<br>費用を安くしたいけど、品質は高いほうが良いし。スタッフさんの対応も心配、そんなお声にお応えすべく、<?php echo $pref; ?>の内装解体業者を比較しました。
<br>大半の内装解体業者は無料で見積りをとることができますので、気になる内装解体業者があったら、電話で相談だけでもしてみましょう！</p>
</div>
</div>
</section>

<div class="merchant">

<?php get_template_part('templates/loopclient'); ?>

<?php
$temp = 1;
if (have_posts()): while (have_posts()): the_post();
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
?>

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

<?php ++$temp; endwhile; endif; ?>
</div>

<div id="seotxt" class="py-4 my-4 border-top">
<?php echo term_description(); ?>
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
