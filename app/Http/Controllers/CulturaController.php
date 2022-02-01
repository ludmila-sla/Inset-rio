<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cultura;

class CulturaController extends Controller
{
    public function index() {

        $cultura = Cultura::all();
    
        return view('welcome',['cultura' => $cultura]);

    }

    public function create() {
        return view('insetos/cadastro_cultura');
    }

    public function store(Request $request) {

        $cultura = new Cultura;

        $cultura->nome = $request->nome;


        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $cultura->image = $imageName;

        }

       $cultura->save();

        return redirect('dashboard')->with('msg', 'Cultura criada com sucesso!');

    }

    public function destroy($id) {

        Cultura::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Cultura excluída com sucesso!');

    }
    public function edit(int $id) {

        $cultura =Cultura::findOrFail($id);
       


        return view('insetos/editcultura',['cultura' => $cultura]);

    }
    public function update(Request $request) {



        $cultura = $request->all();
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $cultura['image'] = $imageName;

        }
        Cultura::findOrFail($request->id)->update($cultura);

        return redirect('dashboard')->with('msg', 'cultura alterada com sucesso!');
    }
}
