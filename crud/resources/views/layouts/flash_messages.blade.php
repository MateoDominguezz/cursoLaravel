@if($message = Session::get("success"))
<div class="alert alert-success border-0 alert-dismissible fade show" role="alert">
    <div class="d-flex align-items-start">
        <div class="">
            <i class="bi bi-check-circle-fill fs-4 text-success"></i>
        </div>
        <div class="ms-3">
            <h6 class="alert-heading mb-1 text-success">¡Operación exitosa!</h6>
            <p class="mb-0 text-success">{{ $message }}</p>
        </div>
        <button type="button" class="btn-close p-2 rounded-circle bg-light bg-opacity-50 hover-bg-danger" data-bs-dismiss="alert" aria-label="Close">
            <i class="bi bi-x-lg small"></i>
        </button>
    </div>
</div>
@endif