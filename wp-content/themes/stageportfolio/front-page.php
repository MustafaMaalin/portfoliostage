
<div class="header">
<?php

$image = get_field('homepage_image');
$picture = $image['sizes']['large'];

get_header();
?>
</div>

<div class="container" >
    <div class="title_homepage">
        <h1 class="titel">
            <?php
            the_field('page_title');
            ?>
        </h1>
    </div>
    <div class="img-home" >
        <img src="<?php echo $picture; ?>" class="img_fluid">
    </div>
</div>

<div id="footer">
    <?php
    get_footer();
    ?>
</div>

