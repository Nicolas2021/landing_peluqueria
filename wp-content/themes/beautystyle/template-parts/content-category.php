<?php
/**
 * Dropdown category template part
 * 
 * @package beautystyle
 */
?>
<section class="stdiv">

    <div class="archive-section">

        <div class="box-as1">
            <h2 class="ind-article"><?php esc_html_e('Date','beautystyle'); ?></h2>

            <hr>

            <select class="catdropdown" aria-label="<?php esc_attr_e('monthly archives', 'beautystyle');?>" 
                    name="archive-bs_dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">

                <option value=""><?php esc_attr( esc_html_e( 'Select Month', 'beautystyle' ) ); ?></option>
                <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option' ) ); ?>
                
                
            </select>
            
        </div>

        <div class="box-as2">
            <h2 class="ind-article"><?php esc_html_e('Topic','beautystyle'); ?></h2>

            <hr>

            <form id="bs-category" class="bs-category" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

                <?php
                    $beautystyle_curr_cat = get_queried_object();
                    $beautystyle_sh_opt_all = "";

                    if (isset($beautystyle_curr_cat->name)){
                        $beautystyle_sh_opt_all = $beautystyle_curr_cat->name;
                    } else {
                        $beautystyle_sh_opt_all = "";
                    };

                    $beautystyle_args = array(
                        'class'            => 'catdropdown',
                        'orderby'          => 'name',
                        'show_option_none' => __('Select Topic','beautystyle'),
                        'show_option_all'  => $beautystyle_sh_opt_all,
                        'echo'             => 0,
                    );
                ?>

                <?php 
                    $beautystyle_select  = wp_dropdown_categories( $beautystyle_args );
                    $beautystyle_replace = "<select$1 aria-label='topic' onchange='return this.form.submit()'>";
                    $beautystyle_select_escaped  = preg_replace( '#<select([^>]*)>#', $beautystyle_replace, $beautystyle_select );
                    $beautystyle_arr = array(
                        'select' => array(
                            'class'     => true,
                            'name'      => true,
                            'aria-label' => true,
                            'onchange'  => true,
                        ),
                        'option' => array(
                            'value'     => true
                        ),
                    )
                ?>

                <?php echo wp_kses($beautystyle_select_escaped, $beautystyle_arr); ?>

            </form>

        </div>

    </div>

</section>