<?php

function check_db(array $words) {
    global $db;
    $result = array();
    foreach ($words as $word) {
        $query = 'SELECT * FROM words
              WHERE words.wordName = :word';
        $statement = $db->prepare($query);
        $statement->bindValue(':word', $word);
        $statement->execute();
        $fetched = $statement->fetchAll();
        $statement->closeCursor();
        if (sizeof($fetched) != 1) {
            array_push($result, $word);
        }
        unset($fetched);
    }

    return $result;
}
