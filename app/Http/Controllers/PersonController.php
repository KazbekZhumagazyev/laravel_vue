<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Ivan',
                'age' => 22,
                'job' => 'developer'
            ],
            [
                'id' => 2,
                'name' => 'Elena',
                'age' => 20,
                'job' => 'teacher'
            ],
            [
                'id' => 3,
                'name' => 'John',
                'age' => 35,
                'job' => 'rest'
            ],
        ];
        return $persons;
    }
}
