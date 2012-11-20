<h1>Create new post</h1>
<form action="" method="post">
  <ul>

    <li>
      <label for="title">Title:</label>
      <input type="text" name="title" id="title">
    </li>

     <li>
      <label for="body">Body:</label>
      <textarea name="body" id="body"></textarea>
    </li>
  </ul>

    <li>
      <input type="submit" value="Create post">
    </li>

   <?php if ( isset($status)): ?>
   <p><?php echo $status; ?></p>
   <?php endif; ?>
</form>
