<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://<?php print SITEROOT ?>/css/style.css">
        <meta name="description" content="Canadian Freemasonry">
        <meta name="keywords" content="Mason, Freemason, Freemasonry">
        <title><?php print PAGENAME ?></title>
    </head>

    <body>
        <div id='container'>
            <header>
                <h1><a href="http://<?php print SITEROOT ?>">CanadianMason.ca</a></h1>                
            </header>

            <div id='sidebar'>
              <div class='title'>Menu</div>

              <?php 
                print build_menu(DOCROOT."/pages/About_Free_Masonry", "About_Free_Masonry");
                print build_menu(DOCROOT."/pages/Directory", "Directory");
              ?>

            </div>

            <div id='content'>
              <?php require_once($page); ?>
            

                <footer>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- cm -->
                <ins class="adsbygoogle"
                        style="display:inline-block;width:675px;height:90px"
                        data-ad-client="ca-pub-1193664490092060"
                        data-ad-slot="2603597262"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>


                <div id="disqus_thread"></div>
                <script type="text/javascript">
                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                      var disqus_shortname = 'canadiamason'; // required: replace example with your forum shortname

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function() {
                     var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                      dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                     (document.getElementsByTagName('head')[0] || document.getElementsByT--MoagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
                </footer>
            </div>
        </div>
    </body>
</html>
