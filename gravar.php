<?php
  if($_POST['btn1']==true){
    $file= fopen("dados.txt","a");
    $line=sprintf("E-mail=  %s Nickname= %s \r\n",
    $_POST['email'],$_POST['nick']);
    fwrite($file,$line);
    fclose($file);

    $file2= fopen("form2.html","r");
    while(!feof($file2)){
    $line2 = fgets($file2);
    echo $line2;}
    fclose($file2);
  }
?>

<?php
  if($_POST['btn2']==true){
    $file= fopen("dados.txt","a");
    $line=sprintf("Nome= %s Endereço= %s Telefone= %d \r\n",
    $_POST['nome'],$_POST['endereco'],(int)$_POST['telefone']);
    fwrite($file,$line);
    fclose($file);

    $file2= fopen("form3.html","r");
    while(!feof($file2)){
    $line2 = fgets($file2);
    echo $line2;}
    fclose($file2);
  }
?>

<?php
  if($_POST['btn3']==true){
    $file= fopen("dados.txt","a");
    $line=sprintf("CPF= %d RG= %d Escolaridade= %s \r\n",
    $_POST['cpf'],$_POST['rg'],$_POST['escolaridade']);
    fwrite($file,$line);
    fclose($file);

    echo "Dados salvos com sucesso!";
  }
  
?>

