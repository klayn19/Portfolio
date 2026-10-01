<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /**
     * Test portfolio homepage renders correctly.
     */
    public function test_portfolio_page_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Klein');
        $response->assertSee('Campus Online Store');
        $response->assertSee('Skills & Technologies', false);
        $response->assertSee('Experience & Education');
        $response->assertSee('Events & Activities', false);
    }

    /**
     * Test contact form validation and submission.
     */
    public function test_contact_form_submission(): void
    {
        Mail::fake();

        $response = $this->withHeader('Accept', 'application/json')
            ->post('/contact', [
                'name'    => 'John Doe',
                'email'   => 'john@example.com',
                'subject' => 'Project Inquiry',
                'message' => 'Hello Alex, I would love to discuss a new Laravel project with you.',
            ]);

        Mail::assertSent(\App\Mail\ContactMessage::class, function ($mail) {
            return $mail->hasTo('klaynsantos19@gmail.com');
        });

        $response->assertOk();
        $response->assertJsonPath('success', true);
        $response->assertJsonPath('message', 'Thank you! Your message has been sent successfully. I will get back to you shortly.');
    }

    /**
     * Test contact form validation failures.
     */
    public function test_contact_form_validation(): void
    {
        $response = $this->post('/contact', [
            'name'  => '',
            'email' => 'invalid-email',
            'message' => 'short',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }
}
