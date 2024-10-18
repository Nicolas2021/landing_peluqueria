<?php
/**
 * Custom page template part
 * 
 * @package beautystyle
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h1 class="stdiv small"> <?php the_title(); ?> </h1>

    <section class="stdiv page-content text-content">
        <?php the_content(); ?>
    </section>

</article>