<?php 
require_once('../../../../_class/baglan.php');
require_once('../../../../_class/fonksiyon.php');
Header('Content-type: text/css; charset:UTF-8');
?>
@import url('https://fonts.googleapis.com/css?family=Rajdhani:300,500,700&display=swap&subset=latin-ext');

html {
    font-family: "Roboto", sans-serif;
    scroll-behavior: smooth;
    /*font-family: "Montserrat", sans-serif;*/
}

body {
    font-family: "Roboto", sans-serif;
    font-size: 16px;
    line-height: 1.6;
    font-weight: 400;
    color: #6f6f6f;
}

img {
    max-width: 100%;
}

a {
    text-decoration: none;
}

.header {
    width: 100%;
}

.header-top {
    width: 100%;
    z-index:50;
    position: fixed;
    background-image: linear-gradient(to bottom, <?php echo renk1;?> , <?php echo renk2;?>);
}

.header-top>div>div {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.header-top .navs {
    display: inline;
    line-height: 60px;
    margin: 0;
    font-size: 12px;
    font-weight: 500;
}

.header-top .navs li {
    display: inline;
    margin: 0px 8px;
    position: relative;
}

.header-top .social {
    display: inline;
    line-height: 60px;
    margin: 0;
    font-size: 12px;
    font-weight: 500;
    padding-left: 10px;
}

.header-top .social li {
    display: inline;
    margin: 0px 5px;
}

.header-top .social li a i {
    width: 28px;
    height: 28px;
    line-height: 26px;
    text-align: center;
    border: 2px solid <?php echo renk3;?>;
    border-radius: 50%;
    font-size: 14px;
    opacity: 0.8;
    transition: all 0.3s;
}

.header-top ul li a {
    color: #fff;
    opacity: .7;
    font-size: 13px;
    text-decoration: none;
    font-weight: 400;
}

.header-top ul li a:hover i {
    opacity: 1;
}

.h-border {
    border-right: 1px solid #fff;
    width: 1px;
    opacity: .4;
    height: 25px;
    margin: 0px 20px;
}

.hover-bar:before {
    content: "";
    position: absolute;
    right: 0;
    bottom: -5px;
    left: 0;
    background: <?php echo renk3;?>;
    width: 0;
    height: 1px;
    -webkit-transition: width 0.3s;
    transition: width 0.3s;
}

.hover-bar:hover:before {
    width: 100%;
}

.header-gradyen {
    height: 170px !important;
    background: rgb(12, 37, 38);
    background: -moz-linear-gradient(0deg,
            rgba(12, 37, 38, 0) 0%,
            rgba(12, 37, 38, 0.5718662464985995) 30%,
            rgba(12, 37, 38, 0.8071603641456583) 60%,
            rgba(12, 37, 38, 1) 100%);
    background: -webkit-linear-gradient(0deg,
            rgba(12, 37, 38, 0) 0%,
            rgba(12, 37, 38, 0.5718662464985995) 30%,
            rgba(12, 37, 38, 0.8071603641456583) 60%,
            rgba(12, 37, 38, 1) 100%);
    background: linear-gradient(0deg,
            rgba(12, 37, 38, 0) 0%,
            rgba(12, 37, 38, 0.5718662464985995) 30%,
            rgba(12, 37, 38, 0.8071603641456583) 60%,
            rgba(12, 37, 38, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0c2526", endColorstr="#0c2526", GradientType=1);
}
.header-bottom {
    top: 60;
    width: 100%;
    height: 130px;
    position: fixed;
    z-index: 50;
    background-image: linear-gradient(to bottom, <?php echo renk1;?> , <?php echo renk2;?>4d);
}

.header-bottom .logo {
    position: absolute;
    margin-top: -36px;
    max-height: 200px;
    max-width:200px;
}

.header-bottom .logo-box {
    height: 130px;
}

.header-bottom .navs {
    display: flex;
    justify-content: space-between;
    margin: 34px 0px;
    padding: 0;
    font-size: 18px;
    font-weight: 500;
    line-height: 60px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.4);
}

.header-bottom .navs li {
    display: inline;
    position: relative;
}

.header-bottom .navs li:first-child {
    margin-left: 0;
}

.header-bottom .navs li:last-child {
    margin-right: 0;
    margin-bottom: 0;
}

.header-bottom .navs li a {
    color: #fff;
    text-decoration: none;
    position: relative;
    line-height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 600;
}

.header-item {
    position: static !important;
}

.header-item .header-dropdown {
    visibility: hidden;
    opacity: 0;
    width: 100%;
    position: absolute;
    left: 0;
    top: 94px;
    transition: unset;
    overflow: hidden;
    height: 0px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.header-item:hover>.header-dropdown {
    visibility: visible;
    opacity: 1;
    transition: all 0.3s;
    height: auto;
}

.header-dropdown .link-box {
    background: white;
    width: 100%;
    height: 100%;
    box-shadow: 0px 0px 30px 4px rgba(0, 0, 0, 0.1);
    transition: all 0.3s;
    padding: 20px 0px;
}

.header-dropdown .link-box:hover {
    box-shadow: 0px 0px 30px 4px rgba(0, 0, 0, 0.2);
    transform: scale(1.1);
}

.header-dropdown .link-box a {
    text-align: center;
    padding: 10px 10px;
    text-decoration: none;
    color: black !important;
    display: block;
    width: 100%;
    height: 100%;
    line-height: 22px !important;
    transition: all 0.3s;
}

.header-item2:hover>.header-dropdown-small {
    visibility: visible;
    opacity: 1;
}

.header-dropdown-small {
    visibility: hidden;
    opacity: 0;
    padding: 0;
    position: absolute;
    top: 60px;
    left: 0;
    width: max-content;
    transition: all 0.3s;
}

.header-dropdown-small li a {
    color: black;
    text-decoration: none;
    line-height: 25px !important;
    padding: 10px !important;
    justify-content: flex-start !important;
    transition: all 0.3s;
}

.header-dropdown-small li a:hover {
    background: <?php echo renk1;?>;
}

.right-shadow {
    box-shadow: 9px 0px 5px -7px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.header-tabs {
    float: right;
    list-style: none;
    color: <?php echo renk1;?>;
}

.header-tabs li {
    display: list-item !important;
    cursor: pointer;
    padding: 0px 100px 0px 20px;
    line-height: 40px;
    transition: all 0.3s;
}

.header-tabs li:hover,
.header-tabs li.active {
    background: <?php echo renk1;?>;
    color: white;
}

.header-dropdown .full {
    max-width: 100% !important;
}

.header-dropdown .tab-panel {
    display: none;
    max-width: 962px;
    padding: 20px;
    width: 100%;
}

.header-dropdown .tab-panel .g-title {
    margin-top: 0 !important;
}

.drp-tumunu-gor {
    font-size: 14px;
    line-height: 47px !important;
    text-decoration: none;
    color: #676c6d !important;
    float: right;
    transition: all 0.3s;
}

.drp-tumunu-gor:hover {
    color: <?php echo renk1;?> !important;
}

.drp-tumunu-gor.hover-bar:after {
    content: "";
    position: absolute;
    right: 0;
    bottom: 0;
    right: 0;
    background: <?php echo renk1;?>;
    width: 0;
    height: 1px;
    -webkit-transition: width 0.3s;
    transition: width 0.3s;
}

.drp-tumunu-gor.hover-bar:hover:after {
    width: 100%;
}

.drp-haber-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.drp-haber-box {
    box-shadow: 0px 0px 6px 1px rgba(0, 0, 0, 0.2);
    transition: all 0.3s;
}

.drp-haber-box a {
    display: block;
    width: 100%;
    height: 100%;
}

.drp-haber-box:hover {
    box-shadow: 0px 0px 6px 4px rgba(0, 0, 0, 0.2);
}

.drp-haber-box .content {
    background: white;
    padding: 20px 20px 20px 10px !important;
    display: flex;
    align-items: center;
}

.drp-haber-box h4 {
    font-size: 14px;
    margin: 0;
    color: black;
}

.drp-haber-box p {
    color: grey;
    font-size: 12px;
    line-height: 12px;
    margin: 10px 0px 0px 0px;
}

.header-dropdown .tab-panel.active {
    display: block;
}

.header-dropdown .link-box:hover a {
    color: <?php echo renk1;?> !important;
}

.tumunu-gor.link-box a {
    color: white !important;
}

.tumunu-gor.link-box {
    background: <?php echo renk1;?>;
}

.tumunu-gor.link-box:hover a {
    color: white !important;
}

.bg-image {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    object-fit: cover;
}

.header-bottom .hover-bar:before {
    content: "";
    position: absolute;
    right: 0;
    top: 0;
    left: 0;
    background: rgba(255, 255, 255, 0.4);
    width: 0;
    height: 1px;
    -webkit-transition: width 0.3s;
    transition: width 0.3s;
}

.header-bottom .hover-bar:hover:before {
    width: 100%;
}

.header-bottom .search-box {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 100%;
}

.header-bottom .search-box a {
    color: white;
    text-decoration: none;
    font-size: 35px;
    opacity: 0.8;
    transition: 0.3s;
}

.header-bottom .search-box a:hover {
    opacity: 1;
}

.carousel-item img {
    height: 94%;
    width: 100%;
    object-fit: cover;

}

.slider-text {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    max-width: 950px;
    width: 100%;
}

.slider-text .slide-title {
    text-align: center;
    font-size: 60px;
    font-weight: 800;
    line-height: 1.1;
    text-shadow: 0px 2px 3px #141415;
}

.slider-haber-box {
    max-width: 700px;
    width: 100%;
    height: 250px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    border-radius: 10px;
}

.slider-haber-box .s-type {
    font-weight: bold;
    font-size: 14px;
    width: 110%;
    padding: 10px 20px;
    position: absolute;
    top: -10px;
    left: 116px;
    text-align: right;
    font-style: italic;
    color: white;
    border-radius: 10px;
}

.slider-haber-box .s-image {
    width: 300px;
    height: 300px;
    object-fit: cover;
    position: absolute;
    left: -50%;
    top: -25px;
    border-radius: 50%;
    z-index: 3;
}

.slider-haber-box .context {
    color: #3b3f3f;
    font-size: 14px;
    font-weight: regular;
}

.before-back-black::before {
    background: black !important;
}

.slider-haber-box a {
    color: black;
    font-size: 14px;
    text-decoration: none;
    font-weight: bold;
}

.bg-purple {
    background: #6f4ad3;
}

.bg-green {
    background: #45bb40;
}

.bg-red {
    background: #bb4040;
}

.bg-blue-1 {
    background: #6dc6bd;
}

.bg-blue-2 {
    background: <?php echo renk3;?>;
}

.bg-blue-3 {
    background: #59b6ef;
}

.bg-blue-4 {
    background: #4e6a9b;
}

.slide-menu {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    color: white;
}

.slide-menu a {
    color: white;
    text-decoration: none;
}

.slide-menu .fa,
.slide-menu .fas,
.slide-menu .fab,
.slide-menu .far {
    font-size: 40px;
    z-index: 4;
}

.slide-menu .bg-blue-1 a {
    display: block;
}

.slide-menu .bg-blue-1 a:before,
.slide-menu .bg-blue-2 a:before,
.slide-menu .bg-blue-3 a:before,
.slide-menu .bg-blue-4 a:before,
.slide-menu .bg-purple a:before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 0%;
    transition: 0.3s;
    z-index: 3;
}

.slide-menu .bg-blue-1 a:before {
    background: #fff;
    opacity: .3;
}

.slide-menu .bg-blue-2 a:before {
    background: #bb4040;
}

.slide-menu .bg-blue-3 a:before {
    background: #bb4040;
}

.slide-menu .bg-blue-4 a:before {
    background: #bb4040;
}

.slide-menu .bg-purple a:before {
    background: #bb4040;
}

.slide-menu .bg-blue-1 a:hover:before,
.slide-menu .bg-blue-2 a:hover:before,
.slide-menu .bg-blue-3 a:hover:before,
.slide-menu .bg-blue-4 a:hover:before,
.slide-menu .bg-purple a:hover:before {
    height: 100%;
}

.flex-center {
    display: flex;
    align-items: center;
}

.slide-menu p {
    font-size: 12px;
    margin: 0;
    z-index: 4;
}

.slide-menu .col-9.flex-center>div {
    z-index: 4;
}

.slide-menu h6 {
    font-size: 18px;
    margin: 0;
    font-weight: bold;
    z-index: 4;
}

.slide-menu {
    height: 110px;
}

.slide-menu .row {
    height: 100%;
}

.header-mobile {
    display: none;
}

.header-mobile .logo {
    height: 80px;
    margin: 0px auto;
}

.header-mobile .logo-box {
    display: flex;
    align-items: center;
}

.header-mobile .logo-box a {
    display: contents;
}

.header-mobile .search-box {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 100%;
}

.header-mobile .search-box a {
    color: white;
    text-decoration: none;
    font-size: 35px;
    opacity: 0.8;
    transition: 0.3s;
}

.header-mobile .search-box a:hover {
    opacity: 1;
}

.hamburger-box .icon {
    position: absolute;
    top: 50%;
    left: 20%;
    transform: translate(-50%, -50%);
    width: 30px;
    height: 25px;
    cursor: pointer;
}

.hamburger-box .icon .hamburger {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translate(0, -50%);
    transition: 0.5s;
    width: 100%;
    height: 20%;
    background: #fff;
    box-shadow: 0px 2px 5px rgb(0, 0, 0, 0.2);
}

.hamburger-box .icon .hamburger:before,
.hamburger-box .icon .hamburger:after {
    content: "";
    position: absolute;
    transition: 0.5s;
    left: 0;
    width: 100%;
    height: 100%;
    background: #fff;
    box-shadow: 0px 2px 5px rgb(0, 0, 0, 0.2);
}

.hamburger-box .icon .hamburger:before {
    top: -200%;
}

.hamburger-box .icon .hamburger:after {
    top: 200%;
}

.hamburger-box .icon.active .hamburger {
    background: rgb(0, 0, 0, 0);
    box-shadow: 0px 2px 5px rgb(0, 0, 0, 0);
}

.hamburger-box .icon.active .hamburger:before {
    transform: rotate(45deg);
    top: 0;
}

.hamburger-box .icon.active .hamburger:after {
    transform: rotate(-45deg);
    top: 0;
}

#mobile-menu {
    width: 350px;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    z-index: 999;
    background: <?php echo renk3;?>;
    color: #fff;
    transition: all 0.3s;
    overflow-y: scroll;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);
    transform: translateX(-105%);
}

#mobile-menu.active {
    transform: translateX(0);
}

.drp-mobile li a {
    padding: 0 !important;
    height: 0;
    overflow: hidden;
}

.drp-mobile.active li a {
    padding: 10px !important;
    height: 46px;
}

