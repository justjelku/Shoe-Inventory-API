@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Price</th>
					<th>Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['brand'] }}</td>
                        <td>{{ $product['price'] }}</td>
						<td>{{ $product['details'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
