<!DOCTYPE html>
<html lang="de-DE" id="open-navigation" class="close-navigation">
    <head>
        <meta charset="utf-8">
        <title>YAGWUD</title>
        <meta name="author" content="SofaSurfer">
        <meta name="description" content="Wir lieben Biel/Bienne, wir lieben seine Bewohner. Insbesondere all die Musik- und Kulturschaffenden, Musikliebhaber und interessierte Freigeister.">



        <!-- Preventing IE11 to request by default the /browserconfig.xml more than one time -->
        <meta name="msapplication-config" content="none">
        <!-- Disable touch highlighting in IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- Ensure edge compatibility in IE (HTTP header can be set in web server config) -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <!-- Force viewport width and pixel density. Plus, disable shrinking. -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Disable Skype browser-plugin -->
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

        <link rel="stylesheet" href="/assets/css/justifiedGallery.css">
        <link rel="stylesheet" href="/assets/css/main.css">

        <script>
            var img_active = 0;
            var images = [];
        </script>
    </head>
    <body id="top">

        <div id="overlay">
            <!--
            <div class="close"></div>
            <div class="next"></div>
            <div class="next"></div>
            -->
        </div>
        <div id="pgallery">

            <?php
            $files = scandir('assets/images/');
            $index = 1;
            foreach($files as $file):
                if( strpos($file,".") > 2 ):
                ?>
                <a href="/assets/images/<?= $file;?>" target="_blank" data-index="<?=$index;?>"><img  src="/assets/images/<?= $file;?>"/></a>
                <script>images.push('/assets/images/<?= $file;?>');</script>
                <?php
                $index++;
                endif;
            endforeach; ?>
                
        </div>


        <script src="/assets/js/default.js"></script>

        <script>

        function checkKey(e) {
            var event = window.event ? window.event : e;
            if( event.keyCode == 37 ){
                if(img_active > 1){
                    img_active = img_active-1;
                }else{
                    img_active = images.length;
                }
                $('#overlay').css('background-image', 'url(' + images[img_active] + ')');
            }else if( event.keyCode == 39 ){
                if(img_active < images.length){
                    img_active = img_active+1;
                }else{
                    img_active = 0;
                }
                $('#overlay').css('background-image', 'url(' + images[img_active] + ')');
            }
        }
        document.addEventListener('keyup', checkKey);

        /*
            When page is loaded
        */
        var scrollPos = 0;
        $(function() {

            $("#pgallery").justifiedGallery({
                margins: 10,
                rowHeight: 500
            });

            $('a').click(function(e) {
                e.preventDefault();
                $('body').addClass('overlay');
                $('#overlay').css('background-image', 'url(' + $(this).attr('href') + ')');
                img_active = $(this).data('index');
            });

            $('.close').click(function(e) {
                e.preventDefault();
                $('body').removeClass('overlay');
            });
            $('#overlay').click(function(e) {
                e.preventDefault();
                $('body').removeClass('overlay');
            });
        });



        </script>

        <!-- Matomo -->
        <script type="text/javascript">
        var _paq = _paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
          var u="https://piwik.sofasurfer.org/";
          _paq.push(['setTrackerUrl', u+'piwik.php']);
          _paq.push(['setSiteId', '35']);
          var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
          g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
        </script>
        <!-- End Matomo Code -->  

    </body>
</html>