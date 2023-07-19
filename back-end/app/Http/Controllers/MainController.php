<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{
    public function index() {

        $comics = Comic :: all();

        return view('comic.index', compact('comics'));
    }

    public function show($id) {

        $comic = Comic :: findOrFail($id);

        return view('comic.show', compact('comic'));
    }

    public function create() {

        return view('comic.create');
    }

    public function store(Request $request) {

        $comics = $request -> validate(
            $this -> getValidationRule()
        );

        $comic = Comic :: create($comics);

        return redirect() -> route("comics.show", $comic -> id);
    }
    public function edit($id) {

        $comic = Comic :: findOrFail($id);

        return view('comic.edit', compact("comic"));
    }
    public function update(Request $request, $id) {


        $comics = $request -> validate(
            $this -> getValidationRule()
        );

        $comic = Comic :: findOrFail($id);

        $comic -> update($comics);

        return redirect() -> route('comics.show', $comic -> id);
    }

    public function destroy($id) {

        $comic = Comic :: findOrFail($id);

        $comic -> delete();

        return redirect() -> route('comics.index');
    }
    private function getValidationRule() {

        return [
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            "sale_date" => 'required|date',
            "type" => 'required'

        ];
    }
}
