<?php /* Template Name: Content Stage */ ?>
<?php get_header(); ?>

<?php if ( have_rows( 'contentporfolio' ) ): ?>

	<?php while ( have_rows( 'contentporfolio' ) ): the_row();
		$contenttitle = get_sub_field( 'titlecontent' );
		$contenttext  = get_sub_field( 'descriptionportfolio' );
		$contenttexts = get_sub_field( 'descriptionportfolio2' );
		?>
        <div class="content-stage">
            <h1 class="titlecss"><?php echo $contenttitle ?></h1>
            <p><?php echo $contenttext ?></p>
            <p><?php echo $contenttexts ?></p>
        </div>

	<?php endwhile; ?>
<?php endif; ?>
