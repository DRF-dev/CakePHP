<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class RadiosTable extends table
{
  // sert a gérer le timestamp tout seul
  public function initialize(array $config)
  {
    $this->addBehavior('Timestamp');

    //on indique qu'il y'a une connexion entre les deux tables
    $this->hasMany('Shows', ['foreignKey' => 'radio_id']);
  }

  public function validationDefault(Validator $v)
  {
    return $v;
  }
}
 ?>
