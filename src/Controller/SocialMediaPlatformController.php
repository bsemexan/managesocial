<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SocialMediaPlatform Controller
 *
 * @property \App\Model\Table\SocialMediaPlatformTable $SocialMediaPlatform
 */
class SocialMediaPlatformController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $socialMediaPlatform = $this->paginate($this->SocialMediaPlatform);

        $this->set(compact('socialMediaPlatform'));
        $this->set('_serialize', ['socialMediaPlatform']);
    }

    /**
     * View method
     *
     * @param string|null $id Social Media Platform id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socialMediaPlatform = $this->SocialMediaPlatform->get($id, [
            'contain' => []
        ]);

        $this->set('socialMediaPlatform', $socialMediaPlatform);
        $this->set('_serialize', ['socialMediaPlatform']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socialMediaPlatform = $this->SocialMediaPlatform->newEntity();
        if ($this->request->is('post')) {
            $socialMediaPlatform = $this->SocialMediaPlatform->patchEntity($socialMediaPlatform, $this->request->data);
            if ($this->SocialMediaPlatform->save($socialMediaPlatform)) {
                $this->Flash->success(__('The social media platform has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social media platform could not be saved. Please, try again.'));
        }
        $this->set(compact('socialMediaPlatform'));
        $this->set('_serialize', ['socialMediaPlatform']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Social Media Platform id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socialMediaPlatform = $this->SocialMediaPlatform->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialMediaPlatform = $this->SocialMediaPlatform->patchEntity($socialMediaPlatform, $this->request->data);
            if ($this->SocialMediaPlatform->save($socialMediaPlatform)) {
                $this->Flash->success(__('The social media platform has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social media platform could not be saved. Please, try again.'));
        }
        $this->set(compact('socialMediaPlatform'));
        $this->set('_serialize', ['socialMediaPlatform']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Social Media Platform id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socialMediaPlatform = $this->SocialMediaPlatform->get($id);
        if ($this->SocialMediaPlatform->delete($socialMediaPlatform)) {
            $this->Flash->success(__('The social media platform has been deleted.'));
        } else {
            $this->Flash->error(__('The social media platform could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
