<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width",initial-scale=1>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700&display=swap" rel="stylesheet">
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
                    </ul>
                    <div class="header-logout">
                        <form action="/logout" method="get">
                            <input type="submit" name="regist" value={{$inout}} class="btn-logout">
                        </form>
                    </div>
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
                @if (session('message'))
                    <input type="checkbox" class="check" id="flash">
                    <label for="flash" class="box">
                        {{ session('message') }}
                    </label>
                @endif
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
                <div class="choice-exp">
                    hanilはみんなで作る韓日問題集です
                </div>
                <div class="cho-cen">
                    <div class="choice-container">
                        <div class="choice-top">
                            <form action="/answer" class="choice-all">
                                <input type="submit" value="全てのフレーズから" class="go-q">
                            </form>
                            <div class="choice-wea">
                                <!--<p>弱点克服</p>-->
                                <p>準備中</p>
                            </div>
                        </div>
                        <div class="choice-bottom">
                            <div class="choice-peo">
                                <!--<p>みんなに人気</p>-->
                                <p>準備中</p>
                            </div>
                            <div class="choice-fol">
                                <!--<p>フォローから</p>-->
                                <p>準備中</p>
                            </div>
                        </div>
                    </div>
                </div>
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