
<div class="header">
<?php

$image = get_field('homepage_image');
$picture = $image['sizes']['large'];

get_header();
?>
</div>

<div class="flex-container" >
    <div class="title_homepage">
        <h1 class="line-animation">
            <?php
            the_field('page_title');
            ?>
        </h1>
    </div>
<div class="img-flex" >
    <img src="<?php echo $picture; ?>" class="img_fluid">
</div>
</div>

<div class="footer">
    <?php
    get_footer();
    ?>
</div>

