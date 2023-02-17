<?php
/**
    * Custom Pagination Function
    * Author: oretnom23
    * Published @ sourcecodester.com
    */
function paginate($tbl="", $order = [] , $limit= 10, $current_page = 1){
    // Set Database Connection to Global
    global $conn;
 
    // Total Data of the table
    $total = $conn->query("SELECT * FROM `{$tbl}`")->num_rows;
 
 
    // Query Offset
    $offset = ($current_page == 1) ? 0 : ($limit * $current_page) - $limit;
 
    /**
        * Query Order Clause
        */
    $order_by = "";
    foreach($order as $k=> $v){
        if(!empty($order_by)) $order_by .= ", ";
        if(empty($order_by)) $order_by .= " order by ";
        $order_by .= " {$k} {$v} ";
    }
 
    // Query Statement
    $sql = "SELECT * FROM `{$tbl}` {$order_by} LIMIT {$limit} OFFSET {$offset}";
    // Query Execution
    $query = $conn->query($sql);
 
    // Queried data array variable
    $data = [];
    if($query->num_rows){
        // Queried data Result
        $data = $query->fetch_all(MYSQLI_ASSOC);
    }
 
    //Display Data i.e 1-10
    $displayed_data = ($offset + 1) . "-". ($offset + $query->num_rows);
 
    //Check if next pagination button should be available
    $has_next = (bool) (($offset + $query->num_rows) < $total);
    //Check if previous pagination button should be available
    $has_prev = (bool) ($current_page > 1);
 
    // Total number or Pagination Buttons
    $pages = ceil($total / $limit);
    // pagination buttons
    $pb = range(1,$pages);
    // limit paganation buttons if it is greater than 5 items
    if($pages > 5){
        if($current_page >= 1 && $current_page <= 3){
            // if Active page is between 1-3
            $new_pb = range(1, 3);
            $new_pb[] = '...';
            $new_pb[] = $pb[array_key_last($pb)];
        }elseif($current_page >= 4 && $current_page < $pb[array_key_last($pb)]){
            // if Active page is between 4-last page number
            $new_pb = range(1, 2);
            $new_pb[] = '...';
            $new_pb[] = $current_page;
            if(($current_page +1) != $pb[array_key_last($pb)]){
                $new_pb[] = '...';
            }
            $new_pb[] = $pb[array_key_last($pb)];
        }else{
            // if Active page is the last page
            $new_pb = range(1, 3);
            $new_pb[] = '...';
            $new_pb[] = $pb[array_key_last($pb)];
        }
    }
 
    // Replace the pagination button with new items if exists
    if(isset($new_pb))
    $pb = $new_pb;
 
    //return pagination object data
    return (object) [
        'data' => $data,
        'current_page' => $current_page,
        'displayed_data' => $displayed_data,
        'total' => $total,
        'has_prev' => $has_prev,
        'has_next' => $has_next,
        'pagination_buttons' => $pb
    ];
}
?>