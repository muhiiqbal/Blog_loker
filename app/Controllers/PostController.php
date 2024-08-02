<?php namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class PostController extends Controller
{
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->findAll();
        return view('post/index', $data);
    }

    public function create()
    {
        return view('post/create');
    }

    public function store()
    {
        $model = new PostModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'date' => date('Y-m-d H:i:s'),
            'username' => session()->get('username'),
        ];
        $model->save($data);
        return redirect()->to('/post');
    }

    public function edit($id)
    {
        $model = new PostModel();
        $data['post'] = $model->find($id);
        return view('post/edit', $data);
    }

    public function update($id)
    {
        $model = new PostModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ];
        $model->update($id, $data);
        return redirect()->to('/post');
    }

    public function delete($id)
    {
        $model = new PostModel();
        $model->delete($id);
        return redirect()->to('/post');
    }
}
