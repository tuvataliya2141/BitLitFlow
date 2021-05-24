<?php if(isset($show) ? $show : ''){ ?>
    <?php if($show == 'disabled'){ ?>
        <style>
            .alert {
                padding: 8px;
                background-color: #f44336;
                color: white;
            }

            .closebtn {
                margin-left: 15px;
                color: white;
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
                transition: 0.3s;
            }

            .closebtn:hover {
                color: black;
            }
        </style>
        <div class="row">
            <div class="col-md-offset-2 col-md-10">
                <div class="col-md-8">
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Your Both Lag Completed!</strong>
                    </div>
                </div>
            </div>
        </div>
        <label class="control-label col-md-4">Select Position
            <span class="required"> * </span>
        </label>
        <div class="col-md-8">
            <select class="form-control select2me" disabled="disabled" name="select_position" id="select_position">
                <option value="">Select...</option>
                    <option value="1">Left Lag</option>
                    <option value="2">Right Lag</option>
            </select>
        </div>
    <?php } else if($show == 'right_show'){ ?>
        <label class="control-label col-md-4">Select Position
            <span class="required"> * </span>
        </label>
        <div class="col-md-8">
            <select class="form-control select2me" name="select_position" id="select_position">
                <option value="">Select...</option>
                    <option value="2">Right Lag</option>
            </select>
        </div>
    <?php } else if($show == 'left_show'){ ?>
         <label class="control-label col-md-4">Select Position
            <span class="required"> * </span>
        </label>
        <div class="col-md-8">
            <select class="form-control select2me" name="select_position" id="select_position">
                <option value="">Select...</option>
                    <option value="1">Left Lag</option>
            </select>
        </div>
    <?php } else { ?>
        <label class="control-label col-md-4">Select Position
            <span class="required"> * </span>
        </label>
        <div class="col-md-8">
            <select class="form-control select2me" name="select_position" id="select_position">
                <option value="">Select...</option>
                    <option value="1">Left Lag</option>
                    <option value="2">Right Lag</option>
            </select>
        </div>
    
    <?php } ?>
<?php } else { ?>
    
    
<?php } ?>

    
