<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Group Matching Team</a>
        </li>
    </ul>                            
</div>
<br>
<div class="row">
    <div class="col-md-12">

        <?php $this->load->view('_partials/messages'); ?>

        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Group Matching Team</span>
                </div>
            </div>
			<div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-8">
                            <input type="text" name="search" id="search"  value="" placeholder="Enter User Id..." class="form-control" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet-body">

                <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" class="MainRounded" width="100%">
                    <tbody><tr>
                            <td id="show_data">

                            </td>
                        </tr>
                    </tbody></table>

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        //Perform Ajax request.
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url() ?>team/get_group/',
            dataType: 'json',
            success: function (response) {
                $('#show_data').html(response.view);
            },
            //error: function (xhr, ajaxOptions, thrownError) {
            //var errorMsg = 'Ajax request failed: ' + xhr.responseText;
            // $('#show_data').html(errorMsg);
            //}
        });
    });
    
    function click_show($id) {
        //alert($id);
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url() ?>team/clcik_group/',
            dataType: 'json',
            data:{uid:$id},
            success: function (response) {
                $('#show_data').html(response.view);
            },
            //error: function (xhr, ajaxOptions, thrownError) {
            //var errorMsg = 'Ajax request failed: ' + xhr.responseText;
            // $('#show_data').html(errorMsg);
            //}
        });
    
    }
	
	$(document).ready(function () {
        $("#search").keyup(function () {
            if ($("#search").val().length > 2) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url() ?>team/search_group/",
                    cache: false,
                    dataType: 'json',
                    data: 'search=' + $("#search").val(),
                    success: function (response) {
                        $('#show_data').html(response.view);
                    },
                    error: function () {
                        alert('Error while request..');
                    }
                });
            }
            return false;
        });
    });

</script>