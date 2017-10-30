<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hirings Controller
 *
 * @property \App\Model\Table\HiringsTable $Hirings
 *
 * @method \App\Model\Entity\Hiring[] paginate($object = null, array $settings = [])
 */
class HiringsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employers', 'Employees']
        ];
        $hirings = $this->paginate($this->Hirings);

        $this->set(compact('hirings'));
        $this->set('_serialize', ['hirings']);
    }

    /**
     * View method
     *
     * @param string|null $id Hiring id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hiring = $this->Hirings->get($id, [
            'contain' => ['Employers', 'Employees']
        ]);

        $this->set('hiring', $hiring);
        $this->set('_serialize', ['hiring']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hiring = $this->Hirings->newEntity();
        if ($this->request->is('post')) {
            $hiring = $this->Hirings->patchEntity($hiring, $this->request->getData());
            if ($this->Hirings->save($hiring)) {
                $this->Flash->success(__('The hiring has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hiring could not be saved. Please, try again.'));
        }
        $employers = $this->Hirings->Employers->find('list', ['limit' => 200]);
        $employees = $this->Hirings->Employees->find('list', ['limit' => 200]);
        $this->set(compact('hiring', 'employers', 'employees'));
        $this->set('_serialize', ['hiring']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hiring id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hiring = $this->Hirings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hiring = $this->Hirings->patchEntity($hiring, $this->request->getData());
            if ($this->Hirings->save($hiring)) {
                $this->Flash->success(__('The hiring has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hiring could not be saved. Please, try again.'));
        }
        $employers = $this->Hirings->Employers->find('list', ['limit' => 200]);
        $employees = $this->Hirings->Employees->find('list', ['limit' => 200]);
        $this->set(compact('hiring', 'employers', 'employees'));
        $this->set('_serialize', ['hiring']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hiring id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hiring = $this->Hirings->get($id);
        if ($this->Hirings->delete($hiring)) {
            $this->Flash->success(__('The hiring has been deleted.'));
        } else {
            $this->Flash->error(__('The hiring could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
