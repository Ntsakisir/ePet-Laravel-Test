<nav x-data="{ open: false }" class="bg-blue border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
        <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                   <a href="/" class="text-2xl text-white uppercase font-gothic-bold ">Laravel App</p>
                </div>
            </div>
 @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-6 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-md text-white px-2 py-4  rounded-lg dark:text-gray-500 underline hover:text-yellow">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm  text-white px-2 py-4 rounded-lg dark:text-gray-500 underline hover:text-yellow">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
 </div>
    </div></nav>