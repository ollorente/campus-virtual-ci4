<?php

namespace App\Controllers\API\V1;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function create()
    {
        return view('welcome_message');
    }

    public function list()
    {
        return view('welcome_message');
    }

    public function get(string $id)
    {
        return view('welcome_message');
    }

    public function update(string $id)
    {
        return view('welcome_message');
    }

    public function delete(string $id)
    {
        return view('welcome_message');
    }
}
