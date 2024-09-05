<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                    }
                }
            }
        }
    </script>
</head>

<body>
    <div id="container" class="bg-red-500 h-screen w-full">
        <main class="main h-full bg-orange-500">
            <x-navigation/>
            {{ $slot }}
        </main>
    </div>
    <footer class="h-10 bg-emerald-500"></footer>
</body>

</html>
