<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class Post extends Controller {
    public function index() {
        $model = new PostModel();
        $data['posts'] = $model->findAll();
        return view('post/index', $data);
    }

    public function create() {
        helper('form');
        $model = new PostModel();
        $session = session(); // Menggunakan session() helper

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required',
            'content' => 'required'
        ])) {
            $model->save([
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content'),
                'date' => date('Y-m-d H:i:s'),
                'username' => $session->get('user')['username'] // Menggunakan session() helper
            ]);
            return redirect()->to('/post');
        }
        return view('post/create');
    }

    public function update($idpost) {
        helper('form');
        $model = new PostModel();
        $session = session(); // Menggunakan session() helper

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required',
            'content' => 'required'
        ])) {
            $model->save([
                'idpost' => $idpost,
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ]);
            return redirect()->to('/post');
        }

        $data['post'] = $model->find($idpost);
        return view('post/update', $data);
    }

    public function delete($idpost) {
        $model = new PostModel();
        $model->delete($idpost);
        return redirect()->to('/post');
    }
}
