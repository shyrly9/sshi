<!DOCTYPE html>
<html>
<head>
  <title>Shi</title>
  <style>
    /* Estilos para los enlaces */
    .popup-link {
      display: inline-block;
      margin-right: 20px;
    }

    /* Estilos para las ventanas emergentes */
    .popup {
      width: 600px;
      height: 400px;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      position: absolute;
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 20px;
    }
  </style>
</head>
<body>
  <h1>Ejercicios Java</h1>
  
  <a href="bucle.php" target="_blank" class="popup-link">Bucle con valor ingresado</a>
  <a href="Result_div.php" target="_blank" class="popup-link">Resultado en un div</a>
  
  <a href="tesult_div2.php" target="_blank" class="popup-link">Resultado en un div2</a>
  
  <script>
    // Función para abrir la ventana emergente
    function openPopup(url) {
      window.open(url, "popupWindow", "width=600,height=400");
    }
    
    // Asignar la función al evento de clic de los enlaces
    var links = document.getElementsByClassName("popup-link");
    for (var i = 0; i < links.length; i++) {
      links[i].addEventListener("click", function(event) {
        event.preventDefault();
        openPopup(this.getAttribute("href"));
      });
    }
  </script>
</body>
</html>