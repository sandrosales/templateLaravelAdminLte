<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @include('portal.includes.titulos.titulo')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            {{-- navbar-nav --}}
            @include('layouts.portal._partials.navbar-nav')
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            {{-- logo_pag --}}
            @include('layouts.portal._partials.logo_pag')
            <div class="sidebar">
                {{-- user --}}
                @include('layouts.portal._partials.user')
                <nav class="mt-2">
                    {{-- menu --}}
                    @include('layouts.portal._partials.menu')
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            {{-- Conteiner Pag --}}
            @yield('content')
        </div>
        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        @include('layouts.portal._partials.footer')
    </div>
</body>

</html>
