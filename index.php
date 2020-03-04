<?php  
require_once 'function/bdd.php';
include_once 'function/colors.php';
$bdd = bdd();
$u = red();
$v = blue();
$w = yellow();
$x = green();
$y = purple();
$z = orange();
include_once 'layouts/header.php';
?>

    <main id="home">
        <section id="legend">
            <p> Hello I am doing a very important survey. 
                I would like to know what is your favorite color 
                You will be able to see the results of the survey right after</p>
        </section>
        <section id="colors">
            <form id="form" action="#" method="post">
                <label for="color">Choose a color:</label>

                <select id="color" name="color">
                    <option value="">--Please choose an color--</option>
                    <option class="red" value="Red">Red</option>
                    <option class="blue" value="Blue">Blue</option>
                    <option class="yellow" value="Yellow">Yellow</option>
                    <option class="green" value="Green">Green</option>
                    <option class="purple" value="Purple">Purple</option>
                    <option class="orange" value="Orange">Orange</option>
                </select>
                <input type="submit" name="submit" value="read">
            </form>
            <?php 
            if(isset($_POST['submit'])) {
                // I create variables for comparison
                $red = 'Red';
                $blue = 'Blue';
                $yellow = 'Yellow';
                $green = 'Green';
                $purple = 'Purple';
                $orange = 'Orange';
                // I get the selected value
                $selectedVal = $_POST['color'];
                echo "You have selected :" .$selectedVal;
                // I compare the present values ​​to find the one that was selected to increment it
                if($selectedVal === $red) {
                    // I return the new value to my database
                    $u = $bdd->query("UPDATE colors SET number = number + 1 WHERE id = 1");
                    header('Location: chart.php');

                } else if ($selectedVal === $blue) {
                    $v = $bdd->query("UPDATE colors SET number = number + 1 WHERE id = 2");
                    header('Location: chart.php');

                } else if ($selectedVal === $yellow) {
                    $w = $bdd->query("UPDATE colors SET number = number + 1 WHERE id = 3");
                    header('Location: chart.php');

                } else if ($selectedVal === $green) {
                    $x = $bdd->query("UPDATE colors SET number = number + 1 WHERE id = 4");
                    header('Location: chart.php');

                } else if ($selectedVal === $purple) {
                    $y = $bdd->query("UPDATE colors SET number = number + 1 WHERE id = 5");
                    header('Location: chart.php');

                } else if ($selectedVal === $orange) {
                    $z = $bdd->query("UPDATE colors SET number = number + 1 WHERE id = 6");
                    header('Location: chart.php');

                }
            }
            ?>

        </section>
    </main>
<?php include_once 'layouts/footer.php' ?>