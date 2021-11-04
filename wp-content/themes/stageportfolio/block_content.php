<?php /* Template Name: Content Stage */ ?>
    <div id="scroll-to-top"></div>
<?php get_header(); ?>


<?php if ( have_rows( 'block-pages' ) ): ?>
	<?php while ( have_rows( 'block-pages' ) ): the_row(); ?>
		<?php if ( get_row_layout() == 'block-for-page' ): ?>
			<?php if ( have_rows( 'contentporfolio' ) ): ?>

				<?php while ( have_rows( 'contentporfolio' ) ): the_row();
					$contenttitle = get_sub_field( 'titlecontent' );
					$contenttext  = get_sub_field( 'descriptionportfolio' );
					$imageproject = get_sub_field( 'image_project' );
					$pictures     = $imageproject ['sizes']['medium'];
					$sides        = get_sub_field( 'positie' );

					?>
					<?php if ( $sides == 'left' ): ?>
                        <div class="positionh1">
                            <h1 class="titlecss"><?php echo $contenttitle ?></h1>
                        </div>
                        <div class="container">
                            <div class="content-stage">
                                <p><?php echo $contenttext ?></p>
                                <img src="<?php echo $pictures; ?>" class="img-block">
                            </div>
                        </div>
					<?php else: ?>
                        <div class="container">
                            <div class="content-stage">
                                <p><?php echo $contenttext ?></p>
                                <img src="<?php echo $pictures; ?>" class="img-block">
                            </div>
                        </div>
                        <div class="positionh1">
                            <h1 class="titlecss"><?php echo $contenttitle ?></h1>
                        </div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>