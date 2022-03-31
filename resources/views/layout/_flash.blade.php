@if ($message = Session::get('success'))
    <div class="alert alert-success d-flex justify-content-between align-items-center" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
