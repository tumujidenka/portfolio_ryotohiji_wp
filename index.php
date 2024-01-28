<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://github.com/tumujidenka/portfolio_ryotohiji/blob/develop/asset/media/favicon.png?raw=true">
    <link rel="stylesheet" href="http://mysite.local/wp-content/themes/ryoto_hiji/asset/css/destyle.css">
    <link rel="stylesheet" href="http://mysite.local/wp-content/themes/ryoto_hiji/asset/css/style.css">
    <!-- フォント読み込み -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Rubik:wght@300;400&family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@700&display=swap" rel="stylesheet">

    <!-- JSライブラリ読み込み -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <title>比治 諒人 | RYOTO HIJI</title>
    <?php wp_head(); ?>
</head>
<body>
    <div id="splash">
        <div id="splash_text"></div>
    </div>
    <header class="header">
        <div class="header__logo">
            <a href="#main-visual">
                <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/siteicon_flame.png" alt="logo">
            </a>
        </div>
        <div class="header__menu ff-inriaserif">
            <ul>
                <li><a href="#service">Service</a></li>
                <li><a href="#flow">Flow</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#about">About</a></li>
                <li>|</li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="header__hamburger-menu">
            <div class="header__hamburger-menu__line"></div>
            <div class="header__hamburger-menu__line"></div>
            <div class="header__hamburger-menu__line"></div>
        </div>
        <nav class="navigation">
            <div class="nav-menu">
                <ul>
                    <li>
                        <a href="#main-visual">
                            <h2>Home</h2>
                            <p>ホーム</p>
                        </a>
                    </li>
                    <li>
                        <a href="#service">
                            <h2>Service</h2>
                            <p>サービスの特徴</p>
                        </a>
                    </li>
                    <li>
                        <a href="#flow">
                            <h2>Flow</h2>
                            <p>制作の流れ</p>
                        </a>
                    </li>
                    <li>
                        <a href="#works">
                            <h2>Works</h2>
                            <p>制作実績</p>
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            <h2>About</h2>
                            <p>自己紹介</p>
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <h2>Contact</h2>
                            <p>お問い合わせ</p>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="background">
        <div class="background-image"></div>
    </div>
    <main>
        <section class="main-visual" id="main-visual">
            <div class="main-visual__title">
                <h1>RYOTO HIJI</h1>
                <p>This is a Web Engineer's portfolio site</p>
            </div>
        </section>
        <section class="service" id="service">
            <div class="title">
                <p>サービスの特徴</p>
                <h2>Service</h2>
                <div></div>
            </div>
            <div class="service-plan">
                <div class="service-plan__price">
                    <div class="price-detail">
                        <div class="price-detail__price">
                            <p>ライトプラン</p>
                            <h3>¥ 50,000</h3>
                        </div>
                        <p class="price-detail__description">会社概要、サービス案内など、名刺がわりになる<br class="sp">ようなWebサイトの作成ができます。</p>
                        <p class="price-detail__quantity">参考分量<br>Topページ+下層2ページ程度</p>
                        <div class="price-detail__reference-site">
                            <p>参考サイト</p>
                            <ul class="slide">
                                <li>
                                    <a href="#">
                                        <img class="site-image site-image--left" src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png">
                                        <div class="site-image--expanded">
                                            <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png" alt="Expanded Image">
                                        </div> 
                                    </a>
                                </li>
                                <li class="sp">
                                    <a href="#">
                                        <img class="site-image site-image--center"  src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png">
                                        <div class="site-image--expanded">
                                            <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png" alt="Expanded Image">
                                        </div> 
                                    </a>
                                </li>
                                <li class="sp">
                                    <a href="#">
                                        <img class="site-image site-image--right"  src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png">
                                        <div class="site-image--expanded">
                                            <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png" alt="Expanded Image">
                                        </div> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-detail">
                        <div class="price-detail__price">
                            <p>スタンダードプラン</p>
                            <h3>¥ 100,000</h3>
                        </div>
                        <p class="price-detail__description">会社概要、サービス案内など、名刺がわりになる<br class="sp">ようなWebサイトの作成ができます。</p>
                        <p class="price-detail__quantity">参考分量<br>Topページ+下層2ページ程度</p>
                        <div class="price-detail__reference-site">
                            <p>参考サイト</p>
                            <ul class="slide">
                                <li>
                                    <a href="#">
                                        <img class="site-image site-image--left" src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png">
                                        <div class="site-image--expanded">
                                            <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png" alt="Expanded Image">
                                        </div>                                     </a>
                                </li>
                                <li class="sp">
                                    <a href="#">
                                        <img class="site-image site-image--center"  src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png">
                                        <div class="site-image--expanded">
                                            <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png" alt="Expanded Image">
                                            <div class="site-image--expanded">
                                                <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png" alt="Expanded Image">
                                            </div>                                         
                                        </div>                                     
                                    </a>
                                </li>
                                <li class="sp">
                                    <a href="#">
                                        <img class="site-image site-image--right"  src="./asset/media/cafe_site.png">
                                        <div class="site-image--expanded">
                                            <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png" alt="Expanded Image">
                                            <div class="site-image--expanded">
                                                <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png" alt="Expanded Image">
                                            </div>                                         
                                        </div>                                 
                                    </a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-detail">
                        <div class="price-detail__price">
                            <p>プレミアムプラン</p>
                            <h3>¥ 150,000</h3>
                        </div>
                        <p class="price-detail__description">会社概要、サービス案内など、名刺がわりになる<br class="sp">ようなWebサイトの作成ができます。</p>
                        <p class="price-detail__quantity">参考分量<br>Topページ+下層2ページ程度</p>
                        <div class="price-detail__reference-site">
                            <p>参考サイト</p>
                            <ul class="slide">
                                <li>
                                    <a href="#">
                                        <img class="site-image site-image--left" src="./asset/media/cafe_site.png">
                                        <div class="site-image--expanded">
                                            <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png" alt="Expanded Image">
                                        </div>                                     </a>
                                </li>
                                <li class="sp">
                                    <a href="#">
                                        <img class="site-image site-image--center"  src="./asset/media/cafe_site.png">
                                        <div class="site-image--expanded">
                                            <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png" alt="Expanded Image">
                                        </div>                                     </a>
                                </li>
                                <li class="sp">
                                    <a href="#">
                                        <img class="site-image site-image--right"  src="./asset/media/cafe_site.png">
                                        <div class="site-image--expanded">
                                            <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/cafe_site.png" alt="Expanded Image">
                                        </div>                                     </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="service-plan__supplement">
                    <p>※具体的な金額については、相談可能ですので、お気軽に<a href="#contact">ご相談</a>ください。</p>
                </div>
            </div>
        </section>
        <section class="flow" id="flow">
            <div class="title">
                <p>制作の流れ</p>
                <h2>Flow</h2>
                <div></div>
            </div>
            <div class="flow__contents">
                <div class="flow-menu">
                    <div class="flow-menu__title">1.お問い合わせ</div>
                    <div class="flow-menu__contents">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/flow_1.svg" alt="flow-icon">
                        <div>まずはお問い合わせフォームからご連絡ください。どんな小さなことでも結構ですので、お気軽にご相談くださいませ。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">2.ヒアリング</div>
                    <div class="flow-menu__contents">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/flow_2.svg" alt="flow-icon">
                        <div>まずはお問い合わせフォームからご連絡ください。どんな小さなことでも結構ですので、お気軽にご相談くださいませ。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">3.お見積り</div>
                    <div class="flow-menu__contents">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/flow_3.svg" alt="flow-icon">
                        <div>まずはお問い合わせフォームからご連絡ください。どんな小さなことでも結構ですので、お気軽にご相談くださいませ。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">4.ご制約</div>
                    <div class="flow-menu__contents">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/flow_4.svg" alt="flow-icon">
                        <div>まずはお問い合わせフォームからご連絡ください。どんな小さなことでも結構ですので、お気軽にご相談くださいませ。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">5.制作</div>
                    <div class="flow-menu__contents">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/flow_5.svg" alt="flow-icon">
                        <div>まずはお問い合わせフォームからご連絡ください。どんな小さなことでも結構ですので、お気軽にご相談くださいませ。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">6.納品</div>
                    <div class="flow-menu__contents">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/flow_6.svg" alt="flow-icon">
                        <div>まずはお問い合わせフォームからご連絡ください。どんな小さなことでも結構ですので、お気軽にご相談くださいませ。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">7.運用・保守</div>
                    <div class="flow-menu__contents">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/flow_7.svg" alt="flow-icon">
                        <div>まずはお問い合わせフォームからご連絡ください。どんな小さなことでも結構ですので、お気軽にご相談くださいませ。</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="works" id="works">
            <div class="title">
                <p>制作実績</p>
                <h2>Works</h2>
                <div></div>
            </div>
            <div class="works__contents">
                <div class="works-panel">
                    <div class="works-panel__image">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">ライトプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
                <div class="works-panel">
                    <div class="works-panel__image">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">スタンダートプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
                <div class="works-panel">
                    <div class="works-panel__image">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">ライトプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
                <div class="works-panel">
                    <div class="works-panel__image">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">ライトプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
                <div class="works-panel">
                    <div class="works-panel__image">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">ライトプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
                <div class="works-panel">
                    <div class="works-panel__image">
                        <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">ライトプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
            </div>
            <div class="view-more">
                <p><a href="https://tumujidenka.github.io/portfolio_ryotohiji/works.html">view more</a></p>
            </div>
        </section>
        <section class="about" id="about">
            <div class="title">
                <p>自己紹介</p>
                <h2>About</h2>
                <div></div>
            </div>
            <div class="about-detail">
                <div class="about-detail__image">
                    <img src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/media/siteicon.png" alt="profile">
                </div>
                <div class="about-detail__description">
                    <div class="about-detail__description--text">
                        <p>こんにちは、このページをご覧いただいてありがとうございます。<br>
                            比治諒人と申します。<br>
                            エンジニアとして、キャリアをはじめて7年ほどになります。<br>
                            安心して、仕事を任せていただけるように、お客様とコミュニケーションをしっかりと
                            取りながら制作を進めさせていただきます。</p>
                        <p>私自身は、教員免許（高校物理）を持っているということもあり、ものごとをわかりやすく
                            伝えるということに関しては、強く意識してこれまでも仕事を進めてきました。<br>
                            お客様が紹介したいこと、伝えたいメッセージ、サービスをユーザーにわかりやすく伝えるために
                            一緒に並走したいと考えておりますので、どうぞよろしくお願いいたします。</p>    
                    </div>
                </div>
            </div>
            <div class="view-more">
                <p><a href="https://tumujidenka.github.io/portfolio_ryotohiji/about.html">view more</a></p>
                <div></div>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="title">
                <p>お問い合わせ</p>
                <h2>Contact</h2>
                <div></div>
            </div>
            <div class="contact__contents">
                <div class="progress-line">
                    <div class="progress-line__step progress-line__step--first active">
                        <div>1</div>
                        <p>入力</p>
                    </div>
                    <div class="progress-line__step progress-line__step--second">
                        <div>2</div>
                        <p>確認</p>
                    </div>
                    <div class="progress-line__step progress-line__step--third">
                        <div>3</div>
                        <p>完了</p>
                    </div>
                </div>
                <form class="form" action="" method="post">
                    <div class="form__name">
                        <label class="label">お名前（必須）</label>
                        <input type="text" name="fullname" required value placeholder="山田　太郎">
                    </div>
                    <div class="form__mail">
                        <label class="label">メールアドレス（必須）</label>
                        <input type="email" name="mail" required value placeholder="yamadataro@example.co.jp">
                    </div>
                    <div class="form__inquiry">
                        <label class="label">お問い合わせ内容</label>
                        <textarea name="inquiry" required id="inquiry" cols="30" rows="10"></textarea>
                    </div>
                    <div class="btn confirm">
                        <input type="submit" value="確認画面へ">
                    </div>
                    <div class="btn back">
                        <input type="submit" value="戻る">
                    </div>
                    <div class="btn submit">
                        <input type="submit" value="送信">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__menu">
            <ul>
                <li>
                    <a href="#service">
                        <h2>Service</h2>
                    </a>
                </li>
                <li>
                    <a href="#flow">
                        <h2>Flow</h2>
                    </a>
                </li>
                <li>
                    <a href="#works">
                        <h2>Works</h2>
                    </a>
                </li>
                <li>
                    <a href="#about">
                        <h2>About</h2>
                    </a>
                </li>
                <li>
                    <h2>|</h2>
                </li>
                <li>
                    <a href="#contact">
                        <h2>Contact</h2>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer__copyright">
            <small>copyright 2023</small>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
    <script src="http://mysite.local/wp-content/themes/ryoto_hiji/asset/js/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
