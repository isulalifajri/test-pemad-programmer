<?php

namespace App\Repositories;

use App\Models\Permintaan;

class PermintaanRepository
{
    protected $model;

    public function __construct(Permintaan $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all()->sortByDesc('created_at');
        // return $this->model::with('project.klien')->get();;
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
