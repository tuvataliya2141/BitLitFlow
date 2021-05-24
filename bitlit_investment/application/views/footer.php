</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2018 &copy; Bitlit Investment

    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
</div>
<!--[if lt IE 9]>
<script src="<?= base_url('assets/global/plugins/respond.min.js'); ?>"></script>
<script src="<?= base_url('assets/global/plugins/excanvas.min.js'); ?>"></script> 
<script src="<?= base_url('assets/global/plugins/ie8.fix.min.js'); ?>"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->

<script src="<?= base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/ckeditor/ckeditor.js'); ?>" type="text/javascript"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!--<script type="text/javascript" language="javascript" src="<?php echo base_url('assets/global/plugins/validate/jquery.validate.array_validation.js'); ?>"></script>

<script src="<?= base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>-->
<script src="<?= base_url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'); ?>" type="text/javascript"></script>

<script src="<?= base_url('assets/global/plugins/select2/js/select2.full.min.js'); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?= base_url('assets/global/scripts/app.min.js'); ?>" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url('assets/pages/scripts/table-datatables-rowreorder.min.js'); ?>" type="text/javascript"></script>
<?php /* <script src="<?= base_url('assets/pages/scripts/dashboard.min.js'); ?>" type="text/javascript"></script> */ ?>
<script src="<?= base_url('assets/global/scripts/datatable.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/datatables/datatables.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js'); ?>" type="text/javascript"></script>
<!--<script src="<?= base_url('assets/pages/scripts/table-datatables-managed.min.js'); ?>" type="text/javascript"></script>-->
<script src="<?= base_url('assets/pages/scripts/components-date-time-pickers.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/pages/scripts/table-datatables-colreorder.min.js'); ?>" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?= base_url('assets/layouts/layout/scripts/layout.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/layouts/layout/scripts/demo.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/layouts/global/scripts/quick-sidebar.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/layouts/global/scripts/quick-nav.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/bootbox/bootbox.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/pages/scripts/ui-bootbox.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/pages/scripts/jquery.noty.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/js/bootstrap-timepicker.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/js/bootstrap-timepicker.min.js'); ?>" type="text/javascript"></script>

<!-- END THEME LAYOUT SCRIPTS -->

<script>
    function toast_msg(priority, message) {
        $.toaster({priority: priority, message: message});
    }

    $(document).ready(function () {

        /*$("#del_chk").on('ifClicked', function ()
        {
            $('#del_chk').on('ifChecked', function (event)
            {
                $('.all_del').prop('checked', false);
                $('.all_del').iCheck('check');
            });
            $('#del_chk').on('ifUnchecked', function (event)
            {
                $('.all_del').prop('checked', true);
                $('.all_del').iCheck('uncheck');
            });
        });*/
        $('.alert').delay(5000).fadeOut(500);
        $('#alrt').delay(5000).fadeOut(500);
    });

    function giveNotation(textToShow)
    {
        if (textToShow == null || textToShow == "undefined")
            textToShow = "Please select items.";

        var bvm = 0;
        $(".all_del").each(function (i) {
            isChecked = $(".all_del").is(':checked');
            if (isChecked)
            {
                bvm++;
            }
        });

        if (bvm == 0){
            alert(textToShow);
            return false;
        } else{
            //return confirm("Are You Sure?");
        }
    }
</script>
</body>
</html>