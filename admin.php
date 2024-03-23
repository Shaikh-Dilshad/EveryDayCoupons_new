<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/818fd82820.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="style.css">
    <title>Admin Page</title>
</head>

<body>


    <div class='signin signin1 '>



        <form action='main.php' method='post'>
            <div id='adminlogin'>

                <h2>Login Page</h2>
                <div class='form-element'>
                    <label for='email'>username</label>
                    <input type='text' id='email' placeholder='Enter email' name='username'>
                </div>
                <div class='form-element'>
                    <label for='email'>password</label>
                     <input type='password' id='password' placeholder='Enter password' name='password'>
                </div>
                <div class='form-element'>
                    <input type='checkbox' id='remember'>
                    <label for='email'>Remembered</label>
                </div>
                <div class='form-element another'>
                    <button type='submit'>Sign in</button>
                </div>

                <div class='form-element'>
                    <a href='#'>Forget password</a>
                </div>

            </div>
        </form>
        
</body>

</html>