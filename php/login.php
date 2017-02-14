<?php
  if(isset($_POST['Login']))
  {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $select = "SELECT * FROM employee_accounts where user_name = '$username'";
    $result = $conn->query($select);
    $row = mysqli_fetch_array($result);

    if ($result->num_rows > 0)
  	{
      if($username == $row["user_name"] && $password == $row["user_password"]
      && $row["user_admin"] == 1 && $row["is_active"] == 1)
			{
        echo "USER FOUND";
        header("location: admin/admin-panel.html");
      }
      else
      {
        //echo "USER NOT FOUND";
        echo "Wrong username or password";
      }

    }
    else
    {
      echo "No user found";
    }

  }
?>
