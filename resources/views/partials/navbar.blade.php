<nav class="navbar">
    <div class="container flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
            <span>E</span>-SO9
            <div class="logo-dot"></div>
        </a>

        <!-- Navigation Links -->
        <div class="nav-links hidden md:flex">
            <a href="{{ url('/') }}" class="nav-link">Home</a>
            <a href="{{ url('/products') }}" class="nav-link">Products</a>
            <a href="{{ url('/categories') }}" class="nav-link">Categories</a>
            <a href="{{ url('/about') }}" class="nav-link">About Us</a>
        </div>

        <!-- Right Actions -->
        <div class="flex items-center gap-2">
            <!-- Search Icon (SVG) -->
            <button style="background:none; border:none; cursor:pointer; padding: 8px;">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>

            <!-- Cart Icon -->
            <a href="{{ url('/cart') }}" style="position: relative; display: flex; align-items: center; padding: 8px;">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span style="position: absolute; top: 0; right: 0; background: var(--primary-color); color: white; border-radius: 50%; width: 16px; height: 16px; font-size: 10px; display: flex; justify-content: center; align-items: center;">3</span>
            </a>

            <!-- User Auth -->
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-secondary" style="padding: 6px 16px; font-size: 0.9rem;">
                    {{ auth()->user()->name }}
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-secondary" style="padding: 6px 16px; font-size: 0.9rem;">Log in</a>
            @endauth
        </div>
    </div>
</nav>
