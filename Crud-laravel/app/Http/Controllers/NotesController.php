<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;


class NotesController extends Controller
{
    public function index()
    {
        $notas = Nota::all();
        //dd($notas);
        return view('Notes', ['notas'=>$notas]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Nota::create($request->all());
        return redirect()->route('notes-index');
    }

    public function show($id)
    {
        $notas = Nota::where('id',$id)->first();
        if(!empty($notas))
        {
            return view('read', ['notas'=>$notas]);
        }
        else
        {
            return redirect()->route('notes-index');
        }
    }

    public function edit($id)
    {
        $notas = Nota::where('id',$id)->first();
        if(!empty($notas))
        {
            return view('edit', ['notas'=>$notas]);
        }
        else
        {
            return redirect()->route('notes-index');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
        ];
        Nota::where('id',$id)->update($data);
        return redirect()->route('notes-index');
    }

    public function destroy($id)
    {
        Nota::where('id',$id)->delete();
        return redirect()->route('notes-index');
    }
}
