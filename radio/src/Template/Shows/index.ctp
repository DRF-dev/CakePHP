<h1>Liste des émmissions radio :</h1>

<ul>
  <?php foreach ($all as $freq) {?>
  <li>
    <span><?= $this->Html->link($freq->name, ['controller' => 'Shows', 'action' => 'view', $freq->id]); ?></span>
  </li>
<?php }; ?>
</ul>
