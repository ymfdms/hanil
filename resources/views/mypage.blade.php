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
            <div class="mypage-center">
                <div class="mypage-column">
                    <div class="circle-center">
                        <div class="icon-circle">
                            アイコン
                        </div>
                    </div>
                    <div class="username">
                        <p>@user</p>
                        <p class="profile-edit">編集</p>
                    </div>
                    <div class="profile-count-row-center">
                        <div class="profile-count-row">
                            <div class="profile-count">
                                <p>投稿</p>
                                <p>0</p>
                            </div>
                            <div class="profile-count">
                                <p>フォロー</p>
                                <p>0</p>
                            </div>
                            <div class="profile-count">
                                <p>フォロワー</p>
                                <p>0</p>
                            </div>
                        </div>
                    </div>
                    <p class="intro">自己紹介</p>
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