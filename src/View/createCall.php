<?php
    require_once("Components/layout.php");
?>
<body>
    <?php
        require_once("Components/header.php");
    ?>
    <section class="banner">
        <h2 class="bannerTitle">Incident Form</h2>
    </section>
    <div class="create row justify-content-center">
        <main class="card" style="width: 80%; height: 27rem; justify-content: center;">
            <h3 class="text-center" style="margin-bottom: 3rem; margin-top: 1rem;">New Call</h3>
            <a href="./index.php">
                <button type="button" id="button-cancel" class="btn btn-outline-danger button-cancel">Cancel</button>
            </a>
            <form class="justify-content-center" action="?action=store" method="post">
                <div class="input-group" style="margin-bottom: 2rem; width: 90%; margin-left: 5%">
                    <span class="input-group-text">room</span>
                    <input type="text" name="room" required placeholder="Write here the room">
                </div>
                <div class="input-group" style="margin-bottom: 2rem; width: 90%; margin-left: 5%">
                    <span class="input-group-text">Description</span>
                    <textarea class="form-control" area-label="Width textarea" type="text" name="issue" required placeholder="Issue description"></textarea>
                </div>
                <div class="input-group" style="margin-bottom: 2rem; width: 90%; margin-left: 5%">
                    <span class="input-group-text">Date</span>
                    <input type="date" name="dateTime" required>
                </div>
                <div class="botones" style="margin-bottom: 2rem;">
                    <input type="submit" value="Create" class="btn-lg btn-outline-success go-add-task float">
                    <input type="reset" value="Reset" class="btn-lg btn-outline-warning go-add-task float">
                </div>
            </form>
        </main>
    </div>
    <?php
        require_once("Components/footer.php");
    ?>
</body>