<!doctype html>
<html lang="en">
<head>
    @include('admin.layouts.head-tag')
    @yield('head-tag')
</head>
<body dir="rtl">


{{--<div class="flex items-center justify-between">--}}
{{--    @include('admin.layouts.header')--}}
{{--</div>--}}

<div class="flex min-h-screen flex-row bg-gray-100 text-gray-800">

    @include('admin.layouts.sidebar')

    <main class="main ml-48 flex flex-grow flex-col p-4 transition-all duration-150 ease-in md:ml-0">
        <div class="flex-row h-full bg-white text-center font-samim shadow-md">@yield('content')</div>
    </main>

</div>






    @include('admin.layouts.script')
    @yield('script')
</body>
</html>
