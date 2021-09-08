<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Register Form -->
    <form action="registerprocess.php" method="POST">
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Password</label>
        <input type="password" name="password">
        <button type="submit">Register</button>
    </form>

    <br><br><br><br><br>
    <!-- Login -->
    <form action="loginprocess.php" method="POST">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Password</label>
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>

    <br><br><br><br><br>
    <!-- Form to send data to Google Sheets -->
    <form method="POST" id="register-form" name="submit-to-google-sheet">
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Password</label>
        <input type="password" name="password">
        <button type="submit">Register</button>
    </form>

    <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbxFe_N6qvh917Jtv4J-6mQF0_dK3v4dlK8C2tW9pxHH7VMn2aU8atp6IpOS0dNmTpwIGg/exec'
  const form = document.forms['submit-to-google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
</script>

</body>
</html>