<!DOCTYPE html>
<html lang="en">
<!-- ヘッド -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PHP/SQL課題</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />

    <link rel='stylesheet' href='./assets/css/style.css' />
    <link rel='stylesheet' href='mobile.css' />
    <link rel='icon' href='src/img/plane.JPG'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            padding: 0;
            margin: 0;
        }

        h1 {
            padding: 0;
            margin: 0;
            font-size: 50%;
        }
    </style>
</head>
<!-- テーマ背景 -->
<body class="bg-theme bg-theme3" id='body'>
<!-- ラッパー -->
<div id="wrapper">
<!-- サイドバー -->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">

    <div class="brand-logo">
        <a href="index.php">
            <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">管理者画面</h5>
        </a>
    </div>

    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">設定画面</li>

        <li>
        <a href="index.php">
            <i class="zmdi zmdi-view-dashboard"></i> <span>ホーム/分析</span>
        </a>
        </li>

        <li>
        <a href="forms.php">
            <i class="zmdi zmdi-format-list-bulleted"></i> <span>顧客登録</span>
        </a>
        </li>

        <li>
        <a href="clients_test.php">
            <i class="zmdi zmdi-grid"></i> <span>顧客情報(発表用)</span>
        </a>
        </li>
        
        <li>
        <a href="geo.php">
            <i class="zmdi zmdi-truck"></i> <span>運送実績(マップ)</span>
        </a>
        </li>
        
        <li>
        <a href="portfolio.php">
            <i class="zmdi zmdi-github"></i> <span>じゅんじゅん</span>
        </a>
        </li>

<!-- 
        <li>
        <a href="chart.php">
            <i class="zmdi zmdi-chart"></i> <span>チャート②</span>
        </a>
        </li> -->

        <li>
        <a href="https://github.com/JayU-ML/my-portfolio/blob/main/README.md" target="blank">
            <b>Publish Your portfolio on GitHub! わっしょい!わっしょい！わっしょい!</b>
        </a>
        </li>

    </ul>

</div>
<!-- トップバー -->
<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
    <ul class="navbar-nav mr-auto align-items-center">
        <li class="nav-item">
        <a class="nav-link toggle-menu" href="javascript:void();">
            <i class="icon-menu menu-icon"></i>
        </a>
        </li>
        <li class="nav-item">
        <form class="search-bar">
            <input type="text" class="form-control" placeholder="検索">
            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
        </form>
        </li>
    </ul>

    <ul class="navbar-nav align-items-center right-nav-link">
        <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
            href="javascript:void();">
            <i class="fa fa-envelope-open-o"></i></a>
        </li>
        <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
            href="javascript:void();">
            <i class="fa fa-bell-o"></i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle"
                alt="user avatar"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-item user-details">
            <a href="javaScript:void();">
                <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110"
                    alt="user avatar"></div>
                <div class="media-body">
                    <h6 class="mt-2 user-title">じゅんじゅん</h6>
                    <p class="user-subtitle">hello@jaysan.io</p>
                </div>
                </div>
            </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
        </ul>
        </li>
    </ul>
    </nav>
</header>

<div class="clearfix"></div>
	
