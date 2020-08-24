<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width",initial-scale=1>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <header>
            <div class="header-contents">
                <div class="header-logo">
                    <a href="{{url('/top')}}">hanil</a>
                </div>
                <ul class="header-menu">
                    <li><a href="{{url('/choice')}}">問題</a></li>
                    <li><a href="{{url('/post')}}">投稿</a></li>
                    <li><a href="{{url('/rank')}}">ランキング</a></li>
                    <li><a href="{{url('/mypage')}}">マイページ</a></li>
                    <div class="search-area" id="">
                        <input type="text" id="" class="search-text">
                        <div class="search-button">
                            <span>検索</span>
                        </div>
                    </div>
                </ul>
                <div class="header-count">
                    <ul class="answer-count">
                        <li>回答数</li>
                        <li>70問</li>
                    </ul>
                    <ul class="post-count">
                        <li>投稿数</li>
                        <li>15問</li>
                    </ul>
                </div>
                <div class="header-logout">
                    <li>ログアウト</li>
                </div>
            </div>
            
        </header>
        <main>
            <div class="answer-row">
                <div class="align-center">
                    <div class="q-column">
                        <div class="ques-center">
                            <div class="question">
                                <div class="q-id">Q1.</div>
                                <div class="progress"></div>
                            </div>
                        </div>
                        
                        <div class="ques-center">
                            <div class="ques-text">
                                <ul>
                                    <li id="test1">{{ $data_q->japanese }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="a-column">
                    <div class="answ-center">
                        <div class="answers-column">
                            <form name="choice1">
                                @csrf
                                <div id="content">
                                    <input type="button" id="a1" name="question"  class="answ-text1" value="{{$data1->korean}}">
                                </div>
                                <div id="content2">
                                    <input type="button" id="a2" name="question"  class="answ-text2" value="{{$data2->korean}}">
                                </div>
                                <div id="content3">
                                    <input type="button" id="a3" name="question"  class="answ-text3" value="{{$data3->korean}}">
                                </div>
                                <div id="content4">
                                    <input type="button" id="a4" name="question"  class="answ-text4" value="{{$data4->korean}}">
                                </div>
                                <div id="content">
                                    <input type="hidden" id="ans" name="answer" value="{{$data_q->korean}}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="result-correct" style="display: none; color: red;" class="resl-corr">
                <form action="/correct">
                    <input type="submit" value="次の問題へ"/>
                </form>
                【正解です】
            </div>
            <div id="result-incorrect" style="display: none; color: red;" class="resl-inco">
                <form action="/incorrect">
                    <input type="submit" value="次の問題へ"/>
                </form>
                【不正解です】
            </div>
            {{$session_key}}
        </main>
        <footer>
            <div class="footer-logo">
                hanil
            </div>
            <div class="copyright">
                hanil🄫2020
            </div>
        </footer>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ secure_asset('/js/haniljs.js') }}"></script>
    </body>
</html>