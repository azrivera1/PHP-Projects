<?php require_once('../../../private/initialize.php'); ?>

<?php

$page_set = find_all_pages();

// This is a harcoded array and inside this array there are multiple associative arrays
// $pages = [ 
//     ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'Globe Bank'],
//     ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'History'],
//     ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Leadership'],
//     ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Contact Us'],
// ];

?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>


<div id="content">
  <div class="pages listing">
        <h1>Pages</h1>

    <div class='actions'>
        <a class="action" href="<?php echo url_for('/staff/pages/new.php'); ?>">Create New Page</a>
    </div>

    <table class="list">
     <tr>
        <th>ID</th>
        <th>Subject</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
     </tr>

     <?php while($page = mysqli_fetch_assoc($page_set)) { ?>
        <?php $subject = find_subject_by_id($page['subject_id']); ?>
        <tr>
        <td><?php echo h($page['id']); ?></td>
        <td><?php echo h($subject['menu_name']); ?></td>
        <td><?php echo h($page['position']); ?></td>
        <td><?php echo $page['visible'] == 1 ? 'true' : 'false' ?></td>
        <td><?php echo h($page['menu_name']); ?></td>
        <td> <a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
        <td><a class= "action" href="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($page['id']))); ?>">Edit</a></td>
        <td><a class="action" href="<?php echo url_for('/staff/pages/delete.php?id=' . h(u($page['id']))); ?>">Delete</a></td>
        </tr>
     <?php } ?>  
    </table>

     <?php mysqli_free_result($page_set); ?>
    
  </div>
</div>


<?php include(SHARED_PATH . '/staff_footer.php'); ?>