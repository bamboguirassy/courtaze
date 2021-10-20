@if (count($errors)>0)
<div class="form-row">
    <div data-form-alert-danger="" class="alert alert-danger col-12">
        @foreach ($errors as $error)
        - {{ $error }} <br>
        @endforeach
    </div>
</div>
@endif