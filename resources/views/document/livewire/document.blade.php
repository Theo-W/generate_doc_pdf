<div>
    <div class="d-flex justify-content-between align-items-center">
        <h1>Mes documentations</h1>
        <a href="{{ route('create_doc') }}" class="btn btn-primary">
            <i class="bi bi-plus"></i> Crée une doc
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
            <td>#</td>
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
                    <td>{{ $doc->id }}</td>
                    <td>{{ $doc->title }}</td>
                    <td>{{ $doc->created_at->format('d M Y') }}</td>
                    <td>{{ $doc->updated_at->format('d M Y')  }}</td>
                    <td>
                        <a href="{{ route('edit_doc', ['id' => $doc->id ]) }}" class="btn btn-icon"><i
                                class="bi bi-pencil-square"></i></a>
                        <a href="{{ route('show', ['id' => $doc->id ]) }}" class="btn btn-primary">voir</a>
                        @include('document.modal._delete_doc')
                        <a href="{{ route('generate_pdf', ['id' => $doc->id] ) }}" class="btn btn-icon"><i
                                class="bi bi-file-earmark-pdf"></i></a>
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
</div>
