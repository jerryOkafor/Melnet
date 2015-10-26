/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//this is a complementatry code for job printing
$(document).ready(function(){
  $("#print_job").click(function(){
    divPrint();
  });
  function divPrint(){
    $("#page-wrap").addClass("printable");
    window.print();
  }
  
  });
  

