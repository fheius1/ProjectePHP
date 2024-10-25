<?php

namespace App\Controllers\VehicleController;

use App\Models\Model;

class VehicleController
{
    // Función index
    public function index()
    {
        // Obtenemos todos los modelos
        $models = Model::getAll();

        // Pasamos los modelos a la vista
        return view('models/index', ['models' => $models]);
    }

    // Función para ir a la vista create
    public function create()
    {
        return view('models/create');
    }

    // Función para guardar los datos y volver a la vista principal
    public function store($data)
    {
        // Llamamos a la función create del modelo
        Model::create($data);

        // Redirigimos a la página con la base de datos actualizada
        header('location: /models');
        exit;
    }

    // Función para la vista edit
    public function edit($id)
    {
        // Si no nos pasan la id, hacemos redirect
        if ($id === null) {
            header('location: /models');
            exit;
        }

        // Buscamos el modelo
        $model = Model::find($id);

        // Si no encontramos el modelo, mostrar 404
        if (!$model) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        // Retornamos la vista y le pasamos el modelo indicado
        return view('models/edit', ['model' => $model]);
    }

    // Función update para modificar el modelo en la base de datos
    public function update($id, $data)
    {
        // Modificamos
        Model::update($id, $data);

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
        $model = Model::find($id);

        // Retornamos la vista para confirmar la eliminación
        return view('models/delete', ['model' => $model]);
    }

    // Función para eliminar el modelo de la base de datos
    public function destroy($id)
    {
        // Utilizamos la función delete del modelo
        Model::delete($id);

        // Redirigimos a la vista
        header('location: /models');
        exit;
    }
}