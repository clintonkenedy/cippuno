

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>DASHBOARD</h1>
@stop

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>


    <script type="text/javascript">
      function createCookie(a,d,b){
        if(b){
          var c=new Date;
          c.setTime(c.getTime()+864E5*b);
          b="; expires="+c.toGMTString()}
        else b="";
        document.cookie=a+"="+d+b+"; path=/"}
      function readCookie(a){
        a+="=";
        for(var d=document.cookie.split(";"),b=0;b<d.length;b++){
          for(var c=d[b];" "==c.charAt(0);)c=c.substring(1,c.length);
          if(0==c.indexOf(a))return c.substring(a.length,c.length)}
        return null}
      function eraseCookie(a){
        createCookie(a,"",-1)}
      function areCookiesEnabled(){
        var a=!1;
        createCookie("testing","Hello",1);
        null!=readCookie("testing")&&(a=!0,eraseCookie("testing"));
        return a}
      (function(a){
        var d=readCookie("devicePixelRatio"),b=void 0===a.devicePixelRatio?1:a.devicePixelRatio;
        areCookiesEnabled()&&null==d&&(createCookie("devicePixelRatio",b,7),1!=b&&a.location.reload(!0))}
      )(window);
    </script>
    <meta property="og:title" content="Servicios CIP">
    <meta property="og:description" content="">
    <!-- This site is optimized with the Yoast SEO plugin v6.2 - https://yoa.st/1yg?utm_content=6.2 -->
    <link rel="canonical" href="https://www.cip.org.pe/servicios-cip/">
    <meta property="og:locale" content="es_ES">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Servicios CIP - Colegio de Ingenieros del Perú">
    <meta property="og:url" content="https://www.cip.org.pe/servicios-cip/">
    <meta property="og:site_name" content="Colegio de Ingenieros del Perú">
    <meta property="article:publisher" content="https://www.facebook.com/cipcn">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Servicios CIP - Colegio de Ingenieros del Perú">
    <meta name="twitter:site" content="@CIP_CN">
    <meta name="twitter:creator" content="@CIP_CN">
    <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/www.cip.org.pe\/","name":"Colegio de Ingenieros del Per\u00fa","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.cip.org.pe\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
    <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"Organization","url":"https:\/\/www.cip.org.pe\/servicios-cip\/","sameAs":["https:\/\/www.facebook.com\/cipcn","https:\/\/www.youtube.com\/user\/CIPCN","https:\/\/twitter.com\/CIP_CN"],"@id":"#organization","name":"COLEGIO DE INGENIEROS DEL PER\u00da - CONSEJO NACIONAL","logo":"http:\/\/www.cip.org.pe\/wp-content\/uploads\/2018\/01\/2.png"}</script>
    <!-- / Yoast SEO plugin. -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="alternate" type="application/rss+xml" title="Colegio de Ingenieros del Perú » Feed" href="https://www.cip.org.pe/feed/">
    <link rel="alternate" type="application/rss+xml" title="Colegio de Ingenieros del Perú » RSS de los comentarios" href="https://www.cip.org.pe/comments/feed/">
    <script type="text/javascript">
      window._wpemojiSettings = {
        "baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{
          "concatemoji":"https:\/\/www.cip.org.pe\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.1"}
      };
      !function(a,b,c){
        function d(a,b){
          var c=String.fromCharCode;
          l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);
          var d=k.toDataURL();
          l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);
          var e=k.toDataURL();
          return d===e}
        function e(a){
          var b;
          if(!l||!l.fillText)return!1;
          switch(l.textBaseline="top",l.font="600 32px Arial",a){
            case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);
            case"emoji":return b=d([55358,56794,8205,9794,65039],[55358,56794,8203,9794,65039]),!b}
          return!1}
        function f(a){
          var c=b.createElement("script");
          c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}
        var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");
        for(j=Array("flag","emoji"),c.supports={
          everything:!0,everythingExceptFlag:!0}
            ,i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);
        c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){
          c.DOMReady=!0}
          ,c.supports.everything||(h=function(){
          c.readyCallback()}
                                   ,b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){
          "complete"===b.readyState&&c.readyCallback()}
)),g=c.source||{
        }
                                   ,g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}
      (window,document,window._wpemojiSettings);
    </script>
    <script src="https://www.cip.org.pe/wp-includes/js/wp-emoji-release.min.js?ver=4.9.1" type="text/javascript" defer="">
    </script>
    <style type="text/css">
      img.wp-smiley,
      img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
      }
    </style>
    <link rel="stylesheet" id="scap.flashblock-css" href="https://www.cip.org.pe/wp-content/plugins/compact-wp-audio-player/css/flashblock.css?ver=4.9.1" type="text/css" media="all">
    <link rel="stylesheet" id="scap.player-css" href="https://www.cip.org.pe/wp-content/plugins/compact-wp-audio-player/css/player.css?ver=4.9.1" type="text/css" media="all">
    <link rel="stylesheet" id="bonfire-jumbo-css-css" href="https://www.cip.org.pe/wp-content/plugins/jumbo-by-bonfire/jumbo.css?ver=1" type="text/css" media="all">
    <link rel="stylesheet" id="jumbo-fontawesome-css" href="https://www.cip.org.pe/wp-content/plugins/jumbo-by-bonfire/fonts/font-awesome/css/font-awesome.min.css?ver=1" type="text/css" media="all">
    <link rel="stylesheet" id="jumbo-fonts-css" href="//fonts.googleapis.com/css?family=Open%2BSans%3A400%7CMontserrat%3A400%2C700&amp;ver=1.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="popup-maker-site-css" href="https://www.cip.org.pe/wp-content/plugins/popup-maker/assets/css/site.min.css?ver=1.6.6" type="text/css" media="all">
    <link rel="stylesheet" id="rs-plugin-settings-css" href="https://www.cip.org.pe/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.6.3.1" type="text/css" media="all">
    <style id="rs-plugin-settings-inline-css" type="text/css">
      #rs-demo-id {
      }
    </style>
    <link rel="stylesheet" id="oba_youtubepopup_css-css" href="https://www.cip.org.pe/wp-content/plugins/video-popup/css/YouTubePopUp.css" type="text/css" media="all">
    <link rel="stylesheet" id="nta-css-popup-css" href="https://www.cip.org.pe/wp-content/plugins/wp-whatsapp/assets/dist/css/style.css?ver=4.9.1" type="text/css" media="all">
    <link rel="stylesheet" id="js_composer_front-css" href="https://www.cip.org.pe/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="rhc-print-css-css" href="https://www.cip.org.pe/wp-content/plugins/calendarize-it/css/print.css?ver=1.0.2" type="text/css" media="all">
    <link rel="stylesheet" id="calendarizeit-css" href="https://www.cip.org.pe/wp-content/plugins/calendarize-it/css/frontend.min.css?ver=4.0.8.5" type="text/css" media="all">
    <link rel="stylesheet" id="rhc-last-minue-css" href="https://www.cip.org.pe/wp-content/plugins/calendarize-it/css/last_minute_fixes.css?ver=1.0.10" type="text/css" media="all">
    <link rel="stylesheet" id="dt-web-fonts-css" href="//fonts.googleapis.com/css?family=Roboto%3A400%2C600%2C700%7CRoboto+Condensed%3A400%2C600%2C700%7COpen+Sans%3A400%2C600%2C700&amp;ver=4.9.1" type="text/css" media="all">
    <link rel="stylesheet" id="dt-main-css" href="https://www.cip.org.pe/wp-content/themes/dt-the7/css/main.min.css?ver=6.0.1" type="text/css" media="all">
    <!--[if lt IE 10]>
