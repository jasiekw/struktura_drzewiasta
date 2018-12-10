<!DOCTYPE html>
<html>
 <head>
  <title>Administracja katalogu</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <br /><br />
   <div class="row">
    <div class="col-md-6">
     <h4 align="center"><u>Dodaj element</u></h4>
     <br />
     <form method="post" id="treeview_form">
      <div class="form-group">
       <label>Zaznacz rodzica</label>
       <select name="parent_category" id="parent_category" class="form-control">
       
       </select>
      </div>
      <div class="form-group">
       <label>Podaj nazwę</label>
       <input type="text" name="category_name" id="category_name" class="form-control">
      </div>
      <div class="form-group">
       <input type="submit" name="action" id="action" value="Dodaj" class="btn btn-info" />
      </div>
     </form>

<!--                                           -->

<h4 align="center"><u>Usuń element</u></h4>
     <br />
     <form method="post" id="treeview_form2">
      <div class="form-group">
       <label>Zaznacz element</label>
       <select name="category2" id="category2" class="form-control">
       
       </select>
      </div>
      <div class="form-group">
       <input type="submit" name="action" id="action" value="Usuń" class="btn btn-info" />
      </div>
     </form>
<!--                                           -->

 <h4 align="center"><u>Zmień nazwę</u></h4>
     <br />
     <form method="post" id="treeview_form3">
      <div class="form-group">
       <label>Zaznacz element</label>
       <select name="category3" id="category3" class="form-control">
       
       </select>
      </div>
      <div class="form-group">
       <label>Podaj nową nazwę</label>
       <input type="text" name="category_name3" id="category_name3" class="form-control">
      </div>
      <div class="form-group">
       <input type="submit" name="action" id="action" value="Zmień" class="btn btn-info" />
      </div>
     </form>
<!--                                           -->

  <h4 align="center"><u>Zmień rodzica</u></h4>
     <br />
     <form method="post" id="treeview_form4">
      <div class="form-group">
       <label>Zaznacz element</label>
       <select name="category4" id="category4" class="form-control">
       </select>
      </div>
      <div class="form-group">
       <label>Zaznacz nowego rodzica</label>
        <select name="category5" id="category5" class="form-control">
       </select>
      </div>
      <div class="form-group">
       <input type="submit" name="action" id="action" value="Zamień" class="btn btn-info" />
      </div>
     </form>

<!--                                           -->

    </div>
    <div class="col-md-6">
     <h4 align="center"><u>Struktura drzewa</u></h4>
     <br />
    
    <?php
   if (($_POST) == null)
   echo '<div id="treeview"></div>';
   else if(isset($_POST['zwin']))
   echo '<div id="treeview"></div>';
   else if (isset($_POST['rozwin']))
   echo '<div id="treeviewall"></div>';
   ?>
   
    <form method="post" id="rozwin">
      <div class="form-group">
       <input type="submit" name="rozwin" id="rozwin" value="Rozwiń katalog" class="btn btn-info" />
      </div> 
     </form>  
    <form method="post" id="zwin">
      <div class="form-group">
       <input type="submit" name="zwin" id="zwin" value="Zwiń katalog" class="btn btn-info" />
      </div> 
     </form>
    </div>   
   </div>
  </div>
 </body>
   
</html>
<!-- scripts -->
<script src="js/treeview.js"></script>