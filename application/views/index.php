<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Notes</title>
    <link rel="stylesheet" type="text/css" href="">
    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
     <script>
     	$(document).ready(function() {
  		$(document).on('submit', 'form', function(){
        $.post(
          $(this).attr('action'), //above form's atrribute action, because create, update, delete are all action, it's one post
          $(this).serialize(), //takes all input and pass it to controller
          function(response){ //response is partial index and echo-n in below #ourcome div
            $('#outcome').html(response)
          });
        return false;
      });
      $(document).on('change', 'div.outcome textarea', function(){
          $(this).parent().submit();
      })
      $(document).on('change', 'div.container input', function(){
          $(this).parent().submit();
      })
      $(document).on('click', 'div.container .title', function(){
        $(this).replaceWith("<input type='text' name='title'>");
      });
    });
      
   </script>
  <style type="text/css"></style>
    <style>
    div #outcome {
      display: inline-block;
      border-top: 1px solid grey;
      border-bottom: 1px solid grey;
      margin-bottom: 20px;
     }
     button  {
      background-color: white;
      border: none;
      color: blue;
      vertical-align: top;
     }
      #add_note {
        background-color: blue;
        color: white;
        display: block;
        margin-top: 3px;
      }
      textarea {
        height: 100px;
        width: 200px;
        margin-top: 5px;
        margin-bottom: 5px;
        overflow-y: scroll;
        resize: none;
      }
      input {
        display: block;
      }
      .button {
        background-color: blue;
        color: white;
      
      }
    </style>
</head>
<body>
  <div id="outcome">
    <?php require_once('partials/notes.php') ?>
  </div>
    <form action="/main/create" method="post">
        <input type="text" name="title" placeholder="Insert note title here...">
        <textarea type="hidden" name="description" placeholder="Enter description here..."></textarea>
        <input class="button" type="submit" value="Add Note">
    </form>
</body>
</html>