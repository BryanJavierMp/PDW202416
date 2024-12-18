<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
</head>

<body>
    <h3>Slidervar con color</h3>
    <input id="InpSlider" type="range" min="0" max="100" value="50">
    <span id="ResulInp">50</span>
    <button onclick="MostarDatos()">Comprobar</button>
    <p id="PResultado">sdasdasd</p>
</body>

<script>
    var ObjSlider = document.getElementById("InpSlider");
    var ObjResultadoSlider = document.getElementById("ResulInp");
    // Es la funcion para actualziar el valor en el span del slider
    ObjSlider.oninput = function() {
        ObjResultadoSlider.innerHTML = this.value;
    }

    function MostarDatos() {
        var Objparrafo = document.getElementById("PResultado");
        Objparrafo.style.color = "blue";
    }   
</script>

</html>