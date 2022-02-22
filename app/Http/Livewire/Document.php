<?php

namespace App\Http\Livewire;

use App\Models\Documentation;
use Livewire\Component;
use Livewire\WithPagination;

class Document extends Component
{
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';
    public string $search = '';
    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function delete(int $id){
        $doc = Documentation::find($id);
        $doc->delete();

        return $this->emit('delete_doc');
    }


    public function render()
    {
        return view('document.livewire.document', [
            'docs' => Documentation::where(function ($query) {
                $query->orWhere('title', 'LIKE', "%$this->search%");
            })
            ->paginate(10)
        ]);
    }
}
