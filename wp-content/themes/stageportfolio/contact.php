<?php get_header(); ?>
<?php /* Template Name: contact */ ?>
<?php if ( have_rows( 'wiebenik_container' ) ): ?>

	<?php while ( have_rows( 'wiebenik_container' ) ): the_row();
		$contenttitle = get_sub_field( 'wiebenik' );
		$contentvak  = get_sub_field( 'wiebenik_tekstvak' );
		$hobbietitle = get_sub_field( 'hobbies_titel' );
		$hobbiedescription = get_sub_field( 'hobbies_tekstvak' );
		$vaardigdheden_titel = get_sub_field( 'vaardigdheden_titel' );
		$vaardigdheden_tekstvak = get_sub_field( 'vaardigdheden_tekstvak' );
		?>
	<?php endwhile; ?>
<?php endif; ?>
<h1> <?php the_field( 'titel_contact' );?></h1>
<div class="accordion">

     <input type="radio" name="select" class="accordion-select" checked />
    <div class="accordion-title"><span><?php echo $contenttitle ?></span></div>
    <div class="accordion-content"><?php echo $contentvak ?></div>
         <input type="radio" name="select" class="accordion-select" />
    <div class="accordion-title"><span><?php echo $hobbietitle ?></span></div>
    <div class="accordion-content"><?php echo $hobbiedescription?></div>
         <input type="radio" name="select" class="accordion-select" />
    <div class="accordion-title"><span><?php echo $vaardigdheden_titel?></span></div>
    <div class="accordion-content"><?php echo $vaardigdheden_tekstvak?></div>
</div>
<?php get_footer();?>

