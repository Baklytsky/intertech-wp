
<?php get_header(); ?>

<!--***************************************SLIDER SECTION*****************************************-->

    <section id="slider" class="py-5">
        <?php $title = get_field( 'slider_headline' );
        if ( ! empty( $title ) ): ?>
            <h2 class="text-uppercase text-center py-3">
                <?php echo $title; ?>
            </h2>
        <?php endif; ?>
        <div class="owl-carousel mx-auto">
            <?php $image_slider = get_field('slider_gallery');
            if (!empty($image_slider)):
                foreach ($image_slider as $image_item): ?>
                    <div class="item">
                        <a href="<?php echo $image_item['url']; ?>" target="_blank"
                           aria-label="<?php echo $image_item['alt']; ?>" class="text-center">
                            <img src="<?php echo $image_item['url']; ?>" alt="<?php echo $image_item['alt']; ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

<!--***************************************TEXT CONTENT SECTION*****************************************-->

<section id="content" class="py-5">
    <div class="container">
        <?php $title = get_field( 'content_headline' );
        if ( ! empty( $title ) ): ?>
            <h2 class="text-uppercase text-center py-3">
                <?php echo $title; ?>
            </h2>
        <?php endif;
        if (have_rows('content_blocks')): ?>
            <ul class="row py-3">
                <?php while (have_rows('content_blocks')): the_row();
                    $icon = get_sub_field('choose_icon');
                    $text = get_sub_field('block_text');
                    if ((!empty($icon)) && (!empty($text))):?>
                        <li class="col-12 col-md-4 text-center py-3">
                            <span class="icon-<?php echo $icon; ?> icons-style"
                                  aria-label="Icon for block"></span>
                            <div class="py-5">
                                <p class="font-italic text-justify">
                                    <?php echo $text; ?>
                                </p>
                            </div>
                        </li>
                    <?php endif;
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>