<script src="{{ asset('dist/js/jquery-2.1.1.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.min.js ')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!--chart--> 
<script src="{{ asset('bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('bower_components/morris.js/morris.js ')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.js"></script>

<!-- DataTables -->

<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script src="{{ asset('bower_components/datatables.net/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net/js/jszip.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net/js/pdfmake.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net/js/vfs_fonts.js')}}"></script>

<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('dist/js/dataTables.rowReorder.min.js') }}"></script>
<script src="{{ asset('dist/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('dist/js/cbpAnimatedHeader.js') }}"></script>
<script src="{{ asset('dist/js/classie.js')}}"></script>
    <!-- Select2 -->
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js ')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/sweetalert.min.js ')}}"></script>
{{-- <script src="{{ asset('dist/js/contact_me.js')}}"></script> --}}
<script src="{{ asset('dist/js/count-to.js')}}"></script>
<script src="{{ asset('dist/js/jqBootstrapValidation.js')}}"></script>
<script src="{{ asset('dist/js/jquery.appear.js')}}"></script>
<script src="{{ asset('dist/js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('dist/js/jquery.fitvids.js')}}"></script>
{{-- <script src="{{ asset('dist/js/login.js')}}"></script> --}}
<script src="{{ asset('dist/js/modernizr.custom.js')}}"></script>
<script src="{{ asset('dist/js/owl.carousel.min.js')}}"></script>
{{-- <script src="{{ asset('dist/js/register.js')}}"></script> --}}
<script src="{{ asset('dist/js/script.js')}}"></script>
<script src="{{ asset('dist/js/styleswitcher.js')}}"></script>
<script>

$(window).on('load',function() { 
    $('#table1').DataTable({
        rowReorder: {
          selector: 'td:nth-child(2)'
        },
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        'responsive': true,
        'scrollCollapse': true,
    });

    $('.datepicker').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy',
        todayBtn:true,
        todayHighlight:true,
        orientation: 'auto'
    });
    
    $('.statistic-counter').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
     
});

</script>
<script>
  //  ASCII Codes
function lettersOnly() 
    {
      var charCode = event.keyCode;
       //alert(charCode);
      if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8 || charCode == 32)
        return true;
      else
        return false;
    }
function isNumber(evt) 
    {
      evt = (evt) ? evt : window.event;
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          return false;
      }
      return true;
    }
function isEmail(evt)
    {
      var status = false;     
      var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
         if (document.myform.email1.value.search(emailRegEx) == -1) {
              alert("Please enter a valid email address.");
         }
         else if (document.myform.email1.value != document.myform.email2.value) {
              alert("Please enter a valid email address.");
         }
         else {
              // alert("Woohoo!  The email address is in the correct format and they are the same.");
              status = true;
         }
         return status;
    }
function onlyNumbersandSpecialChar(evt) 
    {
        var e = window.event || evt;
        var charCode = e.which || e.keyCode;

        if (charCode > 31 && (charCode < 48 || charCode > 57 || charCode > 107 || charCode > 219 || charCode > 221) && charCode != 40 && charCode != 32 && charCode != 41 && (charCode < 43 || charCode > 46)) {
            if (window.event) //IE
                window.event.returnValue = false;
            else //Firefox
                e.preventDefault();
        }
        return true;

    }
function onlylettersandSpecialChar() 
    {
     var charCode = event.keyCode;
      if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8 || charCode == 40 || charCode == 41 || charCode == 32 ||charCode ==92 || charCode == 45 || charCode ==124)
          return true;
      else
          return false;
    }
function isAlphaNumeric(e)
    { // Alphanumeric only
      var k;
      document.all ? k=e.keycode : k=e.which;
      return((k>47 && k<58)||(k>64 && k<91)||(k>96 && k<123)||k==0);
    }
function isNumberKey(evt)
    {
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode != 32 && charCode > 31 && charCode != 45
        && (charCode < 48 || charCode > 57))
         return false;

      return true;
    }
function checkDec(el)
    {
     var ex = /^[0-9]+\.?[0-9]*$/;
     if(ex.test(el.value)==false)
      {
        el.value = el.value.substring(0,el.value.length - 1);
      }
    }
</script>