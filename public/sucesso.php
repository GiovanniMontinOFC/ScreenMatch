<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $caminhoArquivo = 'public/filme.json';
        $conteudoArquivoFilme = file_get_contents($caminhoArquivo);
        $filme = json_decode($conteudoArquivoFilme, true);
    ?>
    <h1>Sucesso! Filme <?php echo $_GET['filme']; ?> inserido. </h1>
    <h3>Descrição: </h3>
    <?php 
        foreach($filme as $key => $value){
            $valueCorrigido = json_decode('"' . preg_replace('/\\\\u/', '\u', $value) . '"');

            echo '<p>' . $key . ': ' . $valueCorrigido . '</p>';
        }
    ?>
    

</body>
</html>