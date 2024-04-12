@extends('layouts.app')

@section('content')

<!-- mostrar error en lista -->
@if($errors->any())
<ul>
    @foreach ( $errors->all() as $error )
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<div class="columns">
  <div class="column is-half">
        <a href="{{ route('user.index') }}" class="button is-link mb-5 mt-5">← Regresar</a>
        <form method="POST" action="{{ route('user.store') }}">
            @csrf
            
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name">
                </div>
            </div>
            <!-- mostrar error de atributo -->
            @error('title')
                <p style="color:red;">{{ $message }}</p>
            @enderror

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="text" name="email">
                </div>
            </div>
            @error('email')
                <p style="color:red;">{{ $message }}</p>
            @enderror

            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input class="input" type="password" name="password">
                </div>
            </div>
            @error('password')
                <p style="color:red;">{{ $message }}</p>
            @enderror

            <input type="submit" value="Create"  class="button"/>
        </form>
    </div>
</div>
@endsection