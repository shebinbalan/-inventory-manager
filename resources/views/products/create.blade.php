@extends('layouts.app')

@section('content')
<div class="container">
     <br>
    <h1 class="mb-3 text-center text-success fw-semibold" style="letter-spacing: 1px;">
        ➕ Add New Product
    </h1>
   

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">🛍️ Product Name</label>
            <input type="text" name="name" class="form-control" placeholder="Eg: Redmi Note 13" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">💰 Price (₹)</label>
            <input type="number" step="0.01" name="price" class="form-control" placeholder="Eg: 9999.99" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">📦 Quantity</label>
            <input type="number" name="quantity" class="form-control" placeholder="Eg: 10" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">📝 Description (optional)</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Short product details..."></textarea>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">⬅️ Back</a>
            <button type="submit" class="btn btn-success">✅ Save Product</button>
        </div>
    </form>
</div>
@endsection
