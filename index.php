<!DOCTYPE html>
<html lang="ko">
<!-- URL 경로 설정 -->
<?php
    if(!$_SERVER['SERVER_NAME']=='mkorad.or.kr' || !isset($_SERVER["HTTPS"])) {
        header('Location: https://mkorad.or.kr');
    }

    $url_public = "public"; //Public 폴더 경로 설정
    $url_js = $url_public . "/js"; //js 폴더 경로 설정
    $url_img = $url_public . "/img"; //img 폴더 경로 설정
?>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K6PDHBT');</script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L21YM0S5K0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-L21YM0S5K0');
    </script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=1200, user-scalable=no"> -->
    <title>M방폐장</title>
    <meta name="title" content="M방폐장">
    <meta name="description" content="한국원자력환경공단 온라인 비대면(Untact) 홍보관">
    <meta name="keywords" content="코라드, 방폐장, 방사성폐기물, 한국원자력환경공단, 랜선투어">
    <link rel="canonical" href="https://mkorad.or.kr/">
    <link rel="shortcut icon" href="public/img/favicon.png">
        
    <script type="text/javascript" src="//code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo $url_public ?>/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- 부트스트랩 -->
    <link rel="stylesheet" href="<?php echo $url_public ?>/js/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo $url_public ?>/js/slick/slick/slick.min.js"></script> <!-- Slick 슬라이더 JS 파일 -->
    <link type="text/css" rel="stylesheet" href="<?php echo $url_public; ?>/js/slick/slick/slick.css" > <!--  Slick 슬라이더 CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo $url_public; ?>/style.css" > <!-- peterosea CSS 스타일시트 -->
    <script type="text/javascript" src="<?php echo $url_public ?>/js/script.js"></script> <!-- peterosea JS 파일 -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="mkorad.or.kr"/>
    <meta property="og:title" content="M방폐장" />
    <meta property="og:description" content="한국원자력환경공단 온라인 비대면(Untact) 홍보관" />
    <meta property="og:image" content="/public/img/sns-thumb.jpg" />
    <!-- 네이버 웹마스터도구 인증 -->
    <meta name="robots" content="index,follow">
    <meta name="naver-site-verification" content="26b0d81c3ae8ee006d82d6898f6df5a56561b1e9" />
</head>
<body>
    <!-- body_container -->
    <div class="body_container">
        <!-- 사이트 헤더 -->
        <header id="header" class="main_header">
            <!-- 사이트 로고 -->
            <div class="logo">
                <a href="/"><img src="<?php echo $url_img; ?>/logo.png" alt="한국원자력환경공단"></a>
            </div>
            <!-- 메인 네비게이션 -->
            <nav class="main_nav">
                <ul>
                    <li class="item">
                        <a href="#anchor-tour">랜선투어</a>
                    </li>
                    <li class="item">
                        <a href="#anchor-marble">방폐마블</a>
                    </li>
                    <li class="item">
                        <a href="#anchor-quiz">퀴즈이벤트</a>
                    </li>
                    <li class="item">
                        <a href="#anchor-share">SNS공유</a>
                    </li>
                </ul>
            </nav>
            <!-- /.메인 네비게이션 -->
            <div class="_blank"></div>
        </header>
        <!-- /.사이트 헤더 -->
        <!-- content_container 사이트 콘텐트 영역 -->
        <div id="content" class="content_container">
            <div class="container_inner">
                <!-- 사이트 제목 및 메인 영상 영역 -->
                <section class="content_section site_title_wrap">
                    <div class="section_inner">
                        <div class="title_wrap">
                            <!-- <div class="mobile"><img src="<?php echo $url_img; ?>/title_sticker.png" alt="모바일"/></div> -->
                            <div class="img_title"><img src="<?php echo $url_img; ?>/site_title_whole.png" alt="한국원자력환경공단 M방폐장 랜선투어"/></div>
                            <!-- <div class="char_korad"></div> -->
                        </div>
                        <div class="welcome">한국원자력환경공단 M방폐장 랜선투어에 오신 여러분을 환영합니다!!</div>
                        <p class="description">
                        랜선투어를 통해 여러분이 방문하실 곳은 경주 중·저준위방사성폐기물 처분시설로<br>
                        원전, 병원, 연구기관 등에서 발생한 비교적 방사능 수치가 낮은 방사성폐기물을 처분 및 관리하는 곳입니다.
                        </p>
                        <div class="video_wrap youtube_wrap">
                            <div class="video-container">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/FAX3GEUF0w0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.사이트 제목 및 메인 영상 영역 -->
                <!-- 방폐장 지도 영역 -->
                <section id="anchor-tour" class="content_section map_wrap">
                    <!-- 지도 네비게이션 영역 -->
                    <div class="navigation_wrap">
                        <!-- 타임라인 -->
                        <div id="timeline" class="_timeline">
                            <div class="_inner">
                                <div class="_active"></div>
                            </div>
                        </div>
                        <div class="_inner">
                            <ul>
                                <li id="point1" class="point01 point" onclick="ga('event','코라디움', {
                                            'event_category':'지도네비게이션',
                                            'event_label':'코라디움'
                                        });">
                                    <div class="pin">
                                        <!-- PIN 01 -->
                                        <svg class="pin01 _pin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 60">
                                            <defs/>
                                            <path d="M16.7 50.2c-2.6 0-4.8 2.1-4.8 4.8 0 2.6 2.1 4.8 4.8 4.8 2.6 0 4.8-2.1 4.8-4.8 0-2.6-2.2-4.8-4.8-4.8zm-.3-4.4h.1c1.2 0 2.2-1.1 2.2-1.2 6-7.2 14.3-17.5 14.3-27.5C33 7.6 25.6 0 16.5 0S0 7.6 0 17.2c0 10 8.3 20.3 14.3 27.5 0 0 1 1.1 2.1 1.1zM3.7 16.3c0-7 5.7-12.8 12.8-12.8 7 0 12.8 5.7 12.8 12.8 0 7.1-5.7 12.8-12.8 12.8-7-.1-12.8-5.8-12.8-12.8zm8.7-5.8c-3.3 0-3.9 2.6-3.9 5.2s.6 5.2 3.9 5.2 3.9-2.6 3.9-5.2-.6-5.2-3.9-5.2zm0 8.6c-1.2 0-1.3-1.8-1.3-3.4 0-1.6.1-3.4 1.3-3.4s1.3 1.8 1.3 3.4c0 1.6-.1 3.4-1.3 3.4zm8-5.8v7.4h2.7v-10h-2.4l-3.4 2.2 1.2 1.8 1.9-1.4z"/>
                                        </svg>
                                        <!-- /.PIN 01 -->
                                    </div>
                                    <div class="illust">
                                        <!-- 코라디움 일러스트 -->
                                        <svg class="illust01 _illust" xmlns="http://www.w3.org/2000/svg" baseProfile="basic" viewBox="0 0 424.5 132.9">
                                            <defs/>
                                            <path fill="#9aaf6b" d="M149.3 23.5V38c.7 0 1.8 0 3.2.1V23.5h-3.2zM153.1 23.5v14.6h.2V23.5h-.2z"/>
                                            <path fill="#ebede9" d="M148.5 38h.7V12.9c-.2 0-.4.1-.7.1v25z"/>
                                            <path fill="#e3ede7" d="M153.3 23.5V12.3h-.2v11.2h.2zM152.5 12.4c-1.1.1-2.1.3-3.2.5v10.6h3.2V12.4z"/>
                                            <path fill="#9aaf6b" d="M157.3 20.5h-4v17.6c1.2.1 2.5.2 4 .3V20.5z"/>
                                            <path fill="#ebede9" d="M153.1 12.3c-.2 0-.4 0-.7.1v25.7h.7V12.3z"/>
                                            <path fill="#e3ede7" d="M157.3 20.5V12c-1.4 0-2.7.1-4 .3v8.2h4z"/>
                                            <path fill="#9aaf6b" d="M157.3 23.5v14.9h.2V23.5h-.2zM161.3 23.5h-3.2v15c1 .1 2.1.2 3.2.3V23.5z"/>
                                            <path fill="#ebede9" d="M157.5 23.5v14.9c.2 0 .4 0 .7.1v-15h-.7z"/>
                                            <path fill="#e3ede7" d="M157.3 23.5h4.1V12h-4v11.5z"/>
                                            <path fill="#9aaf6b" d="M162.3 20.5V39c1 .1 2.1.3 3.2.4V20.5h-3.2zM166.3 20.5h-.2v19h.2v-19z"/>
                                            <path fill="#ebede9" d="M162.1 12.1h-.7v26.8c.2 0 .4.1.7.1V12.1z"/>
                                            <path fill="#e3ede7" d="M166.3 20.5v-8.2h-.2v8.3h.2zM165.5 12.2c-1.1-.1-2.1-.1-3.2-.2v8.5h3.2v-8.3z"/>
                                            <path fill="#9aaf6b" d="M170.3 23.5h-4v16c1.3.2 2.6.5 4 .7V23.5z"/>
                                            <path fill="#ebede9" d="M166.1 12.3h-.7v27.2c.2 0 .4.1.7.1V12.3zM171.1 12.8c-.2 0-.4-.1-.7-.1v2.8h.7v-2.7z"/>
                                            <path fill="#e3ede7" d="M166.3 23.5h4V12.6c-1.3-.2-2.7-.3-4-.4V23.5z"/>
                                            <path fill="#9aaf6b" d="M174.3 27.5h-3.2v12.9c1.1.2 2.1.5 3.2.7V27.5zM170.3 27.5v12.8h.2V27.5h-.2z"/>
                                            <path fill="#ebede9" d="M170.5 27.5v12.8c.2 0 .4.1.7.1V27.5h-.7z"/>
                                            <path fill="#e3ede7" d="M170.3 27.5h4v-12h-4v8z"/>
                                            <path fill="#9aaf6b" d="M175.3 23.5v17.9c1.1.3 2.1.6 3.2.9V23.5h-3.2zM179.1 23.5v19.1c.1 0 .1 0 .2.1V23.5h-.2z"/>
                                            <path fill="#ebede9" d="M175.1 15.5v-2.2c-.2 0-.4-.1-.7-.1v28c.2.1.4.1.7.2V15.5z"/>
                                            <path fill="#e3ede7" d="M179.3 23.5v-9.4h-.2v9.5h.2zM178.5 13.9c-1.1-.2-2.1-.4-3.2-.6v10.2h3.2v-9.6z"/>
                                            <path fill="#9aaf6b" d="M183.3 20.5h-4v22.1c1.4.4 2.7.9 4 1.5V20.5z"/>
                                            <path fill="#ebede9" d="M179.1 14.1c-.2 0-.4-.1-.7-.1v28.5c.2.1.4.1.7.2V14.1zM184.1 15.2c-.2-.1-.4-.1-.7-.2v2.5h.7v-2.3z"/>
                                            <path fill="#e3ede7" d="M183.3 20.5V15c-1.3-.3-2.7-.6-4-.9v6.4h4z"/>
                                            <path fill="#9aaf6b" d="M192.3 29.5h-.2v19.4c.1 0 .1.1.2.1V29.5zM188.3 29.5v17c1.1.6 2.2 1.3 3.2 2v-19h-3.2z"/>
                                            <path fill="#e3ede7" d="M191.5 20.5h.6v9h.2v-12h-4v12h3.2z"/>
                                            <path fill="#9aaf6b" d="M183.3 34.5v9.6c.1 0 .1 0 .2.1v-9.7h-.2zM187.3 34.5h-3.2v9.9c1.1.5 2.1 1 3.2 1.5V34.5z"/>
                                            <path fill="#ebede9" d="M183.5 34.5v9.7c.2.1.4.2.7.3v-9.9h-.7zM188.1 17.5h-.7V46c.2.1.4.2.7.3V17.5z"/>
                                            <path fill="#e3ede7" d="M183.3 34.5h4v-17h-4v3z"/>
                                            <path fill="#9aaf6b" d="M196.3 37.5h-4V49c1.5 1.1 2.8 2.2 4 3.5v-15z"/>
                                            <path fill="#ebede9" d="M192.1 20.5h-.7v27.9c.2.2.4.3.7.5V20.5zM196.5 20.5h.7v1h-.7z"/>
                                            <path fill="#e3ede7" d="M192.3 37.5h4v-17h-4v9z"/>
                                            <path fill="#9aaf6b" d="M196.3 44.5v8h.2v-8h-.2zM200.3 44.5h-3.2v8.1c.7.1 1.8.1 3.2.2v-8.3z"/>
                                            <path fill="#ebede9" d="M196.5 44.5v8c.1 0 .4 0 .7.1v-8.1h-.7zM200.5 21.5h.7v1h-.7z"/>
                                            <path fill="#e3ede7" d="M196.3 44.5h4v-23h-4v16z"/>
                                            <path fill="#9aaf6b" d="M205.1 45.5v7.2h.2v-7.2h-.2zM201.3 45.5v7.3h3.2v-7.3h-3.2z"/>
                                            <path fill="#ebede9" d="M201.1 22.5h-.7v30.3h.7V22.5z"/>
                                            <path fill="#e3ede7" d="M201.3 22.5h3.2v23h-3.2zM205.3 45.5v-23h-.2v23z"/>
                                            <path fill="#9aaf6b" d="M209.3 44.5h-4v8.2c1.3-.1 2.6-.2 4-.3v-7.9z"/>
                                            <path fill="#ebede9" d="M205.1 22.5v-.3c-.2-.1-.4-.2-.7-.3V52.8h.7V22.5zM210.1 24.6c-.2-.1-.4-.2-.7-.3v2.2h.7v-1.9z"/>
                                            <path fill="#e3ede7" d="M209.3 44.5V24.2c-1.3-.7-2.6-1.3-4-1.9v22.3h4z"/>
                                            <path fill="#9aaf6b" d="M209.3 49.5v2.9h.2v-2.9h-.2zM213.3 49.5h-3.2v2.8c1.1-.2 2.1-.3 3.2-.6v-2.2z"/>
                                            <path fill="#ebede9" d="M209.5 49.5v2.9c.2 0 .4-.1.7-.1v-2.8h-.7z"/>
                                            <path fill="#e3ede7" d="M209.3 49.5h4v-23h-4v18z"/>
                                            <path fill="#9aaf6b" d="M218.1 49.5v.6c.1 0 .1 0 .2-.1v-.5h-.2zM214.3 49.5v1.9c1.1-.3 2.2-.7 3.2-1.1v-.8h-3.2z"/>
                                            <path fill="#ebede9" d="M214.1 27c-.2-.1-.4-.3-.7-.4v25.1c.2-.1.4-.1.7-.2V27z"/>
                                            <path fill="#e3ede7" d="M217.5 29.3c-1-.7-2-1.5-3.2-2.2v22.5h3.2V29.3zM218.3 49.5V29.9c-.1 0-.1-.1-.2-.1v19.7h.2z"/>
                                            <path fill="#ebede9" d="M218.1 29.8c-.2-.2-.4-.3-.7-.5v21.1c.2-.1.4-.2.7-.3V29.8zM223.1 35c-.2-.3-.4-.6-.7-.9V47c.2-.3.5-.5.7-.8V35z"/>
                                            <path fill="#e3ede7" d="M222.3 33.9c-1.1-1.3-2.4-2.6-4-3.9v20c1.5-.7 2.9-1.7 4-2.8V33.9z"/>
                                            <path fill="#ba9749" d="M12.9 72s27.9-59.9 135-55.8c0 0 67 1.1 71.4 21.6S139 52.6 139 52.6s57.7 33.1 137.3 13 115.3-32.4 115.3-32.4-68.8 16-121.6 3.3S194.1 5.4 137.9 11 34.8 23.2.3 71.2l12.6.8z"/>
                                            <g>
                                                <path fill="#949b91" d="M176.3 30.3l-17-.9v10.5l17 1.8z"/>
                                                <path fill="#e3ede7" d="M158.2 25.9s-3 5.1 6.4 6.5c9.4 1.4 12.3-2.2 12.3-2.2l-18.7-4.3z"/>
                                            </g>
                                            <path fill="#28cece" d="M165.8 82.7s6 15.3 5.6 32c0 0 38.7 11.2 73.3 4.5 0 0 17.5-1.1 29.4-4.8s15.3-41.3 15.3-41.3-103.2 14.5-123.6 9.6z"/>
                                            <g fill="#d5e9e7">
                                                <path d="M171.7 87.2l-1 .7c.1.1 5.4 8.1 5.7 28.1.4.1.8.2 1.3.3-.3-20.7-5.8-28.8-6-29.1zM182.6 117.4c.8-25.5-4.2-32.1-4.4-32.4l-1 .8c.1.1 4.9 6.6 4.1 31.4.4 0 .8.1 1.3.2zM188.5 88.8h-1.3c0 .2-.6 18.8-.6 29.3.4.1.8.2 1.3.2 0-10.4.6-29.2.6-29.5zM193.9 86.5l-1.3-.1c0 .2-.8 20.9-.3 32.6.4.1.9.1 1.3.2-.5-11.5.3-32.5.3-32.7zM202 85.2c0 .2-3.5 18.2-3.7 34.7.4.1.8.1 1.3.2.2-16.4 3.7-34.4 3.7-34.6l-1.3-.3zM208.8 88.1l-1.3-.2c-2.4 13.2-2.1 27.7-2 32.8.4 0 .8.1 1.3.1-.1-4.9-.4-19.5 2-32.7zM213.5 121.2c.4 0 .8 0 1.3.1.1-6.6.5-25.5 1.6-39.6-.4 0-.9.1-1.3.1-1.1 14.1-1.5 32.7-1.6 39.4zM221.7 121.3h1.3c.1-7.6.5-34.6 1.1-37.7l-1.2-.2c-.7 3.2-1.1 30.3-1.2 37.9zM230.6 121c.4 0 .8-.1 1.3-.1.1-4.5.4-35.8 1.1-39.1l-1.2-.2c-.8 3.5-1.1 35.2-1.2 39.4zM239.6 120c.4-.1.9-.1 1.3-.2.1-9.1.5-33.3 1.1-36.2l-1.2-.2c-.8 3.1-1.1 27.6-1.2 36.6zM248.5 118.9c.4 0 .8-.1 1.3-.1.1-8 .5-34.3 1.1-37.4l-1.2-.2c-.8 3.2-1.1 29.8-1.2 37.7zM258.9 117.6c.4-.1.8-.1 1.3-.2.1-8.3.5-34.1 1.1-37.2L260 80c-.6 3.2-1 29.5-1.1 37.6zM268.2 115.9c.4-.1.9-.2 1.3-.3.1-8.9.5-33.5 1.1-36.5l-1.2-.2c-.7 3.1-1.1 28.3-1.2 37zM279.5 76.5l-1.2-.2c-.6 3.1-1 26.8-1.1 36.2.4-.4.9-.9 1.3-1.4.1-10.1.4-31.8 1-34.6z"/>
                                            </g>
                                            <path fill="#28cece" d="M82.5 57.8S33 54.1 39 85.7s71 52.8 108.6 43.5-9.3-16.7-17.9-29.4c-8.6-12.6-1.9-19 .7-25.3 2.6-6.3-47.9-16.7-47.9-16.7z"/>
                                            <path fill="#9aaf6b" d="M59 47.4s5.2 14.1 1.5 23.4-4.8 9.7.4 11.9c5.2 2.2 20.8 1.1 26-.7 5.2-1.9 5.2-4.1 4.8-6-.4-1.9-.4-10.4-2.6-13S59 47.4 59 47.4z"/>
                                            <path fill="#040000" d="M43.2 30.8S11.8 45.5 27.7 71.1s110.5 55.5 159.3 55.5 96.7-5.8 121.4-37.9c0 0 26.2-21.6 53.2-27.8 26.9-6.2 44-21.7 44-21.7s3.1-16.1-14-6c-17.1 10.1-123 54.9-159.2 48.4S83.9 51.7 83.9 51.7L43.2 30.8z" opacity=".2"/>
                                            <path fill="#fff" d="M75.8 11.5S59.9-3.4 48.5 2.6s-11.9 20.3-1 35.2 54.7 44.1 109.1 48.6c65.1 5.4 79.4 6 109.1-.5 29-6.3 46.1-22.8 67.4-29.3s68.9-14.4 72.4-17.4c3.5-3 22.8-15.9 14.4-14.4s-36.7 10.4-42.7 11.4-63.5 3-80.8 10.9S245.8 57 222 57 121.9 49.6 75.8 11.5z"/>
                                            <g>
                                                <path fill="#d8c571" d="M75.8 11.4c-1.7-1.4-3.4-2.7-5.4-3.7-2-1-4.7-2.2-7-2-4.3.3-.6 4.6.6 6.3 1.1 1.6 2.3 3.1 3.6 4.6 2.6 3 5.6 5.6 8.7 8 6.2 4.7 13.1 8.5 20.2 11.6 12.8 5.6 26.4 9 39.9 12.5 27.1 6.9 60.4 8.3 88.2 8.4h2c-32.2.1-70.1-6.7-100.2-17.7C109 33 92.1 24.5 77.5 12.7c-.5-.4-1.1-.9-1.7-1.3z"/>
                                                <path fill="#dcd1a3" d="M251.5 56c-9.3.7-18.5 1-26.8 1 16.1 0 23.9-.4 26.8-1z"/>
                                            </g>
                                            <path fill="#5ee5e5" d="M226.2 58.4c-76.6 0-130.6-16.2-150.7-32.8-15-12.4-15.8-16.8-15.1-19 .5-1.6 2.1-2.2 3-2.2.7 0 1.3.5 1.4 1.2 0 .7-.5 1.3-1.2 1.4 0 0-.6.1-.7.5-.2.6-.3 4.1 14.3 16.2C97.5 40.5 154 57 234.2 55.9c.4 0 39.8-.3 65.2-11.1 0 0 .1 0 .1-.1.6-.2 13.8-4 21.1-4.4.7 0 1.3.5 1.3 1.2s-.5 1.3-1.2 1.3c-6.7.4-19.3 4-20.4 4.3-25.9 11-65.7 11.3-66.1 11.3h-8z"/>
                                            <path fill="#42423c" d="M66.1 42.3s-2.2 3.5-1.2 7.7l9.7 5.2 1.7-5.5-10.2-7.4zM83.9 51.7l-.9 6.5 6.9 2.5 2.2-5.2zM102.8 60.9l-1 4.2 9.2 2 .2-3.9zM127.1 65.6l-.5 7 8.4.7.3-5.7zM153.6 75.1l-.2 6.4 7.2.8.5-6.2zM170.5 79.3l.7 8.2 16.6 1.3-.2-8.3zM208.4 83.2s0 3.7-.2 4.7 10.9.7 10.9.7l-.2-4.5-10.5-.9z"/>
                                            </svg>
                                        <!-- /.코라디움 일러스트 -->
                                    </div>
                                    <div class="_title">코라디움</div>
                                    <p class="_description">
                                        방사성폐기물이 어떻게 관리되고 있는지 배우며 체험할 수 있는 홍보관입니다.
                                    </p>
                                </li>
                                <li id="point2" class="point02 point" onclick="ga('event','지상지원시설', {
                                            'event_category':'지도네비게이션',
                                            'event_label':'지상지원시설'
                                        });">
                                    <div class="pin">
                                        <!-- PIN 02 -->
                                        <svg class="pin02 _pin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 60">
                                            <defs/>
                                            <path d="M16.7 50.3c-2.6 0-4.8 2.1-4.8 4.8 0 2.6 2.1 4.8 4.8 4.8 2.6 0 4.8-2.1 4.8-4.8 0-2.7-2.2-4.8-4.8-4.8zm-.3-4.5h.1c1.2 0 2.2-1.1 2.2-1.2 6-7.2 14.3-17.5 14.3-27.5C33 7.6 25.6 0 16.5 0S0 7.6 0 17.2c0 10 8.2 20.3 14.3 27.5 0 0 1 1.1 2.1 1.1zM3.7 16.3c0-7 5.7-12.8 12.8-12.8 7 0 12.8 5.7 12.8 12.8 0 7.1-5.7 12.8-12.8 12.8-7-.1-12.8-5.8-12.8-12.8zm8.7-5.8c-3.3 0-3.9 2.6-3.9 5.2s.6 5.2 3.9 5.2 3.9-2.6 3.9-5.2-.6-5.2-3.9-5.2zm0 8.6c-1.2 0-1.3-1.8-1.3-3.4 0-1.6.1-3.4 1.3-3.4s1.3 1.8 1.3 3.4c0 1.6-.1 3.4-1.3 3.4zm11.8-.3h-4l.7-.6c.9-.8 3.1-2.8 3.1-4.7 0-2-1.6-2.9-3.8-2.9-.6 0-1.5.1-3 .6l.1 2.1c.6-.4 1.8-.7 2.6-.7s1.4.4 1.4 1.3c0 1.4-2.4 3.3-4.4 5v1.9h7.3v-2z"/>
                                        </svg>
                                        <!-- /.PIN 02 -->
                                    </div>
                                    <div class="illust">
                                        <!-- 지상지원시설 일러스트 -->
                                        <svg class="illust02 _illust" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1040.7 436.8">
                                            <defs>
                                                <path id="a" d="M559.4 206.1l-54.3-51.4v-23.1l54.7 44z"/>
                                                <path id="reuse-0" fill="#433e64" d="M882.7 187.3l-3-1.5.1-3.4 2.9 1.3z"/>
                                            </defs>
                                            <path fill="#669c4a" d="M252.4 147s-68.8-21.8-101.2 0S10.6 184.2 6.4 233.9s35.1 141.6 139.2 167.9c104 26.4 396.6 29.8 415.8 29.6 19.1-.3 110.7-3.7 135.3-10.8s106.3-71.2 115.7-84.8c18.7-26.9 20.2-58.7 107.7-80C966.9 244.4 584.2 93 584.2 93l-331.8 54z"/>
                                            <path fill="#b6a67c" d="M68.6 166.4s-95.5 22.9-50.1 106.9c37.2 68.8 418.8 92.1 468.8 92.5s223.2 21 298.5-10.3c44.5-18.5 26.2-37.1 75.1-66.4 9.7-5.8-556.7-161-561.1-163.5L68.6 166.4z"/>
                                            <path fill="#e1d39c" d="M536.9 28.9C451.7 22.5 359 52.8 282 76.9c-69.7 21.8-38.2 32.2-74.5 30.7S147.4 98 82.1 143s-80.4 66.6-70.3 91.2 88.1 53.2 157.7 66.2c69.7 13.1 394.4 47.7 513.4 31.7s138.8-19.8 178-43 219.5-64.3 167.3-86.1C936.3 164.7 842.6 131.1 749 97c-47.5-17.3-95-34.7-142.1-53-22.3-8.6-45.9-13.3-70-15.1z"/>
                                            <path fill="#a5ce6b" d="M555.7 132.4s-11.6-13 19.1-20.5c30.6-7.6 69.4 10.8 69.4 10.8l-76.8 25.4-11.7-15.7z"/>
                                            <path fill="#fff" d="M669 99.5L620.1 75V55.4L669 73.8z"/>
                                            <path fill="#e2e2e2" d="M713.1 68.6v22.7L669 99.5V73.8z"/>
                                            <path fill="#64b27c" d="M713.1 68.4l-58-15.3-35 2.3L669 73.8z"/>
                                            <path fill="#fff" d="M654.5 58.7l29.3 7.7-14.2 1.7-23.6-8.9 8.5-.5m.6-5.6l-35 2.3L669 73.8l44.2-5.4-58.1-15.3z"/>
                                            <path fill="#64b27c" d="M828.7 94.3l-96.4-24.6-120.9 14.6 68.8 35.3z"/>
                                            <path fill="#fff" d="M680.2 171.4l-68.8-50.7V84.3l68.8 35.3z"/>
                                            <path fill="#889ba7" d="M672.7 157.7l-61.2-42-.1-11.2 62 33.4z"/>
                                            <path fill="#e2e2e2" d="M828.7 94.5v45.6l-148.5 31.3v-51.8z"/>
                                            <path fill="#fff" d="M731.9 75.3L802 93.2l-120.9 20.6-51-26.2 101.8-12.3m.4-5.6L611.4 84.3l68.8 35.3 148.5-25.3-96.4-24.6zM738.6 206l-49.2-31.5v-29.4l49.2 25.4z"/>
                                            <path fill="#433e64" d="M732.5 179.9L689.4 156v-4.7l43.1 23.8z"/>
                                            <path fill="#719ecd" d="M738.6 206l-49.2-31.5v-7.9l49.2 26.9z"/>
                                            <path fill="#e2e2e2" d="M876.2 141v30.6l-138 34.4v-35.5z"/>
                                            <path fill="#64b27c" d="M876.2 140.9l-71.5-21.3L689 145.1l49.2 25.4z"/>
                                            <path fill="#fff" d="M804.5 125.3l49.3 14.7L739 164.6l-33.8-17.4 99.3-21.9m.2-5.7L689 145.1l49.2 25.3 138-29.6-71.5-21.2z"/>
                                            <g>
                                                <path fill="#fff" d="M919.9 255.8L822 203.6l1.5-59.4 96.4 41.4z"/>
                                                <path fill="#889ba7" d="M919.9 216.9l-97-48 .3-11.5 96.7 43.3zM919.9 243.2l-97.7-50.4.3-11.5 97.4 48.2z"/>
                                                <path fill="#e2e2e2" d="M987.1 166.6l-1.5 54.9-65.7 34.3v-70.2z"/>
                                                <path fill="#889ba7" d="M986.7 178.8l-.3 12.1-66.5 26v-16.3zM986.2 201.8l-.4 10.5-65.9 30.8v-13.5z"/>
                                                <path fill="#64b27c" d="M987.1 166.4l-110.2-35.3-53.4 13.1 96.4 41.4z"/>
                                                <path fill="#fff" d="M876.7 136.9l91.3 29.2-47.7 13.6-79.3-34.1 35.7-8.7m.2-5.8l-53.4 13 96.4 41.4 67.2-19.2-110.2-35.2z"/>
                                                <use xlink:href="#reuse-0"/>
                                                <use xlink:href="#reuse-0"/>
                                                <path fill="#fff" d="M879.8 182.4l.5.2v2.8l2.4 1.1v.8l-3-1.5z"/>
                                                <path fill="#433e64" d="M893.3 192.1l-3.1-1.5.1-3.4 3 1.3z"/>
                                                <path fill="#fff" d="M890.3 187.2l.6.2v2.8l2.4 1.1v.8l-3.1-1.5z"/>
                                                <g>
                                                <path fill="#433e64" d="M904.5 197.1l-3-1.6.1-3.4 2.9 1.4z"/>
                                                <path fill="#fff" d="M901.6 192.1l.6.3v2.7l2.3 1.2v.8l-3-1.6z"/>
                                                </g>
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M794.7 257.3l-59.5-41.4v-36.5l59.5 32.3z"/>
                                                <path fill="#e2e2e2" d="M854.2 191.1v39.6l-59.5 26.6v-45.6z"/>
                                                <path fill="#64b27c" d="M854.2 191l-65.7-26.1-53.3 14.5 59.5 32.3z"/>
                                                <path fill="#fff" d="M788.2 170.7l50.1 19.9-43.1 15-45.2-24.4 38.2-10.5m.3-5.8l-53.4 14.6 59.6 32.2 59.5-20.7-65.7-26.1z"/>
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M736.7 210.3L714 195v-21.1l22.7 13.8z"/>
                                                <path fill="#889ba7" d="M736.7 204.2L714 188.8v-10.3l22.7 13.8z"/>
                                                <path fill="#e2e2e2" d="M768.6 177.4v20.1l-31.9 12.8v-22.6z"/>
                                                <path fill="#64b27c" d="M768.6 177.2L744.3 167l-30.3 6.9 22.7 13.8z"/>
                                                <path fill="#fff" d="M744 170.9l14.1 6-20.9 6.9-13.5-8.2 20.3-4.7m.3-3.9l-30.3 6.9 22.7 13.8 31.9-10.5-24.3-10.2z"/>
                                            </g>
                                            <g>
                                                <path fill="#badef2" d="M698.5 191.4l-13.6-9.3v-39.8l13.6 7.8z"/>
                                                <path fill="#fff" d="M698.5 191.4l-13.6-9.3V173l13.6 7.8zM708.4 147.1l-14.4-7-9.1 2.2 13.6 7.8z"/>
                                                <path fill="#9acdd0" d="M708.4 147.1v38.7l-9.9 5.6v-41.3z"/>
                                                <path fill="#e2e2e2" d="M708.4 177.7v8.1l-9.9 5.6v-10.6z"/>
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M848.2 286.8l-47.3-29.2v-27.2l47.3 23z"/>
                                                <path fill="#889ba7" d="M848.2 281l-40.4-23.7v-10.1l40.4 20.6z"/>
                                                <path fill="#e2e2e2" d="M901.5 229.8V257l-53.3 29.8v-33.4z"/>
                                                <path fill="#64b27c" d="M901.5 229.6l-47.3-18.4-53.3 19.2 47.3 23z"/>
                                                <path fill="#fff" d="M854.1 217.1l33 12.8-38.9 17.3-33.1-16.1 39-14m.1-5.9l-53.4 19.2 47.3 23 53.4-23.8-47.3-18.4z"/>
                                            </g>
                                            <g>
                                                <path fill="#badef2" d="M763.2 248.4l-12-9.2v-54.9l12 7.7z"/>
                                                <path fill="#9acdd0" d="M773.6 186.8v54.9l-10.4 6.7V192z"/>
                                                <path fill="#fff" d="M752.2 206.1l10.4 6.7 10.3-7.9-2.6-1.6-7 4.1-5.9-3.4zM752.2 218.7l10.4 6.7 10.3-7.9-2.6-1.6-7 4.1-5.9-3.4zM752.2 231.3l10.4 6.7 10.3-7.9-2.6-1.6-7 4.1-5.9-3.4z" opacity=".4"/>
                                                <g>
                                                <path fill="#9acdd0" d="M785.9 183.1v11l-22.7 11.3V192z"/>
                                                <path fill="#fff" d="M785.9 183.1l-12-5.2-22.7 6.4 12 7.7z"/>
                                                </g>
                                            </g>
                                            <path fill="#fff" d="M520 129.3v9.5l10.8 9.5c.1 0-.3-11.8-10.8-19z"/>
                                            <g>
                                                <path fill="#b4b4b3" d="M506.9 130.8l-28.4-26.5v18.8h-2.8v-22c0-.6.3-1.1.8-1.3.5-.2 1.1-.1 1.5.3l30.8 28.7-1.9 2z"/>
                                                <path fill="#b4b4b3" d="M514 128.3l-29.6-25.1v19h-2.8v-22c0-.5.3-1 .8-1.3.5-.2 1.1-.1 1.5.2l31.9 27.1-1.8 2.1z"/>
                                                <path fill="#b4b4b3" d="M521.9 125.9l-31.5-23.6v19.3h-2.8v-22c0-.5.3-1 .8-1.2.5-.2 1-.2 1.5.1l33.7 25.2-1.7 2.2z"/>
                                                <path fill="#a3794c" d="M559.4 206.1l-54.3-51.4v-23.1l54.7 44z"/>
                                                <defs>
                                                <use xlink:href="#a"/>
                                                </defs>
                                                <path fill="#e2e2e2" d="M615.9 160.7l-.8 29.2-55.7 16.2.4-30.5z"/>
                                                <path fill="#dedede" d="M615.9 160.7l-58-40.4-52.8 11.3 54.7 44z"/>
                                                <path fill="#fff" d="M556.8 125.6l47.2 33-43 11.3-44.3-35.6 40.1-8.7m1.1-5.6l-52.8 11.6 54.7 44 56.1-14.9-58-40.7z"/>
                                                <defs>
                                                <use id="b" xlink:href="#a"/>
                                                </defs>
                                                <clipPath id="c">
                                                <use overflow="visible" xlink:href="#b"/>
                                                </clipPath>
                                                <g fill="#bb9462" clip-path="url(#c)">
                                                <path d="M556.2 171.1l-.7 33.3 3.9 1.7.4-33.9zM549.8 165.9l-.7 33.3 3.9 1.7.4-33.9zM543.3 160.7l-.7 33.3 3.9 1.7.5-33.9zM536.9 155.5l-.7 33.3 3.9 1.7.4-33.9zM530.5 150.3l-.7 33.3 3.9 1.7.4-33.9zM524.1 145.1l-.7 33.3 3.9 1.7.4-33.9zM517.6 139.9l-.7 33.3 3.9 1.7.4-33.9zM511.2 134.7l-.7 33.2 3.9 1.8.4-33.9zM504.8 129.5l-.7 33.2 3.9 1.8.4-33.9z"/>
                                                </g>
                                                <path fill="#433e64" d="M543.1 183.6l-21.5-20.3v-9.2l21.7 18.4z"/>
                                                <path fill="#e2e2e2" d="M523 155.2v7.7l20.1 18.8v1.9l-21.5-20.3v-9.2z"/>
                                                <path fill="#433e64" d="M511.8 161.1l-4.8-4.6v-12.3l5.1 4.2z"/>
                                                <g>
                                                <path fill="#fff" d="M573 216.6l-19-16.3v-18.4l19 15.8z"/>
                                                <path fill="#e2e2e2" d="M610.3 187.3l-.6 17.6-36.7 11.7v-18.9z"/>
                                                <path fill="#dedede" d="M610.3 187.1l-19.1-13.3-37.2 8.1 19 15.8z"/>
                                                <path fill="#fff" d="M590.3 178.2l10.6 7.4-26.9 7.7-10.9-9.1 27.2-6m.9-4.4l-37.2 8.1 19 15.8 37.3-10.6-19.1-13.3z"/>
                                                </g>
                                                <path fill="#f5f6f6" d="M545.6 138.2s-5.6-16.4-18.7-24.5l-17.7 3.9c14.9 9.9 15.3 26.7 15.3 26.7l21.1-6.1z"/>
                                            </g>
                                            <g>
                                                <path fill="#7e5532" d="M445.8 305c.9 0 .9-1.4 0-1.4s-.9 1.4 0 1.4z"/>
                                            </g>
                                            <g>
                                                <ellipse cx="322.4" cy="60" fill="#b0aeaf" opacity=".33" rx="6.7" ry="1.9"/>
                                                <path fill="#fcfbf6" d="M294 122.2l1.1 28.8 68 2.7-.5-28.7z"/>
                                                <path fill="#fcfbf6" d="M297 101.1l1.1 42.6 67.1 2.4.2-42.5z"/>
                                                <path fill="#dbdad7" d="M297 101.1v3.5l68.4 2.1v-3.1z"/>
                                                <path fill="#719ecd" d="M297.2 106.3l.1 9.4 8.9.5-.1-9.5z"/>
                                                <path fill="#608bb7" d="M297.2 106.3l.1.9 8.8.6v-1.1z"/>
                                                <path fill="#608bb7" d="M299.1 106.7h1.1v7.7h-1.1zM302.9 107.3h1.1v7.7h-1.1z"/>
                                                <path fill="#719ecd" d="M308.7 106.7l.2 9.4 8.8.5V107z"/>
                                                <path fill="#608bb7" d="M308.7 106.7l.1.9 8.9.5V107z"/>
                                                <path fill="#608bb7" d="M310.6 107h1.1v7.7h-1.1zM314.5 107.7h1.1v7.7h-1.1z"/>
                                                <path fill="#719ecd" d="M320.3 107l.1 9.5 8.9.5v-9.6z"/>
                                                <path fill="#608bb7" d="M320.3 107l.1 1 8.9.5v-1.1z"/>
                                                <path fill="#608bb7" d="M322.2 107.4h1.1v7.7h-1.1zM326 108h1.1v7.7H326z"/>
                                                <path fill="#719ecd" d="M331.9 107.4v9.4l8.9.6.1-9.5z"/>
                                                <path fill="#608bb7" d="M331.9 107.4l.1.9 8.9.6v-1z"/>
                                                <path fill="#608bb7" d="M333.678 115.428l.097-7.7 1.1.014-.097 7.7zM337.537 116.14l.097-7.7 1.1.015-.097 7.699z"/>
                                                <path fill="#719ecd" d="M343.4 107.8l.2 9.4 8.8.6v-9.6z"/>
                                                <path fill="#608bb7" d="M343.4 107.8l.1.9 8.9.6v-1.1z"/>
                                                <path fill="#608bb7" d="M345.3 108.2h1.1v7.7h-1.1zM349.2 108.8h1.1v7.7h-1.1z"/>
                                                <path fill="#719ecd" d="M355 108.2l.1 9.4 8.9.5v-9.5z"/>
                                                <path fill="#608bb7" d="M355 108.2l.1.9 8.9.5v-1z"/>
                                                <path fill="#608bb7" d="M356.9 108.5h1.1v7.7h-1.1zM360.7 109.2h1.1v7.7h-1.1z"/>
                                                <path fill="#e2e2e2" d="M380.3 46.5l-2 37.2-13.1 62.4.2-42.5z"/>
                                                <path fill="#608bb7" d="M298.8 86.6v11.1l4.3-11zM307.3 64.8l-.5 30.6 5.3-30.5z"/>
                                                <path fill="#64b27c" d="M320.6 44.7l-2.5 6.1h-5.2l-5.5 14 4.8.1-3.3 7.7h-4.6l-5.5 14 4.3.1-6.1 14.4 68.4 2.5 14.9-57.1z"/>
                                                <path fill="#fff" d="M321.8 46.6l56.1 1.7-13.9 53.4-64.2-2.4 5-12 1-2.5-2.7-.1h-1.7l4.1-10.4h4.6l.5-1.1 3.2-7.7 1.1-2.5-2.7-.1-2.2-.1 4.1-10.4h5.1l.5-1.1 2.1-4.7m-1.2-1.9l-2.5 6.1h-5.2l-5.5 14 4.8.1-3.2 7.7h-4.6l-5.5 14 4.3.1-6 14.4 68.4 2.5 14.9-57.1-59.9-1.8z"/>
                                                <path fill="#64b27c" d="M365.2 116.7l-67.9-2.9-3.3 8.4 32.8 1.4-1.2 2.2 24.1.8.8-2.1 12.1.5z"/>
                                                <path fill="#fff" d="M298.6 115.7l64.2 2.8-1.4 4.6-10.7-.4-1.3-.1-.5 1.2-.3.8-19.9-.6 1.1-2.2-2.8-.1-30.2-1.2 1.8-4.8m-1.3-1.9l-3.4 8.4 32.8 1.3-1.1 2.2 24.1.8.8-2 12.1.5 2.6-8.3-67.9-2.9z"/>
                                                <path fill="#e2e2e2" d="M363.1 153.7l2.1-7.6v-29.4l-2.6 8.3z"/>
                                                <g>
                                                <path fill="#608bb7" d="M297.1 128.8v4.9l3.4.2V129z"/>
                                                <path fill="#e1eff8" d="M300.9 134.4l-4.2-.3v-5.8l4.2.3v5.8zm-3.3-1.1l2.4.2v-4l-2.5-.2.1 4z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M302.4 129.2v4.9l3.3.2v-4.9z"/>
                                                <path fill="#e1eff8" d="M306.2 134.8l-4.2-.3v-5.8l4.2.3v5.8zm-3.3-1.1l2.4.1v-4l-2.5-.2.1 4.1z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M307.7 129.6v4.9l3.3.2v-4.9z"/>
                                                <path fill="#e1eff8" d="M311.4 135.2l-4.2-.3v-5.8l4.2.3v5.8zm-3.3-1.1l2.4.2v-4l-2.5-.2.1 4z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M313.1 129.7v4.9l3.3.2v-4.9z"/>
                                                <path fill="#e1eff8" d="M316.9 135.3l-4.2-.3v-5.8l4.2.3v5.8zm-3.4-1.1l2.4.1v-4l-2.5-.2.1 4.1z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M318.4 129.9v5l3.3.2v-4.9z"/>
                                                <path fill="#e1eff8" d="M322.1 135.5l-4.2-.3v-5.8l4.2.3v5.8zm-3.3-1l2.4.2v-4l-2.5-.2.1 4z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M297.1 137.4v4.9l3.4.2v-4.9z"/>
                                                <path fill="#e1eff8" d="M300.9 143l-4.2-.3v-5.8l4.2.3v5.8zm-3.3-1.1l2.4.2v-4l-2.5-.2.1 4z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M302.4 137.7v5l3.3.2V138z"/>
                                                <path fill="#e1eff8" d="M306.2 143.3l-4.2-.3v-5.8l4.2.3v5.8zm-3.3-1l2.4.1v-4l-2.5-.2.1 4.1z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M307.7 138.1v4.9l3.3.2v-4.9z"/>
                                                <path fill="#e1eff8" d="M311.4 143.7l-4.2-.3v-5.8l4.2.3v5.8zm-3.3-1.1l2.4.2v-4l-2.5-.2.1 4z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M313.1 138.2v5l3.3.2v-4.9z"/>
                                                <path fill="#e1eff8" d="M316.9 143.8l-4.2-.3v-5.8l4.2.3v5.8zm-3.4-1l2.4.1v-4l-2.5-.2.1 4.1z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M318.4 138.5v4.9l3.3.2v-4.9z"/>
                                                <path fill="#e1eff8" d="M322.1 144.1l-4.2-.3V138l4.2.3v5.8zm-3.3-1.1l2.4.2v-4l-2.5-.2.1 4z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M327.9 144.8v4.9l3.4.2V145z"/>
                                                <path fill="#e1eff8" d="M331.7 150.4l-4.2-.3v-5.8l4.2.3v5.8zm-3.3-1.1l2.4.2v-4l-2.5-.2.1 4z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M335.8 145.3l.1 4.9 3.3.2v-4.9z"/>
                                                <path fill="#e1eff8" d="M339.6 150.9l-4.2-.3v-5.8l4.2.3v5.8zm-3.3-1.1l2.4.2v-4l-2.5-.2.1 4z"/>
                                                </g>
                                                <g>
                                                <path fill="#608bb7" d="M344.9 145.8v4.9l3.3.2V146z"/>
                                                <path fill="#e1eff8" d="M348.7 151.4l-4.2-.3v-5.8l4.2.3v5.8zm-3.4-1.1l2.4.2v-4l-2.5-.2.1 4z"/>
                                                </g>
                                                <path fill="#556796" d="M325.6 126l.4 8.2 23.4.9-.2-8.1z"/>
                                                <g>
                                                <ellipse cx="328.3" cy="70" fill="#75706e" rx="7.3" ry="2.2"/>
                                                <path fill="#75706e" d="M328.1 61c-.5-.4-1.8-.7-3.4-.7-1.6 0-2.9.3-3.4.7h-.2c-.3.3 0 9.1 0 9.1 0 .6 1.6 1.1 3.6 1.1s3.6-.5 3.6-1.1V61h-.2z"/>
                                                <path fill="#9e9c9c" d="M328.3 70.1v-8.2h-.1c-1.6 0-2.9.3-3.4.7h-.2c-.2.2-.1 6.6 0 8.5h.1c2 0 3.6-.4 3.6-1z"/>
                                                <ellipse cx="324.6" cy="62.8" fill="#9e9c9c" rx="7.2" ry="2.2"/>
                                                <ellipse cx="324.6" cy="62.2" fill="#fff" rx="7.2" ry="2.2"/>
                                                </g>
                                                <g>
                                                <path fill="#fcfbf6" d="M312.4 148.8l-6.6 14.5v19.6l7.5.3v17.6l35.9 1.3 7.9-32.4v-19.6z"/>
                                                <path fill="#64b27c" d="M312.4 148.8l-6.6 14.5 11.8.4-4.3 17.5 35.9 1.3 7.9-32.4z"/>
                                                <path fill="#fff" d="M313.6 150.7l41.2 1.3-7 28.7-32.1-1.2 3.7-15.3.5-2.2-2.3-.1-9-.3 5-10.9m-1.2-1.9l-6.6 14.6 11.8.4-4.3 17.5 35.9 1.3 7.9-32.4-44.7-1.4z"/>
                                                </g>
                                            </g>
                                            <g>
                                                <path fill="#fcfbf6" d="M165.9 173.8v19l105.9 4.9 8.1-22.4v-18.1l-102.3-3.9z"/>
                                                <path fill="#64b27c" d="M271.5 178.8l-105.6-5 11.7-20.5 102.3 3.9z"/>
                                                <path fill="#fff" d="M178.6 155.2l98.6 3.8-6.9 18.2-101.3-5.1 9.6-16.9m-1-1.9l-11.7 20.5 105.7 5.3 8.3-21.9-102.3-3.9z"/>
                                                <path fill="#556796" d="M171.9 179.8l10.6.6.2 7.7-10.8-.8zM184.2 180.4l10.6.6.3 7.7-10.9-.7zM204.9 181.5l10.6.6.2 7.7-10.8-.8zM217.3 182.1l10.6.6.2 7.7-10.8-.7zM239.2 182.7l10.6.7.3 7.7-10.9-.8zM251.6 183.4l10.6.6.2 7.7-10.8-.8z"/>
                                            </g>
                                            <g>
                                                <path fill="#cba988" d="M354.8 292.3l-225.1-11.5 29.9-59.6 219 9.5z"/>
                                                <path fill="#94c060" d="M348.5 287.5l-210.2-10.7 25.9-51.7 204.5 8.8z"/>
                                                <defs>
                                                <path id="d" d="M348.5 287.5l-210.2-10.7 25.9-51.7 204.5 8.8z"/>
                                                </defs>
                                                <clipPath id="e">
                                                <use overflow="visible" xlink:href="#d"/>
                                                </clipPath>
                                                <g fill="#73aa53" clip-path="url(#e)">
                                                <path d="M174.1 222.7l-33.2 66.8 13.3.4 33.2-68.9zM199.5 222.7l-33.2 66.8 13.3.4 33.2-68.9zM224.9 222.7l-33.2 66.8 13.4.4 33.1-68.9zM250.3 222.7l-33.2 66.8 13.4.4 33.1-68.9zM275.8 222.7l-33.3 66.8 13.4.4L289 221zM301.2 222.7l-33.3 66.8 13.4.4 33.1-68.9zM326.6 222.7l-33.3 66.8 13.4.4 33.2-68.9zM353.7 222.4l-29.6 68.5 13.3-.3 29.4-70.6z"/>
                                                </g>
                                                <path fill="#edf4e3" d="M251.3 263.9c-11.8 0-21.1-3.8-21.1-8.6s9.3-8.6 21.1-8.6 21.1 3.8 21.1 8.6-9.3 8.6-21.1 8.6zm0-16.2c-10.9 0-20.1 3.5-20.1 7.6s9.2 7.6 20.1 7.6c10.9 0 20.1-3.5 20.1-7.6s-9.2-7.6-20.1-7.6zM328 266.5c-4.2-1.6-6.6-3.8-6.6-6.3 0-3.5 4.9-6.5 12.7-7.9l.2 1c-7.1 1.2-11.8 4-11.8 6.9 0 2 2.2 3.9 5.9 5.3l-.4 1zM177.6 257.1l-.2-1c6.5-1.3 10.7-4 10.7-6.7 0-1.7-1.6-3.4-4.6-4.8l.4-.9c3.4 1.6 5.2 3.5 5.2 5.7 0 3.3-4.4 6.2-11.5 7.7z"/>
                                                <path fill="#edf4e3" d="M238.315 281.747l25.259-52.212.9.436-25.259 52.211zM173.3 265.5l-29-1.1.1-1 28.3 1.1 14.5-27.9-28.1-1v-1l29.7 1.1z"/>
                                                <path fill="#edf4e3" d="M160.8 255.9l-11.9-.5v-1l11.3.5 5.5-10.7-10.9-.4.1-1 12.4.5zM352.3 277.3l-29.1-1.2 13.7-31 29.2 1v1l-28.5-1-12.9 29.1 27.7 1.1z"/>
                                                <path fill="#edf4e3" d="M357 267.7l-12.3-.5 5.2-13.9 12 .4v1l-11.3-.4-4.4 11.9 10.9.5zM173.5 265.2l-.9-.4 14.6-28.2-28.1-1v-1l29.7 1.1z"/>
                                                <path fill="#edf4e3" d="M173.5 265.2l-.9-.4 14.6-28.2-28.1-1v-1l29.7 1.1z"/>
                                                <g fill="#c6e2e6">
                                                <path d="M151.7 246.5l2.7.1 2.9-5.5-2.7-.1z" opacity=".7"/>
                                                <path d="M154.6 241l-2.2 6.4 5.3.4-.4-6.7z" opacity=".7"/>
                                                <path d="M151.7 246.5l-2.2 6.4 5.3.4-.4-6.7z" opacity=".7"/>
                                                <path d="M152.4 247.4l-2.9 5.5 2.2-6.4 2.9-5.5z" opacity=".7"/>
                                                </g>
                                                <g fill="#c6e2e6">
                                                <path d="M355 257.3l-3 .1 2.3-6 3-.1z" opacity=".7"/>
                                                <path d="M355 257.3l2.4 7.8-5.8-.3.4-7.4z" opacity=".7"/>
                                                <path d="M357.3 251.3l2.4 7.7-5.8-.3.4-7.3z" opacity=".7"/>
                                                <path d="M357.3 251.3l-2.3 6 2.4 7.8 2.3-6.1z" opacity=".7"/>
                                                </g>
                                                <path fill="#fff" d="M171.982 223.404l.088-2.099 191.828 8.04-.088 2.099zM174.024 219.682l.088-2.098 191.827 8.041-.088 2.098zM175.966 215.957l.088-2.098 191.827 8.04-.088 2.099z"/>
                                                <path fill="#bb9462" d="M286.2 228.5l-45.6-1.9 6.7-11.8 43.3 1.7z"/>
                                            </g>
                                            <g>
                                                <ellipse cx="426.8" cy="270.7" fill="#9e9c9c" rx="23.4" ry="10.6"/>
                                                <path fill="#fff" d="M407.3 272.6h-1.2c-.4 0-.7-.3-.7-.7v-23.5c0-.4.3-.7.7-.7h1.2c.4 0 .7.3.7.7v23.5c0 .3-.3.7-.7.7zM428.7 278.4h-1.2c-.4 0-.7-.3-.7-.7v-23.5c0-.4.3-.7.7-.7h1.2c.4 0 .7.3.7.7v23.5c0 .4-.3.7-.7.7zM447.6 269.2h-1.2c-.4 0-.7-.3-.7-.7V245c0-.4.3-.7.7-.7h1.2c.4 0 .7.3.7.7v23.5c0 .4-.4.7-.7.7z"/>
                                                <ellipse cx="426.8" cy="247.7" fill="#b0aeaf" rx="23.4" ry="10.6"/>
                                                <ellipse cx="426.8" cy="246.2" fill="#fff" rx="23.4" ry="10.6"/>
                                                <path fill="#5faaa3" d="M448.1 244.3c-1.2-6.6-7.8-12.8-13.5-15.8-4.3-2.3-9.4-2.9-14-1.1-6.5 2.6-15.2 10.3-15.2 18 0 5.3 9.6 9.7 21.4 9.7 11.8 0 21.4-4.3 21.4-9.7.1-.3 0-.7-.1-1.1z"/>
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M577.9 310.3l-66.3-51.1-11.6 1.6 65 52.4zM595.6 303.3l-66.4-51-11.5 1.5 64.9 52.5zM562.1 316.1L495.7 265l-11.5 1.6 65 52.4z"/>
                                                <path fill="#cba988" d="M569.4 303l-24.3-16.9-11.5 1.6 22.8 18.3zM525.3 275.9l-24.3-17-11.5 1.6 22.8 18.4zM539.7 309.8l-24.2-16.9-11.6 1.5 22.9 18.4z"/>
                                            </g>
                                            <g>
                                                <path fill="#cba988" d="M458.2 191.5l-21.3-14.8-10.1 1.4 20 16z"/>
                                                <path fill="#fff" d="M484.8 222.3l-58.2-44.7-10.1 1.3 57 46zM500.3 216.2l-58.2-44.7-10.1 1.3 56.9 46zM470.9 227.4l-58.1-44.8-10.2 1.4 57 46z"/>
                                                <path fill="#cba988" d="M424.9 200.3l-21.2-14.9-10.1 1.4 20 16.1zM469.8 217.7l-21.2-14.8-10.1 1.4 20 16z"/>
                                            </g>
                                            <g>
                                                <path fill="#64b27c" d="M491.5 61l129.8-19"/>
                                                <path fill="#fff" d="M491.5 90.3l-39.3-29.7-.2-25L491.5 61z"/>
                                                <path fill="#e2e2e2" d="M496 89.7l-4.5.6V61l4.5-.7zM517.6 85.6l-4.5.7V57.8l4.5-.7zM539.2 81.5l-4.5.7V54.7l4.5-.7zM560.9 77.4l-4.5.7V51.6l4.5-.8zM582.5 73.3l-4.5.6V48.3l4.5-.6zM604.1 69.2l-4.5.6V45.2l4.5-.7zM617.2 66.3l4.1-.6V42l-4.1.6z"/>
                                                <path fill="#fff" d="M513.1 86.3l-3.4-2.6V58.3l3.4-.5zM534.7 82.3l-3.4-2.6V54.4l3.4-.5zM556.4 78.1l-3.5-2.6V50.2l3.5-.5zM578 73.9l-3.4-2.6V46l3.4-.5zM599.6 69.8l-3.4-2.6V41.9l3.4-.5zM617.2 66.3l-3.4-2.6V43.2l3.4-.5z"/>
                                                <path fill="#64b27c" d="M550.3 24.5l-11.1 1.3 9.8 2.9-44.2 6.4-9.9-4.2-42.9 4.7L491.5 61l129.8-19z"/>
                                                <path fill="#e2e2e2" d="M491.5 66.6l129.8-18.9V42L491.5 61zM539.2 25.8V31l9.8-2.3z"/>
                                                <path fill="#fff" d="M560.3 31.5l37.9 9.4-105.7 15.4L465 38.7l29.2-3.2 8.9 3.8 1.1.5 1.2-.2 44.2-6.4 10.7-1.7m-10-7l-11 1.3 9.7 2.9-44.2 6.4-9.9-4.2-42.9 4.7L491.5 61l129.8-19-71-17.5z"/>
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M415.1 108.9l-21.2-27.7v-19l21.2 20.6z"/>
                                                <path fill="#433e64" d="M409.1 88.9l-2-2.8v-4.3l2.1 2.5z"/>
                                                <path fill="#e2e2e2" d="M407.1 81.8l.6.6v3.5l1.4 2v1l-2-2.8z"/>
                                                <path fill="#433e64" d="M403.8 83.1l-2-2.8v-4.4l2 2.6z"/>
                                                <path fill="#e2e2e2" d="M401.8 75.9l.5.7v3.5l1.5 2v1l-2-2.8zM459.2 75.2v22.7l-44.1 11V82.8z"/>
                                                <path fill="#433e64" d="M440.4 85.9l.1 4.4-4.3 1 .1-4.6z"/>
                                                <path fill="#fff" d="M440.4 85.9l-.7.1v3.7l-3.5.6v1l4.3-1-.1-4.4z"/>
                                                <path fill="#64b27c" d="M459.2 75.2l-27.9-18.6-37.4 5.6 21.2 20.6z"/>
                                                <path fill="#fff" d="M430 62.4l14.6 9.7-27.6 4.8L405.8 66l24.2-3.6m1.3-5.8L394 62.1l21.2 20.7 44.1-7.6-28-18.6z"/>
                                            </g>
                                            <g fill="#b5a67a">
                                                <path d="M158.3 134.8s-31.3 20.6-30.7 23c.6 2.4 55.2-4.7 55.2-4.7s8.9-2 2.1-6.5c-6.7-4.5-26.6-11.8-26.6-11.8zM137.7 125.5s-31.6 11.7-33.7 13c-2.1 1.3 22.8 12.8 22.8 12.8s26.1-13.8 26.7-16.2-15.8-9.6-15.8-9.6zM98.2 141.2s-33.8 17.1-36 22.5c-2.2 5.4 28 1.1 28 1.1s21-1.3 25.2-3.6c4.2-2.3 8.4-3.6 7.1-6.1-1.2-2.5-20.4-14-24.3-13.9zM51.2 173.6s2-2.1 16.8-3.8 27.3-3.5 29.8-1.4.6 10.1-3.3 14c-3.9 3.9-5.9 9.7-7.5 10-1.6.4-14.1-4.1-22.3-8.6-8.3-4.5-15.5-8-13.5-10.2zM47.2 181.6s-6.8 5.8-10.1 14.6-3.2 13.6-2.1 15.4 33.9 10.6 33.9 10.6 12.6-17.7 13.4-21.2c.8-3.5 1.5-6.3-4.5-8.8-6.1-2.6-28.9-13.9-30.6-10.6zM36.3 217.4s-4.3-3.2-6 4.9c-1.6 8.1-.9 19 8.2 25.2 9.1 6.2 27 1.6 36.1-.3 9.2-1.9 31.1-5.6 31.8-7.2.7-1.7 4.3-4.2-5.9-6.9-10.1-2.9-64.2-15.7-64.2-15.7zM119.6 166.2s-13.5 3.8-13.3 7.9 50.5 15.3 50.5 15.3 17.6-26.1 16.8-27.8c-.8-1.6-50.8 2.4-54 4.6zM101.1 179.9s-25.4 38.6-25.3 40.9 50.1 15.5 50.1 15.5 26-40 25.8-41.9c-.2-1.8-45.8-17-50.6-14.5z"/>
                                            </g>
                                            <g>
                                                <path fill="#fff" d="M676.2 318.5l-66.5-58.2v-38.5l66.5 55.2z"/>
                                                <path fill="#719ecd" d="M628.3 270.8l-12.5-11.3v-8.2l12.5 10.6zM646.7 286.8l-12.5-11.3v-8.2l12.5 10.6z"/>
                                                <path fill="#e2e2e2" d="M750.7 252.9v38l-74.5 27.6V277z"/>
                                                <path fill="#719ecd" d="M708.3 281.7V292l-11.8 4v-10.2zM734.6 271.3v10.4l-11.7 4v-10.2z"/>
                                                <path fill="#64b27c" d="M750.7 252.9l-75.3-46.5-65.7 15.4 66.5 55.2z"/>
                                                <path fill="#fff" d="M674.5 212.3l63.1 39.1-60.2 19.5-55.6-46.2 52.7-12.4m.9-5.9l-65.7 15.5 66.5 55.2 74.5-24.1-75.3-46.6z"/>
                                                <g>
                                                <path fill="#fff" d="M678.3 273.9l-25.2-20.8v-10.2l25.2 18.1z"/>
                                                <path fill="#e2e2e2" d="M744 241.4v11.4l-65.7 21.1V261z"/>
                                                <path fill="#64b27c" d="M744 241.4l-28.6-15.8-62.3 17.3 25.2 18.1z"/>
                                                <path fill="#fff" d="M714.8 230.9l16.5 9.1-52.1 15.6-14.9-10.7 50.5-14m.6-5.3l-62.3 17.3 25.2 18.1 65.6-19.7-28.5-15.7z"/>
                                                </g>
                                                <g>
                                                <path fill="#badef2" d="M626 276.1l-8.6-7.5-.1-40.7 8.7 7.3z"/>
                                                <path fill="#fff" d="M618.1 245.1l7.4 4.7 7.3-5.6-1.8-2.2-5 3.9-4.2-2.4zM618.1 254l7.4 4.8 7.3-5.7-1.8-1.1-5 2.9-4.2-2.4zM618.1 263l7.4 4.8 7.3-5.7-1.8-1.1-5 2.9-4.2-2.4z" opacity=".4"/>
                                                <g>
                                                    <path fill="#fff" d="M642.1 230.3l-8.5-5.4-16.3 3 8.7 7.3z"/>
                                                </g>
                                                <path fill="#e2e2e2" d="M642.1 230.3v7.6l-16.1 5.7v-8.4z"/>
                                                <path fill="#e2e2e2" d="M633.4 237.3v34l-7.4 4.8v-40.9z"/>
                                                </g>
                                            </g>
                                            <g>
                                                <path fill="#115f32" d="M553.6 10.7c-4.4-2.4-10.1-2.1-14.2.6-4.1 2.8-6.3 7.9-5.5 12.6-1.6-.8-3.8-.3-4.9 1.1-1 1.4-.8 3.6.6 4.8-5.5.3-10.5 4.7-11.3 9.9s2.7 10.8 7.9 12.6c-.4 3.2 3.4 6.2 6.7 5.2-.3 4.8 5.6 7.4 10.5 8.6 6.7 1.7 13.7 3.2 20.5 2.1 6.8-1.1 13.6-5.3 15.4-11.7 2.6 2.9 6.5 6.1 10.1 4.3 2.8-1.4 3.2-5.2 1.8-7.9-1.4-2.7-4.2-4.4-6.8-6 3.7.4 6.7-3.6 6.2-7.2s-3.4-6.4-6.5-8.3c-1.3-.8-2.8-1.6-3.6-2.9-.7-1.1-.8-2.4-1-3.6-.9-7.1-3.3-14.5-9.3-18.8S554 2.9 551 9.4l2.6 1.3z"/>
                                                <path fill="#0c6e40" d="M584.3 47.1c3.7.4 6.7-3.6 6.2-7.2s-3.4-6.4-6.5-8.3c-1.3-.8-2.8-1.6-3.6-2.9-.7-1.1-.8-2.4-1-3.6-.9-7.1-3.3-14.5-9.3-18.8-5.3-3.8-13.9-3.5-17.9 1.2-.3.7-.6 1.4-.8 2.2l1.3.6c-.4-.2-.9-.4-1.3-.5-.6 2.4-.8 4.8-.4 7.2-2.2-1.1-5.3-.5-6.7 1.5-1.4 2-1 5 .9 6.5-7.6.4-14.4 6.4-15.5 13.6-1.1 7.2 3.7 14.8 10.8 17.3-.5 4.4 4.7 8.5 9.1 7.2-.1 1.8.5 3.4 1.5 4.8 4.2.7 8.5 1 12.7.4 6.8-1.1 13.6-5.3 15.4-11.7 2.6 2.9 6.5 6.1 10.1 4.3 2.8-1.4 3.2-5.2 1.8-7.9-1.4-2.6-4.2-4.3-6.8-5.9z"/>
                                                <ellipse cx="555.8" cy="95.1" fill="#040000" opacity=".2" rx="26" ry="3.7"/>
                                                <path fill="#954730" d="M547.5 92.9c-.1.7-.2 1.4.5 1.9.4.3.8.4 1.2.5 2 .4 12.1 1.3 11.1-2.8-1-4.3-1.4-8.6-1.8-13-.5-6.2-.2-12.2 3-17.7 1.5-2.6 2.9-5.2 4.2-7.8.4-.9.9-1.9.8-2.8-.1-.5-1.2-2.6-2-1.7-.1.1-.1.2-.1.3-.7 2.2-1.6 4.2-3 6.1-.7 1-1.5 1.8-2.3 2.7-.3.3-2.8 2-2.8 2.3 0-2.7-.6-5.6-.9-8.3-.2-1.6-.4-3.1-.5-4.7-.1-1.3 0-3-.6-4.2-.9-1.7-1.9-1-3.5.1l-3.3 49.1z"/>
                                            </g>
                                            <g>
                                                <path fill="#0f7357" d="M430.9 51.1c5.3-2.1 11.7-.9 15.9 2.9s5.9 10.2 4.1 15.6c1.9-.7 4.4.2 5.3 2.1.9 1.9.3 4.4-1.5 5.5 6.2 1.2 11.1 7.1 11.1 13.4 0 6.3-4.8 12.3-10.9 13.6-.1 3.9-4.8 6.8-8.3 5.1-.5 5.7-7.5 7.8-13.2 8.5-7.8.9-15.9 1.6-23.4-.8s-14.4-8.3-15.5-16.1c-3.4 3-8.3 6.1-12 3.5-2.9-2-2.8-6.6-.7-9.5 2-2.9 5.4-4.5 8.6-6-4.2-.1-7-5.3-5.9-9.4s4.8-7 8.7-8.8c1.6-.8 3.4-1.4 4.5-2.8.9-1.2 1.3-2.7 1.7-4.1 2.2-8.2 6.1-16.5 13.5-20.6 7.4-4.1 18.7-1.5 21 6.6l-3 1.3z"/>
                                                <path fill="#13876f" d="M390.5 89c-4.2-.1-7-5.3-5.9-9.4 1.1-4.1 4.8-7 8.7-8.8 1.6-.8 3.4-1.4 4.5-2.8.9-1.2 1.3-2.7 1.7-4.1 2.2-8.2 6.1-16.5 13.5-20.6 6.6-3.6 16.2-2 19.9 4.2.2.9.4 1.8.5 2.7l-1.6.6c.5-.2 1-.3 1.6-.4.3 2.9.1 5.8-.8 8.6 2.7-1 6 .3 7.3 2.8 1.3 2.5.4 6-2 7.5 8.5 1.7 15.2 9.8 15.2 18.4.1 8.6-6.5 16.8-15 18.6-.2 5.3-6.6 9.3-11.4 7-.2 2.2-1.1 4-2.4 5.4-4.9.2-9.7-.1-14.4-1.5-7.5-2.3-14.4-8.3-15.5-16.1-3.4 3-8.3 6.1-12 3.5-2.9-2-2.8-6.6-.7-9.5 2.2-3 5.6-4.6 8.8-6.1z"/>
                                                <ellipse cx="423.1" cy="149.2" fill="#040000" opacity=".2" rx="23.4" ry="4.8"/>
                                                <path fill="#954730" d="M430.2 146.6c.1.8.2 1.7-.6 2.2-.4.3-.9.4-1.4.5-2.3.5-13.7 1.4-12.6-3.5 1.2-5.1 1.7-10.2 2.2-15.3.6-7.3.4-14.4-3.1-21-1.7-3.1-3.2-6.2-4.7-9.3-.5-1.1-1-2.2-.9-3.4.1-.6 1.4-3 2.3-2 .1.1.1.2.1.3.8 2.6 1.8 5 3.3 7.2.8 1.1 1.6 2.2 2.6 3.2.4.4 3.1 2.4 3.1 2.7 0-3.2.8-6.6 1.2-9.8.2-1.8.4-3.7.7-5.5.2-1.5 0-3.6.8-5 1.1-2 2.1-1.2 3.9.2l3.1 58.5z"/>
                                            </g>
                                            <g>
                                                <path fill="#040000" d="M500.8 217.6s-19.5 4.5-13 7.5 22.1 6.5 37.1 4 11-7 6.5-9c-4.6-2-22.4-4.8-30.6-2.5z" opacity=".2"/>
                                                <path fill="#954730" d="M507.3 201.1s-1 19 0 20.5 5 7 10.5 0l-2.5-18.5-8-2z"/>
                                                <path fill="#0c6e40" d="M510.8 102.9s-4.5-8.5 2.5-11 4.5 5.5 4.5 5.5 11.5 7 3.5 18c0 0 10.2 11.5 2.8 22.1 0 0 7.7 3 7.7 9s-6 9-6 9 9 2.5 8.5 10.5-5 9-5 9 11.6 3 5 11.5-11.5 8.5-11.5 8.5 1 10.5-7.6 8c-8.5-2.5-5.9-5.5-5.9-5.5s-17.1 8.5-18.6-9c0 0 0-8 10.5-11 0 0-19-11.5-3.5-27.1 0 0-8.1-19.3 10-23.1.1.1-11.5-16.9 3.1-24.4z"/>
                                                <path fill="#0c5a30" d="M507.8 127.4c-18.1 3.7-10 23.1-10 23.1-15.5 15.5 3.5 27.1 3.5 27.1-10.5 3-10.5 11-10.5 11 1.5 17.5 18.6 9 18.6 9s-2.6 3 5.9 5.5 7.6-8 7.6-8 5 0 11.5-8.5c0 0-25.1 9-29.1 0s0-12.5 0-12.5-11-13-4-19.5c0 0-1.5-15.5 6.5-15.5 0 0-4-9.5 3.5-12.5 0 0-4.6-5-4.6-20.5-7.9 8.1 1.1 21.3 1.1 21.3z"/>
                                            </g>
                                            <g>
                                                <path fill="#040000" d="M530.1 258.3s-19.5 4.5-13 7.5 22.1 6.5 37.1 4 11-7 6.5-9-22.4-4.8-30.6-2.5z" opacity=".2"/>
                                                <path fill="#954730" d="M536.6 241.8s-1 19 0 20.5 5 7 10.5 0l-2.5-18.5-8-2z"/>
                                                <path fill="#0c6e40" d="M540.1 143.6s-4.5-8.5 2.5-11 4.5 5.5 4.5 5.5 11.5 7 3.5 18c0 0 10.2 11.5 2.8 22.1 0 0 7.7 3 7.7 9s-6 9-6 9 9 2.5 8.5 10.5-5 9-5 9 11.6 3 5 11.5c-6.5 8.5-11.5 8.5-11.5 8.5s1 10.5-7.6 8c-8.5-2.5-5.9-5.5-5.9-5.5s-17.1 8.5-18.6-9c0 0 0-8 10.5-11 0 0-19-11.5-3.5-27.1 0 0-8.1-19.3 10-23.1.1.1-11.4-16.9 3.1-24.4z"/>
                                                <path fill="#0c5a30" d="M537.1 168.1c-18.1 3.7-10 23.1-10 23.1-15.5 15.5 3.5 27.1 3.5 27.1-10.5 3-10.5 11-10.5 11 1.5 17.5 18.6 9 18.6 9s-2.6 3 5.9 5.5 7.6-8 7.6-8 5 0 11.5-8.5c0 0-25.1 9-29.1 0s0-12.5 0-12.5-11-13-4-19.5c0 0-1.5-15.5 6.5-15.5 0 0-4-9.5 3.5-12.5 0 0-4.6-5-4.6-20.5-7.8 8.1 1.1 21.3 1.1 21.3z"/>
                                            </g>
                                            <g>
                                                <path fill="#040000" d="M573.2 296.6s-19.5 4.5-13 7.5 22.1 6.5 37.1 4 11-7 6.5-9c-4.6-2-22.4-4.9-30.6-2.5z" opacity=".2"/>
                                                <path fill="#954730" d="M579.7 280s-1 19 0 20.5 5 7 10.5 0l-2.5-18.5-8-2z"/>
                                                <path fill="#0c6e40" d="M583.2 181.8s-4.5-8.5 2.5-11 4.5 5.5 4.5 5.5 11.5 7 3.5 18c0 0 10.2 11.5 2.8 22.1 0 0 7.7 3 7.7 9s-6 9-6 9 9 2.5 8.5 10.5-5 9-5 9 11.6 3 5 11.5c-6.5 8.5-11.5 8.5-11.5 8.5s1 10.5-7.6 8c-8.5-2.5-5.9-5.5-5.9-5.5s-17.1 8.5-18.6-9c0 0 0-8 10.5-11 0 0-19-11.5-3.5-27.1 0 0-8.1-19.3 10-23.1.1.2-11.4-16.9 3.1-24.4z"/>
                                                <path fill="#0c5a30" d="M580.2 206.4c-18.1 3.7-10 23.1-10 23.1-15.5 15.5 3.5 27.1 3.5 27.1-10.5 3-10.5 11-10.5 11 1.5 17.5 18.6 9 18.6 9s-2.6 3 5.9 5.5 7.6-8 7.6-8 5 0 11.5-8.5c0 0-25.1 9-29.1 0s0-12.5 0-12.5-11-13-4-19.5c0 0-1.5-15.5 6.5-15.5 0 0-4-9.5 3.5-12.5 0 0-4.6-5-4.6-20.5-7.8 8 1.1 21.3 1.1 21.3z"/>
                                            </g>
                                            <g>
                                                <path fill="#040000" d="M212.3 130.7s-21.9 2.4-15.4 6.1c6.5 3.7 16 6.7 32.3 6.1 16.3-.6 40.5-2.7 35-8.4s-38.7-6.3-51.9-3.8z" opacity=".2"/>
                                                <path fill="#954935" d="M224.7 94.2s1 11.1 0 17.6c-1 6.6-2 18.8-4.9 20.3 0 0 4.6 5.7 15.4 4.5 0 0 4.6.9 7.8-2.4 0 0-4.6-11.4-2.6-17.3l14.7-29.6-5.2-4.2-15 24.8-.7-20.9-9.5 7.2z"/>
                                                <path fill="#13753f" d="M188 28.9s-10.5-11.8 4.3-13.1 17.6 0 17.6 0 2.4-15.7 22.4-8.7c0 0 15.2-4.8 10.5 7.8 0 0 15.7-.9 16.7 10.4 0 0 15.2 9.1 11.9 19.6s-11.4 15.7-29 10.9l-4.3 3.9 1.9 4.4s29.5-3.9 36.2 7.4c0 0 1.4 10.4-9 7 0 0 1.4 17.4-11.9 11.3 0 0-10 4.4-10.9-3.9 0 0-2.9 4.8-6.7 0 0 0 .5 19.2-13.3 10 0 0-5.2 4.8-8.1-.9 0 0-2.4 10.2-10.9 3.3 0 0-17.6 6.2-15.7-10.7 0 0-17.1-2.6 3.8-15.2 0 0-14.8-8.3 5.2-13.5 0 0-22.2-.4-15.6-17-.2.1-16.5-13.4 4.9-13z"/>
                                                <path fill="#118447" d="M183 29.1c3.4 6.9 10.7 17.1 24.1 18.5 0 0-6.2 24.4 5.2 26.6 0 0 19 7 26.2-5.2 0 0 10 7.8 20-.9 0 0 9.2 9.1 17.7 5 0-.9-.1-1.5-.1-1.5-6.7-11.3-36.2-7.4-36.2-7.4l-1.8-4.1c-5.9 1.3-14.9 1.9-15.8-7 0 0-7.6-2-5.2-8.1 0 0 10.1 7.4 14.1-5.2 0 0 5.8 10.5 15.4-5.2 0 0 5 14.7 24.2 12 .2-.5.4-1 .6-1.6 3.3-10.4-11.9-19.6-11.9-19.6-1-11.3-16.7-10.4-16.7-10.4 4.8-12.6-10.5-7.8-10.5-7.8-20-7-22.4 8.7-22.4 8.7s-2.9-1.3-17.6 0C177.5 17.2 188 29 188 29c-2-.1-3.6-.1-5 .1z"/>
                                            </g>
                                            <g>
                                                <path fill="#040000" d="M452.5 300.5s-27.1 2-21.8 7.3 21.2 11.3 43 10.6c21.8-.7 37.1-3.3 31.1-10.6s-52.3-7.3-52.3-7.3z" opacity=".2"/>
                                                <path fill="#954730" d="M460.4 278.6v29.1s3.1 1.7 6.7 1.7 6.7-1.7 6.7-1.7V276l-13.4 2.6z"/>
                                                <path fill="#0f7357" d="M447.2 203.8s2.6-12.6 18.5-11.9c15.9.7 13.9 19.9 13.9 19.9s13.2 3.3 15.2 15.9c2 12.6-3.3 12.6-3.3 12.6s14.6 21.2 0 26.5c0 0-4 11.9-11.3 4.6 0 0 0 17.9-17.9 11.9 0 0-21.2 10.6-23.8-11.9 0 0-15.2-1.3-15.9-15.2 0 0 .7-9.3 11.9-12.6 0 0-14.6-17.2-7.9-19.2 6.6-2 12.6 0 12.6 0s-9.2-17.9 8-20.6z"/>
                                                <path fill="#13876f" d="M491.5 240.2s5.3 0 3.3-12.6-15.2-15.9-15.2-15.9 2-19.2-13.9-19.9-18.5 11.9-18.5 11.9c-4.9.8-7.6 2.7-9.1 5.2 2.7 10.7 7.9 22.6 17.7 23.3 0 0-34.4 25.8-7.9 31.1 0 0 11.3 14.6 24.5 0 0 0 9.6 5 18.9 4 .2-.4.3-.7.3-.7 14.5-5.2-.1-26.4-.1-26.4z"/>
                                            </g>
                                            <g>
                                                <path fill="#115f32" d="M766.6 199.7c-4.7-2.7-11-2.4-15.4.7-4.4 3.1-6.9 8.9-5.9 14.2-1.7-.9-4.2-.4-5.3 1.3s-.8 4.1.7 5.4c-6 .3-11.4 5.3-12.3 11.2-.9 5.9 2.9 12.2 8.5 14.3-.4 3.7 3.7 7 7.2 5.9-.3 5.4 6.1 8.4 11.3 9.7 7.3 1.9 14.8 3.6 22.2 2.3s14.7-6 16.7-13.2c2.8 3.3 7.1 6.9 10.9 4.9 3-1.6 3.5-5.9 1.9-8.9s-4.5-4.9-7.4-6.8c4 .4 7.3-4.1 6.7-8.1-.5-4-3.6-7.2-7-9.4-1.4-.9-3-1.8-3.9-3.2-.7-1.2-.9-2.7-1.1-4.1-1-8-3.6-16.4-10.1-21.2-6.4-4.8-17.4-3.8-20.7 3.5l3 1.5z"/>
                                                <path fill="#0c6e40" d="M799.8 240.7c4 .4 7.3-4.1 6.7-8.1-.5-4-3.6-7.2-7-9.4-1.4-.9-3-1.8-3.9-3.2-.7-1.2-.9-2.7-1.1-4.1-1-8-3.6-16.4-10.1-21.2-5.7-4.3-15.1-4-19.3 1.3-.3.8-.6 1.6-.8 2.5l1.4.7c-.5-.2-.9-.4-1.4-.6-.7 2.7-.9 5.5-.4 8.2-2.4-1.3-5.7-.5-7.2 1.7s-1.1 5.6.9 7.4c-8.2.5-15.6 7.2-16.8 15.4-1.2 8.1 4 16.7 11.7 19.5-.5 5 5 9.6 9.9 8.1-.1 2.1.5 3.9 1.6 5.4 4.6.8 9.2 1.2 13.8.4 7.4-1.2 14.7-6 16.7-13.2 2.8 3.3 7.1 6.9 10.9 4.9 3-1.6 3.5-5.9 1.9-8.9-1.7-3-4.7-5-7.5-6.8z"/>
                                                <ellipse cx="769" cy="294.9" fill="#040000" opacity=".2" rx="28.1" ry="4.2"/>
                                                <path fill="#954730" d="M760 292.4c-.1.8-.2 1.6.5 2.1.4.3.9.4 1.3.5 2.2.5 13.1 1.5 12-3.2-1.1-4.8-1.5-9.7-1.9-14.6-.5-7-.3-13.7 3.2-19.9 1.6-2.9 3.1-5.8 4.6-8.8.5-1 1-2.1.9-3.2-.1-.6-1.3-2.9-2.2-1.9-.1.1-.1.2-.1.3-.8 2.5-1.8 4.7-3.2 6.9-.7 1.1-1.6 2.1-2.5 3-.4.4-3 2.2-3 2.5 0-3.1-.7-6.3-1-9.4-.2-1.8-.4-3.5-.6-5.3-.2-1.4 0-3.4-.7-4.7-1-1.9-2-1.2-3.7.2l-3.6 55.5z"/>
                                            </g>
                                            </svg>
                                        <!-- /.지상지원시설 일러스트 -->
                                    </div>
                                    <div class="_title">지상지원시설</div>
                                    <p class="_description">
                                        방사성폐기물을 인수해 보관하면서 처분하기 적합한지 검사하는 시설입니다.
                                    </p>
                                </li>
                                <li id="point3" class="point03 point" onclick="ga('event','동굴처분시설', {
                                            'event_category':'지도네비게이션',
                                            'event_label':'동굴처분시설'
                                        });">
                                    <div class="pin">
                                        <!-- PIN 03 -->
                                        <svg class="pin03 _pin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 60">
                                            <defs/>
                                            <path d="M16.7 50.3c-2.6 0-4.8 2.1-4.8 4.8 0 2.6 2.1 4.8 4.8 4.8 2.6 0 4.8-2.1 4.8-4.8 0-2.7-2.2-4.8-4.8-4.8zm-.3-4.5h.1c1.2 0 2.2-1.1 2.2-1.2 6-7.2 14.3-17.5 14.3-27.5C33 7.6 25.6 0 16.5 0S0 7.6 0 17.2c0 10 8.3 20.3 14.3 27.5 0 0 1 1.1 2.1 1.1zM3.7 16.3c0-7 5.7-12.8 12.8-12.8 7 0 12.8 5.7 12.8 12.8 0 7.1-5.7 12.8-12.8 12.8-7-.1-12.8-5.8-12.8-12.8zm8.7-5.8c-3.3 0-3.9 2.6-3.9 5.2s.6 5.2 3.9 5.2 3.9-2.6 3.9-5.2-.6-5.2-3.9-5.2zm0 8.6c-1.2 0-1.3-1.8-1.3-3.4 0-1.6.1-3.4 1.3-3.4s1.3 1.8 1.3 3.4c0 1.6-.1 3.4-1.3 3.4zm11.9-1.4c0-1.2-.8-2-2-2.3 1.1-.3 1.8-1 1.8-2.2 0-2.2-2.1-2.7-3.9-2.7-1.1 0-2 .1-2.9.4l.1 2c.6-.3 1.4-.4 2.3-.4.8 0 1.7.2 1.7 1.1 0 .8-1 1.1-1.6 1.1h-1.1v1.8h1.1c.6 0 1.8.1 1.8 1.1s-1.2 1.3-2 1.3c-.9 0-1.8-.1-2.5-.5l-.1 2.1c.7.3 1.8.3 2.9.3 2 .1 4.4-.6 4.4-3.1z"/>
                                        </svg>
                                        <!-- /.PIN 03 -->
                                    </div>
                                    <div class="illust">
                                        <!-- 동굴처분시설 일러스트 -->
                                        <svg class="illust03 _illust" xmlns="http://www.w3.org/2000/svg" baseProfile="basic" viewBox="0 0 990.8 421.1">
                                            <defs/>
                                            <g opacity=".9">
                                                <path fill="#7b7064" d="M308.7 234.5c20.1-21 47.2 10.7 99.9 3.6s86.8-54.8 148.3-62.1 96.7-8.1 172.3-39.1c40.4-16.6 59.2-24.3 68-27.9 3-7.5 5.3-11.9 5.3-11.9l-75.6 31.1c-75.6 31.1-110.8 31.8-172.3 39.1-61.5 7.3-95.6 55-148.3 62.1-52.7 7.1-79.8-24.6-99.9-3.6-20.1 21-248.2 61.4-248.2 61.4l-55.6 7.1s1.9 3.2 5 8.4l53.1-6.8c-.2 0 227.9-40.4 248-61.4z"/>
                                                <path fill="#9f795a" d="M62.9 304.7s228.1-40.4 248.2-61.4c20.1-21 47.2 10.7 99.9 3.6s86.8-54.8 148.3-62.1c61.5-7.3 96.7-8.1 172.3-39.1 32.3-13.3 50.8-20.9 61.4-25.2 1.4-4.3 2.9-8.2 4.2-11.5-8.8 3.6-27.6 11.3-68 27.9-75.5 31.1-110.7 31.9-172.2 39.2s-95.6 55-148.3 62.1c-52.7 7.1-79.8-24.6-99.9-3.6S60.5 295.9 60.5 295.9l-53.1 6.8c1.4 2.4 3.1 5.3 5.1 8.4l50.4-6.4z"/>
                                                <path fill="#aaa999" d="M313.5 252c20.1-21 47.2 10.7 99.9 3.6s86.8-54.8 148.3-62.1c61.5-7.3 96.7-8.1 172.3-39.1 27.1-11.1 44.4-18.3 55.6-22.8 1.1-4 2.2-7.7 3.4-11.1-10.6 4.4-29.1 12-61.4 25.2-75.6 31.1-110.8 31.9-172.3 39.1-61.5 7.3-95.6 55-148.3 62.1-52.7 7.1-79.8-24.6-99.9-3.6-20.1 21-248.2 61.4-248.2 61.4l-50.4 6.5c1.6 2.6 3.3 5.4 5.2 8.4l47.6-6.1c0-.1 228.1-40.5 248.2-61.5z"/>
                                                <path fill="#bfbeab" d="M278.2 408.4c90.4-25.5 125.9-14.6 152.1-24 26.2-9.4 104.2-67 142.1-76.6 38-9.7 169.7-27.3 186.9-42.4 17.3-15.1 22.1-59.2 24.2-97.4.7-13.2 3.2-25.7 6.1-36.4-11.2 4.6-28.5 11.7-55.6 22.8-75.6 31.1-110.8 31.9-172.3 39.1-61.5 7.3-95.6 55-148.3 62.1s-79.8-24.6-99.9-3.6c-20.1 21-248.2 61.4-248.2 61.4l-47.6 6.1c12.5 20.1 30.2 46.9 42.5 58.6 21 20.1 127.5 55.9 218 30.3z"/>
                                                <path fill="#cccbbf" d="M98.1 336.6s-6.3-.6-9.9 2.1c-3.6 2.7-4.7 4.5-2.8 6.3s11.4-.6 13.2-.3 5.5-2 5.8-4.9c.4-3-6.3-3.2-6.3-3.2z"/>
                                                <path fill="#deddd5" d="M627.3 268.4s-6.3-.6-9.9 2.1c-3.6 2.7-4.7 4.5-2.8 6.3s11.4-.6 13.2-.3c1.8.3 5.5-2 5.8-4.9.3-3-6.3-3.2-6.3-3.2zM347.9 281.9s-6.3-.6-9.9 2.1-4.7 4.5-2.8 6.3c1.9 1.8 11.4-.6 13.2-.3s5.5-2 5.8-4.9c.4-3-6.3-3.2-6.3-3.2z"/>
                                                <path fill="#cccbbf" d="M217.1 329.6s6.3.1 9.7-2.8 4.3-4.9 2.3-6.5c-2-1.6-11.3 1.5-13.1 1.4-1.9-.2-5.3 2.4-5.4 5.3s6.5 2.6 6.5 2.6zM428 305.1s6.3.1 9.7-2.8c3.4-2.9 4.3-4.9 2.3-6.5-2-1.6-11.3 1.5-13.1 1.4-1.9-.2-5.3 2.4-5.4 5.3-.1 2.9 6.5 2.6 6.5 2.6z"/>
                                                <path fill="#deddd5" d="M141.8 352.8s-12.5-.1-16.1 1.5c-3.6 1.6-6.1 5.6-4.2 8.2 1.9 2.5 16.2.4 19.4-1.5s3.5-7.9.9-8.2zM539.2 227.7s-12.5-.1-16.1 1.5c-3.6 1.6-6.1 5.6-4.2 8.2 1.9 2.5 16.2.4 19.4-1.5 3.3-2.1 3.5-7.9.9-8.2zM571 228.3s-12.2 2.5-15.5 4.8c-3.2 2.3-4.8 6.8-2.4 8.9 2.4 2.1 15.9-3 18.7-5.5 2.7-2.6 1.8-8.4-.8-8.2z"/>
                                                <path fill="#cccbbf" d="M317.6 336.7s-12.5-.1-16.1 1.5c-3.6 1.6-6.1 5.6-4.2 8.2 1.9 2.5 16.2.4 19.4-1.5 3.3-2 3.5-7.9.9-8.2z"/>
                                                <path fill="#deddd5" d="M269.9 367.2s-12.5-.1-16.1 1.5c-3.6 1.6-6.1 5.6-4.2 8.2 1.9 2.5 16.2.4 19.4-1.5 3.2-2.1 3.4-7.9.9-8.2zM487.3 261.3s-7.4 0-9.6.9c-2.2.9-3.6 3.3-2.5 4.8s9.6.2 11.5-.9c2-1.1 2.2-4.6.6-4.8z"/>
                                                <path fill="#cccbbf" d="M689.1 200.8s-8.4.9-9.8 3.5c-1.4 2.6-1 5.5 1.6 6.9 2.6 1.4 11-.2 12.4-1.4 1.4-1.1 2.5-3.7 1.7-5.5s-5.9-3.5-5.9-3.5z"/>
                                                <path fill="#deddd5" d="M259.1 295.8s-8.4.9-9.8 3.5c-1.4 2.6-1 5.5 1.6 6.9 2.6 1.4 11-.2 12.4-1.4s2.5-3.7 1.7-5.5c-.7-1.7-5.9-3.5-5.9-3.5z"/>
                                                <path fill="#cccbbf" d="M566.7 276.2s-8.4.9-9.8 3.5c-1.4 2.6-1 5.5 1.6 6.9 2.6 1.4 11-.2 12.4-1.4 1.4-1.1 2.5-3.7 1.7-5.5-.7-1.8-5.9-3.5-5.9-3.5zM502.9 260.7s-7.2 4.4-7.4 7.4c-.2 3 1.5 5.4 4.4 5.6 3 .2 9.9-4.9 10.7-6.5.8-1.6.7-4.4-.8-5.7-1.4-1.5-6.9-.8-6.9-.8z"/>
                                                <path fill="#deddd5" d="M409.9 296.8s-8.4.9-9.8 3.5c-1.4 2.6-1 5.5 1.6 6.9s11-.2 12.4-1.4c1.4-1.1 2.5-3.7 1.7-5.5-.7-1.8-5.9-3.5-5.9-3.5zM182.2 387.5s-8.4.9-9.8 3.5c-1.4 2.6-1 5.5 1.6 6.9 2.6 1.4 11-.2 12.4-1.4s2.5-3.7 1.7-5.5c-.7-1.8-5.9-3.5-5.9-3.5zM415.1 340.4s-8.4.9-9.8 3.5-1 5.5 1.6 6.9c2.6 1.4 11-.2 12.4-1.4 1.4-1.1 2.5-3.7 1.7-5.5-.7-1.8-5.9-3.5-5.9-3.5zM719.3 199.2c-4.1 1.7-5.8 3.8-3.9 7.1s9.2-.9 9.2-.9c-.5-4.9-3.5-7-5.3-6.2zM342.6 338.2c-4.1 1.7-5.8 3.8-3.9 7.1s9.2-.9 9.2-.9c-.5-4.9-3.5-7-5.3-6.2z"/>
                                            </g>
                                            <path fill="#040000" d="M71.6 344.6s-13.9 17.9 17.2 24.7 49.8 18.5 51.9 23.7c2.1 5.3 36.7 29.4 55.1 12s10.2-55.7 22.2-59.6 19.7.3 35.7 7.4c16 7.1 39.5 1.7 43.7-6.5 4.2-8.2-15.2-51.9 3.7-49.5 18.8 2.4 6.9 13.4 29.4 17.8s39-2.1 44.6-6.8c5.6-4.7 56-21.8 68-31.7s17.7-13.1-21.5-16.8c-39.2-3.7-106.1-16.5-130.2-3.6-24.1 13-129.4 28.5-159 42s-62.5 28.7-60.8 46.9z" opacity=".2"/>
                                            <path fill="#e2e2e2" d="M102.6 307.7c-9.5 0-17.1 3.8-17.1 8.6v38.9c0 4.7 7.7 8.6 17.1 8.6 9.5 0 17.1-3.8 17.1-8.6v-38.9c0-4.7-7.6-8.6-17.1-8.6z"/>
                                            <path fill="#d1d2d3" d="M102.6 311.2c-9.5 0-17.1 3.8-17.1 8.6v9.2c0 4.7 7.7 8.6 17.1 8.6s17.1-3.8 17.1-8.6v-9.2c0-4.7-7.6-8.6-17.1-8.6z"/>
                                            <path fill="#e2e2e2" d="M123 305.6c0-.1 0-.1-.1-.2-.9-7.3-9.6-13.1-20.3-13.1-10.7 0-19.5 5.8-20.3 13.2 0 0 0 .1-.1.1 0 0-.9 2.9 0 10.1 0 5.7 9.1 10.2 20.4 10.2 11.3 0 20.4-4.6 20.4-10.2 0 .1.7-6.8 0-10.1zM184.9 255.8c-9.5 0-17.1 3.8-17.1 8.6v38.9c0 4.7 7.7 8.6 17.1 8.6 9.5 0 17.1-3.8 17.1-8.6v-38.9c0-4.8-7.7-8.6-17.1-8.6z"/>
                                            <path fill="#d1d2d3" d="M184.9 259.3c-9.5 0-17.1 3.8-17.1 8.6v9.2c0 4.7 7.7 8.6 17.1 8.6 9.5 0 17.1-3.8 17.1-8.6v-9.2c0-4.8-7.7-8.6-17.1-8.6z"/>
                                            <path fill="#e2e2e2" d="M205.3 253.7c0-.1 0-.1-.1-.2-.9-7.3-9.6-13.1-20.3-13.1-10.7 0-19.5 5.8-20.3 13.2 0 0 0 .1-.1.1 0 0-.9 2.9 0 10.1 0 5.7 9.1 10.2 20.4 10.2 11.3 0 20.4-4.6 20.4-10.2 0 0 .7-6.9 0-10.1zM267.2 212.6c-9.5 0-17.1 3.8-17.1 8.6v38.9c0 4.7 7.7 8.6 17.1 8.6 9.5 0 17.1-3.8 17.1-8.6v-38.9c0-4.7-7.7-8.6-17.1-8.6z"/>
                                            <path fill="#d1d2d3" d="M267.2 216.1c-9.5 0-17.1 3.8-17.1 8.6v9.2c0 4.7 7.7 8.6 17.1 8.6s17.1-3.8 17.1-8.6v-9.2c0-4.8-7.7-8.6-17.1-8.6z"/>
                                            <path fill="#e2e2e2" d="M287.5 210.5c0-.1 0-.1-.1-.2-.9-7.3-9.6-13.1-20.3-13.1-10.7 0-19.5 5.8-20.3 13.2 0 0 0 .1-.1.1 0 0-.9 2.9 0 10.1 0 5.7 9.1 10.2 20.4 10.2 11.3 0 20.4-4.6 20.4-10.2 0 .1.8-6.9 0-10.1z"/>
                                            <path fill="#c56c94" d="M201.4 294.6s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4 1.3 1.3 26.1 15.3 26.1 15.3l3.5-11.8-24.5-14.4z"/>
                                            <path fill="#9e9c9c" d="M194.6 300.9c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                            <path fill="#c56c94" d="M111.6 344.6s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4 1.3 1.3 26.1 15.3 26.1 15.3l3.5-11.8-24.5-14.4z"/>
                                            <path fill="#9e9c9c" d="M104.7 350.8c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                            <path fill="#c56c94" d="M282.4 246.3s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4s26.1 15.3 26.1 15.3l3.5-11.8-24.5-14.4z"/>
                                            <path fill="#9e9c9c" d="M275.5 252.5c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                            <path fill="#c56c94" d="M321.9 253.6s-4.1-2.6-6.3-.5l-197.7 111L126 377l197.7-111.3c.5-.1 1.1-.4 1.5-.9 3.8-3.8 1.3-9.6-3.3-11.2z"/>
                                            <path fill="#9e9c9c" d="M126 377l197.7-111.3c.5-.1 1.1-.4 1.5-.9 2.3-2.3 2.2-5.5.7-7.9L122.4 371.2l3.6 5.8z"/>
                                            <path fill="#c56c94" d="M123.3 365.2s-6.7-4.3-7.6 2.5c-.9 6.8 2.6 7.9 4.2 8.4 2.1.7 4.8 2.2 6.7.3 3.8-3.7 1.3-9.6-3.3-11.2zM140.5 363s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4 1.3 1.3 26.1 15.3 26.1 15.3l3.5-11.8-24.5-14.4z"/>
                                            <path fill="#9e9c9c" d="M133.6 369.3c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                            <path fill="#c56c94" d="M230.4 313.1s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4 1.3 1.3 26.1 15.3 26.1 15.3l3.5-11.8-24.5-14.4z"/>
                                            <path fill="#9e9c9c" d="M223.5 319.4c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                            <path fill="#c56c94" d="M314 264.8s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4S335 291 335 291l3.5-11.8-24.5-14.4z"/>
                                            <path fill="#9e9c9c" d="M307.1 271c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                            <path fill="#ecf0f7" d="M431.5 290.8c-2.6 0-4.8-2.6-4.8-5.9V71.7c0-3.3 2.1-5.9 4.8-5.9s4.8 2.6 4.8 5.9v213.1c0 3.3-2.2 6-4.8 6z"/>
                                            <path fill="#9e9c9c" d="M432.5 52.9v237.7c2.1-.6 3.7-3.1 3.7-6.1V59c.1-2.9-1.5-5.4-3.7-6.1z"/>
                                            <path fill="#c56c94" d="M856.6 265.6c-13.5 0-28.1-1.1-44-3.2-8.4-1.1-19.4-2.7-30.4-5.3-.1 0-.2 0-.2-.1-3-.9-5.9-1.7-8.9-2.6-16.5-4.9-33.3-9.9-49.9-14.8-17.9-5.3-41.4-12.3-65.1-19.5-4.6-1.4-9.3-2.8-13.8-4.1-14.8-4.3-30.1-8.8-44.4-14.8-7-3-12-6.7-15.3-11.3-4.7-6.7-5.3-13.3-1.8-19.7 2.7-5 7.6-9 12-12.6 1.6-1.3 3.1-2.6 4.5-3.8 0 0 2.4-2.5 1.7-6.2-.6-3.4-4.4-10.1-22.5-17.1-31.1-12.1-67.4 7.9-69.5 9L323.2 260.2c-2.2 1.4-5.2.8-6.6-1.4-1.4-2.2-.8-5.2 1.4-6.6l185.8-120.8c.1 0 .1-.1.2-.1 1.7-1 41.6-23.7 77.8-9.7 17.1 6.6 26.6 14.8 28.4 24.2 1.4 7.2-2.3 12.8-4.6 14.9-1.5 1.4-3.2 2.8-4.9 4.2-10 8.2-13.5 12.3-8.5 19.5 2.2 3.2 5.9 5.8 11.3 8 13.9 5.8 28.9 10.2 43.4 14.4 4.6 1.3 9.3 2.7 13.9 4.1 23.7 7.2 47.2 14.2 65.1 19.5 16.6 4.9 33.4 9.9 49.9 14.8 2.9.9 5.8 1.7 8.7 2.6 10.5 2.5 21.2 4.1 29.4 5.1 23.6 3.2 44 3.9 62.5 2.3 25.7-2.3 43.1-8.5 55-19.7 4.8-4.5 9.1-10.7 11.8-17.1 4-9.5 3.1-18.9-2.8-28.7-6-9.9-15.9-18-23.1-23-6.5-4.5-13.9-8.8-22.5-13-23.1-11.4-46.6-22.8-66.6-32.4-21.8-10.5-45.4-21.8-72.2-34.6-18.9-9-38.5-18.3-58.3-27.7-14.3-6.7-28.4-11.4-43.3-14.3-40.5-7.9-81.6-12.2-112.9-15.1-16.6-1.5-31.8-2.6-46.7-3.3-84-3.9-110.9-5.1-111.2-5.2-2.6-.1-4.7-2.3-4.5-5 .1-2.6 2.3-4.7 5-4.5.3 0 27.3 1.2 111.2 5.2 15 .7 30.4 1.8 47.1 3.4 31.5 2.9 73 7.3 113.9 15.2 15.7 3 30.6 8 45.6 15.1 19.8 9.4 39.4 18.7 58.3 27.7 26.8 12.8 50.4 24.1 72.2 34.6 20 9.6 43.5 21 66.7 32.4 9.1 4.5 16.8 9 23.7 13.7 28 19.3 38.3 41.8 29.2 63.3-3.2 7.6-8.2 14.8-14 20.3-13.5 12.7-32.8 19.8-60.7 22.2-6.7.6-13.6.9-20.7.9z"/>
                                            <g fill="#9e9c9c">
                                                <path d="M955 204.8c-.2 4.4-1.3 8.9-3.1 13.3-3.2 7.6-8.2 14.8-14 20.3-13.5 12.7-32.8 19.8-60.7 22.2-6.6.6-13.5.9-20.7.9-13.5 0-28.1-1.1-44-3.2-8.4-1.1-19.4-2.7-30.4-5.3-.1 0-.2 0-.2-.1-3-.9-5.9-1.7-8.9-2.6-16.5-4.9-33.3-9.9-49.9-14.8-17.9-5.3-41.4-12.3-65.1-19.5-4.6-1.4-9.3-2.8-13.8-4.1-14.8-4.3-30.1-8.8-44.4-14.8-7-3-12-6.7-15.3-11.3-2.2-3.1-3.5-6.3-3.9-9.3-.6 4.4.7 9 3.9 13.5 3.3 4.6 8.3 8.3 15.3 11.3 14.4 6 29.7 10.5 44.4 14.8 4.5 1.3 9.2 2.7 13.8 4.1 23.7 7.2 47.3 14.2 65.1 19.5 16.6 4.9 33.4 9.9 49.9 14.8 3 .9 5.9 1.7 8.9 2.6.1 0 .2 0 .2.1 11 2.6 22 4.2 30.4 5.3 15.9 2.1 30.5 3.2 44 3.2 7.1 0 14-.3 20.7-.9 27.9-2.5 47.2-9.5 60.7-22.2 5.8-5.5 10.8-12.7 14-20.3 2.4-5.8 3.5-11.7 3.1-17.5zM605.6 156.6c-1.5 1.4-3.2 2.8-4.9 4.2-8.1 6.7-12 10.6-10.4 15.7 1-3.4 4.7-6.8 10.4-11.5 1.6-1.4 3.3-2.8 4.9-4.2 2.2-2.1 5.6-7.2 4.8-13.9-.6 4.5-3.1 8-4.8 9.7z"/>
                                                <path d="M383.5 21.2c.3 0 27.2 1.2 111.2 5.2 14.9.7 30.2 1.8 46.7 3.3 31.3 2.9 72.5 7.3 112.9 15.1 14.9 2.9 29.1 7.6 43.3 14.3 19.8 9.4 39.4 18.7 58.3 27.7 26.8 12.8 50.4 24.1 72.2 34.6 20 9.6 43.5 21 66.6 32.4 8.6 4.3 16 8.5 22.5 13 7.3 5 17.2 13.1 23.1 23 5.9 9.8 6.8 19.2 2.8 28.7 14.4-24.5-16.6-48.7-22.9-53.3-.4-.3-.7-.5-1.1-.8-6.9-4.8-14.7-9.3-23.7-13.7-23.2-11.4-46.7-22.8-66.7-32.4-21.8-10.5-45.4-21.8-72.2-34.6-18.9-9-38.5-18.3-58.3-27.7-15-7.1-29.9-12-45.6-15.1-40.9-7.9-82.3-12.3-113.9-15.2-16.7-1.6-32.1-2.6-47.1-3.4-84-3.9-111-5.2-111.2-5.2-.5 0-.9 0-1.4.1.4 2.2 2.2 3.9 4.5 4zM600.9 147.5c.5 2.7-.6 4.7-1.3 5.6 4.6-4 .8-10-2.3-13.6-7.6-8.8-19.6-12.7-30.8-14.3-10.9-1.6-22.1-.6-32.9 1.9-10.4 2.4-21 6.2-30.3 11.6-.1 0-.1.1-.2.1L317.3 259.7c1.6 1.4 4 1.7 5.8.5l185.7-120.7c2.1-1.2 38.3-21.1 69.5-9 18.1 7 21.9 13.7 22.6 17z"/>
                                            </g>
                                            <path fill="#eeda63" d="M851.2 280.2c-37.7 0-69.4-4.5-69.8-4.6-.2 0-.4-.1-.7-.1-2.7-.8-271.9-79.5-317.3-93-18-5.4-36.4-5.4-54.5 0-13.7 4.1-22.1 9.8-22.2 9.9-.1.1-.2.1-.3.2L326.9 228c-2.3 1.3-5.2.6-6.5-1.7-1.3-2.3-.6-5.2 1.7-6.5l59.5-35.4c1.3-.9 10.2-6.7 24.4-11 13.8-4.2 35.5-7.6 60.3-.1 44.7 13.3 306 89.7 316.9 92.9 3.8.5 40.2 5.4 80.2 4.3 54.6-1.5 91-13.3 105.4-34 7.9-11.4 10.4-23.1 7.4-34.6-8.2-31.1-53.1-52.8-53.5-53-74.9-35.4-217.2-102.5-224-105.4-.6-.2-1.1-.4-1.9-.8-11.4-5.3-33-10.1-64.3-14.3C578 21.2 387.9 12.7 386 12.6c-2.6-.1-4.7-2.3-4.5-5 .1-2.6 2.3-4.7 5-4.5C388.4 3.2 579 11.6 634 19c48.6 6.5 62.5 13 67.1 15.1.3.1.6.3.8.3 1.4.5 10.4 4.6 113.6 53.2 55.2 26 110.8 52.3 111.4 52.6.5.2 12.4 5.9 25.5 15.9 18 13.7 29.1 28.2 33.1 43.2 3.8 14.4.9 28.7-8.7 42.5-16.5 23.7-54.5 36.5-113.1 38.1-4.4.2-8.5.3-12.5.3zM698.9 43.6c.1 0 .2.1.3.1-.2-.1-.3-.1-.3-.1zm2.6-9.2c.1 0 .1 0 .2.1-.1-.1-.2-.1-.2-.1zm-.1 0z"/>
                                            <path fill="#9e9c9c" d="M976.5 238.6c-7.2 10.8-17 19.5-28.9 24.8-8.9 4-18.2 6.5-27.8 7.9-15.8 3.8-34.7 6.1-56.5 6.7-40 1.1-76.4-3.7-80.2-4.3-10.9-3.2-272.2-79.6-316.9-92.9-24.9-7.4-46.5-4-60.3.1-14.1 4.3-23 10.1-24.4 11L322 227.3c-.2.1-.3.2-.5.3 1.5 1.2 3.6 1.4 5.4.3l59.6-35.4c.1-.1.2-.1.3-.2.1-.1 8.5-5.8 22.2-9.9 18.2-5.4 36.5-5.4 54.5 0 45.4 13.6 314.6 92.3 317.3 93 .2.1.4.1.7.1.3.1 32 4.6 69.8 4.6 4 0 8.1-.1 12.3-.2 58.6-1.6 96.7-14.4 113.1-38.1 5.5-7.8 8.8-15.8 9.9-23.9-2.4 7.5-6.1 14.7-10.1 20.7z"/>
                                            <g>
                                                <path fill="#eeda63" d="M201.4 263.1s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4 1.3 1.3 26.1 15.3 26.1 15.3l3.5-11.8-24.5-14.4z"/>
                                                <path fill="#9e9c9c" d="M194.6 269.3c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                                <path fill="#eeda63" d="M111.6 313s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4 1.3 1.3 26.1 15.3 26.1 15.3l3.5-11.8-24.5-14.4z"/>
                                                <path fill="#9e9c9c" d="M104.7 319.3c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                                <path fill="#eeda63" d="M282.4 214.8s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4s26.1 15.3 26.1 15.3l3.5-11.8-24.5-14.4z"/>
                                                <path fill="#9e9c9c" d="M275.5 221c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                                <path fill="#eeda63" d="M321.9 222.1s-4.1-2.6-6.3-.5l-197.7 111 8.2 12.8 197.7-111.3c.5-.1 1.1-.4 1.5-.9 3.7-3.7 1.2-9.6-3.4-11.1z"/>
                                                <path fill="#9e9c9c" d="M126 345.4l197.7-111.3c.5-.1 1.1-.4 1.5-.9 2.3-2.3 2.2-5.5.7-7.9L122.4 339.7l3.6 5.7z"/>
                                                <path fill="#eeda63" d="M123.3 333.7s-6.7-4.3-7.6 2.5c-.9 6.8 2.6 7.9 4.2 8.4 2.1.7 4.8 2.2 6.7.3 3.8-3.8 1.3-9.6-3.3-11.2zM140.5 331.5s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4 1.3 1.3 26.1 15.3 26.1 15.3l3.5-11.8-24.5-14.4z"/>
                                                <path fill="#9e9c9c" d="M133.6 337.8c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                                <path fill="#eeda63" d="M230.4 281.6s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4 1.3 1.3 26.1 15.3 26.1 15.3l3.5-11.8-24.5-14.4z"/>
                                                <path fill="#9e9c9c" d="M223.5 287.8c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                                <path fill="#eeda63" d="M314 233.3s-6 .3-6.7 4.5c-.6 4.1.3 5.1 1.6 6.4 1.3 1.3 26.1 15.3 26.1 15.3l3.5-11.8-24.5-14.4z"/>
                                                <path fill="#9e9c9c" d="M307.1 239.5c-.1 2.7.7 3.5 1.8 4.6 1.3 1.3 26.1 15.3 26.1 15.3l1-3.4-28.9-16.5z"/>
                                            </g>
                                            <g>
                                                <path fill="#e2e2e2" d="M176.2 348.9c-9.5 0-17.1 3.8-17.1 8.6v38.9c0 4.7 7.7 8.6 17.1 8.6 9.5 0 17.1-3.8 17.1-8.6v-38.9c0-4.7-7.6-8.6-17.1-8.6z"/>
                                                <path fill="#d1d2d3" d="M176.2 352.4c-9.5 0-17.1 3.8-17.1 8.6v9.2c0 4.7 7.7 8.6 17.1 8.6 9.5 0 17.1-3.8 17.1-8.6V361c0-4.8-7.6-8.6-17.1-8.6z"/>
                                                <path fill="#e2e2e2" d="M196.6 346.8c0-.1 0-.1-.1-.2-.9-7.3-9.6-13.1-20.3-13.1-10.7 0-19.5 5.8-20.3 13.2 0 0 0 .1-.1.1 0 0-.9 2.9 0 10.1 0 5.7 9.1 10.2 20.4 10.2 11.3 0 20.4-4.6 20.4-10.2 0 .1.7-6.9 0-10.1z"/>
                                            </g>
                                            <g>
                                                <path fill="#e2e2e2" d="M265.6 293.7c-9.5 0-17.1 3.8-17.1 8.6v38.9c0 4.7 7.7 8.6 17.1 8.6 9.5 0 17.1-3.8 17.1-8.6v-38.9c0-4.8-7.7-8.6-17.1-8.6z"/>
                                                <path fill="#d1d2d3" d="M265.6 297.2c-9.5 0-17.1 3.8-17.1 8.6v9.2c0 4.7 7.7 8.6 17.1 8.6 9.5 0 17.1-3.8 17.1-8.6v-9.2c0-4.8-7.7-8.6-17.1-8.6z"/>
                                                <path fill="#e2e2e2" d="M286 291.6c0-.1 0-.1-.1-.2-.9-7.3-9.6-13.1-20.3-13.1-10.7 0-19.5 5.8-20.3 13.2 0 0 0 .1-.1.1 0 0-.9 2.9 0 10.1 0 5.7 9.1 10.2 20.4 10.2 11.3 0 20.4-4.6 20.4-10.2 0 0 .7-6.9 0-10.1z"/>
                                            </g>
                                            <path fill="#c56c94" d="M465.5 309.2c-.6 0-1.3-.1-1.9-.4l-127-56.7c-2.4-1.1-3.5-3.9-2.4-6.3s3.9-3.5 6.3-2.4l127 56.7c2.4 1.1 3.5 3.9 2.4 6.3-.8 1.8-2.5 2.8-4.4 2.8z"/>
                                            <path fill="#9e9c9c" d="M470.2 303.5c-.7 3-3.1 2.8-4.7 2.3l-1.6-.7-130-58.1c-.3 2.1.7 4.2 2.8 5.1l125.1 55.8 2 .9c.6.3 1.3.4 1.9.4h.8c.1 0 .3 0 .4-.1.1 0 .2 0 .3-.1.1 0 .2-.1.3-.1.1 0 .2-.1.3-.1 0 0 .1 0 .1-.1.3-.1.5-.3.7-.5 0 0 .1 0 .1-.1l.3-.3.1-.1c.4-.4.7-.9 1-1.4.2-.8.3-1.8.1-2.8z"/>
                                            <g>
                                                <path fill="#e2e2e2" d="M347.9 253.3c-9.5 0-17.1 3.8-17.1 8.6v38.9c0 4.7 7.7 8.6 17.1 8.6 9.5 0 17.1-3.8 17.1-8.6v-38.9c.1-4.8-7.6-8.6-17.1-8.6z"/>
                                                <path fill="#d1d2d3" d="M347.9 256.7c-9.5 0-17.1 3.8-17.1 8.6v9.2c0 4.7 7.7 8.6 17.1 8.6 9.5 0 17.1-3.8 17.1-8.6v-9.2c.1-4.7-7.6-8.6-17.1-8.6z"/>
                                                <path fill="#e2e2e2" d="M368.3 251.2c0-.1 0-.1-.1-.2-.9-7.3-9.6-13.1-20.3-13.1-10.7 0-19.5 5.8-20.3 13.2 0 0 0 .1-.1.1 0 0-.9 2.9 0 10.1 0 5.7 9.1 10.2 20.4 10.2 11.3 0 20.4-4.6 20.4-10.2 0 0 .7-6.9 0-10.1z"/>
                                            </g>
                                            <g fill="#9e9c9c">
                                                <path d="M890.9 131.4c-21.3-10-50.8-24-80.2-37.8-103.2-48.8-112.2-52.8-113.6-53.3-.1-.1-.5-.2-.8-.3-4.6-2.1-18.5-8.7-67.1-15.1-54.9-7.4-245.5-15.9-247.4-16h-.3c.5 2 2.2 3.6 4.4 3.7 1.9.1 192 8.5 246.6 15.8 31.3 4.2 52.9 9 64.3 14.3.7.3 1.3.6 1.9.8 6 2.5 120.5 56.5 198.1 93.2.5.2 1 .5 1.6.7l1.2.6c2.6 1.2 5.1 2.4 7.6 3.6.1 0 .1.1.2.1.2.1.5.2.7.4 1.1.5 2.2 1 3.2 1.5 3.9 1.8 7.6 3.6 11.2 5.3.3.2 26.5 12.8 42.5 32.5-23.7-30.2-74.1-50-74.1-50zM975.8 222.2c.6-1.7 1-3.7 1.3-6.1-.3 2-.7 4-1.3 6.1z"/>
                                            </g>
                                            <path fill="#eeda63" d="M473.7 274.1c-.6 0-1.3-.1-1.9-.4l-127-56.7c-2.4-1.1-3.5-3.9-2.4-6.3s3.9-3.5 6.3-2.4l127 56.7c2.4 1.1 3.5 3.9 2.4 6.3-.8 1.8-2.6 2.8-4.4 2.8z"/>
                                            <path fill="#9e9c9c" d="M478.4 268.4c-.7 3-3.1 2.8-4.7 2.3l-1.6-.7-130-58.1c-.3 2.1.7 4.2 2.8 5.1L470 272.8l2 .9c.6.3 1.3.4 1.9.4h.8c.1 0 .3 0 .4-.1.1 0 .2 0 .3-.1.1 0 .2-.1.3-.1.1 0 .2-.1.3-.1 0 0 .1 0 .1-.1.3-.1.5-.3.7-.5 0 0 .1 0 .1-.1l.3-.3.1-.1c.4-.4.7-.9 1-1.4.2-.9.3-1.9.1-2.8z"/>
                                            <g>
                                                <path fill="#ecf0f7" d="M410.4 55.1l-8.2 14.1 80 3.2 6.4-14.8z"/>
                                                <path fill="#fff" d="M410.9 56.2l75.9 2.4-5.4 12.7-77.5-3.1 7-12m-.6-1.1l-8.2 14 80 3.2 6.3-14.8-78.1-2.4z"/>
                                                <path fill="#9ba4ab" d="M402.1 69.2l.2 22.8 80 1.9-.2-21.5z"/>
                                                <path fill="#575558" d="M417.8 74v3.8l2.7.1V74z"/>
                                                <path fill="#ecf0f7" d="M418.5 74.7h1.3v2.4h-1.2v-2.4m-.8-.7v3.9l2.7.1v-3.9l-2.7-.1z"/>
                                                <path fill="#575558" d="M421.1 74.1V78l2.6.1.1-3.9z"/>
                                                <path fill="#ecf0f7" d="M421.8 74.9h1.3v2.4h-1.2v-2.4m-.8-.8V78l2.7.1v-3.9l-2.7-.1z"/>
                                                <path fill="#575558" d="M424.3 74.3v3.8l2.7.1.1-3.9z"/>
                                                <path fill="#ecf0f7" d="M425.1 75h1.3v2.4h-1.2V75m-.9-.7v3.9l2.7.1v-3.9l-2.7-.1z"/>
                                                <path fill="#575558" d="M429 74.4v3.9l2.7.1v-3.9z"/>
                                                <path fill="#ecf0f7" d="M429.7 75.2h1.3v2.4h-1.2v-2.4m-.8-.8v3.9l2.7.1v-3.9l-2.7-.1z"/>
                                                <path fill="#575558" d="M432.3 74.6v3.8l2.6.1.1-3.9z"/>
                                                <path fill="#ecf0f7" d="M433 75.3h1.3v2.4h-1.2v-2.4m-.8-.7v3.9l2.7.1v-3.9l-2.7-.1z"/>
                                                <path fill="#575558" d="M435.5 74.7v3.9l2.7.1.1-3.9z"/>
                                                <path fill="#ecf0f7" d="M436.3 75.5h1.3v2.4h-1.2v-2.4m-.9-.8v3.9l2.7.1v-3.9l-2.7-.1z"/>
                                                <path fill="#768198" d="M488.5 57.6l-6.4 14.8.2 21.5 6.2-15.7z"/>
                                                <path fill="#6c6c7e" d="M405.3 68.2l6.4-10.9 74.7 2.4.5-1.1-75.8-2.4-7 12z"/>
                                                <path fill="#ecf0f7" d="M426.1 57.3l-1.8 3.1 8 .3 1.2-3.2z"/>
                                                <path fill="#9ba4ab" d="M424.3 60.4l.1 5 7.8.4.1-5.1z"/>
                                                <path fill="#768198" d="M433.5 57.5l-1.2 3.2-.1 5.1 1.3-3.5z"/>
                                                <path fill="#6f7180" d="M432.2 65.8h2.8l2.4-3.5h-3.9z"/>
                                            </g>
                                            </svg>
                                        <!-- /.동굴처분시설 일러스트 -->
                                    </div>
                                    <div class="_title">동굴처분시설</div>
                                    <p class="_description">
                                        검사에 최종 합격한 방사성폐기물을 영구적으로 안전하게 격리하는 시설입니다.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.지도 네비게이션 영역 -->
                    <!-- 지도 일러스트 영역 -->
                    <div class="map">
                        <div class="_inner">
                            <svg class="_map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2811.4 1509.7">
                                <defs>
                                    <path id="a" d="M1288.4 452.3l-56.5-54.8v-24.7l56.9 46.9z"/>
                                    <path id="reuse-0" fill="#433e64" d="M1624.6 432.3l-3.2-1.7.1-3.6 3.1 1.4z"/>
                                </defs>
                                <path fill="#fff" d="M361.7 352.7c-59.3 52.2-191.2 159.6-266.8 297.5-18.4 33.5-29.5 60.9-37.5 85.8-31.4 96.4 6.2 202.3 90.4 255.6 27 17.1 58 35.3 89.2 50.6 88.7 43.5 117.7 99.1 138.9 152.6 21.2 53.5 124.7 154.5 251.4 176.3 126.7 21.8 218.3 50.8 369.2 38s496.9 10.5 547.8 20.7c51 10.3 178.5 25.6 323.5 22s774.8 14 843.7-30.4c72.6-46.8 16.8-121.4-137.5-272.1-112.5-109.9-144.5-361.4-223.2-396.4-237-105.2-512.3-352.5-607-441.3-22.6-21.2-51-34.7-81.3-38.7L836.4 156.7c-27.2-3.6-147.2 16.5-188.8 31.3-160.7 57.3-275.1 155.2-285.9 164.7z"/>
                                <path fill="#84c567" d="M2527.5 1015.9c-10.2-44.1-24.5-84-31.1-107.6l-1.2-3.3v-1.2c-1.4-5.3-2.2-9.5-2.3-12.5-5.3-18.4-22.3-53.5-77.4-92.8-81-57.8-195.2-174.8-229.7-293.7s-251.4-228.5-421.7-283.4c-165.1-53.2-252.7-59.2-257.8-59.5-107.6-6.2-231.4-13.9-345.5-10.3-204.4 6.4-343.4-5-383 10.2-39.6 15.1-60.8 20.8-47 21.8 13.8.9 37.7.9 30.4 11.3-4.3 6.1-12.2 4.2-18.2 6.3-6.5 2.3-5.7 8.1-1.4 12.4l.3.3c5 4.8 10.9 3.9 17.1 5.5 39.2 10.1 78.4 20.1 117.6 30.4 47.6 12.5 95.1 25.2 142.5 38.3 49.7 13.7 99.4 27.7 148.9 42.5 41 12.2 82 24.8 122.3 39.4 8.5 3.1 17 6.2 25.4 9.6 136.3 54.9 424.6 232 454.6 258.6 39 34.5 62.2 94.2 62.2 251 0 38.8-.2 102.9-7.8 142.4-7.6 40 0 81.7-11 121.3-3 10.6-6.3 21-9.9 31.3-11 31.4-24.6 61.7-37.2 92.5-9.9 24.2-31.9 62.9-21.5 89.3 3.7 9.5 9.6 43.1 113.3 40 198.2-5.9 849 50.8 868.2-49.5 11.8-61.6-73.6-125.1-120.3-185.4-47-60.4-62.2-83.3-78.8-155.2z"/>
                                <path fill="#84c567" d="M690.3 859.5C738.9 819 836 723.8 873.2 696.8c2.8-2 7 3 3.2 9.2-20 21.6-20 21.6-33.4 39.8-40.1 54.7-28.4 46.4-4 51.6 15.9 3.4 91.7-55 130.3-74 38.7-18.9 72-9.3 112.5-9.3h119.7c84 3.6 101 1.5 150.8 2 42 .5 99.1-19.9 128.6-44.5 38.3-31.9 38.3-31.9 65.8-49 17.4-10.8 64.8-21.4 57.6-26.3-161.9-110.2-109.5 43.5-313.9 40.7-204.4-2.8-319.7-23.4-347.3-39-27.6-15.6-23.5-12.8-134-24.1-17.4-1.8-42.4-51.1-18.5-83.2 27.8-37.3 31.9-52.8 91.2-66.9 59.2-14.2 252.1-60.5 252.1-60.5 37.6-13.4-.4-28.3-64-42.7 2.2.2 3.4.3 3.4.3S878.2 263.6 824 247.5c-54.2-16.1-86.2-19.6-93.1-25.5-3.8-3.3-5.8-8.7-4.6-13.7 1.1-4.5 3.8-8.2 8.1-10 4.8-2 10-.4 14.8-2.2 1.9-.7 7.5-3.1 3.9-5.3-3-1.9-7.9-1.9-11.3-2.2-9.2-.7-18.5-.6-27.8-.4-50.4 1.1-132.2 33.8-162.5 46.6-15.9 6.4-32.6 15.1-50 26.4-59.7 38.6-278.2 221.4-353 335C36.2 766.5 70.3 881.6 81.9 907c23.1 50.7 340.4 213 384.6 215.8 44.2 2.9 165.8-215 223.8-263.3z"/>
                                <path fill="#84c567" d="M1664.5 1205.2c-18-8.5 71.8-29.8 84.2-35.5 12.4-5.7 34.5-51.1 40.1-116.3 4.2-49.3 21.3-223.6 9.4-288.3-22.6-123.3-110-147.5-162.7-153.1-23.2-2.5-63.4 21.5-101.3 43.5-18.2 10.6-85.7 62.4-127.4 74.3-19.2 5.5-199.1 1.4-219 0-213.9-15.5-211.1 13.7-302.6 77.2-32 22.2-76.8 1.1-107.2 12.5-30.4 11.4-69.4 49.2-105.8 102.4-35.3 51.5-226.2 287.6-226.2 287.6-6.9 42.4 76.6 91.5 103.4 110.2 51.5 35.9 224.1 63.1 286.4 68.5 162.6 14.2 160.2-45.4 395-31.2 84.5 5.1 124.3 19.9 190.6 25.5 18.5 1.6 92.7 21.4 98.6-8.7 1.8-9.1-1.6-18.4-4.9-27-11.9-31-23.7-61.9-35.6-92.9 35.3 36.8 32.7 90.5 64.8 125.8.1.1 18.1 19.9 70.4 28.4 52.5 8.5 69.1-42.6 81.5-75.2 12.4-32.6 40.1-116.3 33.1-127.7-6.8-11.3-46.8 8.5-64.8 0z"/>
                                <g>
                                    <path class="line1 _line" d="M2121.2 1027.4c3.5-3.4 7-6.8 10.4-10.3 3.4-3.5 6.6-7 9.8-10.7l5.7 7c-4.2 2.6-8.4 5.2-12.7 7.5-4.5 2.4-8.8 4.5-13.2 6.5zM2154.4 989.9c2.8-3.9 5.4-7.9 7.8-11.9 2.4-4 4.7-8.1 6.8-12.3 2.1-4.2 3.9-8.4 5.6-12.7 1.7-4.3 3.1-8.6 4.4-12.9l26.9 12.1c-2.7 4.8-5.6 9.4-8.7 13.8-3.1 4.4-6.4 8.6-9.8 12.7-3.5 4-7.1 7.9-10.8 11.5-3.8 3.6-7.6 7-11.6 10.3l-10.6-10.6zM2184.1 921.4c1.4-4.2 2.3-8.5 2.9-12.9.7-4.4 1.1-8.8 1.3-13.2.5-8.9 0-17.8-1.2-26.7l30.9-4.6c1.5 10.8 2.1 21.9 1.5 33-.3 5.5-.8 11-1.7 16.5-.9 5.5-2 10.9-3.1 16.3l-30.6-8.4zM2183.2 849.3c-4.7-17.5-12.3-34.4-21.9-50.3l26.5-16.9c10.9 18 19.8 37.7 25.4 58.6l-30 8.6zM2150.2 782.1c-10.9-15.1-23.4-29.1-37.1-42l21.1-23.6c14.9 14.1 28.8 29.6 41 46.5l-25 19.1zM2097.8 726.6c-14.4-12.1-29.8-23-45.9-32.8l15.9-27.5c17.3 10.6 33.9 22.4 49.6 35.5l-19.6 24.8zM2034.1 683.5c-4.1-2.3-8.3-4.4-12.5-6.6-2.1-1.1-4.2-2.1-6.3-3.1l-6.5-3.1-26.4-12.6 13.1-29.1 26.4 12.5 6.7 3.2c2.3 1.1 4.5 2.2 6.8 3.3 4.5 2.3 9 4.6 13.4 7l-14.7 28.5zM1963.1 649l-52.7-25.3 13.2-29 52.7 25.2zM1891.2 614.5l-52.8-25.4 13.3-29 52.7 25.4zM1819.3 579.8l-52.7-25.4 13.3-29 52.6 25.4zM1747.4 545.1l-26.3-12.8-13.2-6.4c-2.2-1.1-4.4-2.1-6.6-3.2l-6.7-2.9 13.6-29.6 6.5 3.5c2.2 1.1 4.4 2.2 6.6 3.2l13.2 6.4 26.3 12.8-13.4 29zM1676.2 508.9l-12.4-8-12.4-8-12.4-8.1-12.4-8.2 6.1-13.1 14 4.7 13.9 4.7 13.9 4.8 13.9 4.9zM1608.7 464.6l-12-8.2c-4-2.7-8-5.5-12-8.3 4.6 1.4 9.2 2.8 13.8 4.3l13.8 4.4-3.6 7.8z"/>
                                </g>
                                <path class="line2 _line" d="M934.8 1013.6c-7.3-1.5-27.5-5.7-56.3-11.9l6.3-31.4c28.8 6.1 48.9 10.4 56.2 11.9l-6.2 31.4zM858 997.3c-18.6-4-37.5-8.1-56.1-12.2l6.5-31.3c18.6 4.1 37.5 8.1 56 12.1l-6.4 31.4zm-76.5-16.6c-19-4.2-37.8-8.3-56.1-12.4L732 937c18.2 4.1 37 8.2 55.9 12.4l-6.4 31.3zm-76.5-17c-19.2-4.3-38.1-8.6-56-12.7l6.8-31.3c17.9 4.1 36.7 8.4 55.9 12.7l-6.7 31.3zm-76.4-17.5c-19.5-4.5-38.3-9-55.9-13.2l7.1-31.2c17.6 4.2 36.3 8.6 55.7 13.1l-6.9 31.3zm-76.2-18c-19.9-4.8-38.7-9.5-55.9-13.8l7.5-31.1c17.1 4.3 35.7 9 55.5 13.8l-7.1 31.1zm-76.2-19.1c-20.8-5.4-39.5-10.5-55.8-15.1l8.3-30.9c16 4.6 34.5 9.6 55.1 14.9l-7.6 31.1zm-76-21c-7.8-2.3-14.9-4.6-21.3-6.7-12.5-4.1-24.2-8.7-34.8-13.7l13.1-29.1c9.4 4.5 19.9 8.6 31.2 12.3 6.1 2 13.1 4.2 20.6 6.4l-8.8 30.8zm-75.9-31c-20.2-12.2-36.1-26.7-47.4-43.1l25.5-18.5c8.7 12.7 21.4 24.1 37.7 34l-15.8 27.6zm-59.1-64.8c-5.6-13.6-8.4-28.3-8.4-43.5 0-7.6.7-15.4 2.1-23.2l30.7 5.7c-1.1 5.9-1.6 11.8-1.6 17.4 0 11 2 21.4 6 31.1l-28.8 12.5zm29.1-79.1l-29.5-10.6c6.3-18.6 16.2-37.3 29.4-55.6l25.1 19.1c-11.3 15.7-19.8 31.5-25 47.1zm37-62.3l-22.7-22c11.4-12.5 27.6-24.8 49.5-37.7l15.5 27.8c-18.9 11.1-33.1 21.9-42.3 31.9zm59.9-41.7L377 580.7c15.5-8.2 33.4-16.6 53.2-25l11.9 29.6c-19 8-36.1 16.1-50.9 23.9zm70-31.8l-11.4-29.8c16.8-6.7 35-13.6 54.4-20.4l10.1 30.3c-18.9 6.6-36.8 13.3-53.1 19.9zm72.7-26.8l-9.8-30.4c17.4-5.9 35.9-11.9 55-17.8l9 30.7c-18.9 5.8-37.1 11.7-54.2 17.5zm74-23.6l-8.8-30.8c17.8-5.4 36.5-10.7 55.4-16l8.2 30.9c-18.7 5.3-37.2 10.6-54.8 15.9zm74.8-21.3l-8-31c18.3-5 37.1-9.9 55.8-14.6l7.4 31.1c-18.4 4.7-37 9.5-55.2 14.5zm75.4-19.5l-7.2-31.2c19.4-4.8 38.3-9.2 56.1-13.2l6.7 31.3c-17.7 4-36.4 8.4-55.6 13.1z"/>
                                <path fill="#040000" d="M152.4 562.7S-24.5 727.1 6.4 874.8c0 0 27 115 90.1 153.1 91 54.9 169 94.9 203.6 155 26.8 46.6 80.2 182.5 233.3 226.1s262.8 79.5 517.7 54.9c304.2-29.3 486.7 37.9 701.2 38.1 336.4.3 785.2-10.3 902.6-32.1 74.2-13.8 174.4-71.5 150.3-132.6-26.3-66.7-153.7-128.2-198-209.6-44.4-81.4-110-274.9-119.3-249.9s43.4 220.6 85.9 278.6c42.4 58 169.3 178.5 97.7 208.8-31.6 13.4-170.6 21.7-285.8 17.7-115.2-4-332.9-28.1-467.2-30.1s-213.3 34.4-304.4 17.4c-91.1-17.1-129.5.9-270.6-34.7-141.1-35.7-198.9-23.3-283.6-17.4s-248.7 37.1-333.3 13.4c-84.5-23.8-166.1-38.7-205.3-94.9-39.2-56.2-64-140.2-170.1-196.1-106.1-55.9-237.3-108.3-248.9-199s50.1-278.8 50.1-278.8z" opacity=".15"/>
                                <path fill="#e1d39c" d="M2398.9 966c3-3.8-.6-9.3-5.2-8-27.4 8.2-135.5 14.8-191.8 0-74.5-19.6-221.6 6.1-251.2 63-29.6 56.9 95.5 83.8 116.5 93.6 21 9.8 149.9 20.6 157.6 32.4 7.6 11.8 15.3 24.5-34.4 22.6-49.7-2-202.4 3.9-223.5-14.7-21-18.6-16.2-63.8-42-80.4-25.8-16.7-97.1-30.1-101.9-34 0 0-2.3 19.9-2.3 31.4 0 .7 52.7-7.2 70.8 16.4 18.1 23.5 20.1 75.5 25.8 88.3 5.7 12.8 41.1 18.6 59.2 36.3 18.1 17.7 18.1 61.8 41.1 74.6 22.9 12.8 182.4 10.8 203.4 9.8s77.2-19.6 79.3-56.8v-.3c.1-3.6 1.7-81.4 33.4-86.2 32.5-4.9 75.4-5.9 63-18.6-12.4-12.8-50.6-29.4-114.6-30.4-64-1-95.5 2-81.2-8.8 13.6-10.4 141.7-57.6 198-130.2z"/>
                                <path class="line3 _line" d="M1665.6 1170.4c-20.4-.2-40-1-58.2-2.5l2.5-31.9c17.5 1.4 36.4 2.2 56 2.4l-.3 32zm21.1 0l-.4-32c18.2-.2 37.2-1 56.4-2.2l2 32c-19.7 1.2-39.2 1.9-58 2.2zm79-3.8l-2.5-31.9c18.7-1.5 37.6-3.5 56.2-5.9l3.9 31.8c-19.1 2.3-38.5 4.4-57.6 6zm-179.5-.7c-12.3-1.4-24-3.2-34.8-5.2-7.7-1.5-15.5-3-23-4.6l6.3-31.4c7.3 1.5 14.8 3 22.3 4.5 10.1 1.9 21.1 3.6 32.7 4.9l-3.5 31.8zm258-8.3l-4.4-31.7c19-2.8 37.7-6 55.7-9.5l5.9 31.5c-18.5 3.5-37.7 6.8-57.2 9.7zm-336.5-6.1c-19.5-4.6-37.9-9.5-56.3-15.1l8.9-30.7c17.7 5.4 35.4 10.1 54.3 14.6l-6.9 31.2zm414.4-8l-6.5-31.3c19.3-4.2 37.6-8.9 54.5-13.8l8.5 30.8c-17.6 5.1-36.6 9.9-56.5 14.3zm-490.8-13.5c-21-7-39.4-14-54.6-19.9l11.1-30c14.9 5.8 32.8 12.6 53.1 19.4l-9.6 30.5zm567.7-7.2l-9.5-30.5c13.5-4.4 26.1-9.1 37.3-13.9l12 29.6c-12.1 5.1-25.4 10.1-39.8 14.8zm-641.8-20.4c-17.6-6.9-34.9-13.6-52.8-19.2l9.1-30.6c18.9 5.9 36.7 12.8 54.9 19.9l-11.2 29.9zm-72.2-24.8c-14.7-3.9-33.2-8-55-12.3l5.9-31.5c22.4 4.4 41.6 8.7 56.9 12.7l-7.8 31.1zm-75.3-16.2c-17.2-3.2-36-6.4-56.2-9.7l4.9-31.7c20.3 3.3 39.4 6.6 56.8 9.8l-5.5 31.6zm-76.6-12.9c-32.5-5.1-56.3-8.3-56.5-8.3l4.1-31.8c.2 0 24.3 3.3 57.1 8.4l-4.7 31.7z" opacity=".4"/>
                                <path fill="#040000" d="M2030.2 849.6s-28.2 2.1-22.7 7.8c5.5 5.7 22 12 44.7 11.3 22.7-.7 38.5-3.5 32.4-11.3-6.2-7.8-54.4-7.8-54.4-7.8z" opacity=".2"/>
                                <path fill="#973b2f" d="M2038.4 826.3v31.1s3.3 1.8 6.9 1.8c3.7 0 6.9-1.8 6.9-1.8v-33.9l-13.8 2.8z"/>
                                <path fill="#00490c" d="M2024.7 746.4s2.8-13.4 19.3-12.7c16.5.7 14.5 21.2 14.5 21.2s13.8 3.5 15.8 17c2.1 13.4-3.4 13.4-3.4 13.4s15.1 22.6 0 28.3c0 0-4.1 12.7-11.7 4.9 0 0 0 19.1-18.6 12.7 0 0-22 11.3-24.8-12.7 0 0-15.8-1.4-16.5-16.3 0 0 .7-9.9 12.4-13.4 0 0-15.1-18.4-8.3-20.5s13.1 0 13.1 0-9.7-19.1 8.2-21.9z"/>
                                <path fill="#00571f" d="M2070.8 785.3s5.5 0 3.4-13.4-15.8-17-15.8-17 2.1-20.5-14.5-21.2c-16.5-.7-19.3 12.7-19.3 12.7-5.1.8-7.9 2.9-9.4 5.5 2.8 11.4 8.3 24.1 18.4 24.9 0 0-35.8 27.6-8.3 33.2 0 0 11.7 15.6 25.5 0 0 0 10 5.3 19.7 4.2.2-.4.3-.7.3-.7 15.2-5.6 0-28.2 0-28.2z"/>
                                <!-- 코라디움 -->
                                <g class="map_point01 _map_point">
                                    <defs>
                                    <path id="f" d="M2118.2 953.9v26.6s35.6-.4 49.9 15.5c0 0 29.8 3.6 29.8-13.1s-52.6-34.9-79.7-29z"/>
                                    </defs>
                                    <clipPath id="g">
                                    <use overflow="visible" xlink:href="#f"/>
                                    </clipPath>
                                    <!-- 이름표: 01코라디움 -->
                                    <g class="nametag _nametag01">
                                        <path d="M2609.4 918.8h-326c-3.3 0-6-2.7-6-6v-78.3c0-3.3 2.7-6 6-6h326c3.3 0 6 2.7 6 6v78.3c0 3.3-2.7 6-6 6z" class="_box" />
                                        <path d="M2354.2 872.8c0 13.2-6.2 19.8-14.5 19.8s-14.5-6.6-14.5-19.8c0-13.3 6.2-19.9 14.5-19.9s14.5 6.6 14.5 19.9zm-21 0c0 8.6 2.8 12.5 6.5 12.5s6.5-3.9 6.5-12.5-2.8-12.5-6.5-12.5-6.5 3.9-6.5 12.5zM2372.5 891.7h-8.4v-30.5h-6.7v-7.3h15.1v37.8zM2433.4 883.6v7.3h-40.1v-7.3h13.3v-6.4h7.9v6.4h18.9zm-10.1-9.9h-27.8v-7.3h27.8V861h-27.8v-7.3h35.7v26.9h-7.9v-6.9zM2455.1 883.4c3.8 0 7.8-.7 10.2-1.8v7c-2.4 1.2-6.7 1.9-10.5 1.9h-15.7v-22h14.7v-7.8H2439v-7h22.6v21.8H2447v8h8.1zm24.6-8.6h-4.6v17.5h-7.8v-39.6h7.8v14.5h4.6v7.6zM2507.8 860.8h-15.6v22.5h8.4c3.8 0 7.8-.7 10.2-1.8v7c-2.4 1.2-6.8 1.9-10.6 1.9h-16v-36.8h23.5v7.2zm13 31.5h-7.8v-39.6h7.8v39.6zM2551 875.6v2.2h13.8v14.6h-35.4v-14.6h13.8v-2.2h-16.1v-6h40.1v6H2551zm-22-15.4c0-5.7 7.6-8.1 18.1-8.1 10.4 0 18.1 2.4 18.1 8.1 0 5.7-7.6 8.1-18.1 8.1-10.4-.1-18.1-2.4-18.1-8.1zm28.1 23.4h-19.9v2.8h19.9v-2.8zm-19.7-23.4c0 1.5 3.8 2.2 9.7 2.2s9.7-.6 9.7-2.2c0-1.5-3.8-2.2-9.7-2.2s-9.7.7-9.7 2.2z" class="_text"/>
                                    </g>
                                    <!-- /.이름표: 01코라디움 -->
                                    <g clip-path="url(#g)">
                                    <path fill="#9aaf6b" d="M2118.2 952.8h4.5V992h-4.5z"/>
                                    <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2118.2 992v-39.2M2122.8 992v-39.2"/>
                                    <path fill="#e3ede7" d="M2118.2 952.8h4.5v12.6h-4.5z"/>
                                    <path fill="#9aaf6b" d="M2122.8 949.4h4.5v39.2h-4.5z"/>
                                    <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2122.8 988.6v-39.2M2127.3 988.6v-39.2"/>
                                    <path fill="#e3ede7" d="M2122.8 949.4h4.5V962h-4.5z"/>
                                    <path fill="#9aaf6b" d="M2127.3 952.8h4.5V992h-4.5z"/>
                                    <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2127.3 992v-39.2M2131.8 992v-39.2"/>
                                    <path fill="#e3ede7" d="M2127.3 952.8h4.5v12.6h-4.5z"/>
                                    <path fill="#9aaf6b" d="M2131.8 949.4h4.5v39.2h-4.5z"/>
                                    <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2131.8 988.6v-39.2M2136.3 988.6v-39.2"/>
                                    <path fill="#e3ede7" d="M2131.8 949.4h4.5V962h-4.5z"/>
                                    <path fill="#9aaf6b" d="M2136.3 952.8h4.5V992h-4.5z"/>
                                    <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2136.3 992v-39.2M2140.8 992v-39.2"/>
                                    <path fill="#e3ede7" d="M2136.3 952.8h4.5v12.6h-4.5z"/>
                                    <g>
                                        <path fill="#9aaf6b" d="M2140.8 956.1h4.5v39.2h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2140.8 995.3v-39.2M2145.3 995.3v-39.2"/>
                                        <path fill="#e3ede7" d="M2140.8 956.1h4.5v12.6h-4.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#9aaf6b" d="M2145.3 952.8h4.5V992h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2145.3 992v-39.2M2149.8 992v-39.2"/>
                                        <path fill="#e3ede7" d="M2145.3 952.8h4.5v12.6h-4.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#9aaf6b" d="M2149.8 949.4h4.5v39.2h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2149.8 988.6v-39.2M2154.3 988.6v-39.2"/>
                                        <path fill="#e3ede7" d="M2149.8 949.4h4.5V962h-4.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#9aaf6b" d="M2158.9 958.6h4.5v39.2h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2158.9 997.8v-39.2M2163.4 997.8v-39.2"/>
                                        <path fill="#e3ede7" d="M2158.9 958.6h4.5v12.6h-4.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#9aaf6b" d="M2154.3 959.1h4.5v39.2h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2154.3 998.3v-39.2M2158.9 998.3v-39.2"/>
                                        <path fill="#e3ede7" d="M2154.3 959.1h4.5v18.2h-4.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#9aaf6b" d="M2163.4 962h4.5v39.2h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2163.4 1001.2V962M2167.9 1001.2V962"/>
                                        <path fill="#e3ede7" d="M2163.4 962h4.5v18.2h-4.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#9aaf6b" d="M2167.9 963.2h4.5v39.2h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2167.9 1002.4v-39.2M2172.4 1002.4v-39.2"/>
                                        <path fill="#e3ede7" d="M2167.9 963.2h4.5v24.7h-4.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#9aaf6b" d="M2172.4 963.8h4.5v39.2h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2172.4 1003v-39.2M2176.9 1003v-39.2"/>
                                        <path fill="#e3ede7" d="M2172.4 963.8h4.5v24.7h-4.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#9aaf6b" d="M2176.9 962.5h4.5v39.2h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2176.9 1001.7v-39.2M2181.4 1001.7v-39.2"/>
                                        <path fill="#e3ede7" d="M2176.9 962.5h4.5v24.7h-4.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#9aaf6b" d="M2181.4 968.4h4.5v39.2h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2181.4 1007.6v-39.2M2185.9 1007.6v-39.2"/>
                                        <path fill="#e3ede7" d="M2181.4 968.4h4.5v24.7h-4.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#9aaf6b" d="M2185.9 968.4h4.5v39.2h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2185.9 1007.6v-39.2M2190.4 1007.6v-39.2"/>
                                        <path fill="#e3ede7" d="M2185.9 968.4h4.5v24.7h-4.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#9aaf6b" d="M2190.4 969h4.5v39.2h-4.5z"/>
                                        <path fill="none" stroke="#ebede9" stroke-miterlimit="10" stroke-width=".66" d="M2190.4 1008.2V969M2195 1008.2V969"/>
                                        <path fill="#e3ede7" d="M2190.4 969h4.5v24.7h-4.5z"/>
                                    </g>
                                    </g>
                                    <path fill="#ba9749" d="M1977.1 1016.8s29-64 140.4-59.6c0 0 69.6 1.2 74.3 23s-83.5 15.9-83.5 15.9 60 35.4 142.7 13.9c82.8-21.5 119.9-34.6 119.9-34.6s-71.6 17.1-126.5 3.6-78.9-33.4-137.3-27.4S2000 964.7 1964 1016l13.1.8z"/>
                                    <path fill="#949b91" d="M2147.5 972.1l-18-.9v11.5l18 1.9z"/>
                                    <path fill="#e3ede7" d="M2128.1 967.5s-3.1 5.4 6.6 7 12.7-2.4 12.7-2.4l-19.3-4.6z"/>
                                    <path fill="#28cece" d="M2136 1028.3s6.2 16.3 5.8 34.2c0 0 40.2 11.9 76.2 4.8 0 0 18.2-1.2 30.6-5.2 12.4-4 15.9-44.1 15.9-44.1s-107.2 15.5-128.5 10.3z"/>
                                    <defs>
                                    <path id="h" d="M2136 1028.3s6.2 16.3 5.8 34.2c0 0 40.2 11.9 76.2 4.8 0 0 18.2-1.2 30.6-5.2 12.4-4 15.9-44.1 15.9-44.1s-107.2 15.5-128.5 10.3z"/>
                                    </defs>
                                    <clipPath id="i">
                                    <use overflow="visible" xlink:href="#h"/>
                                    </clipPath>
                                    <g fill="none" stroke="#d5e9e7" stroke-miterlimit="10" stroke-width="1.272" clip-path="url(#i)">
                                    <path d="M2141.6 1033.4s6.8 10 6 36.2M2148.4 1031.1s5.8 7.5 4.3 38.5M2159 1034.8s-.9 29.7-.5 37.2M2164.7 1032.3s-1.2 29.4 0 39.7M2174.3 1031.1s-4.3 22.3-3.9 40.9M2178.2 1070.8s-1.2-19.5 1.9-37M2186.3 1072s.4-37.3 2.7-54.8M2194.8 1071.6s.4-38.5 1.2-42.5M2204.1 1069.6s.4-38.5 1.2-42.5M2213.4 1071.6s.4-38.5 1.2-42.5M2222.7 1069.2s.4-38.5 1.2-42.5M2233.5 1068s.4-38.5 1.2-42.5M2243.2 1066.9s.4-38.5 1.2-42.5M2252.5 1064.1s.4-38.5 1.2-42.5"/>
                                    </g>
                                    <path fill="#28cece" d="M2049.4 1001.7s-51.4-4-45.3 29.8c6.2 33.8 73.9 56.4 112.9 46.5 39.1-9.9-9.7-17.9-18.6-31.4s-1.9-20.3.8-27c2.8-6.8-49.8-17.9-49.8-17.9z"/>
                                    <path fill="#9aaf6b" d="M2025 990.6s5.4 15.1 1.5 25c-3.9 9.9-5 10.3.4 12.7 5.4 2.4 21.7 1.2 27.1-.8 5.4-2 5.4-4.4 5-6.4-.4-2-.4-11.1-2.7-13.9-2.3-2.7-31.3-16.6-31.3-16.6z"/>
                                    <path fill="#040000" d="M2008.6 972.8s-32.6 15.7-16.1 43.1 114.9 59.3 165.6 59.3c50.7 0 100.6-6.2 126.3-40.5 0 0 27.3-23.1 55.3-29.7 28-6.6 45.7-23.2 45.7-23.2s3.2-17.2-14.6-6.4-127.9 58.6-165.5 51.7c-37.7-6.9-154.3-31.9-154.3-31.9l-42.4-22.4z" opacity=".2"/>
                                    <defs>
                                    <path id="j" d="M2025 990.6s5.4 15.1 1.5 25c-3.9 9.9-5 10.3.4 12.7 5.4 2.4 21.7 1.2 27.1-.8 5.4-2 5.4-4.4 5-6.4-.4-2-.4-11.1-2.7-13.9-2.3-2.7-31.3-16.6-31.3-16.6z"/>
                                    </defs>
                                    <clipPath id="k">
                                    <use overflow="visible" xlink:href="#j"/>
                                    </clipPath>
                                    <path fill="#42423c" d="M2019.6 994.9s26.3 37 30.2 42.1c3.9 5.2 7-2.4 7-2.4s-30.6-43.7-32.9-55.6-4.3 15.9-4.3 15.9z" clip-path="url(#k)" opacity=".44"/>
                                    <path fill="#fff" d="M2042.4 952.2s-16.5-15.9-28.4-9.5c-11.9 6.4-12.4 21.7-1 37.6 11.3 15.9 56.9 47.1 113.5 51.9 67.7 5.8 82.5 6.4 113.5-.5 30.2-6.7 49.1-22.6 71.2-29.5 22.2-6.9 70.6-17.1 74.2-20.3 3.6-3.2 18.7-19.9 13.6-19.5-8.9.6-37.3 14.5-43.4 15.5s-65.5 4-83.6 12.5c-18 8.5-52.6 10.6-77.4 10.6-24.8-.1-104.2-8.1-152.2-48.8z"/>
                                    <path fill="#d8c571" d="M2042.5 952.1c-1.8-1.5-3.6-2.9-5.6-3.9-2.1-1.1-4.9-2.3-7.2-2.1-4.6.4-.7 4.9.5 6.8 1.2 1.7 2.4 3.4 3.8 4.9 2.7 3.2 5.8 6 9 8.6 6.4 5.1 13.6 9.1 21.1 12.4 13.3 6 27.4 9.6 41.4 13.3 28.1 7.4 62.8 8.9 91.7 8.9h2.1c-33.5.1-72.9-7.2-104.2-18.9-18.2-6.8-35.8-15.9-50.9-28.4-.5-.7-1.1-1.2-1.7-1.6z"/>
                                    <path fill="#dcd1a3" d="M2225.2 999.8c-9.6.7-19.3 1.1-27.9 1.1 16.8-.1 24.8-.5 27.9-1.1z"/>
                                    <path fill="none" stroke="#5ee5e5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.545" d="M2029.7 946s-9.7.7 13.3 20.2c23 19.6 85.3 35.8 164.2 34.7 0 0 41.3-.2 68.3-12 0 0 14.2-4.3 21.6-4.7"/>
                                    <path fill="#42423c" d="M2032.4 985.1s-2.3 3.7-1.3 8.2l10.1 5.6 1.8-5.8-10.6-8zM2050.9 995.2l-1 6.9 7.2 2.6 2.4-5.5zM2070.5 1005l-1 4.5 9.5 2.1.3-4.2zM2095.8 1010l-.5 7.5 8.8.7.2-6zM2123.4 1020.1l-.3 6.9 7.5.8.5-6.6zM2140.9 1024.6l.7 8.8 17.4 1.4-.3-8.9zM2180.4 1028.8s0 4-.3 5 11.3.8 11.3.8l-.3-4.8-10.7-1z"/>
                                </g>
                                <!-- /.코라디움 -->
                                <!-- 지상지원시설 -->
                                <g class="map_point02 _map_point">
                                    <path fill="#669c4a" d="M969.2 389.3s-71.5-23.3-105.2 0-146.2 39.6-150.6 92.8S749.8 633.3 858 661.4s412.4 31.9 432.3 31.6c19.9-.3 115.2-4 140.6-11.5 25.5-7.6 110.5-76.1 120.3-90.6 19.4-28.7 21-62.7 112-85.4 48.8-12.2-349.1-173.9-349.1-173.9l-344.9 57.7z"/>
                                    <path fill="#b6a67c" d="M778.1 410s-99.3 24.4-52.1 114.2c38.7 73.5 435.4 98.4 487.5 98.8 52 .4 232.1 22.5 310.4-11 46.3-19.8 27.2-39.7 78.1-70.9 10-6.2-578.8-171.9-583.4-174.7L778.1 410z"/>
                                    <path fill="#e1d39c" d="M1264.9 263c-88.6-6.8-185 25.5-265.1 51.3-72.4 23.3-39.7 34.3-77.5 32.8S859.9 336.9 792 385s-83.5 71-73 97.4 91.6 56.8 164 70.7 410.1 50.9 533.8 33.8 144.4-21.2 185.1-46c40.7-24.8 228.3-68.7 173.9-91.9-95.6-40.9-193-76.8-290.3-113.2-49.4-18.5-98.7-37.1-147.8-56.6-23.2-9.2-47.6-14.3-72.8-16.2z"/>
                                    <path fill="#a5ce6b" d="M1284.6 373.6s-12-13.9 19.8-21.9c31.9-8.1 72.2 11.5 72.2 11.5l-79.8 27.2-12.2-16.8z"/>
                                    <path fill="#fff" d="M1402.3 338.5l-50.8-26.2v-20.9l50.8 19.6z"/>
                                    <path fill="#e2e2e2" d="M1448.2 305.5v24.2l-45.9 8.8V311z"/>
                                    <path fill="#64b27c" d="M1448.2 305.3l-60.3-16.4-36.4 2.5 50.8 19.6z"/>
                                    <path fill="#fff" d="M1387.3 294.5l32.3 8.8-16.6 2.1-26.2-10.1 10.5-.8m.6-5.6l-36.3 2.5 50.8 19.7 45.9-5.7-60.4-16.5z"/>
                                    <path fill="#64b27c" d="M1568.4 332.9l-100.2-26.2-125.7 15.5 71.5 37.7z"/>
                                    <path fill="#fff" d="M1414 415.2l-71.5-54.1v-38.9l71.5 37.7z"/>
                                    <path fill="#889ba7" d="M1406.2 400.7l-63.7-44.9v-12l64.4 35.7z"/>
                                    <path fill="#e2e2e2" d="M1568.4 333.1v48.7L1414 415.2v-55.3z"/>
                                    <path fill="#fff" d="M1467.8 312.3l74.6 19.5-127.5 22.3-54.2-28.6 107.1-13.2m.4-5.6l-125.7 15.6L1414 360l154.4-27-100.2-26.3zM1474.7 452.3l-51.2-33.8v-31.3l51.2 27.1z"/>
                                    <path fill="#433e64" d="M1468.3 424.4l-44.8-25.5v-5.1l44.8 25.4z"/>
                                    <path fill="#719ecd" d="M1474.7 452.3l-51.2-33.8v-8.3l51.2 28.7z"/>
                                    <path fill="#e2e2e2" d="M1617.8 382.8v32.7l-143.5 36.8v-38z"/>
                                    <path fill="#64b27c" d="M1617.8 382.7l-74.3-22.8-120.4 27.3 51.2 27.1z"/>
                                    <path fill="#fff" d="M1543.3 365.7l52.7 16.1-120.9 26.6-36.2-19.1 104.4-23.6m.2-5.8l-120.3 27.3 51.2 27.1 143.5-31.6-74.4-22.8z"/>
                                    <g>
                                        <path fill="#fff" d="M1663.3 505.4l-101.9-55.7 1.6-63.5 100.3 44.2z"/>
                                        <path fill="#889ba7" d="M1663.3 463.9l-100.9-51.3.3-12.3 100.6 46.3zM1663.3 492l-101.7-53.8.3-12.3 101.4 51.5z"/>
                                        <path fill="#e2e2e2" d="M1733.1 410.2l-1.6 58.5-68.2 36.7v-75z"/>
                                        <path fill="#889ba7" d="M1732.7 423.2l-.3 12.9-69.1 27.8v-17.4zM1732.1 447.8l-.3 11.1-68.5 33v-14.4z"/>
                                        <path fill="#64b27c" d="M1733.1 409.9l-114.6-37.7-55.5 14 100.3 44.2z"/>
                                        <path fill="#fff" d="M1618.3 378l96.1 31.6-50.8 14.9-83.6-36.9 38.3-9.6m.2-5.8l-55.5 13.9 100.2 44.3 69.8-20.5-114.5-37.7z"/>
                                        <use xlink:href="#reuse-0"/>
                                        <use xlink:href="#reuse-0"/>
                                        <path fill="#fff" d="M1621.5 427l.6.3v2.9l2.5 1.2v.9l-3.2-1.7z"/>
                                        <path fill="#433e64" d="M1635.6 437.4l-3.2-1.6.1-3.7 3.1 1.4z"/>
                                        <path fill="#fff" d="M1632.5 432.1l.6.3v2.9l2.5 1.3v.8l-3.2-1.6z"/>
                                        <g>
                                        <path fill="#433e64" d="M1647.3 442.7l-3.2-1.6.1-3.7 3.1 1.5z"/>
                                        <path fill="#fff" d="M1644.2 437.4l.6.3v2.9l2.5 1.3v.8l-3.2-1.6z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <path fill="#fff" d="M1533.1 507.1l-62-44.3v-38.9l62 34.4z"/>
                                        <path fill="#e2e2e2" d="M1595 436.4v42.2l-61.9 28.5v-48.8z"/>
                                        <path fill="#64b27c" d="M1595 436.2l-68.4-27.9-55.5 15.6 62 34.4z"/>
                                        <path fill="#fff" d="M1526.3 414.2l53.1 21.7-45.9 16.4-48-26.7 40.8-11.4m.3-5.9l-55.5 15.6 61.9 34.4 61.9-22.1-68.3-27.9z"/>
                                    </g>
                                    <g>
                                        <path fill="#fff" d="M1472.8 456.9l-23.7-16.4v-22.6l23.7 14.8z"/>
                                        <path fill="#889ba7" d="M1472.8 450.3l-23.7-16.4v-11l23.7 14.7z"/>
                                        <path fill="#e2e2e2" d="M1505.9 421.7v21.4l-33.1 13.8v-24.2z"/>
                                        <path fill="#64b27c" d="M1505.9 421.5l-25.2-10.9-31.6 7.3 23.7 14.8z"/>
                                        <path fill="#fff" d="M1480.3 414.4l15.3 6.6-22.4 7.5-14.6-9.1 21.7-5m.4-3.8l-31.6 7.4 23.6 14.8 33.2-11.2-25.2-11z"/>
                                    </g>
                                    <g>
                                        <path fill="#badef2" d="M1433 436.7l-14.1-10v-42.5l14.1 8.3z"/>
                                        <path fill="#fff" d="M1433 436.7l-14.1-10V417l14.1 8.3zM1443.3 389.3l-15-7.5-9.4 2.4 14.1 8.3z"/>
                                        <path fill="#9acdd0" d="M1443.3 389.3v41.4l-10.3 6v-44.2z"/>
                                        <path fill="#e2e2e2" d="M1443.3 422.1v8.6l-10.3 6v-11.4z"/>
                                    </g>
                                    <g>
                                        <path fill="#fff" d="M1588.6 538.5l-49.1-31.1v-29.1l49.1 24.6z"/>
                                        <path fill="#889ba7" d="M1588.6 532.4l-41.9-25.4v-10.8l41.9 22.1z"/>
                                        <path fill="#e2e2e2" d="M1644.1 477.7v29l-55.5 31.8v-35.6z"/>
                                        <path fill="#64b27c" d="M1644.1 477.5l-49.1-19.7-55.5 20.5 49.1 24.6z"/>
                                        <path fill="#fff" d="M1594.9 463.7l35.2 14.1-41.3 18.9-35.3-17.7 41.4-15.3m.1-5.9l-55.5 20.5 49.2 24.6 55.5-25.4-49.2-19.7z"/>
                                    </g>
                                    <g>
                                        <path fill="#badef2" d="M1500.3 497.5l-12.5-9.8v-58.6l12.5 8.2z"/>
                                        <path fill="#9acdd0" d="M1511.1 431.8v58.6l-10.8 7.1v-60.2z"/>
                                        <path fill="#fff" d="M1488.8 452.4l10.9 7.1 10.7-8.5-2.7-1.7-7.3 4.4-6.1-3.6zM1488.8 465.9l10.9 7.1 10.7-8.5-2.7-1.7-7.3 4.4-6.1-3.7zM1488.8 479.3l10.9 7.1 10.7-8.4-2.7-1.8-7.3 4.5-6.1-3.7z" opacity=".4"/>
                                        <g>
                                        <path fill="#9acdd0" d="M1523.9 427.8v11.8l-23.6 12v-14.3z"/>
                                        <path fill="#fff" d="M1523.9 427.8l-12.4-5.6-23.7 6.9 12.5 8.2z"/>
                                        </g>
                                    </g>
                                    <path fill="#fff" d="M1247.5 370.3v10.2l11.3 10.1c-.1 0-.4-12.6-11.3-20.3z"/>
                                    <g>
                                        <path fill="none" stroke="#b4b4b3" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.772" d="M1234.7 370.8l-31.9-30.6v23.5"/>
                                        <path fill="none" stroke="#b4b4b3" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.772" d="M1242.1 368.1l-33.1-28.9v23.6"/>
                                        <path fill="none" stroke="#b4b4b3" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.772" d="M1250.3 365.4l-35.1-26.9V362"/>
                                        <path fill="#a3794c" d="M1288.4 452.3l-56.5-54.8v-24.7l56.9 46.9z"/>
                                        <defs>
                                        <use xlink:href="#a"/>
                                        </defs>
                                        <path fill="#e2e2e2" d="M1347.2 403.8l-.9 31.2-57.9 17.3.4-32.6z"/>
                                        <path fill="#dedede" d="M1347.2 403.8l-60.4-43.1-54.9 12.1 56.9 46.9z"/>
                                        <path fill="#fff" d="M1285.7 365.9l49.7 35.8-45.4 12.4-46.8-38.6 42.5-9.6m1.1-5.5l-54.9 12.3 56.9 47 58.4-15.9-60.4-43.4z"/>
                                        <defs>
                                        <use id="b" xlink:href="#a"/>
                                        </defs>
                                        <clipPath id="c">
                                        <use overflow="visible" xlink:href="#b"/>
                                        </clipPath>
                                        <g fill="#bb9462" clip-path="url(#c)">
                                        <path d="M1285 414.9l-.7 35.6 4.1 1.8.4-36.1zM1278.4 409.4l-.8 35.5 4.1 1.9.4-36.2zM1271.7 403.8l-.7 35.6 4 1.8.4-36.2zM1265 398.3l-.7 35.5 4 1.9.5-36.2zM1258.3 392.7l-.7 35.6 4 1.8.5-36.2zM1251.6 387.1l-.7 35.6 4.1 1.9.4-36.2zM1244.9 381.6l-.7 35.5 4.1 1.9.4-36.2zM1238.3 376l-.8 35.6 4.1 1.8.4-36.1zM1231.6 370.5l-.7 35.5 4 1.9.4-36.2z"/>
                                        </g>
                                        <path fill="#433e64" d="M1271.4 428.3l-22.3-21.7v-9.8l22.5 19.7z"/>
                                        <path fill="#e2e2e2" d="M1250.6 398v8.2l20.9 20.1v2l-22.4-21.7v-9.8z"/>
                                        <path fill="#433e64" d="M1238.9 404.3l-5-4.9v-13.1l5.3 4.4z"/>
                                        <g>
                                        <path fill="#fff" d="M1302.5 463.6l-19.7-17.5v-19.6l19.7 16.9z"/>
                                        <path fill="#e2e2e2" d="M1341.3 432.3l-.6 18.8-38.2 12.5v-20.2z"/>
                                        <path fill="#dedede" d="M1341.3 432.1l-19.9-14.3-38.6 8.7 19.7 16.9z"/>
                                        <path fill="#fff" d="M1320.6 422.2l11.5 8.3-28.6 8.3-11.9-10.1 29-6.5m.8-4.4l-38.6 8.7 19.7 16.8 38.7-11.3-19.8-14.2z"/>
                                        </g>
                                        <path fill="#f5f6f6" d="M1274 379.8s-5.8-17.5-19.4-26.2l-18.4 4.1c15.5 10.6 15.9 28.6 15.9 28.6l21.9-6.5z"/>
                                    </g>
                                    <g>
                                        <path fill="#7e5532" d="M1170.3 557.9c.9 0 .9-1.4 0-1.4s-.9 1.4 0 1.4z"/>
                                    </g>
                                    <g>
                                        <ellipse cx="1041.9" cy="296.3" fill="#b0aeaf" opacity=".33" rx="7" ry="2"/>
                                        <path fill="#fcfbf6" d="M1012.4 362.8l1.2 30.7 70.7 2.9-.6-30.7z"/>
                                        <path fill="#fcfbf6" d="M1015.5 340.2l1.2 45.5 69.7 2.6.3-45.4z"/>
                                        <path fill="#dbdad7" d="M1015.5 340.2v3.8l71.2 2.2v-3.3z"/>
                                        <path fill="#719ecd" d="M1015.7 345.7l.1 10.1 9.3.6-.1-10.3z"/>
                                        <path fill="#608bb7" d="M1015.7 345.7l.1 1 9.2.6v-1.2z"/>
                                        <path fill="#608bb7" d="M1017.7 346.1h1.2v8.2h-1.2zM1021.7 346.8h1.2v8.2h-1.2z"/>
                                        <path fill="#719ecd" d="M1027.7 346.1l.2 10.1 9.2.6v-10.3z"/>
                                        <path fill="#608bb7" d="M1027.7 346.1l.1 1 9.2.6.1-1.2z"/>
                                        <path fill="#608bb7" d="M1029.7 346.5h1.2v8.2h-1.2zM1033.7 347.2h1.2v8.2h-1.2z"/>
                                        <path fill="#719ecd" d="M1039.7 346.5l.2 10.1 9.2.6v-10.3z"/>
                                        <path fill="#608bb7" d="M1039.7 346.5l.2 1 9.2.6v-1.2z"/>
                                        <path fill="#608bb7" d="M1041.7 346.9h1.2v8.2h-1.2zM1045.7 347.6h1.2v8.2h-1.2z"/>
                                        <path fill="#719ecd" d="M1051.8 346.9l.1 10 9.2.7.1-10.2z"/>
                                        <path fill="#608bb7" d="M1051.8 346.9l.1 1 9.2.7.1-1.2z"/>
                                        <path fill="#608bb7" d="M1053.686 355.554l.106-8.2 1.2.016-.106 8.2zM1057.653 356.265l.106-8.2 1.2.016-.106 8.2z"/>
                                        <path fill="#719ecd" d="M1063.8 347.3l.2 10.1 9.2.6-.1-10.3z"/>
                                        <path fill="#608bb7" d="M1063.8 347.3l.1 1 9.2.6v-1.2z"/>
                                        <path fill="#608bb7" d="M1065.8 347.7h1.2v8.2h-1.2zM1069.8 348.4h1.2v8.2h-1.2z"/>
                                        <path fill="#719ecd" d="M1075.8 347.7l.2 10.1 9.2.6v-10.3z"/>
                                        <path fill="#608bb7" d="M1075.8 347.7l.1 1 9.3.6v-1.2z"/>
                                        <path fill="#608bb7" d="M1077.8 348.1h1.2v8.2h-1.2zM1081.8 348.8h1.2v8.2h-1.2z"/>
                                        <path fill="#e2e2e2" d="M1102.1 281.9l-2.1 39.7-13.6 66.7.3-45.4z"/>
                                        <path fill="#608bb7" d="M1017.4 324.7v11.8l4.4-11.7zM1026.2 301.4l-.5 32.7 5.6-32.6z"/>
                                        <path fill="#64b27c" d="M1040.1 279.9l-2.7 6.5-5.3.1-5.8 14.9 5 .1-3.3 8.2h-4.9l-5.7 15 4.4.1-6.2 15.4 71.1 2.7 15.5-61z"/>
                                        <path fill="#fff" d="M1041.3 281.8l58.5 1.8-14.6 57.4-67-2.5 5.3-13 1-2.5-2.7-.1-1.9-.1 4.4-11.3h4.8l.5-1.1 3.4-8.2 1-2.5-2.7-.1-2.4-.1 4.4-11.3h5.3l.5-1.1 2.2-5.3m-1.2-1.9l-2.6 6.5h-5.4l-5.8 14.9 5 .1-3.4 8.2h-4.8l-5.8 14.9 4.5.1-6.3 15.4 71.1 2.7 15.5-61-62-1.8z"/>
                                        <path fill="#64b27c" d="M1086.4 356.9l-70.5-3.1-3.5 9 34.1 1.4-1.2 2.4 25 .8.9-2.2 12.5.5z"/>
                                        <g>
                                        <path fill="#fff" d="M1017.1 355.7l66.9 2.9-1.6 5.2-11.2-.5-1.3-.1-.5 1.2-.4 1-20.9-.7 1.1-2.4-2.8-.1-31.4-1.2 2.1-5.3m-1.2-1.9l-3.5 9 34.1 1.4-1.2 2.4 25 .8.8-2.2 12.6.5 2.7-8.8-70.5-3.1z"/>
                                        </g>
                                        <path fill="#e2e2e2" d="M1084.3 396.4l2.1-8.1v-31.4l-2.7 8.8z"/>
                                        <path fill="#608bb7" stroke="#e1eff8" stroke-miterlimit="10" stroke-width=".87" d="M1015.7 369.8v5.2l3.4.3V370zM1021.1 370.2l.1 5.3 3.4.2v-5.3zM1026.6 370.6l.1 5.3 3.4.2v-5.3zM1032.3 370.7v5.3l3.4.2V371zM1037.7 371l.1 5.3 3.4.2v-5.3zM1015.7 378.9v5.3l3.4.2v-5.3zM1021.1 379.3l.1 5.3 3.4.2v-5.3zM1026.6 379.7l.1 5.3 3.4.2V380zM1032.3 379.9v5.2l3.4.2v-5.2zM1037.7 380.1l.1 5.3 3.4.2v-5.2zM1047.7 386.8v5.3l3.4.2.1-5.2zM1055.9 387.4v5.2l3.5.3v-5.3zM1065.3 387.9l.1 5.3 3.4.2v-5.3z"/>
                                        <path fill="#556796" d="M1045.3 366.8l.4 8.7 24.3 1-.2-8.7z"/>
                                        <g>
                                        <ellipse cx="1048.1" cy="307" fill="#75706e" rx="7.6" ry="2.3"/>
                                        <path fill="#75706e" d="M1047.9 297.3c-.5-.5-1.9-.8-3.5-.8s-3 .3-3.5.8h-.2c-.3.3 0 9.7 0 9.7 0 .6 1.7 1.2 3.7 1.2s3.7-.5 3.7-1.2v-9.7h-.2z"/>
                                        <path fill="#9e9c9c" d="M1048.1 307v-8.8h-.1c-1.7 0-3 .3-3.5.8h-.2c-.2.3-.1 7.1 0 9.1h.1c2 .1 3.7-.4 3.7-1.1z"/>
                                        <ellipse cx="1044.2" cy="299.2" fill="#9e9c9c" rx="7.5" ry="2.3"/>
                                        <ellipse cx="1044.2" cy="298.6" fill="#fff" rx="7.5" ry="2.3"/>
                                        </g>
                                        <g>
                                        <path fill="#fcfbf6" d="M1031.6 391.1l-6.9 15.6v20.9l7.8.3v18.8l37.3 1.4 8.3-34.6v-20.9z"/>
                                        <path fill="#64b27c" d="M1031.6 391.1l-6.9 15.6 12.2.3-4.4 18.8 37.3 1.4 8.3-34.6z"/>
                                        <path fill="#fff" d="M1032.7 393l43 1.3-7.3 30.9-33.6-1.3 3.9-16.5.5-2.2-2.3-.1-9.5-.3 5.3-11.8m-1.1-1.9l-6.8 15.6 12.2.4-4.4 18.7 37.3 1.4 8.2-34.6-46.5-1.5z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <path fill="#fcfbf6" d="M879.2 417.8v20.3l110.1 5.2 8.4-23.9v-19.2L891.3 396z"/>
                                        <path fill="#64b27c" d="M989 423.2l-109.8-5.4 12.1-21.8 106.4 4.2z"/>
                                        <path fill="#fff" d="M892.4 397.9l102.7 4-7.3 19.7-105.6-5.5 10.2-18.2m-1.1-1.9l-12.2 21.9 109.9 5.7 8.6-23.4-106.3-4.2z"/>
                                        <path fill="#556796" d="M885.4 424.2l11 .7.3 8.2-11.3-.8zM898.3 424.9l11 .7.2 8.2-11.2-.8zM919.8 426l11 .7.2 8.2-11.2-.8zM932.6 426.7l11.1.7.2 8.2-11.3-.8zM955.5 427.4l11 .7.2 8.2-11.2-.8zM968.3 428.1l11 .7.3 8.2-11.3-.8z"/>
                                    </g>
                                    <g>
                                        <path fill="#cba988" d="M1075.6 544.5l-234-12.3 31-63.7 227.8 10.1z"/>
                                        <path fill="#94c060" d="M1069 539.3l-218.5-11.5 27-55.2 212.6 9.5z"/>
                                        <defs>
                                        <path id="d" d="M1069 539.3l-218.5-11.5 27-55.2 212.6 9.5z"/>
                                        </defs>
                                        <clipPath id="e">
                                        <use overflow="visible" xlink:href="#d"/>
                                        </clipPath>
                                        <g fill="#73aa53" clip-path="url(#e)">
                                        <path d="M887.8 470.1l-34.6 71.3 13.9.5 34.5-73.6zM914.2 470.1l-34.6 71.3 13.9.5 34.5-73.6zM940.6 470.1L906 541.4l13.9.5 34.5-73.6zM967 470.1l-34.5 71.3 13.8.5 34.5-73.6zM993.4 470.1l-34.5 71.3 13.9.5 34.4-73.6zM1019.9 470.1l-34.6 71.3 13.9.5 34.5-73.6zM1046.3 470.1l-34.6 71.3 13.9.5 34.5-73.6zM1074.4 469.8l-30.7 73.1 13.8-.3 30.6-75.4z"/>
                                        </g>
                                        <ellipse cx="968" cy="504.9" fill="none" stroke="#edf4e3" stroke-miterlimit="10" stroke-width="1.001" rx="21.4" ry="8.6"/>
                                        <path fill="none" stroke="#edf4e3" stroke-miterlimit="10" stroke-width="1.001" d="M1048 516.3c-4-1.6-6.5-3.8-6.5-6.2 0-3.5 5.2-6.6 12.7-7.9M897.8 493c3.2 1.5 5.1 3.5 5.1 5.6 0 3.3-4.7 6.2-11.6 7.7M955 533.3l26.3-55.7"/>
                                        <path fill="none" stroke="#edf4e3" stroke-miterlimit="10" stroke-width="1.001" d="M872.2 483.4l30 1-15.6 30.9-29.8-1.3"/>
                                        <path fill="none" stroke="#edf4e3" stroke-miterlimit="10" stroke-width="1.001" d="M867.7 492.1l12.1.4-6.2 12.5-12.1-.5M1087.4 495.6l-30-1-13.8 32.1 29.5 1.1"/>
                                        <path fill="none" stroke="#edf4e3" stroke-miterlimit="10" stroke-width="1.001" d="M1083 503.7l-12.1-.4-5 13.8 12.1.5M872.2 483.4l30 1-15.6 30.9"/>
                                        <path fill="none" stroke="#edf4e3" stroke-miterlimit="10" stroke-width="1.001" d="M872.2 483.4l30 1-15.6 30.9"/>
                                        <g fill="#c6e2e6">
                                        <path d="M864.5 495.5l2.8.1 3-5.9h-2.9z" opacity=".7"/>
                                        <path d="M867.5 489.6l-2.3 6.9 5.5.4-.4-7.2z" opacity=".7"/>
                                        <path d="M864.5 495.5l-2.3 6.9 5.5.4-.4-7.2z" opacity=".7"/>
                                        <path d="M865.2 496.5l-3 5.9 2.3-6.9 3-5.9z" opacity=".7"/>
                                        </g>
                                        <g fill="#c6e2e6">
                                        <path d="M1075.8 507.1l-3 .1 2.3-6.5h3.1zM1075.8 507.1l2.5 8.2-6-.3.5-7.8z" opacity=".7"/>
                                        <path d="M1078.2 500.6l2.5 8.3-6-.3.4-7.9z" opacity=".7"/>
                                        <path d="M1078.2 500.6l-2.4 6.5 2.5 8.2 2.4-6.4z" opacity=".7"/>
                                        </g>
                                        <path fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2.131" d="M885.6 469.7l199.4 8.6M887.7 465.7l199.4 8.6M889.8 461.7l199.4 8.6"/>
                                        <path fill="#bb9462" d="M1004.3 476.3l-47.4-2.1 7-12.6 45 1.9z"/>
                                    </g>
                                    <g>
                                        <ellipse cx="1150.5" cy="521.3" fill="#9e9c9c" rx="24.4" ry="11.3"/>
                                        <path fill="#fff" d="M1130.2 523.3h-1.3c-.4 0-.7-.3-.7-.7v-25.2c0-.4.3-.7.7-.7h1.3c.4 0 .7.3.7.7v25.2c0 .4-.3.7-.7.7zM1152.5 529.6h-1.3c-.4 0-.7-.3-.7-.7v-25.2c0-.4.3-.7.7-.7h1.3c.4 0 .7.3.7.7v25.2c0 .4-.3.7-.7.7zM1172.1 519.8h-1.3c-.4 0-.7-.3-.7-.7v-25.2c0-.4.3-.7.7-.7h1.3c.4 0 .7.3.7.7v25.2c0 .4-.3.7-.7.7z"/>
                                        <ellipse cx="1150.5" cy="496.8" fill="#b0aeaf" rx="24.4" ry="11.3"/>
                                        <ellipse cx="1150.5" cy="495.2" fill="#fff" rx="24.4" ry="11.3"/>
                                        <path fill="#5faaa3" d="M1172.6 493.1c-1.3-7.1-8.1-13.7-14.1-16.9-4.5-2.4-9.8-3.1-14.5-1.1-6.8 2.8-15.8 11.1-15.8 19.3 0 5.7 10 10.3 22.3 10.3s22.3-4.6 22.3-10.3c0-.4-.1-.9-.2-1.3z"/>
                                    </g>
                                    <g>
                                        <path fill="#fff" d="M1307.6 563.6l-69-54.5-12 1.6 67.6 56.1zM1326 556.2l-69-54.6-12 1.7 67.5 56.1zM1291.2 569.8l-69-54.5-12 1.6 67.5 56.1z"/>
                                        <path fill="#cba988" d="M1298.8 555.9l-25.2-18.1-12 1.7 23.7 19.6zM1252.9 526.9l-25.2-18.1-12 1.7 23.8 19.6zM1267.9 563.1l-25.2-18.1-12 1.7 23.7 19.6z"/>
                                    </g>
                                    <g>
                                        <path fill="#cba988" d="M1183.1 436.8l-22.1-15.9-10.5 1.5 20.8 17.2z"/>
                                        <path fill="#fff" d="M1210.8 469.7l-60.5-47.8-10.5 1.4 59.2 49.2zM1226.9 463.2l-60.5-47.8-10.5 1.4 59.2 49.2zM1196.4 475.1l-60.5-47.8-10.5 1.5 59.2 49.1z"/>
                                        <path fill="#cba988" d="M1148.6 446.1l-22.1-15.9-10.5 1.5 20.8 17.2zM1195.2 464.8l-22-15.9-10.6 1.5 20.9 17.2z"/>
                                    </g>
                                    <g>
                                        <path fill="#64b27c" d="M1217.7 297.3l135-20.2"/>
                                        <path fill="#fff" d="M1217.7 328.7l-40.8-31.8-.2-26.7 41 27.1z"/>
                                        <path fill="#e2e2e2" d="M1222.4 328l-4.7.7v-31.4l4.7-.7zM1244.9 323.6l-4.7.7V294l4.7-.8zM1267.4 319.2l-4.7.8v-29.4l4.7-.7zM1289.9 314.8l-4.7.8v-28.3l4.7-.8zM1312.4 310.5l-4.7.7v-27.4l4.7-.7zM1334.9 306.1l-4.7.7v-26.3l4.7-.7zM1348.5 303l4.2-.6v-25.3l-4.2.6z"/>
                                        <path fill="#fff" d="M1240.2 324.3l-3.5-2.7v-27.1l3.5-.5zM1262.7 320.1l-3.5-2.8v-27.1l3.5-.5zM1285.2 315.6l-3.5-2.7v-27.1l3.5-.5zM1307.7 311.2l-3.5-2.8v-27.1l3.5-.5zM1330.2 306.8l-3.6-2.8v-27.1l3.6-.5zM1348.5 303l-3.6-2.7v-22l3.6-.5z"/>
                                        <path fill="#64b27c" d="M1278.9 258.3l-11.5 1.4 10.1 3.1-45.9 6.9-10.3-4.5-44.6 5 41 27.1 135-20.2z"/>
                                        <path fill="#e2e2e2" d="M1217.7 303.3l135-20.2v-6l-135 20.2zM1267.4 259.7v5.7l10.1-2.6z"/>
                                        <g>
                                        <path fill="#fff" d="M1289.3 265.6l40.9 10.4-111.5 16.7-29.4-19.4 31.2-3.5 9.3 4 1.2.5 1.3-.2 45.9-6.9 11.1-1.6m-10.4-7.3l-11.5 1.4 10.1 3.1-45.9 6.9-10.3-4.5-44.6 5 41 27.1 135-20.2-73.8-18.8z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <path fill="#fff" d="M1138.4 348.5l-22.1-29.6v-20.3l22.1 22.1z"/>
                                        <path fill="#433e64" d="M1132.1 327.1l-2.1-2.9v-4.7l2.2 2.7z"/>
                                        <path fill="#e2e2e2" d="M1130 319.5l.6.8v3.6l1.5 2.2v1l-2.1-2.9z"/>
                                        <path fill="#433e64" d="M1126.6 320.9l-2.1-2.9v-4.7l2.1 2.7z"/>
                                        <path fill="#e2e2e2" d="M1124.5 313.3l.6.8v3.6l1.5 2.2v1l-2.1-2.9zM1184.2 312.5v24.3l-45.8 11.7v-27.8z"/>
                                        <path fill="#433e64" d="M1164.7 323.9v4.7l-4.4 1.1v-4.9z"/>
                                        <path fill="#fff" d="M1164.7 323.9l-.8.2v3.9l-3.6.7v1l4.4-1.1v-4.7z"/>
                                        <path fill="#64b27c" d="M1184.2 312.5l-29.1-19.8-38.8 5.9 22.1 22.1z"/>
                                        <g>
                                        <path fill="#fff" d="M1153.8 298.5l16 10.9-29.6 5.3-12.3-12.3 25.9-3.9m1.3-5.8l-38.8 5.9 22.1 22.1 45.8-8.2-29.1-19.8z"/>
                                        </g>
                                    </g>
                                    <g fill="#b5a67a">
                                        <path d="M871.3 376.2s-32.6 22-31.9 24.6 57.4-5 57.4-5 9.2-2.1 2.2-6.9-27.7-12.7-27.7-12.7zM849.9 366.2s-32.9 12.5-35.1 13.9 23.7 13.7 23.7 13.7 27.1-14.7 27.7-17.3c.6-2.6-16.3-10.3-16.3-10.3zM808.8 383.1s-35.1 18.3-37.4 24c-2.3 5.8 29.1 1.2 29.1 1.2s21.9-1.4 26.2-3.9c4.3-2.5 8.7-3.8 7.4-6.5-1.2-2.7-21.2-15-25.3-14.8zM759.9 417.7s2.1-2.3 17.5-4c15.4-1.8 28.4-3.7 31-1.5s.6 10.8-3.4 14.9c-4.1 4.1-6.1 10.3-7.8 10.7-1.7.4-14.6-4.3-23.2-9.2-8.6-4.9-16.2-8.7-14.1-10.9zM755.8 426.1s-7 6.2-10.5 15.6c-3.4 9.4-3.4 14.6-2.2 16.4 1.1 1.9 35.2 11.3 35.2 11.3s13.1-18.9 14-22.6 1.5-6.7-4.7-9.4-30.1-14.8-31.8-11.3zM744.4 464.4s-4.5-3.5-6.2 5.2c-1.7 8.7-.9 20.3 8.5 26.9 9.4 6.6 28 1.7 37.6-.3 9.5-2 32.3-5.9 33-7.7.7-1.8 4.5-4.4-6.1-7.4-10.5-3.1-66.8-16.7-66.8-16.7zM831.1 409.8s-14.1 4.1-13.8 8.5c.2 4.4 52.5 16.3 52.5 16.3s18.3-27.9 17.5-29.7c-.9-1.8-52.9 2.5-56.2 4.9zM811.8 424.4s-26.4 41.3-26.3 43.7 52.1 16.6 52.1 16.6 27-42.7 26.9-44.7c-.2-2.1-47.7-18.3-52.7-15.6z"/>
                                    </g>
                                    <g>
                                        <path fill="#fff" d="M1409.8 572.4l-69.1-62.2v-41.1l69.1 59z"/>
                                        <path fill="#719ecd" d="M1360.1 521.4l-13.1-12v-8.8l13.1 11.3zM1379.2 538.5l-13.1-12v-8.8l13.1 11.3z"/>
                                        <path fill="#e2e2e2" d="M1487.3 502.4v40.5l-77.5 29.5v-44.3z"/>
                                        <path fill="#719ecd" d="M1443.2 533.1v11l-12.2 4.3v-10.9zM1470.6 522v11l-12.2 4.4v-10.9z"/>
                                        <path fill="#64b27c" d="M1487.3 502.4l-78.3-49.8-68.3 16.5 69.1 59z"/>
                                        <path fill="#fff" d="M1408.1 458.6l66.4 42.2-63.4 21.1-58.5-49.9 55.5-13.4m.9-6l-68.3 16.5 69.1 59 77.4-25.8-78.2-49.7z"/>
                                        <g>
                                        <path fill="#fff" d="M1412 524.8l-26.2-22.2v-10.9L1412 511z"/>
                                        <path fill="#e2e2e2" d="M1480.3 490v12.2l-68.3 22.6V511z"/>
                                        <path fill="#64b27c" d="M1480.3 490l-29.7-16.8-64.8 18.5L1412 511z"/>
                                        <path fill="#fff" d="M1450 478.5l17.9 10.2-55 16.9-16.2-11.9 53.3-15.2m.6-5.3l-64.8 18.5L1412 511l68.2-21-29.6-16.8z"/>
                                        </g>
                                        <g>
                                        <path fill="#badef2" d="M1357.6 527.1l-8.9-8-.1-43.5 9 7.9z"/>
                                        <path fill="#fff" d="M1349.4 494l7.7 5 7.6-6-1.8-2.3-5.2 4.2-4.4-2.6zM1349.4 503.5l7.7 5.1 7.6-6-1.8-1.2-5.2 3.1-4.4-2.6zM1349.4 513.1l7.7 5.1 7.6-6-1.8-1.2-5.2 3.1-4.4-2.6z" opacity=".4"/>
                                        <g>
                                            <path fill="#fff" d="M1374.4 478.2l-8.9-5.8-16.9 3.2 9 7.9z"/>
                                        </g>
                                        <path fill="#e2e2e2" d="M1374.4 478.2v8.1l-16.8 6.1v-8.9z"/>
                                        <path fill="#e2e2e2" d="M1365.3 485.7V522l-7.7 5.1v-43.6z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <path fill="#115f32" d="M1282.3 243.6c-4.5-2.6-10.5-2.3-14.8.7-4.3 2.9-6.6 8.4-5.7 13.5-1.7-.9-4-.4-5.1 1.2-1.1 1.5-.8 3.9.7 5.1-5.8.3-11 5-11.8 10.6-.8 5.6 2.8 11.6 8.2 13.5-.4 3.5 3.5 6.6 6.9 5.6-.3 5.1 5.8 7.9 10.9 9.2 7 1.8 14.2 3.4 21.3 2.2s14.1-5.7 16.1-12.5c2.7 3.1 6.8 6.5 10.5 4.6 2.9-1.5 3.4-5.6 1.9-8.4-1.5-2.8-4.4-4.7-7.1-6.4 3.9.4 7-3.9 6.5-7.7-.5-3.8-3.5-6.8-6.8-8.9-1.4-.9-2.9-1.7-3.8-3.1-.7-1.1-.9-2.5-1-3.9-1-7.5-3.5-15.5-9.7-20.1-6.2-4.6-16.8-3.6-19.9 3.3l2.7 1.5z"/>
                                        <path fill="#0c6e40" d="M1314.3 282.5c3.9.4 7-3.9 6.5-7.7s-3.5-6.8-6.8-8.9c-1.4-.9-2.9-1.7-3.8-3.1-.7-1.1-.9-2.5-1-3.9-1-7.5-3.5-15.5-9.7-20.1-5.5-4.1-14.5-3.8-18.6 1.3-.3.8-.6 1.5-.8 2.3l1.3.7c-.4-.2-.9-.4-1.4-.5-.7 2.5-.8 5.2-.4 7.7-2.3-1.2-5.5-.5-6.9 1.6-1.5 2.1-1.1 5.3.9 7-7.9.4-15 6.8-16.1 14.5-1.1 7.7 3.8 15.8 11.2 18.5-.5 4.7 4.9 9.1 9.5 7.7-.1 2 .5 3.7 1.5 5.2 4.4.8 8.8 1.1 13.2.4 7.1-1.2 14.1-5.7 16.1-12.5 2.7 3.1 6.8 6.5 10.5 4.6 2.9-1.5 3.4-5.6 1.9-8.4-1.5-2.9-4.4-4.7-7.1-6.4z"/>
                                        <ellipse cx="1284.7" cy="333.7" fill="#040000" opacity=".2" rx="27.1" ry="3.9"/>
                                        <path fill="#954730" d="M1276 331.4c-.1.7-.2 1.5.5 2 .4.3.8.4 1.3.5 2.1.4 12.6 1.4 11.6-3-1-4.6-1.5-9.2-1.8-13.8-.5-6.6-.3-13 3.1-18.9 1.6-2.7 3-5.5 4.4-8.4.5-1 .9-2 .8-3-.1-.5-1.3-2.7-2.1-1.8-.1.1-.1.2-.1.3-.8 2.3-1.7 4.5-3.1 6.5-.7 1-1.5 2-2.4 2.9-.4.4-2.9 2.1-2.9 2.4 0-2.9-.7-6-1-8.9-.2-1.7-.4-3.3-.6-5-.2-1.4 0-3.2-.7-4.5-1-1.8-1.9-1.1-3.6.1l-3.4 52.6z"/>
                                    </g>
                                    <g>
                                        <path fill="#0f7357" d="M1154.8 286.7c5.5-2.3 12.2-1 16.6 3.1s6.1 10.9 4.3 16.7c2-.8 4.5.2 5.5 2.2s.3 4.7-1.5 5.9c6.4 1.3 11.5 7.6 11.6 14.3s-5 13.1-11.4 14.5c-.1 4.1-5 7.2-8.7 5.5-.5 6-7.8 8.4-13.7 9.1-8.1 1-16.5 1.7-24.3-.8-7.8-2.5-15-8.9-16.1-17.2-3.5 3.2-8.7 6.5-12.5 3.7-3-2.2-2.9-7.1-.8-10.2 2.1-3.1 5.6-4.8 9-6.4-4.4-.1-7.2-5.7-6.1-10 1.2-4.4 5-7.5 9-9.4 1.7-.8 3.5-1.5 4.7-3 1-1.2 1.4-2.8 1.8-4.4 2.3-8.7 6.4-17.6 14-22s19.4-1.6 21.8 7.1l-3.2 1.3z"/>
                                        <path fill="#13876f" d="M1112.8 327.3c-4.4-.1-7.2-5.7-6.1-10 1.2-4.4 5-7.5 9-9.4 1.7-.8 3.5-1.5 4.7-3 1-1.2 1.4-2.8 1.8-4.4 2.3-8.7 6.4-17.6 14-22 6.8-3.9 16.9-2.1 20.7 4.4.2.9.4 1.9.5 2.9l-1.6.6c.5-.2 1.1-.3 1.6-.4.4 3.1.1 6.2-.8 9.1 2.8-1.1 6.2.3 7.6 3 1.3 2.7.4 6.4-2.1 8 8.8 1.8 15.8 10.4 15.9 19.6.1 9.2-6.8 18-15.6 19.9-.2 5.6-6.9 9.9-11.9 7.5-.2 2.3-1.1 4.2-2.5 5.8-5.1.2-10.1-.1-14.9-1.6-7.8-2.5-15-8.9-16.1-17.2-3.5 3.2-8.7 6.5-12.5 3.7-3-2.2-2.9-7.1-.8-10.2 2.2-3.1 5.7-4.8 9.1-6.3z"/>
                                        <ellipse cx="1146.7" cy="391.6" fill="#040000" opacity=".2" rx="24.4" ry="5.2"/>
                                        <path fill="#954730" d="M1154 388.8c.1.8.2 1.8-.6 2.4-.4.3-1 .5-1.5.6-2.4.5-14.3 1.5-13.1-3.7 1.2-5.4 1.8-10.9 2.2-16.4.6-7.8.5-15.4-3.3-22.4-1.7-3.3-3.4-6.6-4.9-10-.5-1.1-1-2.4-.9-3.6.1-.6 1.5-3.2 2.4-2.1.1.1.1.2.2.3.8 2.8 1.9 5.3 3.4 7.7.8 1.2 1.7 2.4 2.7 3.4.4.4 3.2 2.5 3.2 2.9 0-3.4.8-7.1 1.2-10.5.2-2 .5-3.9.7-5.9.2-1.6 0-3.8.8-5.3 1.1-2.1 2.2-1.3 4.1.2l3.4 62.4z"/>
                                    </g>
                                    <g>
                                        <path fill="#040000" d="M1227.4 464.6s-20.3 4.8-13.5 8 22.9 7 38.6 4.3c15.6-2.7 11.5-7.5 6.8-9.6-4.8-2.1-23.4-5.2-31.9-2.7z" opacity=".2"/>
                                        <path fill="#954730" d="M1234.2 447s-1 20.3 0 21.9c1 1.6 5.2 7.5 10.9 0l-2.6-19.8-8.3-2.1z"/>
                                        <path fill="#0c6e40" d="M1237.8 342.1s-4.7-9.1 2.6-11.8c7.3-2.7 4.7 5.9 4.7 5.9s12 7.5 3.6 19.3c0 0 10.6 12.3 2.9 23.6 0 0 8 3.2 8 9.6 0 6.4-6.3 9.6-6.3 9.6s9.4 2.7 8.9 11.2c-.5 8.6-5.2 9.6-5.2 9.6s12 3.2 5.2 12.3c-6.8 9.1-12 9.1-12 9.1s1 11.2-7.9 8.6c-8.9-2.7-6.2-5.9-6.2-5.9s-17.8 9.1-19.4-9.6c0 0 0-8.6 10.9-11.8 0 0-19.8-12.3-3.6-28.9 0 0-8.4-20.7 10.4-24.6.3 0-11.7-18.2 3.4-26.2z"/>
                                        <path fill="#0c5a30" d="M1234.7 368.3c-18.9 4-10.4 24.6-10.4 24.6-16.2 16.6 3.6 28.9 3.6 28.9-10.9 3.2-10.9 11.8-10.9 11.8 1.6 18.7 19.4 9.6 19.4 9.6s-2.7 3.2 6.2 5.9 7.9-8.6 7.9-8.6 5.2 0 12-9.1c0 0-26.1 9.6-30.2 0-4.2-9.6 0-13.4 0-13.4s-11.5-13.9-4.2-20.9c0 0-1.6-16.6 6.8-16.6 0 0-4.2-10.2 3.6-13.4 0 0-4.8-5.4-4.8-21.9-8.3 9 1 23.1 1 23.1z"/>
                                    </g>
                                    <g>
                                        <path fill="#040000" d="M1257.9 508.1s-20.3 4.8-13.5 8c6.8 3.2 22.9 7 38.6 4.3 15.6-2.7 11.5-7.5 6.8-9.6-4.8-2.1-23.3-5.2-31.9-2.7z" opacity=".2"/>
                                        <path fill="#954730" d="M1264.7 490.5s-1 20.3 0 21.9 5.2 7.5 10.9 0l-2.6-19.8-8.3-2.1z"/>
                                        <path fill="#0c6e40" d="M1268.4 385.5s-4.7-9.1 2.6-11.8 4.7 5.9 4.7 5.9 12 7.5 3.6 19.3c0 0 10.6 12.3 2.9 23.6 0 0 8 3.2 8 9.6 0 6.4-6.3 9.6-6.3 9.6s9.4 2.7 8.9 11.2c-.5 8.6-5.2 9.6-5.2 9.6s12 3.2 5.2 12.3c-6.8 9.1-12 9.1-12 9.1s1 11.2-7.9 8.6c-8.9-2.7-6.2-5.9-6.2-5.9s-17.8 9.1-19.4-9.6c0 0 0-8.6 10.9-11.8 0 0-19.8-12.3-3.6-28.9 0 0-8.4-20.7 10.4-24.6.2.1-11.8-18.1 3.4-26.2z"/>
                                        <path fill="#0c5a30" d="M1265.2 411.8c-18.9 4-10.4 24.6-10.4 24.6-16.2 16.6 3.6 28.9 3.6 28.9-10.9 3.2-10.9 11.8-10.9 11.8 1.6 18.7 19.4 9.6 19.4 9.6s-2.7 3.2 6.2 5.9 7.9-8.6 7.9-8.6 5.2 0 12-9.1c0 0-26.1 9.6-30.2 0-4.2-9.6 0-13.4 0-13.4s-11.5-13.9-4.2-20.9c0 0-1.6-16.6 6.8-16.6 0 0-4.2-10.2 3.6-13.4 0 0-4.8-5.4-4.8-21.9-8.3 8.9 1 23.1 1 23.1z"/>
                                    </g>
                                    <g>
                                        <path fill="#040000" d="M1302.7 549s-20.3 4.8-13.5 8c6.8 3.2 22.9 7 38.6 4.3s11.5-7.5 6.8-9.6c-4.8-2.2-23.3-5.2-31.9-2.7z" opacity=".2"/>
                                        <path fill="#954730" d="M1309.5 531.3s-1 20.3 0 21.9 5.2 7.5 10.9 0l-2.6-19.8-8.3-2.1z"/>
                                        <path fill="#0c6e40" d="M1313.1 426.4s-4.7-9.1 2.6-11.8c7.3-2.7 4.7 5.9 4.7 5.9s12 7.5 3.6 19.3c0 0 10.6 12.3 2.9 23.6 0 0 8 3.2 8 9.6 0 6.4-6.3 9.6-6.3 9.6s9.4 2.7 8.9 11.2c-.5 8.6-5.2 9.6-5.2 9.6s12 3.2 5.2 12.3c-6.8 9.1-12 9.1-12 9.1s1 11.2-7.9 8.6c-8.9-2.7-6.2-5.9-6.2-5.9s-17.8 9.1-19.4-9.6c0 0 0-8.6 10.9-11.8 0 0-19.8-12.3-3.6-28.9 0 0-8.4-20.7 10.4-24.6.3 0-11.7-18.2 3.4-26.2z"/>
                                        <path fill="#0c5a30" d="M1310 452.6c-18.9 4-10.4 24.6-10.4 24.6-16.2 16.6 3.6 28.9 3.6 28.9-10.9 3.2-10.9 11.8-10.9 11.8 1.6 18.7 19.4 9.6 19.4 9.6s-2.7 3.2 6.2 5.9 7.9-8.6 7.9-8.6 5.2 0 12-9.1c0 0-26.1 9.6-30.2 0-4.2-9.6 0-13.4 0-13.4s-11.5-13.9-4.2-20.9c0 0-1.6-16.6 6.8-16.6 0 0-4.2-10.2 3.6-13.4 0 0-4.8-5.4-4.8-21.9-8.3 9 1 23.1 1 23.1z"/>
                                    </g>
                                    <g>
                                        <path fill="#040000" d="M927.5 371.8s-22.8 2.6-16 6.6 16.6 7.2 33.6 6.5 42.1-2.9 36.3-8.9c-5.7-6.2-40.3-6.9-53.9-4.2z" opacity=".2"/>
                                        <path fill="#954935" d="M940.4 332.8s1 11.8 0 18.8-2 20.1-5.1 21.7c0 0 4.8 6.1 16 4.8 0 0 4.8 1 8.2-2.6 0 0-4.8-12.1-2.7-18.5l15.3-31.6-5.4-4.5-15.6 26.5-.7-22.3-10 7.7z"/>
                                        <path fill="#13753f" d="M902.2 263.1s-10.9-12.6 4.5-14c15.3-1.4 18.3 0 18.3 0s2.5-16.7 23.3-9.3c0 0 15.8-5.1 10.9 8.4 0 0 16.3-.9 17.3 11.2 0 0 15.8 9.8 12.4 20.9S977 297 958.7 291.9l-4.5 4.2 2 4.7s30.7-4.2 37.6 7.9c0 0 1.5 11.2-9.4 7.4 0 0 1.5 18.6-12.4 12.1 0 0-10.4 4.7-11.4-4.2 0 0-3 5.1-6.9 0 0 0 .5 20.5-13.9 10.7 0 0-5.4 5.1-8.4-.9 0 0-2.5 10.9-11.4 3.6 0 0-18.3 6.7-16.3-11.5 0 0-17.8-2.8 4-16.3 0 0-15.3-8.8 5.4-14.4 0 0-23.1-.5-16.3-18.1.1-.1-16.8-14.5 5.4-14z"/>
                                        <path fill="#118447" d="M897 263.3c3.6 7.3 11.1 18.2 25.1 19.8 0 0-6.4 26 5.4 28.4 0 0 19.7 7.5 27.2-5.6 0 0 10.4 8.4 20.8-.9 0 0 9.5 9.7 18.4 5.3 0-.9-.1-1.6-.1-1.6-6.9-12.1-37.6-7.9-37.6-7.9l-1.9-4.4c-6.1 1.4-15.4 2-16.4-7.5 0 0-7.9-2.1-5.4-8.6 0 0 10.6 7.9 14.7-5.6 0 0 6 11.3 16-5.6 0 0 5.1 15.7 25.2 12.8.2-.5.4-1.1.6-1.7 3.5-11.2-12.4-20.9-12.4-20.9-1-12.1-17.3-11.2-17.3-11.2 4.9-13.5-10.9-8.4-10.9-8.4-20.8-7.4-23.3 9.3-23.3 9.3s-3-1.4-18.3 0-4.5 14-4.5 14c-2.1 0-3.9.1-5.3.3z"/>
                                    </g>
                                    <g>
                                        <path fill="#040000" d="M1177.2 553.1s-28.2 2.1-22.7 7.8c5.5 5.7 22 12 44.7 11.3 22.7-.7 38.5-3.5 32.4-11.3-6.2-7.8-54.4-7.8-54.4-7.8z" opacity=".2"/>
                                        <path fill="#954730" d="M1185.4 529.8v31.1s3.3 1.8 6.9 1.8 6.9-1.8 6.9-1.8V527l-13.8 2.8z"/>
                                        <path fill="#0f7357" d="M1171.7 449.9s2.8-13.4 19.3-12.7c16.5.7 14.5 21.2 14.5 21.2s13.8 3.5 15.8 17c2.1 13.4-3.4 13.4-3.4 13.4s15.1 22.6 0 28.3c0 0-4.1 12.7-11.7 4.9 0 0 0 19.1-18.6 12.7 0 0-22 11.3-24.8-12.7 0 0-15.8-1.4-16.5-16.3 0 0 .7-9.9 12.4-13.4 0 0-15.1-18.4-8.3-20.5s13.1 0 13.1 0-9.7-19.1 8.2-21.9z"/>
                                        <path fill="#13876f" d="M1217.8 488.8s5.5 0 3.4-13.4-15.8-17-15.8-17 2.1-20.5-14.5-21.2-19.3 12.7-19.3 12.7c-5.1.8-7.9 2.9-9.4 5.5 2.8 11.4 8.3 24.1 18.4 24.9 0 0-35.8 27.6-8.3 33.2 0 0 11.7 15.6 25.5 0 0 0 10 5.3 19.7 4.2.2-.4.3-.7.3-.7 15.2-5.6 0-28.2 0-28.2z"/>
                                    </g>
                                    <g>
                                        <path fill="#115f32" d="M1503.8 445.5c-4.9-2.9-11.4-2.6-16 .7s-7.1 9.5-6.2 15.2c-1.8-1-4.3-.4-5.5 1.3s-.8 4.4.7 5.8c-6.2.4-11.9 5.6-12.8 12-.9 6.3 3 13.1 8.9 15.2-.4 3.9 3.8 7.5 7.5 6.3-.3 5.8 6.3 8.9 11.8 10.4 7.5 2 15.4 3.8 23.1 2.5s15.3-6.4 17.4-14.1c2.9 3.5 7.3 7.3 11.3 5.2 3.1-1.7 3.6-6.3 2-9.5s-4.7-5.3-7.7-7.2c4.2.5 7.5-4.4 7-8.7-.5-4.3-3.8-7.7-7.3-10-1.5-1-3.1-1.9-4.1-3.5-.8-1.3-.9-2.9-1.1-4.4-1-8.5-3.8-17.5-10.5-22.6-6.7-5.1-18.1-4.1-21.5 3.8l3 1.6z"/>
                                        <path fill="#0c6e40" d="M1538.3 489.3c4.2.5 7.5-4.4 7-8.7-.5-4.3-3.8-7.7-7.3-10-1.5-1-3.1-1.9-4.1-3.5-.8-1.3-.9-2.9-1.1-4.4-1-8.5-3.8-17.5-10.5-22.6-6-4.6-15.7-4.2-20.1 1.4-.3.9-.6 1.7-.9 2.6l1.4.8-1.5-.6c-.7 2.8-.9 5.8-.4 8.7-2.5-1.4-5.9-.5-7.5 1.8-1.6 2.4-1.2 6 1 7.9-8.5.5-16.2 7.7-17.4 16.4-1.2 8.7 4.1 17.9 12.2 20.8-.6 5.3 5.2 10.2 10.2 8.7-.1 2.2.5 4.1 1.6 5.8 4.8.9 9.6 1.3 14.3.4 7.7-1.3 15.3-6.4 17.4-14.1 2.9 3.5 7.3 7.3 11.3 5.2 3.1-1.7 3.6-6.3 2-9.5-1.5-3.1-4.6-5.1-7.6-7.1z"/>
                                        <ellipse cx="1506.3" cy="547.2" fill="#040000" opacity=".2" rx="29.3" ry="4.4"/>
                                        <path fill="#954730" d="M1497 544.6c-.1.8-.2 1.7.5 2.3.4.3.9.5 1.4.6 2.3.5 13.6 1.6 12.5-3.4-1.1-5.2-1.6-10.4-2-15.6-.5-7.4-.3-14.7 3.3-21.3 1.7-3.1 3.3-6.2 4.8-9.4.5-1.1 1-2.2.9-3.4-.1-.6-1.4-3.1-2.3-2-.1.1-.1.2-.1.3-.8 2.6-1.8 5.1-3.4 7.3-.8 1.1-1.6 2.2-2.6 3.2-.4.4-3.1 2.4-3.1 2.7 0-3.3-.7-6.7-1.1-10-.2-1.9-.4-3.7-.6-5.6-.2-1.5 0-3.7-.7-5.1-1.1-2.1-2.1-1.2-3.9.2l-3.6 59.2z"/>
                                    </g>
                                    <!-- 이름표: 02지상지원시설 -->
                                    <g class="nametag _nametag02">
                                        <path d="M823.6 443.9H395c-3.3 0-6-2.7-6-6v-78.3c0-3.3 2.7-6 6-6h428.6c3.3 0 6 2.7 6 6v78.3c0 3.3-2.7 6-6 6z" class="_box" />
                                        <path d="M468 397.9c0 13.2-6.2 19.8-14.5 19.8s-14.5-6.6-14.5-19.8c0-13.3 6.2-19.9 14.5-19.9s14.5 6.6 14.5 19.9zm-21 0c0 8.6 2.8 12.5 6.5 12.5s6.5-3.9 6.5-12.5-2.8-12.5-6.5-12.5-6.5 3.8-6.5 12.5zM498.3 389.8c0 3.9-1.9 7.3-8.5 14.2l-5.4 5.6H499v7.1h-27V412l12.4-12.7c4.5-4.7 5.6-7.1 5.6-9.3 0-2.8-1.5-4.6-5.2-4.6-3.4 0-5.3 2.8-5.3 5.7h-8.3c0-7.4 5.6-13 13.6-13 8.5-.1 13.5 4.9 13.5 11.7zM533.7 395.8l11.5 14.9-6.2 4.6-8-10.8c-3.2 7-8.3 11-14.3 11v-7.9c5.8-.6 9.8-9 10.1-21.7h-8.9v-7.2h25.3v7.2h-8.5c-.1 3.6-.5 6.9-1 9.9zm20.6-18v39.6h-7.8v-39.6h7.8zM560.6 399.4v-7c6.3-.7 10.4-6.5 10.5-14.4l7.9.5c0 2.6-.4 5.1-1.3 7.5l10.8 6.8-4 5.7-9.9-6.5c-3.3 4.2-8.2 7.1-14 7.4zm37.6 9.6c0 6.6-7.9 8.9-17.8 8.9-10 0-17.8-2.3-17.8-8.9s7.9-8.9 17.8-8.9c9.9.1 17.8 2.4 17.8 8.9zm-8.5 0c0-1.9-4.2-2.6-9.4-2.6s-9.4.7-9.4 2.6c0 1.9 4.2 2.6 9.4 2.6s9.4-.7 9.4-2.6zm12.7-25.1v7.5h-4.6v8.3H590v-21.8h7.8v6.1h4.6zM622.9 395.8l11.5 14.9-6.2 4.6-8-10.8c-3.2 7-8.3 11-14.3 11v-7.9c5.8-.6 9.8-9 10.1-21.7h-9v-7.2h25.3v7.2h-8.5c0 3.6-.4 6.9-.9 9.9zm20.6-18v39.6h-7.8v-39.6h7.8zM688.9 410.9v6.5h-36v-12.6h6.3v-3.9h-9.5v-6H668c3.7 0 7.8-.4 10.2-1.4v6c-2.5 1.1-6.4 1.4-10.4 1.4h-.8v6h-6.3v4h28.2zm-37.1-25.4c0-5.4 5-8.1 12.1-8.1s12.1 2.7 12.1 8.1c0 5.4-5 8.1-12.1 8.1s-12.1-2.7-12.1-8.1zm7.5 0c0 1.6 1.8 2.3 4.6 2.3s4.6-.7 4.6-2.3c0-1.6-1.8-2.3-4.6-2.3s-4.6.7-4.6 2.3zm21.2 16.5v-24.2h7.8v30.7h-7.8v-1.1h-10.2V402h10.2zM712.1 394.7l11.7 16.3-6.4 4.5-8.2-11.8c-3.3 7.6-8.4 11.8-14.5 11.9v-8.1c6.4-.7 10.8-12.3 10.8-28.9l8 .3c.1 5.9-.5 11.2-1.4 15.8zm20.6-16.9v39.6h-7.8v-39.6h7.8zM738.9 397.8v-6.9c6.2-.7 10.3-6 10.5-12.9l7.9.5c0 2.5-.5 4.8-1.3 7l10.4 6.4-4 5.3-9.8-6.2c-3.2 3.9-8 6.4-13.7 6.8zm39 14.3v5.4h-35.8v-11.6h27.6v-1.5H742V399h35.5v11.6h-27.6v1.5h28zm-8.3-24.2h-7.1V381h7.1v-3.2h7.8v19.7h-7.8v-9.6z" class="_text"/>
                                    </g>
                                    <!-- /.이름표:지상지원시설 -->
                                </g>
                                <!-- /.지상지원시설 -->
                                <g>
                                    <path fill="#040000" d="M179.2 848.4s-21.4 2.9-12.6 10.1c6.9 5.7 31.5 8.8 49.5 3.5s-3.4-13.6-3.4-13.6-24-3.8-33.5 0z" opacity=".2"/>
                                    <path fill="#954730" d="M191.8 817.4l-2.2 36.3s1.5 5 6 4.8c4.6-.2 7.5-3.9 7.5-3.9l-4.3-41.1-7 3.9z"/>
                                    <path fill="#117039" d="M184.9 704.9s-4.8-10.2 6.8-13.8c0 0 4.8-13.1 16.4-10.9s4.8 24.8 4.8 24.8 6.7 9.5 2 17.5c0 0 14.2 17.5 1.7 25.5 0 0 22.9-3.6 5.2 18.2 0 0 18.4 21.1-4.1 27 0 0 17.6 10.2 11.2 20.4 0 0-7.1 5.1-11.9 0 0 0-6.8 16.9-20.5 2.3 0 0-6.8 17.1-17.7 6 0 0-24.5 5.6-27.3-9.7-2.7-15.3 7.5-16 7.5-16s-13.6-18.9 6.8-23.3c0 0 4.8-13.8 13.6-8 0 0-12.3-6.6-2.7-18.2 0 0-5.5-13.1 7.5-13.1 0-.3-15.7-17 .7-28.7z"/>
                                    <path fill="#118446" d="M217.6 793.1c22.5-5.8 4.1-27 4.1-27 17.7-21.9-5.2-18.2-5.2-18.2 12.5-8-1.7-25.5-1.7-25.5 4.7-8-2-17.5-2-17.5s6.8-22.6-4.8-24.8c-11.6-2.2-16.4 10.9-16.4 10.9-11.6 3.6-6.8 13.8-6.8 13.8-16.4 11.7-.7 28.4-.7 28.4-2.4 0-4.2.4-5.4 1.2 1 6 4.4 15.2 15.4 15.8 0 0-8.6 6.8-3.6 13.1 0 0-13.7 2.4-12.3 17 0 0-17.3-2.9-15 8.3 2.3 11.2 8.6 7.8 8.6 7.8s-5.2 7.8 6.7 13.6c0 0 12.8 8.7 20.6-4.4 0 0 6.8 9.2 11.8 2.4 0 0 8.4 6.8 17.9 5.2 6.2-10.1-11.2-20.1-11.2-20.1z"/>
                                </g>
                                <g>
                                    <path fill="#040000" d="M1468.6 187.2s-23.1 3.1-13.6 10.9c7.5 6.2 34.1 9.5 53.5 3.8s-3.7-14.7-3.7-14.7-25.9-4.1-36.2 0z" opacity=".2"/>
                                    <path fill="#954730" d="M1482.1 153.6l-2.4 39.3s1.6 5.4 6.5 5.2c4.9-.2 8.1-4.2 8.1-4.2l-4.6-44.4-7.6 4.1z"/>
                                    <path fill="#117039" d="M1474.7 32.1s-5.2-11 7.4-15c0 0 5.2-14.2 17.7-11.8 12.5 2.4 5.2 26.8 5.2 26.8s7.2 10.2 2.2 18.9c0 0 15.4 18.9 1.8 27.5 0 0 24.7-3.9 5.6 19.7 0 0 19.9 22.8-4.4 29.1 0 0 19 11 12.1 22 0 0-7.7 5.5-12.8 0 0 0-7.4 18.3-22.1 2.4 0 0-7.4 18.5-19.1 6.5 0 0-26.5 6.1-29.5-10.5s8.1-17.3 8.1-17.3-14.7-20.5 7.4-25.2c0 0 5.2-15 14.7-8.7 0 0-13.3-7.1-2.9-19.7 0 0-5.9-14.2 8.1-14.2-.2.2-17.1-17.9.5-30.5z"/>
                                    <path fill="#118446" d="M1510.1 127.3c24.3-6.3 4.4-29.1 4.4-29.1 19.1-23.6-5.6-19.7-5.6-19.7 13.5-8.7-1.8-27.5-1.8-27.5 5.1-8.7-2.2-18.9-2.2-18.9s7.4-24.4-5.2-26.8c-12.5-2.4-17.7 11.8-17.7 11.8-12.5 3.9-7.4 15-7.4 15-17.7 12.6-.7 30.7-.7 30.7-2.6 0-4.5.5-5.9 1.3 1.1 6.4 4.8 16.4 16.7 17.1 0 0-9.3 7.3-3.9 14.2 0 0-14.8 2.6-13.3 18.4 0 0-18.7-3.1-16.2 8.9 2.5 12.1 9.3 8.4 9.3 8.4s-5.6 8.4 7.3 14.7c0 0 13.9 9.4 22.2-4.7 0 0 7.4 10 12.8 2.6 0 0 9 7.4 19.3 5.6 6.6-11.1-12.1-22-12.1-22z"/>
                                </g>
                                <g>
                                    <path fill="#004e2c" d="M591.9 161.3c8.4-3.5 18.7-1.5 25.4 4.8 6.7 6.3 9.3 16.7 6.6 25.6 3.1-1.2 7 .3 8.5 3.4 1.5 3 .4 7.1-2.4 9 9.8 2 17.7 11.7 17.7 22 .1 10.3-7.6 20.1-17.4 22.3-.2 6.3-7.7 11.1-13.3 8.4-.8 9.3-12 12.8-21 13.9-12.4 1.5-25.3 2.6-37.3-1.2-12-3.8-22.9-13.7-24.6-26.4-5.4 4.9-13.3 10-19.1 5.7-4.6-3.3-4.4-10.9-1.2-15.6 3.3-4.7 8.6-7.3 13.7-9.8-6.8-.2-11.1-8.7-9.3-15.4 1.8-6.7 7.7-11.4 13.8-14.4 2.6-1.2 5.4-2.3 7.2-4.6 1.5-1.9 2.1-4.4 2.7-6.7 3.5-13.3 9.7-27 21.5-33.7s29.8-2.4 33.5 10.9l-5 1.8z"/>
                                    <path fill="#007858" d="M527.5 223.3c-6.8-.2-11.1-8.7-9.3-15.4 1.8-6.7 7.7-11.4 13.8-14.4 2.6-1.2 5.4-2.3 7.2-4.6 1.5-1.9 2.1-4.4 2.7-6.7 3.5-13.3 9.7-27 21.5-33.7 10.5-5.9 25.9-3.2 31.7 6.8.4 1.4.6 2.9.8 4.4l-2.5.9c.8-.3 1.7-.5 2.5-.6.6 4.7.2 9.5-1.2 14 4.2-1.6 9.5.5 11.6 4.6 2 4.2.6 9.8-3.2 12.3 13.5 2.7 24.2 16 24.3 30.1.1 14.1-10.4 27.5-23.8 30.5-.3 8.6-10.5 15.1-18.2 11.5-.3 3.5-1.7 6.5-3.8 8.9-7.8.3-15.5-.2-22.9-2.5-12-3.8-22.9-13.7-24.6-26.4-5.4 4.9-13.3 10-19.1 5.7-4.6-3.3-4.4-10.9-1.2-15.6 3.2-4.8 8.6-7.4 13.7-9.8z"/>
                                    <ellipse cx="579.4" cy="321.9" fill="#040000" opacity=".2" rx="37.4" ry="7.9"/>
                                    <path fill="#954730" d="M590.7 317.6c.1 1.3.2 2.8-.9 3.7-.6.5-1.5.7-2.3.9-3.7.8-21.9 2.3-20.1-5.7 1.8-8.3 2.8-16.6 3.4-25.1 1-11.9.7-23.6-5-34.3-2.6-5-5.2-10.1-7.5-15.3-.8-1.7-1.6-3.6-1.4-5.5.1-1 2.3-4.9 3.7-3.2.1.2.2.3.2.5 1.3 4.2 2.8 8.2 5.3 11.9 1.2 1.9 2.6 3.6 4.1 5.2.6.6 4.9 3.8 4.9 4.4.1-5.3 1.3-10.8 1.9-16.1.4-3 .7-6 1.1-9 .3-2.5.1-5.9 1.2-8.1 1.7-3.3 3.4-2 6.3.3l5.1 95.4z"/>
                                </g>
                                <g fill="#84c567">
                                    <path d="M2032.8 1192.2v23.3h26.3l-6.1-23.3zM2072.1 1192.2l-1.3 23.3h19.2l1.7-23.3zM2101.5 1192.2l3.8 23.3h16l.7-23.3zM2135.6 1192.2v23.3h18.6l-2.5-23.3zM2169.7 1197.5l-6.6 18h18l-.8-23.3zM2196 1192.2v19l17.7 4.3v-19.1zM2039.9 1225v24.3h13.1l6.1-24.3zM2070.8 1225v20.1h19.2l-3.2-20.1zM2111.8 1225l-10.3 20.1h20.5V1225zM2135.6 1225l4.8 20.1h12.9l-3.4-20.1zM2163.1 1225v20.1h17.2l-8.2-20.1zM2196 1225v20.1h8.8l3.2-20.1zM2053 1257.8v15.9s11.1 1.1 12.1 0 2.3-20.1 2.3-20.1l-14.4 4.2zM2081.6 1253.6v20.5l19.9 3.8-4.9-24.3zM2111.8 1257.8v20.1l10.2-3.8 4.5-20.5zM2140.4 1253.6l-4.8 20.5h17.7l-1.6-20.5zM2169.7 1257.8l-6.6 16.3h17.2l.8-20.5zM2196 1253.6h12v20.6h-12z"/>
                                </g>
                                <g fill="#fff">
                                    <path d="M2284.4 1165.7l-30.3 16.9v17.5l30.3-20.3zM2289.2 1188.5l-32.3 23.2v9.6l32.3-21.2zM2284.4 1214.4l-27.5 19-2.8 12.2 30.3-19.9zM2284.4 1237l-27.5 17.6v10.6l27.5-19.6z"/>
                                </g>
                                <path fill="#040000" d="M838.1 675.6s-16.5 5.9 3.8 30.2c20.3 24.2 50.4 34.5 65.6 24.6 15.3-9.8 52.6-11.4 30.5-19.1-22-7.7-71.3-53.3-71.3-53.3l-28.6 17.6z" opacity=".2"/>
                                <g>
                                    <path fill="#040000" d="M2025.6 430.8s-30.8 2.3-24.8 8.5 24 13.1 48.8 12.3c24.8-.8 42-3.9 35.3-12.3-6.7-8.5-59.3-8.5-59.3-8.5z" opacity=".2"/>
                                    <path fill="#954730" d="M2034.5 405.3v33.9s3.6 2 7.5 2 7.5-2 7.5-2v-37l-15 3.1z"/>
                                    <path fill="#0f7357" d="M2019.6 318.2s3-14.7 21-13.9 15.8 23.1 15.8 23.1 15 3.9 17.3 18.5c2.3 14.7-3.8 14.7-3.8 14.7s16.5 24.7 0 30.8c0 0-4.5 13.9-12.8 5.4 0 0 0 20.8-20.3 13.9 0 0-24 12.3-27-13.9 0 0-17.3-1.5-18-17.7 0 0 .8-10.8 13.5-14.7 0 0-16.5-20.1-9-22.4 7.5-2.3 14.3 0 14.3 0s-10.5-20.8 9-23.8z"/>
                                    <path fill="#13876f" d="M2069.9 360.6s6 0 3.8-14.7c-2.3-14.7-17.3-18.5-17.3-18.5s2.3-22.4-15.8-23.1c-18-.8-21 13.9-21 13.9-5.5.9-8.6 3.2-10.3 6 3.1 12.5 9 26.3 20 27.1 0 0-39 30.1-9 36.2 0 0 12.8 17 27.8 0 0 0 10.9 5.8 21.5 4.6.2-.5.3-.8.3-.8 16.5-6 0-30.7 0-30.7z"/>
                                </g>
                                <g>
                                    <path fill="#eeda63" d="M901.9 688.2c3.5 0 6.3-8.6 6.2-19.1-.1-10.5-11.2-19-14.7-19h-26.3l.3 38.1h34.5z"/>
                                    <path fill="#c1c0c1" d="M882.8 677.5c.5-5.3.4-10.9-.6-16.1-.4-2.4-1.2-4.8-2.4-6.9-.9-1.5-3.2-4.4-5.2-4.4h-7.5l.3 38.1h13.1c.7 0 2-7.7 2.1-8.5 0-.7.1-1.4.2-2.2z"/>
                                    <path fill="#edea6c" d="M856.4 639v45.1l16.9 20.8V652z"/>
                                    <path fill="#eeda63" d="M864 688.2c3.5 0 6.3-8.6 6.2-19.1-.1-10.5-3-19-6.5-19h-10.5l.3 38.1H864z"/>
                                    <path fill="#eeda63" d="M856.4 639l2.4-.4 16.9 13v52.9l-2.4.4V652z"/>
                                    <ellipse cx="853.4" cy="669.2" fill="#3e2537" rx="6.4" ry="19" transform="matrix(1 -.00797 .00797 1 -5.304 6.82)"/>
                                    <path fill="#eeda63" d="M849.7 669.2c-.1-9.2 2-16.8 4.9-18.7-.4-.3-.9-.4-1.3-.4-3.5 0-6.3 8.6-6.2 19.1.1 10.5 3 19 6.5 19 .5 0 .9-.2 1.3-.4-2.9-1.8-5.1-9.5-5.2-18.6z"/>
                                    <g>
                                    <path fill="#c56c94" d="M931.7 714.2c3.3 0 6-8.2 5.9-18.2-.1-10-11.1-18.1-14.4-18.1h-24.7l.3 36.3h32.9z"/>
                                    <path fill="#c1c0c1" d="M913.4 704c.4-5 .3-10.4-.6-15.3-.4-2.3-1.1-4.6-2.3-6.6-.9-1.4-3.1-4.2-4.9-4.2h-7.1l.3 36.3h12.5c.7 0 1.9-7.3 2-8.1 0-.7.1-1.4.1-2.1z"/>
                                    <path fill="#d873a8" d="M888.3 667.3v43l16.1 19.9v-50.5z"/>
                                    <path fill="#c56c94" d="M895.6 714.2c3.3 0 6-8.2 5.9-18.2-.1-10-2.9-18.1-6.2-18.1h-10l.3 36.3h10z"/>
                                    <path fill="#c56c94" d="M888.3 667.3l2.2-.4 16.2 12.4v50.5l-2.3.4v-50.5z"/>
                                    <ellipse cx="885.4" cy="696" fill="#3e2537" rx="6.1" ry="18.2" transform="matrix(1 -.00797 .00797 1 -5.517 7.076)"/>
                                    <path fill="#a8587e" d="M881.9 696.1c-.1-8.7 1.9-16 4.7-17.8-.4-.3-.8-.4-1.3-.4-3.3 0-6 8.2-5.9 18.2.1 10 2.9 18.1 6.2 18.1.4 0 .9-.1 1.3-.4-2.9-1.7-5-9-5-17.7z"/>
                                    </g>
                                </g>
                                <!-- 동굴처분시설 -->
                                <g class="map_point03 _map_point">
                                    <g>
                                        <path fill="#7b7064" d="M985.5 931.6c20.9-22.4 49.1 11.4 103.9 3.9s90.3-58.6 154.2-66.3 100.6-8.6 179.2-41.8c42-17.7 61.5-26 70.7-29.8 3.1-8 5.5-12.7 5.5-12.7l-78.6 33.2c-78.6 33.2-115.3 34-179.2 41.8-63.9 7.8-99.5 58.8-154.2 66.3-54.8 7.5-83-26.3-103.9-3.9-20.9 22.4-258.1 65.5-258.1 65.5l-57.8 7.6s1.9 3.4 5.2 9l55.2-7.3c-.1.1 237.1-43.1 257.9-65.5z"/>
                                        <path fill="#9f795a" d="M730 1006.5s237.2-43.2 258.1-65.6c20.9-22.4 49.1 11.4 103.9 3.9 54.8-7.5 90.3-58.6 154.2-66.3 63.9-7.8 100.6-8.6 179.2-41.8 33.6-14.2 52.8-22.3 63.8-26.9 1.5-4.6 3-8.7 4.4-12.2-9.1 3.9-28.7 12.1-70.7 29.8-78.6 33.2-115.3 34-179.2 41.8s-99.5 58.8-154.2 66.3-83-26.3-103.9-3.9c-20.9 22.4-258.1 65.6-258.1 65.6l-55.2 7.3c1.5 2.6 3.3 5.6 5.3 9l52.4-7z"/>
                                        <path fill="#aaa999" d="M990.5 950.3c20.9-22.4 49.1 11.4 103.9 3.9 54.8-7.5 90.3-58.6 154.2-66.3 63.9-7.8 100.6-8.6 179.2-41.8 28.1-11.9 46.2-19.5 57.8-24.4 1.1-4.2 2.3-8.2 3.5-11.9-11 4.7-30.3 12.8-63.8 26.9-78.6 33.2-115.3 34-179.2 41.8-63.9 7.8-99.5 58.8-154.2 66.3-54.8 7.5-83-26.3-103.9-3.9-20.9 22.4-258.1 65.6-258.1 65.6l-52.4 6.9c1.7 2.8 3.5 5.8 5.4 9l49.5-6.5c.1 0 237.3-43.2 258.1-65.6z"/>
                                        <path fill="#bfbeab" d="M953.8 1117.4c94-27.3 130.9-15.6 158.2-25.6 27.3-10 108.3-71.5 147.8-81.8 39.5-10.3 176.4-29.2 194.4-45.3s23-63.3 25.2-104.1c.7-14.1 3.3-27.4 6.4-38.9-11.6 4.9-29.7 12.5-57.8 24.4-78.6 33.2-115.3 34-179.2 41.8-63.9 7.8-99.5 58.8-154.2 66.3-54.8 7.5-83-26.3-103.9-3.9-20.9 22.4-258.1 65.6-258.1 65.6l-49.5 6.5c13 21.5 31.4 50 44.2 62.6 21.7 21.4 132.4 59.6 226.5 32.4z"/>
                                        <path fill="#cccbbf" d="M766.6 1040.6s-6.5-.6-10.3 2.2c-3.8 2.8-4.9 4.8-2.9 6.7 2 1.9 11.8-.7 13.7-.3 1.9.3 5.7-2.1 6-5.2.4-3.2-6.5-3.4-6.5-3.4z"/>
                                        <path fill="#deddd5" d="M1316.8 967.8s-6.5-.6-10.3 2.2c-3.8 2.8-4.9 4.8-2.9 6.7 2 1.9 11.8-.7 13.7-.3 1.9.3 5.7-2.1 6-5.2.4-3.2-6.5-3.4-6.5-3.4zM1026.3 982.2s-6.5-.6-10.3 2.2c-3.8 2.8-4.9 4.8-2.9 6.7s11.8-.7 13.7-.3c1.9.3 5.7-2.1 6-5.2.4-3.2-6.5-3.4-6.5-3.4z"/>
                                        <path fill="#cccbbf" d="M890.3 1033.2s6.5.1 10.1-3c3.5-3.1 4.5-5.2 2.4-6.9s-11.7 1.6-13.7 1.4c-1.9-.2-5.5 2.6-5.6 5.7-.1 3.1 6.8 2.8 6.8 2.8zM1109.6 1006.9s6.5.1 10.1-3c3.5-3.1 4.5-5.2 2.4-6.9-2.1-1.7-11.7 1.6-13.7 1.4-1.9-.2-5.5 2.6-5.6 5.7-.1 3.1 6.8 2.8 6.8 2.8z"/>
                                        <path fill="#deddd5" d="M812 1057.9s-13-.1-16.8 1.6c-3.8 1.7-6.4 6-4.4 8.7 2 2.7 16.8.4 20.2-1.6 3.4-2.1 3.7-8.3 1-8.7zM1225.2 924.2s-13-.1-16.8 1.6-6.4 6-4.4 8.7c2 2.7 16.8.4 20.2-1.6 3.5-2.1 3.7-8.3 1-8.7zM1258.2 925s-12.7 2.7-16.1 5.1c-3.4 2.4-5 7.2-2.5 9.5 2.5 2.2 16.5-3.2 19.4-5.9 3-2.8 1.9-9-.8-8.7z"/>
                                        <path fill="#cccbbf" d="M994.8 1040.7s-13-.1-16.8 1.6c-3.8 1.7-6.4 6-4.4 8.7 2 2.7 16.8.4 20.2-1.6 3.4-2.1 3.7-8.3 1-8.7z"/>
                                        <path fill="#deddd5" d="M945.1 1073.3s-13-.1-16.8 1.6c-3.8 1.7-6.4 6-4.4 8.7 2 2.7 16.8.4 20.2-1.6 3.5-2.1 3.7-8.4 1-8.7zM1171.3 960.2s-7.7-.1-9.9.9-3.8 3.6-2.6 5.2c1.2 1.6 10 .2 12-1 1.9-1.2 2.1-4.9.5-5.1z"/>
                                        <path fill="#cccbbf" d="M1381.1 895.5s-8.8 1-10.2 3.8c-1.5 2.8-1 5.9 1.7 7.4s11.4-.3 12.9-1.5 2.6-4 1.8-5.9c-.9-2-6.2-3.8-6.2-3.8z"/>
                                        <path fill="#deddd5" d="M933.9 997.1s-8.8 1-10.2 3.8-1 5.9 1.7 7.4 11.4-.3 12.9-1.5 2.6-4 1.8-5.9c-.8-2-6.2-3.8-6.2-3.8z"/>
                                        <path fill="#cccbbf" d="M1253.8 976.1s-8.8 1-10.2 3.8-1 5.9 1.7 7.4 11.4-.3 12.9-1.5 2.6-4 1.8-5.9c-.8-2-6.2-3.8-6.2-3.8zM1187.5 959.5s-7.5 4.7-7.7 7.9c-.2 3.2 1.5 5.8 4.6 6s10.3-5.2 11.1-7c.9-1.7.7-4.7-.8-6.1-1.6-1.5-7.2-.8-7.2-.8z"/>
                                        <path fill="#deddd5" d="M1090.8 998.1s-8.8 1-10.2 3.8c-1.5 2.8-1 5.9 1.7 7.4s11.4-.3 12.9-1.5 2.6-4 1.8-5.9c-.8-1.9-6.2-3.8-6.2-3.8zM854 1095s-8.8 1-10.2 3.8-1 5.9 1.7 7.4 11.4-.3 12.9-1.5 2.6-4 1.8-5.9c-.8-2-6.2-3.8-6.2-3.8zM1096.2 1044.6s-8.8 1-10.2 3.8c-1.5 2.8-1 5.9 1.7 7.4s11.4-.3 12.9-1.5 2.6-4 1.8-5.9c-.8-1.9-6.2-3.8-6.2-3.8zM1412.5 893.8c-4.2 1.9-6 4.1-4 7.5s9.5-1 9.5-1c-.5-5.1-3.6-7.3-5.5-6.5zM1020.8 1042.3c-4.2 1.9-6 4.1-4 7.5s9.5-1 9.5-1c-.5-5.1-3.6-7.3-5.5-6.5z"/>
                                    </g>
                                    <path fill="#040000" d="M739 1049.1s-14.5 19.1 17.9 26.4 51.7 19.7 53.9 25.3c2.2 5.6 38.2 31.4 57.3 12.9s10.6-59.5 23.1-63.7c12.5-4.2 20.5.3 37.1 7.9 16.6 7.6 41 1.8 45.4-6.9 4.4-8.7-15.8-55.4 3.8-52.9s7.2 14.3 30.6 19 40.5-2.2 46.4-7.3c5.8-5 58.3-23.3 70.7-33.9s18.4-14-22.4-17.9-110.4-17.7-135.4-3.8c-25 13.9-134.6 30.5-165.4 44.8s-64.8 30.7-63 50.1z" opacity=".2"/>
                                    <path fill="#e2e2e2" d="M771.2 1009.8c-9.8 0-17.8 4.1-17.8 9.2v41.6c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2V1019c0-5.1-7.9-9.2-17.8-9.2z"/>
                                    <path fill="#d1d2d3" d="M771.2 1013.5c-9.8 0-17.8 4.1-17.8 9.2v9.8c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2v-9.8c0-5.1-7.9-9.2-17.8-9.2z"/>
                                    <path fill="#e2e2e2" d="M792.4 1007.5c0-.1 0-.1-.1-.2-.9-7.8-10-14-21.1-14-11.1 0-20.2 6.2-21.1 14.1l-.1.1s-.9 3.1 0 10.8c0 6 9.5 10.9 21.2 10.9s21.2-4.9 21.2-10.9c0 .1.8-7.3 0-10.8zM856.8 954.3c-9.8 0-17.8 4.1-17.8 9.2v41.6c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2v-41.6c0-5.1-8-9.2-17.8-9.2z"/>
                                    <path fill="#d1d2d3" d="M856.8 958c-9.8 0-17.8 4.1-17.8 9.2v9.8c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2v-9.8c0-5.1-8-9.2-17.8-9.2z"/>
                                    <path fill="#e2e2e2" d="M878 952c0-.1 0-.1-.1-.2-.9-7.8-10-14-21.1-14-11.1 0-20.2 6.2-21.1 14.1l-.1.1s-.9 3.1 0 10.8c0 6 9.5 10.9 21.2 10.9s21.2-4.9 21.2-10.9c0 .1.7-7.3 0-10.8zM942.3 908.2c-9.8 0-17.8 4.1-17.8 9.2V959c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2v-41.6c0-5.1-7.9-9.2-17.8-9.2z"/>
                                    <path fill="#d1d2d3" d="M942.3 911.9c-9.8 0-17.8 4.1-17.8 9.2v9.8c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2v-9.8c0-5.1-7.9-9.2-17.8-9.2z"/>
                                    <path fill="#e2e2e2" d="M963.5 905.9c0-.1 0-.1-.1-.2-.9-7.8-10-14-21.1-14-11.1 0-20.2 6.2-21.1 14.1l-.1.1s-.9 3.1 0 10.8c0 6 9.5 10.9 21.2 10.9s21.2-4.9 21.2-10.9c0 .1.8-7.3 0-10.8z"/>
                                    <path fill="#c56c94" d="M874 995.8s-6.3.3-6.9 4.8c-.7 4.4.3 5.4 1.7 6.8s27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M866.9 1002.4c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    <path fill="#c56c94" d="M780.5 1049.1s-6.3.3-6.9 4.8c-.7 4.4.3 5.4 1.7 6.8 1.3 1.4 27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M773.4 1055.8c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    <path fill="#c56c94" d="M958.2 944.1s-6.3.3-6.9 4.8.3 5.4 1.7 6.8c1.3 1.4 27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M951 950.8c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    <path fill="#c56c94" d="M999.2 952s-4.3-2.8-6.6-.5L787.1 1070l8.5 13.7 205.5-118.9c.6-.1 1.1-.4 1.6-.9 3.9-4 1.3-10.3-3.5-11.9z"/>
                                    <path fill="#9e9c9c" d="M795.6 1083.7l205.5-118.9c.6-.1 1.1-.4 1.6-.9 2.4-2.5 2.3-5.9.8-8.4l-211.7 122.2 3.8 6z"/>
                                    <path fill="#c56c94" d="M792.8 1071.2s-6.9-4.6-7.9 2.7c-1 7.2 2.7 8.4 4.4 9 2.2.7 5 2.4 7 .3 3.8-4.1 1.2-10.3-3.5-12zM810.6 1068.8s-6.3.3-6.9 4.8c-.7 4.4.3 5.4 1.7 6.8 1.3 1.4 27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M803.5 1075.5c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    <path fill="#c56c94" d="M904.1 1015.5s-6.3.3-6.9 4.8.3 5.4 1.7 6.8 27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M896.9 1022.2c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    <path fill="#c56c94" d="M991 963.9s-6.3.3-6.9 4.8.3 5.4 1.7 6.8 27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M983.9 970.6c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    <path fill="#ecf0f7" d="M1113.2 991.6c-2.7 0-5-2.8-5-6.3V757.6c0-3.5 2.2-6.3 5-6.3 2.7 0 5 2.8 5 6.3v227.7c0 3.5-2.3 6.3-5 6.3z"/>
                                    <path fill="#9e9c9c" d="M1114.3 737.6v253.9c2.2-.7 3.9-3.3 3.9-6.5V744.1c0-3.2-1.7-5.8-3.9-6.5z"/>
                                    <path fill="#c56c94" d="M1555.2 964.8c-14.1 0-29.2-1.1-45.8-3.4-8.7-1.2-20.2-2.9-31.6-5.7-.1 0-.2 0-.3-.1-3.1-.9-6.1-1.9-9.2-2.8-17.2-5.2-34.7-10.5-51.9-15.8-18.6-5.7-43-13.2-67.7-20.9-4.7-1.5-9.6-2.9-14.3-4.4-15.4-4.6-31.3-9.4-46.2-15.8-7.3-3.2-12.5-7.1-15.9-12.1-4.9-7.1-5.5-14.2-1.9-21.1 2.9-5.3 8-9.6 12.4-13.5 1.7-1.4 3.3-2.8 4.7-4.1 0 0 2.5-2.6 1.8-6.6-.7-3.6-4.6-10.8-23.4-18.3-32.4-12.9-70.1 8.4-72.2 9.6l-193.1 128.9c-2.3 1.5-5.4.9-6.9-1.5s-.8-5.5 1.5-7l193.2-129c.1 0 .1-.1.2-.1 1.7-1 43.2-25.4 80.9-10.4 17.8 7.1 27.7 15.8 29.6 25.9 1.4 7.6-2.4 13.6-4.8 16-1.6 1.5-3.4 3-5.1 4.5-10.4 8.8-14.1 13.2-8.8 20.8 2.3 3.4 6.1 6.2 11.7 8.6 14.4 6.2 30 10.9 45.1 15.4 4.7 1.4 9.7 2.9 14.5 4.4 24.6 7.7 49.1 15.2 67.7 20.9 17.2 5.3 34.7 10.6 51.9 15.8 3 .9 6 1.8 9.1 2.7 11 2.7 22.1 4.3 30.5 5.5 24.5 3.4 45.8 4.2 65 2.4 26.7-2.4 44.8-9.1 57.2-21 5-4.8 9.5-11.5 12.2-18.2 4.2-10.2 3.2-20.2-2.9-30.7-6.2-10.6-16.5-19.2-24-24.6-6.8-4.8-14.4-9.4-23.4-13.9-24-12.2-48.5-24.3-69.2-34.6-22.7-11.2-47.2-23.3-75.1-36.9-19.7-9.6-40-19.6-60.6-29.6-14.8-7.2-29.6-12.2-45-15.3-42.1-8.4-84.9-13-117.4-16.1-17.2-1.6-33.1-2.8-48.6-3.5-87.3-4.2-115.4-5.5-115.6-5.5-2.7-.1-4.8-2.5-4.7-5.3.1-2.8 2.4-5 5.2-4.9.3 0 28.3 1.3 115.6 5.5 15.6.8 31.7 1.9 49 3.6 32.8 3.1 75.9 7.8 118.4 16.3 16.3 3.3 31.8 8.5 47.4 16.1 20.6 10 40.9 19.9 60.6 29.6 27.9 13.6 52.4 25.7 75.1 36.9 20.8 10.3 45.2 22.4 69.3 34.6 9.4 4.8 17.5 9.6 24.7 14.7 29.1 20.6 39.9 44.7 30.4 67.6-3.3 8.1-8.5 15.8-14.6 21.7-14 13.6-34.1 21.1-63.1 23.7-7 .7-14.1 1-21.6 1z"/>
                                    <g fill="#9e9c9c">
                                    <path d="M1657.6 899.8c-.3 4.7-1.3 9.5-3.3 14.2-3.3 8.1-8.5 15.8-14.6 21.7-14 13.6-34.1 21.1-63.1 23.7-6.9.6-14 .9-21.5.9-14.1 0-29.2-1.1-45.8-3.4-8.7-1.2-20.2-2.9-31.6-5.7-.1 0-.2 0-.3-.1-3.1-.9-6.1-1.9-9.2-2.8-17.2-5.2-34.7-10.5-51.9-15.8-18.6-5.7-43-13.2-67.7-20.9-4.7-1.5-9.6-2.9-14.3-4.4-15.4-4.6-31.3-9.4-46.2-15.8-7.3-3.2-12.5-7.1-15.9-12.1-2.3-3.3-3.7-6.7-4.1-10-.6 4.7.7 9.6 4.1 14.4 3.4 5 8.6 8.9 15.9 12.1 14.9 6.5 30.8 11.2 46.2 15.8 4.7 1.4 9.6 2.9 14.3 4.4 24.7 7.7 49.1 15.2 67.7 20.9 17.2 5.3 34.7 10.6 51.9 15.8 3.1.9 6.1 1.9 9.2 2.8.1 0 .2 0 .3.1 11.4 2.8 22.9 4.5 31.6 5.7 16.5 2.3 31.7 3.4 45.8 3.4 7.4 0 14.6-.3 21.5-.9 29-2.6 49.1-10.2 63.1-23.7 6-5.9 11.2-13.5 14.6-21.7 2.6-6.1 3.6-12.3 3.3-18.6zM1294.2 848.3c-1.6 1.5-3.4 3-5.1 4.5-8.4 7.1-12.4 11.3-10.9 16.7 1.1-3.6 4.9-7.2 10.9-12.3 1.7-1.5 3.5-3 5.1-4.5 2.3-2.2 5.9-7.7 5-14.8-.6 4.9-3.1 8.7-5 10.4z"/>
                                    <path d="M1063.3 703.7c.3 0 28.3 1.3 115.6 5.5 15.5.7 31.4 1.9 48.6 3.5 32.6 3.1 75.4 7.8 117.4 16.1 15.5 3.1 30.2 8.1 45 15.3 20.5 10 40.9 19.9 60.6 29.6 27.9 13.6 52.4 25.7 75.1 36.9 20.7 10.3 45.2 22.4 69.2 34.6 9 4.6 16.6 9.1 23.4 13.9 7.5 5.4 17.8 14 24 24.6 6.1 10.5 7.1 20.5 2.9 30.7 14.9-26.1-17.3-52.1-23.8-56.9-.4-.3-.7-.6-1.1-.8-7.2-5.1-15.3-9.9-24.7-14.7-24.1-12.2-48.6-24.4-69.3-34.6-22.7-11.2-47.3-23.3-75.1-36.9-19.7-9.6-40.1-19.6-60.6-29.6-15.6-7.6-31.1-12.8-47.4-16.1-42.5-8.5-85.6-13.2-118.4-16.3-17.4-1.7-33.4-2.8-49-3.6-87.3-4.2-115.4-5.5-115.7-5.5-.5 0-1 0-1.4.1.5 2.3 2.3 4.1 4.7 4.2zM1289.3 838.7c.5 2.9-.7 5-1.3 6 4.8-4.3.8-10.7-2.4-14.5-7.9-9.4-20.4-13.5-32-15.3-11.4-1.7-23-.6-34.2 2.1-10.8 2.6-21.8 6.6-31.5 12.4-.1 0-.1.1-.2.1l-193.2 129c1.6 1.5 4.1 1.8 6.1.5l193.1-129c2.2-1.2 39.9-22.5 72.2-9.6 18.8 7.5 22.8 14.7 23.4 18.3z"/>
                                    </g>
                                    <path fill="#eeda63" d="M1549.6 980.3c-39.2 0-72.2-4.8-72.5-4.9-.2 0-.5-.1-.7-.2-2.8-.8-282.7-84.9-329.9-99.4-18.7-5.8-37.8-5.7-56.7 0-14.2 4.3-23 10.5-23.1 10.6-.1.1-.2.1-.3.2l-62 37.9c-2.4 1.4-5.4.6-6.8-1.8-1.4-2.4-.6-5.5 1.7-7l61.8-37.8c1.4-1 10.6-7.2 25.3-11.7 14.4-4.4 36.9-8.1 62.7-.1 46.4 14.3 318.2 95.9 329.5 99.3 3.9.6 41.8 5.8 83.4 4.6 56.7-1.6 94.6-14.2 109.6-36.4 8.3-12.2 10.8-24.6 7.7-37-8.6-33.2-55.2-56.4-55.7-56.6-77.8-37.8-225.8-109.5-232.7-112.5-.6-.2-1.2-.5-1.9-.8-11.8-5.7-34.3-10.8-66.8-15.3-56.8-7.8-254.5-16.8-256.5-16.9-2.7-.1-4.8-2.5-4.7-5.3.1-2.8 2.4-5 5.2-4.9 2 .1 200.1 9.1 257.3 17 50.5 6.9 65 13.9 69.7 16.2.3.1.7.3.8.4 1.5.5 10.8 4.9 118.1 56.9 57.4 27.8 115.2 55.9 115.8 56.2.5.3 12.9 6.3 26.6 17 18.7 14.6 30.3 30.1 34.4 46.1 4 15.3.9 30.6-9.1 45.4-17.1 25.3-56.7 39-117.6 40.7-4.1.1-8.4.1-12.6.1zm-158.4-252.7c.1 0 .2.1.3.1-.1-.1-.2-.1-.3-.1zm2.7-9.8c.1 0 .1 0 .2.1 0-.1-.1-.1-.2-.1zm0 0z"/>
                                    <path fill="#9e9c9c" d="M1679.9 935.9c-7.5 11.5-17.7 20.8-30 26.5-9.3 4.3-18.9 6.9-28.9 8.4-16.4 4.1-36.1 6.5-58.8 7.1-41.6 1.2-79.5-4-83.4-4.6-11.3-3.4-283.1-85-329.5-99.3-25.8-7.9-48.4-4.3-62.7.1-14.7 4.5-23.9 10.8-25.3 11.7l-61.8 37.8c-.2.1-.4.2-.5.4 1.6 1.3 3.8 1.5 5.6.4l62-37.9c.1-.1.2-.1.3-.2.1-.1 8.8-6.2 23.1-10.6 18.9-5.8 38-5.8 56.7 0 47.2 14.5 327.1 98.5 329.9 99.4.2.1.4.1.7.2.4.1 33.3 4.9 72.5 4.9 4.2 0 8.5-.1 12.8-.2 60.9-1.7 100.5-15.4 117.6-40.7 5.7-8.4 9.1-16.9 10.3-25.5-2.6 8.1-6.4 15.7-10.6 22.1z"/>
                                    <g>
                                    <path fill="#eeda63" d="M874 962.1s-6.3.3-6.9 4.8c-.7 4.4.3 5.4 1.7 6.8s27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M866.9 968.8c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    <path fill="#eeda63" d="M780.5 1015.4s-6.3.3-6.9 4.8c-.7 4.4.3 5.4 1.7 6.8 1.3 1.4 27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M773.4 1022.1c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    <path fill="#eeda63" d="M958.2 910.5s-6.3.3-6.9 4.8c-.7 4.4.3 5.4 1.7 6.8 1.3 1.4 27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M951 917.1c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    <path fill="#eeda63" d="M999.2 918.3s-4.3-2.8-6.6-.5L787 1036.4l8.5 13.7L1001 931.2c.6-.1 1.1-.4 1.6-.9 4-4.1 1.4-10.4-3.4-12z"/>
                                    <path fill="#9e9c9c" d="M795.6 1050l205.5-118.9c.6-.1 1.1-.4 1.6-.9 2.4-2.5 2.3-5.9.8-8.4L791.8 1044l3.8 6z"/>
                                    <path fill="#eeda63" d="M792.8 1037.5s-6.9-4.6-7.9 2.7c-1 7.2 2.7 8.4 4.4 9 2.2.7 5 2.4 7 .3 3.8-4.1 1.2-10.3-3.5-12zM810.6 1035.2s-6.3.3-6.9 4.8c-.7 4.4.3 5.4 1.7 6.8 1.3 1.4 27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M803.5 1041.8c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    <path fill="#eeda63" d="M904.1 981.8s-6.3.3-6.9 4.8c-.7 4.4.3 5.4 1.7 6.8s27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M896.9 988.5c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    <path fill="#eeda63" d="M991 930.2s-6.3.3-6.9 4.8.3 5.4 1.7 6.8 27.1 16.3 27.1 16.3l3.6-12.6-25.5-15.3z"/>
                                    <path fill="#9e9c9c" d="M983.9 936.9c-.1 2.8.7 3.8 1.8 4.9 1.3 1.4 27.1 16.3 27.1 16.3l1.1-3.7-30-17.5z"/>
                                    </g>
                                    <g>
                                    <path fill="#e2e2e2" d="M847.8 1053.8c-9.8 0-17.8 4.1-17.8 9.2v41.6c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2V1063c-.1-5.1-8-9.2-17.8-9.2z"/>
                                    <path fill="#d1d2d3" d="M847.8 1057.5c-9.8 0-17.8 4.1-17.8 9.2v9.8c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2v-9.8c-.1-5.1-8-9.2-17.8-9.2z"/>
                                    <path fill="#e2e2e2" d="M868.9 1051.5c0-.1 0-.1-.1-.2-.9-7.8-10-14-21.1-14-11.1 0-20.2 6.2-21.1 14.1l-.1.1s-.9 3.1 0 10.8c0 6 9.5 10.9 21.2 10.9s21.2-4.9 21.2-10.9c0 .1.8-7.3 0-10.8z"/>
                                    </g>
                                    <g>
                                    <path fill="#e2e2e2" d="M940.7 994.8c-9.8 0-17.8 4.1-17.8 9.2v41.6c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2V1004c0-5.1-8-9.2-17.8-9.2z"/>
                                    <path fill="#d1d2d3" d="M940.7 998.5c-9.8 0-17.8 4.1-17.8 9.2v9.8c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2v-9.8c0-5.1-8-9.2-17.8-9.2z"/>
                                    <path fill="#e2e2e2" d="M961.9 992.5c0-.1 0-.1-.1-.2-.9-7.8-10-14-21.1-14-11.1 0-20.2 6.2-21.1 14.1l-.1.1s-.9 3.1 0 10.8c0 6 9.5 10.9 21.2 10.9s21.2-4.9 21.2-10.9c0 .1.7-7.3 0-10.8z"/>
                                    </g>
                                    <path fill="#c56c94" d="M1148.6 1011.4c-.7 0-1.4-.1-2-.4l-132.1-60.6c-2.5-1.1-3.6-4.2-2.5-6.7 1.1-2.6 4-3.7 6.5-2.6l132.1 60.6c2.5 1.1 3.6 4.2 2.5 6.7-.8 1.9-2.6 3-4.5 3z"/>
                                    <path fill="#9e9c9c" d="M1153.5 1005.3c-.8 3.2-3.2 3-4.9 2.4l-1.7-.8-135.2-62c-.3 2.2.8 4.5 2.9 5.5l130 59.7 2.1 1c.7.3 1.3.4 2 .4h.8c.1 0 .3-.1.4-.1.1 0 .2 0 .3-.1.1 0 .2-.1.3-.1.1 0 .2-.1.3-.1 0 0 .1 0 .1-.1.3-.1.5-.3.8-.5 0 0 .1 0 .1-.1.1-.1.2-.2.4-.3l.1-.1c.4-.4.8-.9 1-1.5.3-1.1.4-2.2.2-3.2z"/>
                                    <g>
                                    <path fill="#e2e2e2" d="M1026.3 951.6c-9.8 0-17.8 4.1-17.8 9.2v41.6c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2v-41.6c0-5.1-7.9-9.2-17.8-9.2z"/>
                                    <path fill="#d1d2d3" d="M1026.3 955.3c-9.8 0-17.8 4.1-17.8 9.2v9.8c0 5.1 8 9.2 17.8 9.2s17.8-4.1 17.8-9.2v-9.8c0-5.1-7.9-9.2-17.8-9.2z"/>
                                    <path fill="#e2e2e2" d="M1047.5 949.3c0-.1 0-.1-.1-.2-.9-7.8-10-14-21.1-14-11.1 0-20.2 6.2-21.1 14.1l-.1.1s-.9 3.1 0 10.8c0 6 9.5 10.9 21.2 10.9s21.2-4.9 21.2-10.9c0 .1.8-7.3 0-10.8z"/>
                                    </g>
                                    <g fill="#9e9c9c">
                                    <path d="M1590.9 821.4c-22.1-10.7-52.8-25.6-83.4-40.4-107.3-52-116.6-56.3-118.1-56.9-.1-.1-.5-.2-.8-.4-4.7-2.3-19.2-9.2-69.7-16.2-57.2-7.8-255.3-16.9-257.3-17h-.3c.5 2.2 2.3 3.9 4.6 4 2 .1 199.7 9.1 256.5 16.9 32.5 4.5 55 9.6 66.8 15.3.8.4 1.3.6 1.9.8 6.2 2.7 125.3 60.4 206 99.6.5.3 1.1.5 1.6.8l1.2.6c2.7 1.3 5.3 2.6 7.9 3.9.1 0 .1.1.2.1.3.1.5.2.8.4 1.1.5 2.2 1.1 3.3 1.6 4 2 8 3.9 11.7 5.7.4.2 27.5 13.7 44.2 34.8-24.7-32.4-77.1-53.6-77.1-53.6zM1679.2 918.4c.6-1.8 1.1-4 1.3-6.5-.2 2.1-.7 4.3-1.3 6.5z"/>
                                    </g>
                                    <path fill="#eeda63" d="M1157.1 973.9c-.7 0-1.4-.1-2-.4L1023 912.8c-2.5-1.1-3.6-4.2-2.5-6.7 1.1-2.6 4-3.7 6.5-2.6l132.1 60.6c2.5 1.1 3.6 4.2 2.5 6.7-.8 1.9-2.6 3.1-4.5 3.1z"/>
                                    <path fill="#9e9c9c" d="M1162 967.7c-.8 3.2-3.2 3-4.9 2.4l-1.7-.8-135.2-62c-.3 2.2.8 4.5 2.9 5.5l130 59.7 2.1 1c.7.3 1.3.4 2 .4h.8c.1 0 .3-.1.4-.1.1 0 .2 0 .3-.1.1 0 .2-.1.3-.1.1 0 .2-.1.3-.1 0 0 .1 0 .1-.1.3-.1.5-.3.8-.5 0 0 .1 0 .1-.1.1-.1.2-.2.4-.3l.1-.1c.4-.4.8-.9 1-1.5.3-1.1.4-2.2.2-3.2z"/>
                                    <g>
                                    <path fill="#ecf0f7" d="M1091.3 740l-8.5 14.9 83.2 3.5 6.5-15.8z"/>
                                    <path fill="#fff" d="M1091.8 741.1l79 2.6-5.7 13.6-80.6-3.3 7.3-12.9m-.6-1.1l-8.5 15 83.2 3.5 6.6-15.8-81.3-2.7z"/>
                                    <path fill="#9ba4ab" d="M1082.7 754.9l.2 24.4 83.2 2-.3-22.9z"/>
                                    <path fill="#575558" d="M1099.3 763.8v-3.4l2.1.1v3.4z"/>
                                    <path fill="#ecf0f7" d="M1099.7 760.8h1.4v2.7l-1.3-.1v-2.6m-.8-.7v4.1l2.8.1v-4.2h-2.8z"/>
                                    <path fill="#575558" d="M1102.7 764v-3.4l2.1.1v3.4z"/>
                                    <path fill="#ecf0f7" d="M1103.1 761h1.4v2.7l-1.3-.1V761m-.8-.8v4.1l2.8.1v-4.2h-2.8z"/>
                                    <path fill="#575558" d="M1106.1 764.1v-3.3h2.1v3.4z"/>
                                    <path fill="#ecf0f7" d="M1106.5 761.1h1.4v2.7l-1.3-.1v-2.6m-.8-.7v4.1l2.8.1v-4.2h-2.8z"/>
                                    <path fill="#575558" d="M1111 764.3v-3.4l2.1.1-.1 3.4z"/>
                                    <path fill="#ecf0f7" d="M1111.3 761.3h1.4v2.7l-1.3-.1v-2.6m-.8-.8v4.1l2.8.1v-4.2h-2.8z"/>
                                    <path fill="#575558" d="M1114.4 764.5v-3.4h2.1l-.1 3.4z"/>
                                    <path fill="#ecf0f7" d="M1114.7 761.4h1.4v2.7l-1.3-.1v-2.6m-.8-.7v4.1l2.8.1v-4.2h-2.8z"/>
                                    <path fill="#575558" d="M1117.8 764.6v-3.4l2.1.1-.1 3.4z"/>
                                    <path fill="#ecf0f7" d="M1118.1 761.6h1.4v2.7l-1.3-.1v-2.6m-.8-.8v4.1l2.8.1v-4.2h-2.8z"/>
                                    <path fill="#768198" d="M1172.4 742.6l-6.6 15.8.3 22.9 6.3-16.8z"/>
                                    <path fill="#6c6c7e" d="M1086 753.9l6.6-11.6 77.7 2.5.5-1.1-78.8-2.6-7.2 12.8z"/>
                                    <path fill="#ecf0f7" d="M1107.6 742.2l-1.8 3.3 8.2.4 1.3-3.5z"/>
                                    <path fill="#9ba4ab" d="M1105.8 745.5v5.4l8.1.4.1-5.4z"/>
                                    <path fill="#768198" d="M1115.3 742.4l-1.3 3.5-.1 5.4 1.4-3.7z"/>
                                    <path fill="#6f7180" d="M1113.9 751.3h3l2.4-3.7h-4z"/>
                                    </g>
                                    <!-- 이름표: 03동굴처분시설 -->
                                    <g class="nametag _nametag03">
                                        <path d="M1488.4 1165.1h-433.1c-3.3 0-6-2.7-6-6v-78.3c0-3.3 2.7-6 6-6h433.1c3.3 0 6 2.7 6 6v78.3c0 3.3-2.7 6-6 6z" class="_box"/>
                                        <path d="M1130.4 1119c0 13.2-6.2 19.8-14.5 19.8s-14.5-6.6-14.5-19.8c0-13.3 6.2-19.9 14.5-19.9 8.3.1 14.5 6.7 14.5 19.9zm-21 0c0 8.6 2.8 12.5 6.5 12.5s6.5-3.9 6.5-12.5-2.8-12.5-6.5-12.5-6.5 3.9-6.5 12.5zM1160.6 1110.5c0 4.4-3.2 7.6-6.4 8.1 3.5.6 7.4 3.6 7.4 8.4 0 7.3-6.2 11.8-14 11.8-8.3 0-13.4-4.6-14-11.9h8.3c.3 3 2.2 4.8 5.7 4.8s5.8-1.9 5.8-4.7c0-3.2-2.6-4.8-6.6-4.8h-3.8v-6.9h3.8c3.4 0 5.5-1.9 5.5-4.7 0-2.8-1.9-4.5-5-4.5-3.3 0-4.8 2.6-4.8 5.3h-8.3c0-7.2 5.4-12.4 13.2-12.4 7.8.2 13.2 4.7 13.2 11.5zM1218.8 1115.9v6h-40.1v-6h16.1v-2.2h-13.7V1099h35.2v6h-27.4v2.8h27.9v6h-14.2v2.2h16.2zm-1.9 15.4c0 5.7-7.5 7.8-18.2 7.8s-18.2-2.1-18.2-7.8c0-5.7 7.5-7.8 18.2-7.8s18.2 2.1 18.2 7.8zm-8.3 0c0-1.4-4-2-9.8-2-5.8 0-9.8.6-9.8 2s4 2 9.8 2c5.7 0 9.8-.5 9.8-2zM1247.2 1117.8v2.5h13.8v11.5h-27.7v1.6h28.1v5.3h-35.8v-11.5h27.7v-1.6h-27.8v-5.2h13.9v-2.5h-16.2v-6h40.1v6h-16.1zm5.9-12.5h-27.6v-6.3h35.5v11.4h-7.9v-5.1zM1285.3 1118.3l11.3 13.6-6.1 4.8-7.9-10.1c-3.2 6.5-8.3 10.2-14.2 10.2v-7.7c5.7-.6 9.4-7.7 9.9-18.1h-9v-7.2h8.9v-4.9h8v4.9h8.4v7.2h-8.5c-.1 2.6-.4 5-.8 7.3zm21.1-19.3v39.6h-7.8v-16.8h-6.6v-7.4h6.6V1099h7.8zM1352.5 1118.9v6.4h-16.1v4.7h-7.9v-4.7h-16.1v-6.4h40.1zm-29.7 13.3h27.9v6.4h-35.9v-11.1h8v4.7zm27.3-15.6h-35.2V1099h7.6v3h19.9v-3h7.6v17.6zm-7.6-5.9v-3h-19.9v3h19.9zM1374.7 1115.8l11.7 16.3-6.4 4.5-8.2-11.8c-3.3 7.6-8.4 11.8-14.5 11.9v-8.1c6.4-.7 10.8-12.3 10.8-28.9l8 .3c.2 6-.4 11.3-1.4 15.8zm20.7-16.8v39.6h-7.8V1099h7.8zM1401.6 1118.9v-6.9c6.2-.7 10.3-6 10.5-12.9l7.9.5c0 2.5-.5 4.8-1.3 7l10.4 6.4-4 5.3-9.8-6.2c-3.2 4-8 6.5-13.7 6.8zm39 14.3v5.4h-35.8V1127h27.6v-1.5h-27.7v-5.4h35.5v11.6h-27.6v1.5h28zm-8.3-24.1h-7.1v-6.9h7.1v-3.2h7.8v19.7h-7.8v-9.6z" class="_text"/>
                                    </g>
                                    <!-- /.이름표:동굴처분시설 -->
                                </g>
                                <!-- /.동굴처분시설 -->
                                <g>
                                    <path fill="#040000" d="M1560.5 235.1s-28.1 6.3-18.8 10.6c9.4 4.3 31.8 9.3 53.4 5.7 21.6-3.5 15.9-9.9 9.4-12.8-6.5-2.8-32.2-6.8-44-3.5z" opacity=".2"/>
                                    <path fill="#954730" d="M1569.9 211.7s-1.4 27 0 29.1c1.4 2.1 7.2 9.9 15.2 0l-3.6-26.2-11.6-2.9z"/>
                                    <path fill="#0c6e40" d="M1574.9 72.7s-6.5-12.1 3.6-15.6 6.5 7.8 6.5 7.8 16.6 9.9 5.1 25.5c0 0 14.7 16.3 4.1 31.2 0 0 11.1 4.3 11.1 12.8s-8.7 12.8-8.7 12.8 13 3.5 12.3 14.9c-.7 11.3-7.2 12.8-7.2 12.8s16.7 4.3 7.2 16.3c-9.4 12.1-16.6 12.1-16.6 12.1s1.4 14.9-10.9 11.3-8.5-7.8-8.5-7.8-24.6 12.1-26.8-12.8c0 0 0-11.3 15.2-15.6 0 0-27.4-16.3-5.1-38.3 0 0-11.7-27.4 14.4-32.6 0 0-16.6-24.2 4.3-34.8z"/>
                                    <path fill="#0c5a30" d="M1570.6 107.5c-26.1 5.3-14.4 32.6-14.4 32.6-22.4 22 5.1 38.3 5.1 38.3-15.2 4.3-15.2 15.6-15.2 15.6 2.2 24.8 26.8 12.8 26.8 12.8s-3.7 4.3 8.5 7.8c12.3 3.5 10.9-11.3 10.9-11.3s7.1 0 16.6-12.1c0 0-36.1 12.8-41.9 0-5.8-12.8 0-17.7 0-17.7s-15.9-18.4-5.8-27.7c0 0-2.2-22 9.4-22 0 0-5.8-13.5 5.1-17.7 0 0-6.6-7.1-6.7-29-11.3 11.6 1.6 30.4 1.6 30.4z"/>
                                </g>
                                <g>
                                    <path fill="#115f32" d="M1946.1 258c-6-3.6-14-3.2-19.7.9s-8.8 11.7-7.6 18.7c-2.2-1.2-5.3-.5-6.8 1.7s-1 5.4.9 7.1c-7.7.4-14.6 7-15.7 14.8-1.1 7.8 3.7 16.1 10.9 18.8-.5 4.8 4.7 9.2 9.2 7.8-.4 7.1 7.8 11 14.5 12.8 9.3 2.5 19 4.7 28.4 3.1s18.8-7.9 21.4-17.4c3.6 4.3 9.1 9 14 6.4 3.8-2 4.5-7.8 2.5-11.7-2-3.9-5.8-6.5-9.4-8.9 5.2.6 9.3-5.4 8.7-10.7-.7-5.3-4.7-9.5-9-12.4-1.8-1.2-3.9-2.3-5-4.3-.9-1.6-1.1-3.5-1.4-5.4-1.3-10.5-4.6-21.6-12.9-27.9-8.3-6.3-22.4-5-26.5 4.6l3.5 2z"/>
                                    <path fill="#0c6e40" d="M1988.6 312c5.2.6 9.3-5.4 8.7-10.7-.7-5.3-4.7-9.5-9-12.4-1.8-1.2-3.9-2.3-5-4.3-.9-1.6-1.1-3.5-1.4-5.4-1.3-10.5-4.6-21.6-12.9-27.9-7.3-5.6-19.3-5.2-24.8 1.7-.4 1.1-.8 2.1-1.1 3.3l1.8 1c-.6-.3-1.2-.5-1.8-.8-.9 3.5-1.1 7.2-.5 10.8-3.1-1.7-7.3-.7-9.3 2.3-2 2.9-1.4 7.4 1.2 9.7-10.5.6-20 9.5-21.5 20.2s5.1 22 15 25.7c-.7 6.6 6.5 12.6 12.6 10.7-.1 2.7.6 5.1 2 7.2 5.9 1.1 11.8 1.5 17.6.6 9.5-1.6 18.8-7.9 21.4-17.4 3.6 4.3 9.1 9 14 6.4 3.8-2 4.5-7.8 2.5-11.7-2-4-5.8-6.6-9.5-9z"/>
                                    <ellipse cx="1949.2" cy="383.4" fill="#040000" opacity=".2" rx="36.1" ry="5.5"/>
                                    <path fill="#954730" d="M1937.7 380.2c-.1 1-.2 2.1.7 2.8.5.4 1.1.6 1.7.7 2.8.6 16.7 2 15.4-4.2-1.3-6.4-2-12.8-2.4-19.3-.6-9.2-.3-18.1 4.1-26.3 2.1-3.8 4-7.7 5.9-11.6.6-1.3 1.2-2.8 1.1-4.2-.1-.7-1.7-3.8-2.8-2.5-.1.1-.1.3-.2.4-1 3.2-2.3 6.2-4.1 9-1 1.4-2 2.7-3.2 4-.5.5-3.8 2.9-3.8 3.4 0-4-.9-8.3-1.3-12.3-.2-2.3-.5-4.6-.7-6.9-.2-1.9 0-4.5-.9-6.2-1.3-2.5-2.6-1.5-4.8.2l-4.7 73z"/>
                                </g>
                                <g>
                                    <path fill="#040000" d="M378.8 778.9s-33 3.7-23.1 9.5c9.8 5.8 24.1 10.4 48.7 9.5s61-4.2 52.6-12.9c-8.3-8.8-58.4-9.9-78.2-6.1z" opacity=".2"/>
                                    <path fill="#754226" d="M397.5 722.5s1.5 17.1 0 27.3-3 29.1-7.4 31.4c0 0 6.9 8.8 23.1 6.9 0 0 6.9 1.4 11.8-3.7 0 0-6.9-17.6-3.9-26.8l22.1-45.8-7.9-6.5-22.6 38.4-1-32.4-14.2 11.2z"/>
                                    <path fill="#015b3a" d="M342.3 621.5s-15.8-18.2 6.4-20.2 26.5 0 26.5 0 3.6-24.2 33.7-13.5c0 0 22.9-7.4 15.8 12.1 0 0 23.6-1.3 25.1 16.2 0 0 22.9 14.1 17.9 30.3s-17.2 24.2-43.7 16.8l-6.4 6.1 2.9 6.7s44.4-6.1 54.5 11.4c0 0 2.1 16.2-13.6 10.8 0 0 2.1 26.9-17.9 17.5 0 0-15 6.7-16.5-6.1 0 0-4.3 7.4-10 0 0 0 .7 29.6-20.1 15.5 0 0-7.9 7.4-12.2-1.3 0 0-3.6 15.7-16.5 5.2 0 0-26.5 9.6-23.6-16.6 0 0-25.8-4 5.7-23.6 0 0-22.2-12.8 7.9-20.9 0 0-33.5-.7-23.6-26.3-.1.1-24.6-20.7 7.7-20.1z"/>
                                    <path fill="#007858" d="M334.6 621.9c5.2 10.6 16.1 26.4 36.3 28.6 0 0-9.3 37.7 7.9 41.1 0 0 28.6 10.9 39.4-8.1 0 0 15 12.1 30.1-1.3 0 0 13.8 14.1 26.6 7.7 0-1.4-.1-2.3-.1-2.3-10-17.5-54.5-11.4-54.5-11.4l-2.7-6.4c-8.9 2.1-22.4 2.9-23.8-10.8 0 0-11.5-3-7.9-12.5 0 0 15.3 11.4 21.3-8.1 0 0 8.7 16.3 23.2-8.1 0 0 7.5 22.8 36.4 18.6.3-.8.6-1.6.8-2.4 5-16.2-17.9-30.3-17.9-30.3-1.4-17.5-25.1-16.2-25.1-16.2 7.2-19.5-15.8-12.1-15.8-12.1-30.1-10.8-33.7 13.5-33.7 13.5s-4.3-2-26.5 0-6.4 20.2-6.4 20.2c-3-.1-5.5 0-7.6.3z"/>
                                </g>
                                <g>
                                    <path fill="#00651d" d="M316.5 793.8c7.7-3.2 17-1.4 23.1 4.4 6.1 5.8 8.5 15.2 6 23.3 2.8-1.1 6.3.3 7.7 3.1 1.4 2.8.4 6.5-2.1 8.2 9 1.8 16.1 10.6 16.2 20 .1 9.4-6.9 18.3-15.8 20.3-.2 5.7-7 10.1-12.1 7.6-.7 8.4-10.9 11.7-19.1 12.7-11.3 1.4-23 2.3-33.9-1.1-10.9-3.5-20.9-12.4-22.4-24-4.9 4.5-12.1 9.1-17.4 5.2-4.2-3-4-9.9-1.1-14.2s7.8-6.7 12.5-8.9c-6.2-.2-10.1-7.9-8.5-14 1.6-6.1 7-10.4 12.6-13.1 2.4-1.1 4.9-2.1 6.6-4.2 1.4-1.7 1.9-4 2.5-6.1 3.2-12.1 8.9-24.6 19.6-30.7s27.1-2.2 30.5 9.9l-4.9 1.6z"/>
                                    <path fill="#007526" d="M257.9 850.3c-6.2-.2-10.1-7.9-8.5-14 1.6-6.1 7-10.4 12.6-13.1 2.4-1.1 4.9-2.1 6.6-4.2 1.4-1.7 1.9-4 2.5-6.1 3.2-12.1 8.9-24.6 19.6-30.7 9.5-5.4 23.5-2.9 28.9 6.2.3 1.3.6 2.7.8 4l-2.3.8c.7-.2 1.5-.4 2.3-.6.5 4.3.2 8.6-1.1 12.7 3.9-1.5 8.7.4 10.5 4.2 1.9 3.8.5 8.9-2.9 11.2 12.3 2.5 22 14.5 22.1 27.4.1 12.8-9.5 25.1-21.7 27.7-.2 7.9-9.6 13.8-16.5 10.4-.3 3.2-1.5 5.9-3.5 8.1-7.1.3-14.1-.2-20.8-2.3-10.9-3.5-20.9-12.4-22.4-24-4.9 4.5-12.1 9.1-17.4 5.2-4.2-3-4-9.9-1.1-14.2 2.8-4.1 7.6-6.5 12.3-8.7z"/>
                                    <ellipse cx="305.1" cy="940" fill="#040000" opacity=".2" rx="34" ry="7.2"/>
                                    <path fill="#954730" d="M315.4 936.1c.1 1.2.2 2.5-.8 3.4-.6.5-1.3.7-2.1.8-3.3.7-19.9 2.1-18.3-5.2 1.7-7.6 2.5-15.1 3.1-22.9.9-10.9.6-21.5-4.5-31.2-2.4-4.6-4.7-9.2-6.8-13.9-.7-1.6-1.4-3.3-1.3-5 .1-.9 2.1-4.5 3.3-2.9.1.1.2.3.2.5 1.1 3.8 2.6 7.4 4.8 10.8 1.1 1.7 2.4 3.3 3.7 4.8.6.6 4.5 3.5 4.5 4 .1-4.8 1.1-9.8 1.7-14.6.3-2.7.6-5.5 1-8.2.3-2.2.1-5.4 1.1-7.4 1.6-3 3.1-1.8 5.7.3l4.7 86.7z"/>
                                </g>
                                <g>
                                    <path fill="#040000" d="M688.4 1269.5s-32.8 2.5-26.4 9c6.4 6.6 25.6 14 52 13.1 26.4-.8 44.8-4.1 37.6-13.1s-63.2-9-63.2-9z" opacity=".2"/>
                                    <path fill="#973b2f" d="M697.9 1242.4v36.1s3.8 2.1 8 2.1 8-2.1 8-2.1v-39.4l-16 3.3z"/>
                                    <path fill="#00490c" d="M682 1149.6s3.2-15.6 22.4-14.8c19.2.8 16.8 24.6 16.8 24.6s16 4.1 18.4 19.7-4 15.6-4 15.6 17.6 26.3 0 32.8c0 0-4.8 14.8-13.6 5.7 0 0 0 22.2-21.6 14.8 0 0-25.6 13.1-28.8-14.8 0 0-18.4-1.6-19.2-18.9 0 0 .8-11.5 14.4-15.6 0 0-17.6-21.3-9.6-23.8 8-2.5 15.2 0 15.2 0s-11.2-22 9.6-25.3z"/>
                                    <path fill="#00571f" d="M735.5 1194.8s6.4 0 4-15.6c-2.4-15.6-18.4-19.7-18.4-19.7s2.4-23.8-16.8-24.6c-19.2-.8-22.4 14.8-22.4 14.8-5.9.9-9.2 3.4-10.9 6.4 3.3 13.3 9.6 28 21.3 28.9 0 0-41.6 32-9.6 38.6 0 0 13.6 18.1 29.6 0 0 0 11.6 6.2 22.9 4.9.2-.5.3-.8.3-.8 17.6-6.7 0-32.9 0-32.9z"/>
                                </g>
                                <g>
                                    <path fill="#040000" d="M2423.7 1337s-24.7 3.4-14.6 11.7c8 6.6 36.5 10.2 57.3 4 20.8-6.2-3.9-15.7-3.9-15.7s-27.9-4.4-38.8 0z" opacity=".2"/>
                                    <path fill="#954730" d="M2438.1 1301l-2.6 42.1s1.7 5.8 7 5.6c5.3-.2 8.7-4.5 8.7-4.5l-4.9-47.6-8.2 4.4z"/>
                                    <path fill="#117039" d="M2430.2 1170.8s-5.5-11.8 7.9-16c0 0 5.5-15.2 18.9-12.7 13.4 2.5 5.5 28.7 5.5 28.7s7.8 11 2.3 20.2c0 0 16.5 20.2 1.9 29.5 0 0 26.5-4.2 6 21.1 0 0 21.3 24.5-4.7 31.2 0 0 20.4 11.8 12.9 23.6 0 0-8.2 5.9-13.7 0 0 0-7.9 19.6-23.7 2.6 0 0-7.9 19.8-20.5 6.9 0 0-28.4 6.5-31.6-11.2-3.2-17.7 8.7-18.6 8.7-18.6s-15.8-21.9 7.9-27c0 0 5.5-16 15.8-9.3 0 0-14.2-7.6-3.2-21.1 0 0-6.3-15.2 8.7-15.2.1.2-18-19.2.9-32.7z"/>
                                    <path fill="#118446" d="M2468.1 1272.9c26.1-6.7 4.7-31.2 4.7-31.2 20.5-25.3-6-21.1-6-21.1 14.5-9.3-1.9-29.5-1.9-29.5 5.5-9.3-2.3-20.2-2.3-20.2s7.9-26.2-5.5-28.7-18.9 12.7-18.9 12.7c-13.4 4.2-7.9 16-7.9 16-18.9 13.5-.8 32.9-.8 32.9-2.8 0-4.8.5-6.3 1.4 1.2 6.9 5.1 17.6 17.9 18.3 0 0-9.9 7.9-4.2 15.2 0 0-15.8 2.8-14.3 19.7 0 0-20-3.4-17.4 9.6 2.6 12.9 10 9 10 9s-6 9 7.8 15.7c0 0 14.9 10.1 23.8-5.1 0 0 7.9 10.7 13.7 2.8 0 0 9.7 7.9 20.7 6 7-11.9-13.1-23.5-13.1-23.5z"/>
                                </g>
                                <g>
                                    <path fill="#115f32" d="M1703.9 600.5c-7.5-4.2-17.4-3.8-24.4 1.1-7 4.8-10.9 13.8-9.4 22.2-2.8-1.5-6.6-.6-8.4 2-1.8 2.5-1.3 6.4 1.1 8.4-9.5.5-18.1 8.2-19.4 17.5-1.4 9.2 4.6 19 13.5 22.2-.6 5.7 5.8 10.9 11.4 9.2-.5 8.4 9.6 13 17.9 15.2 11.5 2.9 23.4 5.5 35.1 3.6 11.7-1.9 23.2-9.3 26.4-20.6 4.5 5.1 11.2 10.7 17.2 7.6 4.7-2.4 5.5-9.2 3.1-13.9-2.5-4.7-7.2-7.7-11.7-10.5 6.4.7 11.5-6.4 10.7-12.6s-5.7-11.3-11.1-14.7c-2.3-1.4-4.8-2.8-6.2-5-1.2-1.9-1.4-4.2-1.7-6.4-1.6-12.4-5.7-25.5-15.9-33s-27.6-6-32.8 5.5l4.6 2.2z"/>
                                    <path fill="#0c6e40" d="M1756.5 664.5c6.4.7 11.5-6.4 10.7-12.6-.8-6.3-5.7-11.3-11.1-14.7-2.3-1.4-4.8-2.8-6.2-5-1.2-1.9-1.4-4.2-1.7-6.4-1.6-12.4-5.7-25.5-15.9-33-9.1-6.7-23.9-6.2-30.6 2.1-.5 1.3-1 2.5-1.3 3.9l2.2 1.1c-.7-.3-1.5-.6-2.3-.9-1.1 4.1-1.4 8.5-.6 12.7-3.8-2-9-.8-11.4 2.7-2.4 3.5-1.8 8.7 1.5 11.5-13 .7-24.7 11.3-26.6 23.9-1.9 12.7 6.3 26.1 18.5 30.4-.8 7.8 8 14.9 15.6 12.6-.2 3.2.8 6 2.5 8.5 7.2 1.3 14.6 1.8 21.8.7 11.7-1.9 23.2-9.3 26.4-20.6 4.5 5.1 11.2 10.7 17.2 7.6 4.7-2.4 5.5-9.2 3.1-13.9-2.6-4.7-7.3-7.8-11.8-10.6z"/>
                                    <ellipse cx="1707.8" cy="748.9" fill="#040000" opacity=".2" rx="44.6" ry="6.5"/>
                                    <path fill="#954730" d="M1693.5 745.1c-.2 1.2-.3 2.5.8 3.3.6.5 1.4.7 2.1.8 3.5.7 20.7 2.3 19.1-5-1.7-7.6-2.4-15.1-3-22.8-.8-10.8-.4-21.4 5.1-31.1 2.6-4.5 5-9.1 7.3-13.8.8-1.6 1.5-3.3 1.4-5-.1-.9-2.1-4.5-3.4-3-.1.1-.2.3-.2.5-1.2 3.8-2.8 7.4-5.1 10.7-1.2 1.7-2.5 3.3-4 4.7-.6.6-4.7 3.4-4.7 4 0-4.8-1.1-9.8-1.6-14.6-.3-2.7-.6-5.5-.9-8.2-.2-2.2 0-5.3-1.1-7.4-1.6-3-3.2-1.8-5.9.2l-5.9 86.7z"/>
                                </g>
                                <g>
                                    <path fill="#00260d" d="M2563.3 1201.5c7.5-4.4 17.6-4 24.7 1.1 7.1 5.1 11 14.6 9.5 23.4 2.8-1.6 6.7-.6 8.5 2.1 1.8 2.7 1.3 6.7-1.1 8.9 9.6.6 18.3 8.7 19.7 18.5 1.4 9.8-4.6 20.1-13.7 23.5.6 6-5.9 11.6-11.6 9.8.5 8.9-9.7 13.8-18.1 16-11.6 3.1-23.7 5.9-35.6 3.9-11.9-2-23.5-9.9-26.8-21.8-4.5 5.4-11.3 11.3-17.5 8-4.8-2.6-5.6-9.7-3.1-14.7 2.5-4.9 7.3-8.1 11.8-11.1-6.5.7-11.6-6.8-10.8-13.4.8-6.6 5.8-11.9 11.3-15.5 2.3-1.5 4.9-2.9 6.3-5.3 1.2-2 1.4-4.4 1.7-6.7 1.6-13.1 5.8-27 16.1-34.9 10.3-7.9 28-6.3 33.2 5.8l-4.5 2.4z"/>
                                    <path fill="#005a1d" d="M2510 1269.1c-6.5.7-11.6-6.8-10.8-13.4s5.8-11.9 11.3-15.5c2.3-1.5 4.9-2.9 6.3-5.3 1.2-2 1.4-4.4 1.7-6.7 1.6-13.1 5.8-27 16.1-34.9 9.2-7.1 24.2-6.5 31 2.2.5 1.3 1 2.7 1.4 4.1l-2.2 1.2c.7-.4 1.5-.7 2.3-.9 1.1 4.4 1.4 9 .6 13.5 3.8-2.1 9.1-.8 11.6 2.8s1.8 9.2-1.5 12.1c13.1.8 25 11.9 26.9 25.3 1.9 13.4-6.4 27.6-18.7 32.2.9 8.2-8.1 15.8-15.8 13.4.2 3.4-.8 6.4-2.5 9-7.3 1.4-14.7 1.9-22.1.7-11.9-2-23.5-9.9-26.8-21.8-4.5 5.4-11.3 11.3-17.5 8-4.8-2.6-5.6-9.7-3.1-14.7 2.5-5.1 7.3-8.3 11.8-11.3z"/>
                                    <ellipse cx="2559.4" cy="1358.4" fill="#040000" opacity=".2" rx="45.1" ry="6.9"/>
                                    <path fill="#954730" d="M2573.8 1354.4c.2 1.2.3 2.7-.8 3.5-.6.5-1.4.7-2.2.9-3.5.8-21 2.4-19.3-5.3 1.7-8 2.5-16 3-24.1.8-11.5.4-22.6-5.1-32.9-2.6-4.8-5-9.6-7.4-14.6-.8-1.7-1.6-3.5-1.4-5.3.1-.9 2.2-4.8 3.5-3.1.1.1.2.3.2.5 1.3 4 2.8 7.8 5.2 11.3 1.2 1.8 2.5 3.4 4 5 .6.6 4.8 3.6 4.8 4.2 0-5.1 1.1-10.4 1.6-15.4l.9-8.7c.3-2.4 0-5.7 1.1-7.8 1.6-3.2 3.2-1.9 6 .3l5.9 91.5z"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <!-- /.지도 일러스트 영역 -->
                </section>
                <!-- /.방폐장 지도 영역 -->
                <!-- VR 영상 영역 -->
                <section id="anchor-vrvideo" class="content_section vrvideo_wrap">
                    <div class="section_inner">
                        <div class="title_wrap">
                            <img src="<?php echo $url_img; ?>/title_vrvideo.png" alt="방사성폐기물 처분 간접체험">
                            <p class="_description">
                            한국원자력환경공단(KORAD)에서 방사성폐기물이 어떻게 처분되고 관리되는지 궁금하셨죠?<br>
                            방사성폐기물의 검사부터 처분까지! 아래 VR영상으로 함께 감상해볼까요?
                            </p>
                        </div>
                        <div class="video_wrap youtube_wrap">
                            <div class="video-container">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/KGscmYfpTgw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.VR 영상 영역 -->
                <!-- yesKORAD 최신 영상 및 뉴스리스트 영역 -->
                <!---section class="content_section yeskorad_wrap">
                    <div class="title_wrap">
                        <img src="<?php echo $url_img; ?>/title_yeskorad.png" alt="YesKORAD">
                        <p class="_description">
                        한국원자력환경공단의 최신 뉴스와 공단 소식을 영상으로 만나보세요.<br>
                        더 많은 소식은 한국원자력환경공단 공식 <span class="_ic_youtube"></span>유튜브채널에서 보실 수 있어요.
                        </p>
                    </div>
                    <div id="yeskorad_list" class="yeskorad_list list_wrap">
                        <div class="slide item_movie video_wrap youtube_wrap">
                            <div class="video-container">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HzAUQy9mh6I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="slide item_movie video_wrap youtube_wrap">
                            <div class="video-container">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4Z5IDXdgURc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="slide item_movie video_wrap youtube_wrap">
                            <div class="video-container">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/SvDeEX1iwmI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="slide item_movie video_wrap youtube_wrap">
                            <div class="video-container">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HzAUQy9mh6I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="slide item_movie video_wrap youtube_wrap">
                            <div class="video-container">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4Z5IDXdgURc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="nav_for_slide">
                        <div id="yeskorad_nav" class="_inner">
                            <div class="slide item_nav">
                                KORAD 기관홍보영상물 국문
                            </div>
                            <div class="slide item_nav">
                                (한국원자력연구원) 고준위 방사성폐기물 처분 시스템
                            </div>
                            <div class="slide item_nav">
                                2020 국가안전대진단 홍보 영상
                            </div>
                            <div class="slide item_nav">
                                KORAD 기관홍보영상물 국문
                            </div>
                            <div class="slide item_nav">
                                (한국원자력연구원) 고준위 방사성폐기물 처분 시스템
                            </div>
                        </div>
                    </div>
                </section--->
                <!-- /.yesKORAD 최신 영상 및 뉴스리스트 영역 -->
                <!-- 방폐마블 영역 -->
                <section id="anchor-marble" class="content_section marble_wrap">
                    <div class="section_inner">
                        <div class="title_wrap">
                            <img src="<?php echo $url_img; ?>/title_marble.png" alt="방폐마블">
                            <p class="_description">
                            주사위를 굴려 게임을 플레이해보세요.<br>
                            중·저준위방사성폐기물이 안전하게 처분 및 관리되는 과정을 함께 알아봐요.
                            </p>
                        </div>
                        <!-- marble -->
                        <div class="marble">
                            <!-- marble_inner -->
                            <div class="marble_inner">
                                <div class="mobile warning">
                                    <h3>모바일에선 게임을 이용하실 수 없습니다.<br>
                                        PC에서 이용해주세요.</h3>
                                </div>
                                <!-- 게임 말 -->
                                <div class="marker" id="marker">
                                    <img src="<?php echo $url_img; ?>/marker.png" alt="게임 말">
                                </div>
                                <!-- 마블 보드게임 -->
                                <table class="board">
                                    <tr>
                                        <td id="td14" class="start">
                                            <span class="_start">출발</span>
                                        </td>
                                        <td id="td1" class="step01 _step">
                                            <div class="_image"><img src="<?php echo $url_img ?>/marble-image-01.png"></div>
                                            <span class="_txt">인수저장시설</span>
                                        </td>
                                        <td id="td2" class="step02 _step">
                                            <div class="_txt_grp">
                                                <span class="_label">인수검사 1단계</span>
                                                <b class="_name">중량검사</b>
                                            </div>
                                        </td>
                                        <td id="td3" class="step03 _step">
                                            <div class="_txt_grp">
                                                <span class="_label">인수검사 2단계</span>
                                                <b class="_name">육안검사</b>
                                            </div>
                                        </td>
                                        <td id="td4" class="step04 _step">
                                            <div class="_txt_grp">
                                                <span class="_label">인수검사 3단계</span>
                                                <b class="_name">표면방사선률 측정</b>
                                            </div>
                                        </td>
                                        <td id="td5" class="step05 _step">
                                            <div class="_txt_grp">
                                                <span class="_label">인수검사 4단계</span>
                                                <b class="_name">엑스선검사</b>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="td12" class="step12 _step">
                                            <div class="_image"><img src="<?php echo $url_img ?>/marble-image-07.png"></div>
                                            <span class="_txt">방폐물 사일로 처분</span>
                                        </td>
                                        <td colspan="4" rowspan="2" class="dice_blank">
                                            <!-- 주사위 굴리기 버튼 -->
                                            <div id="btn_dice" class="btn_dice_wrap" onclick="ga('event','주사위굴리기', {
                                            'event_category':'클릭이벤트',
                                            'event_label':'주사위굴리기'
                                        });">
                                                <img src="<?php echo $url_img; ?>/img_dice.png" class="img_dice">
                                                <span class="dice_txt">주사위<br>굴리기</span>
                                                <!-- <button id="text_roll" alt="주사위 던지기"></button> -->
                                            </div>
                                            <!-- 3D 주사위 -->
                                            <div id="the_dice" class="dice">
                                                <div id="cube" class="">
                                                    <div class="side front">
                                                        <span class="dot dot1"></span>
                                                    </div>
                                                    <div class="inner front"></div>
                                                    <div class="side back">
                                                        <span class="dot dot1"></span>
                                                        <span class="dot dot2"></span>
                                                        <span class="dot dot3"></span>
                                                    </div>
                                                    <div class="inner back"></div>
                                                    <div class="side right">
                                                        <span class="dot dot1"></span>
                                                        <span class="dot dot2"></span>
                                                    </div>
                                                    <div class="inner right"></div>
                                                    <div class="side left">
                                                        <span class="dot dot1"></span>
                                                        <span class="dot dot2"></span>
                                                    </div>
                                                    <div class="inner left"></div>
                                                    <!-- 위에선 보이지 않는 옆면 -->
                                                    <div class="side top">
                                                        <span class="dot dot1"></span>
                                                    </div>
                                                    <div class="inner top"></div>
                                                    <div class="side bottom">
                                                        <span class="dot dot1"></span>
                                                        <span class="dot dot2"></span>
                                                        <span class="dot dot3"></span>
                                                    </div>
                                                    <div class="inner bottom"></div>
                                                </div>
                                                <div class="box_shadow"></div>
                                            </div>
                                        </td>
                                        <td id="td6" class="step06 _step">
                                            <div class="_txt_grp">
                                                <span class="_label">인수검사 5단계</span>
                                                <b class="_name">표면오염검사</b>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="td11" rowspan="2" class="step11 _step">
                                            <div class="_image"><img src="<?php echo $url_img ?>/marble-image-06.png"></div>
                                            <span class="_txt">
                                                여기서 잠깐!<br>동굴처분시설은<br>안전한가요?
                                            </span>
                                        </td>
                                        <td id="td7" class="step07 _step" rowspan="2">
                                            <div class="_txt_grp">
                                                <span class="_label">인수검사 6단계</span>
                                                <b class="_name">드럼핵종분석</b>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="td10" class="step10 _step">
                                            <div class="_image"><img src="<?php echo $url_img ?>/marble-image-05.png"></div>
                                            <span class="_txt">동굴처분시설로 운반</span>
                                        </td>
                                        <td id="td9" class="step09 _step">
                                            <div class="_image"><img src="<?php echo $url_img ?>/marble-image-04.png"></div>
                                            <span class="_txt">처분용기로 포장</span>
                                        </td>
                                        <td id="td8" colspan="2" class="step08 _step">
                                            <span class="_txt">
                                                여기서 잠깐!<br>
                                                인수검사를 통과하지 못하면 어쩌죠?
                                            </span>
                                        </td>
                                        <!-- <td id="td8" class="step08 _step">
                                            <div class="_image"><img src="<?php echo $url_img ?>/marble-image-03.png"></div>
                                            <span class="_txt">인수검사 7단계</span>
                                        </td> -->
                                    </tr>
                                </table>
                            </div>
                            <!-- /.marble_inner -->
                        </div>
                        <!-- /.marble -->
                    </div>
                </section>
                <!-- /.방폐마블 영역 -->
                <!-- 퀴즈이벤트 영역 -->
                <section id="anchor-quiz" class="content_section quiz_wrap">
                    <div class="section_inner">
                        <div class="title_wrap">
                            <img src="<?php echo $url_img; ?>/title_quiz.png" alt="퀴즈이벤트">
                            <p class="_description">
                            아래 제시되는 내용의 빈칸을 채워주세요.<br>
                            코라드 M방폐장 가이드 투어 영상을 보시면 정답을 알 수 있어요.
                            </p>
                        </div>
                        <div class="quiz_grp">
                            <div class="quiz">
                                <div class="_quiz">
                                    <div class="bubble bubble_quiz">Quiz</div>
                                    <div class="text_grp">
                                        <h3>다음 빈칸에 들어갈 정답은 무엇일까요?</h3>
                                        <div class="_txt">
                                            병원, 연구소, 원자력발전소 등에서 발생한 중·저준위방사성폐기물은
                                            경주 중·저준위방사성폐기물 처분시설의
                                            <ul class="blank_grp"><li></li><li></li><li></li><li></li><li></li><li></li></ul>에서 처분적합성을 검사한 후
                                            방사성폐기물을 최종처분하는 <ul class="blank_grp"><li></li><li></li><li></li><li></li><li></li><li></li></ul>의 사일로로 옮겨져
                                            방사성폐기물을 인간 생활권으로부터 영구히 격리시킵니다.
                                        </div>
                                    </div>
                                </div>
                                <div class="_answer">
                                    <form name="quiz_answer">
                                        <div class="bubble bubble_answer">정답</div>
                                        <div class="_answer_grp _answer01">
                                            <ul class="blank_grp">
                                                <li><input class="_blank inputs" name="_blank1" maxlength="1" /></li>
                                                <li><input class="_blank inputs" name="_blank2" maxlength="1" /></li>
                                                <li><input class="_blank inputs" name="_blank3" maxlength="1" /></li>
                                                <li><input class="_blank inputs" name="_blank4" maxlength="1" /></li>
                                                <li><input class="_blank inputs" name="_blank5" maxlength="1" /></li>
                                                <li><input class="_blank inputs" name="_blank6" maxlength="1" /></li>
                                            </ul>
                                        </div>
                                        <div class="_answer_grp _answer02">
                                            <ul class="blank_grp">
                                                <li><input class="_blank inputs" name="_blank7" maxlength="1"/></li>
                                                <li><input class="_blank inputs" name="_blank8" maxlength="1"/></li>
                                                <li><input class="_blank inputs" name="_blank9" maxlength="1"/></li>
                                                <li><input class="_blank inputs" name="_blank10" maxlength="1"/></li>
                                                <li><input class="_blank inputs" name="_blank11" maxlength="1"/></li>
                                                <li><input class="_blank inputs" name="_blank12" maxlength="1"/></li>
                                            </ul>
                                        </div>
                                        <!----------- 2020.10.05 수정 ------------>
                                        <button type="button" id="answer_submit" class="btn btn_submit" data-target="#quiz_submit_pop" onclick="ga('event','정답제출팝업', {
                                            'event_category':'클릭이벤트',
                                            'event_label':'정답제출팝업'
                                        });" data-toggle="modal">정답 제출하기</button>
                                        <!----------- 2020.10.05 수정 ------------>
                                    </form>
                                </div>
                            </div>
                            <div class="information">
                                <div class="row_container">
                                    <div class="col_1_2 _txt">
                                        <b>참여기간</b>
                                        <p>2020년 11월 10일(화) ~ 30일(월)</p>
                                    </div>
                                    <div class="col_1_2 _txt">
                                        <b>당첨자 발표</b>
                                        <p>2020년 12월 8일(화)</p>
                                    </div>
                                </div>
                                <div class="row_container">
                                    <div class="col_1_2 _txt">
                                        <b>참여방법</b>
                                        <p>
                                        ① 코라드 M방폐장 가이드 투어 영상보기<br>
                                        ② 문제를 읽고 여섯글자 빈칸 두 가지 채우기<br>
                                        ③ 정답 제출하기 및 개인정보수집 및 활용동의로 응모완료</p>
                                    </div>
                                    <div class="col_1_2 _txt">
                                        <b>경품</b>
                                        <div class="gifts">
                                            <div class="_gift gift01">
                                                <div class="thumb"></div>
                                                <span>스타벅스<br>아메리카노<br>(10명)</span>
                                            </div>
                                            <div class="_gift gift02">
                                                <div class="thumb"></div>
                                                <span>배스킨라빈스<br>쿼터 (5명)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="annotation">
                            이벤트는 1일 3회 중복참여 가능하며, 중복당첨은 제외됩니다.
                            </div>
                        </div>
                    </div>               
                </section>
                <!-- /.퀴즈이벤트 영역 -->
                <!-- SNS공유 영역 -->
                <section id="anchor-share" class="content_section share_wrap">
                    <div class="text">
                    한국원자력환경공단 M방폐장 투어에 많은 분들이 참여할 수 있도록<br>
                    SNS를 통해 많이 공유해주세요!
                    </div>
                    <ul class="sns_grp">
                        <li class="item kakao">
                            <div class="sns btn_kakao" onclick="ga('event','카카오톡공유', {
                                            'event_category':'SNS공유',
                                            'event_label':'카카오톡공유'
                                        });" id="kakao-link-btn">카카오톡</div>
                        </li>
                        <li class="item fb">
                            <div class="sns btn_fb" onclick="ga('event','페이스북공유', {
                                            'event_category':'SNS공유',
                                            'event_label':'페이스북공유'
                                        });">페이스북</div>
                        </li>
                        <li class="item blog">
                            <div class="sns btn_blog" onclick="ga('event','블로그공유', {
                                            'event_category':'SNS공유',
                                            'event_label':'블로그공유'
                                        });">블로그</div>
                        </li>
                        <li class="item twitter">
                            <div class="sns btn_twitter" onclick="ga('event','트위터공유', {
                                            'event_category':'SNS공유',
                                            'event_label':'트위터공유'
                                        });">트위터</div>
                        </li>
                        <li class="item line">
                            <div class="sns btn_line" onclick="ga('event','라인공유', {
                                            'event_category':'SNS공유',
                                            'event_label':'라인공유'
                                        });">라인</div>
                        </li>
                        <li class="item copylink">
                            <div class="sns btn_copy" onclick="ga('event','URL공유', {
                                            'event_category':'SNS공유',
                                            'event_label':'URL공유'
                                        });">URL 복사</div>
                            <input type="text" style="position: absolute; left: -1000px; top: -1000px" id="ShareUrl"/>
                        </li>
                    </ul>
                </section>
                <!-- /.SNS공유 영역 -->
            </div>
            <!-- 푸터 -->
            <footer id="footer" class="footer_wrap">
                <!-- 로고 및 푸터텍스트 영역 -->
                <div class="col_left">
                    <a href="#" class="logo_footer">
                        <img src="<?php echo $url_img; ?>/logo-grey.png" alt="한국원자력환경공단">
                    </a>
                    <ul class="txt_list">
                        <li class="item">한국원자력환경공단</li>
                        <li class="item">경상북도 경주시 충효천길19</li>
                        <li class="item">대표번호 050-750-4114</li>
                    </ul>
                </div>
                <!-- /.로고 및 푸터텍스트 영역 -->
                <!-- SNS링크 영역 -->
                <div class="col_right">
                    <ul class="sns_grp">
                        <li class="item website">
                            <a href="https://www.korad.or.kr/korad/index.do" target="_blank" class="sns">웹사이트</a>
                        </li>
                        <li class="item fb">
                            <a href="https://www.facebook.com/YesKORAD" target="_blank" class="sns">페이스북</a>
                        </li>
                        <li class="item blog">
                            <a href="http://blog.naver.com/yeskrmc" target="_blank" class="sns">블로그</a>
                        </li>
                        <li class="item insta">
                            <a href="https://www.instagram.com/yeskorad/" target="_blank" class="sns">인스타그램</a>
                        </li>
                        <li class="item youtube">
                            <a href="https://www.youtube.com/user/YesKORAD" target="_blank" class="sns">유튜브</a>
                        </li>
                    </ul>
                </div>
                <!-- /.SNS링크 영역 -->
            </footer>
            <!-- /.푸터 -->
            
            <!-- 방폐장 맵 동영상 팝업 -->
            <div class="modal fade in mapvideo_pop" id="mapvideo_pop" aria-hidden="false" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body video_wrap youtube_wrap">
                            <!-- 콘텐트는 /mapvideo 폴더안의 php 파일에서 로드 됨 -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.방폐장 맵 동영상 팝업 -->
            <!-- 마블 보드게임 설명 팝업 -->
            <div class="modal fade in marble_pop" id="marble_pop" aria-hidden="false" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                            <!-- 콘텐트는 /marble 폴더안의 php 파일에서 로드 됨 -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.마블 보드게임 설명 팝업 -->
            <!----------- 2020.10.05 추가 ------------>
            <!-- 퀴즈 제출하기 팝업 -->
            <div class="modal fade in quiz_submit_pop" id="quiz_submit_pop" aria-hidden="false" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-body">
                            <form id="registform" method="post">
                                <div class="input_grp">
                                    <div class="_title">이벤트 참여하기</div>
                                    <div class="row_container">
                                        <label >이름</label>
                                        <input type="text" class="for_name" placeholder="이름을 입력해주세요." name="name" tabindex="1"/>
                                    </div>
                                    <div class="row_container">
                                        <label >휴대폰 번호</label>
                                        <input type="text" class="for_mobile" name="cel_no" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="휴대폰 번호를 입력해주세요." tabindex="2"/>
                                    </div>
                                </div>
                                <div class="agreement_txt">
                                    <h5>M방폐장 개인정보처리방침</h5>
                                    <br>
                                    총 칙<br><br>
                                    한국원자력환경공단(이하“공단”)은 개인정보 보호법 제30조에 따라 정보주체의 개인정보를 보호하고 이와 관련한 고충을 신속하고 원활하게 처리할 수 있도록 하기 위하여 다음과 같이 개인정보 처리지침을 수립ㆍ공개합니다.
                                    <br><br>
                                    제1조(개인정보의 처리목적)<br><br>
                                    ① 공단은 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보 보호법 제18조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.
                                    <br><br>
                                    <ol>
                                        <li>
                                            이벤트 참여자 취합 및 당첨자 발표<br>
                                            M방폐장 이벤트 참여 목적으로 개인정보를 처리합니다.
                                        </li>
                                    </ol>
                                    <br>
                                    ② 공단은 개인정보 보호법 제32조에 따라 등록ㆍ공개하는 개인정보파일의 처리목적은 다음과 같습니다.
                                    <br><br>
                                    제2조(개인정보의 처리 및 보유기간)
                                    <br><br>
                                    ① 공단은 법령에 따른 개인정보 보유ㆍ이용기간 또는 정보주체로부터 개인정보를 수집 시에 동의 받은 개인정보 보유ㆍ이용기간 내에서 개인정보를 처리ㆍ보유합니다.<br>
                                    ② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.<br>
                                    <ol>
                                        <li>
                                            이벤트 참여 및 경품 발송: 이벤트 발표 후 3개월  
                                        </li>
                                    </ol>
                                    <br>
                                    제3조(개인정보의 제3자 제공)
                                    <br><br>
                                    ① 공단은 정보주체의 개인정보를 제1조(개인정보의 처리 목적)에서 명시한 범위 내에서만 처리하며, 정보주체의 동의, 법률의 특별한 규정 등 개인정보 보호법 제17조에 해당하는 경우에만 개인정보를 제3자에게 제공합니다.
                                    <br><br>
                                    제4조(개인정보처리의 위탁)
                                    <br><br>
                                    ① 공단은 원활한 개인정보 업무처리를 위하여 다음과 같이 개인정보 처리업무를 위탁하고 있습니다.
                                    <br>
                                    M방폐장 홈페이지 관리 및 이벤트 경품 발송
                                    <br>
                                    위탁받는 자 (수탁자) : (주)알에스엔, (주)젤라블루<br>
                                    위탁하는 업무의 내용 : M방폐장 홈페이지 관리 및 이벤트 경품 발송<br>
                                    ② 공단은 위탁계약 체결 시 개인정보 보호법 제25조에 따라 위탁업무 수행목적 외 개인정보 처리금지, 기술적ㆍ관리적 보호조치, 재위탁 제한, 수탁자에 대한 관리ㆍ감독, 손해배상 등 책임에 관한 사항을 계약서 등 문서에 명시하고, 수탁자가 개인정보를 안전하게 처리하는지를 감독하고 있습니다.<br>
                                    ③ 위탁업무의 내용이나 수탁자가 변경될 경우에는 지체 없이 본 개인정보 처리방침을 통하여 공개하도록 하겠습니다.
                                    <br><br>
                                    제5조(정보주체와 법정대리인의 권리ㆍ 의무 및 행사방법)
                                    <br><br>
                                    ① 정보주체는 공단에 대해 언제든지 개인정보 열람ㆍ정정ㆍ삭제ㆍ처리정지 요구 등의 권리를 행사할 수 있습니다.<br>
                                    ② 제1항에 따른 권리 행사는 공단에 대해 개인정보 보호법 시행령 제41조제1항에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며, 공단은 이에 대해 지체 없이 조치하겠습니다.<br>
                                    ③ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.<br>
                                    ④ 개인정보 열람 및 처리정지 요구는 개인정보보호법 제35조 제5항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.<br>
                                    ⑤ 개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.<br>
                                    ⑥ 공단은 정보주체 권리에 따른 열람의 요구, 정정·삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다.<br>
                                    <br>
                                    제6조(처리하는 개인정보 항목)
                                    <br><br>
                                    공단은 다음의 개인정보 항목을 처리하고 있습니다.
                                    <br>
                                    <ol>
                                        <li>
                                            이벤트 참여<br>
                                            필수항목 : 이름, 전화번호
                                        </li>
                                    </ol>
                                    <br>
                                    제7조(개인정보의 파기)
                                    <br><br>
                                    ① 공단은 개인정보 보유기간의 경과, 처리목적 달성 등 개인정보가 불필요하게 되었을 때에는 지체 없이 해당 개인정보를 파기합니다.<br>
                                    ② 정보주체로부터 동의 받은 개인정보 보유기간이 경과하거나 처리목적이 달성되었음에도 불구하고 다른 법령에 따라 개인정보를 계속 보존하여야 하는 경우에는, 해당 개인정보(또는 개인정보파일)을 별도의 데이터베이스(DB)로 옮기거나 보관 장소를 달리하여 보존합니다.<br>
                                    ③ 개인정보 파기의 절차 및 방법은 다음과 같습니다.<br>
                                    <ol>
                                        <li>
                                            파기절차<br>
                                            공단은 파기하여야 하는 개인정보(또는 개인정보파일)에 대해 개인정보 파기계획을 수립하여 파기합니다. 공단은 파기 사유가 발생한 개인정보(또는 개인정보파일)을 선정하고, 공단은 개인정보 보호책임자의 승인을 받아 개인정보(또는 개인정보파일)을 파기합니다.
                                        </li>
                                        <li>
                                            파기방법<br>
                                            공단은 전자적 파일 형태로 기록ㆍ저장된 개인정보는 기록을 재생할 수 없도록 로우레밸포멧(Low Level Format) 등의 방법을 이용하여 파기하며, 종이 문서에 기록ㆍ저장된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.
                                        </li>
                                    </ol>
                                    <br>
                                    제8조(개인정보의 안전성 확보조치)
                                    <br><br>
                                    ① 공단은 개인정보의 안전성 확보를 위해 다음과 같은 조치를 취하고 있습니다.<br>
                                    <ol>
                                        <li>
                                            관리적 조치 : 내부관리계획 수립ㆍ시행, 정기적 직원 교육 등
                                        </li>
                                        <li>
                                            기술적 조치 : 개인정보처리시스템 등의 접근권한 관리, 접근통제시스템 설치, 고유식별정보 등의 암호화, 보안프로그램 설치
                                        </li>
                                        <li>
                                            물리적 조치 : 전산실, 자료보관실 등의 접근통제
                                        </li>
                                    </ol>
                                    <br>
                                    제9조(개인정보 자동 수집 장치의 설치·운영 및 거부에 관한 사항)
                                    <br><br>
                                    ① 공단은 이용자에게 개별적인 맞춤서비스를 제공하기 위해 이용정보를 저장하고 수시로 불러오는 ‘쿠키(cookie)’를 사용합니다.<br>
                                    ② 쿠키는 웹사이트를 운영하는데 이용되는 서버(http)가 이용자의 컴퓨터 브라우저에게 보내는 소량의 정보이며 이용자의 PC 컴퓨터내의 하드디스크에 저장되기도 합니다.<br>
                                    <ol>
                                        <li>
                                            쿠키의 사용목적: 이용자가 방문한 각 서비스와 웹 사이트들에 대한 방문 및 이용형태, 인기 검색어, 보안접속 여부, 등을 파악하여 이용자에게 최적화된 정보 제공을 위해 사용됩니다.
                                        </li>
                                        <li>
                                            쿠키의 설치·운영 및 거부 : 웹브라우저 상단의 도구>인터넷 옵션>개인정보 메뉴의 옵션 설정을 통해 쿠키 저장을 거부 할 수 있습니다.
                                        </li>
                                        <li>
                                            쿠키 저장을 거부할 경우 맞춤형 서비스 이용에 어려움이 발생할 수 있습니다.
                                        </li>
                                    </ol>
                                    <br>
                                    제10조(개인정보 보호책임자)
                                    <br><br>
                                    ① 공단은 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다.<br>
                                    <br><br>
                                    개인정보 보호책임자<br>
                                    성명 : 배 한 종<br>
                                    직책 : 품질안전본부장<br>
                                    연락처 : 054-750-4004, herennow@korad.or.kr, 054-750-4199<br>
                                    ※ 개인정보 보호 담당부서로 연결됩니다.<br>
                                    <br><br>
                                    개인정보 보호 담당부서<br>
                                    부서명 : 정보보안팀<br>
                                    담당자 : 이 승 목<br>
                                    연락처 : 054-750-4194, kirin4711@korad.or.kr, 054-750-4199<br>
                                    ② 정보주체께서는 공단의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. 공단은 정보주체의 문의에 대해 지체 없이 답변 및 처리해드릴 것입니다.
                                    <br><br>
                                    제11조(개인정보 열람청구)
                                    <br><br>
                                    ① 정보주체는 개인정보 보호법 제35조에 따른 개인정보의 열람 청구를 아래의 부서에 할 수 있습니다. 공단은 정보주체의 개인정보 열람청구가 신속하게 처리되도록 노력하겠습니다.
                                    <br><br>
                                    개인정보 열람청구 접수ㆍ처리부서<br>
                                    부서명 : 정보보안팀<br>
                                    담당자 : 이 승 목<br>
                                    연락처 : 054-750-4194, kirin4711@korad.or.kr, 054-750-4199<br>
                                    ② 정보주체께서는 제1항의 열람청구 접수ㆍ처리부서 이외에, 행정안전부의 ‘개인정보보호 종합지원 포털’ 웹사이트(www.privacy.go.kr)를 통하여서도 개인정보 열람청구를 하실 수 있습니다.<br>
                                    <br><br>
                                    제12조(권익침해 구제방법)
                                    <br><br>
                                    정보주체는 아래의 기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의하실 수 있습니다.
                                    아래의 기관은 공단과는 별개의 기관으로서, 공단의 자체적인 개인정보 불만처리, 피해구제 결과에 만족하지 못하시거나 보다 자세한 도움이 필요하시면 문의하여 주시기 바랍니다.<br>
                                    개인정보 침해신고센터 (한국인터넷진흥원 운영)<br>
                                    소관업무 : 개인정보 침해사실 신고, 상담 신청<br>
                                    홈페이지 : privacy.kisa.or.kr<br>
                                    전화 : (국번없이) 118<br>
                                    주소 : (58324) 전남 나주시 진흥길 9(빛가람동 301-2) 3층 개인정보침해신고센터<br>
                                    개인정보 분쟁조정위원회<br>
                                    소관업무 : 개인정보 분쟁조정신청, 집단분쟁조정 (민사적 해결)<br>
                                    홈페이지 : www.kopico.go.kr<br>
                                    전화 : (국번 없이) 1833-6972<br>
                                    주소 : (03171)서울특별시 종로구 세종대로 209 정부서울청사 4층<br>
                                    대검찰청 사이버범죄수사단 : 02-3480-3573 (www.spo.go.kr)<br>
                                    경찰청 사이버안전국 : 182 (http://cyberbureau.police.go.kr)
                                    <br><br>
                                    제13조(개인정보 처리방침 변경)
                                    <br><br>
                                    ① 이 개인정보 처리방침은 2020. 10. 30. 부터 적용됩니다. 
                                </div>
                                <div class="_agreement">
                                    <input type="checkbox" class="checkbox" name="agree" tabindex="3"> <span>개인정보 처리방침을 읽고 이에 동의합니다.</span>
                                </div>
                                <button onclick="ga('event','정답제출하기', {
                                            'event_category':'클릭이벤트',
                                            'event_label':'이벤트참여'
                                        });" class="btn btn_submit" tabindex="4">제출하기</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.퀴즈 제출하기 팝업 -->
            <!----------- /.End 2020.10.05 추가 ------------>
        </div>
        <!-- /.content_container 사이트 콘텐트 영역 -->
    </div>
    <!-- /.body_container -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
<!-- Start Script for IFDO -->
<script type='text/javascript'>
var _NB_gs = 'wlog.ifdo.co.kr'; 
var _NB_MKTCD = 'NVA2203202240';
var _NB_APPVER=''; /* 하이브리드 앱 버전 */
(function(a,b,c,d,e){var f;f=b.createElement(c),g=b.getElementsByTagName(c)[0];f.async=1;f.src=d;
f.setAttribute('charset','utf-8');
g.parentNode.insertBefore(f,g)})(window,document,'script','//script.ifdo.co.kr/jfullscript.js');	
</script>
<!-- End Script for IFDO -->
<script>
    $(function() {
        $(".inputs").on("keyup", function () {

            var maxlength = $(this).attr("maxlength");
            var thisEq = $(".inputs").index(this);
            var byte = byteCheck($(this));

            if (byte > maxlength ) {
                $(".inputs").eq(thisEq+1).focus();
                return false;
            }
        });

        function byteCheck(el){
            var codeByte = 0;
            for (var idx = 0; idx < el.val().length; idx++) {
                var oneChar = escape(el.val().charAt(idx));
                // console.log( "oneChar" + oneChar.length);
                if ( oneChar.length == 1 ) {
                    //codeByte ++;
                    codeByte += 2;
                } else if (oneChar.indexOf("%u") != -1) {
                    //codeByte += 2;
                    codeByte ++;
                } else if (oneChar.indexOf("%") != -1) {
                    codeByte ++;
                }
            }
            return codeByte;
        }

        $("#answer_submit").on("click", function() {

            var answer = "";
            $('.inputs').each(function(index) {
                answer += $(".inputs").eq(index).val();
            });

            if (answer != "지상지원시설동굴처분시설" ) {
                alert("정답이 아닙니다. 영상을 다시 한번 확인해주십시오");
                return false;
            }

            $('#quiz_submit_pop').modal('show');
        });

        if($("#registform").length > 0) {

            $("#registform").validate({
                submitHandler: function(form, event) {

                    if ($("input[name='name']").val()=='') {
                        alert("이름을 입력하세요.");
                        return false;
                    }
                    if ($("input[name='cel_no']").val()=='') {
                        alert("휴대폰번호를 입력하세요.");
                        return false;
                    }
                    if (!$("input:checkbox[name='agree']").is(':checked')) {
                        alert("개인정보 처리방침에 동의하셔야 합니다.");
                        return false;
                    }

                    $.ajax({
                        url: './exec.php' ,
                        type: "POST",
                        data: $('#registform').serialize(),
                        dataType: "json",
                        success: function( response ) {

                            if (response.success==true) {
                                alert("이벤트 참여가 완료되었습니다.");
                                location.reload();
                                return;
                            } else {
                                alert(response.message);
                                return;
                            }
                        },
                        error:function(jqXHR,status,errorThrown ){
                            alert("오류가 발생했습니다.");
                        }
                    });
                }
            });
        };

        $(".btn_fb").on("click", function(e){
            share_facebook();
            e.preventDefault();
        });
        $(".btn_twitter").click(function(e){
            window.open("https://twitter.com/share?text=코라드 M방폐장 랜선투어에 참여해보세요!&url=" + location.href);
            didit = true;
            e.preventDefault();
        });
        // $(".btn_kakao").click(function(e){
        //     // window.open("https://story.kakao.com/share?url=" + location.href);
        //     // didit = true;
        //
        //     e.preventDefault();
        // });
        $(".btn_blog").click(function(e) {
            window.open("http://blog.naver.com/openapi/share?url=" + location.href + "&title=한국원자력환경공단");
           e.preventDefault();
        });
        $(".btn_line").click(function(e){
            var url = "http://line.me/R/msg/text/?" + encodeURIComponent("코라드 M방폐장 랜선투어\n코라드 M방폐장 랜선투어에 참여해보세요!\n" + location.href);
            window.open(url);
            e.preventDefault();
        });
        $(".btn_copy").click(function(e){
            var obShareUrl = document.getElementById("ShareUrl");
            obShareUrl.value = location.href;
            obShareUrl.select();
            document.execCommand("copy");
            obShareUrl.blur();
            alert("URL이 복사되었습니다");
        });

        function share_facebook() {
            var ShareUrl = location.href;
            newwindow = window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(ShareUrl),'facebookpopup', 'toolbar=0, status=0, width=626, height=436');
            if (window.focus) {newwindow.focus();}
        };


    });

    Kakao.init('59eeafda9612dfacdda09ccc07cc3b2c');
    Kakao.Link.createDefaultButton({
        container: '#kakao-link-btn',
        objectType: 'feed',
        content: {
            title: '한국원자력환경공단',
            description: '코라드 M방폐장 랜선투어에 참여해보세요!',
            imageUrl: location.href + '/public/img/sns-thumb.jpg',
            link: {
                mobileWebUrl: location.href,
                webUrl: location.href
            }
        },
        buttons: [
            {
                title: '웹으로 보기',
                link: {
                    mobileWebUrl: location.href,
                    webUrl: location.href
                }
            }
        ]
    });
</script>
</html>
