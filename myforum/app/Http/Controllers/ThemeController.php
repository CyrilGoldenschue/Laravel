<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThemeController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::all();
        return view ('themes.index', ['themes' => $themes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theme = new Theme();
        return view ('themes.create')->with(compact('theme'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $theme = new Theme();
        $theme->name = $request->input('name');
        $theme->save();
        return redirect(route('themes.index'))->with('message','Thèmes ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $theme = Theme::find($id);
        return view ('themes.show')->with(compact('theme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $theme = Theme::find($id);
        return view ('themes.update')->with(compact('theme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $theme = Theme::find($id);
        $theme->name = $request->input('name');
        $theme->save();
        $request->session()->flash('message', 'Modification enregistrée');
        return view ('themes.show')->with(compact('theme'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theme = Theme::find($id);
        $theme->delete();
        return redirect(route('themes.index'))->with('message', 'Thème supprimé');
    }
}
