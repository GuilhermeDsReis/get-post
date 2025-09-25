<pre>
<?php 
// Olhe o resultado na página e descreva aqui o que aconteceu
print_r($_SERVER); // print_r mostra o conteúdo de um array
//exit()
?>
</pre>


<?php 
// o isset() verifica se a variavel existe
//$_GET guarda os dados enviados por GET
// Dentro dos [] colocamos o NAMEde um input para obter seu valor
// Esse IF verifica se o campo nome foi enviado por GET.


// o isset() verifica se a variavel existe
if (isset($_GET['nome'])) {
    echo "<h1>Campos enviados por GET:</h1>";
    echo "Nome: " . $_GET['nome'] . "<br>";

    //Podemos colocar o valor que veio por GET em outra variavel
    $ano = $_GET['ano_nascimento'];

    //date("Y") pega o ano atual do servidor
    $idade = date("Y") - $ano;
    echo "<p>Nasceu em: $ano e tem $idade anos.</p>";
} else {
    echo "<p style='color:red;'>Não veio nada por GET!</p>";
}

//$_POST guarda os dados enviados por POST
//$_SERVER guarda dados de servidor e requisição

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nome'])) {
        echo "<h1>Campos enviados por POST:</h1>";
        echo "Nome: " . $_POST['nome'] . "<br>";

        //Podemos colocar o valor que veio por POST em outra variavel
        $ano = $_POST['ano_nascimento'];

        //date("Y") pega o ano atual do servidor
        $idade = date("Y") - $ano;

        echo "<p>Nasceu em: $ano e tem $idade anos.</p>";
    } else {
        echo "<p style='color:red;'>Não veio nada por POST!</p>";
    }
} else {
    echo "<p style='color:red;'>Não veio nada por POST!</p>";
}
?>



