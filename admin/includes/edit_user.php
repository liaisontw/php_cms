<?php
    if ( isset( $_GET['edit_user'] ) ) {
        $the_user_id        = $_GET['edit_user'];

        $query = "SELECT * FROM users WHERE user_id = $the_user_id";
        $select_users_query = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_users_query) ) {
            $user_id        = $row['user_id'];
            $username       = $row['username'];
            $user_password  = $row['user_password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname  = $row['user_lastname'];
            $user_email     = $row['user_email'];
            $user_image     = $row['user_image'];
            $user_role      = $row['user_role'];
        }
    }

    if ( isset( $_POST['edit_user'] ) ) {
        //$user_id        = $_POST['user_id'];
        $user_firstname = $_POST['user_firstname'];
        $user_lastname  = $_POST['user_lastname'];
        $user_role      = $_POST['user_role'];
        $username       = $_POST['username'];
        $user_email     = $_POST['user_email'];
        $user_password  = $_POST['user_password'];
        
        //$user_image     = $_POST['user_image'];

        //move_uploaded_file( $post_image_temp, "../images/$post_image" );
        $query = "INSERT INTO users(user_firstname, user_lastname,  
                    user_role,username,user_email,user_password) ";
             
        $query .= "VALUES('{$user_firstname}', '{$user_lastname}',  
                    '{$user_role}','{$username}','{$user_email}','{$user_password}') "; 

        $create_user_query = mysqli_query($connection, $query);  
        confirmQuery( $create_user_query );
        
    }

?>

<form action="" method="post" enctype="multipart/form-data">    
    <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
    </div>

    <div class="form-group">
        <label for="title">Lastname</label>
        <input type="text" value="<?php echo $user_lastname; ?>"class="form-control" name="user_lastname">
    </div>

    <div class="form-group">
        <select name="user_role" id="">
            <option value="subscriber">Select Options</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div>

    <!-- <div class="form-group">
        <label for="users">Users</label>
        <select name="post_user" id="">

        </select>
    </div> 
    <div class="form-group">
        <select name="post_status" id="">
            <option value="draft">Post Status</option>
            <option value="published">Published</option>
            <option value="draft">Draft</option>
        </select>
    </div>

    <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file"  name="image">
    </div>

-->
  

    <div class="form-group">
        <label for="post_tags">Username</label>
        <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
    </div>
     
    <div class="form-group">
        <label for="post_content">Email</label>
        <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
    </div>

    <div class="form-group">
        <label for="post_content">Password</label>
        <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Edit User">
    </div>
</form>