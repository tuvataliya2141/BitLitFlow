function DeleteImage(path,id){
    
    var param ={action:path,image_id:id};
    //console.log(param);return false;
    $.ajax({
        url:path,
        data:param,
        type:"get",
        success:function(data){
            result=JSON.parse(data);
            if(result['success']==1){
                $(".img"+id).hide("slow");
            }else{
                
            }
        }
    })
}

function showDialog(url){
    var matches = [];
    $('input[name="checkboxes[]"]:checked').each(function() {
        matches.push(this.value);
    });
    if(matches.length > 0){
        $("#deleteselected").attr("data-toggle","modal");
        $("#deleteselected").attr("data-target","#DeleteItem");
        var attr = $("#DeleteItem .btn-danger").attr('onclick');
        if(typeof attr !== typeof undefined && attr !== false){
           $("#DeleteItem .btn-danger").removeAttr("onclick");
        }
        $("#DeleteItem .btn-danger").attr("onclick","deleteSelected('"+url+"')");
    }
}
function deleteSelected(url){
    var matches = [];
    $('input[name="checkboxes[]"]:checked').each(function() {
        matches.push(this.value);
    });
        $('input[name="matches"]').val(matches);
        $('#deletemultiple').attr('action',url);
        $('#deletemultiple').submit();   
}

function DeleteItemByPath(path){   
    window.location.href=path;
}
function DeleteItem(path){
    var attr = $("#DeleteItem .btn-danger").attr('onclick');
        if(typeof attr !== typeof undefined && attr !== false){
           $("#DeleteItem .btn-danger").removeAttr("onclick");
        }
    
    $(".gradeX .red").attr("data-toggle","modal");
    $(".gradeX .red").attr("data-target","#DeleteItem");
    $("#DeleteItem").show();
    $("#DeleteItem .btn-danger").attr("onClick","DeleteItemByPath('"+path+"')");
}
function showImgDialog(path,id){
    $("#effect-5 .btn-danger").attr("data-toggle","modal");
    $("#effect-5 .btn-danger").attr("data-target","#DeleteImage");
    $("#DeleteImage").show();
    $("#DeleteImage .btn-danger").attr("onClick","DeleteImage('"+path+"',"+id+")");
}
function ShowDeltedImg(imgpath){
    $("#DeleteImage .modal-body .imgtag").attr("src",imgpath);
}
function removeImg(){
    $(".sweet-alert .animateErrorIcon .animateXMark .imgtag").attr("src","");
}
