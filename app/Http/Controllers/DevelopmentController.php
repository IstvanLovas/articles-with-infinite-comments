<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Article;
use App\Subscriber;
use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Notifications\Mailchimp\ArticlePublished;

class DevelopmentController extends Controller
{
    public function testSendingWelcomeEmail(WelcomeEmail $email)
    {
        // Sending Test Email
        Mail::to('loleves@gmail.com')->send($email);

        return "Email Successfully sent";
    }

    public function testNotifyUserWhenArticlePublished()
    {
        $subscriber = Subscriber::first();
        $article = Article::first();
        
        $subscriber->notify(new ArticlePublished($article));

        return "NotificationEmail Successfully sent";
    }

    public function testAfterMigrationRefresh()
    {
        $user = User::whereEmail('loleves@gmail.com')->first();
        $role = Role::whereName('admin')->first();

        $user->assignRole($role);
        
        return User::with('roles')->find(1);
    }
}
