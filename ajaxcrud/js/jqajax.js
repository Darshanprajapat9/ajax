
   $(document).ready(function(){

//inseert data

  $("#btnadd").click(function(e){
        e.preventDefault();
      console.log("Save you Button");
    
  
    let nm =$("#nameid").val();
    let em =$("#emailid").val();
    let pw =$("#passwordid").val();
  
    //console.log(name);
  //  console.log(email);
 //   console.log(password);


    mydata ={name :nm , email:em , password :pw};
    console.log(mydata);

    $.ajax({
        url :"insert.php",
        method:'POST',
        data :JSON.stringify(mydata),
        success :function(data){
         // console.log(data);
         display_data(); 

         msg ="<div class='alert alert-dark mt-5'>"+ data + "</div>"; 
         $("#msg").html(msg);
         $("$myform")[0].reset();

        }
    })
  });
 
});

  //display data
  $(document).ready(function(){
    display_data(); 
  });

  function display_data(){
    $.ajax({
      url:'display.php',
      type:'POST',
      success : function (data){
        $("#data").html(data);
      }
    });
  }


  //delete data


$(document).ready(function(e){
  $(document).on("click",".delete-btn" ,function(){
    var studentid =$(this).data("id");
       $.ajax({
      url:'delete.php',
      type:'POST',
      data :{id : studentid
      },
      success: function(data){
        display_data(); 
      }
    })
  })




});


$(document).ready(function(){
  $(document).on("click",".update-btn" ,function(e){

    event.preventDefault();
 
    var name = $("#nameid").val();
    var email = $("#emailid").val();
    var password = $("#passwordid").val();

    var studentid =$(this).data("id");
       $.ajax({
      url:'update.php',
      type:'POST',
      data: { action: "edit", id: id, name: name, email: email ,password:password},
      success: function(data){
        display_data(); 
      }
    })
  });
});





