<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

use App\Models\User;

use Carbon\Carbon;

class EventController extends Controller
{
    
    public function index() {

        $search = request('search');
        
        if($search) {

            $events = Event::where([
                ['title', 'like', '%'.$search.'%']

            ])->get();

        } else {
            $events = Event::all();
        }       
        
    
        return view('welcome',['events' => $events, 'search' => $search]);

    }
    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $event = new Event;
        // Set the other properties of the event
        $event->title = $request->title;
        $event->date = $request->date;
        $event->categoria = $request->categoria;
        $event->urgencia = $request->urgencia;
        $event->description = $request->description;
        $event->items = $request->items ?? "Novo";
    
        // Save the event
        $user = auth()->user();
        $event->user_id = $user->id; 

        $event->save();
        

    
        // Return a success message
        return redirect('/')->with('msg', 'Chamada criada com sucesso!');
    
    }

    public function show($id) {                 //controller de filtrar ID unico

        $event = Event::findOrFail($id);
        $eventOwner = User::where('id',$event->user_id)->first()->toArray(); //selecionando o usuario pelo ID unico
        return view('events.show', ['event' => $event,'eventOwner'=>$eventOwner]);
        
    }

    public function dashboard() {       
        $user = auth()->user();
        $events = $user->events;

        return view('events.dashboard',['events'=> $events]);
    }

    public function destroy($id) {    //controller para deletar um dado no banco
        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg','Chamada excluída com sucesso!');
    }

    public function edit($id) {
        $event = Event::findOrFail($id); //variavel vai receber um evento onde vai receber o ID mandado do front

        return view('events.edit',['event'=>$event]); //recebe o dado no banco de edit
    }
    public function update(Request $request) {

        $data = $request->all();

        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Chamada editada com sucesso!');

    }

    
    
}