<?php

namespace App\Http\Controllers;

use App\Models\Cartilla;
use Illuminate\Http\Request;
use App\Models\Animale;
/**
 * Class CartillaController
 * @package App\Http\Controllers
 */
class CartillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartillas = Cartilla::paginate();

        return view('cartilla.index', compact('cartillas'))
            ->with('i', (request()->input('page', 1) - 1) * $cartillas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartilla = new Cartilla();
        $animales = Animale::pluck('especie', 'id');

        return view('cartilla.create', compact('cartilla', 'animales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cartilla::$rules);

        $cartilla = Cartilla::create($request->all());

        return redirect()->route('cartillas.index')
            ->with('success', 'Cartilla created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cartilla = Cartilla::find($id);
        return view('cartilla.show', compact('cartilla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cartilla = Cartilla::find($id);
        $animales = Animale::pluck('especie', 'id');
        return view('cartilla.edit', compact('cartilla', 'animales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cartilla $cartilla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartilla $cartilla)
    {
        request()->validate(Cartilla::$rules);

        $cartilla->update($request->all());

        return redirect()->route('cartillas.index')
            ->with('success', 'Cartilla updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cartilla = Cartilla::find($id)->delete();

        return redirect()->route('cartillas.index')
            ->with('success', 'Cartilla deleted successfully');
    }
}
