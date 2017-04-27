<?php include '../view/header.php'; ?>
<?php
require_once('../model/database.php');

// Get all categories
$query = 'SELECT * FROM categories_guitar1
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <!-- add category rows here -->
        <?php foreach($categories as $category): ?>
    <tr>
            <td> <?php echo $category['categoryName'];?></td>
        <td>
               <form action='delete_category.php' method = 'post'>
               <input type='hidden' name="category_id"
                  value="<?php echo $category['category_id'];?>"/>
               <input type='submit' value='delete'/>
           </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <!-- add code for form here -->
    <form action = 'add_category.php' method = 'post'>
         <input type = 'text' name = 'name' >
     <input type = 'submit' value = 'add new category' >
       </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>