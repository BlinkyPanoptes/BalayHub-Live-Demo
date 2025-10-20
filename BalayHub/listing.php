<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BalayHub</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="listing.css">
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="max-w-3xl mx-auto py-6 px-4">

        <!-- Header -->
        <header class="relative flex items-center justify-center p-4">
            <button onclick="history.back()"
                class="absolute left-4 bg-yellow-400 hover:bg-yellow-500 text-white font-semibold px-3 py-1 rounded-lg shadow">
                ← Back
            </button>
            <h1 class="text-2xl font-bold">Available Listings</h1>
        </header>

        <!-- Search Bar -->
        <div class="relative mb-6 flex justify-center">
            <div class="relative w-96">
                <input
                    id="searchInput"
                    type="text"
                    placeholder="Search Dormitory..."
                    class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                <svg class="w-5 h-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                </svg>
            </div>
        </div>

        <!-- Listings -->
        <div id="listings" class="space-y-12">

            <!-- Antares Dormitory -->
            <div class="listing flex gap-4 items-start border-b pb-4">
                <img src="Pictures/1.png"
                    alt="Antares Dormitory"
                    class="w-52 h-44 rounded-lg object-cover border border-gray-200">
                <div>
                    <h2 class="font-semibold text-lg">Antares Dormitory</h2>
                    <p class="text-sm text-gray-500 mb-1">2380 CL Montelibano Avenue, Bacolod City, Philippines</p>
                    <div class="flex items-center text-yellow-400 text-sm">
                        ★★★★★ <span class="text-gray-700 ml-2">4.5</span>
                    </div>
                    <div class="mt-16 space-x-2">
                        <a href="#" class="text-xs text-blue-600 underline">View Location in Map</a>
                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 text-xs font-semibold px-3 py-1 rounded-full shadow">
                            View Property
                        </button>
                    </div>
                </div>
            </div>

            <!-- Jacildo Dormitory -->
            <div class="listing flex gap-4 items-start border-b pb-4">
                <img src="https://www.bing.com/th/id/OIP.3ZnwxYC1wCh7po87jHd_7gHaEc?w=242&h=211&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"
                    alt="Jacildo Dormitory"
                    class="w-52 h-44 rounded-lg object-cover border border-gray-200">
                <div>
                    <h2 class="font-semibold text-lg">Jacildo Dormitory</h2>
                    <p class="text-sm text-gray-500 mb-1">549 BS Aquino Drive, Bacolod City, Philippines</p>
                    <div class="flex items-center text-yellow-400 text-sm">
                        ★★★★☆ <span class="text-gray-700 ml-2">4.0</span>
                    </div>
                    <div class="mt-16 space-x-2">
                        <a href="#" class="text-xs text-blue-600 underline">View Location in Map</a>
                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 text-xs font-semibold px-3 py-1 rounded-full shadow">
                            View Property
                        </button>
                    </div>
                </div>
            </div>

            <!-- Gateway Dormitory -->
            <div class="listing flex gap-4 items-start border-b pb-4">
                <img src="Pictures/2.png"
                    alt="Gateway Dormitory"
                    class="w-52 h-44 rounded-lg object-cover border border-gray-200">
                <div>
                    <h2 class="font-semibold text-lg">Gateway Dormitory</h2>
                    <p class="text-sm text-gray-500 mb-1">89 CL Montelibano Avenue, Bacolod City, Philippines</p>
                    <div class="flex items-center text-yellow-400 text-sm">
                        ★★★☆☆ <span class="text-gray-700 ml-2">3.5</span>
                    </div>
                    <div class="mt-16 space-x-2">
                        <a href="#" class="text-xs text-blue-600 underline">View Location in Map</a>
                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 text-xs font-semibold px-3 py-1 rounded-full shadow">
                            View Property
                        </button>
                    </div>
                </div>
            </div>

            <!-- Vilej Dorms -->
            <div class="listing flex gap-4 items-start border-b pb-4">
                <img src="Pictures/3.png"
                    alt="Vilej Dorms"
                    class="w-52 h-44 rounded-lg object-cover border border-gray-200">
                <div>
                    <h2 class="font-semibold text-lg">Vilej Dorms</h2>
                    <p class="text-sm text-gray-500 mb-1">Sierra Madre St 6100 Bacolod City Western Visayas</p>
                    <div class="flex items-center text-yellow-400 text-sm">
                        ☆☆☆☆☆ <span class="text-gray-700 ml-2">Not yet rated</span>
                    </div>
                    <div class="mt-16 space-x-2">
                        <a href="#" class="text-xs text-blue-600 underline">View Location in Map</a>
                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 text-xs font-semibold px-3 py-1 rounded-full shadow">
                            View Property
                        </button>
                    </div>
                </div>
            </div>

            <!-- Wall 21 Residences -->
            <div class="listing flex gap-4 items-start border-b pb-4">
                <img src="https://www.bing.com/th?id=OLC.ycTYf%2bt1sfL1kw480x360&w=123&h=95&c=8&rs=1&qlt=90&pid=3.1&rm=2"
                    alt="Wall 21 Residences"
                    class="w-52 h-44 rounded-lg object-cover border border-gray-200">
                <div>
                    <h2 class="font-semibold text-lg">Wall 21 Residences</h2>
                    <p class="text-sm text-gray-500 mb-1">Margarita Extension Libertad 6100 Bacolod City Western Visayas</p>
                    <div class="flex items-center text-yellow-400 text-sm">
                        ★★★☆☆ <span class="text-gray-700 ml-2">3.5</span>
                    </div>
                    <div class="mt-16 space-x-2">
                        <a href="#" class="text-xs text-blue-600 underline">View Location in Map</a>
                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 text-xs font-semibold px-3 py-1 rounded-full shadow">
                            View Property
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <p class="text-center text-xs text-gray-400 mt-16">End of Listings</p>
    </div>

    <!-- JS file -->
    <script src="js/script.js"></script>
</body>
</html>
