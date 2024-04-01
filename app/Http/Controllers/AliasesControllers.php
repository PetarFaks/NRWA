<?php

namespace App\Http\Controllers;

use App\Aliases;

use Illuminate\Http\Request;

class AliasesController extends Controller
{
  
    public function index()
    {
        $aliases = Aliases::all();
        return view('aliases.index', compact('aliases'));
    }

    
    public function create()
    {
        return view('aliases.create');
    }

   
    public function store(Request $request)
    {
        $alias = new Aliases();
        $alias->fill($request->all());
        $alias->save();
        return redirect('/aliases')->with('success', 'Alias created successfully!');
    }

  
    public function show($title_id, $ordering)
    {
        $alias = Aliases::findOrFail([$title_id, $ordering]);
        return view('aliases.show', compact('alias'));
    }

    
    public function edit($title_id, $ordering)
    {
        $alias = Aliases::findOrFail([$title_id, $ordering]);
        return view('aliases.edit', compact('alias'));
    }

    
    public function update(Request $request, $title_id, $ordering)
    {
        $alias = Aliases::findOrFail([$title_id, $ordering]);
        $alias->fill($request->all());
        $alias->save();
        return redirect('/aliases')->with('success', 'Alias updated successfully!');
    }

  
    public function destroy($title_id, $ordering)
    {
        $alias = Aliases::findOrFail([$title_id, $ordering]);
        $alias->delete();
        return redirect('/aliases')->with('success', 'Alias deleted successfully!');
    }
}
