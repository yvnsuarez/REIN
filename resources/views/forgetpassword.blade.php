<html>
<body>
<form action="/forgetpassword/{{ $id }}" method="POST">
@csrf 

<div class="alert alert-danger" role="alert">

    </div>


    <span>Email</span>
    <input type="email" name="Email" id="Email" min="6">

    
    <span>Password</span>
    <input type="password" name="Password" id="Password">

    
    <span>Confirm Password</span>
    <input type="password" name="CPass" id="CPass">

    
    <span>Email</span>
    <input type="submit" value="submit">
</form>
</body>
</html>