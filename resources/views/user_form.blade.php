<form method="POST" action="/store-user">
    @csrf
    <input type="text" name="name" required maxlength="50">
    <input type="text" name="surname" required maxlength="50">
    <input type="email" name="email" required>
    <button type="submit">Submit</button>
</form>