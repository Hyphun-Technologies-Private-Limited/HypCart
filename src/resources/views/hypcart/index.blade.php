@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cart</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $item)
            <tr>
                <td>{{ $item->product_id }}</td>
                <td>{{ $item->quantity }}</td>
                <td>
                    <form action="{{ route('cart.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <form action="{{ route('cart.edit') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <input type="number" name="quantity" value="{{ $item->quantity }}" class="form-control">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_id">Product ID</label>
            <input type="text" name="product_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Add to Cart</button>
    </form>
</div>
@endsection
