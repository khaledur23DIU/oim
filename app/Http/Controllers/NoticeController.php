<?php

namespace App\Http\Controllers;

use App\Notifications\ApplyForOIM;
use App\Role;
use App\User;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;
class NoticeController extends Controller
{
   public function notice()
   {
   	$role = Role::find(2);
   	$users = $role->users;
	// $users->notify(new ApplyForOIM());
   	Notification::send($users, new ApplyForOIM());
   	dd('success');
   }
}
