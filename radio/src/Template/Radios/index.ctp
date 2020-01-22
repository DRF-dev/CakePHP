<h1>Liste des radios sur Paris :</h1>

<ul>
  <?php foreach ($all as $radio) {?>
  <li>
    <span><?= $this->Html->link($radio->name, ['controller' => 'Radios', 'action' => 'view', $radio->id]); ?></span>
  </li>
<?php }; ?>
</ul>
