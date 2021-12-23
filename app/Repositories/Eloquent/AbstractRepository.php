<?php

namespace App\Repositories\Eloquent;

abstract class abstractRepository
{

    protected $model;
    public function __contruct(){
        $this->model=$model;
    }

    protected function resolveModel(){
       
    }

     public function all(){
        
        return "todos";
    }

    public function get($id){

    }

    public function store(array $input){
        
    }

    

    public function update(array $input, $id){

    }

    public function delete($id){

    }

}