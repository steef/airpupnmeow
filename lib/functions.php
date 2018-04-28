<?php
    function get_pets() {
        $pdo = new PDO('mysql:dbname=air_pup;host=localhost', 'root', 'root');
        $result = $pdo->query('SELECT * FROM pet');
        $pets = $result->fetchAll();

        return $pets;
    }

    function save_pets($petsToSave) {
        $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
        file_put_contents('data/pets.json', $json);
    }