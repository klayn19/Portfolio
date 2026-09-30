<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $message;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->subject = $data['subject'] ?? 'New Portfolio Inquiry';
        $this->message = $data['message'];
    }

    /**
     * Build the message.
     */
    public function build(): static
    {
        return $this
            ->from(config('mail.from.address'), config('mail.from.name'))
            ->replyTo($this->email, $this->name)
            ->subject($this->subject ?: 'New Portfolio Inquiry')
            ->html(
                '<div style="font-family:Arial,sans-serif;">
                    <h2>New Portfolio Inquiry</h2>
                    <p><strong>Name:</strong> ' . e($this->name) . '</p>
                    <p><strong>Email:</strong> ' . e($this->email) . '</p>
                    <p><strong>Subject:</strong> ' . e($this->subject ?? 'New Portfolio Inquiry') . '</p>
                    <p><strong>Message:</strong></p>
                    <p>' . nl2br(e($this->message)) . '</p>
                </div>'
            );
    }
}
