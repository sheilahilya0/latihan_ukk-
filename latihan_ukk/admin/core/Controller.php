<?php

class Controller
{
    public function model($model)
    {
          require_once '../admin/models/' . $model . '.php';
            return new $model;
    
    }
}