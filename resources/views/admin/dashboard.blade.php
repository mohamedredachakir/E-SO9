@extends('layouts.app')

@section('content')
<div class="container" style="padding: 60px 0;">
    <h1>Admin Dashboard</h1>
    <p style="margin-bottom: 40px; color: #6b7280;">Welcome back, Admin.</p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-bottom: 60px;">
        <div style="background: var(--primary-color); color: white; padding: 30px; border-radius: 12px; box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.3);">
            <h3 style="font-size: 1.2rem; margin-bottom: 10px; opacity: 0.9;">Total Sales</h3>
            <p style="font-size: 2.5rem; font-weight: 700;">$12,450</p>
        </div>
        
        <div style="background: white; border: 1px solid var(--border-color); padding: 30px; border-radius: 12px;">
            <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: #6b7280;">Pending Orders</h3>
            <p style="font-size: 2.5rem; font-weight: 700; color: var(--text-color);">8</p>
        </div>
        
        <div style="background: white; border: 1px solid var(--border-color); padding: 30px; border-radius: 12px;">
            <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: #6b7280;">Total Users</h3>
            <p style="font-size: 2.5rem; font-weight: 700; color: var(--text-color);">1,204</p>
        </div>
    </div>

    <!-- Quick Actions -->
    <h2 style="font-size: 1.5rem; margin-bottom: 20px;">Management</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px;">
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary" style="text-align: center; padding: 20px;">
            Manage Products
        </a>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary" style="text-align: center; padding: 20px;">
            Manage Orders
        </a>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary" style="text-align: center; padding: 20px;">
            Manage Users
        </a>
        
        <form action="{{ route('logout') }}" method="POST" style="display: contents;">
            @csrf
            <button type="submit" class="btn" style="background-color: #ef4444; border: none; padding: 20px;">Logout</button>
        </form>
    </div>
</div>
@endsection
