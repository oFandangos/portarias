<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;
use App\Http\Requests\PortariaRequest;
use App\Models\File;
use App\Models\Portaria;

class IndexController extends Controller
{
    public function index(){
        return view('index', ['file' => File::get()]);
    }

    public function store(PortariaRequest $request, FileRequest $fileRequest){
        $portaria = new Portaria;
        $validated = $request->validated();
        $portaria = Portaria::create($validated);
        $validatedFile['portaria_id'] = $portaria->id;
        $validatedFile['original_name'] = $request->file('file')->getClientOriginalName();
        $validatedFile['path'] = $request->file('file')->store('.');
        File::create($validatedFile);
        return redirect()->back()->with('success','Enviado com sucesso');
    }
}
