<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collapse dentro de Collapse</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script type="text/javascript" src="jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>
    <div style="text-align:center;
                ">    
        <form method="POST">
            <input type="submit" value="Collapse(1)" name="Botão"
            data-toggle="collapse" href="#link1" class="btn btn-success"></input>
            <?php if(isset($_POST['Botão'])) { ?>
                <div>
                    <a id="link1" href="#link" data-toggle="collapse">Collapse(2)</a>
                    <div id="link" class="collapse" >
                                *Esta é a mensagem do Collpase dentro do Collapse*
                    </div>
                    <?php } else {
                        echo "</br>Clique no Botão acima";
                    } ?>
                </div>    
        </form> 
    </div>    
</body>
</html>
