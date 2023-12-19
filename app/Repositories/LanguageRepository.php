<?php

namespace App\Repositories;

use App\Models\Bahasa;

class LanguageRepository
{
    protected $model;

    public function __construct(Bahasa $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function add(){
        return new $this->model();
    }

    public function create($data){

        return $this->model->create($data);
    }


    public function update($id, $data)
    {
        $klien = $this->model->find($id);
        $klien->update($data);
        return $klien;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
