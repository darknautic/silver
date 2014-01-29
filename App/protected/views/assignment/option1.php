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
    #partidaA{ border:2px gray solid;}
    #partidaB{ border:2px gray solid; }
    #partidaC{ border:2px gray solid; }
  </style>
  
  
</head>



<body>
 
  <br><br>
  <h2>Distribucion del  Presupuesto</h2>
  
  <table class="table table-striped">
    <thead>
          <tr>
            <th>#</th>
            <th>Partida</th>
            <th>Rubro</th>
            <th>Presupuesto</th>
          </tr>
    </thead>
    <tbody>
          <tr>
            <td>1</td>
            <td>Partida A</td>
            <td></td>
            <td><div id="partidaA"></div></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>rubro A - a</td>
            <td><div id="rubroAa"></div></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>rubro A - b</td>
            <td><div id="rubroAb"></div></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Partida B</td>
            <td></td>
            <td><div id="partidaB"></div></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Partida C</td>
            <td></td>
            <td><div id="partidaC"></div></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>rubro C - a</td>
            <td><div id="rubroCa"></div></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>rubro C - b</td>
            <td><div id="rubroCb"></div></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>rubro C - c</td>
            <td><div id="rubroCc"></div></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>rubro C - d</td>
            <td><div id="rubroCd"></div></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>rubro C - e</td>
            <td><div id="rubroCe"></div></td>
          </tr>
    </tbody>
  </table>
  
  
  
 



  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script src="assets/dist/js/bootstrap.min.js"></script>
  
  <script>
    $(function() {
      $( "#partidaA" ).progressbar({
        value: 60
      });
      $( "#rubroAa" ).progressbar({value: 20});
      $( "#rubroAb" ).progressbar({value: 40});
      
      $( "#partidaB" ).progressbar({value: 80});
      $( "#partidaC" ).progressbar({value: 50});
      $( "#rubroCa" ).progressbar({value: 7});
      $( "#rubroCb" ).progressbar({value: 3});
      $( "#rubroCc" ).progressbar({value: 20});
      $( "#rubroCd" ).progressbar({value: 5});
      $( "#rubroCe" ).progressbar({value: 5});
      
      
    });
  </script>
   
 
</body>
</html>
