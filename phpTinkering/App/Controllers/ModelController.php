<?php

namespace App\Controllers;

use App\Models\Models;

class ModelController
{
    // Función index
    public function index()
    {
        // Obtenemos todos los modelos
        $models = Models::getAll();

        // Pasamos los modelos a la vista
        return view('/models/index', ['models' => $models]);
    }

    // Función para ir a la vista create
    public function create()
    {
        return view('/models/create');
    }

    // Función para guardar los datos y volver a la vista principal
    public function store($data)
    {
        // Llamamos a la función create del modelo
        Models::create($data);

        // Redirigimos a la página con la base de datos actualizada
        header('location: /models');
        exit;
    }

    // Función para la vista edit
    public function edit($id)
    {
        // If no ID is provided, redirect to the models list
        if ($id === null) {
            header('location: /models');
            exit;
        }

        // Find the model by ID
        $model = Models::find($id);

        // If the model is not found, show 404 error
        if (!$model) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        // Return the edit view with the model data
        return view('models/edit', ['model' => $model]);
    }

    // Función update para modificar el modelo en la base de datos
    public function update($id, $data)
    {
        // Modificamos
        Models::update($id, $data);

        // Retornamos a la página principal
        header('location: /models');
        exit;
    }

    // Función para ir a la vista delete
    public function delete($id)
    {
        // Si no nos pasan la id, hacemos redirect
        if ($id === null) {
            header('location: /models');
            exit;
        }

        // Buscamos el modelo
        $model = Models::find($id);

        // Retornamos la vista para confirmar la eliminación
        return view('models/delete', ['model' => $model]);
    }

    // Función para eliminar el modelo de la base de datos
    public function destroy($id)
    {
        // Utilizamos la función delete del modelo
        Models::delete($id);

        // Redirigimos a la vista
        header('location: /models');
        exit;
    }
}