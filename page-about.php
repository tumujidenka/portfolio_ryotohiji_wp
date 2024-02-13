<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header();?>
</head>
<body>
    <?php get_template_part('includes/header'); ?>
    <main>
        <div class="about-child">
            <div class="about-child__about">
                <div class="title">
                    <p>自己紹介</p>
                    <h2>About</h2>
                    <div></div>
                </div>                
                <div class="aboutchild-detail">
                    <div class="aboutchild-detail__profile-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/media/siteicon.png" alt="profile">
                    </div>
                    <div class="aboutchild-detail__introduction">
                        <div class="aboutchild-detail__introduction--name">
                            <p>ひじ  りょうと</p>
                            <h2>比治 諒人</h2>
                        </div>
                        <p>
                            私はエンジニアとしてキャリアを始めて7年ほどになりますが、大学時代には塾講師としての経験と教員免許取得にも尽力しました。
                            また、社会人からは、技術力向上だけでなく、コミュニケーション能力も必要だと思い、社内外で様々なイベントを企画しました。
                        </p>
                        <p>
                            これらの経験を活かし、エンジニアとして技術力はもちろんのこと、お客様にとって価値のあるWebサイトを構築します。
                            仕事中の連絡は、常にわかりやすいコミュニケーションを心がけます。
                        </p>
                        <div class="sns-contact">
                            SNSにて気軽にコメント・交流も可能です。<br><a href="https://twitter.com/Trivial_Tsumuji">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-child__career">
                <div class="title">
                    <p>経歴</p>
                    <h2>Career</h2>
                    <div></div>
                </div>                
                <div class="career-detail">
                    <div class="business">
                        <div class="business__title">BUSINESS</div>
                        <div class="business__contents business__contents--graduate">
                            <p>大阪大学大学院<br class="sp">基礎工学研究科 卒業</p>
                            <p>2016年3月</p>
                            <div class="business__contents--circle"></div>
                        </div>
                        <div class="business__contents business__contents--join-company">
                            <p>教育系総合商社<br class="sp">エンジニア部門に入社</p>
                            <p>2016年4月</p>
                            <div class="business__contents--circle"></div>
                            <p class="business__contents__description">◾️職務内容<br>・大学生向けスマホアプリ企画<br>・学校業務支援システム開発<br>・テスト設計/実施</p>
                        </div>
                        <div class="business__contents business__contents--freelance">
                            <p>フリーランスとして<br class="sp">活動開始</p>
                            <p>2019年6月</p>
                            <div class="business__contents--circle"></div>
                            <p class="business__contents__description">◾️職務内容<br>・納税システム改修/試験<br>・RPA開発/保守<br>・メタバース空間開発推進<br>・Androidスマホアプリ開発</p>
                        </div>
                    </div>
                    <div class="career-line">
                        <div class="career-line__line"></div>
                    </div>
                    <div class="private">
                        <div class="private__title">PRIVATE</div>
                        <div class="private__contents private__contents--reading">
                            <p>読書会開始（~2019年）</p>
                            <p>2017年11月</p>
                            <div class="private__contents--circle"></div>
                            <p class="private__contents__description">◾️活動内容<br>・3~10人で本の紹介<br>・一人10分ほどで紹介<br>・月一開催</p>
                        </div>
                        <div class="private__contents private__contents--presentation">
                            <p>プレゼン会開始（～2021年）</p>
                            <p>2019年11月</p>
                            <div class="private__contents--circle"></div>
                            <p class="private__contents__description">◾️活動内容<br>・10~20人で開催<br>・好きなことをプレゼンする<br>・5人ほどのグループでシェアタイム<br>・活動報告(<a href="https://note.com/presentationevt">note</a>)</p>
                        </div>
                    </div>    
                    <div class="career-detail__sp">
                        <div class="business-private">
                            <div class="business-private__title">BUSINESS/PRIVATE</div>
                            <div class="business-private__contents business-private__contents--graduate">
                                <p>大阪大学大学院<br class="sp">基礎工学研究科 卒業</p>
                                <p>2016年3月</p>
                                <div class="business-private__contents--circle"></div>
                            </div>
                            <div class="business-private__contents business-private__contents--join-company">
                                <p>教育系総合商社<br class="sp">エンジニア部門に入社</p>
                                <p>2016年4月</p>
                                <div class="business-private__contents--circle"></div>
                                <p class="business-private__contents__description">◾️職務内容<br>・大学生向けスマホアプリ企画<br>・学校業務支援システム開発<br>・テスト設計/実施</p>
                            </div>
                            <div class="business-private__contents business-private__contents--reading">
                                <p>読書会開始<br class="business-private__sp">（~2019年）</p>
                                <p>2017年11月</p>
                                <div class="business-private__contents--circle"></div>
                                <p class="business-private__contents__description">◾️活動内容<br>・3~10人で本の紹介<br>・一人10分ほどで紹介<br>・月一開催</p>
                            </div>
                            <div class="business-private__contents business-private__contents--freelance">
                                <p>フリーランスとして<br class="sp">活動開始</p>
                                <p>2019年6月</p>
                                <div class="business-private__contents--circle"></div>
                                <p class="business-private__contents__description">◾️職務内容<br>・納税システム改修/試験<br>・RPA開発/保守<br>・メタバース空間開発推進<br>・Androidスマホアプリ開発</p>
                            </div>
                            <div class="business-private__contents business-private__contents--presentation">
                                <p>プレゼン会開始<br class="business-private__sp">（～2021年）</p>
                                <p>2019年11月</p>
                                <div class="business-private__contents--circle"></div>
                                <p class="business-private__contents__description">◾️活動内容<br>・10~20人で開催<br>・好きなことをプレゼンする<br>・5人ほどのグループで<br class="sp">シェアタイム<br>・活動報告(<a href="https://note.com/presentationevt">note</a>)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>
</html>