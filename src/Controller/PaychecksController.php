<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paychecks Controller
 *
 * @property \App\Model\Table\PaychecksTable $Paychecks
 *
 * @method \App\Model\Entity\Paycheck[] paginate($object = null, array $settings = [])
 */
class PaychecksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Employers', 'Periods', 'Settlements']
        ];
        $paychecks = $this->paginate($this->Paychecks);

        $this->set(compact('paychecks'));
        $this->set('_serialize', ['paychecks']);
    }

    /**
     * View method
     *
     * @param string|null $id Paycheck id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paycheck = $this->Paychecks->get($id, [
            'contain' => ['Employees', 'Employers', 'Periods', 'Settlements']
        ]);

        $this->set('paycheck', $paycheck);
        $this->set('_serialize', ['paycheck']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paycheck = $this->Paychecks->newEntity();
        if ($this->request->is('post')) {
            $paycheck = $this->Paychecks->patchEntity($paycheck, $this->request->getData());
            if ($this->Paychecks->save($paycheck)) {
                $this->Flash->success(__('The paycheck has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paycheck could not be saved. Please, try again.'));
        }
        $employees = $this->Paychecks->Employees->find('list', ['limit' => 200]);
        $employers = $this->Paychecks->Employers->find('list', ['limit' => 200]);
        $periods = $this->Paychecks->Periods->find('list', ['limit' => 200]);
        $settlements = $this->Paychecks->Settlements->find('list', ['limit' => 200]);
        $this->set(compact('paycheck', 'employees', 'employers', 'periods', 'settlements'));
        $this->set('_serialize', ['paycheck']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Paycheck id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paycheck = $this->Paychecks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paycheck = $this->Paychecks->patchEntity($paycheck, $this->request->getData());
            if ($this->Paychecks->save($paycheck)) {
                $this->Flash->success(__('The paycheck has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paycheck could not be saved. Please, try again.'));
        }
        $employees = $this->Paychecks->Employees->find('list', ['limit' => 200]);
        $employers = $this->Paychecks->Employers->find('list', ['limit' => 200]);
        $periods = $this->Paychecks->Periods->find('list', ['limit' => 200]);
        $settlements = $this->Paychecks->Settlements->find('list', ['limit' => 200]);
        $this->set(compact('paycheck', 'employees', 'employers', 'periods', 'settlements'));
        $this->set('_serialize', ['paycheck']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Paycheck id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paycheck = $this->Paychecks->get($id);
        if ($this->Paychecks->delete($paycheck)) {
            $this->Flash->success(__('The paycheck has been deleted.'));
        } else {
            $this->Flash->error(__('The paycheck could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
