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
                <th scope="col"></th>
                <th scope="col">DÜZENLE</th>
                <th scope="col">SİL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $key => $todo)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $todo->title }}</td>
                    <td>{{ $todo->description }}</td>
                    <td>{{ $todo->completed == 1 ? 'Tamamlandı' : 'Tamamlanmadı' }}</td>
                    <td><a href="{{ route('edit', $todo->id) }}" class="btn btn-warning">GÜNCELLE</a></td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">SİL</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
