<?php /* Template Name: Portfolio */ ?>
<div id="scroll-to-top"></div>
<?php get_header(); ?>
<div class="container">
    <h1 class="portfolio-titel"> <?php the_field( 'portfoliotitel' ); ?> </h1>
</div>
<?php if ( have_rows( 'block_tabladen' ) ): ?>
	<?php while ( have_rows( 'block_tabladen' ) ): the_row(); ?>
		<?php if ( get_row_layout() == 'portfolio_tabladen' ): ?>

			<?php if ( have_rows( 'repeater_image' ) ): ?>
                <div class="container-fluid">
                    <div class="portfolio-items">


                        <ul class="list-group">
							<?php while ( have_rows( 'repeater_image' ) ): the_row();
								$image   = get_sub_field( 'img_fluid' );
								$picture = $image['sizes']['thumbnail'];
								$link    = get_sub_field( 'link' );
								$title   = get_sub_field( 'picture_text' );
								?>
                                <li class="list-group-item_portfolio">
                                    <div class="items">

                                        <a href="<?php echo $link['url']; ?>">

                                            <img src="<?php echo $picture; ?>">
                                            <p><?php echo $title ?> <i
                                                        class="fas fa-arrow-alt-circle-right"></i></p>

                                        </a>
                                    </div>

                                </li>
							<?php endwhile; ?>

                        </ul>
                    </div>
                </div>
			<?php endif; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
