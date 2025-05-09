<nav class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Left: Menu Links -->
            <div class="flex space-x-8">
            <h1> Dashboard </h1>

                </a>
                <br>
                <a href="{{ route('warehouse.index') }}"
                   class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 text-sm font-medium {{ request()->routeIs('warehouse.*') ? 'border-b-2 border-blue-500' : '' }}">
                    Warehouses
                </a>
                <br>
                <a href="{{ route('category.index') }}"
                   class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 text-sm font-medium {{ request()->routeIs('category.*') ? 'border-b-2 border-blue-500' : '' }}">
                    Categories
                </a>
                <br>
                <a href="{{ route('product.index') }}"
                   class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 text-sm font-medium {{ request()->routeIs('product.*') ? 'border-b-2 border-blue-500' : '' }}">
                    Products
                </a>
                <br>
                <a href="{{ route('im.index') }}"
                   class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 text-sm font-medium {{ request()->routeIs('im.*') ? 'border-b-2 border-blue-500' : '' }}">
                    Inventory Movements
                </a>
                <br>
                <a href="{{ route('order.index') }}"
                   class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 text-sm font-medium {{ request()->routeIs('im.*') ? 'border-b-2 border-blue-500' : '' }}">
                    Orders
                </a>
                <br>
                <a href="{{ route('role.index') }}"
                   class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 text-sm font-medium {{ request()->routeIs('im.*') ? 'border-b-2 border-blue-500' : '' }}">
                    Role
                </a>
                <br>
                <a href="{{ route('customer.index') }}"
                   class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 text-sm font-medium {{ request()->routeIs('im.*') ? 'border-b-2 border-blue-500' : '' }}">
                    Customer
                </a>
                <br>
            </div>

            <!-- Right: Profile / Logout -->
            <br>
            <div class="flex space-x-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="text-gray-700 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 text-sm font-medium">
                            Logout
                        </button>
                    </form>
                @endauth

            </div>
            <br>
        </div>
    </div>
</nav>
