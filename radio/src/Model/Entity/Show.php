<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Show extends Entity
{
  //permet de dire que l'on peut modifier toutes les colonnes sauf l'id
  protected $_accessible =
  [
    '*' => true,
    'id' => false
  ];
}
 ?>
