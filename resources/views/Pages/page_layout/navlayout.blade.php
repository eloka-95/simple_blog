    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block nav-wrapper">
            @auth
            <div class="dashboard-nav">
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    <a href="{{ route("posts.create") }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Create article</a>
                    <a href="{{ url("/logout") }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
            </div>
            @else
                    <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    <a href="{{ url('/contact') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Contact</a>
                    <a href="{{ url('/about') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">About</a>
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>


                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    
                @endif
            @endauth
        </div>
    @endif