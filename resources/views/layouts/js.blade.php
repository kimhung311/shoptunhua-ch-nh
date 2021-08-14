

    <script src="{{ asset('shop/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('shop/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('shop/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <!-- Plugins js -->
    <script src="{{ asset('shop/js/plugins.js') }}"></script>
    <!-- Active js -->
    
    <script src="{{ asset('shop/js/active.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->

    @stack('js')
    @yield('scripts')