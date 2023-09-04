<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::orderBy('username', 'ASC')->paginate(20);
        return view('livewire.users.index', ['users' => $users]);
    }
}
