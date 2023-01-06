

<?php
require_once('databaseClass.php');
class JokeForm
{
   

    

    public function AddJoke($text, $date)

    {
        $db = new Database;
        $pdo = $db->Connect();
        $sql = "INSERT INTO `joke`(`text`,`date`) VALUES (:text,:date,)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(":text", $text);
        $stmt->bindParam(":date",$date);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
 
   

    public  function updateJoke($joke_id ,$text, $date)
    {
                $db = new Database;
                $pdo = $db->Connect();
        
       
        $sql = "UPDATE joke SET  `text`=:text,`date`=:date,";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":joke_id",  $joke_id);
        $stmt->bindParam(":text", $text);
        $stmt->bindParam(":date",$date);
        if ($stmt->execute()) {
           
            return true;
        } else {
            return false;
        }
    }
    public  function delete_joke($joke_id)
    {
                $db = new Database;
                $pdo = $db->Connect();

        $sql = "DELETE FROM `joke` WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id",      $joke_id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
 
    }}
    