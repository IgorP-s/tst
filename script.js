//funcao do pop-up
document.addEventListener("DOMContentLoaded", function() {
    var palavra = document.getElementById("log");

    palavra.addEventListener("click", function() {
        window.open("login.php", "Pop-up", "width=600,height=400");
    });

//funcao do botao de curtidas
    document.getElementById('imagem').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    });
    
    document.getElementById('overlay').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    });
});
var likeButton = document.getElementById('likeButton');
        var likeCount = document.getElementById('likeCount');

        var count=0;

        function updateCount() {
    likeCount.textContent = count;
}

    likeButton.addEventListener('click', function() {
    count++;
    updateCount();
    likeButton.disabled = false;
});

