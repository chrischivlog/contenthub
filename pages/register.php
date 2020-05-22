<form action="" method="post">
  <label for="fname">How will you be called:</label>
  <input type="username" name="user" required><br><br>

  <label for="lname">Your email adress:</label>
  <input type="email" name="mail" required><br><br>

  <label for="lname">Your password:</label><br>
    <small>UpperCase, LowerCase and Number</small>
  <input type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" name="password" required><br><br>

  <label for="lname">Repeat your password:</label>
  <input type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" name="check_password" required><br><br>

  <label for="vehicle3"> I am over 16 years old.</label>
  <input type="checkbox" name="over-16" value="over-16" required><br><br>

  <label for="vehicle3"> I have read the terms of use and data protection regulations and accept them.</label>
  <input type="checkbox" name="read-terms" value="read-terms" required><br><br>


 
  <input type="submit" value="Submit">
</form> 