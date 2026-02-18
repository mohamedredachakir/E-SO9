@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 400px; margin: 80px auto; padding: 40px; background: white; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);">
    <h1 style="text-align: center; margin-bottom: 30px;">Register</h1>

    <form method="POST" action="{{ route('register.post') }}">
        @csrf
        
        <div style="margin-bottom: 20px;">
            <label for="name" style="display: block; margin-bottom: 5px; font-weight: 500;">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                   style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
            @error('name')
                <span style="color: red; font-size: 0.8rem; display: block; margin-top: 5px;">{{ $message }}</span>
            @enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label for="email" style="display: block; margin-bottom: 5px; font-weight: 500;">Email Address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
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

        <div style="margin-bottom: 20px;">
            <label for="password_confirmation" style="display: block; margin-bottom: 5px; font-weight: 500;">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                   style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
        </div>

        <button type="submit" class="btn" style="width: 100%; text-align: center;">Register</button>

        <p style="text-align: center; margin-top: 20px; font-size: 0.9rem;">
            Already have an account? <a href="{{ route('login') }}" style="color: var(--primary-color);">Login</a>
        </p>
    </form>
</div>
@endsection
