<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white shadow-lg rounded-xl p-8 text-center">
                <h1 class="text-2xl font-bold text-gray-900 mb-4">Bine ai venit, {{ Auth::user()->name }}!</h1>
                <p class="text-gray-700 mb-6">Esti autentificat in <strong>Money Quest</strong>.</p>

                <a href="{{ route('game.step', 1) }}">
                    <button class="bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-blue-700 transition">
                        🧠 Start Quiz
                    </button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

<form action="{{ route('save-budget') }}" method="POST" class="mb-4">
    @csrf
    <label for="budget" class="block text-sm font-medium text-gray-700">Bugetul tău pentru luna aceasta:</label>
    <input type="number" name="budget" id="budget" required
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    <button type="submit" class="mt-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
        Salvează bugetul
    </button>
</form>

