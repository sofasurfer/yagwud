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

        <link rel="stylesheet" href="/assets/css/main.css">

        <style>
            body{
                background-color: black;
            }

            a{
                cursor: default;
            }
            img2{
                display: inline-block;
                min-width: 500px;
                max-width: 1200px;
            }

        </style>
    </head>
    <body id="top">

        <div id="pgallery">

            <?php
            $files = scandir('assets/images/');
            foreach($files as $file):
                if( strpos($file,".") > 2 ):
                ?>

                <a href="/assets/images/<?= $file;?>" target="_blank"><img  src="/assets/images/<?= $file;?>"/></a>

                <?php 
                endif;
            endforeach; ?>
                
        </div>


        <script src="/assets/js/default.js"></script>

        <script>
        /*

            When page is loaded

        */
        var scrollPos = 0;
        $(function() {

            $("#pgallery2").justifiedGallery();

            $("#pgallery").justifiedGallery({
                margins: 10,
                rowHeight: 500
            });

            $('a').click(function(e) {
                e.preventDefault();
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