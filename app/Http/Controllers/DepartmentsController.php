<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departments;


class DepartmentsController extends Controller
{
    public function index()
    {
        return Departments::all("name");
    }
}
