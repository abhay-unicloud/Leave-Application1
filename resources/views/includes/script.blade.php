<script>
function togglepassword() {
  var x = document.getElementById("show_hide");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById("btn-password").innerHTML="Hide";
  } else {
    x.type = "password";
    document.getElementById("btn-password").innerHTML="Show";
  }
 /* $(document).ready(function() {
          $('#emp_id').on('change', function() {
              var empid = $(this).val();
              $.ajax({
                  url: "",
                  type: 'GET',
                  data: { '': empid },
                  success: function(response) {
                      $('#emp_data').html(response);
                      console.log(response);
                  },
                  error: function(xhr, status, error) {
                      console.error('Error fetching book image');
                  }
              });
          });
      });*/
}</script>
 
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
          <script src="{{url('assets/src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('assets/src/plugins/src/mousetrap/mousetrap.min.js')}}"></script>
    <script src="{{url('assets/src/plugins/src/waves/waves.min.js')}}"></script>
    <script src="{{url('assets/layouts/modern-light-menu/app.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{url('assets/src/plugins/src/apex/apexcharts.min.js')}}"></script>
    <script src="{{url('assets/src/assets/js/dashboard/dash_1.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    