#dismiss {
    width: 35px;
    height: 35px;
    text-align: center;
    background: <?php echo renk3;?>;
    position: absolute;
    top: 20px;
    right: 10px;
    cursor: pointer;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

#dismiss:hover {
    background: #fff;
    color: <?php echo renk3;?>;
}

#dismiss i {
    line-height: 35px;
}

.overlay {
    display: none;
    position: fixed;
    width: 100vw;
    height: 100vh;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.7);
    z-index: 998;
    opacity: 0;
    transition: all 0.5s ease-in-out;
}

.overlay.active {
    display: block;
    opacity: 1;
}

#mobile-menu .sidebar-header {
    padding: 20px;
    background: <?php echo renk1;?>;
}

#mobile-menu ul.components {
    padding: 20px 0;
}

#mobile-menu ul p {
    color: #fff;
    padding: 10px;
}

#mobile-menu ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
    transition: all 0.3s;
    text-decoration: none;
    color: #ffffff;
}

#mobile-menu ul li a:hover {
    color: <?php echo renk3;?>;
    background: #fff;
}

#mobile-menu ul li a i {
    line-height: 26px;
}

#mobile-menu ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: <?php echo renk1;?>;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: <?php echo renk1;?>;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: <?php echo renk3;?>;
}

a.article,
a.article:hover {
    background: <?php echo renk1;?> !important;
    color: #fff !important;
}

#haberSlide {
    height: 100%;
}

#haberSlide .content {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    color: white;
    z-index: 5 !important;
}

#haberSlide .content h3 {
    font-size: 22px;
    border-bottom: 1px solid white;
    padding-bottom: 10px;
}

#haberSlide .carousel-item a {
    text-decoration: none;
    color: white;
    width: 100%;
    height: 100%;
    display: block;
}

#haberSlide .carousel-item a:hover img {
    transform: scale(1.2);
}

#haberSlide img {
    height: 100%;
    object-fit: cover;
    -webkit-transition: -webkit-transform 1.5s cubic-bezier(0, 0, 0.2, 1);
    transition: -webkit-transform 1.5s cubic-bezier(0, 0, 0.2, 1);
    transition: transform 1.5s cubic-bezier(0, 0, 0.2, 1);
    transition: transform 1.5s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 1.5s cubic-bezier(0, 0, 0.2, 1);
}

#haberSlide .carousel-indicators {
    margin: 0;
    height: 50px;
    bottom: -50px;
    justify-content: flex-start;
    background: <?php echo renk1;?>;
}

#haberSlide .carousel-indicators li {
    height: 50px;
    width: 70px;
    margin: 0;
    background: <?php echo renk1;?>;
    text-indent: 0;
    border: none;
    text-align: center;
    line-height: 50px;
    opacity: 1;
    color: white;
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    border-left: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.3s;
}

#haberSlide .carousel-indicators li:hover,
#haberSlide .carousel-indicators li.active {
    background: <?php echo renk3;?>;
}

.slide-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
}

.footer-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.7);
    z-index: 1;
}

.slider-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.haber-section>div {
    height: 500px;
    top:10px;
}

.diger-haberler>div {
    height: 100%;
}

.haber-nav {
    height: 50px !important;
    position: absolute;
    bottom: -50px;
    left: 10px;
    width: 100%;
    background: #836a7d;
    z-index: 1;
}

.haber-nav ul {
    padding: 0;
    margin: 0;
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    height: 50px;
}

.haber-nav ul li {
    display: inline-block;
    padding: 0px 15px;
    text-align: center;
    transition: all 0.3s;
}

.haber-nav ul li:hover {
    background: #334d66;
}

.haber-nav ul li a {
    color: white;
    line-height: 50px;
    text-decoration: none;
}

.diger-haberler>div>div {
    height: 50%;
    position: relative;
    overflow: hidden;
    left: 10px;
}

.diger-haberler img {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    object-fit: cover;
    -webkit-transition: -webkit-transform 1.5s cubic-bezier(0, 0, 0.2, 1);
    transition: -webkit-transform 1.5s cubic-bezier(0, 0, 0.2, 1);
    transition: transform 1.5s cubic-bezier(0, 0, 0.2, 1);
    transition: transform 1.5s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 1.5s cubic-bezier(0, 0, 0.2, 1);
}

.diger-haberler a {
    width: 100%;
    height: 100%;
    display: block;
}

.diger-haberler a .content {
    position: absolute;
    bottom: 20px;
    left: 30px;
    right: 30px;
    color: white;
    z-index: 5;
}

.diger-haberler a .content p,
.diger-haberler a .content h3 {
    margin: 5px;
}

.diger-haberler a .content p {
    font-size: 14px;
}

.diger-haberler a .content h3 {
    font-size: 22px;
}

.diger-haberler a:hover img {
    transform: scale(1.2);
}

.etkinlik-section {
    padding: 60px 0px;
}

.bg-etkinlik {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.tab-component .tab-head .tab-link {
    width: 33%;
    display: inline-block;
    padding: 10px 0;
    background: #dde3e8;
    color: <?php echo renk1;?>;
    text-align: center;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.tab-component .tab-head .tab-link:hover,
.tab-component .tab-head .tab-link.active {
    background: <?php echo renk1;?>;
    color: #dde3e8;
}

.tab-component .tab-head .row {
    display: flex;
    justify-content: space-between;
}

.tab-component .tab-body .tab-panel {
    display: none;
    width: 100%;
    background: rgba(255, 255, 255, 0.45);
    min-height: 380px;
    -webkit-box-shadow: 0 0 50px rgba(24, 76, 124, 0.1);
    box-shadow: 0 0 50px rgba(24, 76, 124, 0.1);
}

.tab-component .tab-body .tab-panel>div {
    display: none;
    padding: 25px 50px 25px 30px;
    position: relative;
    height: 370px;
    overflow-y: auto;
}

.tab-tum-buton {
    color: <?php echo renk1;?>;
    text-decoration: none;
    display: inline-block;
    float: right;
    padding-bottom: 10px;
    margin: 20px 30px;
    font-weight: 700;
    position: relative;
}

.tab-tum-buton::before {
    content: "";
    height: 1px;
    width: 0%;
    position: absolute;
    background: <?php echo renk1;?>;
    bottom: 0;
    left: 0;
    transition: all 0.3s;
}

.tab-tum-buton:hover {
    color: <?php echo renk1;?>;
    text-decoration: none;
}

.tab-tum-buton:hover::before {
    width: 100%;
}

.tab-component .tab-body .tab-panel.active {
    display: block;
}

.tab-component .tab-body .tab-panel .do-nicescroll3.active {
    display: block;
}

.etkinlik-list-box {
    padding-top: 9px;
    padding-bottom: 9px;
    position: relative;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    z-index: 1;
}

.etkinlik-list-box:before {
    content: "";
    background: #fff;
    border-radius: 5px;
    position: absolute;
    z-index: -1;
    top: -1px;
    right: -10px;
    bottom: -1px;
    left: -10px;
    width: 50%;
    opacity: 0;
    -webkit-transition: .3s;
    transition: .3s;
}

.etkinlik-list-box:hover:before {
    -webkit-box-shadow: 0 0 30px rgba(24, 76, 124, 0.1);
    box-shadow: 0 0 30px rgba(24, 76, 124, 0.1);
    width: calc(100% + 20px);
    opacity: 1;
}

.etkinlik-list-box:last-child {
    margin-bottom: 10px;
    border-bottom: none;
}

.etkinlik-list-box p {
    margin: 0;
    font-weight: 500;
    padding-left: 15px;
    font-size: 14px;
    color: #6f6f6f;
    line-height: 1.35;
}

.etkinlik-list-box p:last-child {
    margin: 0;
    color: #6f6f6f;
    font-size: 13px;
    font-weight: 300;
}

.etkinlik-list-box a {
    text-decoration: none;
    color: black;
}

.etkinlik-list-box a:before {
    content: "";
    position: absolute;
    top: 10px;
    bottom: 10px;
    left: 0;
    background: #4d6379;
    width: 4px;
}

.etkinlik-list-box a:hover {
    text-decoration: none;
    color: <?php echo renk1;?>;
}

#etkinlik-scroll {
    height: 330px !important;
}

@media (min-width: 1400px) {
	.tab-component .tab-body .tab-panel {
		min-height: 468px;
	}
	.tab-component .tab-body .tab-panel>div {
		height: 458px;
	}
	#etkinlik-scroll {
		height: 415px !important;
	}
}

#etkinlik-scroll .nicescroll-cursors {
    background-image: <?php echo renk1;?>;
    background-size: 20px 20px;
    height: 210px !important;
}

.etkinlik-image {
    height: 250px;
    width: 100%;
    object-fit: cover;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

/* .etkinlik-content {
    background: white;
    padding: 30px 100px 30px 50px;
    position: absolute;
    left: 0;
    bottom: 0;
    widows: 100%;
    } */
.etkinlik-content {
    background: white;
    padding: 30px 100px 30px 50px;
    position: static;
    left: 0;
    bottom: 0;
    width: 100%;
}

.etkinlik-content h3 {
    font-size: 25px;
    font-weight: bold;
}

.etkinlik-content p {
    font-size: 14px;
}

.etkinlik-content .social a {
    text-decoration: none;
}

.etkinlik-content .social a:hover i {
    border: 2px solid <?php echo renk1;?>;
    color: <?php echo renk1;?>;
}

.etkinlik-content .social i {
    width: 28px;
    height: 28px;
    line-height: 26px;
    text-align: center;
    border: 2px solid #c0c5c9;
    color: #c0c5c9;
    border-radius: 50%;
    font-size: 14px;
    opacity: 0.8;
    transition: all 0.3s;
}

.etkinlik-tarih {
    width: 50px;
    height: 100px;
    background: #c0c5c9;
    position: absolute;
    right: 10;
    top: 0;
    text-align: center;
    color: white;
    clip-path: polygon(100% 0, 100% 100%, 50% 80%, 0 100%, 0 0);
}

.owl-carousel-hizlimenu .owl-item:not(.active) {
    opacity: 0.5;
}

.etkinlik-tarih div:first-child {
    margin-top: 10px;
    font-size: 32px;
    line-height: 30px;
}

.etkinlik-tarih div:last-child {
    font-size: 16px;
}

.etkinlik-linkler {
    background: rgba(116, 162, 209, 0.7);
    padding: 30px 0px;
}

.etkinlik-linkler .main {
    display: flex;
    justify-content: space-between;
}

.etkinlik-linkler .main a {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    border: 1px solid white;
    border-radius: 3px;
    padding: 25px 35px;
    text-decoration: none;
    width: 100%;
    font-weight: 500;
    transition: all 0.3s;
}

.etkinlik-linkler .main a:hover {
    background: <?php echo renk1;?>;
}

.etkinlik-linkler .main a i {
    margin-right: 20px;
    font-size: 25px;
}

.custom-owl-nav {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    transform: translateY(-50%);
    z-index: 9;
}

.custom-owl-nav button {
    position: absolute;
    top: 0;
    background: <?php echo renk3;?>;
    width: 36px;
    height: 36px;
    border: none;
    border-radius: 50%;
    color: white;
    font-size: 30px;
    outline: none;
    transition: all 0.3s;
    padding: 0;
}

.custom-owl-nav button:hover {
    background: <?php echo renk1;?>;
}

.custom-owl-nav button:first-child {
    left: 0;
}

.custom-owl-nav button:last-child {
    right: 0;
}

.custom-owl-nav button span {
    display: block;
    width: 100%;
    height: 100%;
    line-height: 28px;
}

.baskan-section {
    position: relative;
}

.baskan-section .sol {
    text-align: center;
    background: white;
    padding-bottom: 30px;
}

.baskan-section img {
    width: 100%;
    object-fit: cover;
}

.baskan-section .sol h3 {
    margin-top: 20px;
    margin-bottom: 0;
    font-size: 23px;
    font-family: "Montserrat", sans-serif;
    color: <?php echo renk1;?>;
}

.baskan-section .sol p {
    font-size: 16px;
    font-family: "Montserrat", sans-serif;
    color: #969696;
}

.baskan-section .social {
    position: absolute;
    bottom: 50px;
    left: 50%;
    transform: translateX(-50%);
}

.baskan-section .text-side {
    max-width: 680px;
    margin: 0px auto;
}

.baskan-section .text-side h3 {
    font-size: 85px;
    margin-bottom: 0px;
    font-weight: 800;
}

.baskan-section .text-side p {
    color: <?php echo renk1;?>;
    font-family: 'Rajdhani', sans-serif;
    font-size: 36px;
    letter-spacing: 6.7px;
    font-weight: 200;
}

.baskan-section .sag {
    display: flex;
    justify-content: center;
    align-items: center;
}

h3.g-title {
    margin-top: 5px;
    margin-bottom: 20px;
    font-size: 35px;
    color: <?php echo renk1;?>;
    font-weight: bold;
}

h4.g-title {
    margin-top: 5px;
    margin-bottom: 20px;
    font-size: 25px;
    color: <?php echo renk1;?>;
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
}

.baskan-section .social a i {
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background: <?php echo renk1;?>;
    border-radius: 50%;
    font-size: 17px;
    opacity: 0.8;
    transition: all 0.3s;
}

.baskan-section .social a i:hover {
    background: #263c5a;
}

.baskan-section .social a {
    color: #fff;
    text-decoration: none;
}

.proje-slider img {
    width: 100%;
    height: 330px;
    object-fit: cover;
}

.proje-slider .content {
    background: white;
    display: flex;
    align-items: center;
}

.ozellik ul {
    list-style: none;
    padding: 0;
}

.ozellik ul li {
    padding-left: 25px;
    position: relative;
}

.ozellik ul li:before {
    content: "✓";
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 0;
}

.projeler-section {
    padding-bottom: 80px;
    background: #fdf4ef;
}

.projeler-section .owl-item {
    transition: all 0.5s;
}

.projeler-section .owl-item:not(.active) {
    transform: scale(0.8) !important;
    z-index: 1;
    filter: blur(3px);
    opacity: 0.7;
}

.proje-slider {
    margin: 10px 0px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.05);
    -webkit-transition: .3s;
    transition: .3s;
}

.projeler-section .tumunu-gor {
    text-align: center;
    margin-top: 30px;
}

.projeler-section .tumunu-gor a {
    color: <?php echo renk1;?>;
    border: 1px solid <?php echo renk1;?>;
    padding: 10px 30px;
    border-radius: 8px;
    text-decoration: none !important;
}

.projeler-section .tumunu-gor a:hover {
    color: white;
    background-color: <?php echo renk1;?>;
    transition: all 0.3s;
}

.projeler-section .owl-item.active+.owl-item,
.projeler-section .owl-item.active+.owl-item+.owl-item {
    transform: scale(0.8) !important;
    z-index: 1;
    filter: blur(3px);
    opacity: 0.7;
}

