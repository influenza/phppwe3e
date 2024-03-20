<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<style>
    #container{
        justify-content: center;
        align-items: center;
        display: flex;
        margin: auto;
        flex-direction: column;
    }
</style>
<div id="container">
    <h2>Formulário</h2>
    <form action="" method="post">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="namecom">Nome Completo:</label><br>
        <input type="text" id="namecom" name="namecom"><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"><br>
        <label for="email">E-mail:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="Web">WebSite:</label><br>
        <input type="text" id="web" name="web"><br>
        <label for="End">Endereco:</label><br>
        <input type="text" id="end" name="end"><br>
        <label for="Bairro">Bairro:</label><br>
        <input type="text" id="bairro" name="bairro"><br>
        <label for="Cep">Cep:</label><br>
        <input type="text" id="cep" name="cep"><br>   
        <label for="Tel">Telefone:</label><br>
        <input type="text" id="tel" name="tel"><br>
        <label for="datanas">Data de nascimento:</label><br>
        <input type="text" id="datanas" name="datanas"><br>
        <label for="Cel">Celular:</label><br>
        <input type="text" id="cel" name="cel"><br>
        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade"><br>
        <label for="UF">UF:</label><br>
        <select name="uf" id="uf">
        <option value="Acre">  Acre        </option>
        <option value="Alagoas">    Alagoas      </option>
        <option value="Amapa">     Amapa     </option>
        <option value="Amazonas">    Amazonas      </option>
        <option value="Bahia">    Bahia      </option>
        <option value="Ceara">   Ceara       </option>
        <option value="Distrito Federal"> Distrito Federa         </option>  
        <option value="Espirito Santo"> Espirito Santo         </option>
        <option value="Goias">      Goias    </option>
        <option value="Maranhao">    Maranhao      </option>
        <option value="Mato Grosso">     Mato Grosso     </option>
        <option value="Mato Grosso do Sul">   Mato Grosso do Sul       </option>
        <option value="Minas Gerais">  Minas Gerais        </option>
        <option value="Para">      Para    </option>
        <option value="Paraiba">      Paraiba    </option>
        <option value="Parana">       Parana   </option>
        <option value="Pernambuco ">   Pernambuco       </option>
        <option value="Piaui">   Piaui       </option>
        <option value="Rio de janeiro">    Rio de janeiro      </option>
        <option value="Rio Grande do Norte">      Rio Grande do Norte    </option>
        <option value="Rio Grande do Sul">   Rio Grande do Sul       </option>
        <option value="Rondônia ">   Rondônia       </option>
        <option value="Roraima">      Roraima    </option>
        <option value="Santa Catarina"> Santa Catarina         </option>
        <option value="Sao Paulo">    Sao Paulo      </option>
        <option value="Sergipe">  Sergipe        </option>
        <option value="Tocantins">    Tocantins      </option>
        </select><br>
        <label for="fax">Fax:</label><br>
        <input type="text" id="fax" name="fax"><br> 
        <label for="esc">Estado Civil:</label><br>
       <select name="esc" id="esc">
            <option value="solteiro">solteiro</option>
            <option value="casado">casado</option>
            <option value="casado">viuvo</option>
            <option value="casado">divorciados</option>
            <option value="casado">separados juridicamente</option>
        </select><br>
        <label for="temas">Deseja receber informacoes sobre os seguientes temas:</label><br>
        <label for="tec">Tecnologia:</label>
        <input type="checkbox" name="tec" id="tec">
        <label for="esporte">Esportes:</label>
        <input type="checkbox" name="esportes" id="esportes">
        <label for="Automotiveis">Automotiveis:</label>
        <input type="checkbox" name="Automotiveis" id="Automotiveis">
        <label for="Culinaria">Culinaria:</label>
        <input type="checkbox" name="Culinaria" id="Culinaria">
        <label for="Politica">Politica:</label>
        <input type="checkbox" name="Politica" id="Politica">
        <label for="Policial">Policial:</label>
        <input type="checkbox" name="Policial" id="Policial">
        <label for="Tempo">Tempo:</label>
        <input type="checkbox" name="Tempo" id="Tempo">
        <label for="Cultura">Cultura:</label>
        <input type="checkbox" name="Cultura" id="Cultura">
        <label for="Economia">Economia:</label>
        <input type="checkbox" name="Economia" id="Economia">
        <label for="Jogos">Jogos:</label>
        <input type="checkbox" name="Jogos" id="Jogos">
        <label for="Educacao">Educacao:</label>
        <input type="checkbox" name="Educacao" id="Educacao">

        <label for="Viagem">Viagem:</label>
        <input type="checkbox" name="Viagem" id="Viagem">
        <label for="Empregos">Empregos:</label>
        <input type="checkbox" name="Empregos" id="Empregos">
        <label for="Moda">Moda e estilo:</label>
        <input type="checkbox" name="Moda" id="Moda">
        <label for="usa">Li e aceito as regras de cadastro e autorizo a criacao do usario:</label>
        <input type="checkbox" name="usa" id="usa">
        <input type="submit" id="enviar">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $cpf = $_POST["cpf"];
    $uf = $_POST["uf"];
    $cep = $_POST["cep"];
    $fax = $_POST["fax"];
    $cel = $_POST["cel"];
    $datanas = $_POST["datanas"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $end = $_POST["end"];
    $web = $_POST["web"];
    $nomecom = $_POST["namecom"];
    $esc = $_POST["esc"];
    $tec = isset($_POST["tec"]) ? $_POST["tec"] : "";
    $esportes = isset($_POST["esportes"]) ? $_POST["esportes"] : "";
    $moda = isset($_POST["Moda"]) ? $_POST["Moda"] : "";
    $viagem = isset($_POST["Viagem"]) ? $_POST["Viagem"] : "";
    $edu = isset($_POST["Educacao"]) ? $_POST["Educacao"] : "";
    $jogos = isset($_POST["Jogos"]) ? $_POST["Jogos"] : "";
    $Economia = isset($_POST["Economia"]) ? $_POST["Economia"] : "";
    $tempo = isset($_POST["Tempo"]) ? $_POST["Tempo"] : "";
    $Policial = isset($_POST["Policial"]) ? $_POST["Policial"] : "";
    $Politica = isset($_POST["Politica"]) ? $_POST["Politica"] : "";
    $Automotiveis = isset($_POST["Automotiveis"]) ? $_POST["Automotiveis"] : "";
    $Cultura = isset($_POST["Cultura"]) ? $_POST["Cultura"] : "";
    $Culinaria = isset($_POST["Culinaria"]) ? $_POST["Culinaria"] : "";
    $email = $_POST["email"];
    $Empregos = isset($_POST["Empregos"]) ? $_POST["Empregos"] : ""; 
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $handle = fopen("bancodedados.txt", "a");
    fwrite($handle,"Nome: $name\n");
    fwrite($handle, "Nome completo: $nomecom\n");
    fwrite($handle, "CPf: $cpf\n");
    fwrite($handle, "Email: $email\n");
    fwrite($handle, "WebSite: $web\n");
    fwrite($handle, "Endereco: $end\n");
    fwrite($handle, "Bairro: $bairro\n");
    fwrite($handle, "CEP: $cep\n");
    fwrite($handle, "Telfone: $tel\n");
    fwrite($handle, "data de nascimento: $datanas\n");
    fwrite($handle, "Celular : $cel\n");
    fwrite($handle, "Cidade : $cidade\n");
    fwrite($handle, "Uf:$uf\n");
    fwrite($handle, "Fax:$fax\n");
    fwrite($handle, "Estado Civil:$esc\n");
    fwrite($handle, "tec : $tec\n");
    fwrite($handle, "Esportes:$esportes\n");
    fwrite($handle, "Automoveis : $Automotiveis\n");
    fwrite($handle, "Culinaria:$Culinaria\n");
    fwrite($handle, "Politica :$Politica \n");
    fwrite($handle, "Policial :$Policial \n");
    fwrite($handle, "Tempo : $tempo \n");
    fwrite($handle, "Cultura : $Cultura \n");
    fwrite($handle, "Economia : $Economia\n");
    fwrite($handle, "Jogos : $jogos\n");
    fwrite($handle, "Educacao : $edu \n");
    fwrite($handle, "Viagem : $viagem \n");
    fwrite($handle, "Empregos : $Empregos \n");
    fwrite($handle, "Moda : $moda \n");
    fclose($handle);
}
?>

</div>
</body>
</html>
