@extends("layout.master")

@section("content")
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ÜRÜN ADI</th>
            <th scope="col">AÇIKLAMA</th>
            <th scope="col">FİYAT</th>
            <th scope="col">AYRINTI GÖSTER</th>
            <th scope="col">DÜZENLE</th>
            <th scope="col">SİL</th>
        </tr>
        </thead>
        <tbody>
{{--        @foreach($products as $product)--}}
{{--            <tr>--}}
{{--                <th scope="row">{{$product->id}}</th>--}}
{{--                <td>{{$product->name}}</td>--}}
{{--                <td>{{$product->description}}</td>--}}
{{--                <td>{{$product->price}}</td>--}}
{{--                <td><a href="{{route('product.show',$product->id)}}" class="btn btn-info">GÖSTER</a></td>--}}
{{--                <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-warning">GÜNCELLE</a></td>--}}
{{--                <td>--}}
{{--                    <form action="{{route('product.destroy',$product->id)}}" method="POST">--}}
{{--                        @csrf--}}
{{--                        @method("DELETE")--}}
{{--                        <button class="btn btn-danger" type="submit">SİL</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}

{{--        @endforeach--}}
<tr>
    <th scope="row">x</th>
    <td>xx</td>
    <td>xxx</td>
    <td>xxx</td>
    <td><a href="" class="btn btn-info">GÖSTER</a></td>
    <td><a href="" class="btn btn-warning">GÜNCELLE</a></td>
    <td>
        <form action="" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" type="submit">SİL</button>
        </form>
    </td>
</tr>
        </tbody>
    </table>
@endsection
