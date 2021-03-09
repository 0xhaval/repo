<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Models\Discussion;
use App\Models\Project;
use App\Models\Reference;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.dashboard', [
            'users' => User::all(),
            'references' => Reference::all(),
            'projects' => Project::all(),
            'discussions' => Discussion::all()
        ]);
    }

    public function showAdmin(User $user)
    {
        return view('backend.admin.show', compact('user'));
    }

}
