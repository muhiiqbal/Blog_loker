<?php namespace App\Controllers;

use App\Models\AccountModel;
use CodeIgniter\Controller;

class AccountController extends Controller
{
    public function index()
    {
        $model = new AccountModel();
        $data['accounts'] = $model->findAll();
        return view('account/index', $data);
    }

    public function create()
    {
        return view('account/create');
    }

   public function store()
{
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $name = $this->request->getPost('name');
    $role = $this->request->getPost('role');

    // Debugging
    log_message('debug', 'Username: ' . $username);
    log_message('debug', 'Password: ' . $password);
    log_message('debug', 'Name: ' . $name);
    log_message('debug', 'Role: ' . $role);

    // Validasi input
    if (empty($username) || empty($password) || empty($name) || empty($role)) {
        return redirect()->back()->with('error', 'Semua field harus diisi');
    }

    // Hash password
    $data = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'name' => $name,
        'role' => $role,
    ];

    $model = new \App\Models\AccountModel();
    if (!$model->insert($data)) {
        $errors = $model->errors();
        return redirect()->back()->with('error', $errors);
    }

    return redirect()->to('/account');
}
    public function edit($username)
    {
        $model = new AccountModel();
        $data['account'] = $model->find($username);
        return view('account/edit', $data);
    }

    public function update($username)
    {
        $model = new AccountModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'role' => $this->request->getPost('role'),
        ];
        $model->update($username, $data);
        return redirect()->to('/account');
    }

    public function delete($username)
    {
        $model = new AccountModel();
        $model->delete($username);
        return redirect()->to('/account');
    }
}
