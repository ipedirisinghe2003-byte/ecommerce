<x-app-layout>
    <div class="bg-gray-100 min-h-screen py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex gap-6 items-start">
                <x-sidebar />

                <main class="flex-1">
                    <div class="bg-white border border-gray-200 rounded-md shadow-sm overflow-hidden">
                        <div class="px-6 py-5 border-b border-gray-200">
                            <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
                        </div>

                        <div class="p-6">
                            <div class="bg-blue-50 border-l-4 border-blue-500 px-4 py-3 text-gray-700">
                                <span class="font-semibold">Hello, </span>
                                <span>{{ Auth::user()->name }}</span>
                                <span> (If not {{ Auth::user()->name }}!)</span>
                                <form action="{{ route('logout') }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="text-blue-600 underline ml-1">Logout</button>
                                </form>
                            </div>

                            <p class="mt-6 text-gray-600 leading-7">
                                From your account dashboard, you can easily check &amp; view your recent orders,
                                manage your shipping and billing addresses, and edit your password and account details.
                            </p>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
