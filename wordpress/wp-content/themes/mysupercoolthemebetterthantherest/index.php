<?php get_header(); ?>
<?php

    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

            <section class='post'>
                <h1>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h1>
                <?php the_content(); ?>
            </section>

        <?php endwhile;
    else : ?>

        <p>Erster Post demnächst...</p>

<?php endif; ?>
<?php get_footer(); ?>
