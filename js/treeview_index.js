$(document).ready(function(){
 $.ajax({ 
   url: "tree_view.php",
   method:"POST",
   dataType: "json",       
   success: function(data)  
   {
  $('#treeview').treeview({data: data});
   }   
 });
});