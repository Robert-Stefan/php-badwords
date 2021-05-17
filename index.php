<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    

<!--  DESCRIZIONE:
Creare una variabile con assegnato un testo per popolare un paragrafo.
Visualizzare a schermo il paragrafo.
Visualizzare a schermo la lunghezza di testo del paragrafo.
Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi, ottenere il suo valore con GET in PHP e sostituire ogni ricorrenza di questa parola, all'interno del testo creato da voi sopra, con tre *.
Stampare a schermo il paragrafo con il testo censurato. -->

<?php
    //Creo variabile con del testo all'interno
    $text = 'lorem ipsum dolor sit amet, consectetur adipisicing elit. sit consequuntur nesciunt cupiditate corporis? dolor recusandae facere enim assumenda adipisci consequuntur saepe officia eligendi voluptatum, eaque ad eos omnis culpa asperiores.';
    
    //Creo variabile per la lunghezza del testo
    $length = 'La lunghezza è di:' . ' ' . strlen($text) . ' ' . 'caratteri!';

    //Creo variabile per prendere la parola da URL
    $badword = $_GET['badword'];

    //Uso replace
    $replaced = str_replace($badword, '***', $text );

?>
    <!--STAMPO-->
    <p> <?php echo $text ?> </p>
    <p> <?php echo $length; ?> </p>
    <p> <?php echo 'Testo "replace" tramite URL:' . ' ' . $replaced; ?> </p>

</body>
</html>