<link rel='stylesheet' id='dt-old-ie-css'  href='https://www.cip.org.pe/wp-content/themes/dt-the7/css/old-ie.min.css?ver=6.0.1' type='text/css' media='all' />
<![endif]-->
    <link rel="stylesheet" id="dt-awsome-fonts-css" href="https://www.cip.org.pe/wp-content/themes/dt-the7/fonts/FontAwesome/css/font-awesome.min.css?ver=6.0.1" type="text/css" media="all">
    <link rel="stylesheet" id="dt-fontello-css" href="https://www.cip.org.pe/wp-content/themes/dt-the7/fonts/fontello/css/fontello.min.css?ver=6.0.1" type="text/css" media="all">
    <link rel="stylesheet" id="dt-arrow-icons-css" href="https://www.cip.org.pe/wp-content/themes/dt-the7/fonts/icomoon-arrows-the7/style.min.css?ver=6.0.1" type="text/css" media="all">
    <link rel="stylesheet" id="the7pt-static-css" href="https://www.cip.org.pe/wp-content/themes/dt-the7/css/post-type.css?ver=1.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="dt-custom-old-ie-css" href="https://www.cip.org.pe/wp-content/uploads/the7-css/custom-old-ie.css?ver=6e24f0a00a34" type="text/css" media="all">
    <link rel="stylesheet" id="dt-custom-css" href="https://www.cip.org.pe/wp-content/uploads/the7-css/custom.css?ver=6e24f0a00a34" type="text/css" media="all">
    <link rel="stylesheet" id="dt-media-css" href="https://www.cip.org.pe/wp-content/uploads/the7-css/media.css?ver=6e24f0a00a34" type="text/css" media="all">
    <link rel="stylesheet" id="dt-legacy-css" href="https://www.cip.org.pe/wp-content/uploads/the7-css/legacy.css?ver=6e24f0a00a34" type="text/css" media="all">
    <link rel="stylesheet" id="the7pt.less-css" href="https://www.cip.org.pe/wp-content/uploads/the7-css/post-type-dynamic.css?ver=6e24f0a00a34" type="text/css" media="all">
    <link rel="stylesheet" id="ubermenu-css" href="https://www.cip.org.pe/wp-content/plugins/ubermenu/pro/assets/css/ubermenu.min.css?ver=3.3.1" type="text/css" media="all">
    <link rel="stylesheet" id="ubermenu-black-white-2-css" href="https://www.cip.org.pe/wp-content/plugins/ubermenu/assets/css/skins/blackwhite2.css?ver=4.9.1" type="text/css" media="all">
    <link rel="stylesheet" id="ubermenu-font-awesome-css" href="https://www.cip.org.pe/wp-content/plugins/ubermenu/assets/css/fontawesome/css/font-awesome.min.css?ver=4.3" type="text/css" media="all">
    <link rel="stylesheet" id="style-css" href="https://www.cip.org.pe/wp-content/themes/dt-the7-child/style.css?ver=6.0.1" type="text/css" media="all">
    <style id="style-inline-css" type="text/css">
      .jumbo-background-color {
        background-color:rgba(255,255,255,1)!important;
      }
      .bonfire-jumbo-main-item {
        color: #a91515;
      }
      .bonfire-jumbo-main-item:hover{
        color: #a91515!important;
      }
      .separator-holder {
        border-top: 2px solid red;
      }
      .masthead .soc-ico.custom-bg a:before, .masthead .soc-ico.accent-bg a:before, .dt-mobile-header .soc-ico.custom-bg a:before, .dt-mobile-header .soc-ico.accent-bg a:before {
        background-color: #b6241c;
      }
      .jumbo-menu-button {
        background-color: #eeeeee;
      }
      .jumbo-menu-button::before, .jumbo-menu-button::after, .jumbo-menu-button div.jumbo-menu-button-middle {
        background-color: #6a6565;
        content: '';
        display: block;
        width: 24px;
        height: 3px;
        margin: 4px 0;
      }
      .aio-icon-description.ult-responsive{
        font-weight: 100;
      }
      .blog-shortcode.blog-masonry-shortcode-id-1 .entry-meta * {
        color: #D7B56D!important;
      }
      .standard-arrow.list-divider.bullet-top a{
        text-decoration:none;
        color:#333333;
      }
      .standard-arrow.list-divider.bullet-top a:hover{
        text-decoration:underline;
        color:#333333;
      }
      .author-info.entry-author{
        display:none;
      }
      .share-buttons a:before{
        background:none;
      }
      .post-meta.wf-mobile-collapsed, .single-related-posts{
        display:none;
      }
      .footer .widget a{
        display:block;
      }
      .footer .widget a .screen-reader-text {
        height: auto;
        overflow: auto;
        width: auto;
        position: static!important;
        margin-left:20px;
      }
      .soc-font-icon::before{
        padding-left:5px;
      }
      .vc_custom_1510610102112 {
        word-break: break-all;
      }
      .footer .widget,.footer .widget a {
        color:#dddddd;
        font-size:16px;
      }
      .table td{
        vertical-align:top;
      }
      .table.pie tr td:nth-child(2){
        width:30px;
        text-align:center;
      }
      .table.ambientes th, .table.ambientes td{
        width:18%;
      }
      .table.ambientes th:first-child, .table.ambientes td:first-child{
        width:28%;
      }
      .table.ambientes th, .table.ambientes1 th{
        background-color: #f4f3ef;
      }
      .dt-mobile-menu-icon .lines, .dt-mobile-menu-icon .lines:before, .dt-mobile-menu-icon .lines:after,
      .lines:before{
        background-color:#333!important;
        color:#333!important;
        height: 3px;
      }
      @media screen and (max-width: 960px){
        .jumbo-buttons-wrapper {
          display: none!important;
        }
      }
      @media screen and (max-width: 1360px){
        .ubermenu-sub-indicators .ubermenu-has-submenu-drop>.ubermenu-target {
          padding-right: 5px;
        }
      }
      @media screen and (max-width: 1290px){
        .ubermenu .ubermenu-target {
          padding: 15px 9px!important;
        }
      }
      @media screen and (max-width: 1200px){
        #menu-item-15483 {
          display:none;
        }
        .ubermenu .ubermenu-target {
          padding: 15px 6px!important;
        }
      }
      .masthead:not(.side-header):not(.side-header-menu-icon) .header-bar{
        max-width:none!important;
      }
      .branding a img, .branding img {
        width:180px;
        height: auto;
      }
      .entry-meta{
        display:none;
      }
      .dt_team-template-default .breadcrumbs  li:nth-child(2) {
        display:none;
      }
      .fc-footer.dlg-align-left{
        display:none;
      }
      .post-entry-content{
        display:none;
      }
      /*
      .ubermenu-skin-black-white-2 {
      border: 1px solid #d91616;
      background-color: #851610!important;
      background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, #a63838), color-stop(50%, #851610), color-stop(50%, #212121));
      background: -webkit-linear-gradient(top, #851610, #851610);
      background: -moz-linear-gradient(top, #851610, #851610);
      background: -ms-linear-gradient(top, #851610, #851610);
      background: -o-linear-gradient(top, #851610, #851610);
      -webkit-box-shadow: inset 1px 1px 0 0 rgba(255, 255, 255, 0.1);
      -moz-box-shadow: inset 1px 1px 0 0 rgba(255, 255, 255, 0.1);
      box-shadow: inset 1px 1px 0 0 rgba(255, 255, 255, 0.1);
      }
      .ubermenu-skin-black-white-2 .ubermenu-item-level-0.ubermenu-current-menu-item > .ubermenu-target, .ubermenu-skin-black-white-2 .ubermenu-item-level-0.ubermenu-current-menu-parent > .ubermenu-target, .ubermenu-skin-black-white-2 .ubermenu-item-level-0.ubermenu-current-menu-ancestor > .ubermenu-target {
      color: #ffffff;
      background: #a2211a;
      }
      a:before, .masthead .soc-ico.accent-bg a:before, .dt-mobile-header .soc-ico.custom-bg a:before, .dt-mobile-header .soc-ico.accent-bg a:before {
      background-color: #a2211a;
      }
      .ubermenu-skin-black-white-2 .ubermenu-item-level-0:hover > .ubermenu-target {
      background: #d53838;
      color: #ffffff;
      }
      .ubermenu-skin-black-white-2 .ubermenu-item-level-0 > .ubermenu-target {
      font-weight: bold;
      color: #d9d9d9;
      text-transform: uppercase;
      border-left: 1px solid #8e2323;
      -webkit-box-shadow: inset 1px 0 0 0 rgba(255, 255, 255, 0.1);
      -moz-box-shadow: inset 1px 0 0 0 rgba(255, 255, 255, 0.1);
      box-shadow: inset 1px 0 0 0 rgba(255, 255, 255, 0.1);
      }
      */
      .ubermenu-skin-black-white-2 {
        border: none
          background-color: #ffffff!important;
        background: none;
        -webkit-box-shadow:none;
        -moz-box-shadow:none;
        box-shadow: none;
      }
      .ubermenu-skin-black-white-2 .ubermenu-item-level-0.ubermenu-current-menu-item > .ubermenu-target, .ubermenu-skin-black-white-2 .ubermenu-item-level-0.ubermenu-current-menu-parent > .ubermenu-target, .ubermenu-skin-black-white-2 .ubermenu-item-level-0.ubermenu-current-menu-ancestor > .ubermenu-target {
        color: #333333;
        background: none;
      }
      a:before, .masthead .soc-ico.accent-bg a:before, .dt-mobile-header .soc-ico.custom-bg a:before, .dt-mobile-header .soc-ico.accent-bg a:before {
        background-color:none;
      }
      .ubermenu-skin-black-white-2 .ubermenu-item-level-0:hover > .ubermenu-target {
        background: 777777;
        color: 777777;
      }
      .ubermenu-skin-black-white-2 .ubermenu-item-level-0 > .ubermenu-target {
        font-weight: bold;
        color: #777777;
        text-transform: uppercase;
        border-left:none;
        -webkit-box-shadow:none;
        -moz-box-shadow:none;
        box-shadow:none;
      }
      .ubermenu-skin-black-white-2{
        border:none;
      }
      .ubermenu .ubermenu-target-text{
        font: normal bold 15px "Roboto Condensed", Helvetica, Arial, Verdana, sans-serif;
      }
      .ubermenu .ubermenu-target{
        padding: 15px 10px;
      }
      @media screen and (max-width: 960px){
        #mapa-consejos{
          display:none;
        }
      }
    </style>
    <link rel="stylesheet" id="bsf-Defaults-css" href="https://www.cip.org.pe/wp-content/uploads/smile_fonts/Defaults/Defaults.css?ver=4.9.1" type="text/css" media="all">
    <link rel="stylesheet" id="cp-perfect-scroll-style-css" href="https://www.cip.org.pe/wp-content/plugins/convertplug/admin/assets/css/perfect-scrollbar.min.css?ver=4.9.1" type="text/css" media="all">
    <script type="text/javascript">
      /* <![CDATA[ */
      var slide_in = {
        "demo_dir":"https:\/\/www.cip.org.pe\/wp-content\/plugins\/convertplug\/modules\/slide_in\/assets\/demos"};
      /* ]]> */
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/jquery.js?ver=1.12.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/swfobject.js?ver=2.2-20120417">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-content/plugins/compact-wp-audio-player/js/soundmanager2-nodebug-jsmin.js?ver=4.9.1">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.6.3.1">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.6.3.1">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-content/plugins/video-popup/js/YouTubePopUp.jquery.js">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-content/plugins/video-popup/js/YouTubePopUp.js">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-content/plugins/calendarize-it/js/bootstrap.min.js?ver=3.0.0">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-content/plugins/calendarize-it/js/bootstrap-select.js?ver=1.0.2">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/accordion.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/resizable.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/draggable.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/dialog.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/tabs.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/sortable.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/droppable.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript">
      jQuery(document).ready(function(jQuery){
        jQuery.datepicker.setDefaults({
          "closeText":"Cerrar","currentText":"Hoy","monthNames":["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"],"monthNamesShort":["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],"nextText":"Siguiente","prevText":"Anterior","dayNames":["domingo","lunes","martes","mi\u00e9rcoles","jueves","viernes","s\u00e1bado"],"dayNamesShort":["dom","lun","mar","mi\u00e9","jue","vie","s\u00e1b"],"dayNamesMin":["D","L","M","X","J","V","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false}
                                     );
      }
                            );
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/menu.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/wp-a11y.min.js?ver=4.9.1">
    </script>
    <script type="text/javascript">
      /* <![CDATA[ */
      var uiAutocompleteL10n = {
        "noResults":"Sin resultados.","oneResult":"1 resultado encontrado. Utiliza las teclas de flecha arriba y abajo para navegar.","manyResults":"%d resultados encontrados. Utiliza las teclas arriba y abajo para navegar.","itemSelected":"Elemento seleccionado."};
      /* ]]> */
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.11.4">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-content/plugins/calendarize-it/js/deprecated.js?ver=bundled-jquery-ui">
    </script>
    <script type="text/javascript">
      /* <![CDATA[ */
      var RHC = {
        "ajaxurl":"https:\/\/www.cip.org.pe\/","mobile_width":"480","last_modified":"8eae3977f6652dee049ea0e0913edfd9","tooltip_details":[],"visibility_check":"1","gmt_offset":"-5","disable_event_link":"0"};
      /* ]]> */
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-content/plugins/calendarize-it/js/frontend.min.js?ver=4.5.0.2">
    </script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?libraries=places&amp;ver=3.0">
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-content/plugins/calendarize-it/js/rhc_gmap3.js?ver=1.0.1">
    </script>
    <script type="text/javascript">
      /* <![CDATA[ */
      var dtLocal = {
        "themeUrl":"https:\/\/www.cip.org.pe\/wp-content\/themes\/dt-the7","passText":"Para ver esta publicaci\u00f3n protegida, introduce la contrase\u00f1a debajo:","moreButtonText":{
          "loading":"Cargando...","loadMore":"Cargar m\u00e1s"}
        ,"postID":"15364","ajaxurl":"https:\/\/www.cip.org.pe\/wp-admin\/admin-ajax.php","contactMessages":{
          "required":"One or more fields have an error. Please check and try again."}
        ,"ajaxNonce":"c9b498e7c6","pageData":{
          "type":"page","template":"page","layout":null}
        ,"themeSettings":{
          "smoothScroll":"off","lazyLoading":false,"accentColor":{
            "mode":"solid","color":"#e1474d"}
          ,"floatingHeader":{
            "showAfter":160,"showMenu":true,"height":68,"logo":{
              "showLogo":false,"html":"","url":"https:\/\/www.cip.org.pe\/"}
          }
          ,"mobileHeader":{
            "firstSwitchPoint":1100,"secondSwitchPoint":990}
          ,"content":{
            "textColor":"#888888","headerColor":"#333333"}
          ,"stripes":{
            "stripe1":{
              "textColor":"#72777d","headerColor":"#3c3e45"}
            ,"stripe2":{
              "textColor":"#f4f4f5","headerColor":"#f4f4f5"}
            ,"stripe3":{
              "textColor":"#ffffff","headerColor":"#ffffff"}
          }
        }
        ,"VCMobileScreenWidth":"768"};
      var dtShare = {
        "shareButtonText":{
          "facebook":"Share on Facebook","twitter":"Tweet","pinterest":"Pin it","linkedin":"Share on Linkedin","whatsapp":"Share on Whatsapp","google":"Share on Google Plus","download":"Download image"}
        ,"overlayOpacity":"85"};
      /* ]]> */
    </script>
    <script type="text/javascript" src="https://www.cip.org.pe/wp-content/themes/dt-the7/js/above-the-fold.min.js?ver=6.0.1">
    </script>
    <link rel="https://api.w.org/" href="https://www.cip.org.pe/wp-json/">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.cip.org.pe/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.cip.org.pe/wp-includes/wlwmanifest.xml"> 
    <meta name="generator" content="WordPress 4.9.1">
    <link rel="shortlink" href="https://www.cip.org.pe/?p=15364">
    <link rel="alternate" type="application/json+oembed" href="https://www.cip.org.pe/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.cip.org.pe%2Fservicios-cip%2F">
    <link rel="alternate" type="text/xml+oembed" href="https://www.cip.org.pe/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.cip.org.pe%2Fservicios-cip%2F&amp;format=xml">
    <style id="ubermenu-custom-generated-css">
      /* Status: Loaded from Transient */
    </style>
    <script type="text/javascript">
      (function(url){
        if(/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)){
          return;
        }
        var addEvent = function(evt, handler) {
          if (window.addEventListener) {
            document.addEventListener(evt, handler, false);
          }
          else if (window.attachEvent) {
            document.attachEvent('on' + evt, handler);
          }
        };
        var removeEvent = function(evt, handler) {
          if (window.removeEventListener) {
            document.removeEventListener(evt, handler, false);
          }
          else if (window.detachEvent) {
            document.detachEvent('on' + evt, handler);
          }
        };
        var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
        var logHuman = function() {
          var wfscr = document.createElement('script');
          wfscr.type = 'text/javascript';
          wfscr.async = true;
          wfscr.src = url + '&r=' + Math.random();
          (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(wfscr);
          for (var i = 0; i < evts.length; i++) {
            removeEvent(evts[i], logHuman);
          }
        };
        for (var i = 0; i < evts.length; i++) {
          addEvent(evts[i], logHuman);
        }
      }
      )('//www.cip.org.pe/?wordfence_lh=1&hid=FBE9EC3DE2A1BBF389242D95929EDC1A');
    </script>       
    <style type="text/css">.recentcomments a{
      display:inline !important;
      padding:0 !important;
      margin:0 !important;
      }
    </style>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://www.cip.org.pe/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
    <meta name="generator" content="Powered by Slider Revolution 5.4.6.3.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <!-- icon -->
    <link rel="icon" href="https://www.cip.org.pe/wp-content/uploads/2018/02/favicon16.png" type="image/png">
    <link rel="shortcut icon" href="https://www.cip.org.pe/wp-content/uploads/2018/02/favicon16.png" type="image/png">
    <script type="text/javascript">function setREVStartSize(e){
        try{
          var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
          if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){
            f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}
                                             ),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){
            var u=(e.c.width(),jQuery(window).height());
            if(void 0!=e.fullScreenOffsetContainer){
              var c=e.fullScreenOffsetContainer.split(",");
              if (c) jQuery.each(c,function(e,i){
                u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}
                                ),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}
            f=u}
          else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);
          e.c.closest(".rev_slider_wrapper").css({
            height:f}
                                                )                   
        }
        catch(d){
          console.log("Failure at Presize of Slider:"+d)}
      };
    </script>
    <style type="text/css" id="wp-custom-css">
      .team-container a{
        pointer-events: none!important;
        cursor: default!important;
      }
      .tp-bullets{
        top:98%!important;
      }
      #main-slideshow{
        background-color:#ddddd7;
      }
      @media screen and (min-width: 778px){
        .masthead:not(.side-header):not(.side-header-menu-icon) .header-bar{
          max-width: calc(1440px - 100px)!important;
        }
      }
      #comunicadosinicio .vc_gitem-zone.vc_gitem-zone-a.vc_gitem-is-link{
        display:none;
      }
      .page-id-16592 .vc_gitem-animated-block .vc_gitem-zone.vc_gitem-zone-a.vc_gitem-is-link{
        display:none;
      }
      .caja-comunicado{
        margin-bottom: 35px;
        padding: 15px;
        border: 1px solid #eeeeee;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        border-radius: 5px;
      }
    </style>
    <!-- Fonts Plugin CSS - https://fontsplugin.com/ -->
    <style>
    </style>
    <!-- Fonts Plugin CSS -->
    <noscript>
      <style type="text/css"> .wpb_animate_when_almost_visible {
        opacity: 1;
        }
      </style>
    </noscript> 
    <style id="pum-styles" type="text/css" media="all">
      /* Popup Google Fonts */
      @import url('//fonts.googleapis.com/css?family=Acme|Montserrat');
      /* Popup Theme 15964: Framed Border */
      .popmake-overlay.theme-15964, .popmake-overlay.theme-framed-border {
        background-color: rgba( 255, 255, 255, 0.50 ) }
      .popmake.theme-15964, .popmake.theme-framed-border {
        padding: 18px;
        border-radius: 0px;
        border: 20px outset #dd3333;
        box-shadow: 1px 1px 3px 0px rgba( 2, 2, 2, 0.97 ) inset;
        background-color: rgba( 255, 251, 239, 1.00 ) }
      .popmake.theme-15964 .popmake-title, .popmake.theme-framed-border .popmake-title {
        color: #000000;
        text-align: left;
        text-shadow: 0px 0px 0px rgba( 2, 2, 2, 0.23 );
        font-family: inherit;
        font-size: 32px;
        line-height: 36px }
      .popmake.theme-15964 .popmake-content, .popmake.theme-framed-border .popmake-content {
        color: #2d2d2d;
        font-family: inherit }
      .popmake.theme-15964 > .popmake-close, .popmake.theme-framed-border > .popmake-close {
        height: 20px;
        width: 20px;
        left: auto;
        right: -20px;
        bottom: auto;
        top: -20px;
        padding: 0px;
        color: #ffffff;
        font-family: Acme;
        font-size: 20px;
        line-height: 20px;
        border: 1px none #ffffff;
        border-radius: 0px;
        box-shadow: 0px 0px 0px 0px rgba( 2, 2, 2, 0.23 );
        text-shadow: 0px 0px 0px rgba( 0, 0, 0, 0.23 );
        background-color: rgba( 0, 0, 0, 0.55 ) }
      /* Popup Theme 15963: Cutting Edge */
      .popmake-overlay.theme-15963, .popmake-overlay.theme-cutting-edge {
        background-color: rgba( 0, 0, 0, 0.50 ) }
      .popmake.theme-15963, .popmake.theme-cutting-edge {
        padding: 18px;
        border-radius: 0px;
        border: 1px none #000000;
        box-shadow: 0px 10px 25px 0px rgba( 2, 2, 2, 0.50 );
        background-color: rgba( 30, 115, 190, 1.00 ) }
      .popmake.theme-15963 .popmake-title, .popmake.theme-cutting-edge .popmake-title {
        color: #ffffff;
        text-align: left;
        text-shadow: 0px 0px 0px rgba( 2, 2, 2, 0.23 );
        font-family: Sans-Serif;
        font-size: 26px;
        line-height: 28px }
      .popmake.theme-15963 .popmake-content, .popmake.theme-cutting-edge .popmake-content {
        color: #ffffff;
        font-family: inherit }
      .popmake.theme-15963 > .popmake-close, .popmake.theme-cutting-edge > .popmake-close {
        height: 24px;
        width: 24px;
        left: auto;
        right: 0px;
        bottom: auto;
        top: 0px;
        padding: 0px;
        color: #1e73be;
        font-family: inherit;
        font-size: 32px;
        line-height: 24px;
        border: 1px none #ffffff;
        border-radius: 0px;
        box-shadow: -1px 1px 1px 0px rgba( 2, 2, 2, 0.10 );
        text-shadow: -1px 1px 1px rgba( 0, 0, 0, 0.10 );
        background-color: rgba( 238, 238, 34, 1.00 ) }
      /* Popup Theme 15962: Hello Box */
      .popmake-overlay.theme-15962, .popmake-overlay.theme-hello-box {
        background-color: rgba( 0, 0, 0, 0.75 ) }
      .popmake.theme-15962, .popmake.theme-hello-box {
        padding: 30px;
        border-radius: 80px;
        border: 14px solid #81d742;
        box-shadow: 0px 0px 0px 0px rgba( 2, 2, 2, 0.00 );
        background-color: rgba( 255, 255, 255, 1.00 ) }
      .popmake.theme-15962 .popmake-title, .popmake.theme-hello-box .popmake-title {
        color: #2d2d2d;
        text-align: left;
        text-shadow: 0px 0px 0px rgba( 2, 2, 2, 0.23 );
        font-family: Montserrat;
        font-size: 32px;
        line-height: 36px }
      .popmake.theme-15962 .popmake-content, .popmake.theme-hello-box .popmake-content {
        color: #2d2d2d;
        font-family: inherit }
      .popmake.theme-15962 > .popmake-close, .popmake.theme-hello-box > .popmake-close {
        height: auto;
        width: auto;
        left: auto;
        right: -30px;
        bottom: auto;
        top: -30px;
        padding: 0px;
        color: #2d2d2d;
        font-family: inherit;
        font-size: 32px;
        line-height: 28px;
        border: 1px none #ffffff;
        border-radius: 28px;
        box-shadow: 0px 0px 0px 0px rgba( 2, 2, 2, 0.23 );
        text-shadow: 0px 0px 0px rgba( 0, 0, 0, 0.23 );
        background-color: rgba( 255, 255, 255, 1.00 ) }
      /* Popup Theme 15961: Enterprise Blue */
      .popmake-overlay.theme-15961, .popmake-overlay.theme-enterprise-blue {
        background-color: rgba( 0, 0, 0, 0.70 ) }
      .popmake.theme-15961, .popmake.theme-enterprise-blue {
        padding: 28px;
        border-radius: 5px;
        border: 1px none #000000;
        box-shadow: 0px 10px 25px 4px rgba( 2, 2, 2, 0.50 );
        background-color: rgba( 255, 255, 255, 1.00 ) }
      .popmake.theme-15961 .popmake-title, .popmake.theme-enterprise-blue .popmake-title {
        color: #315b7c;
        text-align: left;
        text-shadow: 0px 0px 0px rgba( 2, 2, 2, 0.23 );
        font-family: inherit;
        font-size: 34px;
        line-height: 36px }
      .popmake.theme-15961 .popmake-content, .popmake.theme-enterprise-blue .popmake-content {
        color: #2d2d2d;
        font-family: inherit }
      .popmake.theme-15961 > .popmake-close, .popmake.theme-enterprise-blue > .popmake-close {
        height: 28px;
        width: 28px;
        left: auto;
        right: 8px;
        bottom: auto;
        top: 8px;
        padding: 4px;
        color: #ffffff;
        font-family: inherit;
        font-size: 20px;
        line-height: 20px;
        border: 1px none #ffffff;
        border-radius: 42px;
        box-shadow: 0px 0px 0px 0px rgba( 2, 2, 2, 0.23 );
        text-shadow: 0px 0px 0px rgba( 0, 0, 0, 0.23 );
        background-color: rgba( 49, 91, 124, 1.00 ) }
      /* Popup Theme 15960: Light Box */
      .popmake-overlay.theme-15960, .popmake-overlay.theme-lightbox {
        background-color: rgba( 0, 0, 0, 0.60 ) }
      .popmake.theme-15960, .popmake.theme-lightbox {
        padding: 18px;
        border-radius: 3px;
        border: 8px solid #000000;
        box-shadow: 0px 0px 30px 0px rgba( 2, 2, 2, 1.00 );
        background-color: rgba( 255, 255, 255, 1.00 ) }
      .popmake.theme-15960 .popmake-title, .popmake.theme-lightbox .popmake-title {
        color: #000000;
        text-align: left;
        text-shadow: 0px 0px 0px rgba( 2, 2, 2, 0.23 );
        font-family: inherit;
        font-size: 32px;
        line-height: 36px }
      .popmake.theme-15960 .popmake-content, .popmake.theme-lightbox .popmake-content {
        color: #000000;
        font-family: inherit }
      .popmake.theme-15960 > .popmake-close, .popmake.theme-lightbox > .popmake-close {
        height: 30px;
        width: 30px;
        left: auto;
        right: -24px;
        bottom: auto;
        top: -24px;
        padding: 0px;
        color: #ffffff;
        font-family: inherit;
        font-size: 24px;
        line-height: 26px;
        border: 2px solid #ffffff;
        border-radius: 30px;
        box-shadow: 0px 0px 15px 1px rgba( 2, 2, 2, 0.75 );
        text-shadow: 0px 0px 0px rgba( 0, 0, 0, 0.23 );
        background-color: rgba( 0, 0, 0, 1.00 ) }
      /* Popup Theme 15959: Default Theme */
      .popmake-overlay.theme-15959, .popmake-overlay.theme-default-theme {
        background-color: rgba( 255, 255, 255, 1.00 ) }
      .popmake.theme-15959, .popmake.theme-default-theme {
        padding: 18px;
        border-radius: 0px;
        border: 1px none #000000;
        box-shadow: 1px 1px 3px 0px rgba( 2, 2, 2, 0.23 );
        background-color: rgba( 249, 249, 249, 1.00 ) }
      .popmake.theme-15959 .popmake-title, .popmake.theme-default-theme .popmake-title {
        color: #000000;
        text-align: left;
        text-shadow: 0px 0px 0px rgba( 2, 2, 2, 0.23 );
        font-family: inherit;
        font-weight: inherit;
        font-size: 32px;
        font-style: normal;
        line-height: 36px }
      .popmake.theme-15959 .popmake-content, .popmake.theme-default-theme .popmake-content {
        color: #8c8c8c;
        font-family: inherit;
        font-weight: inherit;
        font-style: normal }
      .popmake.theme-15959 > .popmake-close, .popmake.theme-default-theme > .popmake-close {
        height: auto;
        width: auto;
        left: auto;
        right: 0px;
        bottom: auto;
        top: 0px;
        padding: 8px;
        color: #ffffff;
        font-family: inherit;
        font-weight: inherit;
        font-size: 12px;
        font-style: normal;
        line-height: 14px;
        border: 1px none #ffffff;
        border-radius: 0px;
        box-shadow: 0px 0px 0px 0px rgba( 2, 2, 2, 0.23 );
        text-shadow: 0px 0px 0px rgba( 0, 0, 0, 0.23 );
        background-color: rgba( 0, 183, 205, 1.00 ) }
    </style>
    <script src="https://www.cip.org.pe/wp-content/themes/dt-the7/js/atoms/plugins/jquery.mousewheel.min.js">
    </script>
    <style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{
      position:absolute;
      top:-10000px;
      z-index:10001}
      .fb_reposition{
        overflow:hidden;
        position:relative}
      .fb_invisible{
        display:none}
      .fb_reset{
        background:none;
        border:0;
        border-spacing:0;
        color:#000;
        cursor:auto;
        direction:ltr;
        font-family:"lucida grande", tahoma, verdana, arial, sans-serif;
        font-size:11px;
        font-style:normal;
        font-variant:normal;
        font-weight:normal;
        letter-spacing:normal;
        line-height:1;
        margin:0;
        overflow:visible;
        padding:0;
        text-align:left;
        text-decoration:none;
        text-indent:0;
        text-shadow:none;
        text-transform:none;
        visibility:visible;
        white-space:normal;
        word-spacing:normal}
      .fb_reset>div{
        overflow:hidden}
      @keyframes fb_transform{
        from{
          opacity:0;
          transform:scale(.95)}
        to{
          opacity:1;
          transform:scale(1)}
      }
      .fb_animate{
        animation:fb_transform .3s forwards}
      .fb_dialog{
        background:rgba(82, 82, 82, .7);
        position:absolute;
        top:-10000px;
        z-index:10001}
      .fb_dialog_advanced{
        border-radius:8px;
        padding:10px}
      .fb_dialog_content{
        background:#fff;
        color:#373737}
      .fb_dialog_close_icon{
        background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
        cursor:pointer;
        display:block;
        height:15px;
        position:absolute;
        right:18px;
        top:17px;
        width:15px}
      .fb_dialog_mobile .fb_dialog_close_icon{
        left:5px;
        right:auto;
        top:5px}
      .fb_dialog_padding{
        background-color:transparent;
        position:absolute;
        width:1px;
        z-index:-1}
      .fb_dialog_close_icon:hover{
        background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}
      .fb_dialog_close_icon:active{
        background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}
      .fb_dialog_iframe{
        line-height:0}
      .fb_dialog_content .dialog_title{
        background:#6d84b4;
        border:1px solid #365899;
        color:#fff;
        font-size:14px;
        font-weight:bold;
        margin:0}
      .fb_dialog_content .dialog_title>span{
        background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
        float:left;
        padding:5px 0 7px 26px}
      body.fb_hidden{
        height:100%;
        left:0;
        margin:0;
        overflow:visible;
        position:absolute;
        top:-10000px;
        transform:none;
        width:100%}
      .fb_dialog.fb_dialog_mobile.loading{
        background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
        min-height:100%;
        min-width:100%;
        overflow:hidden;
        position:absolute;
        top:0;
        z-index:10001}
      .fb_dialog.fb_dialog_mobile.loading.centered{
        background:none;
        height:auto;
        min-height:initial;
        min-width:initial;
        width:auto}
      .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{
        width:100%}
      .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{
        background:none}
      .loading.centered #fb_dialog_loader_close{
        clear:both;
        color:#fff;
        display:block;
        font-size:18px;
        padding-top:20px}
      #fb-root #fb_dialog_ipad_overlay{
        background:rgba(0, 0, 0, .4);
        bottom:0;
        left:0;
        min-height:100%;
        position:absolute;
        right:0;
        top:0;
        width:100%;
        z-index:10000}
      #fb-root #fb_dialog_ipad_overlay.hidden{
        display:none}
      .fb_dialog.fb_dialog_mobile.loading iframe{
        visibility:hidden}
      .fb_dialog_mobile .fb_dialog_iframe{
        position:sticky;
        top:0}
      .fb_dialog_content .dialog_header{
        background:linear-gradient(from(#738aba), to(#2c4987));
        border-bottom:1px solid;
        border-color:#043b87;
        box-shadow:white 0 1px 1px -1px inset;
        color:#fff;
        font:bold 14px Helvetica, sans-serif;
        text-overflow:ellipsis;
        text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;
        vertical-align:middle;
        white-space:nowrap}
      .fb_dialog_content .dialog_header table{
        height:43px;
        width:100%}
      .fb_dialog_content .dialog_header td.header_left{
        font-size:12px;
        padding-left:5px;
        vertical-align:middle;
        width:60px}
      .fb_dialog_content .dialog_header td.header_right{
        font-size:12px;
        padding-right:5px;
        vertical-align:middle;
        width:60px}
      .fb_dialog_content .touchable_button{
        background:linear-gradient(from(#4267B2), to(#2a4887));
        background-clip:padding-box;
        border:1px solid #29487d;
        border-radius:3px;
        display:inline-block;
        line-height:18px;
        margin-top:3px;
        max-width:85px;
        padding:4px 12px;
        position:relative}
      .fb_dialog_content .dialog_header .touchable_button input{
        background:none;
        border:none;
        color:#fff;
        font:bold 12px Helvetica, sans-serif;
        margin:2px -12px;
        padding:2px 6px 3px 6px;
        text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
      .fb_dialog_content .dialog_header .header_center{
        color:#fff;
        font-size:16px;
        font-weight:bold;
        line-height:18px;
        text-align:center;
        vertical-align:middle}
      .fb_dialog_content .dialog_content{
        background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
        border:1px solid #4a4a4a;
        border-bottom:0;
        border-top:0;
        height:150px}
      .fb_dialog_content .dialog_footer{
        background:#f5f6f7;
        border:1px solid #4a4a4a;
        border-top-color:#ccc;
        height:40px}
      #fb_dialog_loader_close{
        float:left}
      .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{
        visibility:hidden}
      #fb_dialog_loader_spinner{
        animation:rotateSpinner 1.2s linear infinite;
        background-color:transparent;
        background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
        background-position:50% 50%;
        background-repeat:no-repeat;
        height:24px;
        width:24px}
      @keyframes rotateSpinner{
        0%{
          transform:rotate(0deg)}
        100%{
          transform:rotate(360deg)}
      }
      .fb_iframe_widget{
        display:inline-block;
        position:relative}
      .fb_iframe_widget span{
        display:inline-block;
        position:relative;
        text-align:justify}
      .fb_iframe_widget iframe{
        position:absolute}
      .fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{
        max-width:100%}
      .fb_iframe_widget_fluid_desktop iframe{
        min-width:220px;
        position:relative}
      .fb_iframe_widget_lift{
        z-index:1}
      .fb_iframe_widget_fluid{
        display:inline}
      .fb_iframe_widget_fluid span{
        width:100%}
      .fb_mpn_mobile_landing_page_slide_out{
        animation-duration:200ms;
        animation-name:fb_mpn_landing_page_slide_out;
        transition-timing-function:ease-in}
      .fb_mpn_mobile_landing_page_slide_out_from_left{
        animation-duration:200ms;
        animation-name:fb_mpn_landing_page_slide_out_from_left;
        transition-timing-function:ease-in}
      .fb_mpn_mobile_landing_page_slide_up{
        animation-duration:500ms;
        animation-name:fb_mpn_landing_page_slide_up;
        transition-timing-function:ease-in}
      .fb_mpn_mobile_bounce_in{
        animation-duration:300ms;
        animation-name:fb_mpn_bounce_in;
        transition-timing-function:ease-in}
      .fb_mpn_mobile_bounce_out{
        animation-duration:300ms;
        animation-name:fb_mpn_bounce_out;
        transition-timing-function:ease-in}
      .fb_mpn_mobile_bounce_out_v2{
        animation-duration:300ms;
        animation-name:fb_mpn_fade_out;
        transition-timing-function:ease-in}
      .fb_customer_chat_bounce_in_v2{
        animation-duration:300ms;
        animation-name:fb_bounce_in_v2;
        transition-timing-function:ease-in}
      .fb_customer_chat_bounce_in_from_left{
        animation-duration:300ms;
        animation-name:fb_bounce_in_from_left;
        transition-timing-function:ease-in}
      .fb_customer_chat_bounce_out_v2{
        animation-duration:300ms;
        animation-name:fb_bounce_out_v2;
        transition-timing-function:ease-in}
      .fb_customer_chat_bounce_out_from_left{
        animation-duration:300ms;
        animation-name:fb_bounce_out_from_left;
        transition-timing-function:ease-in}
      .fb_invisible_flow{
        display:inherit;
        height:0;
        overflow-x:hidden;
        width:0}
      @keyframes fb_mpn_landing_page_slide_out{
        0%{
          margin:0 12px;
          width:100% - 24px}
        60%{
          border-radius:18px}
        100%{
          border-radius:50%;
          margin:0 24px;
          width:60px}
      }
      @keyframes fb_mpn_landing_page_slide_out_from_left{
        0%{
          left:12px;
          width:100% - 24px}
        60%{
          border-radius:18px}
        100%{
          border-radius:50%;
          left:12px;
          width:60px}
      }
      @keyframes fb_mpn_landing_page_slide_up{
        0%{
          bottom:0;
          opacity:0}
        100%{
          bottom:24px;
          opacity:1}
      }
      @keyframes fb_mpn_bounce_in{
        0%{
          opacity:.5;
          top:100%}
        100%{
          opacity:1;
          top:0}
      }
      @keyframes fb_mpn_fade_out{
        0%{
          bottom:30px;
          opacity:1}
        100%{
          bottom:0;
          opacity:0}
      }
      @keyframes fb_mpn_bounce_out{
        0%{
          opacity:1;
          top:0}
        100%{
          opacity:.5;
          top:100%}
      }
      @keyframes fb_bounce_in_v2{
        0%{
          opacity:0;
          transform:scale(0, 0);
          transform-origin:bottom right}
        50%{
          transform:scale(1.03, 1.03);
          transform-origin:bottom right}
        100%{
          opacity:1;
          transform:scale(1, 1);
          transform-origin:bottom right}
      }
      @keyframes fb_bounce_in_from_left{
        0%{
          opacity:0;
          transform:scale(0, 0);
          transform-origin:bottom left}
        50%{
          transform:scale(1.03, 1.03);
          transform-origin:bottom left}
        100%{
          opacity:1;
          transform:scale(1, 1);
          transform-origin:bottom left}
      }
      @keyframes fb_bounce_out_v2{
        0%{
          opacity:1;
          transform:scale(1, 1);
          transform-origin:bottom right}
        100%{
          opacity:0;
          transform:scale(0, 0);
          transform-origin:bottom right}
      }
      @keyframes fb_bounce_out_from_left{
        0%{
          opacity:1;
          transform:scale(1, 1);
          transform-origin:bottom left}
        100%{
          opacity:0;
          transform:scale(0, 0);
          transform-origin:bottom left}
      }
      @keyframes slideInFromBottom{
        0%{
          opacity:.1;
          transform:translateY(100%)}
        100%{
          opacity:1;
          transform:translateY(0)}
      }
      @keyframes slideInFromBottomDelay{
        0%{
          opacity:0;
          transform:translateY(100%)}
        97%{
          opacity:0;
          transform:translateY(100%)}
        100%{
          opacity:1;
          transform:translateY(0)}
      }
    </style>
    <script type="text/javascript" charset="UTF-8" src="https://maps.google.com/maps-api-v3/api/js/49/6/intl/es_ALL/common.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.google.com/maps-api-v3/api/js/49/6/intl/es_ALL/util.js">
    </script>
    <script type="text/javascript" async="" src="//www.cip.org.pe/?wordfence_lh=1&amp;hid=FBE9EC3DE2A1BBF389242D95929EDC1A&amp;r=0.312860282312031">
    </script>
    <style>
      @font-face {
        font-family: 'Consolas';
        font-style: normal;
        font-weight: 400;
        src: url('chrome-extension://pmhchjgmgioomimpjkfpofmpfgnepiab/res/fonts/consolas.woff') format('woff');
      }
    </style>
    <style>
      .NEDSV-Dialog .CodeMirror{
        height: 100% !important;
        position: relative !important;
        font-size: 14px;
        text-align: left !important;
        font-family: 'Consolas', monospace !important;
      }
      .NEDSV-Dialog .cm-string a{
        text-decoration: underline;
      }
      .NEDSV-Dialog .CodeMirror .cm-error{
        background-color: transparent;
        color: rgb(255, 83, 112);
      }
    </style>
    <style>
      .NEDSV-Dialog .CodeMirror{
        height: 100% !important;
        position: relative !important;
        font-size: 14px;
        text-align: left !important;
        font-family: 'Consolas', monospace !important;
      }
      .NEDSV-Dialog .cm-string a{
        text-decoration: underline;
      }
      .NEDSV-Dialog .CodeMirror .cm-error{
        background-color: transparent;
        color: rgb(255, 83, 112);
      }
    </style>










            <!-- End UberMenu -->
          </ul>
        </header>
        <div class="mobile-header-bar">
          <div class="mobile-navigation">
            <a href="#" class="dt-mobile-menu-icon">
              <span class="lines">
              </span>
            </a>
          </div>
          <div class="mobile-mini-widgets">
            <div class="mini-search show-on-desktop hide-on-first-switch near-logo-second-switch show-on-second-switch">    
              <form class="searchform" role="search" method="get" action="https://www.cip.org.pe/">
                <label for="search" class="screen-reader-text">Buscar:
                </label>
                <input type="text" class="field searchform-s" name="s" value="" placeholder="Escribe y pulsa enter …" style="opacity: 0; visibility: hidden;">
                <input type="submit" class="assistive-text searchsubmit" value="Ir!">
                <a href="#go" id="trigger-overlay" class="submit text-disable">&nbsp;
                </a>
              </form>
            </div>
          </div>
          <div class="mobile-branding">
            <a href="https://www.cip.org.pe/">
              <img class=" preload-me" src="https://www.cip.org.pe/wp-content/uploads/2018/02/logot.png" srcset="https://www.cip.org.pe/wp-content/uploads/2018/02/logot.png 320w, https://www.cip.org.pe/wp-content/uploads/2018/02/logot.png 320w" width="320" height="120" sizes="320px" alt="Colegio de Ingenieros del Perú">
              <img class="mobile-logo preload-me" src="https://www.cip.org.pe/wp-content/uploads/2018/02/logot.png" srcset="https://www.cip.org.pe/wp-content/uploads/2018/02/logot.png 320w, https://www.cip.org.pe/wp-content/uploads/2018/02/logot.png 320w" width="320" height="120" sizes="320px" alt="Colegio de Ingenieros del Perú">
            </a>
          </div>
        </div>
        <a href="#" class="dt-mobile-menu-icon floating-btn">
          <span class="lines">
          </span>
        </a>
      </div>
      <div class="dt-close-mobile-menu-icon">
        <span>
        </span>
      </div>






      <div id="main" class="sidebar-none sidebar-divider-off">
        <div class="main-gradient">
        </div>
        <div class="wf-wrap">
          <div class="wf-container-main">
            <div id="content" class="content" role="main">
              <section class="vc_section">
                <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px; margin-bottom: 0px; min-height: 0px;">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                      <div class="wpb_wrapper">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                          <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                              <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
      
                                <div class="vc_message_box vc_message_box-standard vc_message_box-rounded vc_color-info">
                                  <h5>Tramites para el colegiado:
                                  </h5>
                                </div>
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <ul>
                                      <li>
                                        <span style="color: #003366;">
                                          <strong>Duplicado de carné
                                          </strong>
                                        </span>
                                      </li>
                                    </ul>
                                    <table>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <span style="color: #003366;">Requisitos para duplicado
                                            </span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <ol>
                                              <li>
                                                <span style="color: #003366;">01 Foto tamaño carné (si ya registró su foto anteriormente, no es necesario traer).
                                                </span>
                                              </li>
                                              <li>
                                                <span style="color: #003366;">Costo del duplicado S/. 15.00 nuevos soles
                                                </span>
                                              </li>
                                            </ol>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span style="color: #003366;">&nbsp;
                                            </span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span style="color: #003366;">Recarnetización
                                            </span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span style="color: #003366;">Para colegiados antes del año 1988, y que nunca han tenido el actual carné plastificado, el costo es de S/. 25.00 nuevos soles.
                                            </span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span style="color: #003366;">&nbsp;
                                            </span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <span style="color: #003366;">Nota:
                                            </span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <ol>
                                              <li>
                                                <span style="color: #003366;">Los ingenieros deben de estar habilitados.
                                                </span>
                                              </li>
                                              <li>
                                                <span style="color: #003366;">Pueden enviar una nueva foto y/o su firma escaneada, si desean actualizarla.
                                                </span>
                                              </li>
                                              <li>
                                                <span style="color: #003366;">Todos los trámites son de manera virtual, enviar su solicitud al 
                                                  <b>cip@cip.org.pe
                                                  </b>.
                                                </span>
                                              </li>
                                              <li>
                                                <span style="color: #003366;">Puede también realizar éste mismo trámite en sus respectivas Sedes Departamentales.
                                                </span>
                                              </li>
                                            </ol>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <ul class="check">
                                      <li>
                                        <span style="color: #003366;">
                                          <strong>Duplicado de diploma
                                          </strong>
                                        </span>
                                      </li>
                                    </ul>
                                    <p>
                                      <span style="color: #003366;">El ingeniero colegiado también puede solicitar un Duplicado de diploma. Si tuviera alguna duda consultar a la Oficina de Registros .
                                      </span>
                                    </p>
                                    <h4>
                                      <span style="color: #003366;">MUY IMPORTANTE
                                      </span>
                                    </h4>
                                    <ul>
                                      <li>
                                        <span style="color: #003366;">Para realizar cualquier trámite los ingenieros deben de estar habilitados.
                                        </span>
                                      </li>
                                      <li>
                                        <span style="color: #003366;">Para acceder a la bolsa de trabajo y poder crear una cuenta de usuario de correo electrónico con el dominio cip.org.pe el ingeniero colegiado debe tener acceso de sistema CipVirtual&nbsp;con los sgtes datos de acceso:tipo:colegiado, usuario: Nro. de CIP, la clave se le proporcionó cuando se colegió, sino recuerda debe dar click en&nbsp;
                                          <em>olvidó su contraseña
                                          </em>, cualquier duda escriba un e-mail a&nbsp;
                                          <a style="color: #003366;" href="mailto:bolsadetrabajo@cip.org.pe">bolsadetrabajo@cip.org.pe
                                          </a>
                                        </span>
                                      </li>
                                      <li>
                                        <span style="color: #003366;">Para solicitar un tramite de duplicado de carnet o diploma debe presentar un documento de identidad.
                                        </span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>



                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>






<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
<center>VER REQUISITOS DE TRAMITE VIRTUAL</center>
</button>

<!-- Modal -->
<div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content" style="padding: 20px;">
      <div class="modal-header">

        <h4 class="modal-title col-12 text-center" ><center>TRÁMITE VIRTUAL</center>Colegiación ordinaria </h4>

      </div>
      <div class="modal-body">
        <h5>REQUISITO 1.1.:</h5>
        <p>Registro Virtual en la Página Web del Colegio de Ingenieros del Perú del Consejo Nacional (www.cip.org.pe), al cual se adjuntará
        digitalmente los siguientes documentos:</p>
        <ul>
        <li>a) DNI (ambos lados)</li>
        <li>b) Título Universitario (ambos lados)</li>
        <li>c) Resolución ó Constancia de SUNEDU</li>
        <li>d) Firma digital</li>
        </ul>

