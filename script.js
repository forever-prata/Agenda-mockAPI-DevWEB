var btn = document.getElementById("btn");

btn.addEventListener("click", function(){
    
    var ourRequest = new XMLHttpRequest();
    ourRequest.open("GET", "banco.json");

    ourRequest.onload = function(){
        var ourData = JSON.parse(ourRequest.responseText);
        console.log(ourData[0])

        el = document.getElementById("lista");
        el.remove();

        var tabela = "<table class='table lista-contatos' id='lista'><thead><tr><th>Id</th><th>Nome</th><th>Email</th><th>Alterar</th><th>Excluir</th></tr></thead>";
        for (var it in ourData) {
            tabela += "<tr><td>" + ourData[0].id + "</td>";
            tabela += "<td>" + ourData[0].Nome + "</td>";
            tabela += "<td>" + ourData[0].Email + "</td>";
            tabela += "<td><a href='novo/index.php?acao=editar&id="+ourData[0].id+"'>Alt</a></td>";
            tabela += "<td><a href='#' onclick=excluir('index.php?acao=excluir&id="+ourData[0].id+"','"+ourData[0].nome+"')>Exc</a></td></tr>";
        }
        tabela += "</table>";
        document.getElementById('listagem').innerHTML = tabela;
    };
    ourRequest.send();
    
});
