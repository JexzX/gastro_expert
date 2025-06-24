<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h3>Data Aturan Penyakit ↔ Gejala</h3>

<table border="1" cellpadding="6">
    <tr>
        <th>Penyakit</th>
        <th>Gejala</th>
        <th>Bobot</th>
    </tr>
    <?php foreach ($rules as $rule): ?>
    <tr>
        <td><?= $rule['disease_name'] ?></td>
        <td><?= $rule['symptom_name'] ?></td>
        <td><?= $rule['weight'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>