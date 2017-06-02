<?php 
// get data
include("inc/data.php"); 
// default title
$title = 'Catalog';
$section = null;
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
        <ul class="items">

            <?php foreach ($catalog as $item) : ?>

                <li>
                    <a href="#">
                        <img 
                            src="<?php echo $item['img']; ?> " 
                            alt="<?php echo $item['title']; ?>"
                        >
                        <p>View info</p>
                    </a>
                </li>

            <?php endforeach; ?>

        </ul>
    </div>
</div>
<!--get footer-->
<?php include("inc/footer.php"); ?>