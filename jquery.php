<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Standalone jQuery validation practice. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Form Validation Example</title>
    <!-- Load jQuery before its validation plugin. -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.22.1/jquery.validate.min.js" integrity="sha512-qu7dMuIm2f0KcKZ3BOoP4c+Hn+r4E8PbD2Ro4rmKsOyheCxcwhzQpf6SojA76dn+owqfANzfTFUTkGA+HpHjOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Error message styles. -->
    <style>
#name-error{
    color: red;
    font-size: 15px;
    font-style: strong;
}
#email-error{
    color: red;
    font-size: 15px;
    font-style: strong;         
}
#pasword-error{
    color: red;
    font-size: 15px;
    font-style: strong;
}
   </style>
</head>
<body>

    <!-- The script targets this form by ID. -->
    <form id="myForm">
        
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" >
           
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
           
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
    
        </div>

      

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    



    <!-- Set field rules and error messages. -->
    <script>
        $(document).ready(function(){

            $("#myForm").validate({

            rules: {
                name: { required: true, 
                    minlength: 2, 
                    maxlength: 80 },
                    email: { required: true, 
                    email: true },
                    password: { required: true, 
                    minlength: 8 }
            },
            messages: {
                name: {
                    required: "Please enter your full name.",
                    minlength: "Your name must be at least 2 characters.",
                    maxlength: "Your name must be 80 characters or fewer."
            },
            email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address."
            },
            password: {
                required: "Please create a password.",
                minlength: "Your password must be at least 8 characters."
          }
        },
    

            });

        });
    </script>
        




</body>
</html>