.projeler-section .owl-item.active {
    z-index: 99;
}

.projeler-section .custom-owl-nav {
    position: absolute;
    top: 50%;
    left: 15%;
    right: 15%;
    transform: translateY(-42px);
    width: auto;
    z-index: 9;
}

.projeler-section .custom-owl-nav button {
    width: 60px;
    height: 60px;
}

.projeler-section .custom-owl-nav button span {
    line-height: 75px;
}

.bg-festival {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    object-fit: cover;
}

.festival-section .video-box {
    position: relative;
}

.festival-section {
    padding-top: 70px !important;
    padding-bottom: 70px;
}

.festival-section>.slide-overlay {
    background: rgba(0, 0, 0, 0.8);
}

.festival-slider .content {
    color: white;
    display: flex;
    align-items: center;
}

.festival-slider .content .icerik {
    color: #d6d6d6;
}

.festival-slider .content h3 {
    font-family: "Montserrat", sans-serif;
    font-size: 25px;
}

.festival-slider .content .tarih {
    font-size: 14px;
}

.festival-video {
    border-right: 1px solid #575758;
    display: flex;
    align-items: center;
}

.f-image-box {
    overflow: hidden;
    border-radius: 5px;
}

.f-image-box:hover .festival-image {
    transform: scale(1.2) rotateZ(-5deg);
}

.festival-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    min-height: 250px;
    -webkit-transition: -webkit-transform 1.5s cubic-bezier(0, 0, 0.2, 1);
    transition: -webkit-transform 1.5s cubic-bezier(0, 0, 0.2, 1);
    transition: transform 1.5s cubic-bezier(0, 0, 0.2, 1);
    transition: transform 1.5s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 1.5s cubic-bezier(0, 0, 0.2, 1);
}

.f-image-box:hover .foto-image {
    transform: scale(1.2) rotateZ(-5deg);
}

.foto-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    min-height: 250px;
    transition: all 0.3s;
}

.festival-play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50px !important;
    height: 50px;
}

.festival-fotolar a {
    text-decoration: none;
    color: white;
}

.festival-nav {
    left: 50px;
    right: 50px;
    width: auto;
}

.festival-nav button {
    opacity: 0.7;
    background: none;
    font-size: 150px;
    width: 80px;
    height: 75px;
}

.festival-nav button:hover {
    background: none;
    opacity: 1;
}

.fotogaleri-section {
    padding-top: 70px !important;
    padding-bottom: 70px !important;
    z-index: 1;
}

.fotogaleri-section .fotogaleri-nav {
    transform: translateY(-19px);
}

.fotogaleri-section .content {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6);
    left: 0;
    width: 100%;
    padding: 10px;

    font-family: "Montserrat", sans-serif;
    font-size: 12px;
}

.fotogaleri-section a {
    color: white;
}

.hover-effect {
    overflow: hidden;
    transition: all 0.3s;
}

.hover-effect:hover img {
    transform: scale(1.2);
}

.btn-1 {
    color: black !important;
    border: 1px solid black;
    padding: 15px 20px;
    margin: 10px 0px;
    display: inline-block;
    border-radius: 5px;
    text-decoration: none;
    transform: perspective(1px) translateZ(0);
    transition: all 0.3s;
    overflow: hidden;
}

.btn-1::before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: <?php echo renk1;?>;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 50%;
    transform-origin: 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}

.btn-1:hover:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
}

.btn-1:hover {
    text-decoration: none;
    color: white !important;
    border: 1px solid white;
    border-radius: 5px;
}

.iletisim-section {
    padding-top: 80px !important;
    padding-bottom: 80px !important;
}

.iletisim-form label {
    color: #6b6b6d;
}

.iletisim-form input {
    width: 100%;
    outline: none;
    border: 1px solid #dddedf;
    height: 50px;
    padding: 10px;
    transition: all 0.3s;
}

.iletisim-form textarea {
    width: 100%;
    outline: none;
    border: 1px solid #dddedf;
    height: 100px;
    padding: 10px;
    transition: all 0.3s;
}

.iletisim-form input:focus,
.iletisim-form textarea:focus {
    border: 1px solid <?php echo renk3;?>;
}

.iletisim-section .social a {
    color: <?php echo renk3;?>;
    text-decoration: none;
    margin: 0 10px;
}

.iletisim-section .social a i {
    width: 80px;
    height: 80px;
    line-height: 80px;
    text-align: center;
    border-radius: 50%;
    font-size: 32px;
    transition: all 0.3s;
    background: <?php echo renk3;?>;
}

.iletisim-section .social a i:hover {
    background: <?php echo renk1;?>;
}

.iletisim-section .sol div {
    display: flex;
    justify-content: center;
}

.form-button {
    background: <?php echo renk3;?>;
    color: white;
    border: none !important;
    width: auto;
    padding: 10px 40px;
    border-radius: 5px;
}

.form-button:hover {
    background: <?php echo renk1;?>;
}

.harita-section iframe {
    width: 100%;
    height: 350px;
}

.hava-kutular {
    display: flex;
    justify-content: space-between;
    text-align: right;
}

.hava-kutu {
    display: inline-block;
    margin-left: 20px;
}

.hava-kutu:first-child {
    margin-left: 0px;
}

.hava-kutu h1 {
    font-size: 55px;
    position: relative;
    display: inline-block;
    margin: 0;
    font-family: 'Rajdhani', sans-serif;
    color: #fff;
    font-weight: 100;
}

.hava-kutu h1 img {
    position: absolute;
    right: -8px;
    bottom: 10px;
    width: 25px;
    opacity: 0.4;
}

.hava-kutu p {
    margin: 0;
    font-size: 11px;
    color: #fff;
    padding-left: 8px;
}

.gun {
    color: #fff;
    text-transform: uppercase;
    font-size: 13px !important;
    font-weight: bold !important;
}

#page-up {
    position: fixed;
    right: 10;
    bottom: -70px;
    background: transparent;
    border: none;
    z-index: 99;
    outline: none;
    transition: all 0.3s;
}

#page-up.active {
    bottom: 20px;
}

#page-up i {
    margin-bottom:65px;
    width: 65px;
    height: 60px;
    background: white;
    color: <?php echo renk1;?>;
    font-size: 32px;
    line-height: 58px;
    border-radius: 50%;
    border: 1px solid <?php echo renk1;?>;
    z-index: 99;
}

.page-section {
    margin-bottom: 30px;
}

.header-fix {
    background: #0c2526;
    padding-top: 150px;
}

.kolay-menu {}

.kolay-menu>h4 {
    color: white;
    background: <?php echo renk1;?>;
    text-align: center;
    padding: 20px 0px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    margin-bottom: 0px;
}

.kolay-menu>ul {
    padding: 0;
    list-style: none;
    border: 1px solid rgba(0, 0, 0, 0.05);
    -webkit-transition: .3s;
    transition: .3s;
}

.kolay-menu>ul>li {
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.kolay-menu>ul>li:last-child {
    border-bottom: none;
}

.kolay-menu>ul>li>a {
    display: block;
    width: 100%;
    height: 100%;
    text-decoration: none;
    font-size: 16px;
    color: #788281;
    padding: 15px 20px;
    position: relative;
    height: fit-content;
    z-index: 1;
    transition: all 0.3s;
}

.kolay-menu>ul>li>a:before {
    content: "";
    background: <?php echo renk1;?>;
    position: absolute;
    top: 0;
    left: 0;
    right: 100%;
    bottom: 0;
    transition: all 0.3s;
    z-index: -1;
}

.kolay-menu>ul>li>a:hover:before {
    right: 0;
}

.kolay-menu>ul>li>a:hover {
    color: white;
}

.kolay-menu .social {
    text-align: center;
    padding-bottom: 20px;
}

.kolay-menu .social h4 {
    text-align: center;
    color: <?php echo renk1;?>;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
}

.kolay-menu .social a {
    color: #fff;
    text-decoration: none;
    margin: 0 2px;
}

.kolay-menu .social a i {
    width: 42px;
    height: 42px;
    line-height: 42px;
    text-align: center;
    border-radius: 50%;
    font-size: 21px;
    background: <?php echo renk1;?>;
    transition: all 0.3s;
}

.kolay-menu .social a i:hover {
    background: <?php echo renk3;?>;
}

.banner img {
    height: 275px;
    width: 100%;
    object-fit: cover;
}

.banner-fix {
    margin-top: -75px;
}

.breadcrumb {
    display: inline-flex;
    background: none;
    padding: 0px;
}

.breadcrumb li a,
.breadcrumb li {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
}

.breadcrumb li::before {
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1;
    font-weight: 900;
    padding: 0px 5px;
}

.breadcrumb li:first-child::before {
    content: "";
    padding: 0;
}

.breadcrumb li {
    padding-left: 5px;
}

.breadcrumb li a:hover,
.breadcrumb li:hover {
    color: <?php echo renk1;?>;
}

.breadcrumb li:first-child {
    padding-left: 0px;
}

.sayfa-geri {
    color: #fff;
    font-size: 13px;
    font-weight: 500;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-transform: uppercase;
    float: right;
    border: 1px solid #fff;
    padding: 2px 10px;
    -webkit-border-top-right-radius: 8px;
    -webkit-border-bottom-right-radius: 8px;
    -moz-border-radius-topright: 8px;
    -moz-border-radius-bottomright: 8px;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
}

.sayfa-geri:hover {
    font-weight: bold;
    text-decoration: none;
    color: #7aab2b;
    border: 1px solid #7aab2b;
}

.sayfa-geri .icon {
    font-size: 11px;
    margin-right: 5px;
    margin-top: -2px;
    height: auto;
    width: auto;
}

.page-content {
    background: white;
    border-radius: 10px;
    padding: 20px;
}

.page-title {
    font-size: 28px;
    font-weight: bold;
    color: <?php echo renk1;?>;
    border-bottom: 1px solid #ebeded;
    padding-bottom: 20px;
    position: relative;
    margin-bottom: 20px;
}

.page-title::before {
    content: "";
    width: 35px;
    height: 5px;
    position: absolute;
    left: 0;
    bottom: -1;
    background: <?php echo renk1;?>;
}

.full-center {
    display: flex;
    justify-content: center;
    align-items: center;
}

.e-tarih {
    width: 70px;
    height: 70px;
    background: <?php echo renk3;?>;
    color: white;
    text-align: center;
    border-radius: 50%;
}

.image-full {
    width: 100%;
    height: 100%;
    object-fit: contain;
    min-height: 150px;
}

.e-tarih p {
    margin: 0;
    font-size: 12px;
    font-weight: bolder;
    line-height: 12px;
}

.e-tarih p:first-child {
    font-size: 24px;
    padding-top: 8px;
    line-height: 24px;
}

.e-content {
    padding: 20px 18px;
}

.e-content p {
    font-size: 14px;
    font-weight: normal;
    color: #7f7f7f;
    margin: 0;
}

.e-content a {
    text-decoration: none;
}

.e-content h5:hover {
    color: <?php echo renk1;?>;
}

.e-content h5 {
    font-size: 18px;
    font-weight: bold;
    color: #000000;
    transition: all 0.3s;
}

.etkinlik-box>div {
    border-bottom: 1px solid #e9ebeb;
}

.etkinlik-box>div:last-child {
    border-bottom: none;
}

.haberler-box img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    border-radius: 0;
    -webkit-transition: all 1s cubic-bezier(0, 0, 0.2, 1);
    transition: all 1s cubic-bezier(0, 0, 0.2, 1);
}

.haber-box {
    -webkit-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.15);
    box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.15);
    border-radius: 0px;
    overflow: hidden;
    margin-bottom: 30px;
}

.cards-photo {
    overflow: hidden;
    height: 175px;
}

.haber-box a:hover img {
    -webkit-transform: scale3d(1.15, 1.15, 1.15);
    transform: scale3d(1.15, 1.15, 1.15);
    text-decoration: none;
}

.haber-box .content {
    padding: 20px;
}

.haber-box .content a:hover {
    text-decoration: none;
}

.haber-box h4 {
    font-size: 18px;
    font-weight: bold;
    color: <?php echo renk1;?>;
}

.haber-box h4.title {
    font-size: 16px;
    font-weight: 700;
    line-height: 1.4;
    overflow: hidden;
    min-height: 45px;
}

.haber-box p {
    font-size: 12px;
    color: #c1c1c1;
}

.haber-box p.icerik {
    font-size: 14px;
    color: #6b6b6b;
    max-height: 110px;
    overflow: hidden;
}

.ihale-table thead th {
    color: #fff;
    font-size: 14px;
}

.ihale-table tbody tr {
    font-size: 15px;
    color: black;
    font-weight: 500;
}

.ihale-table tbody tr:nth-child(2n + 1) {
    background: #edf4f4;
}

.ihale-table tbody tr:nth-child(2n) {
    background: white;
}

.fotolar-box {}

.foto-box {
    height: 250px;
    overflow: hidden;
    position: relative;
    margin-bottom: 30px;
    cursor: pointer;
}

.foto-box .content {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: 5;
    color: white;
}

.foto-box img {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: all 0.3s;
}

.foto-box span {
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 32px;
}

.foto-box:hover img,
.foto-box:hover a {
    transform: scale(1.1);
}

.foto-box a {
    text-decoration: none;
    position: absolute;
    bottom: 20px;
    left: 30px;
    right: 30px;
    transition: all 0.3s;
    transform-origin: left;
}

.foto-box a:hover {
    transform: scale(1.1);
}

.foto-box h4 {
    font-size: 18px;
    font-weight: bold;
    color: white;
}

.foto-box p {
    font-size: 12px;
    color: #c1c1c1;
    margin-bottom: 5px;
}

.page-title .tarih {
    color: #a8afae;
    font-size: 12px;
    float: right;
    line-height: 31px;
}

.haber-detay-image {
    max-width: 50%;
    height: auto;
    margin: 0px 30px 20px 0px;
    float: left;
}

.detay {
    float: left;
    display: contents;
    text-align: justify;
    color: #6f6f6f !important;
    font-size: 16px;
    font-weight: 300;
    line-height: 1.8;
    font-family: "Roboto", sans-serif !important;

}

.spot {
    color: black;
    font-size: 18px;
    font-weight: 400;
}

.small-title {
    color: #7f7f7f;
    font-size: 14px;
    font-weight: bold;
}

.page-title-personel {
    font-size: 28px;
    font-weight: bold;
    color: white;
    border-bottom: 1px solid #6d8fb2;
    padding-bottom: 20px;
    position: relative;
    margin-bottom: 20px;
    position: absolute;
    left: 30px;
    right: 30px;
    top: 30px;
}

.page-title-personel::before {
    content: "";
    width: 35px;
    height: 5px;
    position: absolute;
    left: 0;
    bottom: -1;
    background: white;
}

