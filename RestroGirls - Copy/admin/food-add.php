<?php require('layout/header.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-short.php'); ?>

<?php
require('../backends/connection-pdo.php');

$sql = 'SELECT id, name FROM categories';
$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="section white-text" style="background: #B35458;">
    <div class="section">
        <h3>Add Food Item</h3>
    </div>

    <div class="section center" style="padding: 40px;">
        <form action="../backends/admin/food-add.php" method="post" enctype="multipart/form-data">
            <?php if (isset($_SESSION['msg'])) { ?>
                <div class="row" style="background: red; color: white;">
                    <div class="col s12">
                        <h6><?= $_SESSION['msg']; ?></h6>
                    </div>
                </div>
                <?php unset($_SESSION['msg']); ?>
            <?php } ?>

            <div class="row">
                <div class="col s6">
                    <div class="input-field">
                        <input id="name" name="name" type="text" class="validate" required style="color: white; width: 70%">
                        <label for="name" style="color: white;"><b>Food Name :</b></label>
                    </div>
                </div>
                <div class="col s6">
                    <div class="input-field" style="color: white !important; width: 90%">
                        <select name="category" required>
                            <?php foreach ($arr_all as $key) { ?>
                                <option value="<?= $key['id']; ?>"><?= $key['name']; ?></option>
                            <?php } ?>
                        </select>
                        <label style="color: white;">Categories</label>
                    </div>
                </div>
            </div>

            <!-- New Price Input Field -->
            <div class="row">
                <div class="col s6">
                    <div class="input-field">
                        <input id="price" name="price" type="number" step="0.01" class="validate" required style="color: white; width: 70%">
                        <label for="price" style="color: white;"><b>Price :</b></label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="input-field">
                        <input id="desc" name="desc" type="text" class="validate" required style="color: white; width: 70%">
                        <label for="desc" style="color: white;"><b>Description :</b></label>
                    </div>
                </div>
            </div>

            <!-- 📌 Fixed: Image Upload Field (Changed `name="food_image"` to `name="image"`) -->
            <div class="row">
                <div class="col s12">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Upload Image</span>
                            <input type="file" name="image" accept="image/*" required>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Choose an image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="section right" style="padding: 15px 10px;">
                        <a href="food-list.php" class="waves-effect waves-light btn">Dismiss</a>
                    </div>
                    <div class="section right" style="padding: 15px 20px;">
                        <button type="submit" class="waves-effect waves-light btn">Add New</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require('layout/about-modal.php'); ?>
<?php require('layout/footer.php'); ?>
