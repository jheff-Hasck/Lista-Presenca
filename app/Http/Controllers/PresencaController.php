<?php

namespace App\Http\Controllers;

use App\Models\Presenca;
use Illuminate\Http\Request;

class PresencaController extends Controller
{
         public function index()
    {
        $presencas = Presenca::all();
        return view('presencas.index', compact('presencas'));
    }

            public function create()


    {
        return view('presencas.create');
    }

    public function store(Request $request)
    {
          $request->validate([
            'nome' => 'required',
            'email' => 'required|email:presencas',
            'presente' => 'required|boolean',  
        ]);
        
                Presenca::create($request->all());
        return redirect()->route('presencas.index');
    }

            public function show(Presenca $presenca)
    {
                return view('presencas.show', compact('presenca'));
    }

        public function edit(Presenca $presenca)
    {
        return view('presencas.edit', compact('presenca'));
    }

        public function update(Request $request, Presenca $presenca)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email:presencas,email,' . $presenca->id,
        ]);
        
        $presenca->update($request->all());
        return redirect()->route('presencas.index');
    }

    public function destroy(Presenca $presenca)
    {
        $presenca->delete();
        return redirect()->route('presencas.index');
    }

   
    public function exportarTxt()
    {
        
        $presencas = Presenca::all();

        
        $headers = "Nome\tEmail\tPresente\n"; 

       
        $content = '';
        
        foreach ($presencas as $presenca) {
            $content .= $presenca->nome . "\t" . $presenca->email . "\t" . ($presenca->presente ? 'Sim' : 'Não') . "\n";
        }

       
        $fileName = 'lista_de_presenca.csv';

        
        return response($headers . $content)
            ->header('Content-Type', 'text/plain')
            ->header('Content-Disposition', 'attachment; filename="' . $fileName . '"');
    }
}
