@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible mt-4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ $message }}
    </div>
@endif
