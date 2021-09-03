<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    public function index(){
         //get data from db
     //$pizzas = Pizza::all();
     //$pizzas = Pizza::OrderBy('name', 'desc')->get();
     //$pizzas = Pizza::Where('type','Hawaiian')->get();
     $pizzas = Pizza::latest()->get();

     return view('pizzas', [
        'pizzas'=>$pizzas,
        'name'=> request('name'),
        'age'=> request('age')
    ]);

    }

    public function show($id){
    //use the $id variable to query the db for a record
    return view('details', ['id'=> $id]);
    }
}
