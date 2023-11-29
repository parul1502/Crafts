$(document).ready(function()
{
cat();
function cat(){
$.ajax({
url:" action.php",
method : "POST",
data : {category:2},
success: function(data){
$("#get_category").html(data);
{
}
})
})
