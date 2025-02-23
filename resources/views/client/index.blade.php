<x-app-layout>
    <div class="flex justify-center items-center p-4">
        @if($clients->isEmpty()) <!-- Verificamos si no hay clientes -->
            <div class="max-w-md mx-auto p-4 mb-4 bg-red-100 rounded-lg shadow-md">
                <p class="text-gray-500 text-sm md:text-lg dark:text-gray-400">{{ __('No clients available.') }}</p>
            </div>

        @else
            <div class="grid grid-cols-2 gap-6">
                @foreach ($clients as $client) 
                    <a href="{{ route('client.show', $client->id) }}">
                        <div
                            class="w-full sm:max-w-md bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 
                                                   transition-transform transform hover:scale-110 hover:shadow-2xl hover:border-gray-400 dark:hover:border-gray-600 duration-300 cursor-pointer">

                            <dl class="space-y-4">
                                <div class="grid grid-cols-3 items-center">
                                    <dt class="text-gray-500 text-sm md:text-lg dark:text-gray-400">{{__('User')}}</dt>
                                    <dd class="col-span-2 text-lg font-semibold text-gray-900 dark:text-white">
                                        {{ $client['username'] }}
                                    </dd>
                                </div>
                                <div class="grid grid-cols-3 items-center">
                                    <dt class="text-gray-500 text-sm md:text-lg dark:text-gray-400">{{__('Name')}}</dt>
                                    <dd class="col-span-2 text-lg font-semibold text-gray-900 dark:text-white">
                                        {{ $client['name'] }}
                                    </dd>
                                </div>
                                <div class="grid grid-cols-3 items-center">
                                    <dt class="text-gray-500 text-sm md:text-lg dark:text-gray-400">{{__('Surname')}}</dt>
                                    <dd class="col-span-2 text-lg font-semibold text-gray-900 dark:text-white">
                                        {{ $client['surname'] }}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>