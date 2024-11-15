    <?php
    require_once("Components/layout.php")
    ?>
    <body>
       <?php
            require_once("Components/header.php")
         ?>
        <section class="banner">
            <h2 class="bannerTitle">Incidents</h2>
        </section>
        <main>
        <table class="table">
            <thead>
                <tr>
                    <th>Date / Time</th>
                    <th>Room</th>
                    <th>Issues</th>
                    <th>Id</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($data["call"] as $call) {
                        echo "
                            <tr>
                                <td>{$call->getDateTime()}</td>
                                <td>{$call->getRoom()}</td>
                                <td>{$call->getIssue()}</td>
                                <td>{$call->getId()}</td>
                                <td>
                                    <a href='?action=delete&id={$call->getId()}'>❌</a>
                                </td>
                                <td>
                                    <a href='?action=edit&id={$call->getId()}'>✏️</a>
                                </td>
                            </tr>";
                    }    
                ?>
            </tbody>
        </table>

        <div>
            <a href="?action=create">
                <button type="button" class="btn btn-success">Add problem</button>
            </a>
        </div>


       </main>
       <?php
            require_once("Components/footer.php")
        ?>
    </body>