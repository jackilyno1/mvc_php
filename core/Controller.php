<?php
class Controller{
    public function model($model){
        if (file_exists(_DIR_ROOT . '/app/models/ProductModel.php')) {
            require_once _DIR_ROOT . '/app/models/ProductModel.php';
            if (class_exists($model)) {
                $model = new ProductModel();
                return $model;
            }
        }
        if (file_exists(_DIR_ROOT . '/app/models/HomeModel.php')) {
            require_once _DIR_ROOT . '/app/models/HomeModel.php';
            if (class_exists($model)) {
                $model = new HomeModel();
                return $model;
            }
        }
        return false;
    }

    public function render($view, $data=[]){
        extract($data);

        if (file_exists(_DIR_ROOT . '/app/views/' . $view . '.php')) {
            require_once _DIR_ROOT . '/app/views/' . $view . '.php';
        }
    }
}