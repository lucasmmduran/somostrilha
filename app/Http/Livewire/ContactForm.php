<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $fullname;
    public $email;
    public $area_code;
    public $phone;
    public $comment;
    public $success;
    public $title;
    public $redirect;
    public $paymentMethod;
    public $price;
    public $hasFooter;
    public $intro;
    public $priceDolar;
    public $hasModal;

    public function submit()
    {
        $contact = $this->validate([
            'fullname' => 'max:255|required',
            'email' => 'required|email|max:255|',
            'area_code' => 'required',
            'phone' => 'required|max:100',
            'comment' => 'required'
        ]);

        $this->save_lead();
        //$this->send_email();
        $this->clearFields();

        return redirect()->route('gracias');
    }

    private function save_lead()
    {
        $lead = new Lead();
        $lead->fullname = $this->fullname;
        $lead->phone = $this->area_code . $this->phone;
        $lead->email = $this->email;
        $lead->comment = $this->comment;
        $lead->save();
    }

    private function send_email()
    {
        $users = [

            0 => [0 => "lucasmmduran@gmail.com", 1 => "Lucas"],
            /* 	0 => [0 => "cottijulio@gmail.com", 1 => "Julio"],
			1 => [0 => "cmb_2108@hotmail.com", 1 => "cmb_2108"],
			2 => [0 => "info@palermotecno.com.ar", 1 => "info"] */
        ];

        $request = [
            'fullname' => $this->fullname,
            'area_code' => $this->area_code,
            'phone' => $this->phone,
            'email' => $this->email,
            'comment' => $this->comment,
        ];

        foreach ($users as $user) {
            Mail::send('pages.gracias.message', ['user' => $user, 'request' => $request], function ($message) use ($user) {
                $message->from('info@palermotecno.com.ar', 'PalermoTecno');
                $message->to($user[0])->subject('Consulta');
            });
        }
    }

    private function clearFields()
    {
        $this->fullname = '';
        $this->email = '';
        $this->area_code = '';
        $this->phone = '';
        $this->comment = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