.ilk-personel {
    background: <?php echo renk1;?>;
    padding-top: 100px !important;
}

.personel-foto {
    width: auto;
    background: #fff;
}

.personel-detay {
    text-align: center;
}

.ilk-personel .ad {
    color: white;
    margin: 10px 0 0 0;
    font-size: 21px;
}

.ilk-personel .unvan {
    color: #7497ba;
    margin: 0;
}

.ilk-personel .social {
    margin-top: 10px;
}

.ilk-personel .social a {
    color: white;
    text-decoration: none;
}

.ilk-personel .social i {
    width: 25px;
    height: 25px;
    line-height: 25px;
    text-align: center;
    border-radius: 50%;
    font-size: 15px;
    background: #7497ba;
    transition: all 0.3s;
}

.ilk-personel .social i:hover {
    background: white;
    color: <?php echo renk3;?>;
}

.diger-personeller {
    padding: 80px 30px 30px 30px !important;
}

.diger-personeller .ad {
    color: black;
    margin: 10px 0 0 0;
    font-size: 21px;
}

.diger-personeller .unvan {
    color: #b5b5b5;
    margin: 0;
}

.diger-personeller .social {
    margin-top: 10px;
}

.diger-personeller .social a {
    color: white;
    text-decoration: none;
}

.diger-personeller .social i {
    width: 25px;
    height: 25px;
    line-height: 25px;
    text-align: center;
    border-radius: 50%;
    font-size: 15px;
    background: #b5b5b5;
    transition: all 0.3s;
}

.diger-personeller .social i:hover {
    background: <?php echo renk3;?>;
}

.diger-personeller>div {
    margin-bottom: 50px;
}

.personeldis {
    -webkit-box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.05);
    -webkit-transition: .3s;
    transition: .3s;
    padding-bottom: 10px;
}

.personeldis div {
    text-align: center;
}

.personeldis a {
    text-decoration: none;
}

.personeldis:hover {
    box-shadow: 0px 0px 30px 4px rgba(0, 0, 0, 0.2);
    transform: scale(1.02);
    text-decoration: none;
}

.page-title-other-personel {
    font-size: 22px;
    text-align: center;
}

.iletisim-mini {
    padding: 45px;
    position: relative;
}

.iletisim-mini i {
    position: absolute;
    top: 0;
    left: 0;
    background: <?php echo renk1;?>;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    color: white;
}

.iletisim-mini h5 {
    font-size: 22px;
    color: <?php echo renk1;?>;
}

.iletisim-mini p {
    color: 666868;
    font-size: 14px;
}

.iletisim-box {
    padding-top: 80px;
    background: <?php echo renk1;?>;
}

.iletisim-box .sol div {
    display: flex;
    justify-content: center;
}

.iletisim-box .sol .social a {
    color: <?php echo renk1;?>;
    text-decoration: none;
    margin: 0 5px;
}

.iletisim-box .sol .social a i {
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    font-size: 22px;
    transition: all 0.3s;
    background: white;
}

.iletisim-box .sol .social a i:hover {
    background: <?php echo renk3;?>;
    color: white;
}

.iletisim-box .title h3 {
    color: white;
    font-size: 35px;
}

.iletisim-box .title p {
    color: #b8b8c4;
    font-size: 18px;
}

.form-box {
    display: table;
    width: 100%;
}

.form-box .image {
    display: table-cell;
    white-space: nowrap;
    width: 40px;
    padding: 5px;
    vertical-align: middle;
    color: #fff;
}

.form-box .image i {
    font-size: 25px;
}

.form-box .image img {
    width: 28px;
}

.form-box .inputs {
    display: table-cell;
    padding: 10px;
}

.form-box .inputs .iletisim-form {
    width: 100%;
    border: none;
    outline: none;
    height: 50px;
    border-radius: 10px;
    padding: 5px 10px;
}

.form-box .inputs textarea.iletisim-form {
    min-height: 80px;
}

.form-button.iletisim-page {
    margin-top: 15px;
    margin-left: 53px;
    transition: all 0.3s;
}

.form-button.iletisim-page:hover {
    background: white;
    color: <?php echo renk1;?>;
}

.bize-ulasin {
    text-align: center;
    width: 100%;
    margin-top: 30px;
}

.bize-ulasin h4 {
    color: <?php echo renk1;?>;
    font-size: 35px;
    margin: 0;
}

.bize-ulasin p {
    color: #8e8e8e;
    font-size: 18px;
    position: relative;
}

.bize-ulasin p::before {
    content: "";
    background-color: <?php echo renk1;?>;
    width: 25px;
    height: 5px;
    position: absolute;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 5px;
}

.etkinlik-kutucuk {
    width: 100%;
    background: rgba(255, 255, 255, 0.45);
    padding: 15px 30px;
    -webkit-box-shadow: 0 0 50px rgba(24, 76, 124, 0.1);
    box-shadow: 0 0 50px rgba(24, 76, 124, 0.1);
}

.etkinlik-kutucuk h5 {
    color: <?php echo renk1;?>;
    font-weight: bold;
    display: inline;
}

.etkinlik-kutucuk img {
    width: 100%;
}

.etkinlik-kutucuk ul {
    padding: 0;
    list-style: none;
    margin-top: 15px;
}

.etkinlik-kutucuk ul li {
    margin-top: 5px;
}

.etkinlik-kutucuk ul li a:hover {
    text-decoration: none;
}

.etkinlik-kutucuk ul li a:hover span:last-child {
    background-color: <?php echo renk1;?>;
    color: white;
    transition: all 0.3s;
}

.etkinlik-kutucuk ul li a span:first-child {
    display: inline-flex;
    width: 40px;
    height: 35px;
    text-align: center;
    background: #dce4eb;
    color: <?php echo renk1;?>;
    line-height: 32px;
    border-radius: 3px;
}

.etkinlik-kutucuk ul li a span:first-child i {
    line-height: 32px;
    width: 100%;
    text-align: center;
}

.etkinlik-kutucuk ul li a span:last-child {
    display: inline-flex;
    height: auto;
    background: #dce4eb;
    color: <?php echo renk1;?>;
    width: calc(100% - 45px);
    line-height: 35px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 3px;
    font-size: 13px;
    font-weight: 300;
}

.e-content p:last-child {
    font-size: 15px;
    font-weight: 300;
}

.gecmis-etkinlik-box {
    margin-top: 10px;
    padding: 5px;
    background: <?php echo renk3;?>;
    border: 1px solid <?php echo renk3;?>;
    border-radius: 5px;

    transition: all 0.3s;
}

.gecmis-etkinlik-box:hover {
    background: white;
}

.gecmis-etkinlik-box:hover a {
    color: <?php echo renk1;?>;
}

.gecmis-etkinlik-box a {
    color: white;
    text-decoration: none !important;
    transition: all 0.3s;
}

.gecmis-etkinlik-box a span:first-child {
    display: inline-flex;
    width: 50px;
    height: 50px;
    justify-content: center;
    align-items: center;
    vertical-align: middle;
    font-size: 24px;
}

.gecmis-etkinlik-box a span:last-child {
    display: inline-flex;
    width: calc(100% - 55px);
    height: 50px;
    flex-direction: column;
    vertical-align: middle;
}

.owl-carousel-etkinlik img {
    width: 100%;
    height: 100%;
    position: absolute;
    object-fit: cover;
    top: 0;
    left: 0;
}

.owl-carousel-etkinlik .row {
    height: 100%;
    min-height: 350px;
}

.etkinlik-slider-content {
    height: 100%;
    width: 100%;
    position: absolute;
    z-index: 8;
}

.etkinlik-slider-content .g-title {
    z-index: 8;
    color: #fff;
    padding: 10px 30px;
    font-size: 30px;
}

.etkinlik-foto-buton {
    position: absolute;
    bottom: 50px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 8;
    color: white;
    border: 1px solid white;
    padding: 10px 20px;
    border-radius: 6px;
    transition: all 0.3s;
}

.etkinlik-foto-buton:hover {
    background-color: white;
    color: <?php echo renk1;?>;
    text-decoration: none;
}

.etkinlik-detay-kutu {
    display: flex;
    justify-content: center;
    align-items: center;
}

.hizli-menu-box {
    width: 100%;
    position: relative;
    height: 285px;
}

.hizli-menu-box .hizli-icon {
    text-align: center;
    font-size: 45px;
    color: rgba(0, 0, 0, 0.6);
    margin-bottom: 15px;
}

.hizli-menu-box p {
    color: white;
    margin: 0;
    text-align: center;
}

.hizli-menu-box p:first-child {
    color: #fff;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.3;
}

.hizli-menu-box p:last-child {
    color: rgba(0, 0, 0, 0.7);
    font-size: 14px;
    margin-top: 5px;
}

.hizli-menu-box:hover .hizli-back {
    transform: translateY(20px);
}

.hizli-menu-box:hover>a:first-child {
    transform: translateY(0px);
}

.hizli-back {
    position: absolute;
    width: 100%;
    background: rgb(17, 98, 114);
    z-index: 1;
    top: 30px;
    bottom: 30px;
    left: 0px;
    transform: translateY(0px);
    transition: all 0.3s;
    border-radius: 12px;
}

.hizli-back span {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 50px;
    text-align: center;
    line-height: 55px;
    color: white;
    text-decoration: none !important;
    font-size: 17px;
    font-weight: 700;
}

