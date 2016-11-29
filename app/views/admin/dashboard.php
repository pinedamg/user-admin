<div class="container">
  <div class="page-header" id="banner">
    <div class="row">
      <div class="col-lg-8 col-md-7 col-sm-6">
        <h1>Welcome to Erdiko Auth Module</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-5 col-sm-6 col-xs-10">
        <h1>Welcome <?php echo $data["user"]->getDisplayName(); ?></h1>
        <h3>your Roles:</h3>
        <ul>
        <?php foreach ($data["user"]->getRoles() as $role): ?>
          <li><?php echo $role; ?></li>
        <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>