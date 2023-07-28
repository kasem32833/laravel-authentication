<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Authentication</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">

    <div class="bg-white">
        <div class="container mx-auto">
            <div class="flex justify-between py-4">
                <ul class="flex gap-4 ">
                    <li><a href="">Home</a></li>
                    <li><a href="">Dashboard</a></li>
                </ul>
                <ul class="flex gap-4">
                    <li><a href="">Login</a></li>
                    <li><a href="">Register</a></li>
                    <li><a href="">Abul Kasem</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
                

            </div>
        </div>
    </div>
    <div class="container mx-auto py-6">
    @yield('content')

    </div>
</body>
</html>