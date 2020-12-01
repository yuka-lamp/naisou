<?php
/*
template name: クライアント
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
the_post();
?>

<div class="towcolumn">
<div class="container">
<div class="main">
<div class="single">

<section class="single__merchant__mv">
<div id="main_mv" class="slick">
<div class="">
  <img src="<?php echo $wp_url; ?>/dist/images/main_mv_1.jpg" alt="<?php the_title(); ?>の写真1">
</div>
<div class="">
  <img src="<?php echo $wp_url; ?>/dist/images/main_mv_2.jpg" alt="<?php the_title(); ?>の写真2">
</div>
<div class="">
  <img src="<?php echo $wp_url; ?>/dist/images/main_mv_3.jpg" alt="<?php the_title(); ?>の写真3">
</div>
</section>

<div class="single__merchant_covid text-center bg-secondary py-3 mb-5">
<p class="m-0 text-primary">新型コロナウイルス対策業者</p>
</div>

<div class="single__merchant__info">
<div class="single__merchant__info-wrap">
<div class="single__merchant__info-txt w-100">
<p class="tag text-white bg-primary">当サイトおすすめ業者</p>
<h3><?php the_title(); ?></h3>
<div class="mb-3 row mx-0">
<div class="col-md">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/main_01.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url; ?>/dist/images/main_01.png 1x, <?php echo $wp_url; ?>/dist/images/main_01@2x.png 2x">
</div>
<div class="col-md d-md-block d-none">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/main_02.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url; ?>/dist/images/main_02.png 1x, <?php echo $wp_url; ?>/dist/images/main_02@2x.png 2x">
</div>
<div class="col-md d-md-block d-none">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/main_03.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url; ?>/dist/images/main_03.png 1x, <?php echo $wp_url; ?>/dist/images/main_03@2x.png 2x">
</div>
</div>
<table>
<tbody>
<tr>
<th>対応エリア</th>
<td>大阪府、兵庫県、京都府、奈良県、東京都</td>
</tr>
<tr>
<th>建物の種類</th>
<td>飲食店、コンビニ、美容室、歯科医院、アミューズメント施設、小売店、サロンなど</td>
</tr>
</tbody>
</table>
</div>
</div>
<p class="mt-3 mb-0">3,000件を超える圧倒的な実績の多さで信頼感抜群！実質”業界最安値”で高品質な内装解体を行う業者です。処分に困る解体の際に出る不用品の買取もしてくれるので、その分コストを抑えて内装解体が可能！即日対応可能で仕事もスピーディーなので、お急ぎの場合も安心です。</p>
<p class="mt-3 mb-0 font-weight-bold">料金　12,000円〜</p>
<div class="">
  <div class="star text-center">
    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-2">4.9</span><br>
    <a href="#menu2">口コミ 35件</a>
  </div>
</div>
</div>
<!-- single__merchant__info -->
<div class="mt-5">
<div class="merchant__inner__cta">
  <div class="d-block text-center p-0 mb-1">
  <img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign@2x.png 2x">
  </div>
<a class="d-block text-center p-0 mb-2" href="tel:0120-133-064">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc@2x.png 2x">
</a>
<a class="d-block text-center p-0" href="<?php echo $home; ?>/form/" target="_blank">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_form_pc@2x.png 2x">
</a>
</div>
</div>
<!-- merchant__inner__cta -->
<!-- <div class="single__merchant__menu">
<a href="#menu1">料金・サービス</a>
<a href="#menu2">口コミ</a>
<a href="#menu3">事例紹介</a>
<a href="#menu4">スタッフ</a>
<a href="#menu5">おすすめ情報</a>
</div> -->
<!-- single__merchant__menu -->

<div id="menu2" class="origin__inner mt-4">
<h3><span>口コミ</span></h3>
<div class="origin__inner__wrap">
<div class="origin__inner__wrap-item">
<div class="review">
<p><span class="font-weight-bold mr-3">口コミ評価</span>
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
<span class="ml-2">4.9<small class="ml-1">(35件)</small></span>
</p>
<div class="review__wrap">
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">厨房機器の買い取りもして頂きました。</p>
<p>厨房機器もたくさんあり処分するだけで、むしろ費用がかかると思っていましたが、
<br>コワースさんでは厨房機器の買取もされており、買取金額と工事費用を相殺して頂き、結果安く工事して頂けました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">複数店舗の内装解体をお願いしたところ安くしてもらえました。</p>
<p>色々あり一気に3店舗の内装解体をお願いすることになり、コワースさんに相談したところ、
<br>予想よりお安くして頂き、本当に助かりました。この度は無理を聞いて頂きありがとうございました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">不用品の処分はお願いするべき</p>
<p>解体後の不用品をどうするか迷っていましたが、コワースさんは回収だけでなく買取もしてもらえたので良かったです。
<br>ゴミになる予定のものを買取価格してもらって、内装解体の費用をコストカットできたのでお得でした。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">料金がわかりやすかった！</p>
<p>見積りの内容がわかりやすくて、安心してお願いできました。
<br>何にお金を払っているのか明確で、追加料金もなく無事に内装解体工事が終わったので良かったです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">仕事が早い</p>
<p>相談してから工事を始めるまでも早く、工事期間も短かったように感じます。
<br>スピーディーに対応してもらえたのでまた利用したいです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">相談しやすくてしかも無料で助かった</p>
<p>テナントの原状回復工事を依頼しました。
<br>初めてのことで右も左もわかりませんでしたが、親切に相談に乗っていただけたので安心しました。
<br>お店をやっている都合で電話がつながらない業者が多かったのですが、コワースさんは24時間フォームで連絡ができるので助かりました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">口コミ通り丁寧</p>
<p>内装解体を依頼しました。
<br>口コミに書いてあった通り仕事が丁寧で周辺への挨拶回りも好評でした。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">電話相談がスムーズ</p>
<p>電話するとだいたいの費用感などを教えていただけました。
<br>すぐに現場の確認をしてくれて、見積もり、工事の開始とスムーズに進みました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">スタッフさんが親切</p>
<p>工事の業者は無愛想なイメージがありましたが、コワースのスタッフさんは明るい方が多く気持ちよくお願いすることができました。
<br>挨拶回りも安心してお願いできました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">不用品の買取が良かった</p>
<p>お店を閉店するので、大型の機器をどのように処分するか悩んでいましたが、内装解体だけでなく不用品の買取もお願いできてしかも費用が安くなったので助かりました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">サロンの内装解体</p>
<p>大型の機器も多かったのですが、きれいに内装解体をしてもらえました。次に違うお店が入る予定だったので、助かりました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">思ったよりも安かった</p>
<p>不用品の買取をお願いしたら、内装解体の費用も安くなったのでお得。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">ホームページが見やすかった</p>
<p>内装解体業者を調べてもホームページが古かったり電話でしか問い合わせができなかったけど、コワースさんはホームページがわかりやすくて問い合わせもネットからできたので、忙しい中でもスムーズでした。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">すぐに見積もりをもらえ</p>
<p>見積り依頼して次の日には対応してもらえたので、工事も早く終ることができた。しかも安い。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">居酒屋の原状回復</p>
<p>人通りが多い繁華街だったので夜間工事をしてもらいました。周囲への影響を最小限にできるよう配慮いただきました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">安くて早い</p>
<p>見積りが早くて他よりも安かった。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">実績が多くて安心</p>
<p>コワースさんはいろいろな業種の内装解体をされている実績があるので安心して依頼できました。原状回復工事の仕上がりも良かったです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">親切で安心感がある！</p>
<p>譲り受けたお店をリニューアルオープンしたのですが、内装解体が初めてで右も左もわからない状態でした。電話で相談すると親身になってくださり、工事の費用を安くするためのアドバイスまでいただけました。親切で助かりました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">見積もりの内容が明瞭</p>
<p>いくつか見積もりをとったが、コワースが一番わかりやすくしかも安かった。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">急ぎの工事も対応してもらえた</p>
<p>次の開業まで時間が迫っていましたが、すぐに内装解体をしてもらえたので助かりました。見積もりも当日にもらえたので素早い対応で★5つです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">料金がわかりやすかった</p>
<p>坪単価が書いていたのでおおまかな費用を把握できた。見積もりも見やすかった。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">工事完了までが早かった</p>
<p>見積り依頼をしてから工事が終わるまでが早くて助かった</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">急ぎで対応してもらえた</p>
<p>退去日が決まっていたので少し急ぎでの内装解体工事でしたが、快く対応してもらえました。<br>金額も見積もり通りで追加料金などもなかったです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">スタッフさんが丁寧</p>
<p>内装解体ができる業者にいくつか電話をしましたが、どこも無愛想でとてもお願いする気持ちにはなれませんでしたが、コワースさんは電話対応も丁寧で、工事に来てくれた方も愛想が良くて感動しました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">迅速・高品質・低価格</p>
<p>文句なし。仕事が早くて安くて助かった。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">不用品回収が良かった</p>
<p>不用品の廃棄は別途費用がかかることが多いけど、コワースでは買取をしてくれてしかもその分を値引きしてくれたので、お得だった。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">実績豊富で相談しやすかった</p>
<p>美容院の内装解体を依頼しました。同業種の解体実績があったので相談しやすかったです。事前に料金のことや、工事期間のことなどを相談できたので不安なくお願いできました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">見積りが見やすい</p>
<p>他の業者は見積りの内容に不明瞭なところが多かったが、コワースの見積りはわかりやすかった。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">親切な対応に感謝致します</p>
<p>店舗を閉めることになり、初めてスケルトン化の工事を行うことになりました。<br>工事の流れや価格相場など何もわからない状態でいくつかの業者から見積りをとりましたが、コワースさんが一番丁寧に素早く対応してくれました。<br>わからないところも電話で聞くと丁寧に教えてくださって、安心してお願いできました。<br>コワースさんにお願いして良かったです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">品質の高さ◎</p>
<p>以前、他の業者に内装解体を依頼したときよりも仕上がりがキレイだった。<br>解体なんてどこがやっても同じだと思っていたが、業者によって差があることがわかり、次回もし内装解体をする機会があったらまたコワースにお願いしたい。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">夜間工事をお願いできた</p>
<p>繁華街にあるお店のためお昼間の工事が難しいことを相談すると夜間に内装解体をすることを提案してもらった。<br>周辺のお店への挨拶や説明もしてもらえたので、自分自身では特に時間もかからなくて楽だった。<br>閉店作業や移転業務に時間を使えたので結果的にスムーズだった。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">全部おまかせ</p>
<p>工事に関しては何もわからなかったけど、口コミが良かったのでコワースさんに相談してみました。<br>評判通り丁寧な対応で、見積りの内容もわかりやすく、希望に合わせたスケジュールで工事を進めてくれたので助かりました。<br>工事に関してはすべてお任せしましたが周囲のお家にも迷惑をかけず工事ができてほっとしました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">安かった</p>
<p>他の内装解体業者と比べると安い。仕上がりも良い。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">オーナーに文句を言われずに済んだ</p>
<p>テナントの持ち主がかなり細かい人で、工事の仕上がりが悪かったら文句を言ってくるような人だけど、コワースさんの内装解体は仕上がりもキレイで何も言われずスムーズに退去できました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">対応が早い</p>
<p>忙しくて何度も電話したり連絡をとる余裕がなかったけど、見積りの提示が早くて助かった。工事の段取りも良かったので自分のやることは最低限で済んだ。</p>
</div>
<!-- .review__inner -->
</div>
</div>
</div>
</div>
</div>

<div id="menu1" class="origin__inner">
<h3><span>料金・サービス</span></h3>
<div class="origin__inner__wrap">
<div class="origin__inner__wrap-item">
<h4>基本サービス</h4>
<p>
<span class="d-inline-block border py-1 px-2 mr-2 font-weight-bold">原状回復工事</span>
<span class="d-inline-block border py-1 px-2 mr-2 font-weight-bold">店舗などのスケルトン工事</span>
<span class="d-inline-block border py-1 px-2 mr-2 font-weight-bold">産業廃棄物収集運搬</span>
<span class="d-inline-block border py-1 px-2 mr-2 font-weight-bold">厨房機器買取可</span>
</p>
</div>
<div class="origin__inner__wrap-item">
<h4>特長</h4>
<canvas id="chart" class="mb-3"></canvas>
<div class="merchant__inner__point">
<table>
<tbody>
<tr>
<th><span>POINT1</span>料金が明確でリーズナブル</th>
<td class="small">不透明になりがちな内装解体の費用ですが、コワースなら料金をわかりやすく提示してくれるので安心です。</td>
</tr>
<tr>
<th><span>POINT2</span>スタッフの対応◎</th>
<td class="small">コワースのスタッフは徹底的な研修を受けた人ばかり。不適切な対応に出会う心配はありません。</td>
</tr>
<tr>
<th><span>POINT3</span>24時間無料相談を受付</th>
<td class="small">電話でいつでも相談ができるので、急いでいるときも安心！もちろん料金は無料なので気軽にお問い合わせができます。</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="origin__inner__wrap-item">
<h4>料金</h4>
<p class=" font-weight-bold">基本料金12,000円~/坪</p>
<p class="small mb-0">※場所や設備、廃棄処理物、解体内容により料金は変わりますので、まずはお気軽にお問い合わせください。</p>
</div>
<div class="origin__inner__wrap-item">
<h4>対応エリア</h4>
<p class="font-weight-bold">大阪府、兵庫県、京都府、奈良県、東京都</p>
</div>
</div>
</div>

<div class="mt-5">
<div class="merchant__inner__cta">
  <div class="d-block text-center p-0 mb-1">
  <img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign@2x.png 2x">
  </div>
<a class="d-block text-center p-0 mb-2" href="tel:0120-133-064">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc@2x.png 2x">
</a>
<a class="d-block text-center p-0" href="<?php echo $home; ?>/form/" target="_blank">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_form_pc@2x.png 2x">
</a>
</div>
</div>

<div id="menu3" class="case origin__inner mt-4">
<h3><span>事例紹介</span></h3>
<div class="origin__inner__wrap">

<div class="origin__inner__wrap-item">
<h4>アミューズメント施設</h4>
<p class="small">テナント返却に伴う、ラウンドワンのボーリング施設の原状回復工事の事例です。
<br>商業施設内にある3階から12階までの10フロア、約3000坪のスケルトン工事が行われました。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_01_01.png" alt="解体前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体中</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_01_02.png" alt="解体中"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_01_03.png" alt="解体後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<tr>
<th class="bg-light font-weight-normal">坪数</th>
<td class="font-weight-bold">3,000坪</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">費用</th>
<td class="font-weight-bold">坪単価15,000円～</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">工期</th>
<td class="font-weight-bold">120日間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>コンビニ</h4>
<p class="small">テナントの撤退による内装解体、原状回復工事の事例です。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_02_01.png" alt="解体前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体中</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_02_02.png" alt="解体中"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_02_03.png" alt="解体後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<!-- <tr>
<th class="bg-light font-weight-normal">坪数</th>
<td class="font-weight-bold">3,000坪</td>
</tr> -->
<tr>
<th class="bg-light font-weight-normal">費用</th>
<td class="font-weight-bold">120万円</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">工期</th>
<td class="font-weight-bold">5日間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>小売店</h4>
<p class="small">堺市のケーキ屋さん閉店に伴う原状回復工事の事例です。
<br>外部の看板撤去を含めて工期は約3日間でした。
<br>ビル１Fのテナントに入っているため、近隣への配慮をしながら施工を行いました。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_03_01.png" alt="解体前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体中</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_03_02.png" alt="解体中"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_03_03.png" alt="解体後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<!-- <tr>
<th class="bg-light font-weight-normal">坪数</th>
<td class="font-weight-bold">3,000坪</td>
</tr> -->
<tr>
<th class="bg-light font-weight-normal">費用</th>
<td class="font-weight-bold">38万円</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">工期</th>
<td class="font-weight-bold">3日間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>飲食店</h4>
<p class="small">大阪市内にある居酒屋の原状回復工事の事例です。
<br>繁華街ということで夜間工事が行われました。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_04_01.png" alt="解体前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体中</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_04_02.png" alt="解体中"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_04_03.png" alt="解体後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<!-- <tr>
<th class="bg-light font-weight-normal">坪数</th>
<td class="font-weight-bold">3,000坪</td>
</tr> -->
<tr>
<th class="bg-light font-weight-normal">費用</th>
<td class="font-weight-bold">工事費用250万円 / 厨房器具買取20万円</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">工期</th>
<td class="font-weight-bold">12日間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>小売店</h4>
<p class="small">販売店の内装解体工事の事例です。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_05_01.png" alt="解体前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体中</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_05_02.png" alt="解体中"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_05_03.png" alt="解体後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<!-- <tr>
<th class="bg-light font-weight-normal">坪数</th>
<td class="font-weight-bold">3,000坪</td>
</tr> -->
<tr>
<th class="bg-light font-weight-normal">費用</th>
<td class="font-weight-bold">60万円</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">工期</th>
<td class="font-weight-bold">5日間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>飲食店</h4>
<p class="small">カフェの原状回復工事の事例です。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_06_01.png" alt="解体前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体中</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_06_02.png" alt="解体中"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_06_03.png" alt="解体後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<!-- <tr>
<th class="bg-light font-weight-normal">坪数</th>
<td class="font-weight-bold">3,000坪</td>
</tr> -->
<tr>
<th class="bg-light font-weight-normal">費用</th>
<td class="font-weight-bold">38万円</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">工期</th>
<td class="font-weight-bold">3日間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>コンビニ</h4>
<p class="small">ローソンの原状回復工事の事例です。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_07_01.png" alt="解体前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体中</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_07_02.png" alt="解体中"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>解体後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_07_03.png" alt="解体後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<!-- <tr>
<th class="bg-light font-weight-normal">坪数</th>
<td class="font-weight-bold">3,000坪</td>
</tr> -->
<tr>
<th class="bg-light font-weight-normal">費用</th>
<td class="font-weight-bold">90万円</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">工期</th>
<td class="font-weight-bold">5日間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
</div>
</div>
<!-- #menu3 -->

<div class="flow origin__inner">
  <h3><span>ご利用の流れ</span></h3>
  <div class="origin__inner__wrap">
    <div class="origin__inner__wrap-item">
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>1</div>
        <div class="step-text font-weight-bold">お問い合わせ</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>2</div>
        <div class="step-text font-weight-bold">現地調査</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>3</div>
        <div class="step-text font-weight-bold">御見積書送付</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>4</div>
        <div class="step-text font-weight-bold">契約書・着工日の決定</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>5</div>
        <div class="step-text font-weight-bold">近隣挨拶</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>6</div>
        <div class="step-text font-weight-bold">着工</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>7</div>
        <div class="step-text font-weight-bold">工事完了</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>8</div>
        <div class="step-text font-weight-bold">工事完了のご連絡</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>9</div>
        <div class="step-text font-weight-bold">工事完了検査</div>
      </div>
      <div class="step align-items-center">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>10</div>
        <div class="step-text font-weight-bold">請求書の送付</div>
      </div>
    </div>
  </div>
</div>
<!-- 流れ -->

<div class="flow origin__inner">
  <h3><span>よくあるご質問</span></h3>
  <div class="origin__inner__wrap">
    <div class="origin__inner__wrap-item">
      <table class="table mb-0">
      <tr>
      <th class="w-100 bg-secondary font-weight-normal"><span class="text-primary mr-2">Q</span> 急ぎなのですが、すぐに見積りをしてもらえますか？</th>
      </tr>
      <tr>
      <td class="w-100"><span class="text-primary mr-2">A</span>現場スタッフの空き状況を確認し、ご連絡いたします。<br>空き状況によっては、行ける場合と行けない場合がございますので、予めご了承ください。</td>
      </tr>
      <tr>
      <th class="w-100 bg-secondary font-weight-normal"><span class="text-primary mr-2">Q</span> 急な工事でも大丈夫ですか？</th>
      </tr>
      <tr>
      <td class="w-100"><span class="text-primary mr-2">A</span>はい、急な工事でも対応可能です。</td>
      </tr>
      <tr>
      <th class="w-100 bg-secondary font-weight-normal"><span class="text-primary mr-2">Q</span> 見積り・作業日に立会いは必要ですか？</th>
      </tr>
      <tr>
      <td class="w-100"><span class="text-primary mr-2">A</span>はい、基本的にはお立会いをお願いしております。お会いして直接お話をさせていただき、お客様自身にもご安心いただきたいという思いもあります。</td>
      </tr>
      <tr>
      <th class="w-100 bg-secondary font-weight-normal"><span class="text-primary mr-2">Q</span> 夜間の工事でも大丈夫ですか？</th>
      </tr>
      <tr>
      <td class="w-100"><span class="text-primary mr-2">A</span>はい、夜間の工事でも対応可能です。</td>
      </tr>
      <tr>
      <th class="w-100 bg-secondary font-weight-normal"><span class="text-primary mr-2">Q</span> 不法投棄などが心配なのですが…？</th>
      </tr>
      <tr>
      <td class="w-100"><span class="text-primary mr-2">A</span>産業廃棄物処理法により、不法投棄が摘発された場合、施主様まで責任を追及される事になります。弊社では様々な許可を取っており、それぞれの中間処理施設とのルートも確立している為、安心してお任せ下さいませ。</td>
      </tr>
      </table>
    </div>
  </div>
</div>
<!-- よくあるご質問 -->

<div id="menu4" class="origin__inner">
<h3><span>スタッフ</span></h3>
<div class="origin__inner__wrap">
<div class="origin__inner__wrap-item">

<div class="staff">
<div class="staff__inner">
<div class="staff__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/staff_1.png" alt="スタッフ" srcset="<?php echo $wp_url; ?>/dist/images/staff_1.png 1x, <?php echo $wp_url; ?>/dist/images/staff_1@2x.png 2x">
</div>
<div class="staff__inner-info">
<p class="mb-1"><span class="small text-warning">責任者</span><span class="ml-2 font-weight-bold">三木 亮平</span></p>
<p class="small mb-0">原状回復工事の業界はまだまだ不透明な業界ですが、安心してお任せ頂けるように私たちコワースが業界のイメージを変えます。</p>
</div>
</div>
<!-- .staff__inner -->
<div class="staff__inner">
<div class="staff__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/staff_2.png" alt="スタッフ" srcset="<?php echo $wp_url; ?>/dist/images/staff_2.png 1x, <?php echo $wp_url; ?>/dist/images/staff_2@2x.png 2x">
</div>
<div class="staff__inner-info">
<p class="mb-1"><span class="small text-warning">工事部 課⻑</span><span class="ml-2 font-weight-bold">垣 雅文</span></p>
<p class="small mb-0">原状回復工事の責任者をしています。<br>隣接店舗様への配慮も欠かさず丁寧に工事させて頂きます。『頼んで良かった』そんな業者になれるよう尽力します。</p>
</div>
</div>
<!-- .staff__inner -->
<div class="staff__inner">
<div class="staff__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/staff_3.png" alt="スタッフ" srcset="<?php echo $wp_url; ?>/dist/images/staff_3.png 1x, <?php echo $wp_url; ?>/dist/images/staff_3@2x.png 2x">
</div>
<div class="staff__inner-info">
<p class="mb-1"><span class="small text-warning">工事スタッフ</span><span class="ml-2 font-weight-bold">清水 勇二</span></p>
<p class="small mb-0">コワースでは残置物の撤去や厨房機器などの機材撤去をメインで作業しています。<br>安心してご依頼いただけるよう精一杯がんばります。</p>
</div>
</div>
<!-- .staff__inner -->
<div class="staff__inner">
<div class="staff__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/staff_4.png" alt="スタッフ" srcset="<?php echo $wp_url; ?>/dist/images/staff_4.png 1x, <?php echo $wp_url; ?>/dist/images/staff_4@2x.png 2x">
</div>
<div class="staff__inner-info">
<p class="mb-1"><span class="small text-warning">工事スタッフ</span><span class="ml-2 font-weight-bold">伊達 央貴</span></p>
<p class="small mb-0">原状回復工事業界を変えたい一心で日々工事を行っています。<br>ぜひコワースにお任せください。</p>
</div>
</div>
<!-- .staff__inner -->
<div class="staff__inner">
<div class="staff__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/staff_5.png" alt="スタッフ" srcset="<?php echo $wp_url; ?>/dist/images/staff_5.png 1x, <?php echo $wp_url; ?>/dist/images/staff_5@2x.png 2x">
</div>
<div class="staff__inner-info">
<p class="mb-1"><span class="small text-warning">工事スタッフ</span><span class="ml-2 font-weight-bold">金輪 真司</span></p>
<p class="small mb-0">主に現場ではハツリ作業の重機オペレーターをしています。<br>安全第一の工事と、隣接店舗様に配慮した作業をさせていただきます。<br>安全に工事することを第一に考え、隣接店舗様にご迷惑をかけないよう作業させて頂きます。</p>
</div>
</div>
<!-- .staff__inner -->
<div class="staff__inner">
<div class="staff__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/staff_6.png" alt="スタッフ" srcset="<?php echo $wp_url; ?>/dist/images/staff_6.png 1x, <?php echo $wp_url; ?>/dist/images/staff_6@2x.png 2x">
</div>
<div class="staff__inner-info">
<p class="mb-1"><span class="small text-warning">工事スタッフ</span><span class="ml-2 font-weight-bold">金輪 勇志</span></p>
<p class="small mb-0">主に原状回復工事で出た廃材の積み込みや処分場までの運搬を担当しています。<br>安全運転を第一に、スムーズな工事を行います。</p>
</div>
</div>
<!-- .staff__inner -->
</div>

</div>
</div>
</div>
<!-- #menu4 -->

<div id="" class="origin__inner">
<h3><span>会社情報</span></h3>
<div class="origin__inner__wrap">
<div class="origin__inner__wrap-item">
<table class="table mb-0">
<tr>
<th class="font-weight-normal small">社名</th>
<td>株式会社クリーンアイランド</td>
</tr>
<tr>
<th class="font-weight-normal small">店舗責任者</th>
<td>三木 亮平</td>
</tr>
<tr>
<th class="font-weight-normal small">所在地</th>
<td>【大阪】大阪府大阪市西区南堀江3丁目15−22<br>【兵庫】兵庫県南あわじ市津井1029-29<br>【東京】東京都港区芝大門2-9-8 シャンデールビル3F</td>
</tr>
<tr>
<th class="font-weight-normal small">設立</th>
<td>平成19年7月2日</td>
</tr>
</table>
</div>
</div>
</div>

<div id="menu5" class="origin__inner">
<h3><span>その他</span></h3>
<div class="origin__inner__wrap">
<div class="origin__inner__wrap-item">
<p class="mb-0">現在、新型コロナウイルス対策として「マスク着用」「除菌消毒」「検温チェック」を実施しております。</p>
</div>
</div>
</div>
<!-- #menu5 -->

<div class="mt-5">
<div class="merchant__inner__cta">
  <div class="d-block text-center p-0 mb-1">
  <img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign@2x.png 2x">
  </div>
<a class="d-block text-center p-0 mb-2" href="tel:0120-133-064">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc@2x.png 2x">
</a>
<a class="d-block text-center p-0" href="<?php echo $home; ?>/form/" target="_blank">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_form_pc@2x.png 2x">
</a>
</div>
</div>

<div class="d-block text-center my-5">
  <a class="border-primary border-bottom" href="<?php echo $home; ?>">業者一覧に戻る</a>
</div>

<!-- single -->
</div>
<div class="side">
<?php get_sidebar(); ?>
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<script>
let ctx = document.getElementById("chart");
let times = 0;
if (window.innerWidth > 768) {
  times = 0.1;
} else {
  times = 0.05;
}
ctx.width = window.innerWidth * 0.1;
ctx.height = window.innerHeight * times;
let radar_chart = new Chart(ctx, {
  type: "radar",
  data: {
    labels: [
      "料金",
      "実績",
      "対応",
      "不用品処分",
      "安全への配慮",
    ],
    datasets: [{
      label: "評価",
      data: [
        95,
        99,
        100,
        100,
        98
      ],
      borderWidth: 1,
      borderColor: 'rgb(232, 71, 0)',
      pointBackgroundColor: 'rgb(232, 71, 0)',
      backgroundColor: 'rgba(232, 71, 0, 0.6)'
    }],
  },
  options: {
      title: {
        display: false,
      },
      legend: {
        display: false
      },
      scale: {
        ticks: {
          beginAtZero: true,
          precision: 5,
          min: 50,
          max: 100,
          stepSize: 10,
        }
      }
    }
});
</script>

<?php get_footer();