<div class="content-wrapper">
<div class="container-fluid">

   <!-- <nav class='title fixed-elements'>
      <div class='container'>
         <a href='#'><i class='fa fa-user fa-3x nav-icon small-icon' aria-hidden=true></i>
            <div class='overlay'>
               <div class='text'><b class='nav-text t'>About Me</b></div>
            </div>
         </a>
      </div>
      <div class='container'>
         <a href='#resume'><i class='fa fa-file-text fa-3x nav-icon small-icon' aria-hidden=true></i>
            <div class='overlay'>
               <div class='text'><b class='nav-text t'>Resumé (coming soon..)</b></div>
            </div>
         </a>
      </div>
      <div class='container'>
         <a href='#portfolio'><i class='fa fa-code-fork fa-3x nav-icon small-icon' aria-hidden=true></i>
            <div class='overlay'>
               <div class='text'><b class='nav-text t'>GitHub</b></div>
            </div>
         </a>
      </div>
      <div class='container'>
         <a href='#resources'><i class='fa fa-bookmark fa-3x nav-icon small-icon' aria-hidden=true></i>
            <div class='overlay'>
               <div class='text'><b class='nav-text t'>My songs</b></div>
            </div>
         </a>
      </div>
   </nav> -->
   <nav class='title fixed-elements-right'>
      <script src='src/js/dark.js'></script>
      <div class='dark-mode show' onclick='toggleDark()' onmouseover="" style="cursor: pointer;"><i
            class='fa fa-moon-o fa-3x nav-icon'></i>
         <div class='overlay'>
            <div class='text nav-text t'><b>Dark Mode</b></div>
         </div>
      </div>
      <div class='light-mode' onclick='toggleDark()' onmouseover="" style="cursor: pointer;"><i
            class='fa fa-sun-o fa-3x nav-icon'></i>
         <div class='overlay'>
            <div class='text nav-text t'><b>Light Mode</b></div>
         </div>
      </div>
      </div>
   </nav>
   <div class='view'>
      <div class='main'>
         <div class='mainhead'>
            <div class='descrip' id='titlename'>
               <!-- <h3 class='bigtitle t'>JunJun's Portfolio</h3> -->
               <h2>JunJun's Portfolio</h2><br>
               <h5>GitHub Pages でポートフォリサイト作ってみました！</h5>
               <h5>興味のあるかたもしよかったら〜</h5>
               <h5>https://github.com/JayU-ML/my-portfolio/blob/main/README.md</h5>
               <div class='side-right'>
                  <a href='https://github.com/JayU-ML' title='GitHub' target='_blank'><i class='fa fa-github top-icon'
                        aria-hidden=true></i></a>
               </div>
            </div>
            <section id='about'>
               <div class="lightback">
                  <h2 class='indescrip t'></h2>
                  <br><br>
                  <div class='res-segment centered'>
                     <!-- <div id='tldr-button' class='text-module t'></div> -->
                     <!-- <div id='less-button' class='text-module t'>Less</div>
                     <div id='default-button' class='text-module t'>Default</div>
                     <div id='more-button' class='text-module t'>More</div> -->

                  </div>
            </section>

            </section>
            <section id="portfolio">
               <div class="lightback">
                  <h2 class='indescrip t'>Portfolio</h2>
                  <br>

                  <p class="centered">

                     <a href="https://github.com/JayU-ML/fakebook" target="_blank"><img class="portfolio-pin"
                           src="https://github-readme-stats.vercel.app/api/pin/?username=JayU-ML&repo=fakebook" /></a>
                     <br><br>

                     <a href="https://github.com/JayU-ML/video-chat" target="_blank"><img class="portfolio-pin"
                           src="https://github-readme-stats.vercel.app/api/pin/?username=JayU-ML&repo=video-chat" /></a>
                     <br><br>

                     <a href="https://github.com/JayU-ML/translate-with-gas" target="_blank"><img class="portfolio-pin"
                           src="https://github-readme-stats.vercel.app/api/pin/?username=JayU-ML&repo=translate-with-gas" /></a>
                     <br><br>



                     <samp>
                        <a href="https://github.com/JayU-ML/Gs-quiz-app" target="_blank"><img class="portfolio-pin"
                              src="https://github-readme-stats.vercel.app/api/pin/?username=JayU-ML&repo=Gs-quiz-app" /></a>
                        <br><br>

                        <a href="https://github.com/JayU-ML/ml-coursera" target="_blank"><img class="portfolio-pin"
                              src="https://github-readme-stats.vercel.app/api/pin/?username=JayU-ML&repo=ml-coursera" /></a>
                        <br><br> -->
                     </samp>
                  </p>

               </div>
               <br>
            </section>
         </div>
         </section>
         <section id='resources'>
            <div class='lightback'>
               <h2 class='indescrip t'>My coding music</h2>
               <br>

               <script src='src/js/popup-handler.js'></script>

               <div id='resource-dir' class='res-segment'>
                  <table id="resource-table">
                     <tr>
                        <th class='t'>Video Title</th>
                        <th class='t'>Creater</th>
                        <th>URL</th>
                     </tr>

                     <tr>

                        <td>Fengtimo 《我想对你说baby》 Best NightCore Chinese Mix 中文合集 <div class='popup'
                              onclick='togglePopup("aoc2020")'><i class='fa fa-info-circle'></i><span class='popuptext'
                                 id='aoc2020'>YouTube</span></div>
                        </td>

                        <td>Clix Music</td>
                        <td><a href='https://youtu.be/HvG7IYPIysI?t=367' class='table-url' target='_blank'><span
                                 class='t'>YouTube URL</span> <i class='fa fa-external-link'></i></a>
                        </td>
                     </tr>

                     <tr>
                        <td>Miss Monique - Live @ Radio Intense 07.04.2020 [Progressive House / Melodic Techno]<div
                              class='popup' onclick='togglePopup("pbwiki")'><i class='fa fa-info-circle'></i><span
                                 class='popuptext' id='pbwiki'></span></div>
                        </td>
                        <td>Miss Monique</td>
                        <td><a href='https://youtu.be/bZDKaSk-geU?t=298' class='table-url' target='_blank'><span
                                 class='t'>YouTube URL</span> <i class='fa fa-external-link'></i></a>
                        </td>
                     </tr>
                  </table>
               </div>
               <br>
            </div>
      </div>
      <footer class='foot' id='contact'>
         <a class='legal t'>© 2021 Jay U. | yokohama, japan</a>
         <br><br>
         <a class='legal email' href='ueno@mirai-log.com  target=' _blank'>ueno@mirai-log.com</a>
         <br><br>
         <a href='https://github.com/JayU-ML' title='GitHub' target='_blank'><i class='fa fa-github' aria-hidden=true
               style='margin: 1%; font-size: 36px; color: white'></i></a>
         <a href='https://www.youtube.com/channel/UCbpWE5N3WSdMRGrCOi4Nh4w' title='YouTube' target='_blank'><i
               class='fa fa-youtube-play' aria-hidden=true style='margin: 1%; font-size: 36px; color: white'></i></a>
         <a href='https://twitter.com/___JayU' title='Twitter' target='_blank'><i class='fa fa-twitter' aria-hidden=true
               style='margin: 1%; font-size: 36px; color: white'></i></a>

         <!-- <a class='other-social' href='https://devpost.com/kevinjycui' title='Devpost' target='_blank'><img
               src='src/img/media-icons/devpost.png' class='media-icon'></img></a>
         <a class='other-social' href='https://keybase.io/kevinjycui' title='Keybase' target='_blank'><img
               src='src/img/media-icons/keybase.png' class='media-icon'></img></a>
         <a class='other-social' href='https://dmoj.ca/user/ManchurioX' title='DMOJ' target='_blank'><img
               src='src/img/media-icons/dmoj.png' class='media-icon'></img></a> -->

         <a href='https://discord.gg/rKBhFURk8P' title='Discord' target='_blank'><img
               src='src/img/media-icons/discord.png' class='media-icon'></img></a>
         <br>
         <!-- <a id='more-socials' class='legal email'>ジーズアカデミー非公式Discord</a> -->
         <!-- <a id='zh' href='?lang=zh' class='legal email locale show'>中文</a>
         <a id='en' href='?lang=en' class='legal email locale'>English</a> -->
         <script src='src/js/socials.js'></script>
         <br><br><br>
      </footer>
   </div>
   <script src='src/js/localise.js'></script>
   <div class="loader-wrapper" id="load">
      <span class="loader"><span class="loader-inner"></span></span>
   </div>
   <script>
      window.onload = function () {
         window.scrollTo(0, 0);
         document.getElementById("load").className += " loaded";
      }
   </script>




</div>
</div>

<?= include("assets/php/bottom.php"); ?>