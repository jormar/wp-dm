<aside class ="home_aside">
    <?php get_template_part('content', 'nube-sidebar') ?>
    
    <div class="block">
        <script>
            // jQuery(document).on("ready", function(){
                new TWTR.Widget({
                    version: 2,
                    type: 'profile',
                    rpp: 12,
                    interval: 30000,
                    width: 340,
                    height: 300,
                    theme: {
                    shell: {
                        background: '#8ec1da',
                        color: '#ffffff'
                    },
                    tweets: {
                        background: '#ffffff',
                        color: '#444444',
                        links: '#1985b5'
                    }
                    },
                    features: {
                    scrollbar: true,
                    loop: false,
                    live: false,
                    hashtags: true,
                    timestamp: true,
                    avatars: true,
                    behavior: 'all'
                    }
                }).render().setUser('durmiendomejor').start();
            // })
//            <a class="twitter-timeline" href="https://twitter.com/durmiendomejor" data-widget-id="270340081976475648">Tweets por @durmiendomejor</a>
//            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </script>
    </div>

    <div class="block facebook">
        <div class="fb-like-box" data-href="http://es-es.facebook.com/pages/Durmiendo-Mejor/123472177736666" data-width="340" data-show-faces="true" data-stream="false" data-header="false"></div>
    </div>
</aside>