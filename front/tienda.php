<!DOCTYPE html>
<html>
<!--              -------Creado por-------               -->
<!--             \(°u° )/ Anarchy \( °u°)/               -->
<!--              ------------------------               -->

<!--//    Damos paso a la anarquía...  \\                  -->
  <head>
      <meta charset="UTF-8"
>      <link rel="shortcut icon" href="http://drive.google.com/uc?export=view&id=1CbzDwRAhm5eMp0tlMlZCgyRB3lO3qV8D ">
      <title>(x.x ) AnarchyCode ( x.x)</title>
  </head>
  <body style="background-color: #f5f5f5">
  <div class="row" style="height: 100px;">
  </div>
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
              <div align=center >
                     <h1 class="logo-name"><img src="http://drive.google.com/uc?export=view&id=1c60GXvKCGKyDYkFreoAuXPXu4IaEw-Yh " style="max-width:100%;"> </h1>
              </div>
          <div class="panel panel-default" id="container">
              <div align=center class="panel-heading"><h3 class="panel-title">Iniciar sesión</h3></div>
              <div align=center class="panel-body">
                  <form role="form" method="post" id="tiendaForm">
                      <div class="form-group">
                          <label for="InputUSUARIO">Tienda</label>              
                          <div id="algo">
                          	
                          </div>
                       </div>               
                        <button type="submit" class="btn btn-warning">Ingresar</button>
                        <a href="javascript:cargaContenido('container','TiendaInsert.html')">Registrar una tienda</a>
                   </form>
               </div><!-- panel-body -->
          </div> <!-- panel -->
      </div>
      <div class="col-md-4">
      </div>
      <script src="js/Ajax.js "></script>
      <script src="js/ViewController.js "></script>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
      <script type="text/javascript">
      	$.post( "../back/outerController/tienda/TiendaListByUsuario.php", function( data ) {
      		if(data != false){
				$( "#algo" ).html( data );
      		}else{
      			$( "#algo" ).html( 'Por favor inserte una tienda' );
      		}
      			
			  
			});

      	$('#tiendaForm').submit(function(e){
  			//e.preventDefault();
      		var select = $('#tienda').val();
      		//alert(select);
      		$.post( "../back/outerController/administrador/Login2.php" ,{'tienda': select}).done(function(res){
      			
      			window.location=res;

      		});
      	});
      </script>
  </body>

<!-- That´s all folks! -->
</html>