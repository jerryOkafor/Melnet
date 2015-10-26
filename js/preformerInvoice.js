/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  // ***********************************************
  // AUTHOR: WWW.CGISCRIPT.NET, LLC
  // URL: http://www.cgiscript.net
  // Use the script, just leave this message intact.
  // Download your FREE CGI/Perl Scripts today!
  // ( http://www.cgiscript.net/scripts.htm )
  // ***********************************************
 

$(document).ready(function() {
  
  //this works foe add invoice row
  $("#preformer_add_row").click(addInvoiceRow);
  
  //this click listener is for adding a row to the preformer
  $("#preformer_add_row_button").click(addInvoiceItemRow);
  //update all the price
   update_price();
   
  $('input').click(function(){
    $(this).select();
  });
  
  $("tr td #labourcost").blur(function (){
    update_price();
  });

  $("#paid").blur(function (){
  update_balance();}
  );//update_balance);   
  
  $(".delete").click(function(){
    if($(".item-row").length<1)
    {
      $("#alert-pop").html("You can not delete the last remaining row!");
      $("#popupInfo").popup("open");
    }else{
    
    $(this).parents('.item-row').remove();
    update_total();
    if ($(".delete").length < 2) $(".delete").hide();
  }
  });
  
  bind(); 
   
   
  
  $("#invoiceDate").val(print_today());
  
  //this code works for invoice update
  $("#update_invoice").click(function(){
    //start grabbing valuew
    var amountDue = $("#amountDue").html().replace("<del>N</del>","");
    var amountPaid = $("#paid").val();
    var invoiceID = $("#invoiceID").val();     
    updateInvoice(amountDue,amountPaid,invoiceID);
    //alert(amountDue+" "+amountPaid+" "+invoiceID);
  });
   
  
  
  //start of codes for save invoice
  
  $("#save_pref_invoice").click(function(){
    //start grabbing valuew
    var invoiceNumber = $("#invoiceNumber").html();//th invoice number for that particular invoice
    var invoiceDate = $("#invoiceDate").val();//date for the invoice
    var amountDue = $("#amountDue").html().replace("<del>N</del>",""); //amount due for payment
    var jobNumber = $("#jobid").html(); //the job id for which the invoice is genrated		  
    var labourcost = $("#labourcost").html().replace("<del>N</del>",""); //the labour cost that will be inputed manualljy for cm
    var subtotal = $("#subtotal").html().replace("<del>N</del>",""); //subtotal of the invoice
    var vat = $("#vat").html().replace("<del>N</del>",""); //vat 
    var total = $("#total").html().replace("<del>N</del>",""); //total
    var amountPaid = $("#paid").val();//amount paid so far
    var balanceDue = $("#due").html().replace("<del>N</del>",""); //balance due 
    
    //iteraton starts here for all the rows of the invoice row
    var stockcodes = ""; 
    var itemDescriptions = ""; 
    var unitCosts = ""; 
    var quantitys = ""; 
    var prices ="";
    
    //iteration stops and it is converted to a string ans saved and later it is converted to an array again.
    
    
    var rows=$("#items").find(".item-row");
    var rowlength= rows.length;
     rows.each(function (rowIndex,r){      
      var stockcode  = $(this).find(".item_name").html();   
      var description  = $(this).find(".item_description").html();      
      var unitCost = $(this).find(".cost").html().replace("<del>N</del>","");
      var quantity  = $(this).find(".qty").val();      
      var price = $(this).find('.price').html().replace("<del>N</del>","");

      //alert(rowlength);
    if(rowIndex===rowlength-1)
    {

      stockcodes+='"item'+rowIndex+'":"'+stockcode+'"';
      itemDescriptions+='"item'+rowIndex+'":"'+description+'"';
      unitCosts+='"item'+rowIndex+'":"'+unitCost+'"';
      quantitys+='"item'+rowIndex+'":"'+quantity+'"';
      prices+='"item'+rowIndex+'":"'+price+'"';
    }else{
      stockcodes+='"item'+rowIndex+'":"'+stockcode+'",';
      itemDescriptions+='"item'+rowIndex+'":"'+description+'",';
      unitCosts+='"item'+rowIndex+'":"'+unitCost+'",';
      quantitys+='"item'+rowIndex+'":"'+quantity+'",';
      prices+='"item'+rowIndex+'":"'+price+'",';
    }     
      
     
      });
    
     
  savePrefInvoice(invoiceDate,invoiceNumber,jobNumber,stockcodes,itemDescriptions,quantitys,unitCosts,prices,amountDue,subtotal,total,amountPaid,balanceDue,stockcodes,vat,labourcost);
    
   //alert(invoiceDate+", "+invoiceNumber+", "+amountDue+", "+subtotal+", "+total+",  "+stockcode+" "+itemDescription+", "+quantity+", "+unitCost+", "+price+", "+amountPaid+", "+balanceDue+","+vat+", "+labourcost);
  
  });
  //end of codes for save invoice
  
  
  
  $("#print_invoice").click(function(){
    divPrint();
  });
  
  
  });//end of documnet .ready
  
  
  
  //this function updates the invoice  
  function updateInvoice(amountDue,amountPaid,invoiceID){
     $.ajax({
      url: "../ubnk/dynamic.php",
      success: function (result) {
	alert(result);
      },
      type: 'POST',
      beforeSend: function (xhr) {
	//alert("Saving...");

      },
      data: {updateInvoice:"yes",amountDue:amountDue,amountPaid:amountPaid,invoiceID:invoiceID}
      
      });
  }
  //end of codes for update invoice
  
  
  
  //this function saves invoice to the invoice daatbase
  function savePrefInvoice(invoiceDate,invoiceNumber,jobNumber,stockcode,itemDescription,quantity,unitCost,price,amountDue,subtotal,total,amountPaid,balanceDue,invoiceLines,vat,labourcost){
     $.ajax({
     url: "../ubnk/dynamic.php",
      success: function (result) {
	//alert(result);
	$("#alert-pop").html(result);
	//$("#popupInfo").popup("open");
      },
      type: 'POST',
      beforeSend: function (xhr) {
	$("#alert-pop").html("Saving invoice...");
	$("#popupInfo").popup("open");

      },
      data: {savePrefInvoice:"yes",invoiceDate:invoiceDate,
	    invoiceNumber:invoiceNumber,stockcode:stockcode,itemDescription:itemDescription,
	    quantity:quantity,unitCost:unitCost,price:price,jobNumber:jobNumber,
	    amountDue:amountDue,subtotal:subtotal,total:total,amountPaid:amountPaid,
	    balanceDue:balanceDue,invoiceLines:invoiceLines,vat:vat,labourcost:labourcost}
      
      });
  }
  
  //this function prints a div
  function divPrint(){
    $("#page-wrap").addClass("printable");
    window.print();
  }
  
  function print_today() {
  var now = new Date();
  var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
  var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
  function fourdigits(number) {
    return (number < 1000) ? number + 1900 : number;
  }
  var today =  months[now.getMonth()] + " " + date + ", " + (fourdigits(now.getYear()));
  return today;
}

