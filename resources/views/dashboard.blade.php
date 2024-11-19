<x-app-layout>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-white shadow-md h-full">
            <div class="p-6 text-center">
                <img src="https://upeu.icrmedu.com/B-Learning/Images/Inicio/logo_Inicio_UPeU.png" alt="Logo UPeU" class="h-25 mx-auto">

            </div>
            <nav class="mt-8">
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-600 hover:text-white">
                    Inicio
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-600 hover:text-white">
                    PPP
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-600 hover:text-white">
                    Configuración
                </a>
                <a href="#" class="block py-2.5 px-4 mt-10 text-red-600 hover:text-red-800">
                    Cerrar sesión
                </a>
            </nav>
            <div class="p-6 text-center mt-auto">
                <img src="path/to/student-profile.png" alt="Estudiante" class="h-12 mx-auto rounded-full">
                <p class="mt-2">Estudiante</p>
                <p class="font-semibold">Xaris Berrocal</p>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="w-4/5 p-10 bg-cover bg-center" style="background-image: url('https://upeu.edu.pe/wp-content/uploads/2022/04/campus-juliaca.jpeg');">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold">PRACTICAS PRE PROFESIONALES</h1>
                <a href="#" class="text-blue-600">Mesa de ayuda ?</a>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="text-gray-400 text-6xl">&#128100;</div>
                    <h2 class="mt-4 font-semibold">Lamb University</h2>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="text-gray-400 text-6xl">&#128100;</div>
                    <h2 class="mt-4 font-semibold">Lamb University</h2>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="text-gray-400 text-6xl">&#128100;</div>
                    <h2 class="mt-4 font-semibold">Lamb University</h2>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>

