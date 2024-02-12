<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?>
</head>
<body>
    <?php get_template_part('includes/header'); ?>
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
                            <h3>¥ 30,000</h3>
                        </div>
                        <p class="price-detail__description">費用を抑えながら会社概要、サービス案内等、名刺がわりになるサイトの作成ができるプランです。</p>
                        <p class="price-detail__quantity">参考分量<br>Topページ+下層2ページ程度</p>
                        <div class="price-detail__reference-site">
                            <p>参考サイト</p>
                            <ul class="slide">
                                <li>
                                    <a href="#">
                                        <img class="site-image site-image--left" src="<?php echo get_template_directory_uri(); ?>/asset/media/my_portfolio_edge.png">
                                        <div class="site-image--expanded">
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/my_portfolio.png" alt="Expanded Image">
                                        </div> 
                                    </a>
                                </li>
                                <li class="sp">
                                    <a href="https://tumujidenka.github.io/portforio_tsumugicafe/">
                                        <img class="site-image site-image--center"  src="<?php echo get_template_directory_uri(); ?>/asset/media/cafe_site.png">
                                        <div class="site-image--expanded">
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/cafe_site.png" alt="Expanded Image">
                                        </div> 
                                    </a>
                                </li>
                                <li class="sp">
                                    <a href="https://shimekiri-techo.words-inc.co.jp/">
                                        <img class="site-image site-image--right"  src="<?php echo get_template_directory_uri(); ?>/asset/media/techo.png">
                                        <div class="site-image--expanded">
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/techo.png" alt="Expanded Image">
                                        </div> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-detail">
                        <div class="price-detail__price">
                            <p>スタンダードプラン</p>
                            <h3>¥ 70,000</h3>
                        </div>
                        <p class="price-detail__description">充実したページ数で構成にこだわり、集客を意識したサイトを制作したい方に向けたプランです。</p>
                        <p class="price-detail__quantity">参考分量<br>Topページ+下層4ページ程度</p>
                        <div class="price-detail__reference-site">
                            <p>参考サイト</p>
                            <ul class="slide">
                                <li>
                                    <a href="#">
                                        <img class="site-image site-image--left" src="<?php echo get_template_directory_uri(); ?>/asset/media/furniture.png">
                                        <div class="site-image--expanded">
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/furniture.png" alt="Expanded Image">
                                        </div>                                     
                                    </a>
                                </li>
                                <li class="sp">
                                    <a href="https://luana-fitness.com/">
                                        <img class="site-image site-image--center"  src="<?php echo get_template_directory_uri(); ?>/asset/media/fitness.png">
                                        <div class="site-image--expanded">
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/fitness.png" alt="Expanded Image">
                                        </div>                                     
                                    </a>
                                </li>
                                <li class="sp">
                                    <a href="https://isara.life/">
                                        <img class="site-image site-image--right"  src="<?php echo get_template_directory_uri(); ?>/asset/media/iSara.png">
                                        <div class="site-image--expanded">
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/iSara.png" alt="Expanded Image">
                                        </div>                                 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-detail">
                        <div class="price-detail__price">
                            <p>プレミアムプラン</p>
                            <h3>¥ 100,000</h3>
                        </div>
                        <p class="price-detail__description">より多くのページ数で、自社ブランドの強みを十分に表現したサイトを作成するためのプランです。</p>
                        <p class="price-detail__quantity">参考分量<br>Topページ+下層8ページ程度</p>
                        <div class="price-detail__reference-site">
                            <p>参考サイト</p>
                            <ul class="slide">
                                <li>
                                    <a href="https://flowr.is/">
                                        <img class="site-image site-image--left" src="<?php echo get_template_directory_uri(); ?>/asset/media/flowr.png">
                                        <div class="site-image--expanded">
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/flowr.png" alt="Expanded Image">
                                        </div>                                     
                                    </a>
                                </li>
                                <li class="sp">
                                    <a href="https://words-inc.co.jp/">
                                        <img class="site-image site-image--center"  src="<?php echo get_template_directory_uri(); ?>/asset/media/words.png">
                                        <div class="site-image--expanded">
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/words.png" alt="Expanded Image">
                                        </div>                                     
                                    </a>
                                </li>
                                <li class="sp">
                                    <a href="https://norel.jp/go">
                                        <img class="site-image site-image--right"  src="<?php echo get_template_directory_uri(); ?>/asset/media/norel.png">
                                        <div class="site-image--expanded">
                                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/norel.png" alt="Expanded Image">
                                        </div>                                     
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="service-plan__supplement">
                    <p>※具体的な金額についてはご相談可能ですので、お気軽に<a href="#contact">ご連絡</a>ください。</p>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/flow_1.svg" alt="flow-icon">
                        <div>まずは<a href="#contact">お問い合わせフォーム</a>からご連絡ください。どんな小さなことでも結構ですので、お気軽にご相談くださいませ。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">2.ヒアリング</div>
                    <div class="flow-menu__contents">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/flow_2.svg" alt="flow-icon">
                        <div>初回のヒアリングをオンライン通話（Google Meet または ZOOM）で行います。ホームページ制作の目的、制作内容、納期を確認いたします。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">3.お見積り</div>
                    <div class="flow-menu__contents">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/flow_3.svg" alt="flow-icon">
                        <div>ヒアリングで確認させていただいた内容に応じて、お見積りを作成しご連絡いたします。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">4.ご制約</div>
                    <div class="flow-menu__contents">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/flow_4.svg" alt="flow-icon">
                        <div>お見積りの内容をご確認いただき、問題なければご成約いただきます。着手金として、制作費用の半額をお支払いいただきます。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">5.制作</div>
                    <div class="flow-menu__contents">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/flow_5.svg" alt="flow-icon">
                        <div>確認した内容に基づき、制作いたします。制作状況については、随時ご連絡させていただきます。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">6.納品</div>
                    <div class="flow-menu__contents">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/flow_6.svg" alt="flow-icon">
                        <div>指定のサーバー等に納品させていただきます。ご確認いただき問題なければ納品完了となります。</div>
                    </div>
                </div>
                <div class="flow-menu">
                    <div class="flow-menu__title">7.運用・保守</div>
                    <div class="flow-menu__contents">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/flow_7.svg" alt="flow-icon">
                        <div>納品完了日より1ヶ月間は、無償で修正対応させていただきます。ご希望があれば、その後も運用サポートさせていただきます。</div>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">ライトプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
                <div class="works-panel">
                    <div class="works-panel__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">スタンダートプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
                <div class="works-panel">
                    <div class="works-panel__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">ライトプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
                <div class="works-panel">
                    <div class="works-panel__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">ライトプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
                <div class="works-panel">
                    <div class="works-panel__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">ライトプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
                <div class="works-panel">
                    <div class="works-panel__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/360_240.png" alt="site-image">
                    </div>
                    <div class="works-panel__plan">ライトプラン</div>
                    <div class="works-panel__title">ストアサイト</div>
                    <div class="works-panel__type">(Topページのみ)</div>
                    <div class="works-panel__description">スニーカーを販売している会社のページになります。</div>
                </div>
            </div>
            <div class="view-more">
                <p><a href="<?php echo home_url(); ?>/works/">view more</a></p>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/media/siteicon.png" alt="profile">
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
                <p><a href="<?php echo home_url(); ?>/about/">view more</a></p>
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
                <!-- サンクスメッセージ用のコンテナ -->
                <div class="thanks_page">
                    <p>お問い合わせいただきありがとうございました。</p>
                    <div class="thanks_description">
                        <p>送信完了いたしました。<br>内容を確認して、折り返しご連絡差し上げます。</p>
                        <p>※内容によっては、ご返信しかねることもございます。<br>あらかじめご了承ください。</p>
                    </div>
                </div>
                <!-- CF7用のコンテナ -->
                <?php echo do_shortcode('[contact-form-7 id="44aad86" title="お問い合わせ"]'); ?>
            </div>
        </section>
    </main>
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>
