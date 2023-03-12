<?php
define('DATA_BASE', 'D:\xampp\htdocs\laravel\crud\data\db.txt');
function seed($filename)
{
    $data = array(
        array(
            'id' => 1,
            'fname' => 'Jamal',
            'lname' => 'Ahmed',
            'roll' => '1'
        ),
        array(
            'id' => 2,
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll' => '2'
        ),
        array(
            'id' => 3,
            'fname' => 'Samal',
            'lname' => 'Ahmed',
            'roll' => '3'
        ),
        array(
            'id' => 4,
            'fname' => 'Tanvir',
            'lname' => 'Ahmed',
            'roll' => '4'
        ),
        array(
            'id' => 5,
            'fname' => 'Maruf',
            'lname' => 'Hossain',
            'roll' => '5'
        ),
        array(
            'id' => 6,
            'fname' => 'Shawon',
            'lname' => 'Gonder',
            'roll' => '6'
        )
    );

    $serializedData = serialize($data);
    file_put_contents(DATA_BASE, $serializedData, LOCK_EX);
}

function generateReport()
{
    $serializedData = file_get_contents(DATA_BASE);
    $students = unserialize($serializedData);


?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Action</th>
        </tr>
        <tbody>
            <?php
            foreach ($students as $student) {
            ?>
                <tr>
                    <td><?php printf("%s %s", $student['fname'], $student['lname']); ?></td>
                    <td><?php printf("%s", $student['roll']); ?></td>
                    <td><?php printf("<a href='/crud/index.php?task=edit&id=%s'>Edit</a> | <a href='/crud/index.php?task=delete&id=%s'>Delete</a>", $student['id'], $student['id']); ?></td>
                </tr>

            <?php  } ?>
        </tbody>
    </table>
<?php

}


function addStudent($fname, $lname, $roll)
{
    $found = false;
    $serializedData = file_get_contents(DATA_BASE);
    $students = unserialize($serializedData);
    foreach ($students as $_student) {
        if ($_student['roll'] == $roll) {

            $found = true;
            break;
        }
    }
    if (!$found) {

        $newID = count($students) + 1;
        $student = array(
            'id' => $newID,
            'fname' => $fname,
            'lname' => $lname,
            'roll' => $roll
        );

        array_push($students, $student);
        $serializedData = serialize($students);
        file_put_contents(DATA_BASE, $serializedData, LOCK_EX);

        return true;
    }
    return false;
}
?>