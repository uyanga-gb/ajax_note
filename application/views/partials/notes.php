 <!DOCTYPE html>
 <html>
 <head>

 <style>
     .container {
      display: inline-block;
      border-top: 1px solid grey;
      border-bottom: 1px solid grey;
      margin-bottom: 20px;
     }
   .delete {
   		background-color: white;
	   	display: inline-block;
	   	color: blue;
	   	border: none;
   } 
</style>
</head>
<h3>Notes</h3>
  <?php 
  foreach ($notes as $note) {?>
    <div class="container">
       <form action="/main/update" method="post">
          <h3 class="title"><?=$note->title?></h3>
            <textarea name="description"><?= $note->description?></textarea>
            <input type="hidden" name="id" value="<?=$note->id?>">
            <input type="hidden" value="Update">
       </form>
       <form action="/main/delete" method="post">
             <input type="hidden" name="id" value="<?=$note->id?>"> 
              <input class="delete" type="submit" value="Delete"/>
       </form>
    </div>
<?php } ?>
</html>