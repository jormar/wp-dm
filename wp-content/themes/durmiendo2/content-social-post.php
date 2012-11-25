<div class="social-cat">
    <!-- Me gusta facbook -->
    <div class="fb-like left left-sep" data-href="<?php the_permalink() ?>" data-send="false" data-layout="box_count" data-width="80" data-show-faces="false"></div>

    <!-- Twitts -->
    <div class="left left-sep"><a href="<?php echo get_twitter_share_link() ?>" data-lang="es" class="twitter-share-button" data-count="vertical" >Twitter</a></div>

    <!-- Google plus -->
    <div class="right box">
        <div class="left small" style="margin-top:6px">
            <g:plusone annotation="none" href="<?php the_permalink() ?>"></g:plusone>
        </div>
        <div class="left small">
            <a target="_blank" href="<?php echo get_facebook_share_link() ?>"><img src="<?php echo get_template_directory_uri() ?>/images/facebook-cat.jpg" alt="Compartir en Facebook" /></a>
        </div>
        <div class="left small">
            <a target="_blank" href="<?php echo get_twitter_share_link() ?>"><img src="<?php echo get_template_directory_uri() ?>/images/twitter-cat.jpg" alt="Compartir en Twitter" /></a>
        </div>
        <div class="left small">
            <?php if(function_exists('wp_email')) { email_link(); } ?>
        </div>
    </div>
</div>