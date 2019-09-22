var frmvalidator = new Validator(“email”); 
frmvalidator.addValidation(“custName”,”req”,”Please provide your name”); 
frmvalidator.addValidation(“emailaddress”,”req”,”Please provide your email”); 
frmvalidator.addValidation(“zip”,”req”, “Please provide your zipcode”);

var frmvalidator = new Validator(“userRecipe”); 
frmvalidator.addValidation(“custName”,”req”,”Please provide your name”); 
frmvalidator.addValidation(“recipeName”,”req”,”Please provide a name for your recipe”); 
frmvalidator.addValidation(“ingredients”,”req”, “Please provide ingredients and measurements for your recipe”);
frmvalidator.addValidation(“directions”,”req”,”Please provide directions on preparing your recipe”);