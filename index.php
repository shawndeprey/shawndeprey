<?php include('tools.php'); ?>
<?php render('partials/header.php'); ?>

<div class="row career_item">
  <div class="col-sm-12">
    <p>
      <center>
        <a href="/resume.php" style="text-decoration: none;">
          <button type="button" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-file"></span> View My Resume
          </button>
        </a>
        <a href="/portfolio.php" style="text-decoration: none;">
          <button type="button" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-briefcase"></span> View My Portfolio
          </button>
        </a>
      </center>
    </p>
    <center>
      <script async src="https://static.medium.com/embed.js"></script><a class="m-profile" href="https://medium.com/@mrdeprey">Shawn Deprey</a>
    </center>
  </div>
</div>

<?php render('partials/footer.php'); ?>