// from http://www.mediacollege.com/internet/javascript/number/round.html
function roundNumber(number,decimals) {
  var newString;// The new rounded number
  decimals = Number(decimals);
  if (decimals < 1) {
    newString = (Math.round(number)).toString();
  } else {
    var numString = number.toString();
    if (numString.lastIndexOf(".") == -1) {// If there is no decimal point
      numString += ".";// give it one at the end
    }
    var cutoff = numString.lastIndexOf(".") + decimals;// The point at which to truncate the number
    var d1 = Number(numString.substring(cutoff,cutoff+1));// The value of the last decimal place that we'll end up with
    var d2 = Number(numString.substring(cutoff+1,cutoff+2));// The next decimal, after the last one we want
    if (d2 >= 5) {// Do we need to round up at all? If not, the string will just be truncated
      if (d1 == 9 && cutoff > 0) {// If the last digit is 9, find a new cutoff point
        while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
          if (d1 != ".") {
            cutoff -= 1;
            d1 = Number(numString.substring(cutoff,cutoff+1));
          } else {
            cutoff -= 1;
          }
        }
      }
      d1 += 1;
    } 
    if (d1 == 10) {
      numString = numString.substring(0, numString.lastIndexOf("."));
      var roundedNum = Number(numString) + 1;
      newString = roundedNum.toString() + '.';
    } else {
      newString = numString.substring(0,cutoff) + d1.toString();
    }
  }
  if (newString.lastIndexOf(".") == -1) {// Do this again, to the new string
    newString += ".";
  }
  var decs = (newString.substring(newString.lastIndexOf(".")+1)).length;
  for(var i=0;i<decimals-decs;i++) newString += "0";
  //var newNumber = Number(newString);// make it a number if you like
  return newString; // Output the result to the form field (change for your purposes)
}


