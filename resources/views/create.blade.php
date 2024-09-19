@extends('layout.master')

@section('content')
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="row my-5">
            <div class="col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Todo Ekleme Sayfası</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">
                                Todo Başlık
                            </label>
                            <input type="text" name="title" class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Todo Açıklaması
                            </label>
                            <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Todo Ekle</button>
                    </div>
                </div>
            </div>
    </form>
@endsection
