<!-- contact.blade.php -->
@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('contact.store') }}">
    @csrf

    <div>
        <label for="name">Име</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="phone">Телефон</label>
        <input type="text" id="phone" name="phone" required>
    </div>

    <div>
        <label for="email">Имейл адрес</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="message">Съобщение</label>
        <textarea id="message" name="message" required></textarea>
    </div>

    <button type="submit">Изпрати</button>
</form>

<form action="/file" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="file" name="files[]" multiple>
    </div>
    
    <button type="submit">Добави файлове</button>
</form>
<!-- Линк за изтегляне на последния качен файл -->
