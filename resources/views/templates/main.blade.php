<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('../../components/common-head')
    <title>{{ env('APP_NAME') . ' | ' }} {{ isset($pageTitle) ? $pageTitle : env('APP_DESCRIPTION') }}</title>
    <!-- Custom css -->
    <style>

    </style>
    @yield('template-header')
</head>

<body class="">
    @include('../../components/navbar')


    <!-- Main App -->
    <div class="main-root">
        @yield('content')

    </div>


    <!-- Common footer -->
    @include('../../components/footer')




    <!-- Custom footer script -->
    @yield('template-footer')

</body>

</html>
