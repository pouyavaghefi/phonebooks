<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Email;
use App\Models\Number;
use App\Models\Phonebook;
use Illuminate\Http\Request;
use Alert;

class ContactsController extends Controller
{
    public function all(Phonebook $phonebook)
    {
        return view('panel.contacts.add', compact('phonebook'));
    }

    public function add(Phonebook $phonebook)
    {
        return view('panel.contacts.add', compact('phonebook'));
    }

    public function doAdd(Request $request, $id)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'nullable',
            'address' => 'nullable',
            'email' => 'nullable',
            'number' => 'required',
        ]);

        $contact = Contact::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phonebook_id' => $id,
        ]);

        $this->addEmails($request->email, $contact->id);
        $this->addAddresses($request->address, $contact->id);
        $this->addNumbers($request->number, $contact->id);

        return redirect()->route('panel.phonebooks.show',$id);
    }

    private function addEmails($emails, $contactId)
    {
        foreach ($emails as $e) {
            if (!is_null($e)) {
                Email::create([
                    'contact_id' => $contactId,
                    'email_address' => $e
                ]);
            }
        }
    }

    private function addAddresses($addresses, $contactId)
    {
        foreach ($addresses as $a) {
            if (!is_null($a)) {
                Address::create([
                    'contact_id' => $contactId,
                    'location' => $a
                ]);
            }
        }
    }

    private function addNumbers($numbers, $contactId)
    {
        foreach ($numbers as $n) {
            if (!is_null($n)) {
                Number::create([
                    'contact_id' => $contactId,
                    'full_number' => $n
                ]);
            }
        }
    }

    public function show(Contact $contact)
    {
        return view('panel.contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('panel.contacts.edit', compact('contact'));
    }

    public function doEdit(Request $request, $id)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'nullable',
            'address' => 'nullable',
            'email' => 'nullable',
            'number' => 'required',
        ]);

        $contact = Contact::find($id)->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
        ]);

        $this->addEmails($request->email, $id);
        $this->addAddresses($request->address, $id);
        $this->addNumbers($request->number, $id);

        return redirect()->route('panel.contacts.show',$id);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('panel.phonebooks.show', $contact->phonebook->id);
    }

    public function new()
    {
        $phonebook_counts = Phonebook::count();
        if($phonebook_counts >= 1){
            return view('panel.contacts.new');
        }else{
            Alert::alert('توجه', 'در حال حاضر شما هیچ دفترچه تلفنی ایجاد نکرده اید. لطفا ابتدا یک دفترچه تلفن ثبت نمایید.', 'Error');
            return redirect()->back();
        }
    }
}
