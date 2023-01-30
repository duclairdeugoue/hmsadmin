<?= $this->extend('layouts/error') ?>
<?= $this->section('content') ?>


<h1>500</h1>
<h3 class="h2 mb-3"><i class="fas fa-exclamation-triangle"></i> Oops! Something went wrong</h3>
<p class="h4 font-weight-normal">The page you requested was not found.</p>
<a href="<?= base_url() ?>/dashboard/dashboard"" class="btn btn-primary">Back to Home</a>

<?= $this->endSection() ?>