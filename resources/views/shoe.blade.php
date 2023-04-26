@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Shoes</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Price</th>
					<th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shoes as $shoe)
                    <tr>
                        <td>{{ $shoe->name }}</td>
                        <td>{{ $shoe->description }}</td>
                        <td>{{ $shoe->brand }}</td>
						<td>{{ $shoe->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

