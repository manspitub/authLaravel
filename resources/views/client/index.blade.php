<x-app-layout>

    <div class="h-screen flex items-center justify-center">
        
        @foreach ($clients as $client)
        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Username</dt>
                <dd class="text-lg font-semibold">{{$client['username']}}</dd>
            </div>
            <div class="flex flex-col py-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Name</dt>
                <dd class="text-lg font-semibold">{{$client['name']}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Surname</dt>
                <dd class="text-lg font-semibold">{{$client['surname']}}</dd>
            </div>
        </dl>
        
        @endforeach
    </div>

</x-app-layout>
