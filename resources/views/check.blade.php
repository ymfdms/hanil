<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width",initial-scale=1>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;1,600&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>hanil ： 回答結果</title>
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
                        <li>{{$correct_sum}}問</li >
                    </ul>
                </div>
                <div class="after-this-cent">
                    <div class="white-border">
                        <div class="after-this-cent">
                            <div class="cc-resls-column">
                                <div class="cc">{{$correct_count}}問正解！</div>
                                <div class="resls-row">
                                    <div class="torf">
                                        <div>{{$value[0][2]}}</div> <!--正誤-->
                                        <div>{{$value[1][2]}}</div>
                                        <div>{{$value[2][2]}}</div>
                                        <div>{{$value[3][2]}}</div>
                                        <div>{{$value[4][2]}}</div>
                                        <div>{{$value[5][2]}}</div>
                                        <div>{{$value[6][2]}}</div>
                                        <div>{{$value[7][2]}}</div>
                                        <div>{{$value[8][2]}}</div>
                                        <div>{{$value[9][2]}}</div>
                                    </div>
                                    <div class="qnum">
                                        <div>Q1</div>
                                        <div>Q2</div>
                                        <div>Q3</div>
                                        <div>Q4</div>
                                        <div>Q5</div>
                                        <div>Q6</div>
                                        <div>Q7</div>
                                        <div>Q8</div>
                                        <div>Q9</div>
                                        <div>Q10</div>
                                    </div>
                                    <div class="japa">
                                        <div>{{$value[0][0]}}</div> <!--日本語-->
                                        <div>{{$value[1][0]}}</div>
                                        <div>{{$value[2][0]}}</div>
                                        <div>{{$value[3][0]}}</div>
                                        <div>{{$value[4][0]}}</div>
                                        <div>{{$value[5][0]}}</div>
                                        <div>{{$value[6][0]}}</div>
                                        <div>{{$value[7][0]}}</div>
                                        <div>{{$value[8][0]}}</div>
                                        <div>{{$value[9][0]}}</div>
                                    </div>
                                    <div class="kore">
                                        <div>{{$value[0][1]}}</div> <!--韓国語-->
                                        <div>{{$value[1][1]}}</div>
                                        <div>{{$value[2][1]}}</div>
                                        <div>{{$value[3][1]}}</div>
                                        <div>{{$value[4][1]}}</div>
                                        <div>{{$value[5][1]}}</div>
                                        <div>{{$value[6][1]}}</div>
                                        <div>{{$value[7][1]}}</div>
                                        <div>{{$value[8][1]}}</div>
                                        <div>{{$value[9][1]}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="go-cen">
                            <div class="go-row">
                                <form action="/goanswer">
                                    @csrf
                                    <input type="submit" value="次の10問"/>
                                </form>
                                <form action="/gotop">
                                    @csrf
                                    <input type="submit" value="おつかれさま"/>
                                </form>
                            </div>
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