<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\TodoList;//追記

class Controller extends BaseController
{
    public function index(Request $request)
    {
      $todo_lists = TodoList::all();
 
      return view('todo_list.index', ['todo_lists' => $todo_lists]);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
