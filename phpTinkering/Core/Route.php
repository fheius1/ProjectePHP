<?php
//Fitxer per gestionar les rutes
namespace Core;

use App\Controllers\HomeController;
use RuntimeException;

class Route
{
    //creem array en les rutes
    protected $routes = [];

    //creem funcio per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    //funcio per rebre un array de rutes i assignar a la propietat routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirect($uri)
    {

        //partim la url
        $parts = explode('/', trim($uri, '/'));
        //indiquem ruta del controlador
        $controllerFilm = 'App\Controllers\FilmController';
        $controllerModel = 'App\Controllers\ModelController';

        //Inici
        if ($uri === '/') {
            require '../App/Controllers/HomeController.php';
            //creem nova instancia
            $controllerInstance = new HomeController();
            return $controllerInstance->index();
        }

        //films
        if ($uri === '/films') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controllerFilm();
            return $controllerInstance->index();
        }


        //models
        if ($uri === '/models') {
            require '../App/Controllers/ModelController.php';
            //creem nova instancia
            $controllerInstance = new $controllerModel();
            return $controllerInstance->index();
        }

        //create per a films
        if ($parts[0] === 'create') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controllerFilm();
            return $controllerInstance->create();
        }

        //create per a models
        if ($uri === '/models/create') {  // Cambia la ruta según cómo lo llamas en tu vista
            require '../App/Controllers/ModelController.php';
            $controllerInstance = new $controllerModel();
            return $controllerInstance->create(); // Asegúrate de tener un metodo create en ModelController
        }



        //Utilitzant POST guardem per a films
        if ($parts[0] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controllerFilm();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        //Utilitzant POST guardem per a models
        if ($parts[0] === 'models' && $parts[1] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/ModelController.php';
            $controllerInstance = new $controllerModel();
            $data = $_POST;
            return $controllerInstance->store($data);
        }



        //delete en GET  mirem que sigue delete en la id
        if ($parts[0] === 'delete' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controllerFilm();
            return $controllerInstance->delete($parts[1]);
        }

        //delete en GET per a models
        if ($parts[0] === 'models-delete' && isset($parts[1])) {
        require '../App/Controllers/ModelController.php';
        $controllerInstance = new $controllerModel();
        return $controllerInstance->delete($parts[1]);
    }

        //destroy en POST
        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controllerFilm();
            //comprovem si pasen id
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }


        //destroy en POST per a models
        if ($parts[0] === 'models-destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/ModelController.php';
            //creem nova instancia
            $controllerInstance = new $controllerModel();
            //comprovem si pasen id
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }




        //edit en GET per a films
        if ($parts[0] === 'edit' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controllerFilm();
            return $controllerInstance->edit($parts[1]);
        }
        if ($parts[0] === 'models-edit' && $parts[1]) {
            require '../App/Controllers/ModelController.php';
            //creem nova instancia
            $controllerInstance = new $controllerModel();
            return $controllerInstance->edit($parts[1]);
        }

        //edit en GET per a models
        if ($parts[0] === 'models' && $parts[1] === 'edit' && isset($parts[2])) {
            require '../App/Controllers/ModelController.php';
            $controllerInstance = new $controllerModel();
            return $controllerInstance->edit($parts[2]); // Pass the model id to edit
        }


        //Actualitzar en POST per a films
        if ($parts[0] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controllerFilm();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            //comprovem si pasen id
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }

        //Actualitzar en POST per a models
        if ($parts[0] === 'models-update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/ModelController.php';
            //creem nova instancia
            $controllerInstance = new $controllerModel();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            //comprovem si pasen id
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }


        //si no es cap dels anteriors retornem la vista 404
        return require '../resources/views/errors/404.blade.php';
    }
}