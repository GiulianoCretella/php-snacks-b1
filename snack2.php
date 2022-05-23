<?php 
## Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
$nome = $_GET['nome'];
$eMail = $_GET['email'];
$eta= $_GET['eta'];
if(empty($nome) && empty($eMail) && empty($eta)){
    $messaggio= 'Inserisci Credenziali';
}elseif (strlen($nome) > 3  && strpos($eMail,'@') !== false && strpos($eMail,'.') !== false && is_numeric($eta)){
    $messaggio='Accesso Consentito!';
}else{
    $messaggio='Accesso Negato!';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $messaggio ?></h1>
</body>
</html>