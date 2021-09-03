<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
         //get data from db
     $pizzas = [
        ['type'=>'Hawaian','base'=>'cheese crust'],
        ['type'=>'volcano','base'=>'cheese crust'],
        ['type'=>'veg supreme','base'=>'thick & cripsy']
     ];

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
