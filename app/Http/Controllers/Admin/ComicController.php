<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string|min:5|max:250',
            'thumb' => 'nullable|url',
            'price' => 'required|numeric|min:1',
            'series' => 'required|string|min:1',
            'sale_date' => 'required|date',
            'type' => [
                'required',
                Rule::in(['graphic novel', 'comic book']),
            ],
        ]);

        $data = $request->all();
        
        $new_comic = new Comic();
        // $new_comic->title = $data['title'];
        // $new_comic->description = $data['description'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.index', $new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::where('id', $id)->get();
        // $comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string|min:5|max:250',
            'thumb' => 'nullable|url',
            'price' => 'required|decimal:2|min:1',
            'series' => 'required|string|min:1',
            'sale_date' => 'required|date',
            'type' => [
                'required',
                Rule::in(['graphic novel', 'comic book']),
            ],
        ]);
        // recupero i dati
        $data = $request->all();
        // aggiorno la resource
        $comic->update($data);
        // redirect alla pagina iniziale
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
