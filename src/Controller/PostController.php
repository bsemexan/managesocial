<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Post Controller
 *
 * @property \App\Model\Table\PostTable $Post
 */
class PostController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $post = $this->paginate($this->Post);

        $this->set(compact('post'));
        $this->set('_serialize', ['post']);
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $post = $this->Post->get($id, [
            'contain' => ['Content', 'Feedback']
        ]);

        $this->set('post', $post);
        $this->set('_serialize', ['post']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $post = $this->Post->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Post->patchEntity($post, $this->request->data);
            if ($this->Post->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $content = $this->Post->Content->find('list', ['limit' => 200]);
        $feedback = $this->Post->Feedback->find('list', ['limit' => 200]);
        $this->set(compact('post', 'content', 'feedback'));
        $this->set('_serialize', ['post']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $post = $this->Post->get($id, [
            'contain' => ['Content', 'Feedback']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Post->patchEntity($post, $this->request->data);
            if ($this->Post->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $content = $this->Post->Content->find('list', ['limit' => 200]);
        $feedback = $this->Post->Feedback->find('list', ['limit' => 200]);
        $this->set(compact('post', 'content', 'feedback'));
        $this->set('_serialize', ['post']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Post->get($id);
        if ($this->Post->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
