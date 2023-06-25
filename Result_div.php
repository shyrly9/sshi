<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<button onclick="ingresarValor('valor1')">Ingresar Valor 1</button>
<button onclick="ingresarValor('valor2')">Ingresar Valor 2</button>

<div id="resultado"></div>

<script>
  function ingresarValor(valor) {
    var input = prompt("Ingrese el valor " + valor + ":");
    var resultadoDiv = document.getElementById("resultado");
    
    if (resultadoDiv.innerHTML === "") {
      resultadoDiv.innerHTML = "Valores ingresados: " + input;
    } else {
      resultadoDiv.innerHTML += ", " + input;
    }
  }
</script>  
</body>
</html>