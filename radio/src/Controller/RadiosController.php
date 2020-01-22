<?php
namespace App\Controller;

class RadiosController extends AppController
{
  public function index()
  {
    $all = $this->Radios->find();

    $this->set(compact('all'));
  }

  public function view($id)
  {
    $titre = $this->Radios->find()->contain(['Shows'])->where(['id' => $id]);

    if($titre->isEmpty())
    {
      $this->Flash->error('Radio non-trouvé');
      return $this->redirect(['action' => 'index']);
    }
    else
    {
      $this->set('one', $titre->first());
    }

    //on transmet l'info a la vue
    $titreVide = $this->Radios->Shows->newEntity();
    //on aura accès a une varibale qui s'appelera $auteur
    $this->set('radio', $titre->first());

    //on créer une entité de livre vide à transmettre à la vue
    //on créer une entité vide à la vue
    $this->set(compact('radioVide'));

    //on transmet l'info a la vue
    $radioVide = $this->Radios->Shows->newEntity();
    //on aura accès a une varibale qui s'appelera $auteur
    $this->set('radio', $titre->first());

    //on créer une entité de livre vide à transmettre à la vue
    //on créer une entité vide à la vue
    $this->set(compact('radioVide'));
  }

  public function add()
  {
    $new = $this->Radios->newEntity();
    //Si on a recu un formulaire
    if($this->request->is('post'))
      {
        //on récupère le contenu des champs
        $new = $this->Radios->patchEntity($new, $this->request->getData());

        //si on a put sauvegarder
        if($res = $this->Radios->save($new))
        {
          //message de confirmation
          $this->Flash->success('La radio a été sauvegardée.');
          {
          //on redirige vers Authors/liste
          return $this->redirect(['controller' => 'Radios', 'view' => $res->id]);
          }
        }
        //sinon on reviens sur le formulaire avec un message
        $this->Flash->error('Ca a planté, recommence');
      }
    //on transmet la variable
    $this->set(compact('new'));
    //autre manière de l'écrire : $this->set(compact('new'))
  }
}
?>
