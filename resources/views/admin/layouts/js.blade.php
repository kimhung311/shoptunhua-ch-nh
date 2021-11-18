<!-- Jquery JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="{{ asset('admin_ite/vendor/jquery-3.2.1.min.js') }}"></script>
//  <!-- Bootstrap JS-->
<script src="{{ asset('admin_ite/vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ asset('admin_ite/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
//  <!-- admin_ite/Vendor JS       -->
<script src="{{ asset('admin_ite/vendor/slick/slick.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/wow/wow.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/animsition/animsition.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/counter-up/jquery.counterup.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/circle-progress/circle-progress.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/chartjs/Chart.bundle.min.js') }}"></script>
 <script src="{{ asset('admin_ite/vendor/select2/select2.min.js') }}"></script>
 <script src="{{ asset('admin_ite/js/datatables.min.js') }}"></script>
 
<!-- Main JS-->
<script src="{{ asset('admin_ite/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@stack('js')
@yield('js')