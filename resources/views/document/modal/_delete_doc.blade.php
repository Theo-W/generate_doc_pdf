<button type="button" class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#modaldelete{{ $doc->id }}">
    <i class="bi bi-trash"></i>
</button>

<!-- Modal Content -->
<div class="modal fade" id="modaldelete{{ $doc->id }}" tabindex="-1" role="dialog" aria-labelledby="modalTitleNotify"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="modalTitleNotify">Supprimer</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <h2 class="h4 modal-title">Supprimer la documentation "{{ $doc->title }}"</h2>

                    <p class="text-center">Voulez-vous supprimer l'utilisateur ?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"
                        id="close_btn">Annuler
                </button>
                <button type="submit" class="btn btn-sm btn-danger" data-bs-dismiss="modal" wire:click="delete({{ $doc->id }})">Supprimer</button>
            </div>
        </div>
    </div>
</div>
