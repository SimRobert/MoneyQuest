<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Întrebarea #{{ $step }}</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f2f4f8;
            color: #333;
            padding: 40px;
        }
        .container {
            background: white;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 10px;
        }
        form {
            margin-top: 20px;
        }
        .option {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }
        .option input[type="radio"] {
            margin-right: 10px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Întrebarea #{{ $step }}</h2>
        <p>{{ $scenario['text'] }}</p>

        <form method="POST" action="{{ route('game.submit', $step) }}">
            @csrf
            <input type="hidden" name="scenario_id" value="{{ $scenario['id'] }}">
            @foreach ($scenario['options'] as $option)
                <div class="option">
                    <input type="radio" name="option_id" value="{{ $option['id'] }}" required>
                    <label>{{ $option['text'] }}</label>
                </div>
            @endforeach

            <button type="submit">Continuă →</button>
        </form>
    </div>
</body>
</html>