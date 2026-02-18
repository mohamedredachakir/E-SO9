@extends('layouts.app')

@section('content')
<div class="container" style="padding: 60px 0;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h1 style="font-size: 2rem;">Manage Products</h1>
        <a href="{{ route('admin.products.create') }}" class="btn">Add New Product</a>
    </div>

    @if(session('success'))
        <div style="background: #d1fae5; color: #065f46; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="overflow-x: auto; background: white; border-radius: 12px; border: 1px solid var(--border-color);">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background: #f9fafb; text-align: left;">
                    <th style="padding: 15px; border-bottom: 1px solid var(--border-color);">ID</th>
                    <th style="padding: 15px; border-bottom: 1px solid var(--border-color);">Name</th>
                    <th style="padding: 15px; border-bottom: 1px solid var(--border-color);">Category</th>
                    <th style="padding: 15px; border-bottom: 1px solid var(--border-color);">Price</th>
                    <th style="padding: 15px; border-bottom: 1px solid var(--border-color);">Stock</th>
                    <th style="padding: 15px; border-bottom: 1px solid var(--border-color);">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td style="padding: 15px; border-bottom: 1px solid var(--border-color);">{{ $product->id }}</td>
                    <td style="padding: 15px; border-bottom: 1px solid var(--border-color); font-weight: 500;">{{ $product->name }}</td>
                    <td style="padding: 15px; border-bottom: 1px solid var(--border-color);">{{ $product->category->name ?? 'N/A' }}</td>
                    <td style="padding: 15px; border-bottom: 1px solid var(--border-color);">${{ number_format($product->price, 2) }}</td>
                    <td style="padding: 15px; border-bottom: 1px solid var(--border-color);">{{ $product->stock }}</td>
                    <td style="padding: 15px; border-bottom: 1px solid var(--border-color);">
                        <div style="display: flex; gap: 10px;">
                            <a href="{{ route('admin.products.edit', $product->id) }}" style="color: var(--primary-color);">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; color: #ef4444; cursor: pointer;">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div style="margin-top: 20px;">
        {{ $products->links() }}
    </div>
</div>
@endsection
