<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rezultatul tău
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow rounded-lg">
                <h3 class="text-lg font-semibold mb-4">Scor final: {{ $totalScore }}</h3>
                <p class="text-gray-700">{{ $feedback }}</p>

                <div class="mt-6">
                    <h4 class="font-semibold mb-2">Răspunsuri:</h4>
                    <ul class="list-disc ml-6">
                        @foreach ($answers as $answer)
                            <li>Scenariul #{{ $answer['scenario_id'] }}, opțiunea #{{ $answer['option_id'] }} (Scor: {{ $answer['score'] }})</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
