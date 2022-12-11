<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
</head>
<body>
    <h1>Pesan Singkat</h1>
    <form action="sender.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="email" value=""></td>
            </tr>

            <tr>
                <td>Subject: </td>
                <td><input type="subject" name="subject" value=""></td>
            </tr>
            <tr>
                <td>Message :</td> 
                <td><textarea name="message" cols="32" rows="5"value=""> </textarea></td>
            </tr>
            <tr>
                <td>Choose a file/Image</td>
                <td><input type="file" class="file" name="image" id="image" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="send" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
