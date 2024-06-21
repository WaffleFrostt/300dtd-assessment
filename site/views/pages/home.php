<!-- <h2>Create a Master Password</h2>
<br>
</br>
<h4>To access notes, please select a master password:</h4>

<form action="/notes" method="post">
    <input type="password" name="password" id="password" required>  

    <div id="password-strength" hx-get="/password-strength" hx-trigger="input">
        <div id="password-strength-bar" style="width: 0%"></div>    
    </div>
    <button type="submit">Submit</button>
 -->

 <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> 
<link rel="stylesheet" href="passwordstyles.css">
    <script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script>
    <script src="password.js"></script> 
</head>

<body>
    <div class="container">
        <form class="form-horizontal" id="validateForm">
            <h1>Create a Master Password</h1> 
            <fieldset>
                <!-- Email input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="textinput">
                        
                </div>
                
                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="passwordinput">
                        Password
                    </label>
                    <div class="col-md-12">
                        <input id="password" class="form-control input-md"
                        name="password" type="password" 
                        placeholder="Enter your password" >
                        <span class="show-pass" onclick="toggle()">
                            <i class="far fa-eye" onclick="myFunction(this)"></i>
                        </span>
                        <div id="popover-password">
                            <p><span id="result"></span></p>
                            <div class="progress">
                                <div id="password-strength" 
                                    class="progress-bar" 
                                    role="progressbar" 
                                    aria-valuenow="40" 
                                    aria-valuemin="0" 
                                    aria-valuemax="100" 
                                    style="width:0%">
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li class="">
                                    <span class="low-upper-case">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Lowercase &amp; Uppercase
                                    </span>
                                </li>
                                <li class="">
                                    <span class="one-number">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Number (0-9)
                                    </span> 
                                </li>
                                <li class="">
                                    <span class="one-special-char">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Special Character (!@#$%^&*)
                                    </span>
                                </li>
                                <li class="">
                                    <span class="eight-character">
                                        <i class="fas fa-circle" aria-hidden="true"></i>
                                        &nbsp;Atleast 8 Character
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                
                <div class="form-group">
                    <a href="#" class="btn login-btn btn-block">
                        Submit
                    </a>    
                </div>
                    <div class="divider"></div>
                </div>
            </fieldset>
        </form>   
    </div>
<!--     <script src="main.js"></script> -->
</body>