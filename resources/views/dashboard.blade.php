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
