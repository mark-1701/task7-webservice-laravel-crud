@if($message = Session::get('success'))
    <div class="has-background-success-35 has-text-white p-4 box is-rounded">
        <p>{{ $message }}</p>
    </div>
@endif

@if($message = Session::get('danger'))
    <div class="has-background-danger-35 has-text-white p-4 box is-rounded">
        <p>{{ $message }}</p>
    </div>
@endif