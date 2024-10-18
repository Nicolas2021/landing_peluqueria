<?php
/**
 * Custom search template part
 * 
 * @package beautystyle
 */
?>
<div class="stdiv titart">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <h2><?php the_title(); ?></h2>
        <a href="<?php the_permalink(); ?>">

            <div class="flex-row-article">
                <?php if (has_post_thumbnail()): ?>

                    <div class="row-article">
                        <?php the_post_thumbnail('medium', array('class' => 'radius')); ?>
                    </div>

                <?php endif; ?>

                <div class="row-article text-content">
                    <?php the_excerpt(); ?>
                </div>

            </div>
        </a>
        
    </article>
</div>