<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f8fafc; margin: 0; padding: 32px 16px; color: #0f172a;">
    <div style="max-width: 640px; margin: 0 auto; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden;">
        <div style="background: linear-gradient(135deg, #312e81 0%, #4338ca 100%); padding: 24px 28px; color: #ffffff;">
            <h2 style="margin: 0; font-size: 24px;">New contact message</h2>
        </div>

        <div style="padding: 28px; line-height: 1.7;">
            <p style="margin: 0 0 16px; font-size: 16px;"><strong>Name:</strong> {{ $name ?? 'N/A' }}</p>
            <p style="margin: 0 0 16px; font-size: 16px;"><strong>Email:</strong> {{ $email ?? 'N/A' }}</p>
            @if (!empty($subject))
                <p style="margin: 0 0 16px; font-size: 16px;"><strong>Subject:</strong> {{ $subject }}</p>
            @endif

            <div style="margin-top: 20px; padding: 18px 20px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px;">
                <strong style="display: block; margin-bottom: 8px;">Message:</strong>
                <div style="white-space: pre-wrap;">{{ $message }}</div>
            </div>
        </div>
    </div>
</body>
</html>
