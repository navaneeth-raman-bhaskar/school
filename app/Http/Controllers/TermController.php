<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Http\Requests\StoreTermRequest;
use App\Http\Requests\UpdateTermRequest;

class TermController extends Controller
{
    public function index()
    {
        $terms = Term::select('id', 'name')->paginate();
        return view('term.index')->with(compact('terms'));
    }


    public function create()
    {
        $term = new Term();
        return view('term.create')->with(compact('term'));
    }

    public function store(StoreTermRequest $request)
    {
        $term = new Term();
        $term->fill($request->only('name'));
        $term->save();
        return redirect()->route('terms.index');
    }


    public function show(Term $term)
    {
        return view('Term.show')->with(compact('term'));

    }

    public function edit(Term $term)
    {
        return view('term.edit')->with(compact('term'));

    }

    public function update(UpdateTermRequest $request, Term $term)
    {
        $term->fill($request->only('name'));
        $term->save();
        return redirect()->route('terms.index');
    }


    public function destroy(Term $term)
    {
        $term->delete();
        return response()->json();
    }
}
