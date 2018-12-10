$(document).ready(function(){

  fill_parent_category();
  fill_category2();
  fill_category3();
  fill_category4();
  fill_category5();


  fill_treeview();
  viewAll();


  
  function fill_treeview()
  {
   $.ajax({
    url:"tree_view.php",
    dataType:"json",
    success:function(data){
     $('#treeview').treeview({
      data:data
     });
    }
   })
  }

  function fill_parent_category()
  {
   $.ajax({
    url:'fill_parent_category.php',
    success:function(data){
     $('#parent_category').html(data);
    }
   });
   
  }

   function fill_category2()
  {
   $.ajax({
    url:'fill_category2.php',
    success:function(data){
     $('#category2').html(data);
    }
   });
   
  }

    function fill_category3()
  {
   $.ajax({
    url:'fill_category3.php',
    success:function(data){
     $('#category3').html(data);
    }
   });
   
  }

   function fill_category4()
  {
   $.ajax({
    url:'fill_category4.php',
    success:function(data){
     $('#category4').html(data);
    }
   });
   
  } function fill_category5()
  {
   $.ajax({
    url:'fill_category5.php',
    success:function(data){
     $('#category5').html(data);
    }
   });
   
  }

  function viewAll()
  {
  $.ajax({ 
   url: "tree_view.php",
   method:"POST",
   dataType: "json",       
   success: function(data)  
   {
    $('#treeviewall').treeview({data: data});
    $('#treeviewall').treeview('expandAll', { silent: true });
   }   
 });

}








  $('#treeview_form').on('submit', function(event){
   event.preventDefault();
   $.ajax({
    url:"add.php",
    method:"POST",
    data:$(this).serialize(),
    success:function(data){
     fill_treeview();
     fill_parent_category();
     $('#treeview_form')[0].reset();
     alert(data);
    }
   })
  });

  $('#treeview_form2').on('submit', function(event){
   event.preventDefault();
   $.ajax({
    url:"delete.php",
    method:"POST",
    data:$(this).serialize(),
    success:function(data){
     fill_treeview();
     fill_category2();
     $('#treeview_form2')[0].reset();
     alert(data);
    }
   })
  });


   $('#treeview_form3').on('submit', function(event){
   event.preventDefault();
   $.ajax({
    url:"rename.php",
    method:"POST",
    data:$(this).serialize(),
    success:function(data){
     fill_treeview();
     fill_category3();
     $('#treeview_form3')[0].reset();
     alert(data);
    }
   })
  });

   $('#treeview_form4').on('submit', function(event){
   event.preventDefault();
   $.ajax({
    url:"change.php",
    method:"POST",
    data:$(this).serialize(),
    success:function(data){
     fill_treeview();
     fill_category4();
     fill_category5();
     $('#treeview_form4')[0].reset();
     alert(data);
    }
   })
  });


   
 });