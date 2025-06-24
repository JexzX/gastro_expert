<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h3>Hasil Diagnosis:</h3>

<?php if (empty($results)): ?>
<p><em>Tidak ada penyakit yang terdeteksi.</em></p>
<?php else: ?>
<ul>
    <?php foreach ($results as $result): ?>
    <li><strong><?= $result['name'] ?></strong>: <?= $result['score'] ?>%</li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<a href="<?= base_url('diagnosis') ?>">Kembali</a>

<?= $this->endSection() ?>