<div id="scroll-to-top"></div>
<div class="header">
	<?php

	$image         = get_field( 'homepage_image' );
	$picture       = $image['sizes']['large'];
	$stageimage    = get_field( 'stagefoto' );
	$getstageimage = $stageimage['sizes']['large'];

	get_header();
	?>
</div>


<div class="container">
    <div class="title_homepage">
        <h1 class="titel">
			<?php
			the_field( 'page_title' );
			?>
        </h1>
    </div>
    <div class="welkomteksten">
        <p class="welkomtekst">
			<?php the_field( 'description_stage' );?>
        </p>
    </div>
    <div class="img-home">
        <img src="<?php echo $picture; ?>" class="img_fluid">
    </div>
</div>

<div class="stagecontainer">
    <div class="stagetitel">
        <h1 class="titel">
			<?php
			the_field( 'stagetitel' );
			?>
        </h1>

        <div class="stagetekst">
            <p class="stageteksten">
				<?php
				the_field( 'stagetekst' );
				?>
            </p>
        </div>
        <div class="stagepicture">
            <img src="<?php echo $getstageimage; ?>" class="img-stage">
        </div>
    </div>
</div>

<div id="footer">

	<?php
	get_footer();
	?>
</div>

