<?php

namespace Tests\Feature;

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
        $response = $this->post('/contact', [
            'name'    => 'John Doe',
            'email'   => 'john@example.com',
            'subject' => 'Project Inquiry',
            'message' => 'Hello Alex, I would love to discuss a new Laravel project with you.',
        ]);

        $response->assertSessionHas('success');
        $response->assertRedirect();
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
