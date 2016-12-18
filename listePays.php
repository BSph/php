?php
  $pdo=new PDO('mysql:host=localhost; dbname=villeseurope; charset=utf8',
               'root','');

  $statement=$pdo->prepare("SELECT DISTINCT paysV"
                          ." FROM villes"
                          ." ORDER BY paysV ASC"
                          ." ;");
  $statement->execute();
  $results=$statement->fetchAll(PDO::FETCH_ASSOC);
  $json=json_encode($results);
  echo $json;
?>
