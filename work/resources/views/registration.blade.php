<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Регистрация</h1>

    <!-- Форма за регистрация -->
    <form id="registration-form" action="/registration" method="post">
        @csrf
        <input type="text" name="name" placeholder="Име"><br>
        <input type="email" name="email" placeholder="Имейл"><br>
        <input type="password" name="password" placeholder="Парола"><br>
        <input type="submit" value="Регистрирай се">

        <input type="checkbox" name="is_subscribed" value="1"> Абониран<br>

        <input type="radio" name="gender" value="male" checked> Мъж
        <input type="radio" name="gender" value="female"> Жена

    </form>

    <hr>

    <!-- Списък с потребители -->
    <h2>Списък с потребители</h2>
    <ul id="user-list">
        <!-- Тук ще се покажат потребителите след успешната заявка -->
    </ul>

    <script>
        // Ajax заявка за регистрация
        $('#registration-form').submit(function(e) {
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
                    form[0].reset(); // Изчистване на формата
                },
            });
        });

        // Ajax заявка за получаване на списък с потребители
        $(document).ready(function() {
            $.ajax({
                type: 'GET',
                url: '/list',
                dataType: 'json',
                success: function(response) {
                    var userList = $('#user-list');
                    userList.empty();

                    $.each(response.users, function(index, user) {
                        userList.append('<li>' + user.name + ' - ' + user.email + '</li>');
                    });
                },
                error: function(response) {
                    alert('Възникна грешка при зареждането на списъка с потребители.');
                }
            });
        });
    </script>
</body>
</html>
