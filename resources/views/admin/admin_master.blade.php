<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/app.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />


  <link rel="stylesheet" href="{{ asset('admin/assets/bundles/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">

  <!-- Toastr style CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/toastr.min.css') }}">

  <link rel="stylesheet" href="{{ asset('admin/assets/bundles/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/bundles/codemirror/lib/codemirror.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/bundles/codemirror/theme/duotone-dark.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/bundles/jquery-selectric/selectric.css') }}">

</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
@include('admin.body.header')
@include('admin.body.sidebar')

      <!-- Main Content -->
@yield('admin')
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Developer</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('admin/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('admin/assets/js/page/index.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

  <script src="{{ asset('admin/assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{ asset('admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>

  <!--tinymce js-->
  <script src="{{ asset('admin/assets/tinymce/tinymce.min.js') }}"></script>

  <!-- init js -->
  <script src="{{ asset('admin/assets/js/form-editor.init.js') }}"></script>


  <script src="{{ asset('admin/assets/bundles/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('admin/assets/bundles/codemirror/lib/codemirror.js') }}"></script>
  <script src="{{ asset('admin/assets/bundles/codemirror/mode/javascript/javascript.js') }}"></script>
  <script src="{{ asset('admin/assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>

  <script src="{{ asset('admin/assets/js/page/datatables.js')}}"></script>

  <script type="text/javascript">
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.online = function (e) {
          $('#image')
            .alt('src', e.target.result)
            .width(80)
            .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

  <!-- Custom Toastr JS File -->
  <script src="{{ asset('admin/assets/js/toastr.min.js')}}"></script>

  <script>
    @if(Session::has('messege'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
          case 'info':
               toastr.info("{{ Session::get('messege') }}");
               break;
          case 'success':
              toastr.success("{{ Session::get('messege') }}");
              break;
          case 'warning':
             toastr.warning("{{ Session::get('messege') }}");
              break;
          case 'error':
              toastr.error("{{ Session::get('messege') }}");
              break;
      }
    @endif
  </script>

  <!-- End Toastr JS File -->

</body>

</html>