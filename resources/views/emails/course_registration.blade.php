<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body dir="rtl">
    <div class="container">
        <p class="text-center">یک دانشجو در دوره {{ $course->title }} ثبت ‌نام کرد.</p>
        <p class="text-center">نام دانشجو: {{ \App\Models\User::getFullName($user->id) }}</p>
        <p class="text-center">ایمیل دانشجو: {{ $user->email }}</p>
        <p class="text-center">تعداد کل ثبت ‌نام ‌شدگان: {{ \App\Models\Course::registeredUsersCount($course->id) }}</p>
    </div>
</body>
</html>
