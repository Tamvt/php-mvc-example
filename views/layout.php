<DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <header>
      <a href='?controller=pages&action=home'>Home</a>
      <a href='?controller=posts&action=index'>Posts</a>
      <a href='?controller=posts&action=add'>Add</a>
      <a href='?controller=posts&action=delete'>Delete</a>
      <a href='?controller=posts&action=update'>Update</a>
    </header>

    <?php require_once('routes.php'); ?>

    <footer>
      Copyright
    </footer>
  <body>
<html>