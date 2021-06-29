<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <h1>954240 -Week2 - @yield('title')</h1>
            <nav>
            <a href="/home">Home</a>
            <a href="/me">Aboute me</a>
            <a href="/friend">Friends</a>
            <a href="/schedule">Teaching Schedule</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            &#xA9; Copyright Week-02, 2020 Natnicha.
        </footer>
    </body>
</html>