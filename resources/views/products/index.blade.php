@extends('layouts.app')

@section('content')

<!-- Header & Filters -->
<div class="container" style="padding: 40px 0;">
    <h1 style="font-size: 2.5rem; margin-bottom: 20px;">Shop Our Collection</h1>
    <div class="flex justify-between items-center" style="margin-bottom: 40px; border-bottom: 1px solid var(--border-color); padding-bottom: 20px;">
        <div class="filters">
            <span style="font-weight: 600; margin-right: 20px;">Filters:</span>
            <button class="btn btn-secondary" style="margin-right: 10px; padding: 6px 16px;">All</button>
            <button class="btn btn-secondary" style="margin-right: 10px; padding: 6px 16px;">Clothing</button>
            <button class="btn btn-secondary" style="margin-right: 10px; padding: 6px 16px;">Electronics</button>
            <button class="btn btn-secondary" style="padding: 6px 16px;">Moroccan</button>
        </div>
        <div>
            <span style="color: #6b7280; font-size: 0.9rem;">Showing 8 results</span>
        </div>
    </div>

    <!-- Product Grid -->
    <div class="products-grid">
        @for ($i = 1; $i <= 8; $i++)
            <div class="product-card">
                <div class="product-image" style="background-color: hsl({{ rand(200, 300) }}, 80%, 90%);"></div>
                <div class="product-details">
                    <h3 class="product-title">Product {{ $i }}</h3>
                    <p style="color: #6b7280; font-size: 0.9rem; margin-bottom: 5px;">Category</p>
                    <div class="product-actions">
                        <span class="product-price">${{ rand(20, 200) }}.00</span>
                        <button class="btn" style="padding: 8px 16px;">Add to Cart</button>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

@endsection
