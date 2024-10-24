
<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <style>
        .container {
            font-family: 'Arial', sans-serif; /* Font default */
            background-color: #f0f2f5; /* Background color for the page */
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        h1 {
            font-family: 'Verdana', bold;
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        h4 {
            font-family: 'Verdana', sans-serif;
            color: #808080;
            margin-top: 20px;
        }

        p {
            font-size: 16px;
            color: #666;
            margin: 10px 0;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 5px 0;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <div class="container"><div class="card">
        <h1>{{ $nama }}</h1>
        <p>{{ $kelas }}</p>

        <h4>Good to see my social media</h4>
        <ul>
            <li>
                <a href="{{ $linkedin }}" target="_blank">LinkedIn</a>
            </li>
            <li>
                <a href="{{ $github }}" target="_blank">GitHub</a>
            </li>
        </ul>
    </div></div>
</x-layout>

