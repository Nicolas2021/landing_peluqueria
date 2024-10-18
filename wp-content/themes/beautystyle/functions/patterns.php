<?php

/* buttons */
register_block_pattern(
    'beautystyle/beautystyle-button-pattern',
    array(
            'title'       => __( 'BeautyStyle - Buttons', 'beautystyle' ),
            'description' => _x( 'Two horizontal buttons, the left button is filled in, and the right button is outlined.', 'Block pattern description', 'beautystyle' ),
            'content'     => "<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"backgroundColor\":\"very-dark-gray\",\"borderRadius\":0} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background has-very-dark-gray-background-color no-border-radius\">" . esc_html__( 'Button One', 'beautystyle' ) . "</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"textColor\":\"very-dark-gray\",\"borderRadius\":0,\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-text-color has-very-dark-gray-color no-border-radius\">" . esc_html__( 'Button Two', 'beautystyle' ) . "</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->",
    )
);

/* hero Cover */
register_block_pattern(
    'beautystyle/beautystyle-hero',
    array(
            'title'       => __( 'BeautyStyle - Hero Cover', 'beautystyle' ),
            'description' => _x( 'A hero section with two buttons, title and description.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'banners', 'headers' ),
            'keywords'      => array( 'cta', 'hero', 'cover' ),
            'content'     => "<!-- wp:cover {\"url\":\"https://pd.w.org/2024/02/84865be02f48afb07.10293509.jpg\",\"id\":30,\"dimRatio\":60,\"focalPoint\":{\"x\":0.24,\"y\":0.08},\"minHeight\":700,\"align\":\"full\"} -->
            <div class=\"wp-block-cover alignfull\" style=\"min-height:700px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-60 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-30\" alt=\"\" src=\"https://pd.w.org/2024/02/84865be02f48afb07.10293509.jpg\" style=\"object-position:24% 8%\" data-object-fit=\"cover\" data-object-position=\"24% 8%\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":\"140px\"} -->
            <div style=\"height:140px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"textColor\":\"nv-site-bg\"} -->
            <h1 class=\"wp-block-heading has-text-align-center has-nv-site-bg-color has-text-color\">Create and grow your <br>unique website today</h1>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":17}},\"textColor\":\"nv-site-bg\"} -->
            <p class=\"has-text-align-center has-nv-site-bg-color has-text-color\" style=\"font-size:17px\">Programmatically work on your business to crate something unique and useful for your clients, <br>give value and tell benefits this is the way to comunicate your story to the world.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\",\"orientation\":\"horizontal\"}} -->
            <div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"nv-c-2\",\"className\":\"is-style-primary\"} -->
            <div class=\"wp-block-button is-style-primary\"><a class=\"wp-block-button__link has-nv-c-2-background-color has-background wp-element-button\" href=\"#\">LEARN MORE</a></div>
            <!-- /wp:button -->
            
            <!-- wp:button {\"textColor\":\"nv-site-bg\",\"className\":\"is-style-secondary\"} -->
            <div class=\"wp-block-button is-style-secondary\"><a class=\"wp-block-button__link has-nv-site-bg-color has-text-color wp-element-button\" href=\"#\">HIRE US</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons -->
            
            <!-- wp:spacer {\"height\":\"60px\"} -->
            <div style=\"height:60px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:paragraph {\"align\":\"center\"} -->
            <p class=\"has-text-align-center\">Open in google maps - Call us now: +39 333 33 33 333</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer {\"height\":\"40px\"} -->
            <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer --></div></div>
            <!-- /wp:cover -->",
    )
);

/* info */ 
register_block_pattern(
    'beautystyle/beautystyle-info',
    array(
            'title'       => __( 'BeautyStyle - Info', 'beautystyle' ),
            'description' => _x( 'A info section with gallery, title and description.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'banners' ),
            'keywords'      => array( 'cta', 'info' ),
            'content'     => "<!-- wp:cover {\"dimRatio\":0,\"overlayColor\":\"nv-light-bg\",\"minHeight\":300,\"isDark\":false,\"align\":\"wide\"} -->
            <div class=\"wp-block-cover alignwide is-light\" style=\"min-height:300px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-light-bg-background-color has-background-dim-0 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":\"70px\"} -->
            <div style=\"height:70px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:heading {\"textAlign\":\"center\",\"textColor\":\"neve-text-color\",\"fontSize\":\"large\"} -->
            <h2 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color has-large-font-size\">What we do</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"nv-dark-bg\"} -->
            <p class=\"has-text-align-center has-nv-dark-bg-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut. </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer {\"height\":\"10px\"} -->
            <div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:gallery {\"columns\":4,\"linkTo\":\"none\",\"sizeSlug\":\"medium\"} -->
            <figure class=\"wp-block-gallery has-nested-images columns-4 is-cropped\"><!-- wp:image {\"id\":30,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->
            <figure class=\"wp-block-image size-large\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/pretty-flower_05DCMCHVV4.jpg\" alt=\"\" class=\"wp-image-30\"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {\"id\":47,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->
            <figure class=\"wp-block-image size-large\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/spa-concept_PN5KM1RHOG.jpg\" alt=\"\" class=\"wp-image-47\"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {\"id\":93,\"sizeSlug\":\"medium\",\"linkDestination\":\"none\"} -->
            <figure class=\"wp-block-image size-medium\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/cosmetic%20oil-essential%20oil_W3LQTILJNT.jpg\" alt=\"\" class=\"wp-image-93\"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {\"id\":94,\"sizeSlug\":\"medium\",\"linkDestination\":\"none\"} -->
            <figure class=\"wp-block-image size-medium\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/pink-garden_SWRLE2MYHS.jpg\" alt=\"\" class=\"wp-image-94\"/></figure>
            <!-- /wp:image --></figure>
            <!-- /wp:gallery -->
            
            <!-- wp:spacer {\"height\":\"40px\"} -->
            <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"nv-dark-bg\"} -->
            <p class=\"has-text-align-center has-nv-dark-bg-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore<br> magna aliqua.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqua.&nbsp;<br><br></p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer {\"height\":\"40px\"} -->
            <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer --></div></div>
            <!-- /wp:cover -->",
    )
);

/* keypoints */ 
register_block_pattern(
    'beautystyle/beautystyle-keypoints',
    array(
            'title'       => __( 'BeautyStyle - Keypoints', 'beautystyle' ),
            'description' => _x( 'A 3 Keypoints section with icons, title and description.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'banners', 'text'),
            'keywords'      => array( 'cta', 'key', 'benefits' ),
            'content'     => "<!-- wp:columns -->
            <div class=\"wp-block-columns\"><!-- wp:column -->
                <div class=\"wp-block-column\"><!-- wp:spacer {\"height\":\"20px\"} -->
                <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"x-large\"} -->
                <p class=\"has-text-align-center has-x-large-font-size\">👨🏻‍💻</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:heading {\"level\":3,\"textColor\":\"neve-text-color\",\"className\":\"has-text-align-center\"} -->
                <h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Fixed Price Projects</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\"} -->
                <p class=\"has-text-align-center\">Lorem ipsum dolor sit amet elit do, consectetur adipiscing, sed eiusmod tempor.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {\"align\":\"center\"} -->
                <p class=\"has-text-align-center\"><a href=\"#\">discover more ›</a></p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer {\"height\":\"20px\"} -->
                <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:column -->
                
                <!-- wp:column -->
                <div class=\"wp-block-column\"><!-- wp:spacer {\"height\":\"20px\"} -->
                <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"x-large\"} -->
                <p class=\"has-text-align-center has-x-large-font-size\">⏰</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:heading {\"level\":3,\"textColor\":\"neve-text-color\",\"className\":\"has-text-align-center\"} -->
                <h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Receive on time</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\"} -->
                <p class=\"has-text-align-center\">Lorem ipsum dolor sit amet elit do, consectetur adipiscing, sed eiusmod tempor.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {\"align\":\"center\"} -->
                <p class=\"has-text-align-center\"><a href=\"#\">discover more ›</a></p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer {\"height\":\"20px\"} -->
                <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:column -->
                
                <!-- wp:column -->
                <div class=\"wp-block-column\"><!-- wp:spacer {\"height\":\"20px\"} -->
                <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"x-large\"} -->
                <p class=\"has-text-align-center has-x-large-font-size\">🚀</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:heading {\"level\":3,\"textColor\":\"neve-text-color\",\"className\":\"has-text-align-center\"} -->
                <h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Fast work turnaround</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\"} -->
                <p class=\"has-text-align-center\">Lorem ipsum dolor sit amet elit do, consectetur adipiscing, sed eiusmod tempor.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {\"align\":\"center\"} -->
                <p class=\"has-text-align-center\"><a href=\"#\">discover more ›</a></p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer {\"height\":\"20px\"} -->
                <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns -->",
    )
);

/* media content */
register_block_pattern(
    'beautystyle/beautystyle-media-content',
    array(
            'title'       => __( 'BeautyStyle - Media content', 'beautystyle' ),
            'description' => _x( 'A media content section with, title and description.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'banners', 'text'),
            'keywords'      => array( 'cta', 'media', 'content' ),
            'content'     => "<!-- wp:cover {\"dimRatio\":0,\"overlayColor\":\"nv-light-bg\",\"minHeight\":600,\"isDark\":false,\"align\":\"wide\"} -->
            <div class=\"wp-block-cover alignwide is-light\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-light-bg-background-color has-background-dim-0 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:media-text {\"align\":\"\",\"mediaId\":93,\"mediaLink\":\"https://cdn.stocksnap.io/img-thumbs/960w/flower-violet_8ZCD0GUHYR.jpg\",\"mediaType\":\"image\",\"imageFill\":true} -->
                <div class=\"wp-block-media-text is-stacked-on-mobile is-image-fill\"><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://cdn.stocksnap.io/img-thumbs/960w/flower-violet_8ZCD0GUHYR.jpg);background-position:50% 50%\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/flower-violet_8ZCD0GUHYR.jpg\" alt=\"\" class=\"wp-image-93 size-full\"/></figure><div class=\"wp-block-media-text__content\"><!-- wp:spacer -->
                <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:heading {\"textAlign\":\"left\",\"textColor\":\"neve-text-color\"} -->
                <h2 class=\"wp-block-heading has-text-align-left has-neve-text-color-color has-text-color\">Why us?</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":17}},\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-left has-neve-text-color-color has-text-color\" style=\"font-size:17px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"left\",\"orientation\":\"horizontal\"}} -->
                <div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"is-style-primary\"} -->
                <div class=\"wp-block-button is-style-primary\"><a class=\"wp-block-button__link wp-element-button\" href=\"#\">LEARN MORE</a></div>
                <!-- /wp:button --></div>
                <!-- /wp:buttons -->
                
                <!-- wp:spacer -->
                <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div></div>
                <!-- /wp:media-text --></div></div>
                <!-- /wp:cover -->",
    )
);

/* testimonials */
register_block_pattern(
    'beautystyle/beautystyle-testimonials',
    array(
            'title'       => __( 'BeautyStyle - Testimonials', 'beautystyle' ),
            'description' => _x( 'A testimonials section with, name, photo and text.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'testimonials', 'text'),
            'keywords'      => array( 'cta', 'testimonials', 'content' ),
            'content'     => "<!-- wp:cover {\"dimRatio\":0,\"overlayColor\":\"nv-light-bg\",\"minHeight\":420,\"isDark\":false} -->
            <div class=\"wp-block-cover is-light\" style=\"min-height:420px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-light-bg-background-color has-background-dim-0 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":\"80px\"} -->
                <div style=\"height:80px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:heading {\"textAlign\":\"center\",\"textColor\":\"neve-text-color\"} -->
                <h2 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Our testimonials</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"nv-dark-bg\"} -->
                <p class=\"has-text-align-center has-nv-dark-bg-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:columns -->
                <div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"ticss-4ce656f1\"} -->
                <div class=\"wp-block-column ticss-4ce656f1\"><!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
                <div class=\"wp-block-group\"><!-- wp:image {\"align\":\"center\",\"id\":215,\"width\":80,\"height\":80,\"sizeSlug\":\"large\",\"className\":\"is-style-rounded\"} -->
                <figure class=\"wp-block-image aligncenter size-large is-resized is-style-rounded\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/woman-fashion_94TN6BQCV4.jpg\" alt=\"\" class=\"wp-image-215\" width=\"80\" height=\"80\"/></figure>
                <!-- /wp:image -->
                
                <!-- wp:spacer {\"height\":\"10px\"} -->
                <div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-center has-neve-text-color-color has-text-color\"><strong><em>JANET MORRIS</em></strong></p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {\"align\":\"left\",\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-left has-neve-text-color-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph -->
                <p></p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {\"align\":\"center\"} -->
                <p class=\"has-text-align-center\">⭐⭐⭐⭐⭐</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer -->
                <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:group -->
                
                <!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
                <div class=\"wp-block-group\"><!-- wp:image {\"align\":\"center\",\"id\":215,\"width\":80,\"height\":80,\"sizeSlug\":\"large\",\"className\":\"is-style-rounded\"} -->
                <figure class=\"wp-block-image aligncenter size-large is-resized is-style-rounded\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/woman-portrait_OLXGUB75L8.jpg\" alt=\"\" class=\"wp-image-215\" width=\"80\" height=\"80\"/></figure>
                <!-- /wp:image -->
                
                <!-- wp:spacer {\"height\":\"10px\"} -->
                <div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-center has-neve-text-color-color has-text-color\"><strong><em>JANET MORRIS</em></strong></p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {\"align\":\"left\",\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-left has-neve-text-color-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {\"align\":\"center\"} -->
                <p class=\"has-text-align-center\">⭐⭐⭐⭐⭐</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer -->
                <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:group --></div>
                <!-- /wp:column -->
                
                <!-- wp:column {\"className\":\"\"} -->
                <div class=\"wp-block-column\"><!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
                <div class=\"wp-block-group\"><!-- wp:image {\"align\":\"center\",\"id\":216,\"width\":80,\"height\":80,\"sizeSlug\":\"large\",\"className\":\"is-style-rounded\"} -->
                <figure class=\"wp-block-image aligncenter size-large is-resized is-style-rounded\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/woman-portrait_27OGL0RWM4.jpg\" alt=\"\" class=\"wp-image-216\" width=\"80\" height=\"80\"/></figure>
                <!-- /wp:image -->
                
                <!-- wp:spacer {\"height\":\"10px\"} -->
                <div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-center has-neve-text-color-color has-text-color\"><strong><em>WILLIE BROWN</em></strong></p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {\"align\":\"left\",\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-left has-neve-text-color-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {\"align\":\"center\"} -->
                <p class=\"has-text-align-center\">⭐⭐⭐⭐⭐</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer -->
                <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:group -->
                
                <!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
                <div class=\"wp-block-group\"><!-- wp:image {\"align\":\"center\",\"id\":216,\"width\":80,\"height\":80,\"sizeSlug\":\"large\",\"className\":\"is-style-rounded\"} -->
                <figure class=\"wp-block-image aligncenter size-large is-resized is-style-rounded\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/woman-model_OR1SNIGQPY.jpg\" alt=\"\" class=\"wp-image-216\" width=\"80\" height=\"80\"/></figure>
                <!-- /wp:image -->
                
                <!-- wp:spacer {\"height\":\"10px\"} -->
                <div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-center has-neve-text-color-color has-text-color\"><strong><em>WILLIE BROWN</em></strong></p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {\"align\":\"left\",\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-left has-neve-text-color-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:paragraph {\"align\":\"center\"} -->
                <p class=\"has-text-align-center\">⭐⭐⭐⭐⭐</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer -->
                <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:group --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns -->
                
                <!-- wp:spacer {\"height\":\"30px\"} -->
                <div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div></div>
                <!-- /wp:cover -->",
    )
);

/* hero media content */
register_block_pattern(
    'beautystyle/beautystyle-hero-media-content',
    array(
            'title'       => __( 'BeautyStyle - Hero Media Content', 'beautystyle' ),
            'description' => _x( 'A hero section with, title, descritpion and cta.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'banners', 'text'),
            'keywords'      => array( 'cta', 'hero', 'content' ),
            'content'     => "<!-- wp:media-text {\"align\":\"full\",\"mediaPosition\":\"right\",\"mediaId\":93,\"mediaLink\":\"https://cdn.stocksnap.io/img-thumbs/960w/water-sunset_CAHEJFJ7TG.jpg/\",\"mediaType\":\"image\",\"imageFill\":true} -->
            <div class=\"wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill\"><div class=\"wp-block-media-text__content\"><!-- wp:spacer -->
                <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:heading {\"textAlign\":\"left\",\"textColor\":\"neve-text-color\",\"fontSize\":\"x-large\"} -->
                <h2 class=\"wp-block-heading has-text-align-left has-neve-text-color-color has-text-color has-x-large-font-size\">How we do it, lorem sia amet laborum long message</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":17}},\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-left has-neve-text-color-color has-text-color\" style=\"font-size:17px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"left\",\"orientation\":\"horizontal\"}} -->
                <div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"is-style-primary\"} -->
                <div class=\"wp-block-button is-style-primary\"><a class=\"wp-block-button__link wp-element-button\" href=\"#\">LEARN MORE</a></div>
                <!-- /wp:button -->
                
                <!-- wp:button {\"className\":\"is-style-secondary\"} -->
                <div class=\"wp-block-button is-style-secondary\"><a class=\"wp-block-button__link wp-element-button\" href=\"#\">LOREM</a></div>
                <!-- /wp:button --></div>
                <!-- /wp:buttons -->
                
                <!-- wp:spacer {\"height\":\"20px\"} -->
                <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:paragraph -->
                <p>Apri mappa in google maps - Chiamici ora: +39 333 33 33 333</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer -->
                <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div><figure class=\"wp-block-media-text__media\" style=\"background-image:url(https://cdn.stocksnap.io/img-thumbs/960w/tree-blossoms_AQT23RJ46D.jpg);background-position:50% 50%\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/tree-blossoms_AQT23RJ46D.jpg\" alt=\"\" class=\"wp-image-93 size-full\"/></figure></div>
                <!-- /wp:media-text -->",
    )
);

/* content images */
register_block_pattern(
    'beautystyle/beautystyle-content-images',
    array(
            'title'       => __( 'BeautyStyle - Content Images', 'beautystyle' ),
            'description' => _x( 'A hero section with images and content.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'banners', 'text', 'gallery'),
            'keywords'      => array( 'cta', 'gallery', 'content' ),
            'content'     => "<!-- wp:cover {\"dimRatio\":0,\"overlayColor\":\"nv-site-bg\",\"minHeight\":600,\"isDark\":false,\"align\":\"wide\"} -->
            <div class=\"wp-block-cover alignwide is-light\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-site-bg-background-color has-background-dim-0 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:group -->
                <div class=\"wp-block-group\"><!-- wp:spacer -->
                <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:heading {\"textAlign\":\"center\",\"textColor\":\"neve-text-color\"} -->
                <h2 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Case study our works</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\"} -->
                <p class=\"has-text-align-center\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:spacer {\"height\":\"20px\"} -->
                <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:columns {\"verticalAlignment\":\"center\"} -->
                <div class=\"wp-block-columns are-vertically-aligned-center\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50%\"} -->
                <div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:50%\"><!-- wp:image {\"id\":39,\"sizeSlug\":\"large\"} -->
                <figure class=\"wp-block-image size-large\"><a href=\"https://cdn.stocksnap.io/img-thumbs/960w/people-woman_YI2SA8NUDB.jpg\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/people-woman_YI2SA8NUDB.jpg\" alt=\"\" class=\"wp-image-39\"/></a></figure>
                <!-- /wp:image -->
                
                <!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:column -->
                
                <!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50%\"} -->
                <div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:50%\"><!-- wp:image {\"id\":40,\"sizeSlug\":\"large\"} -->
                <figure class=\"wp-block-image size-large\"><a href=\"https://cdn.stocksnap.io/img-thumbs/960w/sea-ocean_Y2PZ47OU6Z.jpg\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/sea-ocean_Y2PZ47OU6Z.jpg\" alt=\"\" class=\"wp-image-40\"/></a></figure>
                <!-- /wp:image -->
                
                <!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"nv-dark-bg\"} -->
                <p class=\"has-text-align-center has-nv-dark-bg-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\",\"orientation\":\"horizontal\"}} -->
                <div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"is-style-primary\"} -->
                <div class=\"wp-block-button is-style-primary\"><a class=\"wp-block-button__link wp-element-button\" href=\"#\">LEARN MORE</a></div>
                <!-- /wp:button --></div>
                <!-- /wp:buttons -->
                
                <!-- wp:spacer -->
                <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:group --></div></div>
                <!-- /wp:cover -->",
    )
);

/* features */
register_block_pattern(
    'beautystyle/beautystyle-features',
    array(
            'title'       => __( 'BeautyStyle - Features', 'beautystyle' ),
            'description' => _x( 'A hero section list of features.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'banners', 'text'),
            'keywords'      => array( 'cta', 'features','list', 'content' ),
            'content'     => "<!-- wp:cover {\"dimRatio\":0,\"overlayColor\":\"nv-site-bg\",\"isDark\":false} -->
            <div class=\"wp-block-cover is-light\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-site-bg-background-color has-background-dim-0 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"textColor\":\"nv-dark-bg\"} -->
                <h2 class=\"wp-block-heading has-text-align-center has-nv-dark-bg-color has-text-color\">Features</h2>
                <!-- /wp:heading -->
                
                <!-- wp:columns -->
                <div class=\"wp-block-columns\"><!-- wp:column -->
                <div class=\"wp-block-column\"><!-- wp:list {\"textColor\":\"nv-dark-bg\"} -->
                <ul class=\"has-nv-dark-bg-color has-text-color\"><!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item --></ul>
                <!-- /wp:list --></div>
                <!-- /wp:column -->
                
                <!-- wp:column -->
                <div class=\"wp-block-column\"><!-- wp:list {\"textColor\":\"nv-dark-bg\"} -->
                <ul class=\"has-nv-dark-bg-color has-text-color\"><!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item --></ul>
                <!-- /wp:list --></div>
                <!-- /wp:column -->
                
                <!-- wp:column -->
                <div class=\"wp-block-column\"><!-- wp:list {\"textColor\":\"nv-dark-bg\"} -->
                <ul class=\"has-nv-dark-bg-color has-text-color\"><!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item -->
                
                <!-- wp:list-item -->
                <li>featue lorem isum dot sia maet</li>
                <!-- /wp:list-item --></ul>
                <!-- /wp:list --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns --></div></div>
                <!-- /wp:cover -->",
    )
);

/* contacts */
register_block_pattern(
    'beautystyle/beautystyle-contacts',
    array(
            'title'       => __( 'BeautyStyle - Contacts', 'beautystyle' ),
            'description' => _x( 'A contacts section with icons.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'banners', 'text'),
            'keywords'      => array( 'icons', 'contact', 'content' ),
            'content'     => "<!-- wp:cover {\"dimRatio\":0,\"overlayColor\":\"nv-light-bg\",\"minHeight\":420,\"isDark\":false,\"align\":\"wide\"} -->
            <div class=\"wp-block-cover alignwide is-light\" style=\"min-height:420px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-light-bg-background-color has-background-dim-0 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":\"80px\"} -->
                <div style=\"height:80px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:heading {\"textAlign\":\"center\",\"textColor\":\"neve-text-color\"} -->
                <h2 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Contacts</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"nv-dark-bg\"} -->
                <p class=\"has-text-align-center has-nv-dark-bg-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:columns -->
                <div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"ticss-4ce656f1\"} -->
                <div class=\"wp-block-column ticss-4ce656f1\"><!-- wp:group {\"backgroundColor\":\"white\"} -->
                <div class=\"wp-block-group has-white-background-color has-background\"><!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"x-large\"} -->
                <p class=\"has-text-align-center has-x-large-font-size\">📲</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:heading {\"level\":3,\"textColor\":\"neve-text-color\",\"className\":\"has-text-align-center\"} -->
                <h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Call us</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":15}},\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-center has-neve-text-color-color has-text-color\" style=\"font-size:15px\">509-728-8632 | Monday - Friday</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer {\"height\":\"24px\"} -->
                <div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:group --></div>
                <!-- /wp:column -->
                
                <!-- wp:column {\"className\":\"\"} -->
                <div class=\"wp-block-column\"><!-- wp:group {\"backgroundColor\":\"white\"} -->
                <div class=\"wp-block-group has-white-background-color has-background\"><!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"x-large\"} -->
                <p class=\"has-text-align-center has-x-large-font-size\">📩</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:heading {\"level\":3,\"textColor\":\"neve-text-color\",\"className\":\"has-text-align-center\"} -->
                <h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Email</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":15}},\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-center has-neve-text-color-color has-text-color\" style=\"font-size:15px\">info@new-agency.com</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer {\"height\":\"24px\"} -->
                <div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:group --></div>
                <!-- /wp:column -->
                
                <!-- wp:column {\"className\":\"\"} -->
                <div class=\"wp-block-column\"><!-- wp:group {\"backgroundColor\":\"white\"} -->
                <div class=\"wp-block-group has-white-background-color has-background\"><!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"x-large\"} -->
                <p class=\"has-text-align-center has-x-large-font-size\">🗺</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:heading {\"level\":3,\"textColor\":\"neve-text-color\",\"className\":\"has-text-align-center\"} -->
                <h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Offices</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":15}},\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-center has-neve-text-color-color has-text-color\" style=\"font-size:15px\">2982 Sun Valley Road, Pittsburgh</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer {\"height\":\"24px\"} -->
                <div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:group --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns -->
                
                <!-- wp:spacer -->
                <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div></div>
                <!-- /wp:cover -->",
    )
);

/* team */
register_block_pattern(
    'beautystyle/beautystyle-team',
    array(
            'title'       => __( 'BeautyStyle - Team', 'beautystyle' ),
            'description' => _x( 'A team section with, title, descritpion and social icons.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'banners', 'text'),
            'keywords'      => array( 'cta', 'team', 'content' ),
            'content'     => "<!-- wp:cover {\"dimRatio\":0,\"overlayColor\":\"nv-site-bg\",\"minHeight\":600,\"isDark\":false,\"align\":\"wide\"} -->
            <div class=\"wp-block-cover alignwide is-light\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-site-bg-background-color has-background-dim-0 has-background-dim\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:group -->
                <div class=\"wp-block-group\"><!-- wp:spacer {\"height\":\"80px\"} -->
                <div style=\"height:80px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:heading {\"textAlign\":\"center\",\"textColor\":\"neve-text-color\"} -->
                <h2 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Team</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"nv-dark-bg\"} -->
                <p class=\"has-text-align-center has-nv-dark-bg-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:columns -->
                <div class=\"wp-block-columns\"><!-- wp:column -->
                <div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":214,\"sizeSlug\":\"large\",\"className\":\"is-style-default\"} -->
                <figure class=\"wp-block-image aligncenter size-large is-style-default\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/bird-leaves_AB6A5G88IP.jpg\" alt=\"\" class=\"wp-image-214\"/></figure>
                <!-- /wp:image -->
                
                <!-- wp:spacer {\"height\":\"24px\"} -->
                <div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"textColor\":\"neve-text-color\"} -->
                <h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Keith Marshall</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-center has-neve-text-color-color has-text-color\">Designer</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:social-links {\"align\":\"center\"} -->
                <ul class=\"wp-block-social-links aligncenter\"><!-- wp:social-link {\"url\":\"#\",\"service\":\"facebook\"} /-->
                
                <!-- wp:social-link {\"url\":\"#\",\"service\":\"twitter\"} /-->
                
                <!-- wp:social-link {\"url\":\"#\",\"service\":\"linkedin\"} /--></ul>
                <!-- /wp:social-links -->
                
                <!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:column -->
                
                <!-- wp:column -->
                <div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":216,\"sizeSlug\":\"large\",\"className\":\"is-style-default\"} -->
                <figure class=\"wp-block-image aligncenter size-large is-style-default\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/bird-wildlife_6VWR9PLM7R.jpg\" alt=\"\" class=\"wp-image-216\"/></figure>
                <!-- /wp:image -->
                
                <!-- wp:spacer {\"height\":\"24px\"} -->
                <div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"textColor\":\"neve-text-color\"} -->
                <h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">George Williams</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-center has-neve-text-color-color has-text-color\">Developer</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:social-links {\"align\":\"center\"} -->
                <ul class=\"wp-block-social-links aligncenter\"><!-- wp:social-link {\"url\":\"#\",\"service\":\"facebook\"} /-->
                
                <!-- wp:social-link {\"url\":\"#\",\"service\":\"twitter\"} /-->
                
                <!-- wp:social-link {\"url\":\"#\",\"service\":\"linkedin\"} /--></ul>
                <!-- /wp:social-links -->
                
                <!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:column -->
                
                <!-- wp:column -->
                <div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":215,\"sizeSlug\":\"large\",\"className\":\"is-style-default\"} -->
                <figure class=\"wp-block-image aligncenter size-large is-style-default\"><img src=\"https://cdn.stocksnap.io/img-thumbs/960w/falling-autumn_4Y9AWZZSIB.jpg\" alt=\"\" class=\"wp-image-215\"/></figure>
                <!-- /wp:image -->
                
                <!-- wp:spacer {\"height\":\"24px\"} -->
                <div style=\"height:24px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"textColor\":\"neve-text-color\"} -->
                <h3 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Julia Castillo</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->
                <p class=\"has-text-align-center has-neve-text-color-color has-text-color\">Client Service</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:social-links {\"align\":\"center\"} -->
                <ul class=\"wp-block-social-links aligncenter\"><!-- wp:social-link {\"url\":\"#\",\"service\":\"facebook\"} /-->
                
                <!-- wp:social-link {\"url\":\"#\",\"service\":\"twitter\"} /-->
                
                <!-- wp:social-link {\"url\":\"#\",\"service\":\"linkedin\"} /--></ul>
                <!-- /wp:social-links -->
                
                <!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns -->
                
                <!-- wp:spacer {\"height\":\"40px\"} -->
                <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div>
                <!-- /wp:group --></div></div>
                <!-- /wp:cover -->",
    )
);

/* cta cover */
register_block_pattern(
    'beautystyle/beautystyle-cta-cover',
    array(
            'title'       => __( 'BeautyStyle - Cta Cover', 'beautystyle' ),
            'description' => _x( 'A cta section with, title, descritpion and cta.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'banners', 'text'),
            'keywords'      => array( 'cta', 'cover', 'content' ),
            'content'     => "<!-- wp:cover {\"customOverlayColor\":\"#5d3b3b\",\"minHeight\":300,\"align\":\"full\"} -->
            <div class=\"wp-block-cover alignfull\" style=\"min-height:300px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-100 has-background-dim\" style=\"background-color:#5d3b3b\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":\"140px\"} -->
                <div style=\"height:140px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer -->
                
                <!-- wp:heading {\"textAlign\":\"center\",\"textColor\":\"light-gray\"} -->
                <h2 class=\"wp-block-heading has-text-align-center has-light-gray-color has-text-color\">Let’s work together on your <br>next web project</h2>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"light-gray\"} -->
                <p class=\"has-text-align-center has-light-gray-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus <br>nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\",\"orientation\":\"horizontal\"}} -->
                <div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"is-style-primary\"} -->
                <div class=\"wp-block-button is-style-primary\"><a class=\"wp-block-button__link wp-element-button\" href=\"#\">LEARN MORE</a></div>
                <!-- /wp:button --></div>
                <!-- /wp:buttons -->
                
                <!-- wp:spacer {\"height\":\"140px\"} -->
                <div style=\"height:140px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
                <!-- /wp:spacer --></div></div>
                <!-- /wp:cover -->",
    )
);

/* faq */
register_block_pattern(
    'beautystyle/beautystyle-faq',
    array(
            'title'       => __( 'BeautyStyle - FAQ', 'beautystyle' ),
            'description' => _x( 'A faq section with accordion animation.', 'Block pattern description', 'beautystyle' ),
            'categories'    => array( 'banner', 'text'),
            'keywords'      => array( 'cta', 'cover', 'content' ),
            'content'     => "<!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
            <div class=\"wp-block-group\"><!-- wp:spacer -->
            <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:heading {\"textAlign\":\"center\"} -->
            <h2 class=\"wp-block-heading has-text-align-center\">Frequent Asked Question</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {\"align\":\"center\"} -->
            <p class=\"has-text-align-center\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed sia met.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer {\"height\":\"40px\"} -->
            <div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:columns {\"className\":\"accordion\"} -->
            <div class=\"wp-block-columns accordion\"><!-- wp:column -->
            <div class=\"wp-block-column\"><!-- wp:heading {\"level\":3} -->
            <h3 class=\"wp-block-heading\">Lorem sia amte laborum?</h3>
            <!-- /wp:heading -->
            
            <!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
            <div class=\"wp-block-group\"><!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer {\"height\":\"20px\"} -->
            <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:group -->
            
            <!-- wp:heading {\"level\":3} -->
            <h3 class=\"wp-block-heading\">Lorem sia ispum?</h3>
            <!-- /wp:heading -->
            
            <!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
            <div class=\"wp-block-group\"><!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer {\"height\":\"20px\"} -->
            <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:group -->
            
            <!-- wp:heading {\"level\":3} -->
            <h3 class=\"wp-block-heading\">Laborum sia ?</h3>
            <!-- /wp:heading -->
            
            <!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
            <div class=\"wp-block-group\"><!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer {\"height\":\"20px\"} -->
            <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:group -->
            
            <!-- wp:spacer {\"height\":\"50px\"} -->
            <div style=\"height:50px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class=\"wp-block-column\"><!-- wp:heading {\"level\":3} -->
            <h3 class=\"wp-block-heading\">Lorem sia met?</h3>
            <!-- /wp:heading -->
            
            <!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
            <div class=\"wp-block-group\"><!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer {\"height\":\"20px\"} -->
            <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:group -->
            
            <!-- wp:heading {\"level\":3} -->
            <h3 class=\"wp-block-heading\">Lore sia amet?</h3>
            <!-- /wp:heading -->
            
            <!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
            <div class=\"wp-block-group\"><!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer {\"height\":\"20px\"} -->
            <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:group -->
            
            <!-- wp:heading {\"level\":3} -->
            <h3 class=\"wp-block-heading\">Lorem sia ipsum amet?</h3>
            <!-- /wp:heading -->
            
            <!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
            <div class=\"wp-block-group\"><!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer {\"height\":\"20px\"} -->
            <div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:group --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            
            <!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\",\"orientation\":\"horizontal\"}} -->
            <div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"vivid-red\",\"textColor\":\"white\",\"className\":\"is-style-secondary is-style-fill\"} -->
            <div class=\"wp-block-button is-style-secondary is-style-fill\"><a class=\"wp-block-button__link has-white-color has-vivid-red-background-color has-text-color has-background wp-element-button\" href=\"#\"><strong>PRENOTA UNA PROVA</strong></a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons -->
            
            <!-- wp:spacer -->
            <div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:group -->",
    )
);