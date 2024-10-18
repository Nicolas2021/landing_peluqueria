<?php
/**
 * The template for displaying the Search Form
 *
 * @package beautystyle
 */
 ?>
 <form role="search" method="get" action="<?php echo esc_url_raw(home_url('/')); ?>">

    <label class="screen-reader-text" for="s"><?php esc_html_e('Search for: ','beautystyle'); ?></label>

    <input 
        type="search" 
        placeholder="<?php esc_attr_e('Search', 'beautystyle'); ?>"
        value="<?php echo get_search_query(); ?>"
        name="s"
        id="s"
        title="Search"
    />

    <button 
        class="btn-default" 
        type="submit" 
        aria-label="<?php esc_attr_e('Search Button', 'beautystyle'); ?>">
        <?php esc_html_e('Go','beautystyle'); ?>
    </button>

</form>
