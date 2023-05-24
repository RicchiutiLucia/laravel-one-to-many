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
                            @error('preview_image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        @elseif ($errors->any() && old('url'))
                            <p class="text-success">Campo inserito correttamente!</p>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary my-4">Salva nuovo progetto</button>

            </form>

        </div>
    </div>

@endsection