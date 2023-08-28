<?php

use App\Core\Controller;
use App\Model\Users;


class HomeController extends Controller
{
    private $users;
    private $data = [];

    public function __construct()
    {
        $this->users = new Users();
    }

    public function index()
    {
        $this->data['title'] = 'Trang chủ';
        $this->data['view'] = $this->view(_CLENTS, 'welcome/index');
        $this->data['forward']['allUsers'] = $this->users->getAllUser();
        return $this->layout('client_layout', $this->data);
    }
}
