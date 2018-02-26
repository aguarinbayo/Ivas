</!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>

	<script type="text/javascript">

$(document).ready(function(){

    $("#submit").click(function(){
        var data= $('#form').serialize();
       
  $.post( "proceso.php",data,function( datas ){
    $("#cargaexterna").html(datas);
  });
        });
      });
   
</script>
</head>
<body>
	<form id="form">
		<div>
			<input type="text" name="valor1">
		</div>
		<div>
			<input type="text" name="valor2">	
		</div>

	</form>

		<div>
			<button id="submit">calcular</button>
		</div>
		
	<div id="cargaexterna">
		
	</div>

</body>
</html>

