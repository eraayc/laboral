<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Settlements Controller
 *
 * @property \App\Model\Table\SettlementsTable $Settlements
 *
 * @method \App\Model\Entity\Settlement[] paginate($object = null, array $settings = [])
 */
class SettlementsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Periods', 'Employers']
        ];
        $settlements = $this->paginate($this->Settlements);

        $this->set(compact('settlements'));
        $this->set('_serialize', ['settlements']);
    }

    /**
     * View method
     *
     * @param string|null $id Settlement id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $settlement = $this->Settlements->get($id, [
            'contain' => ['Periods', 'Employers', 'Paychecks']
        ]);

        $this->set('settlement', $settlement);
        $this->set('_serialize', ['settlement']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $settlement = $this->Settlements->newEntity();
        if ($this->request->is('post')) {
            $settlement = $this->Settlements->patchEntity($settlement, $this->request->getData());
            if ($this->Settlements->save($settlement)) {
                $this->Flash->success(__('The settlement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The settlement could not be saved. Please, try again.'));
        }
        $periods = $this->Settlements->Periods->find('list', ['limit' => 200]);
        $employers = $this->Settlements->Employers->find('list', ['limit' => 200]);
        $this->set(compact('settlement', 'periods', 'employers'));
        $this->set('_serialize', ['settlement']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Settlement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $settlement = $this->Settlements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $settlement = $this->Settlements->patchEntity($settlement, $this->request->getData());
            if ($this->Settlements->save($settlement)) {
                $this->Flash->success(__('The settlement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The settlement could not be saved. Please, try again.'));
        }
        $periods = $this->Settlements->Periods->find('list', ['limit' => 200]);
        $employers = $this->Settlements->Employers->find('list', ['limit' => 200]);
        $this->set(compact('settlement', 'periods', 'employers'));
        $this->set('_serialize', ['settlement']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Settlement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $settlement = $this->Settlements->get($id);
        if ($this->Settlements->delete($settlement)) {
            $this->Flash->success(__('The settlement has been deleted.'));
        } else {
            $this->Flash->error(__('The settlement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
