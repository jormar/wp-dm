<div class="last_tweet_container">
    <a class="nav prev"></a>
    <div class="scrollable">      
        <!-- root element for the items -->
        <div class="items">
            <?php
            $twitts = json_decode( getTwittsSuenotips() );
            // Por lo pronto, solo incluimos los twitts en la nube...
            foreach($twitts->results as $twitt) {
            ?>
            <div class="item">
                <div style="display: table; height: 180px; #position: relative; overflow: hidden;">
                    <div style=" #position: absolute; #top: 50%;display: table-cell; vertical-align: middle;">
                        <div style=" #position: relative; #top: -50%">
                            <?php
                            $text = $twitt->text;
                            $text = preg_replace("/#([a-z_0-9ñ]+)/i", "<a target=\"_blank\" href=\"http://twitter.com/search/$1\">$0</a>", $text);
                            $text = preg_replace("/@([a-z_0-9ñ]+)/i", "<a target=\"_blank\" href=\"http://twitter.com/$1\">$0</a>", $text);
                            echo $text;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <a class="nav next"></a>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.last_tweet_container .scrollable .items')
            // .after('<div id="nav">') 
            .cycle({ 
            fx:     'scrollLeft',
            speed:  'fast', 
            timeout: 4000, 
            // pager:  '#nav',
                    pause:   1  
        });
    });
</script>