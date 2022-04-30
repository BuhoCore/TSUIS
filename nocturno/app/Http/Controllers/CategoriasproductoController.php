<?php

namespace App\Http\Controllers;

use App\Models\Categoriasproducto;
use Illuminate\Http\Request;

/**
 * Class CategoriasproductoController
 * @package App\Http\Controllers
 */
class CategoriasproductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriasproductos = Categoriasproducto::paginate();

        return view('categoriasproducto.index', compact('categoriasproductos'))
            ->with('i', (request()->input('page', 1) - 1) * $categoriasproductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriasproducto = new Categoriasproducto();
        return view('categoriasproducto.create', compact('categoriasproducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Categoriasproducto::$rules);

        $categoriasproducto = Categoriasproducto::create($request->all());

        return redirect()->route('categoriasproductos.index')
            ->with('success', 'Categoriasproducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoriasproducto = Categoriasproducto::find($id);

        return view('categoriasproducto.show', compact('categoriasproducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriasproducto = Categoriasproducto::find($id);

        return view('categoriasproducto.edit', compact('categoriasproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Categoriasproducto $categoriasproducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoriasproducto $categoriasproducto)
    {
        request()->validate(Categoriasproducto::$rules);

        $categoriasproducto->update($request->all());

        return redirect()->route('categoriasproductos.index')
            ->with('success', 'Categoriasproducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoriasproducto = Categoriasproducto::find($id)->delete();

        return redirect()->route('categoriasproductos.index')
            ->with('success', 'Categoriasproducto deleted successfully');
    }
}
