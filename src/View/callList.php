    <?php
    require_once("Components/layout.php")
    ?>
    <body>
       <?php
            require_once("Components/header.php")
         ?>
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
                                    <td>{$call->dateTime}</td>
                                    <td>{$call->room}</td>
                                    <td>{$call->issue}</td>
                                    <td>{$call->id}</td>
                                    <td>
                                     <a href='?action=delete&id={$call->id}'>❌</a></td>
                    
                    
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