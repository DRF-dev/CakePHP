<?php
namespace App\Controller;

class ShowsController extends AppController
{
  public function index()
  {
    $all = $this->Shows->find();

    $this->set(compact('all'));
  }

  public function view($id)
  {
    $emmission = $this->Shows->find()->contain(['Radios'])->where(['Shows.id' => $id]);

    if($emmission->isEmpty())
    {
      $this->Flash->error('Non-trouvé');
      return $this->redirect(['action' => 'index']);
    }
      $this->set('two', $emmission->first());
  }

  public function add()
  {
    //Si on a recu un formulaire
    if($this->request->is('post'))
    {
        $new = $this->Shows->newEntity();

        //on récupère le contenu des champs
        $new = $this->Shows->patchEntity($new, $this->request->getData());

        //si on a put sauvegarder
        if($res = $this->Shows->save($new))
        {
          //message de confirmation
          $this->Flash->success('La nouvelle émmission a été ajouté.');
        }
        else
        {
        //sinon on reviens sur le formulaire avec un message
        $this->Flash->error('Ca a planté, recommence');
        }
        return $this->redirect(['controller' => 'Radios', 'view' => $new->radio_id]);
    }
      return $this->redirect(['controller'=>'Radios', 'action'=>'index']);
    //on transmet la variable
    $this->set(compact('new'));
    //autre manière de l'écrire : $this->set(compact('new'))
  }

  public function delete($id)
  {
    //on autorise seulement 2 méthode de navigation pour eviter les suivi de lien intempestif
    $this->request->allowMethod(['post', 'delete']);

    //on récupere l'élément que l'on souhaite supprimer
    $supp = $this->Shows->get($id);

    //Si la supression réussi
    if ($this->Shows->delete($supp))
      //message de confirmation
      {
        $this->Flash->success('Supression réussi');
      }
    //sinon
    else
      //message d'erreur
      {
        $this->Flash->error('Supression impossible');
      }
    //fin du test

    //redirection vers l'index
    return $this->redirect(['action' => 'index']);
  }
}
?>
