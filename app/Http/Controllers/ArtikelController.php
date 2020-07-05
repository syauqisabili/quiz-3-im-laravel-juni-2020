<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function home(){
        return view('home');
    }

    public function index(){
        $items = ArtikelModel::getAllData();
        return view('article.index', compact($items));
    }

    public function create(){
        return view('article.form');
    }

    public function store(Request $request){
        ArtikelModel::insertData($request->all());
        return redirect('/article');
    }

    public function show($id){

        $item= ArtikelModel::findDataById($id);
        return view('article.show', compact('item'));
    }

    public function edit($id){

        $item= ArtikelModel::findDataById($id);
        return view('article.edit', compact('item'));
    }

    public function update(Request $request, $id){

        ArtikelModel::updateDataById($request->all(), $id);
        $redirect = '/article/' . $id;
        redirect($redirect);
    }

    public function destroy($id){

        ArtikelModel::deleteDataById($id);
        return redirect('/article');
    }
}
