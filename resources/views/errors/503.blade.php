<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Under Maintenance</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #3b82f6;
            --bg: #f9fafb;
            --text: #1f2937;
            --muted: #6b7280;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            text-align: center;
            overflow: hidden;
        }

        .container {
            max-width: 480px;
            padding: 2rem;
            background: white;
            border-radius: 1.5rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            animation: fadeIn 0.8s ease-out;
        }

        .emoji {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: bounce 1.5s infinite;
        }

        h1 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        p {
            font-size: 1rem;
            color: var(--muted);
            margin-bottom: 1.5rem;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #e5e7eb;
            border-top: 4px solid var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 1rem;
        }

        footer {
            margin-top: 1.5rem;
            font-size: 0.875rem;
            color: var(--muted);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="emoji">🚧</div>
        <h1>We're Under Maintenance</h1>
        <p>Our website is currently undergoing scheduled maintenance.<br>
            We’ll be back shortly. Thank you for your patience!</p>
        <div class="spinner"></div>
        <footer>© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</footer>
    </div>
</body>

</html>
