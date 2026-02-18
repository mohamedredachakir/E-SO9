@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero container">
    <div class="hero-content">
        <h1 class="hero-title animate-hero">Elevate Your Lifestyle <br> with <span style="color: var(--primary-color);">E-SO9</span></h1>
        <p class="hero-subtitle animate-hero">Discover premium clothing, electronics, and authentic Moroccan treasures delivered to your doorstep.</p>
        <div class="hero-actions animate-hero">
            <a href="{{ url('/products') }}" class="btn">Shop Now</a>
            <a href="{{ url('/about') }}" class="btn btn-secondary" style="margin-left: 10px;">Learn More</a>
        </div>
    </div>
    
    <!-- Hero Image / Visual -->
    <div class="hero-visual animate-hero" style="margin-top: 50px; position: relative; height: 400px; background: #f3f4f6; border-radius: 20px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
        <h2 style="font-size: 5rem; color: #e5e7eb; opacity: 0.5;">PREMIUM COLLECTION</h2>
        <!-- Placeholder for generated image if needed -->
    </div>
</section>

<!-- Featured Products -->
<section class="container" style="margin-top: 80px;">
    <div class="flex justify-between items-center" style="margin-bottom: 30px;">
        <h2 style="font-size: 2rem; font-weight: 700;">Featured Products</h2>
        <a href="{{ url('/products') }}" style="color: var(--primary-color); font-weight: 600;">View All &rarr;</a>
    </div>

    <div class="products-grid">
        <!-- Mock Product 1 -->
        <div class="product-card">
            <div class="product-image"></div>
            <div class="product-details">
                <h3 class="product-title">Classic Leather Jacket</h3>
                <p style="color: #6b7280; font-size: 0.9rem; margin-bottom: 5px;">Men's Fashion</p>
                <div class="product-actions">
                    <span class="product-price">$129.00</span>
                    <button class="btn" style="padding: 8px 16px;">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Mock Product 2 -->
        <div class="product-card">
            <div class="product-image" style="background-color: #e0e7ff;"></div>
            <div class="product-details">
                <h3 class="product-title">Wireless Noise-Canceling Headphones</h3>
                <p style="color: #6b7280; font-size: 0.9rem; margin-bottom: 5px;">Electronics</p>
                <div class="product-actions">
                    <span class="product-price">$249.00</span>
                    <button class="btn" style="padding: 8px 16px;">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Mock Product 3 -->
        <div class="product-card">
            <div class="product-image" style="background-color: #fce7f3;"></div>
            <div class="product-details">
                <h3 class="product-title">Handwoven Moroccan Rug</h3>
                <p style="color: #6b7280; font-size: 0.9rem; margin-bottom: 5px;">Moroccan Heritage</p>
                <div class="product-actions">
                    <span class="product-price">$450.00</span>
                    <button class="btn" style="padding: 8px 16px;">Add to Cart</button>
                </div>
            </div>
        </div>
        
         <!-- Mock Product 4 -->
        <div class="product-card">
            <div class="product-image" style="background-color: #dbeafe;"></div>
            <div class="product-details">
                <h3 class="product-title">Smart Watch Series 9</h3>
                <p style="color: #6b7280; font-size: 0.9rem; margin-bottom: 5px;">Electronics</p>
                <div class="product-actions">
                    <span class="product-price">$399.00</span>
                    <button class="btn" style="padding: 8px 16px;">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features / Trusted By -->
<section class="container" style="margin: 80px auto; text-align: center; padding: 60px 0; background-color: #f9fafb; border-radius: 20px;">
    <h2 style="margin-bottom: 40px;">Why Choose E-SO9?</h2>
    <div class="flex justify-between" style="gap: 20px; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 200px;">
            <div style="width: 60px; height: 60px; background: var(--primary-color); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; color: white;">
                 <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.2-2.858.578-4.18M7 9a1 1 0 100-2 1 1 0 000 2z0" /></svg>
            </div>
            <h3>Secure Payments</h3>
            <p style="color: #6b7280; margin-top: 10px;">We use Stripe to ensure your financial data is always safe.</p>
        </div>
        <div style="flex: 1; min-width: 200px;">
            <div style="width: 60px; height: 60px; background: var(--accent-color); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; color: white;">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
            </div>
            <h3>Fast Delivery</h3>
            <p style="color: #6b7280; margin-top: 10px;">Get your products delivered within 2-3 business days.</p>
        </div>
        <div style="flex: 1; min-width: 200px;">
             <div style="width: 60px; height: 60px; background: var(--secondary-color); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; color: white;">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </div>
            <h3>24/7 Support</h3>
            <p style="color: #6b7280; margin-top: 10px;">Our dedicated team is here to help you anytime.</p>
        </div>
    </div>
</section>

@endsection
