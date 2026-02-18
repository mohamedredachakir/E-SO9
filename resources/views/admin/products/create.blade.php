@extends('layouts.app')

@section('content')
<div class="container" style="padding: 60px 0;">
    <h1 style="font-size: 2rem; margin-bottom: 30px;">Add New Product</h1>

    <div style="background: white; border-radius: 12px; padding: 40px; border: 1px solid var(--border-color); max-width: 800px; margin: 0 auto;">
        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            
            <div style="margin-bottom: 20px;">
                <label for="name" style="display: block; margin-bottom: 5px; font-weight: 500;">Product Name</label>
                <input type="text" name="name" id="name" class="form-input" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 6px;">
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div style="margin-bottom: 20px;">
                    <label for="price" style="display: block; margin-bottom: 5px; font-weight: 500;">Price</label>
                    <input type="number" step="0.01" name="price" id="price" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 6px;">
                </div>
                <div style="margin-bottom: 20px;">
                    <label for="stock" style="display: block; margin-bottom: 5px; font-weight: 500;">Stock</label>
                    <input type="number" name="stock" id="stock" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 6px;">
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="category_id" style="display: block; margin-bottom: 5px; font-weight: 500;">Category</label>
                <select name="category_id" id="category_id" required style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 6px;">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="description" style="display: block; margin-bottom: 5px; font-weight: 500;">Description</label>
                <textarea name="description" id="description" rows="4" style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 6px;"></textarea>
            </div>
            
            <div style="margin-bottom: 30px;">
                <label for="image_url" style="display: block; margin-bottom: 5px; font-weight: 500;">Image URL (Placeholder)</label>
                <input type="text" name="images[]" id="image_url" placeholder="https://example.com/image.jpg" style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 6px;">
                <small style="color: #6b7280;">Enter a valid image URL.</small>
            </div>

            <div style="display: flex; gap: 20px;">
                <button type="submit" class="btn" style="padding: 12px 30px;">Create Product</button>
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
