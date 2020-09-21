<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width",initial-scale=1>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>hanil ： 問題</title>
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
                <div id="maru">○</div>
                <div id="batsu">×</div>
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
                @if (session('message'))
                    <input type="checkbox" class="check" id="flash">
                    <label for="flash" class="box">
                        {{ session('message') }}
                    </label>
                @endif
                <div class="answer-block">
                    <div class="answer-row">
                        <div class="align-center">
                            <div class="q-column">
                                <div class="ques-center">
                                    <div class="q-id">Q{{$number}}.</div>
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
                                    <form name="choice1" method="POST">
                                        @csrf
                                        <div id="content">
                                            <input type="button" id="a1" name="question" class="answ-text1" value="{{$data1->korean}}">
                                        </div>
                                        <div id="content2">
                                            <input type="button" id="a2" name="question" class="answ-text2" value="{{$data2->korean}}">
                                        </div>
                                        <div id="content3">
                                            <input type="button" id="a3" name="question" class="answ-text3" value="{{$data3->korean}}">
                                        </div>
                                        <div id="content4">
                                            <input type="button" id="a4" name="question" class="answ-text4" value="{{$data4->korean}}">
                                        </div>
                                        <div id="content">
                                            <input type="hidden" id="ans" name="answer" value="{{$data_q->korean}}">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="maru-center">
                    <div id="result-correct" style="display: none;" class="resl-corr">
                        <div class="combi-center">
                            <div class="batsu-align-center">
                                <div class="batsu">○</div>
                                <div class="combi-row">
                                    <div class="combi1">{{$data_q->japanese}}</div>
                                    <div class="combi2">{{$data_q->korean}}</div>
                                </div>
                            </div>
                            <form id="correct_myform" method="POST" action="/correct" class="combi-form">
                                @csrf
                                <input type="submit" value="次の問題へ"/>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="batsu-center">
                    <div id="result-incorrect" style="display: none;" class="resl-inco">
                        <div class="combi-center">
                            <div class="batsu-align-center">
                                <div class="batsu">×</div>
                                <div class="combi-row">
                                    <div class="combi1">{{$data_q->japanese}}</div>
                                    <div class="combi2">{{$data_q->korean}}</div>
                                </div>
                            </div>
                            <form id="incorrect_myform" method="POST" action="/incorrect" class="combi-form">
                                @csrf
                                <input type="submit" value="次の問題へ"/>
                            </form>
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
    <script src="{{ asset('/js/haniljs.js') }}"></script>
    </body>
</html>