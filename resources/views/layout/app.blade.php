<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    {{-- <link  href="{{ url('images') }}/favicon.png"> --}}
    <link href="{{asset('images')}}/logo-dark-small2x.png" rel="icon" type="image/png">
    <!-- Page Title  -->
    <title>DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/dashlite.css?ver=2.9.0">
    <link id="skin-default" rel="stylesheet" href="{{asset('assets')}}/css/theme.css?ver=2.9.0">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">

        @include('layout.sidebar')
    
        <!-- wrap @s -->
        <div class="nk-wrap ">

            @include('layout.header')

            <!-- content @s -->
            <div class="nk-content ">
                <div class="container-fluid">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                
                                @yield('konten')
                               
                            </div><!-- .components-preview -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- content @e -->

            @include('layout.footer')
           
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="{{asset('assets')}}/js/bundle.js?ver=2.9.0"></script>
<script src="{{asset('assets')}}/js/scripts.js?ver=2.9.0"></script>
<script src="{{asset('assets')}}/js/libs/datatable-btns.js?ver=2.9.0"></script>

<script src="{{asset('assets')}}/js/charts/chart-ecommerce.js?ver=2.9.0"></script>
</body>
</html>