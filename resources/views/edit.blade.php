@extends('layout.master')

@section('content')
    <form action="{{ route('update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row my-5">
            <div class="col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Todo Düzenleme Sayfası</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">
                                Todo Başlık
                            </label>
                            <input type="text" name="title" class="form-control" value="{{ $todo->title }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Todo Açıklaması
                            </label>
                            <textarea class="form-control" name="description" cols="30" rows="10">{{ $todo->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Todo Tamamlandı ?
                            </label>
                            <select class="form-control" name="completed">
                                <option value="1" {{ $todo->completed == 1 ? 'selected' : '' }}>Evet</option>
                                <option value="0" {{ $todo->completed == 0 ? 'selected' : '' }}>Hayır</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Todo Ekle</button>
                    </div>
                </div>
            </div>
    </form>
@endsection
