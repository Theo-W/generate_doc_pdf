<div>
    <div class="d-flex justify-content-between align-items-center">
        <h1>Mes documentations</h1>
        <a href="{{ route('doc.create') }}" class="btn btn-primary">
            <i class="bi bi-plus"></i> Créer une doc
        </a>
    </div>

    <div class="mt-4 d-flex justify-content-end">
        <div></div>
        <div class="input-group w-25">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">
                    <i class="bi bi-search"></i>
                </span>
                <input class="form-control py-2 border-right-0 border"
                       placeholder="{{ __('Rechercher') }}"
                       type="search"
                       value="search"
                       id="example-search-input"
                       wire:model.debounce.100ms="search">
            </div>
        </div>
    </div>

    <table class="table mt-3">
        <thead>
        <tr>
            <td>Title</td>
            <td>Crée le</td>
            <td>Modifier le</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @if($docs->count() > 0)
            @foreach($docs as $doc)
                <tr>
                    <td>{{ $doc->title }}</td>
                    <td>{{ $doc->created_at->format('d M Y') }}</td>
                    <td>{{ $doc->updated_at->format('d M Y')  }}</td>
                    <td>
                        <a href="{{ route('doc.edit', ['id' => $doc->id, 'slug' => $doc->slug ]) }}" class="btn btn-icon"><i class="bi bi-pencil-square"></i></a>
                        <a href="{{ route('doc.show', ['id' => $doc->id, 'slug' => $doc->slug ]) }}" class="btn btn-icon"><i class="bi bi-eye"></i></a>
                        @include('document.modal._delete_doc')
                    </td>
                </tr>
            @endforeach
        @else
            <th colspan="6">
                <p class="text-center mt-3">Il n'y a pas de documentation à présenter</p>
            </th>
        @endif
        </tbody>
    </table>

    <div class="pagination">
        {{ $docs->links() }}
    </div>
</div>
