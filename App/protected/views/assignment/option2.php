<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Uso del presupuesto</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
  <!--<link rel="stylesheet" href="css/jquery-custom-theme/jquery-ui-1.9.1.custom.min.css">-->
  <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
  
  <style>
    .dragbl { width: auto; height: auto; padding: 0.5em; float: left; }
    .dropbl { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 5px 5px 5px 40px; position: absolute; background-color: white; }
    
    #budgetTable{
      /*border : 1px black solid;*/
      width: 60%;
      height: auto;
      margin : 20px;
      /*left:0;      
      top : 0;
      position:relative; */
      float: left;
    }
    
    #PartidaTable{
      /*border : 1px black solid;*/
      width: 30%;
      height: auto;
      margin : 20px;
      /*left:100px;*/
      /*position:relative;*/
      float: left;
      /*top:0;*/
      /*right:0;      */
      }
    
    #master{
      /*border : 1px black solid;*/
      width: 90%;
      height: auto;      
      top : 100px;
    }  
  </style>
  
</head>



<body>
 
  <br><br>
  <h2>Administracion</h2>
  
  <ul class="nav nav-tabs">
  <!--<ul class="nav nav-pills">    -->
    <li><a href="#">Nuevo</a></li>
    <li class="active"><a href="#">Presupuestos</a></li>
    <li><a href="#">Asignacion</a></li>
    <li><a href="index.php?r=assignment/option1">Reportes</a></li>
  </ul>


  <div id="master">
      <div id="budgetTable">
        
      
        <table class="table table-striped" >
          <thead>
                <tr>
                  <th>ID</th>
                  <th>Presupuesto</th>
                  <th>Monto Original</th>
                  <th>Monto Actual</th>
                  <th>% Actual</th>
                  <th></th>
                </tr>
          </thead>
          <tbody>
                <tr>
                  <td>1</td>
                  <td>Partida A</td>
                  <td>$1,000,000.00</td>
                  <td> <div id="drag1" class="dragbl ui-widget-content"><p>$500,000.00</p></div>  </td>
                  <td>50%</td>
                  <td><span class="glyphicon glyphicon-arrow-right"></span></td>                  
                </tr>
                <tr>
                  <td>2</td>
                  <td>Partida B</td>
                  <td>$50,000.00</td>
                  <td> <div id="drag1" class="dragbl ui-widget-content"><p>$5000.00</p></div>  </td>
                  <td>10%</td>
                  <td><span class="glyphicon glyphicon-arrow-right"></span></td>                  
                </tr>
                <tr>
                  <td>3</td>
                  <td>Partida C</td>
                  <td>$7,700,000.00</td>
                  <td> <div id="drag1" class="dragbl ui-widget-content"><p>$7,000,000.00</p></div>  </td>
                  <td>90%</td>
                  <td><span class="glyphicon glyphicon-arrow-right"></span></td>                  
                </tr>          
          </tbody>
        </table>  
      </div>
    
      <div id="PartidaTable">
        <h3>Selector de Partidas</h3>
         <div class="dropbl ui-widget-header">
          <p>Partida A</p>
        </div>        
      </div>
      
      
     
  
  
  </div>

  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script src="assets/dist/js/bootstrap.min.js"></script>
  
  <script>
    $(function() {
      $( "#drag1" ).draggable();
      $( "#PartidaTable" ).droppable({
        drop: function( event, ui ) {
          $( this )
            .addClass( "ui-state-highlight" )
            .find( "p" )
              .html( "Dropped!" );
        }
      });
    });
  </script>  
   
 
</body>
</html>