.hizli-menu-box>a:first-child {
    text-decoration: none !important;
    border-radius: 12px;
    width: 100%;
    height: 235px;
    display: block;
    padding: 40px 15px;
    position: relative;

    transition: all 0.3s;
    transform: translateY(30px);

    z-index: 3;

    background: rgb(29, 172, 202);
    background: -moz-linear-gradient(135deg,
            rgba(29, 172, 202, 1) 0%,
            rgba(29, 172, 202, 1) 48%,
            rgba(28, 150, 176, 1) 51%,
            rgba(28, 150, 176, 1) 100%);
    background: -webkit-linear-gradient(135deg,
            rgba(29, 172, 202, 1) 0%,
            rgba(29, 172, 202, 1) 48%,
            rgba(28, 150, 176, 1) 51%,
            rgba(28, 150, 176, 1) 100%);
    background: linear-gradient(135deg,
            rgba(29, 172, 202, 1) 0%,
            rgba(29, 172, 202, 1) 48%,
            rgba(28, 150, 176, 1) 51%,
            rgba(28, 150, 176, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#1dacca", endColorstr="#1c96b0", GradientType=1);
}

.hizli-menu .owl-item:nth-child(4n + 2) .hizli-menu-box>a:first-child {
    background: rgb(169, 181, 200);
    background: -moz-linear-gradient(135deg,
            rgba(169, 181, 200, 1) 0%,
            rgba(169, 181, 200, 1) 48%,
            rgba(158, 170, 188, 1) 51%,
            rgba(158, 170, 188, 1) 100%);
    background: -webkit-linear-gradient(135deg,
            rgba(169, 181, 200, 1) 0%,
            rgba(169, 181, 200, 1) 48%,
            rgba(158, 170, 188, 1) 51%,
            rgba(158, 170, 188, 1) 100%);
    background: linear-gradient(135deg,
            rgba(169, 181, 200, 1) 0%,
            rgba(169, 181, 200, 1) 48%,
            rgba(158, 170, 188, 1) 51%,
            rgba(158, 170, 188, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#a9b5c8", endColorstr="#9eaabc", GradientType=1);
}

.hizli-menu .owl-item:nth-child(4n + 2) .hizli-menu-box .hizli-back {
    background: rgb(109, 117, 129);
}

.hizli-menu .owl-item:nth-child(4n + 3) .hizli-menu-box>a:first-child {
    background: rgb(255, 216, 61);
    background: -moz-linear-gradient(135deg,
            rgba(255, 216, 61, 1) 0%,
            rgba(255, 216, 61, 1) 48%,
            rgba(242, 204, 52, 1) 51%,
            rgba(242, 204, 52, 1) 100%);
    background: -webkit-linear-gradient(135deg,
            rgba(255, 216, 61, 1) 0%,
            rgba(255, 216, 61, 1) 48%,
            rgba(242, 204, 52, 1) 51%,
            rgba(242, 204, 52, 1) 100%);
    background: linear-gradient(135deg,
            rgba(255, 216, 61, 1) 0%,
            rgba(255, 216, 61, 1) 48%,
            rgba(242, 204, 52, 1) 51%,
            rgba(242, 204, 52, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffd83d", endColorstr="#f2cc34", GradientType=1);
}

.hizli-menu .owl-item:nth-child(4n + 3) .hizli-menu-box .hizli-back {
    background: rgb(192, 163, 46);
}

.hizli-menu .owl-item:nth-child(4n + 4) .hizli-menu-box>a:first-child {
    background: rgb(250, 89, 187);
    background: -moz-linear-gradient(135deg,
            rgba(250, 89, 187, 1) 0%,
            rgba(250, 89, 187, 1) 48%,
            rgba(237, 80, 176, 1) 51%,
            rgba(237, 80, 176, 1) 100%);
    background: -webkit-linear-gradient(135deg,
            rgba(250, 89, 187, 1) 0%,
            rgba(250, 89, 187, 1) 48%,
            rgba(237, 80, 176, 1) 51%,
            rgba(237, 80, 176, 1) 100%);
    background: linear-gradient(135deg,
            rgba(250, 89, 187, 1) 0%,
            rgba(250, 89, 187, 1) 48%,
            rgba(237, 80, 176, 1) 51%,
            rgba(237, 80, 176, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#fa59bb", endColorstr="#ed50b0", GradientType=1);
}

.hizli-menu .owl-item:nth-child(4n + 4) .hizli-menu-box .hizli-back {
    background: rgb(156, 55, 118);
}

.clip-t-t {
    clip-path: polygon(50% 0px, 100% 40px, 100% 100%, 0 100%, 0 40px);
    padding-top: 40px;
    margin-top: -40px;
}

.clip-t-b {
    clip-path: polygon(50% 40px, 100% 0, 100% 100%, 0 100%, 0 0);
    padding-top: 40px;
    margin-top: -40px;
}

.bize-ulasin-sidebar {
    padding: 20px;
    background-color: #7aab2b;
    text-align: left;
    color: white;
}

.bize-ulasin-sidebar p {
    color: white;
}

.bize-ulasin-sidebar h6 {
    font-weight: normal;
    font-size: 14px;
}

.bize-ulasin-sidebar h5 {
    font-size: 24px;
}

.bize-ulasin-sidebar a {
    color: white;
    border: 1px solid white;
    padding: 10px 30px;
    border-radius: 5px;
    text-decoration: none;
    transition: all 0.3s;
}

.bize-ulasin-sidebar a:hover {
    background-color: white;
    color: #7aab2b;
}

.baskan-kosesi .image-box {
    position: relative;
}

.baskan-kosesi .image-box img {
    width: 100%;
}

.baskan-kosesi .image-box ul {
    background: -webkit-linear-gradient(linear,
            left top,
            left bottom,
            from(transparent),
            to(rgba(23, 53, 86, 0.9)));
    background: linear-gradient(transparent, rgba(23, 53, 86, 0.9));
    padding: 0;
    margin: 0px auto;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: flex-end;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}

.baskan-kosesi .image-box ul li {
    display: inline-block;
    margin: 0px 5px 15px 5px;
}

.baskan-kosesi .image-box ul li a {
    color: white;
}

.baskan-kosesi .image-box ul li a i {
    border: 1px solid white;
    border-radius: 2px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    transition: all 0.3s;
}

.baskan-kosesi .image-box ul li a i:hover {
    background-color: white;
    color: <?php echo renk1;?>;
    border-radius: 50%;
}

.baskan-kosesi>h5 {
    color: #7aab2b;
    margin-bottom: 10px;
}

.baskan-kosesi .link-box ul {
    list-style: none;
    padding: 0 20px;
}

.baskan-kosesi .link-box {
    -webkit-box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 20px 0 rgba(0, 0, 0, 0.05);
    -webkit-transition: .3s;
    transition: .3s;
}

.baskan-kosesi .link-box ul li {
    padding: 20px 0px;
    border-bottom: 1px solid #e9e9e9;
}

.baskan-kosesi .link-box ul li:last-child {
    border-bottom: unset;
}

.baskan-kosesi .link-box ul li a {
    width: 100%;
    display: block;
    text-decoration: none !important;
}

.baskan-kosesi .link-box ul li a span {
    vertical-align: middle;
    display: inline-flex;
    color: #8d8b8e;
    transition: all 0.3s;
}

.baskan-kosesi .link-box ul li a:hover span {
    color: #7aab2b;
}

.baskan-kosesi .link-box ul li a span:first-child {
    width: calc(100% - 20px);
}

.baskan-kosesi .link-box ul li a span:last-child {
    width: 15px;
    text-align: right;
}

/* Mobile Device */
@media only screen and (max-width: 992px) {
    .baskan-section .sag {
        align-items: flex-start;
    }

    .baskan-section .sag .text-side h3 {
        font-size: 41px;
    }

    .baskan-section .sag .text-side p {
        font-size: 22px;
    }

    .ilk-personel img,
    .diger-personeller img {
        padding: 0px 50px;
    }

    .e-tarih {
        width: 100%;
        height: 70px;
        background: <?php echo renk3;?>;
        color: white;
        text-align: center;
        border-radius: 0;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .e-tarih p {
        display: inline;
        font-size: 20px !important;
        line-height: 70px;
    }

    .header-fix {
        padding-top: 0;
    }

    .slider-text {
        max-width: 550px;
    }

    .slider-text .slide-title {
        font-size: 40px;
    }

    .slide-menu.container {
        max-width: 100%;
    }

    .slide-menu {
        height: auto;
        position: static;
        left: 0;
        transform: translateX(0);
    }

    .slide-menu>div {
        height: auto !important;
    }

    .slide-menu>div>div {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 140px;
    }

    .header-mobile {
        display: block;
        position: fixed;
        padding: 10px;
        background: <?php echo renk1;?>;
        z-index: 9;
        width: 100%;
        height: 100px;
    }

    .header-top,
    .header-bottom {
        display: none;
    }

    .slider-haber-box {
        width: 600px;
        height: auto;
    }

    .slider-haber-box .s-type {
        width: auto;
        display: inline-block;
        padding: 10px 20px;
        position: static;
        transform: translateY(-50%);
    }

    .slider-haber-box .s-image {
        width: 600px;
        height: 250px;
        margin-top: -1px;
        object-fit: cover;
        position: static;
        left: unset;
        top: unset;
        border-radius: 0%;
        border-radius: 10px 10px 0 0;
    }

    .slider-haber-box>div>div:nth-child(2) {
        padding-top: 0 !important;
    }

    .footer-section .border-right {
        border-right: none !important;
    }

    .diger-haberler a .content p {
        font-size: 14px;
    }

    .diger-haberler a .content h3 {
        font-size: 18px;
    }

    .slide-menu .row {
        height: min-content;
    }
}

@media only screen and (max-width: 768px) {
    .owl-carousel-etkinlik .row {
        height: 350px;
    }

    .etkinlik-slider-content {
        height: 350px;
    }

    .owl-carousel-etkinlik img {
        height: 350px;
    }

    .festival-image {
        height: 200px;
    }

    .baskan-section {
        padding-bottom: 0px;
    }

    .haber-nav {
        display: none;
    }

    .slider-text {
        max-width: 300px;
    }

    .slider-text .slide-title {
        font-size: 22px;
    }

    .slide-menu.container {
        max-width: 100%;
    }

    .slide-menu {
        height: auto;
        position: static;
        left: 0;
        transform: translateX(0);
    }

    .slide-menu>div {
        height: auto !important;
    }

    .slide-menu>div>div {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .diger-haberler a .content p {
        font-size: 12px;
    }

    .diger-haberler a .content h3 {
        font-size: 14px;
    }

    .etkinlik-image {
        height: 250px;
        width: 100%;
        object-fit: cover;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .etkinlik-content {
        background: white;
        padding: 30px 100px 30px 50px;
        position: static;
        left: 0;
        bottom: 0;
        widows: 100%;
    }

    #haberSlide {
        height: 420px;
    }

    #haberSlide .carousel-indicators {
        display: none;
    }

    .haber-section>div {
        height: 420px;
    }

    .slider-haber-box {
        width: 400px;
        height: auto;
    }

    .slider-haber-box .s-image {
        width: 400px;
        height: 200px;
    }

    .festival-nav {
        bottom: 85px;
        top: auto;
        width: 100px;
        margin: 0px auto;
        transform: translateY(-50%);
        z-index: 9;
    }

    .festival-nav button {
        background: <?php echo renk3;?>;
        width: 36px;
        height: 36px;
        font-size: 30px;
    }

    .festival-nav button:hover {
        background: <?php echo renk1;?>;
        width: 36px;
        height: 36px;
        font-size: 30px;
    }
}

@media only screen and (max-width: 1400px) {
    .bagis-box button{
		font-size:12px !important;
	}
}
@media only screen and (min-width: 1400px) {
    .container {
        max-width: 1340px;
    }
}

@media only screen and (max-width: 1200px) {
    .header-bottom .navs {
        font-size: 14px;
    }

    .projeler-section .custom-owl-nav {
        position: absolute;
        top: 50%;
        left: 5%;
        right: 5%;
        transform: translateY(-50%);
        width: auto;
        z-index: 9;
        height: 85px;
    }

    .projeler-section .custom-owl-nav button {
        width: 40px;
        height: 40px;
        font-size: 24px;
    }

    .projeler-section .custom-owl-nav button span {
        line-height: 30px;
    }
}

#haberSlide .carousel-control-next,
#haberSlide .carousel-control-prev {
    width: 100px;
    z-index: 9;
}

#carouselExampleControls .carousel-control-next,
#carouselExampleControls .carousel-control-prev {
    width: 100px;
    top: 50%;
    transform: translateY(-50%);
}

.z-index-9 {
    z-index: 9;
}

@-webkit-keyframes scroll {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    50% {
        -webkit-transform: translateY(10px);
        transform: translateY(10px)
    }

    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }
}

@-moz-keyframes scroll {
    0% {
        -moz-transform: translateY(0);
        transform: translateY(0)
    }

    50% {
        -moz-transform: translateY(10px);
        transform: translateY(10px)
    }

    100% {
        -moz-transform: translateY(0);
        transform: translateY(0)
    }
}

@keyframes scroll {
    0% {
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0)
    }

    50% {
        -webkit-transform: translateY(10px);
        -moz-transform: translateY(10px);
        -ms-transform: translateY(10px);
        -o-transform: translateY(10px);
        transform: translateY(10px)
    }

    100% {
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0)
    }
}

.header-down {
    position: absolute;
    z-index: 1;
    right: 0;
    bottom: 185px;
    left: 0;
    border-radius: 20px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    width: 25px;
    height: 40px;
    margin: 0 auto;
    border: 2px solid #fff;
    cursor: pointer;
    -webkit-animation: scroll 1.3s ease-out infinite forwards;
    -moz-animation: scroll 1.3s ease-out infinite forwards;
    animation: scroll 1.3s ease-out infinite forwards;
    -webkit-transition: .3s;
    transition: .3s;
}

@media (max-width: 1279px) {
    .header-down {
        bottom: 30px;
    }
}

@media (max-width: 767px) {
    .header-down {
        display: none;
    }

    .ustslider img {
        height: auto !important;
        object-fit: contain !important;
    }

    .context {
        font-size: 12px !important;
        font-weight: normal !important;
    }

    .content p {
        font-size: 11px;
        text-align: left !important;
        margin-bottom: 5px;
        font-weight: bold;
    }

    #haberSlide .content h3 {
        font-size: 18px !important;
    }
}

.header-down:before {
    content: "";
    position: absolute;
    top: 12px;
    right: 0;
    left: 50%;
    border-radius: 3px;
    width: 2px;
    height: 6px;
    background: #fff;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}

.header-down:hover {
    background: #fff;
    -webkit-animation-play-state: paused;
    animation-play-state: paused;
}

.header-down:hover:before {
    background: <?php echo renk1;?>;
}

section.bg-cover:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    right: 0;
    left: 0;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    height: 100%;
}

section.cover-1:before {
    background-image: url(../../assets/images/cover-1.jpg);
}

.ordered-list {
    display: inline-block;
    width: 100%;
}

.ordered-list>ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.ordered-list>ul>li:not(.more) {
    margin-bottom: 10px;
    background: #f7f7f7;
}

.ordered-list>ul>li:not(.more):last-child {
    margin-bottom: 0;
}

.ordered-list>ul>li:not(.more):hover>a {
    -webkit-box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.07);
    box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.07);
    text-decoration: none;
}

.ordered-list>ul>li:not(.more):hover>a:after {
    width: 100%;
    opacity: 1;
}

.ordered-list>ul>li:not(.more)>a {
    display: -webkit-box;
    display: -ms-flexbox;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 20px;
    color: <?php echo renk1;?>;
    -webkit-transition: .3s;
    transition: .3s;
    position: relative;
    z-index: 1;
}

@media (max-width: 767px) {
    .ordered-list>ul>li:not(.more)>a {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
    }
}

.ordered-list>ul>li:not(.more)>a:after {
    content: "";
    position: absolute;
    z-index: -1;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: white;
    width: 30%;
    opacity: 0;
    -webkit-transition: .3s;
    transition: .3s;
}

.ordered-list>ul>li:not(.more)>a .icon {
    margin-right: 15px;
    font-size: 14px;
    height: auto;
}

.ordered-list>ul>li:not(.more)>a .text {
    font-size: 16px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-right: 30px;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    line-height: 1.3;
    margin-bottom: 0;
}

.ordered-list>ul>li:not(.more)>a .date {
    font-size: 13px;
    color: #999;
}

@media (max-width: 767px) {
    .ordered-list>ul>li:not(.more)>a .date {
        padding-left: 28px;
        padding-top: 10px;
    }
}

.ordered-list .more a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background: #f7f7f7;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 40px;
    text-transform: uppercase;
    color: #999;
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
}

.ordered-list .more a:hover {
    color: #6f6f6f;
    text-decoration: none;
}

.ordered-list .more .icon {
    margin-right: 10px;
    font-size: 16px;
    margin: 0px;
    height: auto;
}

.ordered-list .loading {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: auto;
    text-transform: uppercase;
    color: #999;
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
}

.ordered-list__sub {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    background: #fff;
    -webkit-box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.07);
    box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.07);
}

.ordered-list__sub-content {
    width: 100%;
}

.ordered-list__sub-content .page-content-description,
.ordered-list__sub-content .page-content-gallery,
.ordered-list__sub-content .documents-files,
.ordered-list__sub-content .ordered-links {
    padding: 30px;
}

.ordered-list__sub-content .page-content-gallery {
    margin-top: 0;
}

.ordered-list__sub-content>img {
    width: 250px;
    float: left;
    margin-right: 20px;
    margin-bottom: 20px;
}

.ordered-list__dropdown>ul>li.is-open>a {
    -webkit-box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.07);
    box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.07);
}

.ordered-list__dropdown>ul>li.is-open>a:before {
    content: "_";
    margin-top: -10px;
}

.ordered-list__dropdown>ul>li.is-open>a:after {
    width: 100%;
    opacity: 1;
}

.ordered-list__dropdown>ul>li>a {
    padding-right: 40px;
}

.ordered-list__dropdown>ul>li>a:before {
    content: "+";
    position: absolute;
    right: 20px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 24px;
    font-weight: 200;
}

.ordered-list__dropdown>ul>li>a .date {
    margin-right: 30px;
}

.ordered-list__dropdown .ordered-list__sub {
    display: none;
}

.ordered-links ul li {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    -webkit-transition: .3s;
    transition: .3s;
}

.ordered-links ul li:last-child {
    border-bottom: 0 none;
}

.ordered-links ul li:hover {
    background: #fff;
    -webkit-box-shadow: 3px 3px 10px rgba(23, 53, 86, 0.1);
    box-shadow: 3px 3px 10px rgba(23, 53, 86, 0.1);
    padding-left: 15px;
}

.ordered-links ul li a {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    color: #6f6f6f;
    font-size: 16px;
    font-weight: 300;
    padding-top: 10px;
    padding-bottom: 10px;
}

@media (max-width: 767px) {
    .ordered-links ul li a:after {
        display: none;
    }
}

.ordered-links ul li a:after {
    content: "";
    position: absolute;
    z-index: 12;
    top: 50%;
    right: 20px;
    width: 9px;
    height: 9px;
    -webkit-transform: translateY(-50%) rotate(45deg);
    transform: translateY(-50%) rotate(45deg);
    border-top: 1px solid currentColor;
    border-right: 1px solid currentColor;
    -webkit-transition: .3s;
    transition: .3s;
}

.haberfoto {
    list-style: none;
    margin: 0;
    padding: 0;
}

.gallery.small .gallery-cover {
    height: 175px;
}

.gallery.small .gallery-body {
    padding: 20px;
}

.gallery.small .gallery-body .title {
    font-size: 16px;
}

.gallery.small .gallery-body .title:before {
    left: -20px;
}

.gallery.small .gallery-body .date {
    font-size: 12px;
}

.gallery.small .gallery-body>.icon {
    width: 40px;
    height: 40px;
    font-size: 18px;
}

.gallery.list .gallery-card {
    margin-bottom: 20px;
}

@media (max-width: 479px) {
    .gallery.list .gallery-card:last-child {
        margin-bottom: 0;
    }
}

