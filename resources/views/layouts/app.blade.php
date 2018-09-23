

<!DOCTYPE html>
<html lang="en">
   <head>
      @include('inc/head')     
   </head>
   <body class="hold-transition skin-yellow sidebar-mini">
      <div class="wrapper">
         <header class="main-header">
            <!-- Logo -->
            <a href="index.html" class="logo">
               <!-- mini logo -->
               <b class="logo-mini">
               <span class="light-logo"><img src="{{asset('images/logo-light.png')}}" alt="logo"></span>
               <span class="dark-logo"><img src="{{asset('images/logo-dark.png')}}" alt="logo"></span>
               </b>
               <!-- logo-->
               <span class="logo-lg">
               <img src="{{asset('images/logo-light-text.png')}}" alt="logo" class="light-logo">
               <img src="{{asset('images/logo-dark-text.png')}}" alt="logo" class="dark-logo">
               </span>
            </a>


           @include('inc.navbar')

         </header>
         <!-- Left side column. contains the logo and sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar">
               @include('inc/sidebar')      
            </section>
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="centent">              
              @yield('content')
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

         @include('inc.footer')
        
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-light">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
               <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
               <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              
               <!-- /.tab-pane -->
               <!-- Stats tab content -->
               <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
               <!-- /.tab-pane -->
               <!-- Settings tab content -->
               <div class="tab-pane" id="control-sidebar-settings-tab">
                  <form method="post">
                     <h3 class="control-sidebar-heading">General Settings</h3>
                     <div class="form-group">
                        <input type="checkbox" id="report_panel" class="chk-col-grey" >
                        <label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>
                        <p>
                           general settings information
                        </p>
                     </div>
                     <!-- /.form-group -->
                     <div class="form-group">
                        <input type="checkbox" id="allow_mail" class="chk-col-grey" >
                        <label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>
                        <p>
                           Other sets of options are available
                        </p>
                     </div>
                     <!-- /.form-group -->
                     <div class="form-group">
                        <input type="checkbox" id="expose_author" class="chk-col-grey" >
                        <label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>
                        <p>
                           Allow the user to show his name in blog posts
                        </p>
                     </div>
                     <!-- /.form-group -->
                     <h3 class="control-sidebar-heading">Chat Settings</h3>
                     <div class="form-group">
                        <input type="checkbox" id="show_me_online" class="chk-col-grey" >
                        <label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
                     </div>
                     <!-- /.form-group -->
                     <div class="form-group">
                        <input type="checkbox" id="off_notifications" class="chk-col-grey" >
                        <label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
                     </div>
                     <!-- /.form-group -->
                     <div class="form-group">
                        <label class="control-sidebar-subheading">              
                        <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
                        Delete chat history
                        </label>
                     </div>
                     <!-- /.form-group -->
                  </form>
               </div>
               <!-- /.tab-pane -->
            </div>
         </aside>
         <!-- /.control-sidebar -->
         <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
         <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      @include('inc.scripts')	
   </body>
</html>

