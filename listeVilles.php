<?php
  $nomP= $_GET['nomPays'];
  $pdo=new PDO('mysql:host=localhost; dbname=villeseurope; charset=utf8',
               'root', '');

  $statement=$pdo->prepare("SELECT idV, nomV"
                          ." FROM villes"
                          ." WHERE paysV=:pays"
                          ." ORDER BY nomV ASC"
                          ." ;");
  $statement->execute([':pays'=>$nomP]);
  $results=$statement->fetchAll(PDO::FETCH_ASSOC);
  $json=json_encode($results);

  echo $json;
?>
