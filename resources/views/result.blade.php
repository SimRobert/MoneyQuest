<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Rezultatul tău</title>
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
            max-width: 700px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #222;
        }
        .answer {
            padding: 12px;
            background: #f9f9f9;
            border-left: 4px solid #007bff;
            margin-bottom: 12px;
            border-radius: 4px;
        }
        .score-summary {
            text-align: center;
            margin-top: 30px;
        }
        .score-summary p {
            font-size: 1.2em;
        }
        .feedback {
            font-size: 1.3em;
            font-weight: bold;
            color: #28a745;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Rezultatul tău</h2>

        @foreach ($answers as $answer)
            <div class="answer">
                Scenariul #{{ $answer['scenario_id'] }}: ai ales opțiunea #{{ $answer['option_id'] }} (Scor: {{ $answer['score'] }})
            </div>
        @endforeach

        <div class="score-summary">
            <hr>
            <p>Scor total: <strong>{{ $totalScore }}</strong></p>
            <p class="feedback">{{ $feedback }}</p>
        </div>
    </div>
</body>
</html>