.gallery ul {
    list-style: none;
    padding: 0;
}

.gallery-card a {
    position: relative;
    display: block;
}

.gallery-card a:hover .gallery-cover img {
    -webkit-transform: scale3d(1.15, 1.15, 1.15);
    transform: scale3d(1.15, 1.15, 1.15);
}

.gallery-card a:hover .gallery-cover-kapak img {
    -webkit-transform: scale3d(1.15, 1.15, 1.15);
    transform: scale3d(1.15, 1.15, 1.15);
}

.gallery-card a:hover .gallery-photo img {
    -webkit-transform: scale3d(1.15, 1.15, 1.15);
    transform: scale3d(1.15, 1.15, 1.15);
}

.gallery-card a:hover .gallery-overlay {
    opacity: 1;
    visibility: visible;
}

.gallery-header {
    position: relative;
}

.gallery-photo {
    overflow: hidden;
    height: 150px;
}

.gallery-photo img {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -webkit-transform: scale3d(1.02, 1.02, 1.02);
    transform: scale3d(1.02, 1.02, 1.02);
    -webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, 0.2, 1);
    transition: -webkit-transform 1s cubic-bezier(0, 0, 0.2, 1);
    transition: transform 1s cubic-bezier(0, 0, 0.2, 1);
    transition: transform 1s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 1s cubic-bezier(0, 0, 0.2, 1);
}

.gallery-footer {
    padding-top: 15px;
}

.gallery-footer .title {
    font-size: 18px;
    color: #6f6f6f;
    font-weight: 600;
    overflow: hidden;
    margin-bottom: 8px;
}

.gallery-footer .text {
    font-size: 14px;
    color: #6f6f6f;
    overflow: hidden;
}

.gallery-overlay {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 11;
    background: rgba(0, 0, 0, 0.3);
    padding: 20px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    opacity: 1;
    visibility: visible;
    -webkit-transition: .3s;
    transition: .3s;
}

.gallery-overlay .icon {
    font-size: 18px;
    color: #fff;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border: 2px solid #fff;
    border-radius: 100%;
    color: #fff;
    position: absolute;
    top: 10px;
    right: 10px;
}

.gallery-body {
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    position: absolute;
    background: -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(0, 0, 0, 0.7)));
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
    padding: 25px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}

.gallery-body .title {
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.3;
    position: relative;
}

.gallery-body .title:before {
    content: "";
    position: absolute;
    left: -25px;
    top: 0;
    background: #7aab2b;
    width: 4px;
    height: 30px;
}

.gallery-body .date {
    color: #fff;
    font-size: 13px;
    margin-top: 5px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    opacity: .8;
    font-weight: 300;
}

.gallery-body .date .icon {
    font-size: 13px;
    margin-right: 7px;
    margin: 0;
    height: auto;
}

.gallery-body>.icon {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    width: 45px;
    height: 45px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border: 2px solid #fff;
    border-radius: 50%;
    color: #fff;
    font-size: 20px;
    position: absolute;
    right: 15px;
    top: 15px;
}

@media (max-width: 479px) {
    .gallery-body>.icon {
        display: none;
    }
}

.gallery-cover {
    overflow: hidden;
    height: 170px;
}

.gallery-cover img {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -webkit-transition: all 1s cubic-bezier(0, 0, 0.2, 1);
    transition: all 1s cubic-bezier(0, 0, 0.2, 1);
}

.gallery-cover-kapak {
    overflow: hidden;
    height: 220px;
}

.gallery-cover-kapak img {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -webkit-transition: all 1s cubic-bezier(0, 0, 0.2, 1);
    transition: all 1s cubic-bezier(0, 0, 0.2, 1);
}

.margin-top-30 {
    margin-top: 30px;
}

.margin-top-50 {
    margin-top: 50px;
}

.page-content-gallery {
    display: inline-block;
    width: 100%;
}

.inner-page-back {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: #fff;
    font-size: 14px;
}

.contact-us {
    z-index: 1;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.contact-us:before {
    content: "";
    position: absolute;
    height: 100%;
    z-index: -1;
    top: 0;
    right: 0;
    left: 0;
    background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(transparent));
    background: linear-gradient(#fff, transparent);
}

.contact-us .row {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.contact-us-bg {
    background: #fff;
    -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    float: left;
    width: 100%;
}

.contact-us-content {
    max-width: 100%;
}

.contact-us-content>.title {
    font-size: 32px;
    font-weight: 700;
    line-height: 1;
    margin-bottom: 12px;
    color: #222;
}

.contact-us-content>.text {
    font-size: 16px;
    font-weight: 300;
}

.contact-us-content.left {
    float: right;
    width: 590px;
}

@media (min-width: 1824px) {
    .contact-us-content.left {
        width: 665px;
    }
}

@media (min-width: 1280px) {
    .contact-us-content.left {
        padding-right: 60px;
    }
}

@media (min-width: 992px) and (max-width: 1200px) {
    .contact-us-content.left {
        width: 486px;
        padding-right: 40px;
    }
}

.contact-us-content.right {
    float: left;
    width: calc(1200px - 590px - 20px);
    padding: 35px 0 35px 50px;
    height: 550px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

@media (min-width: 1824px) {
    .contact-us-content.right {
        width: calc(1350px - 665px - 20px);
    }
}

@media (min-width: 992px) and (max-width: 1200px) {
    .contact-us-content.right {
        width: calc(992px - 486px - 20px);
    }
}

.contact-us-list {
    margin-top: 30px;
}

.contact-us-list ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.contact-us-list ul li:not(:last-child) {
    margin-bottom: 10px;
}

.contact-us-list ul li a {
    border: 1px solid rgba(0, 0, 0, 0.1);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background: rgba(255, 255, 255, 0.3);
    -webkit-transition: .3s;
    transition: .3s;
}

.contact-us-list ul li a:hover {
    background: #fff;
    text-decoration: none;
}

.contact-us-list .icon {
    margin: 0;
    font-size: 24px;
    color: #222;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    width: 60px;
    height: 60px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background: #fff;
    margin-right: 20px;
    -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.contact-us-list .text {
    color: #6f6f6f;
    font-size: 16px;
    font-weight: 300;
}

.l-relative {
    position: relative;
}

.form-custom ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.form-custom ul li {
    margin-bottom: 20px;
}

.form-custom ul li.is-error input,
.form-custom ul li.is-error textarea,
.form-custom ul li.is-error .current,
.form-custom ul li.is-error label {
    border: 1px solid red;
}

.form-custom ul li input,
.form-custom ul li textarea {
    width: 100%;
    height: 60px;
    padding-right: 20px;
    padding-left: 20px;
    font-family: inherit;
    color: #222;
    background: #fff;
    border: 1px solid rgba(0, 0, 0, 0.1);
    font-size: 16px;
    font-weight: 300;
    -webkit-transition: .3s;
    transition: .3s;
}

.form-custom ul li input:focus,
.form-custom ul li textarea:focus {
    border: 1px solid rgba(0, 0, 0, 0.3);
}

.form-custom ul li input {
    padding-left: 80px;
}

.form-custom ul li textarea {
    padding-top: 20px;
    height: 150px;
}

.form-custom ul li .icon {
    margin: 0;
    display: flex;
    width: 65px;
    height: 60px;
    position: absolute;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: #6f6f6f;
    font-size: 18px;
    left: 10px;
    z-index: 1;
}

.form-custom ul li .icon:before {
    position: absolute;
    right: 0;
    content: "";
    background: rgba(0, 0, 0, 0.15);
    width: 1px;
    height: 20px;
}

.form-custom .send {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding-left: 10px;
    padding-right: 10px;
}

.form-custom.form-contact-us .send {
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
}

.section.cover-2 {
    height: 630px;
}

.section.cover-2:before {
    background-image: url("../../assets/images/section-cover.jpg");
    opacity: .5;
}

.section.bg-cover {
    position: relative;
    z-index: 1;
}

.gallery-description {
    background: #33c3dc;
    height: 220px;
    padding-left: 35px;
    padding-right: 35px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.gallery-description .title {
    font-size: 28px;
    font-weight: 700;
    color: #fff;
    line-height: 1.3;
    margin-bottom: 5px;
}

.gallery-description .text {
    font-size: 14px;
    font-weight: 300;
    color: #fff;
    line-height: 1.4;
    margin-bottom: 20px;
}

.button-border .icon {
    margin-left: 10px;
    font-size: 14px;
    height: auto;
}

.button-border.light {
    border: 2px solid #fff;
    color: #fff;
}

.button-border:last-child {
    margin-right: 0;
}

.button-border {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    min-width: 170px;
    height: 40px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 14px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: .5px;
    margin-right: 10px;
    -webkit-transition: .3s;
    transition: .3s;
    border: 2px solid #e1e1e1;
    color: #6f6f6f;
}

.button-border.light:hover {
    background: #fff;
    color: #6f6f6f;
    text-decoration: none;
}

.etkinlikdetay {
    margin-top: 13px;
}

.etkinlikdetay.single .etkinlikdetay-card__content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.etkinlikdetay.large {
    margin-bottom: 50px;
}

.etkinlikdetay.large .etkinlikdetay-photo {
    width: 30%;
    height: auto;
}

@media (max-width: 991px) {
    .etkinlikdetay.large .etkinlikdetay-photo {
        width: 100%;
    }
}

.etkinlikdetay.large .etkinlikdetay-description {
    width: calc(100% - 30%);
    padding: 35px;
    background: #fff;
    -webkit-box-shadow: 5px 5px 50px rgba(23, 53, 86, 0.15);
    box-shadow: 5px 5px 50px rgba(23, 53, 86, 0.15);
}

@media (max-width: 991px) {
    .etkinlikdetay.large .etkinlikdetay-description {
        width: 100%;
        padding: 25px;
    }
}

.etkinlikdetay.large .etkinlikdetay-description .page-content__spot {
    margin-top: 0;
    margin-bottom: 0;
}

@media (min-width: 992px) and (max-width: 1279px) {
    .etkinlikdetay.large .etkinlikdetay-description .page-content__spot {
        font-size: 14px;
    }
}

.etkinlikdetay.large .etkinlikdetay-info .icon,
.etkinlikdetay.large .etkinlikdetay-info .text {
    height: 60px;
}

@media (min-width: 992px) and (max-width: 1279px) {

    .etkinlikdetay.large .etkinlikdetay-info .icon,
    .etkinlikdetay.large .etkinlikdetay-info .text {
        height: 35px;
    }
}

.etkinlikdetay.large .etkinlikdetay-info .icon {
    width: 60px;
    font-size: 18px;
}

@media (min-width: 992px) and (max-width: 1279px) {
    .etkinlikdetay.large .etkinlikdetay-info .icon {
        font-size: 14px;
    }
}

.etkinlikdetay.large .etkinlikdetay-info .text {
    width: calc(100% - 60px - 3px);
    font-size: 16px;
    padding-left: 20px;
    padding-right: 20px;
}

@media (min-width: 992px) and (max-width: 1279px) {
    .etkinlikdetay.large .etkinlikdetay-info .text {
        font-size: 13px;
    }
}

.etkinlikdetay.frame a {
    background: #fff;
    -webkit-box-shadow: 5px 5px 20px rgba(23, 53, 86, 0.1);
    box-shadow: 5px 5px 20px rgba(23, 53, 86, 0.1);
    padding: 10px;
    -webkit-transition: .3s;
    transition: .3s;
}

.etkinlikdetay.frame a:hover {
    -webkit-box-shadow: 5px 5px 40px rgba(23, 53, 86, 0.2);
    box-shadow: 5px 5px 40px rgba(23, 53, 86, 0.2);
}

.etkinlikdetay.list>ul {
    margin-left: -15px;
    margin-right: -15px;
}

.etkinlikdetay.list>ul>li {
    padding-left: 15px;
    padding-right: 15px;
    margin-bottom: 30px;
}

.etkinlikdetay-photo {
    overflow: hidden;
    width: 180px;
    height: 245px;
}

@media (max-width: 479px) {
    .etkinlikdetay-photo {
        width: 100%;
        height: auto;
    }
}

.etkinlikdetay-photo img {
    width: 100%;
    height: 100%;
    -o-object-fit: contain;
    object-fit: contain;
}

.etkinlikdetay-description {
    width: calc(100% - 180px);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 20px;
}

@media (max-width: 479px) {
    .etkinlikdetay-description {
        width: 100%;
        padding-left: 0;
        padding-top: 20px;
        padding-bottom: 10px;
    }
}

.etkinlikdetay-description .title {
    color: #173556;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.3;
    overflow: hidden;
    max-height: 71px;
}

.etkinlikdetay-info {
    margin-top: 20px;
    margin-bottom: 20px;
}

.etkinlikdetay-info ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.etkinlikdetay-info ul li {
    margin-bottom: 3px;
}

.etkinlikdetay-info ul li:last-child {
    margin-bottom: 0;
}

.etkinlikdetay-info ul li a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    color: #173556;
    position: relative;
}

.etkinlikdetay-info ul li a:hover .text {
    background: #fff;
    -webkit-box-shadow: 0 0 30px rgba(24, 76, 124, 0.2);
    box-shadow: 0 0 30px rgba(24, 76, 124, 0.2);
}

.etkinlikdetay-info .icon,
.etkinlikdetay-info .text {
    height: 35px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background: #dce4eb;
}

.etkinlikdetay-info .icon {
    width: 40px;
    font-size: 14px;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 5px 0 0 5px;
}

.etkinlikdetay-info .text {
    width: calc(100% - 40px - 3px);
    font-size: 13px;
    font-weight: 300;
    line-height: 1.1;
    font-family: "Roboto", sans-serif;
    margin-left: 3px;
    padding-left: 12px;
    padding-right: 12px;
    border-radius: 0 5px 5px 0;
    -webkit-transition: .3s;
    transition: .3s;
}

.etkinlikdetay-card__content {
    position: relative;
}

.etkinlikdetay-card__content:hover .etkinlikdetay-body {
    opacity: 1;
    visibility: visible;
    -webkit-transform: scale(1);
    transform: scale(1);
}

.etkinlikdetay-card__content:hover .etkinlikdetay-cover img {
    -webkit-transform: scale3d(1.15, 1.15, 1.15);
    transform: scale3d(1.15, 1.15, 1.15);
}

.etkinlikdetay-header {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    -webkit-box-shadow: 5px 5px 20px rgba(23, 53, 86, 0.15);
    box-shadow: 5px 5px 20px rgba(23, 53, 86, 0.15);
}

.etkinlikdetay-cover {
    overflow: hidden;
    height: 400px;
}

@media (max-width: 1279px) {
    .etkinlikdetay-cover {
        height: auto;
    }
}

.etkinlikdetay-cover img {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, 0.2, 1);
    transition: -webkit-transform 1s cubic-bezier(0, 0, 0.2, 1);
    transition: transform 1s cubic-bezier(0, 0, 0.2, 1);
    transition: transform 1s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 1s cubic-bezier(0, 0, 0.2, 1);
}

.etkinlikdetay-footer {
    text-align: center;
    height: 65px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-left: 20px;
    padding-right: 20px;
}

.etkinlikdetay-footer .title {
    color: #6f6f6f;
    font-size: 14px;
    font-weight: 300;
    line-height: 1.4;
    overflow: hidden;
    max-height: 39px;
}

.etkinlikdetay-body {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(23, 155, 216, 0.95);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 30px;
    opacity: 0;
    visibility: visible;
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    -webkit-transition: .3s;
    transition: .3s;
}

.etkinlikdetay-body .title {
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.4;
    overflow: hidden;
    max-height: 75px;
}

.etkinlikdetay-body ul li {
    margin-bottom: 7px;
}

.etkinlikdetay-body ul li:last-child {
    margin-bottom: 0;
}

.etkinlikdetay-body ul li a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: #fff;
    font-size: 13px;
    font-weight: 300;
    border-radius: 5px;
    height: 35px;
    border: 1px solid #fff;
    border-radius: 5px;
    min-width: 160px;
    -webkit-transition: .3s;
    transition: .3s;
}

.etkinlikdetay-body ul li a:hover {
    background: #fff;
    color: #179bd8;
}

.etkinlikdetay-body ul li a .icon {
    width: 45px;
    font-size: 14px;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.page-content__spot {
    margin-top: 25px;
    margin-bottom: 20px;
    font-size: 18px;
    color: #333;
}

.page-content__spot p {
    margin: 0;
    padding: 0;
}

.boxes ul {
    list-style: none;
    padding: 0;
}

.boxes.no-center ul li a {
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    text-align: left;
    padding: 0 30px;
}

.boxes ul li:not(.boxes-card) a {
    background: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: left;
    height: 105px;
    position: relative;
    -webkit-box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.07);
    box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.07);
    padding: 0 20px;
    color: #6f6f6f;
    font-size: 16px;
    letter-spacing: -0.3px;
    text-transform: uppercase;
    line-height: 1.3;
    text-align: left;
    -webkit-transition: .3s;
    transition: .3s;
}

.boxes ul li:not(.boxes-card) {
    margin-bottom: 20px;
}

.boxes ul li:not(.boxes-card) a:not(.all):hover {
    -webkit-box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.2);
    color: #ff420b;
    text-decoration: none;
}

