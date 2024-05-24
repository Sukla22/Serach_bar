<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("student.php"); ?>
    <form method="post" action="stu_add_save.php">
        <table border="1">

       <tr>
        <td>Name</td>
        <td><input type="text" name="s_name" id=""></td>
       </tr>
       <tr>
        <td>ID</td>
        <td><input type="number" name="s_id" id=""></td>
       </tr>
       <tr>
        <td>Department</td>
        <td><input type="text" name="s_dept" id=""></td>
       </tr>
       <tr>
        <td>Phone Number</td>
        <td><input type="tel" name="s_phone" id=""></td>
       </tr>
       <tr>
        <td>Email</td>
        <td><input type="email" name="s_email" id=""></td>
       </tr>
       <tr>
        
        <td colspan="2"><input type="submit" value="Save"></td>
       </tr>

        </table>
    </form>
</body>
</html>