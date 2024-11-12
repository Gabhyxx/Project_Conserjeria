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
                                <td>{$call->DateTime()}</td>
                                <td>{$call->Room()}</td>
                                <td>{$call->issue()}</td>
                                <td>{$call->Id()}</td>
                
                
                            </tr>";


                }    
            ?>
        </tbody>
</table>
       </main>
       <?php
            require_once("Components/footer.php")
        ?>
    </body>