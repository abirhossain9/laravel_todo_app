
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Header -->
    @include('backend.includes.header')

    <!-- CSS -->
    @include('backend.includes.css')
  </head>

  <body>

   <!-- Leftbar -->
   @include('backend.includes.leftbar')

   <!-- Topbar -->
   @include('backend.includes.topbar')

   <!-- Rightbar -->
   @include('backend.includes.rightbar')





    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

     @yield('content')

     <!-- footer -->
     @include('backend.includes.footer')



    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- scripts -->
    @include('backend.includes.scripts')


  </body>
</html>
