<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<form method="post" action="<?= base_url('diagnosis/result') ?>">
    <label>Masukkan nilai threshold (0.0 - 1.0):</label><br>
    <input type="number" name="threshold" step="0.01" required><br><br>

    <label>Pilih gejala:</label><br>
    <?php foreach ($symptoms as $symptom): ?>
    <input type="checkbox" name="symptoms[]" value="<?= $symptom['code'] ?>"> <?= $symptom['name'] ?><br>
    <?php endforeach; ?>

    <br>
    <button type="submit">Diagnosa</button>
</form>

<?= $this->endSection() ?>