<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Honker Burguer</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jcycle.js"></script>
</head>
<body>
    <div class="slides">
        <ul id="listaSlides">
            <li class="itemSlides"> <img src="imagens/slide1.jpg" alt="Imagem01"></li>
            <li class="itemSlides"> <img src="imagens/body.jpg" alt="Imagem02"></li>
            <li class="itemSlides"> <img src="imagens/body2.jpg" alt="Imagem03"></li>
            <li class="itemSlides"> <img src="imagens/body3.jpg" alt="Imagem04"></li>
            <li class="itemSlides"> <img src="imagens/body4.jpg" alt="Imagem05"></li>
            <li class="itemSlides"><img src="imagens/pericles3.jpg" alt="Imagem06"> </li>
        </ul>
        
        <div class="pag">
    	<a href="#" id="ant">&laquo;</a>
        <a href="#" id="prox">&raquo;</a>
        </div>
    </div>
    
    <script type="text/javascript">
        $(function(){
		 $('.slides ul').cycle({
			fx: 'fade',
			speed: 2000,
			timeout: 5000,
			next: '#prox',
			prev: '#ant',
		  
		})
	})
    
    </script>
</body>
    
</html