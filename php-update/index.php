<!DOCTYPE html>
<html>
    <head>
        <title>PHP Update Example</title>
    </head>
    <body>
        <?php 

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

        echo "<h1>Starborne Update Demo</h1>";
        //$arr should be array as you mentioned as below
        echo '<table><tr><thead><th>ID</th><th>Name</th><th>Cost</th><th>Actions</th></thead></tr>';

        foreach($entries as $row){
            echo "<tr>
                    <td>{$row->id}</td>
                    <td>{$row->name}</td>
                    <td>{$row->cost}</td>
                    <td><a href='update.php?id={$row->id}'>Update</a></td>
                </tr>";
        };
        
        echo '</table>';
        ?>

    </body>
</html>