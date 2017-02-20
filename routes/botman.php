<?php
use App\Http\Controllers\BotManController;
// Don't use the Facade in here to support the RTM API too :)

$botman = resolve('botman');
$botman->verifyServices('facebookMartisorToken');
$botman->hears('test', function($bot){
    $bot->reply('hello!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');