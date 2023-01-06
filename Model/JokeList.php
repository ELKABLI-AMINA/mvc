
<?php
require_once('databaseClass.php');
class JokeList{

public  function getJoke($option, $joke_id)
{
    $db = new Database;
    $pdo = $db->Connect();

    if ($option == "this_joke") {
                $sql = "SELECT * FROM joke where id=:joke_id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":joke_id", $joke_id);
            } else {
                $sql = "SELECT * FROM joke";
                $stmt = $pdo->prepare($sql);
            }
            $stmt->execute();
            $rows = $stmt->fetchAll();
            if (!empty($rows)) {
                return $rows;
            } else {
                return false;
            }
        }
}
