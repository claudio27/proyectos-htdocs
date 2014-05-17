<!DOCTYPE html>

<html dir="ltr" lang="en-US">

    <head>
        <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One|Titillium+Web|Carme|Alegreya' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Claudio Serrano - Desarrollador Web</title>

        <link rel="stylesheet" type="text/css"  media="all" href="css/reset.css" />
        <link rel="stylesheet" type="text/css"  media="all" href="css/text.css" />
        <link rel="stylesheet" type="text/css"  media="all" href="css/960.css" />
        <link rel="stylesheet" type="text/css" href="css/nav.css">


        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


        <!-- LINK PAGE SCROLLER PRO JS FILE -->
        <script type="text/javascript" src="./lib/jquery.pagescroller.lite.js"></script>
        <!-- / -->

        <script type="text/javascript">

            $(document).ready(function(){

                // initiate page scroller plugin
                $('body').pageScroller({
                    navigation: '#nav'
                });

            });

        </script>

    </head>


    <body>

        <div id="nav" class="pageScrollerNav standardNav right dark">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">PHP + MYSQL + AJAX</a></li>
                <li><a href="#">JSP + MYSQL</a></li>
                <li><a href="#">PORTAFOLIO</a></li>
                <li><a href="#">CONTACTO</a></li>
            </ul>
        </div>

        <div class="container_12" style="border-left: solid; border-left-color: rgb(245, 239, 239);
             border-right: solid; border-right-color: rgb(245,239,239);" >
            <div class="grid_12 section">
                <h1 style="font-size: 36pt;">Claudio Serrano</h1>
                <h2>Desarrollador Web</h2>
                <div class="clear"></div>
                <div class="grid_6 prefix_1">
                    <h3>Lenguajes de programaci&oacute;n</h3>
                    <ul>
                        <li>Java</li>
                        <li>C</li>
                        <li>Python</li>
                    </ul>
                </div>

                <div class="grid_3 suffix_1">
                    <h1>Programaci&oacute;n Web</h1>
                    <ul>
                        <li>JSP</li>
                        <li>PHP</li>
                        <li>JAVASCRIPT</li>
                        <li>CSS</li>
                    </ul>
                </div>

            </div>



            <div class="clear"></div>


            <div class="grid_12 section">
                <h1>EJEMPLO PHP + MYSQL + AJAX</h1>


            </div>
            <div class="clear"></div>
            <div class="grid_12 section">
                <h1>EJEMPLO JSP + MYSQL EN SERVIDOR APACHE TOMCAT</h1>


            </div>
            <div class="clear"></div>
            <div class="grid_12 section">
                <h1>P&Aacute;GINA WEB REALIZADA POR MI</h1>
            </div>
            <div class="clear"></div>
            <div class="grid_12 section">
                <h1>CONTACTO</h1>
            </div>
            <div class="clear"></div>

            <div class="grid_12" id="footer">
            <div class="grid_12 prefix_4">
                <p> &copy; Claudio Serrano, Santiago - <?php echo date("Y") ?> | <a href="mailto:claudio.serrano2@gmail.com">claudio.serrano2@gmail.com</a> |celular</p>
            </div>
            <div class="clear"></div>
         
            
</div>
        </div>

    </body><!-- [END] body -->
</html><!-- [END] html -->
