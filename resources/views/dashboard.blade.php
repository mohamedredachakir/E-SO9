@extends('layouts.app')

@section('content')
<div class="container" style="padding: 60px 0;">
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    
    <div style="margin-top: 40px; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div style="padding: 30px; background: white; border-radius: 12px; border: 1px solid var(--border-color);">
            <h2 style="font-size: 1.5rem; margin-bottom: 20px;">My Orders</h2>
            <p style="color: #6b7280;">You have no recent orders.</p>
        </div>
        
        <div style="padding: 30px; background: white; border-radius: 12px; border: 1px solid var(--border-color);">
            <h2 style="font-size: 1.5rem; margin-bottom: 20px;">Account Settings</h2>
            <p style="color: #6b7280;">Manage your profile and security.</p>
            <form action="{{ route('logout') }}" method="POST" style="margin-top: 20px;">
                @csrf
                <button type="submit" class="btn btn-secondary">Logout</button>
            </form>
        </div>
    </div>
</div>
@endsection
