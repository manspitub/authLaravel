<x-app-layout>
<div class="max-w-lg mx-auto bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Registro de Usuario</h2>
    
    <form method="POST" action="{{route('client.store')}}">
        @csrf
        <!-- Nombre de usuario -->
        <div class="mb-4">
            <label for="username" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Username</label>
            <input type="text" id="username" name="username" placeholder="Tu usuario" 
                class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Nombre -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Name</label>
            <input type="text" id="name" name="name" placeholder="Tu nombre"
                class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Apellido -->
        <div class="mb-4">
            <label for="surname" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Surname</label>
            <input type="text" id="surname" name="surname" placeholder="Tu apellido"
                class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Correo Electrónico -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Email</label>
            <input type="email" id="email" name="email" placeholder="tuemail@example.com"
                class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Edad -->
        <div class="mb-4">
            <label for="age" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Email</label>
            <input type="number" id="age" name="age" placeholder="tuemail@example.com"
                class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Contraseña -->
        <div class="mb-6">
            <label for="password" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Password</label>
            <input type="password" id="password" name="password" placeholder="••••••••"
                class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Botón de envío -->
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-300">
            Registrarse
        </button>
    </form>
</div>
</x-app-layout>