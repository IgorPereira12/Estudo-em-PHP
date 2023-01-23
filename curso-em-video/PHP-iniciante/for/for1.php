<form method="get" action="for2.php">
    <select name="n">
        <?php
            for ($c=1; $c<=10; $c++) {
                echo "<option>$c<option>";
            }
        ?>
    </select>
    <input type="submit" value="Tabuada">
</form>



