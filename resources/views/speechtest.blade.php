<!DOCTYPE html>
<html>
    <head>
        <title>hanil</title>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
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
                <div class="count-right">
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
                </div>
                <input type="text" class="form-control2">
                <button type="button" class="btn btn-primary" id="start">スタート</button>
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
        <script src="{{ asset('/js/speech.js') }}"></script>
    </body>
</html>