<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design Lite Login From</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form   >  
            <div class="container">   
                <label>Username : </label>   
                <input type="text" placeholder="Enter Username" name="userid" required>  
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="pwd" required> 
                <tr>
                    <td ><input type="Reset" value="CLEAR"></td>
                    <td><input type="submit" onclick="return check(this.form)" value="SUBMIT">
                    </td>
                </tr>
                <script language="javascript">
function check(form)
{
if(form.userid.value == "Aibek" && form.pwd.value == "123")
{
    form.action = "https://dfsgvsgsg.herokuapp.com/";
    return true;
}
{
  alert("Error Password or Username")
  return false;
}
}
</script>
</html>