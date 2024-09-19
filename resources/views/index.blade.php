@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12 my-5">
            <a href="{{ route('create') }}" class="btn btn-primary float-end">Yeni Ekle</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Başlık</th>
                <th scope="col">Açıklama</th>
                <th scope="col">Tamamlandı mı</th>
                <th scope="col">Göster</th>
                <th scope="col">Düzenle</th>
                <th scope="col">Sile</th>
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
@endsection
