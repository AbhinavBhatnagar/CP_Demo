

<?php
//phpinfo();
$manager = new MongoDB\Driver\Manager("mongodb://localhost");

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(array( "title" => "Calvin and Hobbes", "author" => "Bill Watterson" ));
$bulk->insert(array( "title" => "XKCD", "online" => true ));
$manager->executeBulkWrite('test.cartoons', $bulk);
$query = new MongoDB\Driver\Query([]);
$rows = $manager->executeQuery("test.cartoons", $query);

  foreach ($rows as $row) {

      var_dump($row);
  }


?>
