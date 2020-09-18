<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width",initial-scale=1>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
        <title>hanil ： 投稿</title>
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
                            <div>
                                <form action="/logout" method="get">
                                    <input type="submit" name="regist" value={{$inout}} class="btn-logout">
                                </form>
                        　　</div>
                        　</ul>
                    　</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="header-count">
                        <ul class="answer-count">
                            <li>回答数</li>
                            <li>{{$answer_count}}問</li>
                        </ul>
                        <ul class="post-count">
                            <li>投稿数</li>
                            <li>{{$correct_sum}}問</li>
                        </ul>
                </div>
                <form action="/store" method="POST">
                    @csrf
                    <div class="purple-cen">
                        <div class="purple">
                            <div class="post-center">
                                <div class="post-group">
                                    <p class="post-input">韓国語</p>
                                    <input type="text" id="korean" name="korean" class="korean-input">
                                    <p class="post-input">日本語</p>
                                    <input type="text" id="japanese" name="japanese" class="japanese-input">
                                </div>
                            </div>
                            <div class="post-button-center">
                                <input type="submit" value="投稿" class="post-submit"> 
                            </div>
                        </div>
                    </div>
                </form>
                <div class="push"></div>
            </main>
        </div>
        <footer>
            <div class="footer-logo">
                hanil
            </div>
            <div class="copyright">
                hanil🄫2020
            </div>
        </footer>
    </body>
</html>