@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <h1 class="mb-4 text-center text-success fw-semibold" style="letter-spacing: 1px;">
        📦 Product List
    </h1>

    {{-- Add Product button aligned to right --}}
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            ➕ Add Product
        </a>
    </div>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Product Table --}}
    @if ($products->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>🛍️ Name</th>
                        <th>💰 Price (₹)</th>
                        <th>📦 Quantity</th>
                        <th>📝 Description</th>
                        <th>⚙️ Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning me-1">✏️ Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this product?')">🗑️ Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">No products found. Please add some!</div>
    @endif
</div>
@endsection
