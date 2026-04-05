<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            margin: 0;
            height: 100vh;

            background-image: url("imagens/fundo.jpg");
            background-size: cover;       
            background-repeat: no-repeat; 
            background-position: center; 

            font-family:'Times New Roman', Times, serif;
            text-align: center;
            color: white
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            background-color: rgba(255, 192, 203, 0.6);
            padding: 30px;
            border-radius: 15px;

        }
        a{
            color: white;
            text-decoration: none;
            border: 3px solid white;
            border-radius: 10px;
            padding: 10px;

        }
        a:hover{
            cursor: pointer;
            background-color: palevioletred;
        }
    </style>
</head>
<body>
    <h1>Sistema de Cadastro!</h1>
    <h2>feito por Antônio Duarte</h2>
    <div class="box">
        <a href="telalogin.php">"Login!"</a>
        <a href="formulario.php">"Cadastre-se!"</a>
    </div>
</body>
</html>