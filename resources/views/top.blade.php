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
                <div class="hanil-exp">
                    hanilはみんなで作る韓日問題集です
                </div>
                <div class="main-contents">
                    <div class="q">
                        <div class="q-exp">
                            <p>投稿された</p>
                            <p>問題に挑戦しよう</p>
                        </div>
                        <div class="go-cen">
                            <form action="/choice">
                                <input type="submit" value="問題" class="top-go-q">
                            </form>
                        </div>
                    </div>
                    
                    <div class="p">
                        <div class="go-cen-p">
                            <form action="/post">
                                <input type="submit" value="投稿" class="go-p">
                            </form>
                        </div>
                        <div class="p-exp">
                            <p>フレーズを</p>
                            <p>投稿しよう</p>
                        </div>
                    </div>
                    
                    <div class="r">
                        <div class="r-exp">
                            <p>他のユーザーと</p>
                            <p>競おう</p>
                        </div>
                        <div class="go-cen">
                            <form action="/rank">
                                <input type="submit" value="ランキング" class="top-go-r">
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="main-contents2">
                    <div class="contents2-column">
                        <div class="q2">
                            <div class="q-exp2">
                                <p>投稿された問題に挑戦しよう</p>
                            </div>
                            <form action="/choice">
                                <input type="submit" value="問題" class="top-go-q2">
                            </form>
                        </div>
                        <div class="p2">
                            <form action="/post">
                                <input type="submit" value="投稿" class="top-go-p2">
                            </form>
                            <div class="p-exp2">
                                <p>ユニークなフレーズを投稿しよう</p>
                            </div>
                        </div>
                        <div class="r2">
                            <div class="r-exp2">
                                <p>他のユーザーと競おう</p>
                            </div>
                            <form action="/rank">
                                <input type="submit" value="ランキング" class="top-go-r2">
                            </form>
                        </div>
                    </div>
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