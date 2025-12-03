@extends('laravel-usp-theme::master')
@section("content")


<div class="container">
  <div class="row">
    <div class="col-12">

      @if(session('success'))
      <div class="alert alert-success">
      {{ session('success') }}
      </div>
    @endif

      @if ($errors->any())
      <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
      <li style="color: rgb(121, 24, 24);">{{ $error }}</li>
    @endforeach
      </ul>
      </div>
    @endif

    </div>
  </div>
</div>

<div class="card">
  <div class="card-header"><b>Portarias</b></div>
  <div class="card-body">
    <form method="post" action="processa" enctype="multipart/form-data">
      <div class="row">
            @csrf
            <div class="col-4">
                <input type="text" placeholder="Tipo" class="form-control" name="tipo" value="{{ old('tipo',request()->tipo) }}">
            </div>
            <div class="col-4">
                <input type="text" placeholder="Assunto" class="form-control" name="assunto" value="{{ old('assunto',request()->assunto) }}">
            </div>
            <div class="col-4">
                <input type="file" name="file" value="{{ old('file',request()->file) }}">
                <button type="submit" class="btn btn-success">Enviar</button>
              </div>
          </div>
        </form>
    </div>
  </div>
</div>

@endsection