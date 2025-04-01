<?php require('layout/header.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-short.php'); ?>

<?php
require('../backends/connection-pdo.php');

$sql = 'SELECT food.id, food.fname, food.description, food.image, food.price, categories.name 
        FROM food 
        LEFT JOIN categories 
        ON food.cat_id = categories.id';

$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="section white-text" style="background: #B35458;">

    <div class="section">
        <h3>Foods</h3>
    </div>

    <?php
    if (isset($_SESSION['msg'])) {
        echo '<div class="section center" style="margin: 5px 35px;">
                <div class="row" style="background: red; color: white;">
                    <div class="col s12">
                        <h6>' . $_SESSION['msg'] . '</h6>
                    </div>
                </div>
              </div>';
        unset($_SESSION['msg']);
    }
    ?>

    <div class="section right" style="padding: 15px 25px;">
        <a href="food-add.php" class="waves-effect waves-light btn">Add New</a>
    </div>

    <div class="section center" style="padding: 20px;">
        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($arr_all as $key) { ?>
                    <tr>
                        <td>
                            <img src="../../uploads/<?php echo htmlspecialchars($key['image']); ?>" 
                                 alt="Food Image" width="50" height="50" 
                                 style="border-radius: 5px;">
                        </td>
                        <td><?php echo htmlspecialchars($key['fname']); ?></td>
                        <td><?php echo htmlspecialchars($key['description']); ?></td>
                        <td><?php echo htmlspecialchars($key['name']); ?></td>
                        <td>XAF<?php echo number_format($key['price'], 2); ?> </td> <!-- Displays price -->
                        <td>
                            <a href="../backends/admin/food-delete.php?id=<?php echo $key['id']; ?>">
                                <span class="new badge" data-badge-caption="">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php require('layout/about-modal.php'); ?>
<?php require('layout/footer.php'); ?>
