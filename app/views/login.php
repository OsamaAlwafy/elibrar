<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Document</title>
</head>
<body>
<form action ="/input_login" method="POST" class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Let's create your account!</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" name="name" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">User Name</label>
      </div>
     
      <div class="input-container ic2">
        <input id="password" class="input" name='password' type="password" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</>
      </div>
      <button type="submit" class="submit">submit</button>
</form>
</body>
</html>