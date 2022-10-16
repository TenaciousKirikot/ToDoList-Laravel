<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Task as Task;

class WebsiteController extends Controller
{        
    public function Homepage() 
    {   
        $table = new Task;
        $data = $table->all();

        return view('homepage', ['data' => $data]);
    }

    public function Add(Request $request) 
    {
        echo var_dump($request);

        $validated = $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:500'
        ]);

        /*$table = new Task;
        $table->title = $request->input('title');
        $table->description = $request->input('description');
        $table->starts = $request->input('starts');
        $table->ends = $request->input('ends');
        $table->status = $request->input('status');
        $table->save();*/

        return redirect()->route('homepage');
    }
    
    public function Delete(Request $request) 
    {
        DB::table('tasks')->where('id', $request['id'])->delete();

        return redirect()->route('homepage');
    }
}