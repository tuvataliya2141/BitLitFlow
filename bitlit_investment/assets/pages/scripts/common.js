// JavaScript Document
var base_url	= '/';

//------------------------------delete single-----------------------//

function delete_items(str,id,deleteurl)
{
		
		var answer	=	confirm('Delete '+str+'','Are you sure want to delete?',function(result)
		{
			if(result)
			{
				$.ajax({
				  type: "POST",
				  url: deleteurl,
				  data: { ids:id}
				}).done(function( msg ) {
					message	=	jQuery.parseJSON(msg);
					if(message.type=='success')
					{
						noty({"text":message.msg,"layout":"topRight","type":"success"});	
						
						window.location.reload();
						//window.location.href	=	location.href;	
					}
					else
					{
						noty({"text":message.msg,"layout":"topRight","type":"error"});	
					}
				  });
			}
		});		
}

function change_status_new(value,controller)
{
		formdata	=	{id:value};
		$.post(controller,formdata,function(result)
		{
			controller	=	" '"+controller+"'";
			if(result==0)
			{
				$("#td_status_"+value).html('<span class="btn  btn-success" onclick="javascript:change_status_new('+value+','+controller+')">Active</span>');
				noty({"text":"Status changed successfully.. ","layout":"topRight","type":"success"});	
				
			}
			else if(result==1)
			{
				$("#td_status_"+value).html('<span class="btn  btn-danger" onclick="javascript:change_status_new('+value+','+controller+')">Inactive</span>');
				noty({"text":"Status changed successfully.. ","layout":"topRight","type":"success"});	
			}
			else
			{
				noty({"text":"Something Went Wrong.Please Try Again. ","layout":"topRight","type":"error"});	
			}
		});
}

function selectSet(id,val)
{
	$('#'+id+" option").each(function()
	{
		if($(this).val()==val)
		{
			$(this).attr('selected','true');
		}
	});
}
function delete_all(id,deleteurl)
{
	
	var numberOfChecked = $('input.selectRow:checked').length;	
	if(numberOfChecked==0)
	{
			noty({"text":"Please select atleast one record","layout":"topRight","type":"error"});
			return false;
	}
	else
	{
		
		confirm('Delete Item(s)','Are you sure? you want to delete?',function(result){
			if(result)
			{
				selectedId = new Array();
				$('#'+id+' .selectRow').each(function(){
					if($(this).is(":checked"))
						selectedId.push($(this).val());
				});
				
				$.ajax({
				  type: "POST",
				  url: deleteurl,
				  data: { ids:JSON.stringify(selectedId)}
				}).done(function( msg ) {
					noty({"text":msg,"layout":"topRight","type":"success"});	
					window.location.href	=	location.href;					
				  });
				 
				/*for(i=0;i<numberOfChecked;i++) {
							$("#tr_"+selectedId[i]).remove();
				}
				$(".selectAllRows").removeAttr('checked');*/
			}
		});	
	}
}

function ajaxCall(url,data,updateId,extrafunction)
{
	$.ajax({
	  type: "POST",
	  url: url,
	  data: {data : data }
	}).done(function( msg ) {
		$('#'+updateId).html(msg);
		
		if(extrafunction !="")
		{
			eval(extrafunction);
		}
	  });
}
function save_image(input)
{
	var url = input.value;
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
	if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
		var reader = new FileReader();
		reader.onload = function (e) {
			var html1= '<img class="grayscale" id="images" style="width:40px; height: 35px;" src="'+ e.target.result +'">';
			$('#preview_banner').html(html1);
			 }
			reader.readAsDataURL(input.files[0]);
		}
}
function save_image1(input)
{
	var url = input.value;
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
	if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
		var reader = new FileReader();
		reader.onload = function (e) {
			var html1= '<img class="grayscale" id="images" style="width:40px; height: 35px;" src="'+ e.target.result +'">';
			$('#preview_banners').html(html1);
			 }
			reader.readAsDataURL(input.files[0]);
		}
}
function resetCheckbox()
{	
	//$("input:checkbox, input:radio, input:file").not('[data-no-uniform="true"],#uniform-is-ajax').uniform();	
}
window.confirm = function(title,message,func)
{
		
		$('body').append('<div id="myModal" class="modal fade in " style="display: block;">  <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title">'+title+'</h4> </div> <div class="modal-body"> <p>'+message+'</p> </div> <div class="modal-footer"> <a data-dismiss="modal" class="btn" onclick="return false;" href="javascript:void(0)">No</a><a class="btn btn-primary" onclick="return true;" id="confirmYes" href="javascript:void(0)">Yes</a> </div> </div> </div> </div>');
		
        $("#myModal").modal('show');        
        $("#confirmYes").on("click", function (userChoice) {
			$("#myModal").modal('hide');        
            func(true);
        });
		
		$('#myModal').on('hidden', function (e) {
			$(this).remove();
		});
}

$(document).ready(function(e)
{
//--------------------work request-----------------------//	
	
	
//--------------- check unckeck all check box----------------------//

$(".selectAllRows").click( function( e ) {
		ischecked = $(this).is(":checked");
		
		$('.selectRow').each(function(){
			if (!ischecked) {
				$(this).removeAttr('checked');
			}
			else {
					//$(this).attr('checked','checked');
				 $(this).prop('checked','checked')
			}
		});
		
	})
	
	$(".selectRow").click( function( e ) {		

			var flage = 1;
			if ( !$(this).is(":checked") ) {
				$(".selectAllRows").removeAttr('checked');
			}
			
			else {				
				$('.selectAllRows').attr('checked','checked');			
			}
			
			$('.selectRow').each(function(){				
				if ( !$(this).is(":checked") ) {
					flage = 0;
				}				
			});			
			if(flage == 1)
				$(".selectAllRows").prop('checked','checked');
			else
				$(".selectAllRows").removeAttr('checked');
	});
//----------------------------end----------------------------------//


});