<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Inseto;
use App\Models\Cultura;

class InsetosController extends Controller
{
    public function index() {
        $search = request('search');
        if($search) {

            $insetos = Inseto::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();

        } else {
          
            $insetos = Inseto::all();
        }   
      

        return view('welcome',['insetos' => $insetos, 'search' => $search]);

    }

    public function create() {
        $culturas = Cultura::all();
        return view('insetos/cadastro_insetos', compact('culturas'));
    }

    public function store(Request $request) {

        $inseto = new Inseto;
        $inseto->cultura_id = $request->cultura_id;
        $inseto->nome = $request->nome;
        $inseto->nomecientifico = $request->nomecientifico;

        $inseto->autor = $request->autor;
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/inseto'), $imageName);

            $inseto->image = $imageName;

        }




      $inseto->save();

        return redirect('dashboard')->with('msg', 'inseto criado com sucesso!');

    }
    public function dashboard() {



        $search = request('search');
        if($search) {

            $insetos = Inseto::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();

        } else {
          
            $insetos = Inseto::all();
            $culturas=Cultura::all();
        }   
      


        return view('dashboard',['insetos' => $insetos, 'search'=>$search, 'culturas'=> $culturas]);


    }
    public function edit(int $id) {

        $inseto =Inseto::findOrFail($id);
        $culturas=Cultura::all();


        return view('insetos/editinsetos',['inseto' => $inseto, 'culturas'=> $culturas]);

    }
    public function destroy($id) {

        Inseto::findOrFail($id)->delete();

        return redirect('dashboard')->with('msg', 'Inseto excluído com sucesso!');

    }
    public function update(Request $request) {



        $inseto = $request->all();
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/inseto'), $imageName);

            $inseto['image'] = $imageName;

        }
        Inseto::findOrFail($request->id)->update($inseto);

        return redirect('dashboard')->with('msg', 'inseto alterado com sucesso!');
    }

}
