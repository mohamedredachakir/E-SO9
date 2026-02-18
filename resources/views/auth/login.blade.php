@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 400px; margin: 80px auto; padding: 40px; background: white; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);">
    <h1 style="text-align: center; margin-bottom: 30px;">Login</h1>

    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <div style="margin-bottom: 20px;">
            <label for="email" style="display: block; margin-bottom: 5px; font-weight: 500;">Email Address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                   style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
            @error('email')
                <span style="color: red; font-size: 0.8rem; display: block; margin-top: 5px;">{{ $message }}</span>
            @enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label for="password" style="display: block; margin-bottom: 5px; font-weight: 500;">Password</label>
            <input id="password" type="password" name="password" required
                   style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
            @error('password')
                <span style="color: red; font-size: 0.8rem; display: block; margin-top: 5px;">{{ $message }}</span>
            @enderror
        </div>

        <div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
             <label style="display: flex; align-items: center; gap: 5px;">
                <input type="checkbox" name="remember"> Remember me
             </label>
             <a href="#" style="font-size: 0.9rem; color: var(--primary-color);">Forgot Password?</a>
        </div>

        <button type="submit" class="btn" style="width: 100%; text-align: center;">Login</button>

        <p style="text-align: center; margin-top: 20px; font-size: 0.9rem;">
            Don't have an account? <a href="{{ route('register') }}" style="color: var(--primary-color);">Register</a>
        </p>
    </form>
</div>
@endsection
