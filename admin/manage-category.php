<?php include('partials/menu.php');  ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1>

        <br /><br />
        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['remove']))
            {
                echo $_SESSION['remove'];
                unset($_SESSION['remove']);
            }

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['no-category-found']))
            {
                echo $_SESSION['no-category-found'];
                unset($_SESSION['no-category-found']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }

            if(isset($_SESSION['failed-remove']))
            {
                echo $_SESSION['failed-remove'];
                unset($_SESSION['failed-remove']);
            }
        
        ?>
        
        <br><br>

                <!---Button to add admin -->
                <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>

                <br /><br /><br />
                
                <table class = "tbl-full">
                    <tr>
                        <th>S.N</th>
                        <th>title</th>
                        <th>image</th>
                        <th>Actions</th>

                    </tr>

                    <tr>
                        <td>1.</td>
                        <td>Shrutika Patil</td>
                        <td>shrutp</td>
                        <td>
                        <a href="#" class="btn-secondary">Upadte Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>     
                        </td>

                    </tr>

                    <tr>
                        <td>1.</td>
                        <td>Shrutika Patil</td>
                        <td>shrutp</td>
                        <td>
                        <a href="#" class="btn-secondary">Upadte Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>   
                        </td>

                    </tr>

                    <tr>
                        <td>1.</td>
                        <td>Shrutika Patil</td>
                        <td>shrutp</td>
                        <td>
                        <a href="#" class="btn-secondary">Upadte Admin</a>
                        <a href="#" class="btn-danger">Delete Admin</a>    
                        </td>

                    </tr>

                </table>

    </div>
    
</div>



<?php include('partials/footer.php');  ?>