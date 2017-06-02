<?php 
// default title
$title = 'Catalog';
// check if we have category set
if(isset($_GET["cat"])){
    if($_GET["cat"] == "books") {
        $title = 'Books';
    } elseif ($_GET["cat"] == "movies") {
        $title = 'Movies';
    } elseif ($_GET["cat"] == "music") {
        $title = 'Music';
    } 
}
// get header
include("inc/header.php"); 
?>
<div class="section page">
    <h1><?php echo $title; ?> page</h1>
</div>
<!--get footer-->
<?php include("inc/footer.php"); ?>