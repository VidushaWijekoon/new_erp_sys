<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        $userCount = DB::table('users')->count(['id']);
        $users = User::orderBy('username', 'ASC')->paginate(20);
        return view(
            'livewire.users.index',
            [
                'users' => $users,
                'userCount' => $userCount
            ]
        );
    }
}
