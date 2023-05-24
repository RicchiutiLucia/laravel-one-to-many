@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <form method="POST" action="{{route('admin.projects.store')}}">

                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                        @if ($errors->has('title'))
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        @elseif ($errors->any() && old('title'))
                            <p class="text-success">Campo inserito correttamente!</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{old('description')}}">
                        @if ($errors->has('description'))
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        @elseif ($errors->any() && old('description'))
                            <p class="text-success">Campo inserito correttamente!</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Immagine url:</label>
                        <input type="text" class="form-control @error('preview_image') is-invalid @enderror" id="url" name="url" value="{{old('url')}}">
                        @if ($errors->has('url'))
                            @error('url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        @elseif ($errors->any() && old('url'))
                            <p class="text-success">Campo inserito correttamente!</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="type_id" class="form-label">Seleziona tipo:</label>
                        <select class="form-select @error('type_id') is-invalid @enderror" name="type_id" id="type_id">
                            <option @selected(old('type_id')=='') value="">Nessun tipo</option>
                            @foreach ($types as $type )
                                <option @selected(old('type_id')==$type->id) value="{{$type->id}}">{{$type->name}}</option>   
                            @endforeach
                        </select>
                        
                        @if ($errors->has('type_id'))
                            @error('type_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        @elseif ($errors->any() && old('type_id'))
                            <p class="text-success">Campo inserito correttamente!</p>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary my-4">Salva nuovo progetto</button>

            </form>

        </div>
    </div>

@endsection