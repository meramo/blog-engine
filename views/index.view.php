<h1>The Blog by <?php echo $name ?></h1>

<?php foreach ($posts as $post): ?>
  <article>
    <h2>
      <a href="single.php?id=<?php echo $post['id']; ?>">
        <?php echo $post['title']; ?>
      </a>
    </h2>
    <div class="body"><?php echo $post['body']; ?></div>
  </article>
<?php endforeach ?>
