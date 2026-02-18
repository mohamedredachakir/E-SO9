@extends('layouts.app')

@section('content')

<div class="container" style="padding: 60px 0;">
    <h1 style="font-size: 2.5rem; margin-bottom: 40px;">Your Cart</h1>

    <div class="flex flex-col md:flex items-start gap-2" style="display: flex; gap: 40px; flex-wrap: wrap;">
        <!-- Cart Items -->
        <div style="flex: 2; min-width: 300px;">
            <div class="cart-items">
                <!-- Mock Cart Item 1 -->
                <div class="cart-item" style="border-bottom: 1px solid var(--border-color); padding: 20px 0; display: flex; gap: 20px;">
                    <div class="cart-image" style="width: 100px; height: 100px; background-color: #e0e7ff; border-radius: 8px;"></div>
                    <div class="cart-details" style="flex: 1;">
                        <h3 class="product-title" style="margin-bottom: 5px;">Classic Leather Jacket</h3>
                        <p style="color: #6b7280; font-size: 0.9rem;">Size: M</p>
                        <div class="cart-actions" style="margin-top: 10px; display: flex; justify-content: space-between; align-items: center;">
                            <div class="quantity-control" style="display: flex; align-items: center; gap: 10px;">
                                <button style="width: 24px; height: 24px; border: 1px solid var(--border-color); background: white; cursor: pointer;">-</button>
                                <span>1</span>
                                <button style="width: 24px; height: 24px; border: 1px solid var(--border-color); background: white; cursor: pointer;">+</button>
                            </div>
                            <span class="product-price">$129.00</span>
                        </div>
                    </div>
                </div>

                <!-- Mock Cart Item 2 -->
                <div class="cart-item" style="border-bottom: 1px solid var(--border-color); padding: 20px 0; display: flex; gap: 20px;">
                    <div class="cart-image" style="width: 100px; height: 100px; background-color: #fce7f3; border-radius: 8px;"></div>
                    <div class="cart-details" style="flex: 1;">
                        <h3 class="product-title" style="margin-bottom: 5px;">Handwoven Moroccan Rug</h3>
                        <p style="color: #6b7280; font-size: 0.9rem;">Size: 5x8</p>
                        <div class="cart-actions" style="margin-top: 10px; display: flex; justify-content: space-between; align-items: center;">
                             <div class="quantity-control" style="display: flex; align-items: center; gap: 10px;">
                                <button style="width: 24px; height: 24px; border: 1px solid var(--border-color); background: white; cursor: pointer;">-</button>
                                <span>1</span>
                                <button style="width: 24px; height: 24px; border: 1px solid var(--border-color); background: white; cursor: pointer;">+</button>
                            </div>
                            <span class="product-price">$450.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ url('/products') }}" style="display: inline-block; margin-top: 20px; color: var(--primary-color); font-weight: 600;">&larr; Continue Shopping</a>
        </div>

        <!-- Order Summary -->
        <div style="flex: 1; min-width: 280px; padding: 24px; background: var(--bg-color); border-radius: 12px; border: 1px solid var(--border-color);">
            <h3 style="font-size: 1.5rem; margin-bottom: 20px; font-weight: 700;">Order Summary</h3>
            
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                <span>Subtotal</span>
                <span>$579.00</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                <span>Shipping</span>
                <span>$15.00</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                <span>Tax</span>
                <span>$57.90</span>
            </div>
            
            <div style="border-top: 1px solid var(--border-color); margin: 20px 0; padding-top: 20px; display: flex; justify-content: space-between; font-weight: 700; font-size: 1.2rem;">
                <span>Total</span>
                <span>$651.90</span>
            </div>
            
            <button class="btn" style="width: 100%; text-align: center; margin-bottom: 10px;">Proceed to Checkout</button>
            <p style="font-size: 0.8rem; color: #9ca3af; text-align: center;">Secure Checkout with Stripe</p>
        </div>
    </div>
</div>

@endsection
