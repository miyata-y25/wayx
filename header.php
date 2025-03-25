<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <title><?php bloginfo('title'); ?> - <?php the_title(); ?></title>
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('images/logo.ico')); ?>" />
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_file_uri('images/logo.ico')); ?>" />

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5Z58DKPM');</script>
  <!-- End Google Tag Manager -->

  <!--  SEO 設定  -->
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="WAYX,ウェイクス,宮崎,宮崎市,ジム,スポーツジム,フィットネス,女性,女性向け,大橋,24時間">
  <meta name="msvalidate.01" content="D4D143A9D86ED723C8A31A09FCA3574E" />

  <!--  OGP 設定  -->
  <meta property="og:url" content="https://wayx.jp">
  <meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:type" content="article"><!-- トップページ以外を意味する -->
  <meta property="og:image" content="https://wayx.jp/wp-content/uploads/2023/12/logo-3.png">

  <!--  フォント の　読み込み  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <script>
  (function(d) {
    var config = {
      kitId: 'hsd8rgo',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
  </script>

  <!-- BootstrapのCSS読み込み -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- BootstrapのJS読み込み -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5Z58DKPM"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php wp_body_open(); ?>

<!------------------------------------------

            PC 版

------------------------------------------->
    <header class="pc-2">
      <nav>
        <a href="<?php echo home_url(); ?>"><h1><img src="<?php echo esc_url(get_theme_file_uri('images/logo-1.png')); ?>" alt="WAYX"></h1></a>
        <div class="set-1">
          <div class="nav-set">
            <ul class="flex">
              <li><a href="<?php echo home_url(); ?>#Access"><p class="f-14">アクセス</p></a></li>
              <li><a href="<?php echo home_url(); ?>#Q&A"><p class="f-14">よくある質問</p></a></li>
              <li><a href="<?php echo home_url(); ?>/contact"><p class="f-14">お問い合わせ</p></a></li>
            </ul>
            <ul class="flex nav-link">
              <li><a href="<?php echo home_url(); ?>#Concept"><p class="f-20 f7">CONCEPT</p><p class="f-14">コンセプト</p></a></li>
              <li><a href="<?php echo home_url(); ?>#Facility_Guide"><p class="f-20 f7">FACILITY GUIDE</p><p class="f-14">施設案内</p></a></li>
              <li><a href="<?php echo home_url(); ?>#Floor_maps"><p class="f-20 f7">FLOOR MAPS</p><p class="f-14">フロアマップ</p></a></li>
              <li><a href="<?php echo home_url(); ?>#Price"><p class="f-20 f7">PRICE</p><p class="f-14">料金</p></a></li>
              <li><a href="<?php echo home_url(); ?>#Flow"><p class="f-20 f7">FLOW</p><p class="f-14">入会の流れ</p></a></li>
            </ul>
          </div>
          <a href="https://wayx.hacomono.jp/register/?h_studio_code=S0001" target="_break" class="btn-type-1 btnshine"><p class="f-24">入会はこちら</p><div class="btn-mark"><img src="<?php echo esc_url(get_theme_file_uri('images/mark-1.png')); ?>" alt="WAYX 入会"></div></a>
        </div>
      </nav>
    </header>

<!------------------------------------------

            SP 版

------------------------------------------->
    <header class="sp-2">
      <a href="<?php echo home_url(); ?>"><h1><img src="<?php echo esc_url(get_theme_file_uri('images/logo-1.png')); ?>" alt="WAYX 入会"></h1></a>
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>

    <nav class="globalMenuSp">
      <div class="box">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="set">
        <ul>
          <li><a href="<?php echo home_url(); ?>#Concept"><p class="f-20 f7">CONCEPT</p><p class="f-14">コンセプト</p></a></li>
          <li><a href="<?php echo home_url(); ?>#Facility_Guide"><p class="f-20 f7">FACILITY GUIDE</p><p class="f-14">施設案内</p></a></li>
          <li><a href="<?php echo home_url(); ?>#Floor_maps"><p class="f-20 f7">FLOOR MAPS</p><p class="f-14">フロアマップ</p></a></li>
          <li><a href="<?php echo home_url(); ?>#Price"><p class="f-20 f7">PRICE</p><p class="f-14">料金</p></a></li>
          <li><a href="<?php echo home_url(); ?>#Flow"><p class="f-20 f7">FLOW</p><p class="f-14">入会の流れ</p></a></li>
        </ul>
        <ul>
          <li><a href="<?php echo home_url(); ?>#Access"><p class="f-14">アクセス</p></a></li>
          <li><a href="#Q-A"><p class="f-14">よくある質問</p></a></li>
          <li><a href="<?php echo home_url(); ?>/contact"><p class="f-14">お問い合わせ</p></a></li>
        </ul>
        <ul>
          <li><a href="https://line.me/R/ti/p/@871icuhy?oat_content=qr#~" target="_break"><img src="<?php echo esc_url(get_theme_file_uri('images/line-icon.png')); ?>" alt="WAYX LINE"></a></li>
          <li><a href="https://www.instagram.com/fitnessgym_wayx/" target="_break"><img src="<?php echo esc_url(get_theme_file_uri('images/insta-icon.png')); ?>" alt="WAYX Instagram"></a></li>
        </ul>
      </div>
    </nav>
