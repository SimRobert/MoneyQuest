<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Întrebarea #{{ $step }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                {{-- 🔢 Scoruri curente --}}
                @php
                    $stats = session('stats', ['money' => 0, 'happiness' => 0, 'savings' => 0, 'debt' => 0]);
                @endphp

                <div class="mb-6 p-4 bg-gray-100 border rounded-lg text-sm text-gray-800 shadow-sm">
                    <strong>Statistici curente:</strong><br>
                    💰 Bani: {{ $stats['money'] }} RON &nbsp;|&nbsp;
                    😊 Fericire: {{ $stats['happiness'] }} &nbsp;|&nbsp;
                    🏦 Economii: {{ $stats['savings'] }} RON &nbsp;|&nbsp;
                    📉 Datorii: {{ $stats['debt'] }} RON
                </div>

                {{-- 📋 Intrebare si optiuni --}}
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
