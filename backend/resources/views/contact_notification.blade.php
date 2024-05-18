<!DOCTYPE html>
<html>
<head>
    <title>Contact Notification</title>
</head>
<body>
    <p>New contact form submission from {{ $form->name }} ({{ $form->email }}).</p>
    <p>Message:</p>
    <p>{{ $form->message }}</p>
</body>
</html>
