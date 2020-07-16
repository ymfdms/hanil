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
                    hanil
                </div>
                <ul class="header-menu">
                    <li>問題</li>
                    <li>投稿</li>
                    <li>ランキング</li>
                    <li>マイページ</li>
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
                    <!--<li>ログアウト</li>-->
                    <form action="/logout" method="get">
                        <li>
                        <input type="submit" name="regist" value="ログアウト" />
                        </li>
                    </form>
                </div>
            </div>
            
        </header>
        <main>
            <div class="main-contents">
                <div class="q">
                    <div class="q-exp">
                        <p>投稿から</p>
                        <p>作成された</p>
                        <p>問題集に</p>
                        <p>挑戦しよう</p>
                    </div>
                    <div class="go-q">
                        問題
                    </div>
                </div>
                
                <div class="p">
                    <div class="go-p">
                        投稿
                    </div>
                    <div class="p-exp">
                        <p>ユニークな</p>
                        <p>フレーズを</p>
                        <p>投稿しよう</p>
                    </div>
                </div>
                
                <div class="r">
                    <div class="r-exp">
                        <p>他のユーザーと</p>
                        <p>競って</p>
                        <p>王冠を</p>
                        <p>獲得しよう</p>
                    </div>
                    <div class="go-r">
                        ランキング
                    </div>
                </div>
                
                <div class="m">
                    <div class="go-m">
                        マイページ
                    </div>
                    <div class="m-exp">
                        <p>プロフィールを</p>
                        <p>充実させよう</p>
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