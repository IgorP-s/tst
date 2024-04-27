document.addEventListener("DOMContentLoaded", function() {
    var popup = document.getElementById("popup");
    var fecharBotao = document.getElementById("cancelar");

    fecharBotao.addEventListener("click", function() {
        window.close(); 
    });
});
let contadorCurtidas = 0;

    function curtir() {
        contadorCurtidas++;
        document.getElementById('contador').innerText = contadorCurtidas + (contadorCurtidas === 1 ? ' curtida' : ' curtidas');
    }