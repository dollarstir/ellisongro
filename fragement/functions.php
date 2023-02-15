<?php

function addgold($depositer, $dob, $nation, $nationality, $gender, $occupation, $address, $next_kin, $item, $weight, $purity, $carat, $charge, $date_added)
{
    if (empty(trim($item))) {
        echo 'please enter a item name';
    } else {
        $willbillnumber = rand(1111111111, 9999999999);
        $record = [
            'depositer' => $depositer,
            'dob' => $dob,
            'nation' => $nation,
            'nationality' => $nationality,
            'gender' => $gender,
            'occupation' => $occupation,
            'address' => $address,
            'next_kin' => $next_kin,
            'item' => $item,
            'weight' => $weight,
            'purity' => $purity,
            'carat' => $carat,
            'charge' => $charge,
            'date_added' => $date_added,
            'vaultnumber' => $willbillnumber, ];

        if (insert('gold', $record) == 'success') {
            echo 'success';
        } else {
            echo 'Failed to add gold';
        }
    }
}

function showgold()
{
    $dd = fetchall('gold');
    foreach ($dd as $row) {
        echo '<tr>
        <th scope="row"> <a href="#" class="question_content"> '.$row['vaultnumber'].'</a>
        </th>
        <td>'.$row['item'].'</td>
        <td>'.$row['carat'].'</td>
        <td>'.$row['weight'].'</td>
        <td>'.$row['purity'].'</td>
        <td>'.$row['charge'].'</td>
        <td>'.$row['date_added'].'</td>
        <td>'.$row['depositer'].'</td>
        <td><a href="editgold?id='.$row['gold_id'].'" class="status_btn">Edit</a><button class="btn btn-danger btn-sm deleteg" id="'.$row['gold_id'].'">Delete</button></td>
    </tr>';
    }
}

// gold details
// gold details
function gdetail($id, $data)
{
    $dd = customfetch('gold', [['gold_id', '=', $id]]);
    echo $dd[0][$data];
}

// edit gold function

function editgold($gold_id, $depositer, $dob, $nation, $nationality, $gender, $occupation, $address, $next_kin, $item, $weight, $purity, $carat, $charge, $date_added)
{
    if (empty(trim($item))) {
        echo 'please enter a item name';
    } else {
        $record = [
            'depositer' => $depositer,
            'dob' => $dob,
            'nation' => $nation,
            'nationality' => $nationality,
            'gender' => $gender,
            'occupation' => $occupation,
            'address' => $address,
            'next_kin' => $next_kin,
            'item' => $item,
            'weight' => $weight,
            'purity' => $purity,
            'carat' => $carat,
            'charge' => $charge,
            'date_added' => $date_added,
             ];

        if (update('gold', $record, ['gold_id' => $gold_id]) == 'success') {
            echo 'Updated Successfully';
        } else {
            echo 'Failed to edit gold';
        }
    }
}

function deletegold($gold_id)
{
    if (delete('gold', [['gold_id', '=', $gold_id]]) == 'success') {
        echo 'Deleted Successfully';
    } else {
        echo 'Failed to delete gold';
    }
}
