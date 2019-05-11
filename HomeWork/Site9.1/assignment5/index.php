
<html>

<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

  <link rel="stylesheet" href="supplemental.css" />

<title>Julian Kanaan Web Dev</title>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Julian</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="aboutme.html">About Me</a></li>

    </ul>
  </div>
</nav>

<div class="container">

    <h3>Hi there, submit the form below to translate your text into pig latin</h3>

    <form action="pig-latin.php" method="post">
      <div class="form-group">
          <label for="pigLatinInput">Enter here</label>
          <textarea type="input" name="userinput" class="form-control" placeholder="Write some words.." id="pigLatinInput" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <input type="hidden" name="submitted" value="true" />
    </form>

</div>

</body>

</html>
