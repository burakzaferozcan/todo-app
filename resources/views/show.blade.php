@extends('layout.master')

@section('content')
    <div class="row my-5">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Todo Görüntüleme Sayfası</h3>
                    <span>{{ $todo->completed == 1 ? 'Tamamlandı' : 'Tamamlanmadı' }}</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h1>{{ $todo->title }}</h1>
                        <p>{{ $todo->description }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <span>{{ $todo->id }}. id'li Todo</span>

                </div>
            </div>
        </div>
    @endsection