//this function iterates through the rows of the invoice table an update the subtotal
function update_subtotal() {
  var totalprice = 0;
  $('.price').each(function(i){
    price = $(this).html().replace("<del>N</del>","");
    if (!isNaN(price)) totalprice += Number(price);
  });
  var labour = Number($("#labourcost").val());
  var sub = totalprice+labour;
  
  var subtotal = roundNumber(sub,2);

  $('#subtotal').html("<del>N</del>"+subtotal);
  
 update_total();
}

//this function updates the total
function update_total() {
  var subtotal = Number($('#subtotal').html().replace("<del>N</del>",""));
  var vat = 0.15*subtotal;
  var total = roundNumber((subtotal+vat),2);
  
  $('#total').html("<del>N</del>"+total);
  $('#vat').html("<del>N</del>"+vat);
  update_balance();
  
}


//this function updates the balance
function update_balance() {
  var due = $("#total").html().replace("<del>N</del>","") - $("#paid").val().replace("<del>N</del>","");
  due = roundNumber(due,2);  
  $('.due').html("<del>N</del>"+due);
}


//original update price function
function update_price() {
  
  $("#items").find(".item-row").each(function (rowIndex,r){
      
      var price = $(this).find('.cost').html().replace("<del>N</del>","") * $(this).find('.qty').val();
      price = roundNumber(price,2);
      isNaN(price) ? $(this).find('.price').html("N/A") : $(this).find('.price').html("<del>N</del>"+price);
      });
  
  update_subtotal();
}


//binding function
function bind() {
  $(".cost").blur(update_price);
  $(".qty").blur(update_price);
}

//this function helps to add an invoice row

function addInvoiceRow()
{
  $("#popupPreformerRow").popup("open");
}

function addInvoiceItemRow()
{
  $("#popupPreformerRow").popup("close");
  
  //grab the items and then add them
  var material = $("#pref_material").val();
  var qty = $("#pref_qty").val();
  var id =$('.item-row').length+1;
  //make ajax request and get the details for the particular material
       $.ajax({
      url: "../pages/index.php",
      success: function (result) {
	//alert(result);	
      var json = JSON.parse(result);
      code = json.part_number;
      desc = json.description;
      rate = json.price;
       $(".item-row:last").after('<tr class="item-row" id="item'+id+'"><td><div class="delete-wpr"><a class="delete" title="Remove row">X</a></div>'+id+'</td>'
		+ '<td class="item-name"><textarea data-role="none" class="item_name" >'+code+'</textarea></td>'
		+ '<td class="description"><textarea disabled data-role="none" class="item_description">'+desc+'</textarea></td>'
		+ '<td><span disabled  class="cost" data-role="none" id="unitCost'+id+'"><del>N</del>'+rate+'</span></td>'
		+ '<td><textarea  disabled  class="qty" data-role="none" id="quantity'+id+'">'+qty+'</textarea></td>'
		+ '<td><span class="price" >0.00</span></td></tr>');
	
    if ($(".delete").length > 0) $(".delete").show();
      update_price();
    bind();
      },
      type: 'POST',
      beforeSend: function (xhr) {
	//alert("Saving...");

      },
      data: {getMaterialDetails:"yes",material:material}
      
      });
  
  

}



