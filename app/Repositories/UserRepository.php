<?php

namespace App\Repositories;

use App\Models\User;


class UserRepository
{
    protected $model;

    public function __construct(User $model)
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
        $user = $this->model->find($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
