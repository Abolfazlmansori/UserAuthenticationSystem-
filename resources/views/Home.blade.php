<!DOCTYPE html>
<html lang="fa" dir="rtl" class="h-full">
<head>
    <meta charset="UTF-8">
    <title>صفحه ورود و ثبت‌نام با منوی فیکس</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="h-full m-0 bg-black text-white">

<!-- منوی فیکس بالا -->
<header class="fixed top-0 left-0 w-full bg-gray-900 bg-opacity-90 shadow-md z-50">
    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
        <!-- لوگو -->
        <div class="text-2xl font-bold">لوگو</div>

        <!-- منو آیکون‌ها -->
        <nav class="flex gap-6">
            <a href="#" class="flex flex-col items-center group">
                <i data-feather="home" class="w-6 h-6 text-white group-hover:text-blue-400 transition"></i>
                <span class="text-xs group-hover:text-blue-400 transition">خانه</span>
            </a>
            <a href="#" class="flex flex-col items-center group">
                <i data-feather="user" class="w-6 h-6 text-white group-hover:text-green-400 transition"></i>
                <span class="text-xs group-hover:text-green-400 transition">پروفایل</span>
            </a>
            <a href="#" class="flex flex-col items-center group">
                <i data-feather="settings" class="w-6 h-6 text-white group-hover:text-yellow-400 transition"></i>
                <span class="text-xs group-hover:text-yellow-400 transition">تنظیمات</span>
            </a>
            <a href="{{ route('Logout') }}" class="flex flex-col items-center group">
                <i data-feather="log-out" class="w-6 h-6 text-white group-hover:text-red-500 transition"></i>
                <span class="text-xs group-hover:text-red-500 transition">خروج</span>
            </a>
        </nav>
    </div>
</header>

<!-- محتوا وسط صفحه -->
<main class="h-screen flex flex-col justify-center items-center pt-16"> <!-- pt-16 برای فضای بالای منوی فیکس -->

    @include('layout.partials.Message.success')

    <div class="flex gap-6">
        <a class="border-4 border-white text-4xl text-white p-4 rounded-lg hover:bg-white hover:text-black transition"
           href="{{ route('register') }}">
            Register
        </a>
        <a class="border-4 border-white text-4xl text-white p-4 rounded-lg hover:bg-white hover:text-black transition"
           href="{{ route('login') }}">
            Login
        </a>
    </div>

</main>

<script>
    feather.replace()
</script>

</body>
</html>
