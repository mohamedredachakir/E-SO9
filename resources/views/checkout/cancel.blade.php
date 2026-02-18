@extends('layouts.app')

@section('content')
<div class="container" style="padding: 100px 0; text-align: center;">
    <div style="width: 80px; height: 80px; background: #fee2e2; color: #991b1b; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px;">
        <svg width="40" height="40" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
    </div>
    <h1 style="font-size: 2.5rem; margin-bottom: 20px;">Payment Cancelled</h1>
    <p style="color: #6b7280; font-size: 1.2rem; margin-bottom: 40px;">Your order was cancelled. No charges were made.</p>
    <a href="{{ route('cart.index') }}" class="btn">Return to Cart</a>
</div>
@endsection
