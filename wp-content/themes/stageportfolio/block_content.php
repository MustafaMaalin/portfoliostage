<?php /* Template Name: Content Stage */ ?>
 <div id="scroll-to-top"></div>
<?php get_header(); ?>


<?php if ( have_rows( 'contentporfolio' ) ): ?>

	<?php while ( have_rows( 'contentporfolio' ) ): the_row();
		$contenttitle = get_sub_field( 'titlecontent' );
		$contenttext  = get_sub_field( 'descriptionportfolio' );
        $imageproject= get_sub_field( 'image_project' );
        $pictures     = $imageproject ['sizes']['thumbnail'];

		?>

		<div class="positionh1">

		<h1 class="titlecss"><?php echo $contenttitle ?></h1>
		</div>

        <div class="content-stage">
            <p><?php echo $contenttext ?></p>
        <img src="<?php echo $pictures; ?>" class="img-block">
        </div>
       <div class="wrapper">
                  <a class="cta" href="#">
                    <span>NEXT</span>
                    <span>
                      <i class="fas fa-angle-double-right"></i>
                    </span>
                  </a>
                </div>

	<?php endwhile; ?>


<?php endif; ?>

	<?php if ( have_rows( 'content_field2' ) ): ?>

    	<?php while ( have_rows( 'content_field2' ) ): the_row();
            $contenttitle2 = get_sub_field( 'titlecontent2' );
            $contenttexts = get_sub_field( 'descriptionportfolio2' );
            $imageproject2= get_sub_field( 'image_project2' );
            $pictures2     = $imageproject2 ['sizes']['thumbnail'];
    		?>

    			<div class="positionh1-2">

            		<h1 class="titlecss"><?php echo $contenttitle2 ?></h1>
            		</div>

                    <div class="content-stage2">
                        <p class="text-field"><?php echo $contenttexts ?></p>
                    <img src="<?php echo $pictures2; ?>" class="img-block">
                    </div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer();?>