<?= $this->extend('layouts/auth') ?>

<?= $this->section('styles') ?>
<style>

</style>
<?= $this->endSection()  ?>


<?= $this->section('content') ?>

<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>
<?php if (isset($validation)) : ?>
    <div class="col-12">
        <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
        </div>
    </div>
<?php endif; ?>
<form action="<?= base_url() ?>/auth" method="post">

    <div class="form-group">
        <input class="form-control" type="email" name="user_email" placeholder="Email">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="user_password" placeholder="Password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Login</button>
    </div>
</form>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script>

</script>
<?= $this->endSection()  ?>