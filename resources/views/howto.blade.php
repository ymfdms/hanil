<!DOCTYPE html>
<html>
    <head>
        <title>hanil</title>
        <meta charset="utf-8">
        <link href="{{asset('/css/style.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>hanil ： 使い方</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.slider').bxSlider({
                    auto: true,
                    pause: 5000,
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <header>
                <div class="header-contents">
                    <div class="header-logo">
                        <a href="{{url('/top')}}">hanil</a>
                    </div>
                    <ul class="header-menu">
                        <li><a href="{{url('/choice')}}">問題</a></li>
                        <li><a href="{{url('/post')}}">投稿</a></li>
                        <li><a href="{{url('/rank')}}">ランキング</a></li>
                        <div class="header-logout">
                            <form action="/logout" method="get">
                                <input type="submit" name="regist" value={{$inout}} class="btn-logout">
                            </form>
                        </div>
                    </ul>
                    <div id="nav-drawer">
                      <input id="nav-input" type="checkbox" class="nav-unshown">
                      <label id="nav-open" for="nav-input"><span></span></label>
                      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                      <div id="nav-content">
                          <ul>
                            <li><a href="{{url('/choice')}}">問題</a></li>
                            <li><a href="{{url('/post')}}">投稿</a></li>
                            <li><a href="{{url('/rank')}}">ランキング</a></li>
                            <li>
                                <form action="/logout" method="get">
                                    <input type="submit" name="regist" value={{$inout}} class="btn-logout">
                                </form>
                        　　</li>
                        　</ul>
                    　</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="slider">
                    <img src="image/slide1.jpg" alt="" class="slide-image">
                    <img src="image/slide2.jpg" alt="" class="slide-image">
                    <img src="image/slide3.jpg" alt="" class="slide-image">
                    <img src="image/slide4.jpg" alt="" class="slide-image">
                </div>
            </main>
            <div class="push"></div>
        </div>
        <footer>
            <div class="footer-container">
                <div class="footer-logo">
                    hanil
                </div>
                <div class="copyright">
                    hanil🄫2020
                </div>
            </div>
        </footer>
    </body>
</html>