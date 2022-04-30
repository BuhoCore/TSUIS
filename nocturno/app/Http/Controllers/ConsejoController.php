<?php

namespace App\Http\Controllers;

use App\Models\Consejo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ConsejoExport;


/**
 * Class ConsejoController
 * @package App\Http\Controllers
 */
class ConsejoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function export() 
    {
        return Excel::download(new ConsejoExport, 'consejos.xlsx');
    }

    public function index()
    {
        $consejos = Consejo::paginate();

        return view('consejo.index', compact('consejos'))
            ->with('i', (request()->input('page', 1) - 1) * $consejos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consejo = new Consejo();
        return view('consejo.create', compact('consejo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Consejo::$rules);

        $consejo = Consejo::create($request->all());

        return redirect()->route('consejos.index')
            ->with('success', 'Consejo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consejo = Consejo::find($id);

        return view('consejo.show', compact('consejo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consejo = Consejo::find($id);

        return view('consejo.edit', compact('consejo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Consejo $consejo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consejo $consejo)
    {
        request()->validate(Consejo::$rules);

        $consejo->update($request->all());

        return redirect()->route('consejos.index')
            ->with('success', 'Consejo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consejo = Consejo::find($id)->delete();

        return redirect()->route('consejos.index')
            ->with('success', 'Consejo deleted successfully');
    }
}
