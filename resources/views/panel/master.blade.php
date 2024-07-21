<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="ForYou by Sinarmas land">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ForYou by Sinarmas land">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('images/icon-bag-small.png') }}">
    <!-- Page Title  -->
    <title>Panel | {{ config('app.name', 'Laravel') }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.1.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=3.1.0') }}">
     <!-- FontAwesome Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/libs/fontawesome-icons.css') }}">


    <link rel="stylesheet" href="./assets/css/editors/summernote.css?ver=3.1.0">

    <!-- add library -->
    @if(isset($css_library))
    {!! $css_library !!}
    @endif

</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
                <!-- sidebar @s -->
                @include('layouts.sidebar')
                <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('layouts.header')
                <!-- main header @e -->
                <!-- content @s -->
                @yield('content')
                <!-- content @e -->
                <!-- footer @s -->
                @include('layouts.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js?ver=3.1.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=3.1.0') }}"></script>
    <script src="{{ asset('assets/js/libs/editors/summernote.js?ver=3.1.0') }}"></script>
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/editors/quill.css?ver=3.1.0') }} "> --}}
    {{-- <script src="{{ asset('assets/js/libs/editors/quill.js?ver=3.1.0') }}"></script> --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.css" integrity="sha384-OH8qNTHoMMVNVcKdKewlipV4SErXqccxxlg6HC9Cwjr5oZu2AdBej1TndeCirael" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.js" integrity="sha384-ImWHyYvDPlRzwFnvLhG9Jcpm/7qL4SVIuJK0C6Rj+Mf7fpeNJCLCynC+EVz4kCSA" crossorigin="anonymous"></script>


    <!-- add library -->
    @if(isset($js_library))
    {!! $js_library !!}
    @endif

    <script type="text/javascript">
        const token = $("meta[name='csrf-token']").attr("content");
    </script>

    <!-- custom js -->
    @if(isset($js))
    <script src="{{ asset($js) }}"></script>
    @endif

    @include('popper::assets')
</body>
