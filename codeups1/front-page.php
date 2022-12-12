<?php get_header(); ?>

<?php
$home = esc_url( home_url( '/' ) );
$about = esc_url( home_url( '/about/' ) );
$works = esc_url( home_url( '/works/' ) );
$culture = esc_url( home_url( '/culture/' ) );
$topics = esc_url( home_url( '/topics/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>

<!-- mv -->
<div class="l-mv p-mv">
    <div class="p-mv__img">
        <picture>
        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/top-mv_pc.jpg" media="(min-width: 768px)"/><!-- 幅768px以上なら表示 -->
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/top-mv_sp.jpg" alt="">
        <picture>
    </div>
    <div class="p-mv__block">
        <span class="p-mv__subtitle">デザインで人を笑顔にする会社</span>
        <span class="p-mv__subtitle--en">DIGSMILE INC.</span>
        <div class="p-mv__title">DESIGN<br>FOR<br>SMILE.</div>
    </div>
</div>
<!-- about -->
<section class="l-top-about p-about">
    <div class="p-about__inner">
        <div class="p-about__block">
            <h2 class="c-section__title p-about__title"><?php the_field('about-title'); ?></h2>
            <div class="p-about__box">
                <p class="p-about__text"><?php the_field('about-description'); ?></p>
            </div>
        <div class="p-about__btn">
            <a class="c-btn" href="<?php echo $about ?>">read more</a>
        </div>
        </div>
    </div>
</section>
<div class="l-top-bg">
    <div class="l-top-bg__inner">
    <!-- works-->
    <section class="l-top-box p-box">
        <div class="p-box__inner">
            <h2 class="c-section__title p-box__title">works</h2>
            <div class="p-box__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/works2.jpg" alt="制作実績">
            </div>
        <div class="p-box__body">
            <p class="p-box__text">DIGSMILEの制作実績を紹介します。</p>
            <div class="p-box__btn">
                <a class="c-btn" href="<?php echo $works ?>">read more</a>
            </div>
        </div>
    </div>
    </section>
    <!-- culture-->
    <section class="l-top-box p-box">
        <div class="p-box__inner l-inner">
            <h2 class="c-section__title p-box__title">culture</h2>
            <div class="p-box__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/culture.jpg" alt="社会文化について">
            </div>
            <div class="p-box__body">
                <p class="p-box__text">DIGSMILEの社内文化について紹介します。</p>
                <div class="p-box__btn">
                    <a class="c-btn" href="<?php echo $culture ?>">read more</a>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
    <!-- topics -->
    <section class="l-top-topics p-topics">
        <div class="p-topics__inner l-inner">
        <h2 class="c-section__title p-box__title">latest topics</h2>
            <div class="p-topics__items">
            <?php
                $topics_query = new WP_Query(
                    array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                    )
                );
                ?>
                <?php if ( $topics_query->have_posts() ) : ?>
                    <?php while ( $topics_query->have_posts() ) : ?>
                    <?php $topics_query->the_post(); ?>
                        <div class="p-topics__item p-topics-info">
                            <time class="p-topics-info__date" datetime="<?php the_time('c'); ?>">
                                <?php the_time('Y.m.d'); ?>
                            </time>
                            <a href="<?php the_permalink(); ?>" class="p-topics-info__title">
                                <?php the_title(); ?>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <div class="p-box__btn">
                    <a class="c-btn" href="<?php echo $topics ?>">read more</a>
                </div>
            </div>
        </div>
        </section>
    <!-- contact -->
    <section class="l-top-contact p-contact">
        <div class="p-contact__inner l-inner">
            <div class="p-contact__wrapper">
                <div class="p-contact__img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/contact_img.jpg" alt="お問い合わせページ">
                </div>
                <div class="p-contact__box">
                    <h2 class="c-section__title p-box__title"><?php the_field('contact-title'); ?></h2>
                    <div class="p-contact__body">
                        <p class="p-contact__text"><?php the_field('contact-description'); ?></p>
                    </div>
                    <div class="p-contact__btn">
                        <a class="c-btn" href="<?php echo $contact ?>">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>