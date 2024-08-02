<body>
    @if (!request()->is('dashboard*'))
        @include('partials.navbar')
    @endif

    @yield('container')

    @if (!request()->is('dashboard*'))
        @include('partials.footer')
    @endif

    <script src="{{ url('js/script.js') }}"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ url('js/sb-admin-2.min.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ url('vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script src="{{ url('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('js/demo/chart-pie-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
