<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Slide con Bootstrap</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Galería con bootstrap</h3>
              </div>
              <div class="panel-body">
                
                <!--slide-->
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
    for($i=1;$i<=6;$i++)
    {
        ?>
        <div class="item <?php if($i==1){echo 'active';}?>">
          <img src="public/images/imagen_<?php echo $i?>.jpg" />
          <div class="carousel-caption">
            texto <?php echo $i?>
          </div>
        </div>
        <?php
    }
    ?>
    
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                <!--end slide-->
                
              </div>
            </div>
        </div>
    </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
