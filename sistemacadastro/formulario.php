<?php

if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereço = $_POST['endereço'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereço) 
        VALUES('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereço')");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, lightblue, pink);
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(53, 49, 49, 0.3);
            padding: 15px;
            border-radius: 15px;
            color: white;
        }
        fieldset{
            border: 3px solid lightpink
        }
        legend{
            border: 1px solid lightpink;
            border-radius: 5px;
            padding: 10px;
            background-color: lightpink;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            transition: .5s;
            top: -20px;
            font-size: 12px;
            color: hsl(328, 77%, 88%);
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 8px;
            outline: none;
        }
        #submit{
            width: 100%;
            padding: 8px;
            color: white;
            background-color: lightpink;
            border: none;
            border-radius: 8px;
        }
        #submit:hover{
            background-color: palevioletred;
            cursor:pointer;
        }
         a{
            color: white;
            text-decoration: none;
            border: 3px solid white;
            border-radius: 10px;
            padding: 10px;
            position: relative;
            display: block;
            margin-top: 1%;
            margin-right: 95%;
        }
        a:hover{
            cursor: pointer;
            background-color: palevioletred;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>  
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput" >Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput" >Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput" >Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput" >Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b> </label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>      
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput" >Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput" >Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereço" id="endereço" class="inputUser" required>
                    <label for="endereço" class="labelInput" >Endereço</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>