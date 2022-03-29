<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use DBlackborough\Quill\Render;
use Illuminate\Http\Request;

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

        return view('show', [
            'doc' => $doc
        ]);
    }

    public function create()
    {
        return view('document.create');
    }

    public function store(Request $request)
    {
         Documentation::create([
            'title' => $request->get('title'),
            'content' => $request->get('content')
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
        Documentation::find($id)->update([
            'title' => $request->get('title'),
            'content' => $request->get('content')
        ]);

        return redirect()->route('home')
            ->with('Votre documentation à bien été modifier');
    }

    public function createPdf(int $id)
    {
        $doc = Documentation::find($id);

        $data = [
            'content' => $doc->content
        ];

        $pdf = \PDF::loadView('pdf.document_pdf', $data);
        return $pdf->download( $doc->title . '.pdf');
    }
}
