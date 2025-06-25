<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in E-commerce App") }}
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">Would you like to open the Foodpanda dashboard?</p>
                    <button onclick="openFoodpanda()"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Go to Foodpanda
                    </button>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                    Logout
                </button>
            </form>
        </div>
    </div>
</x-app-layout>

<script>
    function openFoodpanda() {
        const popup = window.open("{{ $ssoUrl }}", "_blank");
        if (!popup || popup.closed || typeof popup.closed == 'undefined') {
            alert("Popup blocked! Please allow popups for this site.");
        }
    }
</script>
