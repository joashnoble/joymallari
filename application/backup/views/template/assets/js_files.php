    <!-- jQuery 2.2.3 -->
    <script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="assets/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="assets/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="assets/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/dist/js/demo.js"></script>
    <!-- Aicheck -->
    <script src="assets/plugins/iCheck/icheck.min.js"></script>

    <script src="assets/plugins/blockUI.js"></script>
    <!-- DataTables -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

    <script src="assets/plugins/datetimepicker/bootstrap-datetimepicker.js"></script>

            <!-- PNotify -->
    <script type="text/javascript" src="assets/plugins/notify/pnotify.core.js"></script>
    <script type="text/javascript" src="assets/plugins/notify/pnotify.buttons.js"></script>
    <script type="text/javascript" src="assets/plugins/notify/pnotify.nonblock.js"></script>
            <!-- sweet alert -->
    <script type="text/javascript" src="assets/plugins/sweet-alert/sweetalert.min.js"></script>
    <!-- Select2 -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>
    <!-- print this:) -->
    <script src="assets/plugins/printThis.js"></script>
    <!--lightbox -->
    <script src="assets/plugins/lightgallery/lib/lightgallery.js"></script>
    <!-- pace -->
    <script src="assets/plugins/pace/pace.min.js"></script>
    
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
    
    <script>
    $( document ).ready(function() {
        $('form').submit(function() {
      return false;
    });
    });

    $(window).load(function() {
        setTimeout(function() {
            $(".loader").fadeOut("slow");
            //alert("aw");
    
        }, 600);
    })
    
    function getBgColorHex(elem){
        var color = elem.css('background-color')
        var hex;
        if(color.indexOf('#')>-1){
            //for IE
            hex = color;
        } else {
            var rgb = color.match(/\d+/g);
            hex = '#'+ ('0' + parseInt(rgb[0], 10).toString(16)).slice(-2) + ('0' + parseInt(rgb[1], 10).toString(16)).slice(-2) + ('0' + parseInt(rgb[2], 10).toString(16)).slice(-2);
        }
        return hex;
    }

    function gettextColorHex(elem){
        var color = elem.css('color')
        var hex;
        if(color.indexOf('#')>-1){
            //for IE
            hex = color;
        } else {
            var rgb = color.match(/\d+/g);
            hex = '#'+ ('0' + parseInt(rgb[0], 10).toString(16)).slice(-2) + ('0' + parseInt(rgb[1], 10).toString(16)).slice(-2) + ('0' + parseInt(rgb[2], 10).toString(16)).slice(-2);
        }
        return hex;
    }

    var selectcolor = getBgColorHex($('.navbar'));
    var textcolor = gettextColorHex($('.logo'));
    $('.modal-header').css('background-color',selectcolor);
    $('.btn-primary').css('background-color',selectcolor);
    $('.btn-primary').css('color',textcolor);
    $('.modal-title').css('color',textcolor);
    $('.xbutton').css('color',textcolor);
    /*loadder color */
    /*$('.loader').css('background-color',selectcolor);*/
    

    $('.clearfix li').click(function(){
        var selectcolor = getBgColorHex($('.navbar'));
        var textcolor = gettextColorHex($('.logo'));
        $('.modal-header').css('background-color',selectcolor);
        $('.btn-primary').css('background-color',selectcolor);
        $('.btn-primary').css('color',textcolor);
        $('.modal-title').css('color',textcolor);
        $('.xbutton').css('color',textcolor);
       
    });

    $('#tbl_ref_patient tbody').delegate('tr', 'click', function() {
            //for printing checkboxes JBPV
            var selectcolor = getBgColorHex($('.navbar'));
            var textcolor = gettextColorHex($('.logo'));
            $('.odd').css('background-color','#eeeeee');
            $('.odd').css('color','#616161');
            $('.even').css('background-color','white');
            $('.even').css('color','#616161');
            if(selectcolor=='#ffffff'){
                $(this).closest("tr").css('background-color',textcolor);
                $(this).closest("tr").css('color',selectcolor);
            }
            else{
                $(this).closest("tr").css('background-color',selectcolor);
                $(this).closest("tr").css('color','white');
            }
                _selectRowObj=$(this).closest('tr');
                var data=dt.row(_selectRowObj).data();
                _selectedID=data.ref_patient_id;
                _selectedname = data.fullname;
                $('.areasex').text(data.sex);
                $('.areaage').text(data.age);
                $('.areadryweight').text(data.dry_weight);
                $('.areaaddress').text(data.address);
                $('.areabirthdate').text(data.bdate);
                $('.areafullname').text(_selectedname);
                /*alert(_selectedname);*/
                /*alert(_selectedID);*/
                _isChecked = this.checked = true; //for checking if there is any highlighted field
             
    });

    $('#tbl_ref_patient').bind("contextmenu", function(event) {
        event.preventDefault();
        if(event.which == 3){
            if(_isChecked==true){
                $('.areafullname').text(_selectedname);
                $('#modal_process_type').modal('toggle'); 
            }
            else{
                notice_notif();
            }
        }  
    });

    var showSpinningProgress=function(e){
                $.blockUI({ message: '<img src="assets/loader.svg" width="100px" height="100px;"></img><h3 style="color:white;font-family:Segoe UI Light">Saving Changes</h3>',
                    css: { 
                    border: 'none', 
                    padding: '15px', 
                    backgroundColor: 'none', 
                    opacity: 1,
                    zIndex: 20000,
                } });
                $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);  
    };

    var showSpinningProgressUpload=function(e){
                $.blockUI({ message: '<img src="assets/loader.svg" width="100px" height="100px;"></img><h3 style="color:white;font-family:Segoe UI Light">Uploading Image</h3>',
                    css: { 
                    border: 'none', 
                    padding: '15px', 
                    backgroundColor: 'none', 
                    opacity: 1,
                    zIndex: 20000,
                } });
                $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);  
    };

    var showSpinningProgressLOADING=function(e){
                $.blockUI({ message: '<img src="assets/loader.svg" width="100px" height="100px;"></img><h3 style="color:white;font-family:Segoe UI Light">Loading Data</h3>',
                    css: { 
                    border: 'none', 
                    padding: '15px', 
                    backgroundColor: 'none', 
                    opacity: 1,
                    zIndex: 20000,
                } });
                $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);  
    };

    var showSpinningProgressUPLOAD=function(e){
                $.blockUI({ message: '<img src="assets/loader.svg" width="100px" height="100px;"></img><h3 style="color:white;font-family:Web Serveroff">Uploading Image..</h3>',
                    css: { 
                    border: 'none', 
                    padding: '15px', 
                    backgroundColor: 'none', 
                    opacity: 1,
                    zIndex: 20000,
                } });
                $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);  
    };

    var validateRequiredFields=function(f){
    var stat=true;
    var pword=$('#user_pword').val();
    var cpword=$('#user_confirm_pword').val();
    $('div.form-group').removeClass('has-error');

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

                if($(this).is('select')){
                if($(this).val()==0 || $(this).val()==null){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('.input-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
            
                }else{
                if($(this).val()==""){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('.input-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
                if(pword!=cpword){
                    showNotification({title:"Error!",stat:"error",msg:"Pasword Doesnt Match"});
                    $('#password').addClass('has-error');
                    $('#confpassword').addClass('has-error');
                    $('#user_confirm_pword').focus();
                    stat=false;
                    return false;
                }
            }
            



        });

        return stat;
        };

    </script>
                
