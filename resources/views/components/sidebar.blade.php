<aside class="w-full max-w-[260px] bg-white border border-gray-200 rounded-md shadow-sm">
    <nav class="divide-y divide-gray-200">
        <a href="#" class="flex items-center gap-3 px-5 py-4 text-gray-700 font-medium bg-gray-50">
            <i class="fa-solid fa-gauge-high text-sm"></i>
            <span>Dashboard</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-5 py-4 text-gray-600 hover:bg-gray-50">
            <i class="fa-solid fa-bag-shopping text-sm"></i>
            <span>Orders</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-5 py-4 text-gray-600 hover:bg-gray-50">
            <i class="fa-solid fa-download text-sm"></i>
            <span>Downloads</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-5 py-4 text-gray-600 hover:bg-gray-50">
            <i class="fa-solid fa-credit-card text-sm"></i>
            <span>Payment Method</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-5 py-4 text-gray-600 hover:bg-gray-50">
            <i class="fa-solid fa-location-dot text-sm"></i>
            <span>Address</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-5 py-4 text-gray-600 hover:bg-gray-50">
            <i class="fa-solid fa-user text-sm"></i>
            <span>Account Details</span>
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center gap-3 w-full px-5 py-4 text-left text-gray-600 hover:bg-gray-50">
                <i class="fa-solid fa-right-from-bracket text-sm"></i>
                <span>Logout</span>
            </button>
        </form>
    </nav>
</aside>
