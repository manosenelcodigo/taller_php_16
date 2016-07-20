<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Slide con Flexslider</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
        <link rel="stylesheet" href="public/css/flexslider.css" />
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Galería con Flexslider</h3>
              </div>
              <div class="panel-body">
                
                <!--slide-->
                <div class="flexslider">
                  <ul class="slides">
                    <?php
                    for($i=1;$i<=6;$i++)
                    {
                        ?>
                    <li>
                      <img src="public/images/imagen_<?php echo $i?>.jpg" />
                    </li>
                    <?php
                    }
                    ?>
                  </ul>
                </div>
                <!--end slide-->
                
              </div>
            </div>
        </div>
    </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 5
      });
    });
    </script>
    </body>
</html>
