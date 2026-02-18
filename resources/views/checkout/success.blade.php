@extends('layouts.app')

@section('content')
<div class="container" style="padding: 100px 0; text-align: center;">
    <div style="width: 80px; height: 80px; background: #d1fae5; color: #065f46; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px;">
        <svg width="40" height="40" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
    </div>
    <h1 style="font-size: 2.5rem; margin-bottom: 20px;">Payment Successful!</h1>
    <p style="color: #6b7280; font-size: 1.2rem; margin-bottom: 40px;">Thank you for your purchase. Your order has been placed.</p>
    <a href="{{ route('home') }}" class="btn">Continue Shopping</a>
</div>
@endsection
