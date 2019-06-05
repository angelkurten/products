<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

class EloquentBaseRepository
{

    protected $obj;

    public function setModel(Model $model)
    {
        $this->obj =  $model;
    }

    public function __call($method, $arguments)
    {
        if(is_null($this->obj)){
            $class = $this->getModel();
            $this->obj = new $class;
        }
        return $this->obj->$method(...$arguments);
    }

}