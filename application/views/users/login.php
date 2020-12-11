<div class="col-md-4 offset-md-4 form-h">
<?= form_open('users/login', 'class="form-signin mt-5"'); ?>
<h1 class="h3 mb-3 font-weight-normal text-center"><?= $title; ?></h1>
<div class="form-group">
    <label class="sr-only">Username</label>
    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
</div>
<div class="form-group">
    <label class="sr-only">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
</div>
  <button class="btn btn-primary btn-block" type="submit">Sign in</button>
</form>
</div>
