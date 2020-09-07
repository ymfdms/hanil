<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width",initial-scale=1>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
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
            <div class="rank-center">
                <div class="rank-group">
                    <label for="sel2"></label>
                    <div class="select-group">
                        <li class="pos-sel"><a href="{{url('/post_select')}}">投稿数</a></li>
                        <li class="ans-sel"><a href="{{url('/answer_select')}}">回答数</a></li>
                    </div>
                </div>
            </div>
            <div class="rank-center">
                <div class="rank-title">
                    {{$selected}}TOP5
                </div>
            </div>
            <div class="rank-list-center">
                <div class="rank-list-column">
                    <div class="rank-list1">
                        <p class="rank-number">1</p>
                        <p class="rank-user">{{$rank_name1->name}}</p></p>
                        <!--<input type="submit" value="フォロー" class="follow-submit">-->
                    </div>
                    <div class="rank-list2">
                        <p class="rank-number">2</p>
                        <p class="rank-user">{{$rank_name2->name}}</p>
                        <!--<input type="submit" value="フォロー" class="follow-submit">-->
                    </div>
                    <div class="rank-list1">
                        <p class="rank-number">3</p>
                        <p class="rank-user">{{$rank_name3->name}}</p>
                        <!--<input type="submit" value="フォロー" class="follow-submit">-->
                    </div>
                    <div class="rank-list2">
                        <p class="rank-number">4</p>
                        <p class="rank-user">{{$rank_name4->name}}</p>
                        <!--<input type="submit" value="フォロー" class="follow-submit">-->
                    </div>
                    <div class="rank-list1">
                        <p class="rank-number">5</p>
                        <p class="rank-user">{{$rank_name5->name}}</p>
                        <!--<input type="submit" value="フォロー" class="follow-submit">-->
                    </div>
                </div>
            </div>
        </main>
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