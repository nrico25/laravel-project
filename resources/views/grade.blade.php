<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold text-gray-900">R.U.S Vocational High School Grade</h1>
        </div>
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">id</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Class</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($grades as $grade)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $grade->id}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{  $grade->name}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
</x-layout>
