<?php

namespace Acme\App\Repositories;

interface PostRepositoryInterface{

    /**
     * @return array
     */
    public function All();

    /**
     * @param integer $id
     * @return object
     */
    public function Find($id);

}