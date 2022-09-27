<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link rel="stylesheet" href="css/error.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<style>
    
</style>
    <nav>
        <script src="js/hs.js"></script>
        <input type="checkbox" id="check" onclick="hs()">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars" ></i>
         </label>
         <img src="img/logo.png" alt="Logo" class="logo">
         <ul>
            <li><a class="active" href="../">Home</a></li>
            <li><a href="/about/">About</a></li>
            <li><a href="/contct/">Contact</a></li>
            <li><a href="/feedback/">Feedback</a></li>
            <li><a href="/login/">Login</a></li>
            <li><a href="/search/">Search</a></li>
         </ul>
      </nav>

   <div id="error-page">
         <div class="content" id="content">
            <img src="img/error.png" alt="" class="errorimg" id="img">
            <h4 data-text="Opps! Page not found">
               Opps! Page not found
            </h4>
            <p>
               Sorry, the page you're looking for doesn't exist. If you think something is missing, report a problem.
            </p>
            <div class="btns">
               <a href="../">return home</a>
               <a href="../contact/">report problem</a>
            </div>
         </div>
      </div>
</body>
</html>