<h1><?= $one->name ?></h1>

<p>Fréquence :
<?php
if (!empty($one->frequency))
{
 echo $one->frequency.' hz';
}
else
{
  echo 'anonyme';
}
 ?></p>

 <p>
   Date de création : <?= $one->created->i18nformat('dd/MM/yyyy HH:mm:ss'); ?>
 </p>

<p>
  Date de dernière modification : <?= $one->modified->i18nformat('dd/MM/yyyy HH:mm:ss'); ?>
</p>

<h2>Ses émmissions</h2>
<p>
  <?php
  if (empty($joueur->shows))
  {
    echo '<p>Il n\'y a aucune émmissions dans cette base de donnée pour l\'instant</p>';
  }
  else
  {
    echo '<ul>';
    foreach ($radio->shows as $emmissions)
    {
      echo '<li>'.$this->Html->link(
        $emmissions->name,
        [
          'controller' => 'Shows',
          'action' => 'view',
          $emmissions->id
        ]).'</li>';
    }
    echo ('</ul>');
  }
  ?>
</p>

<?php
  //on créer le formulaire qui sera traité dans le fichier books/add
  echo $this->Form->create($radioVide, ['url' => '/Shows/add']);
  echo $this->Form->hidden('radio_id', ['value' => $radio->id]);
  echo $this->Form->control('name', ['label' => 'Nom de l\'émission']);
  echo $this->Form->control('day', ['label' => 'Date de l\'émission']);
  echo $this->Form->control('hour', ['label' => 'Heure de l\'émission']);
  echo $this->Form->button('Ajouter cette nouvelle émission');
  echo $this->Form->end()
?>

<?=$this->Html->link('Retour à la liste', ['action' => 'index']) ?>