.documents {
    display: inline-block;
    width: 100%;
}

.documents>ul {
    list-style: none;
    padding: 0;
}

.documents>ul>li:not(.more) {
    margin-bottom: 15px;
    border: 1px solid rgba(0, 0, 0, 0.1);
}


.documents>ul>li:not(.more):hover a:after {
    width: 100%;
    opacity: 1;
}

.documents>ul>li:not(.more)>a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 20px;
    color: <?php echo renk1;?>;
    position: relative;
    z-index: 1;
    text-decoration: none;
}

@media (max-width: 767px) {
    .documents>ul>li:not(.more)>a {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
    }
}

.documents>ul>li:not(.more)>a:after {
    content: "";
    position: absolute;
    z-index: -1;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: #f7f7f7;
    width: 30%;
    opacity: 0;
    -webkit-transition: .3s;
    transition: .3s;
}

.documents>ul>li:not(.more)>a .icon {
    margin-right: 10px;
    font-size: 14px;
    margin: 0;
    height: auto;
}

.documents>ul>li:not(.more)>a .text {
    font-size: 16px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin: 0;
}

.documents>ul>li:not(.more)>a .date {
    font-size: 13px;
    color: #999;
}

@media (max-width: 767px) {
    .documents>ul>li:not(.more)>a .date {
        padding-left: 20px;
    }

    .contact-us-content.left {
        width: 100%;
    }

    .section.cover-2 {
        height: auto;
    }

    .no-gutters {
        margin: 15px;
    }

    .contact-us-list {
        margin-bottom: 30px;
    }

    .contact-us-content.right {
        padding: 0;
        height: auto;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .contact-us {
        height: auto;
    }
}

.documents-sub {
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.documents-sub-content {
    width: 100%;
}

.documents-sub-content .page-content-description,
.documents-sub-content .documents-files,
.documents-sub-content .page-content__gallery {
    padding: 20px;
    font-weight: 300;
}

.documents-sub-content img {
    width: 250px;
    float: left;
    margin-right: 20px;
    margin-bottom: 20px;
}

.documents-dropdown ul li.is-open a:before {
    content: "_";
    margin-top: -10px;
}

.documents-dropdown ul li.is-open a:after {
    width: 100%;
    opacity: 1;
}

.documents-dropdown ul li a {
    padding-right: 40px;
}

.documents-dropdown ul li a:before {
    content: "+";
    position: absolute;
    right: 15px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 24px;
    font-weight: 200;
}

.documents-dropdown .documents-sub {
    display: none;
}

.documents-files {
    display: inline-block;
    width: 100%;
}

.documents-files ul {
    list-style: none;
    padding: 0;
}

.documents-files ul li {
    margin-bottom: 10px;
}

.documents-files ul li:last-child {
    margin-bottom: 0;
}

.documents-files ul li a {
    background: #f7f7f7;
    padding: 20px 30px 20px 20px;
    border-left: 5px solid #7aab2b;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    position: relative;
    -webkit-transition: .3s;
    transition: .3s;
}

.documents-files ul li a:hover {
    -webkit-box-shadow: 0 0 7px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 7px rgba(0, 0, 0, 0.1);
    background: #fff;
    text-decoration: none;
}

.documents-files ul li a .text {
    font-size: 16px;
    font-weight: 500;
    color: #222;
}

.documents-files ul li a .date {
    font-size: 13px;
    color: #999;
}

.documents-files ul li a .icon {
    position: absolute;
    right: 25px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 24px;
    color: #000;
    opacity: .2;
}

.documents-icon {
    font-size: 24px;
    color: #7aab2b;
    margin-right: 20px;
}

.primary-table th {
    background: <?php echo renk1;?>;
    color: #fff;
}

.table {
    width: 100%;
    margin: .5rem 0;
    table-layout: fixed;
    border-collapse: collapse;
}

.table tr {
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
}

.table td,
.table th {
    text-align: left;
    font-size: 14px;
    font-size: .875rem;
    vertical-align: middle;
}

.primary-table,
.primary-table a {
    color: #78909c;
}

.primary-table tbody tr:nth-child(odd) {
    background: #f9f8fb;
}

.primary-table tbody tr {
    background: #fff;
}

.label-status {
    display: inline-block;
    line-height: 1;
}

.label-status i {
    margin-right: 10px;
}

.icon-status-waiting {
    background-position: 0 -382px;
    width: 15px;
    height: 21px;
}

.row-large {
    width: 35%;
}

.inline-table tr {
    border-top: none;
    border-bottom: none;
}

.inline-table td.table-title {
    background: <?php echo renk1;?>;
    color: #fff;
}

.inline-table td {
    padding: 10px !important;
}

.inline-table td.table-content {
    border: 1px solid #e4e4e5;
}

.file-list-table .table-column.column-name {
    margin-bottom: 10px;
}

.file-list-table .table-column {
    color: #203a8e;
}

.file-list-table .table-column.column-action a {
    color: #203a8e;
}

.link-file {
    display: inline-block;
    height: 34px;
    padding: 7px 50px 0 0;
}

@media (min-width: 1024px) {
    .inline-table td {
        padding: 20px 40px !important;
    }
}

@media (min-width: 480px) {
    .primary-table th {
        border: 2px solid #fff;
    }

    .table td,
    .table th {
        display: table-cell;
        padding: 1rem;
    }

    .table tr {
        border-top: none;
        border-bottom: none;
    }

    .primary-table tbody:before {
        content: "";
        display: block;
        height: 3px;
    }

    .primary-table td {
        border: 1px solid #e4e4e5;
    }

    .inline-table td.table-title {
        width: 30%;
        border: 1px solid <?php echo renk1;?>;
        border-bottom-color: #fff;
    }

    .inline-table td.table-content {
        width: 70%;
    }

    .file-list-table .table-column.column-name {
        width: 70%;
        float: left;
        margin-bottom: 0;
        padding-top: 10px;
    }

    .file-list-table .table-column.column-action {
        width: 20%;
        float: right;
        text-align: right;
    }
}

@media (min-width: 480px) {
    .container {
        width: 100%;
        max-width: 600px;
    }
}

@media (min-width: 768px) {
    .container {
        width: 768px;
        max-width: 100%;
    }
}

@media (min-width: 992px) {
    .container {
        width: 992px;
        max-width: 100%;
    }
}

@media (min-width: 1200px) {
    .container {
        width: 1250px;
        max-width: 100%;
    }
}

@media (min-width: 1824px) {
    .container {
        width: 1400px;
    }
}

.footer {
    position: relative;
    font-family: "Roboto", sans-serif;
}

.footer-ust {
    background: <?php echo renk2;?>;
    min-height: 450px;
    position: relative;
    padding-bottom: 20px;
    overflow: hidden;
}

.footer-ust:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    background: <?php echo renk1;?>;
    height: 72px;
}

.footer-baslik {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    height: 72px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 18px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 20px;
}

@media (max-width: 479px) {
    .footer-baslik {
        font-size: 16px;
    }
}

.footer-dbv7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
    padding-left: 10px;
    padding-right: 10px;
}

.footer-dbv7 ul {
    list-style: none;
    padding: 0;
}

@media (max-width: 767px) {
    .footer-dbv7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }
}

.footer-dbv7 ul li.all {
    display: none;
}

@media (max-width: 991px) {
    .footer-dbv7 ul li.all {
        display: block;
    }
}

.footer-dbv7 ul li a {
    display: block;
    color: #ffffffb5;
    font-size: 14px;
    font-weight: 300;
    padding-top: 3px;
    padding-bottom: 3px;
    padding-left: 15px;
    padding-right: 7px;
    position: relative;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    -webkit-transition: .3s;
    transition: .3s;
}

