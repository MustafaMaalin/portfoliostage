<?php /* Template Name: Content Stage */ ?>
<?php get_header(); ?>

<?php
$image_project = get_field( 'image_project' );
$pictures       = $image_project ['sizes']['large'];
?>

<?php if ( have_rows( 'contentporfolio' ) ): ?>

	<?php while ( have_rows( 'contentporfolio' ) ): the_row();
		$contenttitle = get_sub_field( 'titlecontent' );
		$contenttext  = get_sub_field( 'descriptionportfolio' );
		$contenttexts = get_sub_field( 'descriptionportfolio2' );

		?>
		<div class="positionh1">
		<h1 class="titlecss"><?php echo $contenttitle ?></h1>
		</div>
        <div class="content-stage">
            <p><?php echo $contenttext ?></p>
            <img src="<?php echo $pictures; ?>" class="img-stage">
        </div>
        <div class="box-3">
          <div class="btn-three">
            <span>HOVER ME</span>
          </div>
        </div>


	<?php endwhile; ?>
<?php endif; ?>
