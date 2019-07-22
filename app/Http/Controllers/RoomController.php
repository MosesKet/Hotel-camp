<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function index()
    {
        $rooms = Room::all();
        return view('pages.rooms', compact('rooms'));
    }

    public function create()
    {
        $room = new Room();
        return view('rooms.create', compact('room'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'amount' => 'required',
            'type' => 'required',
            'beds' => 'required',
            'desccription' => 'required'
        ]);

        Room::create($request->all());

        $request->session()->flash('msg', 'Room has been created');

        return redirect('/rooms');
    }

    public function show(Room $room)
    {
        $room = Room::find($room->id);
        return view('pages.room', compact('room'));
    }

    public function edit(Room $room)
    {
        $room = Room::find($room->id);
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'amount' => 'required',
            'type' => 'required',
            'beds' => 'required',
            'desccription' => 'required'
        ]);

        $room = Room::find($id);
        $room->update($request->all());
        $request->session()->flash('msg', 'Room has been updated');
        return redirect('/rooms');
    }

    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        request()->session()->flash('msg', 'Room has been deleted');
        return redirect('rooms');
    }
}
