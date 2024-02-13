<!-- Worksページ -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    
    <main>
        <div class="works-child">
            <div class="title">
                <p>制作実績</p>
                <h2>Works</h2>
                <div></div>
            </div>            
            <div class="works-child__contents">
                <a href="<?php echo home_url(); ?>">
                    <div class="workspanel-child">
                        <div class="workspanel-child__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/my_portfolio.png" alt="site-image">
                        </div>
                        <div class="workspanel-child__plan">ライトプラン</div>
                        <div class="workspanel-child__title">ポートフォリオサイト</div>
                        <div class="workspanel-child__type">(Topページ+下層2ページ)</div>
                        <div class="workspanel-child__description">サービス概要や制作実績等を掲載しているサイトです。(当サイト)</div>
                        <div class="workspanel-child__tech">使用技術：HTML/CSS/JavaScrip/GSAP/WordPress</div>
                        <div class="workspanel-child__period">制作期間：デザイン26h + 実装61h(2/12までで)=デザイン2週 + 実装4週</div>
                    </div>    
                </a>
                <a href="https://tumujidenka.github.io/portforio_tsumugicafe/">
                    <div class="workspanel-child">
                        <div class="workspanel-child__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/cafe_site.png" alt="site-image">
                        </div>
                        <div class="workspanel-child__plan">ライトプラン</div>
                        <div class="workspanel-child__title">カフェサイト</div>
                        <div class="workspanel-child__type">(Topページのみ)</div>
                        <div class="workspanel-child__description">カフェのメニューや場所などを掲載しているサンプルサイトになります。</div>
                        <div class="workspanel-child__tech">使用技術：HTML/CSS/JavaScript</div>
                        <div class="workspanel-child__period">制作期間：1週間</div>
                    </div>
                </a>
                <a href="#">
                    <div class="workspanel-child">
                        <div class="workspanel-child__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/furniture.png" alt="site-image">
                        </div>
                        <div class="workspanel-child__plan">スタンダードプラン</div>
                        <div class="workspanel-child__title">家具販売サイト(WP)</div>
                        <div class="workspanel-child__type">(Topページ+4ページ)</div>
                        <div class="workspanel-child__description">家具を販売するページのサンプルサイトになります。※WP載せ替え後遷移先設定</div>
                        <div class="workspanel-child__tech">使用技術：HTML/CSS/JavaScript/WordPress</div>
                        <div class="workspanel-child__period">制作期間：サイト作成15h(1週間)+WP化12h(1週間)</div>
                    </div>
                </a>
                <a href="https://tumujidenka.github.io/portfolio_sneakers/">
                    <div class="workspanel-child">
                        <div class="workspanel-child__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/sneakers.png" alt="site-image">
                        </div>
                        <div class="workspanel-child__plan">ライトプラン</div>
                        <div class="workspanel-child__title">コンセプトサイト</div>
                        <div class="workspanel-child__type">(Topページのみ)</div>
                        <div class="workspanel-child__description">スニーカーを販売している会社のサンプルサイトになります。</div>
                        <div class="workspanel-child__tech">使用技術：HTML/CSS/JavaScript</div>
                        <div class="workspanel-child__period">制作期間：1週間</div>
                    </div>
                </a>
                <a href="https://tumujidenka.github.io/portfolio_reproduction_TravelBlog/">
                    <div class="workspanel-child">
                        <div class="workspanel-child__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/blog.png" alt="site-image">
                        </div>
                        <div class="workspanel-child__plan">ライトプラン</div>
                        <div class="workspanel-child__title">ブログサイト</div>
                        <div class="workspanel-child__type">(Topページのみ)</div>
                        <div class="workspanel-child__description">旅行に関するブログを掲載しているサンプルサイトになります。</div>
                        <div class="workspanel-child__tech">使用技術：HTML/CSS/JavaScript</div>
                        <div class="workspanel-child__period">制作期間：1週間</div>
                    </div>
                </a>
                <a href="#">
                    <div class="workspanel-child">
                        <div class="workspanel-child__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/media/isara.png" alt="site-image">
                        </div>
                        <div class="workspanel-child__plan">スタンダードプラン</div>
                        <div class="workspanel-child__title">LPサイト</div>
                        <div class="workspanel-child__type">(Topページのみ)</div>
                        <div class="workspanel-child__description">エンジニア育成の申し込みサイトの模写になります。※WP載せ替え後遷移先設定</div>
                        <div class="workspanel-child__tech">使用技術：HTML/CSS/JavaScript</div>
                        <div class="workspanel-child__period">制作期間：40h(当時)=今なら2週かな？</div>
                    </div>
                </a>
                <!-- <a href="#">
                    <div class="workspanel-child">
                        <div class="workspanel-child__image">
                            <img src="/asset/media/360_240.png" alt="site-image">
                        </div>
                        <div class="workspanel-child__plan">ライトプラン</div>
                        <div class="workspanel-child__title">ストアサイト</div>
                        <div class="workspanel-child__type">(Topページのみ)</div>
                        <div class="workspanel-child__description">スニーカーを販売している会社のページになります。</div>
                        <div class="workspanel-child__tech">使用技術：HTML/CSS/JavaScript</div>
                        <div class="workspanel-child__period">制作期間：1週間</div>
                    </div>
                </a>
                <a href="#">
                    <div class="workspanel-child">
                        <div class="workspanel-child__image">
                            <img src="/asset/media/360_240.png" alt="site-image">
                        </div>
                        <div class="workspanel-child__plan">ライトプラン</div>
                        <div class="workspanel-child__title">ストアサイト</div>
                        <div class="workspanel-child__type">(Topページのみ)</div>
                        <div class="workspanel-child__description">スニーカーを販売している会社のページになります。</div>
                        <div class="workspanel-child__tech">使用技術：HTML/CSS/JavaScript</div>
                        <div class="workspanel-child__period">制作期間：1週間</div>
                    </div>
                </a>
                <a href="#">
                    <div class="workspanel-child">
                        <div class="workspanel-child__image">
                            <img src="/asset/media/360_240.png" alt="site-image">
                        </div>
                        <div class="workspanel-child__plan">ライトプラン</div>
                        <div class="workspanel-child__title">ストアサイト</div>
                        <div class="workspanel-child__type">(Topページのみ)</div>
                        <div class="workspanel-child__description">スニーカーを販売している会社のページになります。</div>
                        <div class="workspanel-child__tech">使用技術：HTML/CSS/JavaScript</div>
                        <div class="workspanel-child__period">制作期間：1週間</div> -->
                    </div>
                </a>
            </div>
            <!-- <div class="pagination">
                <div>
                    <a href="#"  class="pagination__number active">1</a>
                </div>
                <div>
                   <a href="#" class="pagination__number">2</a>
                </div>
                <div>
                   <a href="#" class="pagination__number">3</a>
                </div>
            </div> -->
        </div>
    </main>

    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>