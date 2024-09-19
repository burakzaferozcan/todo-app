@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12 my-5">
            <a href="{{ route('create') }}" class="btn btn-primary float-end">Yeni Ekle</a>
        </div>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Başlık</th>
                <th scope="col">Açıklama</th>
                <th scope="col">Tamamlandı mı</th>
                <th scope="col">Göster</th>
                <th scope="col">Düzenle</th>
                <th scope="col">Sil</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $key => $todo)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $todo->title }}</td>
                    <td>{{ $todo->description }}</td>
                    <td>{{ $todo->completed == 1 ? 'Tamamlandı' : 'Tamamlanmadı' }}</td>
                    <td><a href="{{ route('show', $todo->id) }}" class="btn btn-success">Göster</a></td>
                    <td><a href="{{ route('edit', $todo->id) }}" class="btn btn-warning">Düzenle</a></td>
                    <td><a href="{{ route('destroy', $todo->id) }}" class="btn btn-danger">Sil</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (Session::has('deleted_success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('deleted_success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(Session::has('deleted_error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('deleted_error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endsection
