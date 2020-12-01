<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>
<footer class="footer py-3">
<div class="container">
<div class="footer__links">
<div class="footer__links-link mb-md-0 mb-3">
<a href="<?php echo $home; ?>/company/">運営会社</a>
<a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
<!-- <a href="<?php echo $home; ?>/">お問い合わせ</a> -->
</div>
<div class="footer__links-copy">
<p>©2020 <?php bloginfo("name"); ?></p>
</div>
</div>
</div>
</footer>

<?php if (is_page('kowarsu')): ?>
<a class="fix-btn tel" href="tel:0120-133-064"><img src="<?php echo $wp_url; ?>/dist/images/fix_btn_tel_sp.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/fix_btn_tel_sp.png 1x, <?php echo $wp_url; ?>/dist/images/fix_btn_tel_sp@2x.png 2x"></a>
<?php else: ?>
<a class="fix-btn" href="<?php echo $home; ?>/ikkyuu/"><img src="<?php echo $wp_url; ?>/dist/images/fix_btn_sp.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/fix_btn_sp.png 1x, <?php echo $wp_url; ?>/dist/images/fix_btn_sp@2x.png 2x"></a>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
