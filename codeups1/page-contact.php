<?php get_header(); ?>
<!-- sub-mv -->
<div class="l-sub-mv p-sub-mv">
    <div class="p-sub-mv__img">
        <picture>
        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/contact/contact-mv_pc.jpg" media="(min-width: 768px)"/><!-- 幅768px以上なら表示 -->
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/contact/contact-mv_sp.jpg" alt="">
        </picture>
    </div>
    <div class="p-sub-mv__block">
        <div class="p-sub-mv__title">CONTACT</div>
        <span class="p-sub-mv__subtitle">お問い合わせ</span>
    </div>
</div>
<!-- contact -->
<section class="l-sub-contact p-sub-contact">
    <div class="p-sub-contact__inner l-inner">
        <div class="p-sub-contact__textbox">
            <p class="p-sub-contact__text">
            ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。
            </p>
        </div>

        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>