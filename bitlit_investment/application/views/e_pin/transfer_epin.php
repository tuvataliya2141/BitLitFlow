<script type="text/javascript">
    function callback(message)
    {
        var answer = confirm("Are you sure to want delete the user?");
        if (answer) {
            return true;
        }
        return false;
    }
</script>
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('admin/home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="<?= base_url('admin/user'); ?>">Transfer Pin</a>
        </li>
    </ul>                            
</div>
<br>
<div class="row">
    <div class="col-md-12">

        <?php $this->load->view('_partials/messages'); ?>

        <!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="row">
			<div class="col-md-9"></div>
			<div class="col-md-3">
				<div class="btn-group">
					<form action="<?php echo base_url('e_pin/transfer_epin_multiple'); ?>" id="transfer_form" class="form-horizontal" method="post" enctype="multipart/form-data">
					<input id="epin_id" type="hidden" name="epin_id" value="">
					<button  disabled id="transfer" class="btn sbold yellow">
						Transfer Pin &nbsp 
						<i class="fa fa-share"></i>
					</button>
					</form>
				</div>
			</div>
			<div class="col-md-6"></div>
		</div><br>
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Transfer Pin List</span>
                </div>
            </div>			
            <div class="portlet-body">                
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" id="check_all" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th> E-Pin </th>
                            <th> Issued To </th>
                            <th> Amount </th>
                            <th> Date </th>                            
                            <th> Status </th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($am_data)):
                            foreach ($am_data as $key => $value) {
                                ?>
                                <tr class="odd gradeX">
                                    <td>
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" name="chkdlt" class="checkboxes" value="<?php echo $value->id; ?>" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <?php echo $value->e_pin; ?>
                                    </td>
                                    <td>
                                        <?php echo $value->u_id; ?>
                                    </td>
                                    <td>
                                        <?php echo $value->amount; ?>
                                    </td>
                                    <td>
                                        <?php echo $value->isused_date; ?>
                                    </td>
                                    <td>
                                        <?php if ($value->status == 0) { ?>
                                            <span class="btn btn-circle btn-xs green"> unused </span>
                                        <?php } ?>
                                    </td>
                                </tr>

                            <?php } else: ?>

                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<script>
    var checkboxes = $("input[type='checkbox']"),
            submitButt = $("#transfer");

    checkboxes.click(function () {
        submitButt.attr("disabled", !checkboxes.is(":checked"));
    });

    $(document).ready(function () {

        $('body').on('click', '#check_all', function () {
            $('input:checkbox').prop('checked', this.checked);
            ck();
            // console.log('result'); 
        });

        $('body').on('click', '.checkboxes:checkbox', function () {
            ck();
        });

        var ck = function () {
            var result = $(".checkboxes:checkbox:checked").map(function () {
                return this.value
            }).get().join();
            $("#epin_id").val(result);
            // console.log(result); 
        }


        $('#transfer').click(function () {

            var r = $("#epin_id").val();
            if (r.trim() == '') {
                toastr["warning"]('You have not select any Item', "Epin");
            } else {
                $('#transfer_form').submit();
            }
            // console.log(r);

        });


    });

//    $("#sample_editable_1_new").click(function () {
//        var allVals = [];
//        $('[name^="chkdlt"]:checked').each(function () {
//            allVals.push($(this).val());
//        });
//        // alert(allVals);
//        if (allVals.length) {
//            deleteDepartment('Transfer Pin', "Are you sure want to Transfer Pin ?", allVals);
//        } else {
//            alert('Plese Select CheckBox First.');
//        }
//    });
//    function  deleteDepartment(head, msg, allVals) {
//        bootbox.confirm({
//            title: head,
//            message: msg,
//            buttons: {
//                cancel: {
//                    label: '<i class="fa fa-times"></i> No'
//                },
//                confirm: {
//                    label: '<i class="fa fa-check"></i> Yes'
//                }
//            },
//            callback: function (result) {
//                if (result === true)
//                {
//                    $.ajax({
//                        type: 'POST',
//                        url: '<?php //echo base_url()  ?>e_pin/transfer_epin_multiple/',
//                        data: "tid=" + allVals,
//                        success: function (response) {
//                            // alert (response);
//                            if (response == 1) {
//                                $(location).attr('href', '< base_url() ?>category/index/1');
//                            } else {
//                                toast_msg('danger', ' Something Went Wrong');
//                            }
//                        }
//                    });
//                } else {
//                    $('[name^="chkdlt"]').prop('checked', false);
//                    $('[name="selectall"]').prop('checked', false);
//                    $("#dlt").attr('disabled','disabled');
//                }
//            }
//        });
//    }
</script>