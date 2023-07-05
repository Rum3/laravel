<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-links {
            background-color: #333;
        }

        button {
            padding: 10px 20px;
            background-color: #555;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 150%;
        }

        button:hover {
            background-color: #777;
        }
</style>
<header>
    <div class="navbar-links">
        <form  action="/book" method="GET">
        <button type="submit">Биоблиотека</button>
        </form>
    </div>


    <div class="navbar-links">
        <form  action="/add" method="GET">
        <button type="submit">Добави нова книга</button>
        </form>
    </div>
</header>
