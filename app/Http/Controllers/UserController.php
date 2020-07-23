<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notifications\AdMessage;
use App\Http\Requests\MessageAd;
use App\Repositories\ { AdRepository, MessageRepository };

class UserController extends Controller
{
    /**
     * Ad repository.
     *
     * @var App\Repositories\AdRepository
     */
    protected $adRepository;

    /**
     * Message repository.
     *
     * @var App\Repositories\Messagerepository
     */
    protected $messagerepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdRepository $adRepository, Messagerepository $messagerepository)
    {
        $this->adRepository = $adRepository;
        $this->messagerepository = $messagerepository;
    }

    /**
     * Send message.
     *
     * @param  App\Http\Requests\MessageAd  $request
     * @return \Illuminate\Http\Response
     */
    public function message(MessageAd $request)
    {
        $annonce = $this->adRepository->getById($request->id);

        if(auth()->check()) {
            $annonce->notify(new AdMessage($annonce, $request->message, auth()->user()->email));
            return response()->json(['info' => 'Votre message va être rapidement transmis.']);
        }

        $this->messagerepository->create([
            'texte' => $request->message,
            'email' => $request->email,
            'annonce_id' => $annonce->id,
        ]);

        return redirect()->route('product.index'); 
    }
}
