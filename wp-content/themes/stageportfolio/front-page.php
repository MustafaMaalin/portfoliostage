<div id="scroll-to-top"></div>
<div class="header">
	<?php

	get_header();
	?>
</div>
<body>
<?php if ( have_rows( 'blocks' ) ): ?>
	<?php while ( have_rows( 'blocks' ) ):
		the_row(); ?>

		<?php if ( get_row_layout() == 'home_pagina' ):
		$title = get_sub_field( 'page_title' );
		$content = get_sub_field( 'description_stage' );
		$side = get_sub_field( 'image_position' );
		$images = get_sub_field( 'image' );
		$picture = $images['sizes']['large'];
		?>
        <div class="container">
            <div class="row ">
				<?php if ( $side == 'left' ): ?>
                    <div class="box-field">
                        <div class="col-12 col-lg-8 col-md-6">
                            <img class="img-fluid" src="<?php echo $picture; ?>">
                        </div>
                        <div class="col-12 col-lg-4 col-md-6">
                            <h4> <?php echo $title; ?></h4>
							<?php echo $content; ?>
                        </div>
                    </div>
				<?php else: ?>
                    <div class="margin-container">
                        <div class="col-lg-8">
                            <h4> <?php echo $title; ?></h4>
							<?php echo $content; ?>
                        </div>
                        <div class="col-lg-4">
                            <img class="img-fluid" src="<?php echo $picture; ?>">
                        </div>
                    </div>
				<?php endif; ?>
            </div>
        </div>

	<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>

<div id="footer">

	<?php
	get_footer();
	?>
</div>

