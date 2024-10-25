<?php

namespace App\Models;

use Core\App;

class Model
{
    protected static $table = 'models';

    // Función para obtener todos los modelos
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    // Función para buscar un modelo por ID
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(['id' => $id]);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    // Función para crear un nuevo modelo
    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO ' . static::$table . " (marca, model, anyFabricacio, preu) VALUES (:marca, :model, :anyFabricacio, :preu)");
        $statement->bindValue(':marca', $data['marca']);
        $statement->bindValue(':model', $data['model']);
        $statement->bindValue(':anyFabricacio', $data['anyFabricacio']);
        $statement->bindValue(':preu', $data['preu']);
        $statement->execute();
    }

    // Función para actualizar un modelo
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE " . static::$table . " SET marca = :marca, model = :model, anyFabricacio = :anyFabricacio, preu = :preu WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':marca', $data['marca']);
        $statement->bindValue(':model', $data['model']);
        $statement->bindValue(':anyFabricacio', $data['anyFabricacio']);
        $statement->bindValue(':preu', $data['preu']);
        $statement->execute();
    }

    // Función para eliminar un modelo
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}
