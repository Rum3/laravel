<!DOCTYPE html>
<html>
<head>
    <title>Редактиране на потребител</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Редактиране на потребител</h1>

    <!-- Форма за редактиране на потребител -->
    <form id="edit-form" action="/update/{{ $user->id }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Име" value="{{ $user->name }}"><br>
        <input type="email" name="email" placeholder="Имейл" value="{{ $user->email }}"><br>
        <input type="password" name="password" placeholder="Парола"><br>
        <input type="submit" value="Запази">

        <input type="checkbox" name="is_subscribed" value="1" {{ $user->is_subscribed ? 'checked' : '' }}> Абониран<br>

        <input type="radio" name="gender" value="male" {{ $user->gender == 'male' ? 'checked' : '' }}> Мъж
        <input type="radio" name="gender" value="female" {{ $user->gender == 'female' ? 'checked' : '' }}> Жена

    </form>

    <script>
        // Ajax заявка за редактиране на потребител
        $('#edit-form').submit(function(e) {
            e.preventDefault(); // Предотвратяване на стандартното поведение на формата

            var form = $(this);
            var url = form.attr('action');
            var data = form.serialize();
            data += '&gender=' + $('input[name=gender]:checked').val();

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                dataType: 'json',
                success: function(response) {
                    alert(response.message);
                },
            });
        });
    </script>
</body>
</html>
