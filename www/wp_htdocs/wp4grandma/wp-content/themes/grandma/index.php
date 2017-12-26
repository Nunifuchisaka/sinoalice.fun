<?php get_header(); ?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    get_template_part('content');
  endwhile;
else :
  get_template_part( 'none' );
endif;
?>

<!-- 
<section class="section_1 l_mg-t_40px">
  <header class="section_1__header">
    <h1 class="section_1__h1">お知らせ</h1>
    <p class="section_1__date">2017.11.01</p>
  </header>
  <div class="section_1__1">
    <p><a href="https://docs.google.com/forms/d/e/1FAIpQLScc4uFVHCvdp2SMwJCKTBythIkag5O_164sV3rOsyYhXV9q8g/viewform?usp=sf_link">第1回コロシアム時間帯アンケート</a>の結果を共有します。</p>
    <p class="u_mg-t_10px"><a href="<?php echo get_template_directory_uri(); ?>/assets/img/colosseum_questionnaire-1.png"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/colosseum_questionnaire-1.png" alt="" style="width: 100%;height: auto"><br /><small>画像をタップで拡大</small></a></p>
  </div>
</section>
 -->

<section class="section_1 l_mg-t_40px">
  <h1 class="section_1__h1">ギルドの目的</h1>
  <div class="section_1__1">
    <p>シノアリスを無理なく楽しむギルドです。</p>
    <p>コロシアム参戦率100%を目指しています。<br />最近の平均参戦率は13人くらいです。</p>
  </div>
</section>

<section class="section_1 l_mg-t_40px">
  <h1 class="section_1__h1">特記事項</h1>
  <div class="section_1__1">
    <p>・コロシアムの日時は毎日23時〜20分間です。</p>
    <p>・コロシアム不参加の場合に一報を入れる必要はありませんが、イベント期間中はできるだけ参戦していただけると嬉しいです。</p>
    <!-- <p>・しばらくの間、新規取り込みのため無言勧誘、無言脱退をする場合があります。</p> -->
    <p>・総合値や課金額などは不問です。</p>
    <p>・手伝って欲しい高難易度のモノガタリなどがある場合は、ギルドチャットのほうで呼びかけてください。</p>
    <p>・ギルドガチャは基本的に欲しいものがでたら当てた人がそのまま手に入れていただいて大丈夫です。</p>
    <p>・<a href="https://twitter.com/nunifuchisaka">ギルドマスターのTwitterはこちら</a></p>
  </div>
</section>

<section class="section_1 l_mg-t_40px">
  <h1 class="section_1__h1">ギルド名の由来</h1>
  <div class="section_1__1">
    <p>ニーアレプリカント・ゲシュタルトのカイネさんのおばあちゃんからいただきました。<br />オバアチャンという曲もあります。<br /><a href="https://dic.pixiv.net/a/%E3%82%AB%E3%82%A4%E3%83%8D" target="_blank">【ピクシブ百科事典】カイネ とは</a><br />※ネタバレを含みます</p>
  </div>
</section>

<section class="section_1 l_mg-t_40px">
  <h1 class="section_1__h1">注意事項</h1>
  <div class="section_1__1">
    <p>コロシアム不参加が続く場合は、他の新規の方を優先する場合があります。</p>
    <p>その他万が一問題が発生した場合はサブマスターや他メンバーと協議の上対処いたします。</p>
  </div>
</section>

<?php get_footer();
