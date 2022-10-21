<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formula</title>

    <?php
    if($_POST)
        echo"<h1>notas</h1>";
    $nombre=$_POST['txtNombre'];
    echo"el nombre del estudiante es $nombre";
    $nota1=$_POST['txtNota1'];
    $nota2=$_POST['txtNota2'];
    $nota3=$_POST['txtNota3'];
    echo $notas1;
    $Definitiva=($nota1+$nota2+$nota3)/3;
    echo"<br>Definitiva es: $Definitiva";
    
    ?>


</head>
<body>
    <nav>
        <h1>calcular notas definitivas</h1>
    </nav>
    <main>
        <section class="notas">
            <form action="" method="post">
                <label for="nombre">estudiante</label>
                <input type="text" name="txtNombre" id="">

                <label for="nota1">Nota1</label>
                <input type="text" name="txtNota1" id="">

                <label for="nota2">Nota2</label>
                <input type="text" name="txtNota2" id="">

                <label for="nota2">Nota3</label>
                <input type="text" name="txtNota3" id="">

                <input type="submit" value="calcular Nota">
            </form>
        </section>
    </main>
</body>
</html>