<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DocumentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('document.home');
    }

    public function show(int $id)
    {
        $doc = Documentation::find($id);

        return view('document.show', [
            'doc' => $doc
        ]);
    }

    public function create()
    {
        return view('document.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3'
        ]);

        Documentation::create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => Str::random(7)
        ]);

        return redirect()->route('home')
            ->with('success', 'Votre documentation à bien été crée');
    }

    public function edit(int $id)
    {
        $doc = Documentation::find($id);
        $doc_content = json_decode($doc->content);

        return view('document.edit', [
            'doc' => $doc,
            'doc_content' => $doc_content
        ]);
    }

    public function update(int $id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
        ]);

        Documentation::find($id)->update([
            'title' => $request->get('title'),
            'content' => $request->get('content')
        ]);

        return redirect()->route('home')
            ->with('success', 'Votre documentation à bien été modifier');
    }
}
