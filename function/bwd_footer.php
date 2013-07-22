<?php
    

function bwd_footer_layout(){
    $top_class = 'footer-widget-column';
    $bottom_class = 'footer-bottom-widget-column';
    
    ?>
    <div id="footer-top" class="sidebar">
        <div id="footer-left">
            <?php bwd_create_footer_sidebar('Footer Widget Area 1', $top_class); ?>
        </div>
        <div id="footer-right">
            <?php bwd_create_footer_sidebar('Footer Widget Area 2', $top_class); ?>
            <?php bwd_create_footer_sidebar('Footer Widget Area 3', $top_class); ?>
        </div>
    </div>
    <div id="footer-bottom" class="sidebar">
            <?php bwd_create_footer_sidebar('Footer Widget Area Bottom Left', $bottom_class); ?>
            <?php bwd_create_footer_sidebar('Footer Widget Area Bottom Right', $bottom_class); ?>
    </div>
    <div style="clear:both;"></div>
    <?php
}

function bwd_create_footer_sidebar($bwd_sidebar, $class){
    ?>
    <div class ="<?php echo $class ?>">
            <ul class="sidebar_list">
                <?php if(!dynamic_sidebar($bwd_sidebar)) {?>
                    <li class="widget">
                        <div class="widget_box">
                            <h3><?php echo $bwd_sidebar; ?></h3>
                            <p class="remove_bottom_margin"><?php _e('This is your new Footer Widget Area.  Add widgets here from your WP Dashboard just like any other sidebar.', 'crtc'); ?></p>
                        </div>
                    </li>
                <?php 
}   
    ?></ul>
        </div>
    <?php
}
