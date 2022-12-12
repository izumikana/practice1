<?php get_header(); ?>
<!-- sub-mv -->
<div class="l-sub-mv p-sub-mv">
    <div class="p-sub-mv__img">
        <picture>
        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/about/sub-mv_pc.jpg" media="(min-width: 768px)"/><!-- 幅768px以上なら表示 -->
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/about/sub-mv_sp.jpg" alt="">
        </picture>
    </div>
    <div class="p-sub-mv__block">
        <div class="p-sub-mv__title">ABOUT US</div>
        <span class="p-sub-mv__subtitle">DIGSMILEについて</span>
    </div>
</div>
<!-- vision -->
<section class="l-vision p-vision">
    <div class="p-vision__inner l-inner">
        <h2 class="c-section__title p-vision__title">vision</h2>
            <div class="p-vision__content">
                <h3 class="p-vision__subtitle">デザインで人を笑顔にする会社</h3>
                <div class="p-vision__box">
                    <p class="p-vision__text">私達のデザインで人が笑顔になる。</p>
                    <p class="p-vision__text">そんなデザインを目指しています。</p>
                    <p class="p-vision__text">ビジュアルだけではなく、<br>本当に求められているものは何かを考え抜いて、<br>デザインしていきたい。</p>
                    <p class="p-vision__text">誰かの幸せを創ることも、<br>世界の常識を変えていくことだってできる。</p>
                    <p class="p-vision__text">私達はデザインの力を信じています。</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- message -->
<section class="l-message p-message">
    <div class="p-message__inner">
        <div class="p-message__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/about/message.jpg" alt="女性が写っている写真">
        </div>
    </div>
    <div class="l-inner">
        <div class="p-message__wrapper">
            <h2 class="c-section__title p-message__title">ceo message</h2>
                <div class="p-message__content">
                    <div class="p-message__box">
                        <p class="p-message__text">良いデザインは人を幸せにする。</p>
                        <p class="p-message__text">私達はそう信じています。</p>
                        <p class="p-message__text">デザインを通して、ビジネスの課題とユーザーの課題を解決することで、世の中を幸せにしていきたい。</p>
                        <p class="p-message__text">現在はあらゆるプロダクトがデジタル化されており、デザイナーに対する需要はますます高まっています。それとともに、期待される役割も幅広くなりつつあります。</p>
                        <p class="p-message__text">クリエイティブで社会の可能性を切り開いていく。</p>
                        <p class="p-message__text">変化の激しい現代、私達はデザインの力で社会を良い方向に変革していく企業を目指していきます。</p>
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- company -->
<section class="l-company p-company">
    <div class="p-company__inner l-inner">
        <h2 class="c-section__title p-company__title">company</h2>
        <div class="p-company__wrapper">
            <dl class="p-company__info p-explain">
                <div class="p-explain__block">
                    <dt class="p-explain__header">社名</dt>
                    <dd class="p-explain__description">株式会社DIGSMILE</dd>
                </div>
                <div class="p-explain__block">
                    <dt class="p-explain__header">代表取締役</dt>
                    <dd class="p-explain__description">テイラー・スウィフト</dd>
                </div>
                <div class="p-explain__block">
                    <dt class="p-explain__header">設立</dt>
                    <dd class="p-explain__description">2020年1月1日</dd>
                </div>
                <div class="p-explain__block">
                    <dt class="p-explain__header">資本金</dt>
                    <dd class="p-explain__description">1億円</dd>
                </div>
                <div class="p-explain__block">
                    <dt class="p-explain__header">所在地</dt>
                    <dd class="p-explain__description">東京都新宿区☓☓0-0-0</dd>
                </div>
                <div class="p-explain__block">
                    <dt class="p-explain__header">電話番号</dt>
                    <dd class="p-explain__description">03-0000-00000</dd>
                </div>
            </dl>
        </div>
    </div>
</section>
<div class="l-map p-map">
    <div class="l-inner">
        <div class="p-map__iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4880141904196!2d139.69838261525905!3d35.689606680192334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1667052651837!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<?php get_footer(); ?>