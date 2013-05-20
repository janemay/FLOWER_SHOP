$(document).ready(function(){
 
 $(function() {
   $("#date").datepicker({dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true
    });
     showAnim: "pulsate"
 });
 $(".myLog").click(function(){

      $type_of_flower = $("#type_of_flower").val();
      $pieces = $("#pieces").val();
      $price = $("#price").val();
      $deliver = $("#deliver").val();
      $date = $("#date").val();
      
       if($type_of_flower != "" && $pieces != "" && $price != "" && $deliver != "" && $date != "") {
           var wordObj = {
                        
                        "type_of_flower":$("input[name = 'type_of_flower']").val(),
                        "pieces":$("input[name = 'pieces']").val(),
                        "price":$("input[name = 'price']").val(),
                        "deliver":$("input[name = 'deliver']").val(),
                        "date":$("input[name = 'date']").val()
                        };   
                        
                      
            $.ajax({
               type:"POST",
               url:"add.php",
               data:wordObj,
               success: function(data){
                  console.log(data);
                	   $(".myTable").append(data);
               },
            	error: function(data){
                	alert(data);
             	}
            });
       	}else{
            alert("Please filled up all fields !");
         }

         $(".myReceipt").fadeIn(100);
         $("#okButton").click(function(){
         $(".myReceipt").fadeOut();
         });
 
   });
   
   $("#myShow").click(function(){
      $(".myTable").show();
		  	$.ajax({
			type: "POST",
			url: "view_BUY.php",
			success: function(data){
				$("#hah").html(data);		
			},
			error: function(data){
			}
		});
      
   });
   $("#myHide").click(function(){
      $(".myTable").hide();
   });
   $("#mySave").click(function(){

		var wordObj = {      
						"id": $("input[name = 'id']").val(),
			        	"type":$("input[name = 'type']").val(),
                  		"pieces":$("input[name = 'pieces']").val(),
                  		"price":$("input[name = 'price']").val(),
                  		"deliver":$("input[name = 'deliver']").val(),
                  		"date":$("input[name = 'date']").val()
                  };  
			alert(JSON.stringify(wordObj));
		   
		   $.ajax({
			   type:"POST",
			   url: "save.php",
			   data: wordObj,
			   success: function(data){
				   $(document.getElementById(wordObj.id)).html(data);
			   },
			   error: function(data){
			   }
		   });
		
	});
	
	$("#myReg").click(function(){

	        $firstname = $("#firstname").val();
      		$lastname = $("#lastname").val();
      		$address = $("#address").val();
      		$age = $("#age").val();
      		$contact_number = $("#contact_number").val();
      		$username = $("#username").val();
      		$password = $("#password").val();
      		$password2 = $("#password2").val();
      		
       if($firstname != "" && $lastname != "" && $address != "" && $age != "" && $contact_number != "" && $username != "" && $password != "" && $password2 != "") {
    
		      var registerObj = {
			      
			      "firstname":$("input[name = 'firstname']").val(),
			      "lastname":$("input[name = 'lastname']").val(),
			      "address":$("input[name = 'address']").val(),
			      "age":$("input[name = 'age']").val(),
			      "contact_number":$("input[name = 'contact_number']").val(),
			      "username":$("input[name = 'username']").val(),
			      "password":$("input[name = 'password']").val(),
			      "password2":$("input[name = 'password2']").val()
		       };
	         
		     $.ajax({
			      type:"POST",
			      url:"form_validate.php",
			      data:registerObj,
			      success:function(data){
			         
			      },
			      error:function(data){
			      }
			      
		      });
		      
		 }else{
            alert("Fill in all the fields!");
       }
		 	
		     
		      
	
	   });
	   

   $("#b1, #b2, #b3, #b4, #b5, #b6, #b7, #b8, #b9, #b10, #b11, #b12, #b13, #b14, #b15, #b16, #b17, #b18, #b19, #b20, #b21, #b22, #b23, #b24, #b25, #b26, #b27, #b28, #b29, #b30").click(function(){
      $(".myTags").dialog({
         resizable: false,
			modal: true,
			show: 'show',
			hide: 'hide',
			buttons: {
			   "close": function() {
				   $(this).dialog("close");
                  $.ajax({
						      type:"POST",
						      data: wordObj,
						      success:function(data){ 
						         $(document.getElementById(id)).append();
						      },
						  		error:function(data){}
							});
				 },
			}
			
      });

   });
   $(".myLog").click(function(){
   $.ajax({
	   
	   		type: "POST",
	   		url: "getInfo.php",
	   		success: function(data) {
	   		
	   			var obj = JSON.parse(data);
	   				$("#TF").html(obj.type);
	   				$("#P").html(obj.pieces);
	   				$("#PR").html(obj.price);
	   				$("#DR").html(obj.deliver);
	   				$("#D").html(obj.date);
			},
			error: function(data) {
				alert(data);
			}
	   
	   });
});
});

function deleteBuyer(id){
	
		$("#del").dialog({
		   resizable: false,
			modal: true,
			show: ('bounce'),
			hide: ('explode'),
			buttons: {
			   "yes": function() {
				   $(this).dialog("close");
					   var delOBJ = {"id":id};
						   $.ajax({
						      type:"POST",
						      data: delOBJ,
						      url:"delete.php",
						      success:function(data){ 
						      	//alert(JSON.stringify(data));
						         $(document.getElementById(delOBJ.id)).remove();
						         $(document.location.reload(true));
						         
						      },
						  		error:function(data){}
							});     
				 },
				 "no": function() {
				   $(this).dialog("close");
				 }
			}
		});

}

function editBuyer(id){
   var confirmation = confirm("Are you sure you want to edit it ?"); 
	   if(confirmation == true){
		   var wordObj = {"id":id};

            $.ajax({
					type:"POST",
					url: "edit.php",
					data: wordObj,
					success: function(data){
				   	var obj = JSON.parse(data);
					
								$("input[name = 'id']").val(obj.id);
								$("input[name = 'type']").val(obj.type);
								$("input[name = 'pieces']").val(obj.pieces);
								$("input[name = 'price']").val(obj.price);
								$("input[name = 'deliver']").val(obj.deliver);
			    				$("input[name = 'date']").val(obj.date);
						},
						error: function(data){
						}
					});
			}	 
}

