<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeopleController extends Controller
{

    private $users;

    public function __construct()
    {
        
        $this->users = User::all();
    }
    
    public function index()
    {
        $peoples = People::all();
        return view('list-peoples', ['peoples' => $peoples]);
    }

    public function create()
    {
        return view('create-people', ['users' => $this->users]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'user_id' => 'required',
        ], [
            'name.required' => 'Preencha o campo Nome',
            'age.required' => 'Preencha o campo Idade',
            'user_id.required' => 'Selecione um email'
        ]);

        $people = new People;
        $people->name = $request->name;
        $people->age = $request->age;
        $people->user_id = $request->user_id;
        $people->save();

        return redirect()->back();

    }

    public function edit(People $people)
    {
        return view('edit-people', [
            'people' => $people,
            'users' => $this->users
        ]);
    }

    public function update(Request $request, People $people)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'user_id' => 'required',
        ], [
            'name.required' => 'Preencha o campo Nome',
            'age.required' => 'Preencha o campo Idade',
            'user_id.required' => 'Selecione um email'
        ]);

        $people->name = $request->name;
        $people->age = $request->age;
        $people->user_id = $request->user_id;
        $people->save();

        return redirect()->route('list.peoples');
    }

    public function destroy(People $people)
    {
        $people->delete();

        return redirect()->route('list.peoples');
    }
}
