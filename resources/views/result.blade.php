<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width",initial-scale=1>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
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
                        <li>準備中</li>
                    </ul>
                </div>
                <div class="result-row">
                    <div class="q-column">
                        <div class="resu-id-row">
                            <div class="resu-id">
                                Q1
                            </div>
                            <div class="ques-txt">
                                テスト1
                            </div>
                        </div>
                        <div class="resu-id-row">
                            <div class="resu-id">
                                Q2
                            </div>
                            <div class="ques-txt">
                                テスト2
                            </div>
                        </div>
                        <div class="resu-id-row">
                            <div class="resu-id">
                                Q3
                            </div>
                            <div class="ques-txt">
                                テスト3
                            </div>
                        </div>
                        <div class="resu-id-row">
                            <div class="resu-id">
                                Q4
                            </div>
                            <div class="ques-txt">
                                テスト4
                            </div>
                        </div>
                        <div class="resu-id-row">
                            <div class="resu-id">
                                Q5
                            </div>
                            <div class="ques-txt">
                                テスト5
                            </div>
                        </div>
                        <div class="resu-id-row">
                            <div class="resu-id">
                                Q6
                            </div>
                            <div class="ques-txt">
                                テスト6
                            </div>
                        </div>
                        <div class="resu-id-row">
                            <div class="resu-id">
                                Q7
                            </div>
                            <div class="ques-txt">
                                テスト7
                            </div>
                        </div>
                        <div class="resu-id-row">
                            <div class="resu-id">
                                Q8
                            </div>
                            <div class="ques-txt">
                                テスト8
                            </div>
                        </div>
                        <div class="resu-id-row">
                            <div class="resu-id">
                                Q9
                            </div>
                            <div class="ques-txt">
                                テスト9
                            </div>
                        </div>
                        <div class="resu-id-row">
                            <div class="resu-id">
                                Q10
                            </div>
                            <div class="ques-txt">
                                テスト10
                            </div>
                        </div>
                    </div>
                    <div class="answers-column">
                        <div class="answ-txt">
                            test1
                        </div>
                        <div class="answ-txt">
                            test2
                        </div>
                        <div class="answ-txt">
                            test3
                        </div>
                        <div class="answ-txt">
                            test4
                        </div>
                        <div class="answ-txt">
                            test5
                        </div>
                        <div class="answ-txt">
                            test6
                        </div>
                        <div class="answ-txt">
                            test7
                        </div>
                        <div class="answ-txt">
                            test8
                        </div>
                        <div class="answ-txt">
                            test9
                        </div>
                        <div class="answ-txt">
                            test10
                        </div>
                    </div>
                </div>
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