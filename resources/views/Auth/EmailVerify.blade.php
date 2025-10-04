<!DOCTYPE html>
<html lang="fa" dir="rtl" class="h-full">
<head>
    <meta charset="UTF-8" />
    <title>تایید ایمیل</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-gray-900 text-white flex items-center justify-center">

<!-- پیام موفق یا هشدار -->
<div class="absolute top-6 w-full max-w-md mx-auto px-4">
    <!-- مثال پیام -->
    <div class="bg-green-600 text-white p-4 rounded-md shadow-md text-center animate-fadeIn">
        ایمیل تایید برای شما ارسال شد!
    </div>
</div>

<!-- کارت وریفای ایمیل -->
<div class="bg-gray-800 p-8 rounded-xl shadow-xl max-w-md w-full text-center space-y-6">
    <img src="assets/images/email.png" class="w-20 h-20 mx-auto" alt="ایمیل" />
    <h2 class="text-2xl font-bold">تایید ایمیل</h2>
    <p class="text-gray-300">
        لطفاً برای ادامه کار ایمیل خود را بررسی کنید و روی لینک تایید کلیک کنید.
    </p>

    <div class="flex flex-col gap-4 mt-6">
        <button
            class="w-full btn bg-blue-600 hover:bg-blue-500 text-white py-3 rounded-lg transition"
            onclick="alert('ایمیل تایید دوباره ارسال شد!')"
        >
            ارسال دوباره ایمیل تایید
        </button>
        <button
            class="w-full btn bg-gray-700 hover:bg-gray-600 text-white py-3 rounded-lg transition"
            onclick="alert('اکنون ایمیل شما تایید شد!')"
        >
            من ایمیلم را تایید کردم
        </button>
    </div>
</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
        animation: fadeIn 0.8s ease forwards;
    }
</style>

</body>
</html>

