<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Întrebarea #{{ $step }}
        </h2>
    </x-slot>

    @php
        $stats = session('stats', [
            'money' => 0,
            'happiness' => 0,
            'savings' => 0,
            'debt' => 0,
        ]);

        $totalSteps = 10;
        $progress = ($step / $totalSteps) * 100;
    @endphp

    <div class="bg-white p-8 shadow rounded-lg space-y-6">

        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            {{-- Progres vizual --}}
            <div class="mb-4">
                <div class="w-full bg-gray-200 h-2 rounded">
                    <div class="bg-blue-600 h-2 rounded" style="width: {{ $progress }}%"></div>
                </div>
                <p class="text-sm text-gray-600 mt-1">Progres: {{ number_format($progress, 0) }}%</p>
            </div>

            {{-- Scoruri live --}}
            <div class="flex flex-wrap gap-3 mb-6">
                <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded">💰 Bani: {{ $stats['money'] }} RON</div>
                <div class="bg-green-100 text-green-800 px-4 py-2 rounded">😊 Fericire: {{ $stats['happiness'] }}</div>
                <div class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded">🏦 Economii: {{ $stats['savings'] }} RON</div>
                <div class="bg-red-100 text-red-800 px-4 py-2 rounded">💸 Datorii: {{ $stats['debt'] }} RON</div>
            </div>

            {{-- Card cu intrebare --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">{{ $scenario->description }}</h3>

                <form action="{{ route('game.store', $step) }}" method="POST">
                    @csrf
                    <input type="hidden" name="scenario_id" value="{{ $scenario->id }}">

                    @foreach ($scenario->options as $option)
                        <div class="mb-2">
                            <label class="inline-flex items-center">
                                <input type="radio" name="option_id" value="{{ $option->id }}" class="form-radio" required>
                                <span class="ml-2">{{ $option->text }}</span>
                            </label>
                        </div>
                    @endforeach

                    <div class="mt-4">
                        <x-primary-button>Continuă →</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
