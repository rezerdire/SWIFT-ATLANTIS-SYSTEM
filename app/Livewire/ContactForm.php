<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|min:2|max:50')]
    public string $firstName = '';

    #[Validate('required|min:2|max:50')]
    public string $lastName = '';

    #[Validate('required|email|max:100')]
    public string $email = '';

    #[Validate('required|min:7|max:20')]
    public string $phone = '';

    #[Validate('required')]
    public string $projectType = '';

    #[Validate('required|min:20|max:1000')]
    public string $message = '';

    public bool $submitted = false;
    public bool $submitting = false;

    /** @var array<string, string> */
    public array $projectTypes = [
        'residential' => 'Residential Building',
        'commercial'  => 'Commercial Building',
        'hotel'       => 'Hotel / Resort',
        'industrial'  => 'Industrial / Factory',
        'villa'       => 'Villa / Townhouse',
        'other'       => 'Other',
    ];

    public function updated(string $field): void
    {
        $this->validateOnly($field);
    }

    public function submit(): void
    {
        $this->validate();

        $this->submitting = true;

        // ── TODO: replace with real mail / notification ──
        // Mail::to('ahmednada2swiftatlantis.ae')->send(new EnquiryMail($this->all()));

        // Simulate brief processing
        sleep(1);

        $this->submitted  = true;
        $this->submitting = false;

        // Reset form
        $this->reset(['firstName', 'lastName', 'email', 'phone', 'projectType', 'message']);
    }

    public function resetForm(): void
    {
        $this->submitted = false;
        $this->reset(['firstName', 'lastName', 'email', 'phone', 'projectType', 'message']);
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.contact-form');
    }
}
