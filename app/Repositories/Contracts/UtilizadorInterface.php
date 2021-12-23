<?php


namespace App\Repositories\Contracts;

interface UtilizadorInterface{

    // public function all(){
        
    //     return "todos";
    // }

    // public function get($id){

    // }

    public function store(array $input);

    

    public function update(array $input, $id);
    // public function delete($id){

    // }

    
}