.footer-dbv7 ul li a:before {
    content: "";
    position: absolute;
    left: 0;
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: currentColor;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.footer-dbv7 ul li a:hover {
    color: #fff;
    text-decoration: none;
}

.footer-social {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-top: 35px;
}

@media (max-width: 767px) {
    .footer-social {
        display: none;
    }

    .col-kolaymenu {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }

    .kolay-menu>ul {
        display: none;
    }

    .bize-ulasin-sidebar {
        display: none;
    }

    .baskan-kosesi {
        display: none;
    }

    .kolay-menu .social {
        display: none;
    }

    .breadcrumb {
        width: 80%;
    }

    .page-title .tarih {
        float: none;
        display: block;
    }

    .banner img {
        height: 150px;
    }

    .slide-menu>div>div:last-child {
        width: 100% !important;
        flex: 100%;
        max-width: 100%;
    }

    .haber-detay-image {
        max-width: 100%;
        float: none;
    }

    .tab-component .tab-head .tab-link {
        font-size: 12px;
    }

    .footer-alan .description .text {
        text-align: center !important;
    }

    .footerkutu .description {
        text-align: center;
        width: 100%;
        margin-top: 20px;
    }

    .hava-kutular {
        justify-content: center !important;
        text-align: center !important;
        max-height: 110px;
        width: 100%;
    }

    .hava-kutu {
        width: 33% !important;
        margin-left: 0px !important;
    }

    .footer-son .footer-alan {
        width: 100%;
    }

    .slider-text .text {
        font-size: 14px !important;
    }

    .button-border {
        min-width: 100px !important;
        height: 30px !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        font-size: 13px !important;
        border: 1px solid #e1e1e1 !important;
    }

    .baskan-section .sag .text-side p {
        font-size: 20px;
        letter-spacing: 0;
        text-align: center;
        font-weight: 400;
    }

    .baskan-section .social {
        width: 100%;
        position: relative;
    }
	
	.bagis-component .tab-head .tab-link {
		width: 33.333% !important;
	}
	.contact-us-bg {
		background: none !important;
	}

}

.footer-social a {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    width: 35px;
    height: 35px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #fff;
    background: <?php echo renk2;?>;
    margin-left: 7px;
    -webkit-transition: .3s;
    transition: .3s;
}

.footer-social a:first-child {
    margin-right: 0;
}

.footer-social a:hover {
    background: #fff;
    color: <?php echo renk2;?>;
    text-decoration: none;
}

.footer-son {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end;
}

@media (max-width: 991px) {
    .footer-son {
        margin-top: 20px;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .footer-son {
        -webkit-box-orient: inherit;
        -webkit-box-direction: inherit;
        -ms-flex-direction: inherit;
        flex-direction: inherit;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }
}

@media (min-width: 480px) and (max-width: 767px) {
    .footer-son {
        -webkit-box-orient: inherit;
        -webkit-box-direction: inherit;
        -ms-flex-direction: inherit;
        flex-direction: inherit;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        display: contents;
    }
}

.footer-son .footer-alan {
    margin-top: 10px;
}

@media (min-width: 768px) and (max-width: 991px) {
    .footer-son .footer-alan {
        margin-top: 0;
        padding-right: 20px;
    }
}

@media (min-width: 480px) and (max-width: 767px) {
    .footer-son .footer-alan {
        margin-top: 0;
        padding-right: 20px;
    }
}

.footer-text {
    margin-top: 30px;
    color: #fff;
    font-weight: 300;
    font-size: 16px;
    text-align: right;
    line-height: 1.3;
}

.footer-text strong {
    font-weight: 700;
}

@media (max-width: 479px) {
    .footer-text {
        display: none;
    }
}

.footer-logo {
    margin-top: 72px;
    margin-right: -20px;
}

@media (max-width: 991px) {
    .footer-logo {
        display: none;
    }
}

.footer-logo a {
    display: block;
    position: relative;
}

.footer-logo img {
    width: auto;
    padding: 10px;
}

.footer-bottom {
    background: <?php echo renk2;?>db;
    padding-top: 25px;
    padding-bottom: 25px;
}

@media (max-width: 479px) {
    .footer-bottom .container {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center;
    }
}

.footer-bottom .text {
    color: #fff;
    font-size: 13px;
    font-weight: 300;
}

.footer-bottom .text strong {
    font-weight: 700;
}

.footer-bottom .design {
    color: #fff;
}

.footer-sticky {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 999;
    background: #fff;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    display: none;
}

@media (max-width: 991px) {
    .footer-sticky {
        display: block;
    }
}

.footer-sticky ul li {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
    border-right: 1px solid rgba(0, 0, 0, 0.1);
}

.footer-sticky ul li:last-child {
    border-right: 0;
}

.footer-sticky ul li a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 55px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 13px;
    color: #6f6f6f;
    font-family: "Roboto", sans-serif;
    font-weight: 600;
    padding-left: 10px;
    padding-right: 10px;
    -webkit-transition: .3s;
    transition: .3s;
}

.footer-sticky ul li a:hover {
    background: #f7f7f7;
}

.footer-sticky ul li a .icon {
    margin-right: 10px;
    font-size: 18p;
}

.justify-between {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.footerkutu {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.footer-alan .description .title {
    font-size: 20px;
    font-weight: 900;
}

.footer-alan .description .title,
.footer-alan .description .text {
    color: #fff;
    line-height: 1.2;
}

.footer-alan .description .title span {
    color: #f7a42b;
    font-size: 28px;
}

.footer-alan .description .text {
    font-size: 18px;
    font-weight: 500;
    letter-spacing: .5px;
    text-align: right;
}

.col-kolaymenu {
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: #fff;
    background: none;
    border: none;
    float: right;
}

.col-kolaymenu:focus {
    outline: none;
}

.iletisim-adres ul {
    list-style: none;
    padding: 0;
}

.iletisim-adres .iletisim-adres-bilgi {
    background: #f7f7f7;
}

.iletisim-adres-bilgi {
    background: rgba(255, 255, 255, 0.7);
    height: 220px;
    border-radius: 10px;
    padding-left: 20px;
    padding-right: 20px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    font-family: "Roboto", sans-serif;
    margin-bottom: 10px;
}

.iletisim-adres .icon {
    background: <?php echo renk1;?>;
    width: 65px;
    height: 65px;
    border-radius: 100%;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: #fff;
    font-size: 24px;
    margin-bottom: 20px;
    display: flex;
}

.iletisim-adres-bilgi .title {
    width: 100%;
    text-transform: uppercase;
    color: <?php echo renk1;?>;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.2;
}

.iletisim-adres .iletisim-adres-bilgi .text {
    font-size: 14px;
    margin-top: 5px;
}

.iletisim-adres-bilgi .text {
    color: #999;
    font-size: 16px;
    font-weight: 300;
    line-height: 1.2;
}

.ortala {
    align-items: center;
}

.pagination {
    margin-top: 35px;
    display: block;
}

.pagination ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-left: -5px;
    margin-right: -5px;
    list-style: none;
    padding: 0;
}

.pagination ul li {
    padding-left: 5px;
    padding-right: 5px;
}

@media (max-width: 767px) {
    .pagination ul li:not(.onceki_sayfa):not(.sonraki_sayfa) {
        display: none;
    }
}

.pagination ul li a {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background: #fff;
    color: <?php echo renk1;?>;
    -webkit-box-shadow: 5px 5px 20px rgba(23, 53, 86, 0.15);
    box-shadow: 5px 5px 20px rgba(23, 53, 86, 0.15);
    font-size: 16px;
    font-weight: 500;
}

.secili {
    background: <?php echo renk1;?> !important;
    color: #fff !important;
}

.pagination ul li a.prev,
.pagination ul li a.next {
    font-size: 16px;
    padding-top: 2px;
}

.pagination ul li a:hover {
    background: <?php echo renk1;?>;
    color: #fff;
    text-decoration: none;
}

.slider-text .buttons-container {
    text-shadow: 0px 2px 3px #141415;
    -webkit-transition: .8s .4s;
    transition: .8s .4s;
    text-align: center;
}

.slider-text .button-border {
    color: #fff;
}

.slider-text .button-border:hover {
    border: 2px solid <?php echo renk1;?>;
    color: #fff;
    background: <?php echo renk1;?>;
    text-decoration: none;
}

.slider-text .text {
    margin-top: 20px;
    text-shadow: 0px 2px 3px #141415;
    color: #fff;
    font-size: 24px;
    font-weight: 300;
    margin-bottom: 20px;
    overflow: hidden;
    -webkit-transition: .8s .2s;
    transition: .8s .2s;
    text-align: center;
}

.modal-content {
    border-radius: 0;
}

.Oops {
    text-align: center;
    color: #79ac2b;
}

.Oops .title {
    line-height: 0.8;
    font-weight: 900;
    font-size: 224px;
}

@media (max-width: 479px) {
    .Oops .title {
        font-size: 164px;
    }
}

.Oops .text {
    text-transform: uppercase;
    font-weight: 100;
    font-size: 42px;
    letter-spacing: 3px;
    line-height: 1.2;
}

@media (max-width: 479px) {
    .Oops .text {
        font-size: 28px;
    }
}

.yapimAsamasindaFontSize {
    font-size: 50px !important;
    font-weight: 700 !important;
}

.margin-top-20 {
    margin-top: 20px;
}

.margin-top-70 {
    margin-top: 70px;
}

.bagis-component .tab-head .tab-link {
    width: 20%;
    display: inline-block;
    padding: 10px 0;
    background: #F8F8F6;
    color: <?php echo renk1;?>;
    text-align: center;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    margin-top: -5px;
    border-right: 1px solid #e3e3e2;
}

.bagis-component .tab-head .tab-link:hover,
.bagis-component .tab-head .tab-link.active {
    border-top: 5px solid <?php echo renk1;?>;
    background-color: #fff;
}

.bagis-component .tab-head .row {
    display: flex;
}

.bagis-component .tab-body .tab-panel {
    display: none;
    width: 100%;
    background: rgba(255, 255, 255, 0.45);
}

.bagis-box {
    border: 2px solid #f8f8f6;
    border-radius: 0px;
    overflow: hidden;
    margin-bottom: 30px;
}

.category-title {
    width: 100%;
    margin-top: 8px;
    font-weight: 600;
    font-size: 16px;
    color: #5e5c59;
}

.tab-tum-buton {
    color: <?php echo renk1;?>;
    text-decoration: none;
    display: inline-block;
    float: right;
    padding-bottom: 10px;
    margin: 20px 30px;
    font-weight: 700;
    position: relative;
}

.tab-tum-buton::before {
    content: "";
    height: 1px;
    width: 0%;
    position: absolute;
    background: <?php echo renk1;?>;
    bottom: 0;
    left: 0;
    transition: all 0.3s;
}

.tab-tum-buton:hover {
    color: <?php echo renk1;?>;
    text-decoration: none;
}

.tab-tum-buton:hover::before {
    width: 100%;
}

.bagis-component .tab-body .tab-panel.active {
    display: block;
}

.bagis-component .tab-body .tab-panel .do-nicescroll3.active {
    display: block;
}

.bagis-ortala {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.bagis-ortala p {
    margin: 0;
    font-size: 18px;
}

.bagis-title {
    min-height: auto !important;
    font-weight: 300;
    color: <?php echo renk1;?>;
}

.sepetdiv {
    border-radius: 0 0 4px 4px;
    box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.04);
    background-color: #FFF;
    padding: 15px;
}

.sepetdiv h4 {
    color: #c1c1c1;
}

.sepetdiv li {
    color: #c1c1c1;
    font-weight: 300;
}

.basket-card {
    background-color: #f8f8f6;
    padding: 10px 13px 15px 15px;
    overflow: hidden;
}

.basket-card .basket-line {
    margin-top: 10px;
    font-size: 13px;
    font-weight: 100;
    border-bottom: 1px solid rgba(0, 0, 0, 0.04);
    padding-bottom: 10px;
    padding-right: 5px;
    padding-left: 2px;
}

.basket-card .basket-line:last-child {
    border-bottom: none;
}

.basket-card .basket-line .product-name {
    font-size: 13px;
    font-weight: 400;
}

.basket-card .basket-line .delete.nameless {
    margin-top: 0px;
    font-size: 18px;
}

.basket-card .basket-line .delete {
    margin-top: 10px;
    margin-right: 10px;
    cursor: pointer;
}

.basket-card .basket-line .product-price {
    color: #2a9972;
    font-size: 13px;
    font-weight: 500;
    text-align: right;
}

.beyazbg {
    background-color: white;
    box-shadow: 0px 0px 30px 4px rgb(247, 247, 247);
}

.bs-wizard {
    border-bottom: 1px dashed #BBB;
    padding: 0 0 10px 0;
    margin-bottom: 10px;
    background-color: #FBBD19;
    padding-top: 20px;
    background: #ffffff;
    background: -moz-linear-gradient(45deg, #ffffff 0%, #e1e1e1 98%);
    background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, #ffffff), color-stop(98%, #e1e1e1));
    background: -webkit-linear-gradient(45deg, #ffffff 0%, #e1e1e1 98%);
    background: -o-linear-gradient(45deg, #ffffff 0%, #e1e1e1 98%);
    background: -ms-linear-gradient(45deg, #ffffff 0%, #e1e1e1 98%);
    background: linear-gradient(45deg, #ffffff 0%, #e1e1e1 98%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e1e1e1', GradientType=1);
}

.bs-wizard>.bs-wizard-step:first-child>.progress {
    left: 50%;
    width: 50%;
}

.progress {
    border-radius: 25px;
    height: 20px;
    background: #FAFAFA;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
    overflow: visible;
}

.alert.alert-default {
    background-color: #f2f2f266;
    border-color: #eaeaea;
    color: #737373;
}

legend {
    display: block;
    width: 100%;
    padding: 0;
    margin-bottom: 20px;
    font-size: 21px;
    line-height: inherit;
    color: #333;
    border: 0;
    border-bottom: 1px solid #e5e5e5;
}

.well {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #fafafa;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
}

.toplam_tutar {
    color: #8E0000;
    font-weight: bold;
    padding-left: 5px;
}

.bagis_toplam {
    color: #068f06;
    font-weight: bold;
    padding-left: 5px;
}

.bs-wizard>.bs-wizard-step {
    padding: 0;
    position: relative;
}

.bs-wizard>.bs-wizard-step+.bs-wizard-step {}

.bs-wizard>.bs-wizard-step .bs-wizard-stepnum {
    color: #595959;
    font-size: 16px;
    margin-bottom: 5px;
}

.bs-wizard>.bs-wizard-step .bs-wizard-info {
    color: #999;
    font-size: 14px;
}

.bs-wizard>.bs-wizard-step>.bs-wizard-dot {
    position: absolute;
    width: 30px;
    height: 30px;
    display: block;
    background: #B30000;
    top: 45px;
    left: 50%;
    margin-top: -12px;
    margin-left: -15px;
    border-radius: 50%;
}

.bs-wizard>.bs-wizard-step>.bs-wizard-dot:after {
    content: ' ';
    width: 14px;
    height: 14px;
    background: #FFFFFF;
    border-radius: 50px;
    position: absolute;
    top: 8px;
    left: 8px;
}

.bs-wizard>.bs-wizard-step>.progress {
    position: relative;
    border-radius: 0px;
    height: 8px;
    box-shadow: none;
    margin: 20px 0;
}

.bs-wizard>.bs-wizard-step>.progress>.progress-bar {
    /* width:0px; */
    /* box-shadow: none; */
    background: #FF0000;
}

.bs-wizard>.bs-wizard-step.complete>.progress>.progress-bar {
    width: 100%;
}

.bs-wizard>.bs-wizard-step.active>.progress>.progress-bar {
    width: 50%;
}

.bs-wizard>.bs-wizard-step:first-child.active>.progress>.progress-bar {
    width: 0%;
}

.bs-wizard>.bs-wizard-step:last-child.active>.progress>.progress-bar {
    width: 100%;
}

.bs-wizard>.bs-wizard-step.disabled>.bs-wizard-dot {
    background-color: #FFFFFF;
}

.bs-wizard>.bs-wizard-step.disabled>.bs-wizard-dot:after {
    opacity: 0;
}

.bs-wizard>.bs-wizard-step:first-child>.progress {
    left: 50%;
    width: 50%;
}

.bs-wizard>.bs-wizard-step:last-child>.progress {
    width: 50%;
}

.bs-wizard>.bs-wizard-step.disabled a.bs-wizard-dot {
    pointer-events: none;
}

.bs-wizard>.bs-wizard-step.active>.bs-wizard-stepnum {
    color: #b30000;
}

.d-orta {
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn-xs {
    color: #fff !important;
}
.loader {
    background: <?php echo renk1;?> !important;
}
@media only screen and (min-width: 769px) {
.whatsapp {
margin-top:73px;
    position: fixed;
    left: 15px;
    bottom: 15px;
    transition: all .5s ease-in-out;
    z-index: 999;
}
}
@media only screen and (max-width: 769px) {
.whatsapp {
margin-bottom:73px;
    position: fixed;
    left: 15px;
    bottom: 15px;
    transition: all .5s ease-in-out;
    z-index: 999;
}
}

.whatsapp a {
    height: 50px;
    width: 50px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
    font-size: 28px;
    display: list-item;
    text-align: center;
    line-height: 50px;
    color: white;
    background: #4dc247;
}

.whatsapp .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    line-height: normal;
    font-size: 15px;
    top: 13px;
    left: 105%;
    height: auto;
}

.whatsapp:hover a {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}

.whatsapp:hover .tooltiptext {
    visibility: visible;
}
@media only screen and (min-width: 769px) {
  .telefon {
    margin-top:73px;
    position: fixed;
    left: 15px;
    bottom: 75px;
    transition: all .5s ease-in-out;
    z-index: 999;
  }
}
@media only screen and (max-width: 769px) {
.telefon {
margin-bottom:75px;
    position: fixed;
    left: 15px;
    bottom: 75px;
    transition: all .5s ease-in-out;
    z-index: 999;
 }
}


.telefon a {
    height: 50px;
    width: 50px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
    font-size: 28px;
    display: list-item;
    text-align: center;
    line-height: 50px;
    color: white;
    background: #337ab7;
}

.telefon .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    line-height: normal;
    font-size: 15px;
    top: 13px;
    left: 105%;
    height: auto;
}

.telefon:hover a {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}

.telefon:hover .tooltiptext {
    visibility: visible;
}
.lang {float:left;width:100%;}
.lang img {
    display: inline-block;
    height: 16px;
    margin-right: 8px;
    margin-top: 0px;
    margin-bottom: -3px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
}
.lang .currencyitems a {width:24%;}
.activelang {opacity:0.45; filter:alpha(opacity=45);}
.lang h4 {float:left;width:100%;padding-bottom:10px;margin-bottom:15px;    font-size: 24px;    font-weight: 600;}
.lang a {
    display: inline-block;
    vertical-align: top;
    /* width: 32%; */
    margin: 5px;
    font-size: 16px;
    color: #9d9d9d;
    padding: 10px;
    border: 1px solid #0000004d;
    border-radius: 50px;
}
.lang a:hover {
    border: 1px solid #000;
	color: #000;
	text-decoration:none;
}
.trigger-link {
    color: #fff;
    opacity: .7;
    font-size: 13px;
    text-decoration: none;
    font-weight: 400;
}
.trigger-link:hover{
	text-decoration:none;
}