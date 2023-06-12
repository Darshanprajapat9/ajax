

$("document").ready(function(){  
    view();

    $("#registerform").submit(function(event){
            event.preventDefault();

            var data = $("#registerform").serializeArray();
        
            $.ajax({
                data: data,
                type: "post",
                url: "insert.php",
                success: function(data){
                    //alert(data);
                  
                    $('#exampleModal').modal('hide');
                    view();
                }
            });
            
          
    });
});

$("document").ready(function(){  

    $("#editform").submit(function(event){
            event.preventDefault();
            var data = $("#editform").serializeArray();
        
            $.ajax({
                data: data,
                type: "post",
                url: "edit.php",
                success: function(data){
                    //alert(data);
                  
                    $('#updateModal').modal('hide');
                    view();
                }
            });            
          
    });
});

function view(){

    $.ajax({
        url :'view.php',
        type:'post',
        success :function(data){
            $("#all_record").html(data);
           
        }
    })
  
}

  
function delete_record(del_id){
    //alert(del_id);

    if (confirm("Are you sure?")) {
        $.ajax({
            url :"delete.php",
            data:{id:del_id},
            type:'POST',
            success:function(data){
                view();
            }
        });
    }
    return false;

}

function update_record(e_id){
    
    

    $.ajax({
        url :"update.php",
        data:{id:e_id},
        type:'POST',
        success:function(data){
          $("#updateModal").modal('show');
           $("#update_form_html").html(data);
        }
    });

}








