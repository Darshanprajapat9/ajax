$(document).ready(function(){
   getdata();
});

function getdata(){
    $.ajax({
        url:"display.php",
        type:"POST",
        success:function (response){
            console.log(response);
        }

    })
}