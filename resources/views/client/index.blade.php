<x-app-layout>

    <div class="h-screen flex items-center justify-center">

        @foreach ($clients as $client)
            <dl
                class="max-w-md bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md text-gray-900 dark:text-white divide-y divide-gray-200 dark:divide-gray-700">
                <div class="flex items-center justify-between pb-4 gap-x-6">
                    <dt class="w-1/3 text-gray-500 md:text-lg dark:text-gray-400">Username</dt>
                    <dd class="w-2/3 text-lg font-semibold text-gray-900 dark:text-white">{{ $client['username'] }}</dd>
                </div>
                <div class="flex items-center justify-between py-4 gap-x-6">
                    <dt class="w-1/3 text-gray-500 md:text-lg dark:text-gray-400">Name</dt>
                    <dd class="w-2/3 text-lg font-semibold text-gray-900 dark:text-white">{{ $client['name'] }}</dd>
                </div>
                <div class="flex items-center justify-between pt-4 gap-x-6">
                    <dt class="w-1/3 text-gray-500 md:text-lg dark:text-gray-400">Surname</dt>
                    <dd class="w-2/3 text-lg font-semibold text-gray-900 dark:text-white">{{ $client['surname'] }}</dd>
                </div>
            </dl>
        @endforeach
    </div>

</x-app-layout>
