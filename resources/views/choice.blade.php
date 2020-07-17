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
            <div class="choice-top">
                <div class="choice-all">
                    <p>全てのフレーズから</p>
                </div>
                <div class="choice-wea">
                    <p>弱点克服</p>
                </div>
            </div>
            <div class="choice-bottom">
                <div class="choice-peo">
                    <p>みんなに人気</p>
                </div>
                <div class="choice-fol">
                    <p>フォローから</p>
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