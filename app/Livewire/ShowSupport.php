<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Flux\Flux;

#[Layout('components.layouts.app')]
class ShowSupport extends Component
{
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $message = '';

    protected $rules = [
        'name' => 'required|string|min:2|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|min:3|max:255',
        'message' => 'required|string|min:10|max:5000',
    ];

    public function submit()
    {
        $validated = $this->validate();

        // Send email to admin
        $adminEmail = config('mail.admin_email');

        if ($adminEmail) {
            Mail::raw("Support Request from: {$validated['name']} ({$validated['email']})\n\nSubject: {$validated['subject']}\n\nMessage:\n{$validated['message']}", function ($mail) use ($validated, $adminEmail) {
                $mail->to($adminEmail)
                    ->from($validated['email'], $validated['name'])
                    ->subject('Support Request: ' . $validated['subject']);
            });
        }

        // Reset form
        $this->reset(['name', 'email', 'subject', 'message']);

        // Show success message
        Flux::toast(
            heading: 'Support Request Sent',
            message: 'Your support request has been sent successfully. We\'ll get back to you soon.',
            variant: 'success'
        );
    }

    public function render()
    {
        return view('livewire.show-support');
    }
}

