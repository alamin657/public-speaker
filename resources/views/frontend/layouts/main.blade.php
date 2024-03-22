@include('frontend.layouts.header')
<body id="body" class="one-page alternative-font-5" data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">
	<div class="body">
        @include('frontend.layouts.menu')
        @yield('main-container')
        
    </div>
    @include('frontend.layouts.footer')
</body>
</html>