<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width",initial-scale=1>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700&display=swap" rel="stylesheet">
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
            <div class="rank-center">
                <div class="rank-group">
                    <div class="select-group">
                        <select class="rank-select">
                            <option>投稿数</option>    
                            <option>回答数</option>
                            <option>フォロワー数</option>    
                        </select>
                        <select class="month-select">
                            <option>7月</option>    
                            <option>6月</option>
                            <option>5月</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="rank-center">
                <div class="rank-title">
                    7月投稿数TOP5
                </div>
            </div>
            <div class="rank-list-center">
                <div class="rank-list-column">
                    <div class="rank-list1">
                        <p>1</p>
                        <p>ユーザー名</p>
                        <input type="submit" value="フォロー" class="follow-submit">
                    </div>
                    <div class="rank-list2">
                        <p>2</p>
                        <p>ユーザー名</p>
                        <input type="submit" value="フォロー" class="follow-submit">
                    </div>
                    <div class="rank-list1">
                        <p>3</p>
                        <p>ユーザー名</p>
                        <input type="submit" value="フォロー" class="follow-submit">
                    </div>
                    <div class="rank-list2">
                        <p>4</p>
                        <p>ユーザー名</p>
                        <input type="submit" value="フォロー" class="follow-submit">
                    </div>
                    <div class="rank-list1">
                        <p>5</p>
                        <p>ユーザー名</p>
                        <input type="submit" value="フォロー" class="follow-submit">
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