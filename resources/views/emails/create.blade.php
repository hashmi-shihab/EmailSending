<html>
<head>
    send mail
</head>
<body>
<form action="{{route('mailSend')}}" class="contact-form" method="POST">
    @csrf
    @method('POST')
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="email" placeholder="Email" required>
    <input type="number" name="contact_no" placeholder="Contact No" min="0" required>
    <textarea name="body" placeholder="Email body" maxlength="100"></textarea>
    <button type="submit" class="site-btn">Send Email</button>
</form>
</body>
</html>
