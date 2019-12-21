<?php

namespace App\Widgets;

use App\User;
use Arrilot\Widgets\AbstractWidget;

class AllUsers extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $allUsers = User::all()->count();

        return view('widgets.all_users', [
            'config' => $this->config,
            'allUsers' => $allUsers
        ]);
    }
}
