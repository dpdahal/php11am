<?php
//
//$users = array('ram', 'sita', 'gita');
//
//echo $users[1];
//print_r($users);

//echo $users;


//$users = ['ram', 'sita', 'gita', 'hari', 'madan','sophia'];
//for ($x = 0; $x < count($users); $x++) {
//    echo $users[$x];
//}


//$users = [
//    ['ram', 'sita', 'gita', 'hari', 'madan', 'sophia'],
//    ['rama', 'kalpan', 'laxmi', 'rahul', 'gopal', 'bimila'],
//    ['mahes', 'a', 'd', 'f', 'h', 'i']
//];
//
//for ($i=0;$i<count($users);$i++){
//    for ($x=0;$x<count($users[$i]);$x++){
//        echo $users[$i][$x];
//    }
//}

//echo $users[1][0];

//echo "<pre>";
//print_r($users);


//$users = ['name' => 'ram', 'age' => 44, 'phone' => 9879];

//echo $users['name'];

//foreach ($users as $key=>$user){
//    echo $key;
////    echo "<br>";
////    echo $user;
//}

//echo "<pre>";
//print_r($users);


$users = [
    ['name' => 'ram', 'age' => 10, 'phone' => 9879,'status'=>1],
    ['name' => 'sita', 'age' => 24, 'phone' => 9879,'status'=>0],
    ['name' => 'gita', 'age' => 23, 'phone' => 9879,'status'=>1],
    ['name' => 'hari', 'age' => 45, 'phone' => 9879,'status'=>1],
    ['name' => 'sophia', 'age' => 23, 'phone' => 9879,'status'=>0],
];

//foreach ($users as $user){
//    echo $user['name'];
//}

?>

<blockquote>
    <table width="100%" border="1">
        <tr>
            <th>S.n</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Status</th>
        </tr>
        <?php foreach ($users as $key=>$user)  : ?>
        <tr>
            <td><?=++$key?></td>
            <td><?=$user['name']?></td>
            <td><?=$user['name']?></td>
            <td><?=$user['phone']?></td>
            <td>
                <?php if($user['status']==1): ?>
                <button>Active</button>
                <?php else:?>
                <button>Inactive</button>
                <?php endif;?>
            </td>
        </tr>
        <?php endforeach;?>
    </table>

</blockquote>

