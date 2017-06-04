<?php 
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Personal Media Library";
$section = null;

include("inc/header.php"); 

$host = 'localhost';  // сервер
$base = 'mydatabase';  // имя базы данных
$user = 'root';  // пользователь
$pass = 'root';  // пароль 
//  db connetcion
try {
    $db = new PDO("mysql:host=$host;dbname=$base", $user, $pass);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    exit;
}
echo "Connected to DB <br>";

// get query
try{
    $query_result = $db->query("SELECT surname, patronymic FROM users");
} catch(Exception $e){
    echo "We have error here ", $e->getMessage();
}

$users = $query_result->fetchAll(PDO::FETCH_ASSOC);


foreach ($users as $key)
{
    echo  "---- <br>";
    foreach ($key as $id => $value)
    {
        echo $id . ":" . $value . "<br>";
    }
    echo  "---- <br>";
}

?>
		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

        <ul class="items">
            <?php
            $random = array_rand($catalog,4);
            foreach ($random as $id) {
                echo get_item_html($id,$catalog[$id]);
            }
            ?>							
				</ul>

			</div>

		</div>

<?php include("inc/footer.php"); ?>