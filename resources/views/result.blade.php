<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rezultatul tău
        </h2>
    </x-slot>

    <div class="bg-white p-8 shadow rounded-lg space-y-6">

        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow rounded-lg">
                <h3 class="text-lg font-semibold mb-4">🎯 Scor final: {{ $totalScore }}</h3>
                <p class="text-gray-700">💬 {{ $feedback }}</p>

                <h4 class="mt-6 font-semibold text-md text-indigo-600">🧠 Profil financiar: {{ $profile ?? 'N/A' }}</h4>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div class="bg-blue-100 p-3 rounded">💰 Bani: {{ $stats['money'] }}</div>
                    <div class="bg-green-100 p-3 rounded">😊 Fericire: {{ $stats['happiness'] }}</div>
                    <div class="bg-yellow-100 p-3 rounded">🏦 Economii: {{ $stats['savings'] }}</div>
                    <div class="bg-red-100 p-3 rounded">💳 Datorii: {{ $stats['debt'] }}</div>
                </div>

                <div class="mt-6">
                    <h4 class="font-semibold mb-2">🧠 Feedback personalizat:</h4>
                    <ul class="list-disc ml-6 text-sm">
                        @foreach ($aiFeedback as $f)
                            <li>{!! $f !!}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="mt-6">
                    <h4 class="font-semibold mb-2">🗒️ Răspunsuri:</h4>
                    <ul class="list-disc ml-6 text-sm">
                        @foreach ($answers as $answer)
                            <li>Scenariul #{{ $answer['scenario_id'] }}, Opțiunea #{{ $answer['option_id'] }} (Scor: {{ $answer['score'] }})</li>
                        @endforeach
                    </ul>
                </div>

                        <!-- Chart -->
                        <div class="mt-10">
                    <h4 class="font-semibold mb-2">📊 Vizualizare scoruri:</h4>
                    <canvas id="resultsChart" height="100"></canvas>
                </div>

                <!-- Restart button -->
                <div class="mt-8 text-center">
                    <a href="{{ route('game.step', 1) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                        🔄 Joacă din nou
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('resultsChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Bani', 'Fericire', 'Economii', 'Datorii'],
                datasets: [{
                    label: 'Scoruri',
                    data: [
                        {{ $stats['money'] }},
                        {{ $stats['happiness'] }},
                        {{ $stats['savings'] }},
                        {{ $stats['debt'] }}
                    ],
                    backgroundColor: [
                        '#3b82f6',
                        '#10b981',
                        '#facc15',
                        '#ef4444'
                    ],
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-app-layout>
