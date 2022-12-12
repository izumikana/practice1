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
        <div class="p-sub-mv__title">ARTICLE</div>
        <span class="p-sub-mv__subtitle">記事詳細</span>
    </div>
</div>
<div class="l-single p-single">
    <div class="p-single__inner l-inner">
        <div class="l-breadcrumb">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
    <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="p-single__title">
        <h2 class="c-section__title p-box__title"><?php the_title(); ?></h2>
    </div>
        <time class="p-single__date" datetime="<?php the_time('c'); ?>">
            <?php the_time('Y.m.d'); ?>
        </time>
        <div class="p-single__body">
        <?php if(get_field('title')): ?>
            <!-- 投稿がなかった時の処理↑↑ -->
            <div class="p-single__box01 p-box01">
                <span class="p-box01__title"><?php the_field('title'); ?></span>
                <p class="p-box01__text">
                <?php the_field('text'); ?>
                </p>
            </div>
        <?php endif; ?>

        <?php if(get_field('title-2')): ?>
            <div class="p-single__box01 p-box01">
                <span class="p-box01__title"><?php the_field('title-2'); ?></span>
                <p class="p-box01__text">
                <?php the_field('text-2'); ?>
                </p>
            </div>
        <?php endif; ?>
        </div>
            <div class="p-single__content">
                <?php the_content(); ?>
            </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>