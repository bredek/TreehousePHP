<?php 
// default title
$title = 'Catalog';
$section = null;
// array of books
$catalog = [
    "Design patterns",
    "Forest Gump",
    "Beethoven"
];
// check if we have category set
if(isset($_GET["cat"])){
    if($_GET["cat"] == "books") {
        $title = 'Books';
        $section = 'Books';
    } elseif ($_GET["cat"] == "movies") {
        $title = 'Movies';
        $section = 'Movies';
    } elseif ($_GET["cat"] == "music") {
        $title = 'Music';
        $section = 'Music';
    } 
}
// get header
include("inc/header.php"); 
?>
<div class="section page catalog">
    <div class="wrapper">
        <h1><?php echo $title; ?> page</h1>
        <ul>

            <?php foreach ($catalog as $value) : ?>

                <li> <?php echo $value; ?> </li>
                
            <?php endforeach; ?>

        </ul>
    </div>
</div>
<!--get footer-->
<?php include("inc/footer.php"); ?>