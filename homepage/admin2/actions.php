<?php
    include 'config.php';
    $output='';
if(isset($_POST['query'])){
    $search=$_POST['query'];
    $stmt=$conn->prepare("SELECT * FROM crud WHERE name LIKE CONCAT('%',?,'%') OR cname LIKE CONCAT('%',?,'%') OR catogary LIKE CONCAT('%',?,'%') OR type LIKE CONCAT('%',?,'%')");
    $stmt->bind_param("ssss",$search,$search,$search,$search);
}
else{
    $stmt=$conn->prepare("Select * FROM crud");
}
$stmt->execute();
$result=$stmt->get_result();

if($result->num_rows>0){
    $output="  <thead>
                    <tr><th>Institute Image</th>
                        <th>Institute Name</th>
                        <th>Course Name</th>
                        <th>Course Catogary</th>
                        <th>Course Type</th>
                        <th>Course Description</th>
                        <th>payment Method</th>
                        <th>Minimum Qualification</th>
                        <th>Course Content</th>
                        <th>Duration</th>
                        <th>Cost</th>
                        <th>Contact Details</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>";
    while ($row=$result->fetch_assoc()){
        $output .="
                 <tr>
                        <td><img src=".$row['photo']." alt='' width='50px'></td>
                        <td>".$row['name']."</td>
                        <td >".$row['cname']."</td>
                        <td>".$row['catogary']."</td>
                        <td>.".$row['type']."</td>
                        <td >".$row['description']."</td>
                        <td>".$row['payment']."</td>
                        <td>".$row['qualification']."</td>
                        <td>".$row['content']."</td>
                        <td>".$row['duration']."</td>
                        <td>".$row['cost']."</td>
                        <td>".$row['phone']."</td>
                        <td >
                            <a href=\"details.php?details=".$row['id']." class=\"badge badge-primary p-2\">Details</a>
                            <a href=\"actionone.php?delete=".$row['id']." class=\"badge badge-info p-2\" onclick=\"return confirm('Do you want delete this record?');\">Delete</a>
                            <a href=\"courses.php?edit=".$row['id']." class=\"badge badge-success p-2\">Edit</a>
                        </td>
                    </tr>";
    }
    $output .="</tbody>";
    echo $output;
}
else{
    echo "<h3>No records found!</h3>";
}
?>
