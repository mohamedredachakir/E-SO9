@extends('layouts.app')

@section('content')

<div class="container" style="padding: 60px 0;">
    <div style="display: flex; gap: 40px; flex-wrap: wrap;">
        <!-- Product Image -->
        <div style="flex: 1; min-width: 300px;">
             <div style="width: 100%; height: 400px; background-color: #f3f4f6; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                 @if(isset($product->images) && count($product->images) > 0)
                    <img src="{{ $product->images[0] }}" alt="{{ $product->name }}" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                 @else
                    <span style="color: #9ca3af;">No Image</span>
                 @endif
             </div>
        </div>

        <!-- Product Details -->
        <div style="flex: 1; min-width: 300px;">
            <p style="color: var(--primary-color); font-weight: 600; text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem; margin-bottom: 10px;">{{ $product->category->name ?? 'Category' }}</p>
            <h1 style="font-size: 2.5rem; margin-bottom: 20px;">{{ $product->name }}</h1>
            <p style="font-size: 1.5rem; font-weight: 700; color: #111827; margin-bottom: 20px;">${{ number_format($product->price, 2) }}</p>
            
            <p style="color: #4b5563; line-height: 1.7; margin-bottom: 30px;">
                {{ $product->description }}
            </p>

            <form action="{{ route('cart.store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div style="display: flex; gap: 20px; align-items: center; margin-bottom: 30px;">
                    <div style="display: flex; align-items: center; border: 1px solid var(--border-color); border-radius: 8px;">
                        <button type="button" style="padding: 10px 15px; border: none; background: transparent; cursor: pointer;">-</button>
                        <input type="number" name="quantity" value="1" style="width: 50px; text-align: center; border: none; -moz-appearance: textfield;">
                        <button type="button" style="padding: 10px 15px; border: none; background: transparent; cursor: pointer;">+</button>
                    </div>
                </div>

                <div style="display: flex; gap: 15px;">
                    <button type="submit" class="btn" style="flex: 1; text-align: center;">Add to Cart</button>
                    <button type="button" class="btn btn-secondary" style="width: 50px; display: flex; align-items: center; justify-content: center;">
                        <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                    </button>
                </div>
            </form>

            <div style="margin-top: 40px; padding-top: 20px; border-top: 1px solid var(--border-color);">
                <div style="display: flex; gap: 40px; color: #6b7280; font-size: 0.9rem;">
                    <span>Wait 2-3 days for delivery</span>
                    <span>Free Shipping & Returns</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
