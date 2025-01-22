<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <!-- Enllaç a la pàgina inicial (welcome) -->
                    <a href="{{ url('/') }}" class="text-xl font-semibold text-gray-900">Laravel ASIX</a>
                </div>
                <div class="hidden sm:flex sm:ml-6 sm:space-x-8">
                    <!-- Enllaç a la pàgina de welcome -->
                    <a href="{{ url('/') }}" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium">Home</a>
                </div>
                <div class="hidden sm:flex sm:ml-6 sm:space-x-8">
                    <!-- Enllaç a la pàgina de llibres -->
                    <a href="{{ route('books.index') }}" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium">Books</a>
                </div>
                <div class="hidden sm:flex sm:ml-6 sm:space-x-8">
                    <!-- Enllaç a la pàgina de llibres -->
                    <a href="{{ route('cotxes.index') }}" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium">Cotxes</a>
                </div>
                <div class="hidden sm:flex sm:ml-6 sm:space-x-8">
                    <!-- Enllaç a la pàgina de llibres -->
                    <a href="{{ url('/informacio') }}" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium">Informacio Projecte</a>
                </div>
            </div>
        </div>
    </div>
</nav>
