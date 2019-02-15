<html>
    <head>
        <title>Sample</title>
    </head>
    <body>
        <form method="POST" action="{{route('datas.store')}}">
            @csrf
            <table border="2">
            <tr>
                <td><label>Name</label></td><td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label>Email</label></td><td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label>Password</label></td><td><input type="password" name="pass" id="pass"></td>
            </tr>
            <tr>
                    <td></td><td><input type="submit" name="sub" id="sub"></td>
                </tr>
        </table>
        </form>
    </body>
</html>