<?php /* Template Name: Portfolio */ ?>
<?php get_header(); ?>

<?php if (have_rows('repeater_image')): ?>
    <div class="portfolio-items">
        <ul class="list-group">
            <?php while (have_rows('repeater_image')): the_row();
                $image = get_sub_field('img_fluid');
                $picture = $image['sizes']['thumbnail'];
                $link = get_sub_field('link');
                $title = get_sub_field('picture_text');
                ?>
                <li class="list-group-item">
                    <div class="items">
                    <?php if ($link): ?>
                        <a href="<?php echo $link['url']; ?>">

                            <img src="<?php echo $picture; ?>">
                            <h3><?php echo $title ?></h3> </a>
                    </div>
                    <?php endif; ?>
                </li>
            <?php endwhile; ?>

        </ul>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
