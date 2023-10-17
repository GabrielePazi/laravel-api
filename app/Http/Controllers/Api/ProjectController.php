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
        $projects = Project::with(['type', 'technologies'])->paginate(6);

        return response()->json($projects);
    }

    //riceve lo slug tramite querystring
    public function show(string $slug)
    {
        $project = Project::where("slug", $slug)->first();

        return response()->json($project);
    }
}
