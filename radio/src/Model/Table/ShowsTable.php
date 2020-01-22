<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ShowsTable extends table
{
  // sert a gérer le timestamp tout seul
  public function initialize(array $config)
  {
    $this->addBehavior('Timestamp');

    //on indique qu'il y'a une connexion entre les deux tables
    $this->belongsTo('Radios', ['foreignKey' => 'radio_id', 'joinType' => 'left']);
  }
}
 ?>
