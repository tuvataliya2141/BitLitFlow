<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?= base_url('home'); ?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Registration</a>
        </li>
    </ul>                            
</div>
<br>
<?php //echo "<pre>"; print_r($last_data); die; ?>
<?php $show = $upliner->upliner; ?>
<div class="row">
    <div class="col-md-12">
        <?php $this->load->view('_partials/messages'); ?>
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-blue"></i>
                    <span class="caption-subject font-blue sbold uppercase">
                        New Registration Information
                    </span>
                </div>
                <div class="actions">                    
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="<?php echo base_url('admin/team/new_register'); ?>" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Upliner ID
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text"  value="<?= isset($up_data->user_id) ? $up_data->user_id : ''; ?>" disabled="disabled" data-required="1" class="form-control" />
                                        <input type="hidden" name="upliner_id"  value="<?= isset($up_data->id) ? $up_data->id : ''; ?>" />
                                        <?php echo form_error('upliner_id'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Refferal ID
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="refferal_id" id="refferal_id" onchange="getRefferalName(this.value)">
                                            <option value="">Select...</option>
                                            <?php foreach ($upliner_data as $refferal) { ?>
                                                <option value="<?= $refferal->id; ?>" <?= ($refferal->refferal_id == set_value('refferal_id')) ? 'selected="selected"' : ''; ?>><?= $refferal->user_id; ?></option>
                                            <?php } ?>
                                        </select>
                                        <?php echo form_error('refferal_id'); ?>    
                                    </div>
                                </div>

                                <div id="position_data" class="form-group">
                                    <label class="control-label col-md-4">Select Position
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <select class="form-control select2me" name="select_position" id="select_position">
                                            <?php if ($pos == 1) { ?>
                                                <option value="1">Left Lag</option>
                                            <?php } else if ($pos == 2) { ?> 
                                                <option value="2">Right Lag</option>
                                            <?php } ?>
                                        </select>
                                        <?php echo form_error('select_position'); ?>    
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4">Email Id
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="email_id" placeholder="Enter Email Id" name="email_id" value="<?php echo set_value('email_id'); ?>" data-required="1" class="form-control" />
                                        <?php echo form_error('email_id'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Mobile No
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="mobile_no" placeholder="Enter Mobile No" name="mobile_no" value="<?php echo set_value('mobile_no'); ?>" data-required="1" class="form-control" />
                                        <?php echo form_error('mobile_no'); ?>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Upliner Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8" id="upliner_data">
                                        <input type="text" id="upliner_name" disabled="disabled" name="upliner_name" value="<?= $up_data->member_name; ?>" data-required="1" class="form-control" />
                                        <?php echo form_error('upliner_name'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Refferal Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8" id="refferal_data">
                                        <input type="text" id="refferal_name" disabled="disabled" name="refferal_name" value="<?php echo set_value('refferal_name'); ?>" data-required="1" class="form-control" />
                                        <?php echo form_error('refferal_name'); ?>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Member Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="member_name" placeholder="Enter Member Name" name="member_name" value="<?php echo set_value('member_name'); ?>" data-required="1" class="form-control" />
                                        <?php echo form_error('member_name'); ?>    
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Surname
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="text" id="father_name" placeholder="Enter Surname" name="father_name" value="<?php echo set_value('father_name'); ?>" data-required="1" class="form-control" />
                                        <?php echo form_error('father_name'); ?>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-offset-2 col-md-10">
                        <label class="mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" id="status" value="1" name="status">  I have read & understand carefully the <a href="#" data-target="#myModal" data-toggle="modal"> terms & conditions</a> of Bitlit Investment. Ltd and also agreed to abide by the same.
                            <?php echo form_error('status'); ?>  
                            <span></span>
                        </label>
                    </div>

                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                    <h4 style="color:red;">PLEASE CAREFULLY READ THIS SECTION AND THE FOLLOWING SECTIONS ENTITLED:</h4>
                                    <br>
                                    <label>“DISCLAIMER OF LIABILITY”, </label>
                                    <br><br>
                                    <label>“NO REPRESENTATIONS AND WARRANTIES”,  </label>
                                    <br><br>
                                    <label>“REPRESENTATIONS AND WARRANTIES BY YOU”,   </label>
                                    <br><br>
                                    <label>“CAUTIONARY NOTE ON FORWARD-LOOKING STATEMENTS”,    </label>
                                    <br><br>
                                    <label>“SECURITIES DISCLAIMER”   </label>
                                    <br><br>
                                    <p>This Whitepaper is for information purposes only. Additionally, please see the Risk Factors
                                        section at the end of this whitepaper. The contents of this Whitepaper are not a financial
                                        promotion. Therefore, none of the contents of this Whitepaper serves as an invitation or
                                        inducement to engage in any sort of investment activity. </p>

                                    <p>Prospective acquirers of Bitlitcoin tokens should carefully consider and evaluate all risks and
                                        uncertainties associated with the cryptocurrencies, Bitlitcoin and its respective businesses and
                                        operations. Familiarize yourself with all the information set out in this Whitepaper prior to any
                                        purchase of Bitlitcoin. Ensure that you are aware of all of the would be risks prior to obtaining
                                        Bitlitcoin. The Risk Section details all potential risks that you should consider. We recommend
                                        that you seek out independent financial advice before engaging in any sort of business endeavor. </p>                        

                                    <p>Bitlitcoin / BitlitFlow is not intended to constitute securities in any jurisdiction. Bitlitcoin / BitlitFlow is a financial and
                                        nongovernmental organization which does not publish its business operations. </p>

                                    <p>If you are in any doubt as to your purchase in Bitlitcoin / BitlitFlow, you should consult your legal, financial,
                                        tax or other professional advisor(s). </p>

                                    <p>This Whitepaper does not constitute or form part of any opinion on any advice to purchase
                                        Bitlitcoin / BitlitFlow. </p>

                                    <p>No regulatory authority has examined or approved of any of the information set out in this
                                        Whitepaper. No such action has been or will be taken under the laws, regulatory requirements
                                        or rules of any jurisdiction. This Whitepaper and any part thereof must not be relied upon in
                                        connection with any investment decision. </p>

                                    <p>This Whitepaper is not examined by any regulatory authority, so the publication, distribution
                                        or dissemination of this Whitepaper does not imply that it has been approved or the applicable
                                        laws, regulatory requirements or rules have been complied with.</p>
                                    <br><br>
                                    <h5><label>1. DISCLAIMER OF LIABILITY</label></h5>
                                    <br>
                                    <p>To the maximum extent permitted by the applicable laws, regulations and rules, Bitlitcoin / BitlitFlow shall
                                        not be liable for any indirect, special, incidental, consequential or other losses of any kind, in
                                        tort, contract or otherwise (including but not limited to loss of revenue, income or profits, and
                                        loss of use or data...), arising out of or in connection with any acceptance of or reliance on this
                                        Whitepaper or any part thereof by you. To the maximum extent permitted by the applicable
                                        laws, regulations and rules, Bitlitcoin / BitlitFlow and its affiliates and their respective officers, employees
                                        or agents will, in relation to the website, not be liable for any damages of any kind, including,
                                        but not limited to, direct, consequential, incidental, special or indirect damages (including but
                                        not limited to lost profits, loss of revenue or third party loss whether foreseeable or otherwise,
                                        trading losses or damages that result from use or loss of use of the website and Bitlitcoin / BitlitFlow. </p>

                                    <br><br>
                                    <h5><label>2. NO REPRESENTATIONS AND WARRANTIES</label></h5>
                                    <br>
                                    <p>Bitlitcoin / BitlitFlow does not make or purport to make, and hereby disclaims, any representation, warranty or
                                        undertaking in any form whatsoever to any entity or person, including any representation, warranty
                                        or undertaking in relation to the truth, accuracy and completeness of any of the information set out
                                        in this Whitepaper.. </p>


                                    <br><br>
                                    <h5><label>3. REPRESENTATIONS AND WARRANTIES BY YOU </label></h5>
                                    <br>
                                    <p>By accessing and/or accepting possession of any information in this Whitepaper or such part
                                        thereof (as the case may be), you represent and warrant to Bitlitcoin / BitlitFlow as follows: </p>

                                    <ul>
                                        <li>You agree and acknowledge that the Bitlitcoin / BitlitFlow does not constitute securities in any form in any
                                            jurisdiction and does not use POS technology or any technologies under the patent of
                                            Ethereum or any third parties</li>
                                        <li>You agree that you purchase Bitlitcoin / BitlitFlow and cooperate with Bitlitcoin / BitlitFlow at your own discretion and
                                            not under the force of any third parties.</li>
                                        <li>You agree that any purchase or other business operations in relation to Bitlitcoin / BitlitFlow must be
                                            conducted through smart contract.</li>
                                        <li>You agree that Bitlitcoin / BitlitFlow does not owe the purchasers in terms of major accounts such as
                                            commission, interest rate, bonus... if the development of Bitlitcoin / BitlitFlow project and other
                                            ecosystem-building projects fail or do not go in accordance with expectations.</li>
                                        <li>You agree and acknowledge that your purchase in and cooperation with Bitlitcoin / BitlitFlow must adhere
                                            to the applicable laws and regulations of your home country. </li>
                                        <li>You have a basic degree of understanding of the operation, functionality, usage, storage,
                                            transmission mechanisms and other material characteristics of cryptocurrencies, blockchain
                                            based software systems, cryptocurrency wallets or other related cryptocurrency storage
                                            mechanisms, blockchain technology and smart contract technology</li>
                                        <li>You are fully aware and understand that in the case where you wish to purchase Bitlitcoin / BitlitFlow,
                                            there are risks associated with Bitlitcoin / BitlitFlow, their respective business and operations and
                                            other projects related to Bitlitcoin / BitlitFlow. </li>
                                        <li>You agree that all of the above representations and warranties are true, complete,
                                            accurate and non-misleading from the time of your access to and/or acceptance of
                                            possession this Whitepaper or such part thereof (as the case may be). </li>
                                    </ul>

                                    <br><br>
                                    <h5><label>4. CAUTIONARY NOTE ON FORWARD-LOOKING STATEMENTS</label> </h5>
                                    <br>
                                    <p>Except for statements of historical fact or statements that are guaranteed, all statements
                                        contained in this Whitepaper, in the forum, in press releases or in any place accessible by the
                                        public that may be made by directors, employees or the purchasers/distributor acting on
                                        behalf of Bitlitcoin / BitlitFlow (as the case may be) constitute “forward-looking statements”. Some of
                                        these statements can be identified by forward-looking terms such as “if”, “if any”, “expect”,
                                        “possible”, probable”, “believe”, “anticipate”, “aim”, “target”, “intend”, “may”, “plan”,
                                        “project”, “should”, “would”, “will” or other similar terms. </p>

                                    <p>However, these terms are not the exclusive means of identifying forward-looking statements.
                                        All statements regarding growth rate, financial conditions, revenue, number of members,
                                        cryptocurrency development, including Bitlitcoin / BitlitFlow's profitability and development prospect in
                                        this Whitepaper are forward-looking statements and have not been examined or approved by
                                        any regulatory authority.
                                    </p>
                                    <p>These forward-looking statements in this Whitepaper or any statements made by directors,
                                        employees or the purchasers/distributor acting on behalf of Bitlitcoin / BitlitFlow in the future may involve
                                        known and unknown risks, uncertainties and there exist other factors that may cause the
                                        actual future results, performance or achievements of Bitlitcoin / BitlitFlow projects to be different from
                                        any future results, performance or achievements expected, expressed or implied by such
                                        forward-looking statements. These factors include, amongst others: </p> 

                                    <ul>
                                        <li type="a">changes in political, social, economic and stock or cryptocurrency market conditions, and the
                                            regulatory environment in the countries in which the Company conducts its respective
                                            businesses and operations;</li>
                                        <li type="a">the risk that the Company may be unable or execute or implement their respective business
                                            strategies and future plans; </li>
                                        <li type="a">changes in interest rates and exchange rates of fiat currencies and cryptocurrencies; </li>
                                        <li type="a">changes in the anticipated growth strategies and expected internal growth of Bitlitcoin / BitlitFlow; </li>
                                        <li type="a">changes in the availability and fees payable to the Company in connection with their respective
                                            businesses and operations; </li>
                                        <li type="a">changes in the availability and salaries of employees who are required by the Company and/or
                                            the Distributor to operate their respective businesses and operations; </li>
                                        <li type="a">changes in preferences of customers;</li>
                                        <li type="a">changes in competitive conditions under which the Company operates, and the ability of the
                                            Company to compete under such conditions; I) changes in the future capital needs of the
                                            Company and the availability of financing and capital to fund such needs; </li>
                                        <li type="a">war or acts of international or domestic terrorism;</li>
                                        <li type="a">occurrences of catastrophic events, natural disasters that affect the businesses and/or
                                            operations of the Company; </li>
                                        <li type="a">other factors beyond the control of the Company; m) any risk and uncertainties associated with
                                            the Company, their businesses and operations and other projects related to Bitlitcoin / BitlitFlow. </li>
                                    </ul>

                                    <br><br>
                                    <h5><label>5. SECURITIES DISCLAIMER</label></h5>
                                    <br>
                                    <p>Section 2 of the Securities Act of 1933, as amended, defines “security” as: “any note, stock,
                                        treasury stock, security feature, security-based swap, bond, debenture, evidence of
                                        indebtedness, certificate of interest or participation in any profit-sharing agreement, collateraltrust
                                        certificate, preorganization certificate of subscription, transferable share, investment
                                        contract, voting-trust certificate, certificate of deposit for a security, fractional undivided
                                        interest in oil, gas, or other mineral rights, any put, call, straddle, option, or privilege on any
                                        security, certificate of deposit, or group or index of securities (including any interest therein or
                                        based on the value thereof), or any put, call, straddle, option, or privilege entered into on a
                                        national securities exchange relating to foreign currency, or, in general, any interest or
                                        instrument commonly known as a “security,” or any certificate of interest or participation in,
                                        temporary or interim certificate for, receipt for, guarantee of, or warrant or right to subscribe
                                        to or purchase, any of the foregoing.”
                                    </p>
                                    <p>The Bitlitcoin / BitlitFlow is not an investment-grade security of any kind. Bitlitcoin / BitlitFlow is a digital token for
                                        participation and use of the Bitlitcoin / BitlitFlow’s services and does not confer ownership of a stake in
                                        Bitlitcoin / BitlitFlow’s business. </p>

                                    <p>In recognition of the fact that the United States government has not provided guidance or law
                                        around the sale of digital tokens, we believe it best that no United States-based individuals
                                        participate in the purchase of the Bitlitcoin / BitlitFlows. </p>

                                    <p>No regulatory authority has examined or approved any of the information set out in this
                                        Whitepaper. No such action has been or will be taken under the laws, regulatory requirements
                                        or rules of any jurisdiction. The publication, distribution or dissemination of this Whitepaper
                                        does not imply that the applicable laws, regulatory requirements, or rules have been complied. </p>

                                    <p>In addition, foreign investors should be aware of laws prohibiting its residents from
                                        participating in ICOs initial coin offerings (ICOs) or token sales, particularly in Canada, South
                                        Korea, China and Singapore.</p>

                                    <p>This Whitepaper, or any part thereof, as well as any copies, must not be taken or transmitted
                                        to any country where distribution or dissemination of this Whitepaper is prohibited or
                                        restricted.</p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-5 col-md-9">
                                <button type="submit" class="btn green">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function (e)
    {
       
        $('#form_sample_1').validate({
            rules: {
                refferal_id: {
                    required: true
                }, 
                email_id: {
                    required: true                    
                }, 
                mobile_no: {
                    required: true,
                }, 
                member_name: {
                    required: true,
                }, 
                father_name: {
                    required: true,
                }, 
                status: {
                    required: true,
                }, 
            },
            messages: {
                refferal_id: {
                    required: "Please Select refferal name."
                },
                email_id: {
                    required: "Please enter Email Id."
                },
                mobile_no: {
                    required: "Please enter Mobile No.",
                },
                member_name: {
                    required: "Please enter Member Name.",
                },
                father_name: {
                    required: "Please enter Surname.",
                },
                status: {
                    required: "Please check terms & conditions.",
                },
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

    });
    
</script>
<script src="<?= base_url('assets/js/jquery.bootstrap-growl.min.js'); ?>" type="text/javascript"></script>
<script>
	$(".error").click(function () {
		$.bootstrapGrowl('Your Both Lag Complet!', {
			type: 'danger',
			delay: 2000,
		});
	});
	$(document).ready(function () {
		var date_input = $('input[name="datepicker"]'); //our date input has the name "date"
		var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		});
	});

	function getUplinerName(sid) {
		//var sid=$("#user_id").val();
		//alert(sid);
		if (sid != '')
		{
			$.ajax({
				type: 'POST',
				url: "<?php echo base_url() ?>admin/user/getUplinerName/",
				data: {primary_customer: sid},
				dataType: 'json',
				success: function (response) {
					$("#upliner_data").html(response.view);

				}
			});

		}

		if (sid != '')
		{
			$.ajax({
				type: 'POST',
				url: "<?php echo base_url() ?>admin/user/checkUpliner/",
				data: {primary_customer: sid},
				dataType: 'json',
				success: function (response) {

					$("#position_data").html(response.view);

				}
			});

		}
	}
	function getRefferalName(sid) {
		//var sid=$("#user_id").val();
		//alert(sid);
		if (sid != '')
		{
			$.ajax({
				type: 'POST',
				url: "<?php echo base_url() ?>admin/user/getRefferalName/",
				data: {primary_customer: sid},
				dataType: 'json',
				success: function (response) {
					//alert(response);
					$("#refferal_data").html(response.view);

				}
			});

		}
	}
</script>    