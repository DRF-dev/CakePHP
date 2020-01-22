<h1>Ajouter une nouvelle radio :</h1>

<?= $this->Form->create($new) ?>
  <?= $this->Form->control('name', ['label' => 'Nom de la radio']) ?>
  <?= $this->Form->control('frequency', ['label' => 'Fréquence radio']) ?>
  <?= $this->Form->button('Ajouter cette nouvelle radio ') ?>
<?= $this->Form->end() ?>
