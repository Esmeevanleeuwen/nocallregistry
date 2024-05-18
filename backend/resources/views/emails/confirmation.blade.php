<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Confirmation</title>
</head>
<body>
    <h1>Contact Form Confirmation</h1>
    <p>Thank you for contacting us, {{ $form->name }}.</p>
    <p>We have received your message and will get back to you shortly.</p>
    <p>Here is a copy of your message:</p>
    <p>{{ $form->message }}</p>
</body>
</html>
