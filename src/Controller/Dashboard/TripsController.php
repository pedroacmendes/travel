<?php
declare(strict_types=1);

namespace App\Controller\Dashboard;

use App\Controller\AppController;

/**
 * Trips Controller
 *
 * @property \App\Model\Table\TripsTable $Trips
 * @method \App\Model\Entity\Trip[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TripsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->viewBuilder()->setLayout('dashboard');

    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // $this->paginate = [
        //     'contain' => ['Users'],
        // ];
        // $trips = $this->paginate($this->Trips);

        // $this->set(compact('trips'));
    }

    /**
     * View method
     *
     * @param string|null $id Trip id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trip = $this->Trips->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('trip'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trip = $this->Trips->newEmptyEntity();
        if ($this->request->is('post')) {
            $trip = $this->Trips->patchEntity($trip, $this->request->getData());
            if ($this->Trips->save($trip)) {
                $this->Flash->success(__('The trip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trip could not be saved. Please, try again.'));
        }
        $users = $this->Trips->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('trip', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Trip id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trip = $this->Trips->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trip = $this->Trips->patchEntity($trip, $this->request->getData());
            if ($this->Trips->save($trip)) {
                $this->Flash->success(__('The trip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trip could not be saved. Please, try again.'));
        }
        $users = $this->Trips->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('trip', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Trip id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trip = $this->Trips->get($id);
        if ($this->Trips->delete($trip)) {
            $this->Flash->success(__('The trip has been deleted.'));
        } else {
            $this->Flash->error(__('The trip could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
