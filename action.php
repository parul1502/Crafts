<?php
include "db1.php";

if(isset($_POST["category"]))
{
$category_query="SELECT * FROM categories";
$run_query=mysqli_query($con,$category_query);
echo"
<li class='has-children'>
						<a  title=''>Categories</a>
</li>

"
if(mysqli_num_rows($run_query)>0)
{
while($row=mysqli_fetch_array($run_query))
{
           $cid=$row["cat_id"];
           $cat_name=$row["cat_title"];   
           echo"
             <li><a href='je.html'>$cat_name</a></li>                   

";
}
echo"</div>";
}
}

if(isset($_POST["getProduct"]))
{
$product_query="SELECT * FROM products ORDER BY ";
$run_query=mysqli_query($con,$category_query);


?>