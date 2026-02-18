@extends('layouts.app')

@extends('layouts.app')

@section('content')

<div class="container" style="padding: 60px 0;">
    <h1 style="font-size: 2.5rem; margin-bottom: 40px;">Your Cart</h1>

    @if(session('cart') && count(session('cart')) > 0)
    <div class="flex flex-col md:flex items-start gap-2" style="display: flex; gap: 40px; flex-wrap: wrap;">
        <!-- Cart Items -->
        <div style="flex: 2; min-width: 300px;">
            <div class="cart-items">
                @php $total = 0; @endphp
                @foreach(session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity']; @endphp
                    <div class="cart-item" style="border-bottom: 1px solid var(--border-color); padding: 20px 0; display: flex; gap: 20px;">
                        <div class="cart-image" style="width: 100px; height: 100px; background-color: #f3f4f6; border-radius: 8px; overflow: hidden;">
                             @if(isset($details['image']))
                                <img src="{{ $details['image'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                             @endif
                        </div>
                        <div class="cart-details" style="flex: 1;">
                            <h3 class="product-title" style="margin-bottom: 5px;">{{ $details['name'] }}</h3>
                            <p style="color: #6b7280; font-size: 0.9rem;">Price: ${{ number_format($details['price'], 2) }}</p>
                            <div class="cart-actions" style="margin-top: 10px; display: flex; justify-content: space-between; align-items: center;">
                                 <div class="quantity-control" style="display: flex; align-items: center; gap: 10px;">
                                    <span>Qty: {{ $details['quantity'] }}</span>
                                </div>
                                <span class="product-price">${{ number_format($details['price'] * $details['quantity'], 2) }}</span>
                                
                                <form action="{{ route('cart.destroy', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="color: red; background: none; border: none; cursor: pointer; font-size: 0.9rem;">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('products.index') }}" style="display: inline-block; margin-top: 20px; color: var(--primary-color); font-weight: 600;">&larr; Continue Shopping</a>
        </div>

        <!-- Order Summary -->
        <div style="flex: 1; min-width: 280px; padding: 24px; background: var(--bg-color); border-radius: 12px; border: 1px solid var(--border-color);">
            <h3 style="font-size: 1.5rem; margin-bottom: 20px; font-weight: 700;">Order Summary</h3>
            
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                <span>Subtotal</span>
                <span>${{ number_format($total, 2) }}</span>
            </div>
            
            <div style="border-top: 1px solid var(--border-color); margin: 20px 0; padding-top: 20px; display: flex; justify-content: space-between; font-weight: 700; font-size: 1.2rem;">
                <span>Total</span>
                <span>${{ number_format($total, 2) }}</span>
            </div>
            
            <form action="{{ route('checkout') }}" method="POST">
                @csrf
                <button type="submit" class="btn" style="width: 100%; text-align: center; margin-bottom: 10px;">Proceed to Checkout</button>
            </form>
            <p style="font-size: 0.8rem; color: #9ca3af; text-align: center;">Secure Checkout with Stripe</p>
        </div>
    </div>
    @else
        <div style="text-align: center; padding: 40px;">
            <p style="font-size: 1.2rem; margin-bottom: 20px;">Your cart is empty.</p>
            <a href="{{ route('products.index') }}" class="btn">Start Shopping</a>
        </div>
    @endif
</div>

@endsection
