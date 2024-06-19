<h2>Create a Master Password</h2>
<br>
</br>
<h4>To access notes, please select a master password:</h4>
<!-- input password box -->
<form action="/notes" method="post">
    <input type="password" name="password" id="password" required>
<!-- working password strength meter on a scale of three -->
    <meter max="3" id="password-strength-meter"></meter>
    <p id="password-strength-text"></p>
    <br>
    </br>
    <h4>Confirm your password:</h4>
    <input type="password" name="confirm_password" id="confirm_password" required>
    <br>
    </br>
    <input type="submit" value="Submit">
