<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 text-gray-900">

<nav class="p-4 bg-black text-white flex gap-6">
    <a href="/">Home</a>
    <a href="/projects">Projects</a>
</nav>

<div class="container mx-auto p-6">
    @yield('content')
</div>

</body>
</html>