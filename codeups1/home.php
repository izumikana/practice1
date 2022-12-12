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
        <div class="p-sub-mv__title">TOPICS</div>
        <span class="p-sub-mv__subtitle">最新情報</span>
    </div>
</div>
<!-- topics -->
<section class="l-sub-topics p-topics">
        <div class="p-topics__inner l-inner">
            <div class="l-breadcrumb">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </div>
            <div class="p-topics__items p-topics__items--wide">

            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="p-topics__item p-topics-info">
                    <time class="p-topics-info__date" datetime="<?php the_time('c'); ?>">
                        <?php the_time('Y.m.d'); ?>
                    </time>
                    <a href="<?php the_permalink(); ?>" class="p-topics-info__title">
                        <?php the_title(); ?>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
            投稿ないよう！
            <?php endif; ?>
        </div>
        <div class="l-pagenavi c-pagenavi">
            <?php wp_pagenavi(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>