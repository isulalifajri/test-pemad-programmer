<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    protected $model;

    public function __construct(Project $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        // return $this->model->all();
        return $this->model->where('status', null)->get();
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
