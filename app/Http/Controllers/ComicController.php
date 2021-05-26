<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

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
        'title' => 'bail|required|unique:comics|max:100|string',
        'description' => 'required|max:1000|string',
        'thumb' => 'required|max:255|string',
        'price' => 'required|numeric',
        'series' => 'nullable|string',
        'sale_date' => 'required|date',
        'type' => 'nullable|string',
      ]);


        $comic = $request->all();

        $newcomic = new Comic();
        $newcomic->title = $comic['title'];
        $newcomic->description = $comic['description'];
        $newcomic->thumb = $comic['thumb'];
        $newcomic->price = $comic['price'];
        $newcomic->series = $comic['series'];
        $newcomic->sale_date = $comic['sale_date'];
        $newcomic->type = $comic['type'];
        $newcomic->save();

        $comic = Comic::orderBy('id', 'desc')->first();

        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
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
          'title' => 'bail|required|unique:comics|max:100|string',
          'description' => 'required|max:1000|string',
          'thumb' => 'required|max:255|string',
          'price' => 'required|numeric',
          'series' => 'nullable|string',
          'sale_date' => 'required|date',
          'type' => 'nullable|string',
        ]);

        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Comic $comic)
    // {
    //   $comic->delete();
    //
    //   return redirect()->route('comics.index');
    // }
    public function destroy(Comic $comic) {
      $comic->delete();
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/delete-records">Click Here</a> to go back.';
    }
}
