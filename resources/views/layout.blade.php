<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="antialiased px-1 py-3">
    <header>
        <nav>
            <!-- Define your navigation menu here -->
        </nav>
    </header>

    <main class="container mx-auto">
        <div class="text-center px-3 py-3 rounded-xl text-green-800">
            <div class="bg-green-100 rounded-lg shadow-lg p-6">
                <h1 class="font-bold text-2xl">TestKart Products</h1>
                <div class="mt-3">
                    <h2 class="text-xl font-semibold">{{ auth()->user()->name }}</h2>
                    <p class="text-gray-600">{{ auth()->user()->email }}</p>
                </div>
                <form action="{{ route('logout') }}" method="POST" class="mt-6">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </button>
                </form>
            </div>
        </div>
        <div>
            @yield('content')
        </div>

    </main>

    <footer>
        <!-- Define your footer content here -->
    </footer>

</body>

</html>