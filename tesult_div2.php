<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ronald</title>
</head>
<body>
    <button onclick="ingresarValor('valor1')">Ingresar Valor 1</button>
    <input type="text" id="input1">

    <button onclick="ingresarValor('valor2')">Ingresar Valor 2</button>
    <input type="text" id="input2">

    <div id="resultado"></div>

    <script>
      var valor1 = null;
      var valor2 = null;

      function ingresarValor(valor) {
        var inputId = "input" + valor.charAt(valor.length - 1);
        var input = document.getElementById(inputId).value;
        var resultadoDiv = document.getElementById("resultado");
        
        if (valor === 'valor1') {
          valor1 = parseFloat(input);
          resultadoDiv.innerHTML = "El primer valor ingresado es: " + input;
        } else if (valor === 'valor2') {
          valor2 = parseFloat(input);
          resultadoDiv.innerHTML += "<br>El segundo valor ingresado es: " + input;
        }
        
        if (valor1 !== null && valor2 !== null) {
          var suma = valor1 + valor2;
          resultadoDiv.innerHTML += "<br>La suma de los valores es: " + suma;
        }
      }
    </script>

</body>
</html>