<!-- Nombre de usuario -->
<div class="mb-4">
    <label for="username" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">{{ __('Username') }}</label>
    <input type="text" id="username" name="username" placeholder="Tu usuario"
        value="{{ old('username', $client->username) }}"
        class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
        @if(request()->routeIs('client.edit')) readonly @endif>
    @error('username')
        <small class="text-red-500 text-sm mt-1">{{ $message }}</small>
    @enderror
</div>


<!-- Nombre -->
<div class="mb-4">
    <label for="name" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">{{__('Name')}}</label>
    <input type="text" id="name" name="name" placeholder="Tu nombre" value="{{old('name', $client->name)}}"
        class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('name')
        <small class="text-red-500 text-sm mt-1">{{ $message }}</small>
    @enderror
</div>

<!-- Apellido -->
<div class="mb-4">
    <label for="surname" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">{{__('Surname')}}</label>
    <input type="text" id="surname" name="surname" placeholder="Tu apellido"
        value="{{old('surname', $client->surname)}}"
        class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('surname')
        <small class="text-red-500 text-sm mt-1">{{ $message }}</small>
    @enderror
</div>

<!-- Correo Electrónico -->
<div class="mb-4">
    <label for="email" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">{{__('Email')}}</label>
    <input type="email" id="email" name="email" placeholder="tuemail@example.com"
        value="{{old('email', $client->email)}}"
        class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('email')
        <small class="text-red-500 text-sm mt-1">{{ $message }}</small>
    @enderror
</div>

<!-- Edad -->
<div class="mb-4">
    <label for="age" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">{{__('Age')}}</label>
    <input type="number" id="age" name="age" placeholder="tuemail@example.com" value="{{old('age', $client->age)}}"
        class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('age')
        <small class="text-red-500 text-sm mt-1">{{ $message }}</small>
    @enderror
</div>

<!-- Contraseña -->
<div class="mb-6">
    <label for="password" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">{{__('Password')}}</label>
    <input type="password" id="password" name="password" placeholder="••••••••"
        class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('password')
        <small class="text-red-500 text-sm mt-1">{{ $message }}</small>
    @enderror
</div>