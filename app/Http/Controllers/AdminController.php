<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //
    function contacts(Request $request)
    {

        $search = $request->search;
        $status = $request->status;

        if ($search && $status) {

            $contacts = Contact::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            })
                ->where('status', $status)
                ->latest()
                ->paginate(10);
        } elseif ($search) {

            $contacts = Contact::where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->latest()
                ->paginate(10);
        } elseif ($status) {

            $contacts = Contact::where('status', $status)
                ->latest()
                ->paginate(10);
        } else {

            $contacts = Contact::latest()->paginate(10);
        }

        return view('admin.contacts', compact('contacts'));
    }

    function showContact(int $id)
    {
        $contact = Contact::findOrFail($id);

        if (!$contact->is_read) {
            $contact->is_read = true;
            $contact->save();
        }
        return view('admin.show_contact', compact('contact'));
    }

    function destroy(int $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('/admin/contacts')->with('success', 'Contact deleted successfully.');
    }

    function dashboard()
    {
        $totalContacts = Contact::count();
        $unreadContacts = Contact::where('status', 'Unread')->count();
        $readContacts = Contact::where('status', 'Read')->count();

        $recentContacts = Contact::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalContacts',
            'unreadContacts',
            'readContacts',
            'recentContacts'
        ));
    }

    // events
    function events(Request $request)
    {
        $search = $request->search;

        if ($search) {

            $events = Event::where('title', 'like', '%' . $search . '%')
                ->orWhere('location', 'like', '%' . $search . '%')
                ->latest()
                ->paginate(10);
        } else {

            $events = Event::latest()->paginate(10);
        }

        return view('admin.events', compact('events'));
    }
    function createEvent()
    {
        return view('admin.create_event');
    }
    function storeEvent(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'location' => 'required|max:255',
            'event_date' => 'required|date|after_or_equal:today',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image')->store('events', 'public');

        Event::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'location' => $validated['location'],
            'event_date' => $validated['event_date'],
            'start_time' => $validated['start_time'],
            'end_time' => $validated['end_time'],
            'image' => $imagePath,
            'status' => 'Upcoming'
        ]);

        return redirect('/admin/events')
            ->with('success', 'Event created successfully.');
    }

    function editEvent(int $id)
    {
        $event = Event::findOrFail($id);
        return view('admin.edit_event', compact('event'));
    }
    function updateEvent(Request $request, int $id)
    {
        $event = Event::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'location' => 'required|max:255',
            'event_date' => 'required|date|after_or_equal:today',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ]);
        if ($request->hasFile('image')) {
            if ($event->image && Storage::disk('public')->exists($event->image)) {
                Storage::disk('public')->delete($event->image);
            }

            $validated['image'] = $request->file('image')->store('events', 'public');
        }

        $event->update($validated);
        return redirect('/admin/events')->with('success', 'Event updated sucessfully.');
    }

    function destroyEvent(int $id)
    {
        $event = Event::findOrFail($id);

        if ($event->image && Storage::disk('public')->exists($event->image)) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return redirect('/admin/events')
            ->with('success', 'Event deleted successfully.');
    }
}
