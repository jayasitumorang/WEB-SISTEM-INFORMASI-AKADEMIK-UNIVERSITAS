<?php
    require 'nicof.php';
    if(ISSET($_POST['search'])){
?>
    <table class="table table-striped">
        <thead class="alert-info">
            <tr>
                <th>Book</th>
                <th>Author</th>
                <th>Date Published</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $keyword = $_POST['keyword'];
                $query = mysqli_query($conn, "SELECT * FROM `book` WHERE `title` LIKE '%$keyword%' or `author` LIKE '%$keyword%'") or die(mysqli_error());
                $count = mysqli_num_rows($query);
                if($count > 0){
                    while($fetch = mysqli_fetch_array($query)){
            ?>
                    <tr>
                        <td><?php echo $fetch['title']?></td>
                        <td><?php echo $fetch['author']?></td>
                        <td><?php echo $fetch['date_published']?></td>
                    </tr>
            <?php
                    }
                }else{
                    echo "<tr><td colspan='3' class='text-danger'><center>No result found!</center></td></tr>";
                }
            ?>
        </tbody>
    </table>
<?php       
    }else{
?>
    <table class="table table-striped">
        <thead class="alert-info">
            <tr>
                <th>Book</th>
                <th>Author</th>
                <th>Date Published</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($conn, "SELECT * FROM `nilai` ORDER BY `nim` ASC") or die(mysqli_error());
                while($fetch = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $fetch['nim']?></td>
                <td><?php echo $fetch['english']?></td>
                <td><?php echo $fetch['web']?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
<?php
    }
?>