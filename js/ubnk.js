/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function (){
  
   $("#print_report").click(function(){
        divPrint();
   });
   
    $("#export_report").click(function(){
       $(".reporttable").table2excel({
	exclude: ".noExl",
	name: "Excel Document Name",
	filename: "myFileName"
	});
   });
      
  function divPrint(){
    $("#page-wrap").addClass("printable");
    window.print();
	}
  });

// Click delete split-button to remove list item
$( ".del_icon" ).on( "click", function(e) {
  
  $("#confirmQuestion").html("Are You sure you want to delet this job!");
  $("#confirmDialog").popup("open");
				
				// Proceed when the user confirms
				$( "#confirmDialog #yes" ).on( "click", function() {
					// Remove with a transition
//					make an ajax request and delete the job
					  var id = $(".del_icon").attr("jobid");
					    //alert(id);
					    
				           $.ajax({
					    url: "../ubnk/index.php",
					    success: function (result) {
					      //alert(result);
					      $("#alert-pop").html(result);
					      //$("#popupInfo").popup("open");
					    },
					    type: 'GET',
					    beforeSend: function (xhr) {
					      $("#alert-pop").html("Deleting Entry...");
					      $("#confirmDialog").popup("close");
					      $("#popupInfo").popup("open");

					    },
					    data: {action:"deleteEntry",id:id},
					    error: function (jqXHR, textStatus, errorThrown) {
					    $("#alert-pop").html("An Error Occurd\n..."+errorThrown);
					      $("#confirmDialog").popup("close");
					      $("#popupInfo").popup("open");
					    }

					    });
					$( "#confirmDialog #yes" ).off();
					
				});
				
				// Remove active state and unbind when the cancel button is clicked
				$( "#confirmDialog #cancel" ).on( "click", function() {
					//$( "#confirmDialog #yes" ).off();
				});

  
});


function tableUpdate(d,row)
 { var OriginalContent = $(d).text();
	 var col = $(d).attr("col"); 
	 var cell = $(d);
        $(d).addClass("cellEditing_td");
        $(d).html("<textarea class='editin_td' style='width:60px; height:17px; margin:-1px -6px; '>" + OriginalContent + "</textarea>");
        $(d).children().first().focus();
 
        $(d).children().first().blur(function(){		
        var newContent = $(d).children().first().val();
		$(d).text(newContent);		
        $(this).parent().removeClass("cellEditing_td");
	
		if(OriginalContent!== newContent)
				{
				updateUbnk(newContent,row,col,"ubnkrecords","ID");
			      }else
			      {$(".feedbackdiv").text("No Change made!");
			      }
			});       
		
		 $(d).children().first().keypress(function (e) {
            if (e.which === 13) {
                var newContent = $(d).children().first().val();
				$(d).text(newContent);		
				//$(this).parent().removeClass("cellEditing");
				//alert(newContent+' '+col);
				if(OriginalContent!== newContent)
				{
				updateUbnk(newContent,row,col,"ubnkrecords","ID");
			      }else
			      {
				$(".feedbackdiv").text("No Change made!");
			      }
            }
        });
 
 }
 
 function updateUbnk(content,row,column,table,id){
	$.post("../ubnk/dynamic.php",{content:content,row:row,column:column,table:table,id:id},function(e){
	  $(".feedbackdiv").html(e);
	 
	});
      }
      
function invoiceUpdate(d,row)
 { var OriginalContent = $(d).text();
	 var col = $(d).attr("col"); 
	 var maintype = $(d).attr("maintype"); 
	 var cell = $(d);
	 if(maintype!=="PM")
	 {
        $(d).addClass("cellEditing_td");
        $(d).html("<textarea class='editin_td' style='width:60px; height:17px; margin:-1px -6px; '>" + OriginalContent + "</textarea>");
        $(d).children().first().focus();
 
        $(d).children().first().blur(function(){		
        var newContent = $(d).children().first().val();
		$(d).text(newContent);		
        $(this).parent().removeClass("cellEditing_td");
	
		if(OriginalContent!== newContent)
				{
		updateInvoice(newContent,row,col,"invoice","invoiceID");
			      }else
			      {$(".feedbackdiv").text("No Change made!");}
			});       
		
		 cell.children().first().keypress(function (e) {
            if (e.which === 13) {
                var newContent = $(d).children().first().val();
				$(d).text(newContent);		
				//$(this).parent().removeClass("cellEditing");
				//alert(newContent+' '+col);
				if(OriginalContent!== newContent)
				{
		    updateInvoice()(newContent,row,col,"invoice","invoiceID");
	
			      }else
			      {$(".feedbackdiv").text("No Change made!");}
            }
        });
	
	 }else
	 {
	   $(".feedbackdiv").text("You can not Edit PM Rates!");
	 }
 
 }
 
 function updateInvoice(content,row,column,table,id){
	$.post("../ubnk/dynamic.php",{content:content,row:row,column:column,table:table,id:id},function(e){
	  $(".feedbackdiv").html(e);
	 
	});
      }