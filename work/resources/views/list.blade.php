<!DOCTYPE html>
<html>
<head>
    <title>Списък със студенти</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Списък със студенти</h1>
    <ul id="studentList"></ul>

    <script>
        $(document).ready(function() {
            // Зареждане на списъка със студенти при зареждане на страницата
            loadStudentList();

            function loadStudentList() {
                $.ajax({
                    url: '/students',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#studentList').empty();

                        if (response.length > 0) {
                            response.forEach(function(student) {
                                $('#studentList').append('<li>' + student.name + ' - ' + student.email + '</li>');
                                // Добавете останалите полета според вашите изисквания
                            });
                        } else {
                            $('#studentList').append('<li>Няма налични студенти.</li>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    </script>
</body>
</html>
