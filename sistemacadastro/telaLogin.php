<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela De Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, pink, lightblue);
        }
        div{
            background-color: rgba(255, 250, 250 , 0.5);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: aliceblue;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: #f5fffb;
            border: none;
            padding: 15px;
            width: 100%;
            font-family: 'Courier New', Courier, monospace;
            border-radius: 10px;
            color: pink;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: palevioletred;
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
    <div>
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
        <input type="text" name = "email" placeholder="Email"> 
        <br><br> 
        <input type="password" name = "senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>