<html>
    <head>
        <title>Sample</title>
    </head>
    <body>
        <form method="POST" action="{{route('datas.update',$value->id)}}">
            @method('PATCH')
            @csrf
            <table border="2">
            <tr>
                <td><label>Name</label></td><td><input type="text" name="name" id="name" value="{{($value->name)}}"></td>
            </tr>
            <tr>
                <td><label>Email</label></td><td><input type="text" name="email" id="email" value="{{($value->email)}}"></td>
            </tr>
                    <td></td><td><input type="submit" value="Update" name="up" id="up"></td>
                </tr>
        </table>
        </form>
    </body>
</html>