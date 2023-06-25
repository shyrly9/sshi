<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div id="h1">
  <h1>Números</h1>
</div>
<div class="grid">
  <div id="number1">
    <h2>Ingrese el numero de lineas a genrar</h2>
  </div>
</div>
<input type="number" id="n1" value="">
<div id="b1">
  <button type="submit" onclick="escogerTexto()">Ejecutar el bucle</button>
</div>

<script>
  function escogerTexto() {
    var n1 = document.getElementById("n1").value;
    var texto = "";
  
    for (let i = 1; i <= n1; i++) {
      texto += "Línea " + i + "<br>";
    }
    
    document.getElementById("result").innerHTML = texto;
  }
</script>

<div id="result"></div>

</body>
</html>