<br><br>

        <h5>REQUISITO 1.2.:</h5>
        <p>Foto digital a color con fondo blanco, para el carné del colegiado. (se sugiere formal).</p><br>




        <h5>REQUISITO 1.3.:</h5>
        <p>Declaración Jurada de realización del pago de incorporación al CIP, señalando número de documento de cobranza y fecha.</p><br>

    

        <h5>REQUISITO 1.4.:</h5>
        <p>Digital de la Tesis. En caso que la Tesis se encuentre en el Registro Nacional de Trabajos de Investigación (RENATI) no será necesario
        el envío digital, bastará con indicar el título de su Tesis, la materia y fecha de publicación. El formulario cambiará a la siguiente
        denominación: “SOLICITUD DE INCORPORACIÓN AL CIP”</p>
<ul>
        <li>a)Una vez realizado el registro virtual, enviar la Ficha impresa, firmada y huella digital (índice derecho), al correo electrónico <b>colegiadoscdl@ciplima.org.pe</b> </li>
        <li>b)La oficina de colegiación evaluará la documentación y comunicará al interesado si es procedente el trámite para autorizar el pago por Derecho de Colegiación. De ser aprobado, deberá enviar por correo el comprobante de pago por la suma de S/. 1,300.00 </li>
</ul>
<br><br>

<h5><center>IMPORTANTE: </center></h5>
<p><center>Sólo se tramitarán las solicitudes de colegiación de aquellos que hayan enviado por correo electrónico la ficha virtual y comprobante de pago,
dentro del plazo de las fechas de inscripciones.</center> 
</p>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entendido</button>
      </div>
    </div>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




