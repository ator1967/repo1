<!DOCTYPE html>
<html lang="en">
@include('extensii.home_head')
<body class="homepage">
@include('extensii.home_header')
@include('extensii.home_slider')
@include('extensii.home_feature')
@include('extensii.home_recent_works')
@include('extensii.home_services')
@include('extensii.home_middle')
@include('extensii.home_partner')
@include('extensii.home_contact_info')
@include('extensii.home_bottom')
@include('extensii.home_footer')

 

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
</body>
</html>