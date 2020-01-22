<h1><?= $two->name ?></h1>

<p>Date de l'émmission :
<?php
if (!empty($two->day))
{
 echo $two->day->i18nformat('dd/MM/yyyy');
}
else
{
  echo 'inconnue';
}
 ?></p>

 <p>Heure de l'émmission :
 <?php
 if (!empty($two->hour))
 {
  echo $two->hour->i18nformat('HH:mm:ss');
 }
 else
 {
   echo 'inconnue';
 }
  ?></p>

 <p>
   Date de création : <?= $two->created->i18nformat('dd/MM/yyyy HH:mm:ss'); ?>
 </p>

<p>
  Date de dernière modification : <?= $two->modified->i18nformat('dd/MM/yyyy HH:mm:ss'); ?>
</p>

<p>Radio : <?= $this->Html->link($two->radio->name, [
  'controller' => 'Radios',
  'action' => 'view',
  $two->radio_id
  ])?></p>

<p><?= $this->Form->postLink('Supprimer', ['action' => 'delete', $two->id], ['confirm' => 'Etes-vous sur de vouloir supprimer cette émmission ?']);?></p>

<?=$this->Html->link('Retour à la liste', ['action' => 'index']) ?>
