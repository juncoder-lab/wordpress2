<?php
/*Template Name: Our team*/
get_header();
?>

<div class="specialists">
    <div class="container">
        <div class="title"><?php the_field('ourTeam'); ?></div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <img class="specialists__img" src="<?php the_field('ourTeamPhoto'); ?>" alt="наша команда">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
