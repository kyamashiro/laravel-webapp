<?php
/**
 * Created by PhpStorm.
 * User: kyamashiro
 * Date: 2019/01/19
 * Time: 0:30
 */

namespace App\Listeners;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Mail\Mailer;

class RegisteredListener
{
    /**
     * @var Mailer
     */
    private $mailer;
    /**
     * @var User
     */
    private $eloquent;

    /**
     * RegisteredListener constructor.
     * @param Mailer $mailer
     * @param User $eloquent
     */
    public function __construct(Mailer $mailer, User $eloquent)
    {
        $this->mailer = $mailer;
        $this->eloquent = $eloquent;
    }

    public function handle(Registered $event)
    {
        $user = $this->eloquent->findOrFail($event->user->getAuthIdentifier());

        $this->mailer->raw('会員登録しました', function ($message) use ($user) {
            $message->subject('会員登録メール')->to($user->email);
        });
    }

}