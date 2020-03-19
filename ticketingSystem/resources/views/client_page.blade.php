<html>
   <head>
      <title>Client Page</title>
   </head>

   <body>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <p>Title<input type='text' name='title' /></p>
         <p>Description<textarea name='description'></textarea></p>
         <input type = 'submit' value = "Create ticket"/>
      </form>

   </body>
</html>