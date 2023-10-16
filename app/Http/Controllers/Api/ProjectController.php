<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        //gets the data from the database and creates a new Project istance for each found element
        $projects = Project::all();

        return response()->json($projects);
    }
}
