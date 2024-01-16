<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>HIMMABA</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

{{-- ini style --}}
@include('LandingPage.includes.style')

  </head>

  <body>

    {{-- ini header --}}
    @include('LandingPage.includes.header')

    @yield('content')
    <footer id="footer">
      <div class="container footer-bottom clearfix">
        <div class="copyright" style="text-align: center !important">
          &copy; Copyright
          <i
            ><strong><span>Himpunan Mahasiswa Malang Alumni Bahrul ulum</span></strong
            >. All Rights Reserved
          </i>
        </div>
      </div>
    </footer>

    <!-- End #main -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    {{-- ini script --}}
    @include('LandingPage.includes.script')
  </body>
</html>
