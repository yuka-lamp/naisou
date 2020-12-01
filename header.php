<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/';
$pref = single_cat_title('', false);
if (is_home() || is_front_page()) {
  $pref = '大阪';
}
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php if (get_post_type() === 'merchant'): ?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
<?php endif; ?>
<?php wp_head(); ?>
<style>
* {
  word-break: break-all;
}
.merchant__inner__point table th {
  white-space: normal;
}
.link-ranking {
  background-color: rgba(241,143,1,.15);
  text-align: center;
  padding: 2rem 1rem;
}
.link-ranking h2 {
  font-size:1.4rem;
  font-weight:bold;
  margin-bottom: 1rem
}
.link-ranking p {
  margin-bottom:.5rem;
  font-weight:bold
}
.link-ranking p span {
  color:#f18f01;
}
.link-ranking .btn {
  width: 300px;
  border-radius: 10px;
  padding: .7rem;
  background-color: #e84700;
  border-color: #e84700;
}
.link-ranking .btn:after {
  display: none;
}
.link-ranking .btn:before {
  content: '';
  background: url("<?php echo $wp_url; ?>/images/link_stanp.png");
  background-size: cover;
  width: 60px;
  height: 60px;
  position: absolute;
  right:-20px;
  top:-30px
}
.star .fas {
  color: #f18f01;
}
.star span {
  font-size: 2rem;
  color: #ff7600;
}
</style>
<?php if (!is_user_logged_in()): ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168095299-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-168095299-1');
</script>
<?php endif; ?>
</head>
<body>
<!-- ヘッダー -->
<header class="header sticky-top shadow-sm p-3">
<div class="conatiner">
<div class="header__logo">
<div class="header__logo-img"><img src="<?php echo $wp_url; ?>/images/logo_icon.png" alt="<?php bloginfo("name")?>" srcset="<?php echo $wp_url; ?>/images/logo_icon.png 1x, <?php echo $wp_url; ?>/images/logo_icon@2x.png 2x"></div>
<h1 class="header__logo-ttl"><a href="<?php echo $home; ?>">内装解体の<br class="d-md-none">業者・会社の比較サイト<?php if (is_front_page() || is_home() || is_tax()):?><span><?php echo $pref; ?></span><?php endif; ?></a></h1>
</div>
</div>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>
