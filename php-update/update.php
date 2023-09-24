<!DOCTYPE html>
<html>
    <head>
        <title>Starborne Update Example</title>
    </head>
    <body>
        <?php 

        // dummy data like you would have from backend
        $entries = array(
            (object) [
                'id' => '1',
                'name' => 'SBM Order #1',
                'cost' => '10000000'
            ],
            (object) [
                'id' => '2',
                'name' => 'SBM Order #2',
                'cost' => '15000000'
            ],
            (object) [
                'id' => '3',
                'name' => 'SBM Order #3',
                'cost' => '5000000'
            ],
            (object) [
                'id' => '4',
                'name' => 'SBM Order #4',
                'cost' => '7000000'
            ],
            (object) [
                'id' => '5',
                'name' => 'SBM Order #5',
                'cost' => '2000000'
            ]
        );

        //if the id exists, lets find it in the array and output the update form
        $id = "";
        if($_GET['id']) {
            $id = $_GET['id'];

            echo "<h1>Editing ID: {$id}</h1>";
            foreach($entries as $entry) {
                if ($entry->id == $id) {
                    echo "<p><input type='text' value='{$entry->name}'></input></p>";
                    echo "<p><input type='number' value='{$entry->cost}'></input></p>";
                };
            };


        };
        ?>



    </body>
</html>