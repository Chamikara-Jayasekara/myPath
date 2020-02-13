<?php
    include 'header.php';
?>
<link rel="stylesheet" href="db.css">
<h1>Search page</h1>

<div class="article-container" >
    <?php
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM crud WHERE name LIKE '%$search%' OR cname LIKE '%$search%'
                    OR catogary LIKE '%$search%' OR type LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." courses";
        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<a href='article.php?title=".$row['name']."&date=".$row['cname']."&adescription=".$row['description']."&aqualification=".$row['qualification']."&acontent=".$row['content']."&aduration=".$row['duration']."&acost=".$row['cost']."&apayment=".$row['payment']."&aphone=".$row['phone']."&aphoto=".$row['photo']."'>
                    <div class='article-box'>
                        <h3>".$row['name']."</h3>
                        <p>".$row['cname']."</p>
                        <p>".$row['catogary']."</p>
                        <p>".$row['type']."</p>
                    </div></a>";
            }
        } else{
            echo "There are no results matching your search!";
        }
    }
    ?>
</div>