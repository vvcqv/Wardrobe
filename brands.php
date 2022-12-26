<?php include "header.php" ?>
<div class="content">
    <div class="brands__row">
        <div class="brands__first">A</div>
        <div class="brands__list">
            <?php
            include("assets/php/connection.php");
            $result = mysqli_query($link, "SELECT * FROM `brands` WHERE `name` LIKE 'A%'");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo ('
                        <a href="all.php?brand=' . $row['name'] . '">' . $row['name'] . '</a><br>
                        ');
            ?>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="brands__row">
        <div class="brands__first">B</div>
        <div class="brands__list">
            <?php
            include("assets/php/connection.php");
            $result = mysqli_query($link, "SELECT * FROM `brands` WHERE `name` LIKE 'B%'");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo ('
                        <a href="all.php?brand=' . $row['name'] . '">' . $row['name'] . '</a><br>
                        ');
                }
            }
            ?>
        </div>
    </div>
    <div class="brands__row">
        <div class="brands__first">C</div>
        <div class="brands__list">
            <?php
            include("assets/php/connection.php");
            $result = mysqli_query($link, "SELECT * FROM `brands` WHERE `name` LIKE 'C%'");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo ('
                        <a href="all.php?brand=' . $row['name'] . '">' . $row['name'] . '</a><br>
                        ');
                }
            }
            ?>
        </div>
    </div>
    
    <div class="brands__row">
        <div class="brands__first">N</div>
        <div class="brands__list">
            <?php
            include("assets/php/connection.php");
            $result = mysqli_query($link, "SELECT * FROM `brands` WHERE `name` LIKE 'N%'");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo ('
                        <a href="all.php?brand=' . $row['name'] . '">' . $row['name'] . '</a><br>
                        ');
                }
            }
            ?>
        </div>
    </div>

    <div class="brands__row">
        <div class="brands__first">S</div>
        <div class="brands__list">
            <?php
            include("assets/php/connection.php");
            $result = mysqli_query($link, "SELECT * FROM `brands` WHERE `name` LIKE 'S%'");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo ('
                        <a href="all.php?brand=' . $row['name'] . '">' . $row['name'] . '</a><br>
                        ');
                }
            }
            ?>
        </div>
    </div>
    <div class="brands__row">
        <div class="brands__first">V</div>
        <div class="brands__list">
            <?php
            include("assets/php/connection.php");
            $result = mysqli_query($link, "SELECT * FROM `brands` WHERE `name` LIKE 'V%'");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo ('
                        <a href="all.php?brand=' . $row['name'] . '">' . $row['name'] . '</a><br>
                        ');
                }
            }
            ?>
        </div>
    </div>
    <div class="brands__row">
        <div class="brands__first">W</div>
        <div class="brands__list">
            <?php
            include("assets/php/connection.php");
            $result = mysqli_query($link, "SELECT * FROM `brands` WHERE `name` LIKE 'W%'");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo ('
                        <a href="all.php?brand=' . $row['name'] . '">' . $row['name'] . '</a><br>
                        ');
                }
            }
            ?>
        </div>
    </div>


</div>
<?php include "footer.php" ?>
</body>

</html>