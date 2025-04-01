<?php require('layout/header.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-short.php'); ?>

<?php
if (isset($_SESSION['msg'])) {
    echo '<div class="section white-text center" style="background: #B35458; padding: 15px; border-radius: 8px; margin: 20px 20px 0 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <i class="material-icons" style="vertical-align: middle;">info</i> '.$_SESSION['msg'].'
          </div>';
    unset($_SESSION['msg']);
}
?>

<div class="section" style="padding: 20px; margin: 20px; border-radius: 10px; background: #fff; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">

    <h4 class="center-align" style="color: #B35458; font-weight: 500; margin-bottom: 40px; padding-bottom: 15px; border-bottom: 1px solid #f0f0f0;">Admin Dashboard</h4>
    
    <div class="row" style="margin-bottom: 0;">
        <div class="col s12 m4">
            <a href="food-list.php" class="dashboard-card waves-effect">
                <div class="card-panel hoverable" style="border-radius: 12px; background: linear-gradient(135deg, #B35458 0%, #E67A7F 100%); height: 200px; position: relative; overflow: hidden;">
                    <i class="material-icons large white-text" style="position: absolute; right: 20px; bottom: 20px; opacity: 0.2;">fastfood</i>
                    <div style="position: relative; z-index: 1;">
                        <span class="white-text" style="font-size: 24px; font-weight: 500; display: block; margin-bottom: 10px;">Foods</span>
                        <span class="white-text" style="opacity: 0.9;">Manage menu items</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col s12 m4">
            <a href="category-list.php" class="dashboard-card waves-effect">
                <div class="card-panel hoverable" style="border-radius: 12px; background: linear-gradient(135deg, #6a1b1f 0%, #B35458 100%); height: 200px; position: relative; overflow: hidden;">
                    <i class="material-icons large white-text" style="position: absolute; right: 20px; bottom: 20px; opacity: 0.2;">category</i>
                    <div style="position: relative; z-index: 1;">
                        <span class="white-text" style="font-size: 24px; font-weight: 500; display: block; margin-bottom: 10px;">Categories</span>
                        <span class="white-text" style="opacity: 0.9;">Organize food groups</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col s12 m4">
            <a href="order-list.php" class="dashboard-card waves-effect">
                <div class="card-panel hoverable" style="border-radius: 12px; background: linear-gradient(135deg, #4a1013 0%, #8a3a3d 100%); height: 200px; position: relative; overflow: hidden;">
                    <i class="material-icons large white-text" style="position: absolute; right: 20px; bottom: 20px; opacity: 0.2;">receipt</i>
                    <div style="position: relative; z-index: 1;">
                        <span class="white-text" style="font-size: 24px; font-weight: 500; display: block; margin-bottom: 10px;">Orders</span>
                        <span class="white-text" style="opacity: 0.9;">View customer orders</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Additional Stats Section -->
    <!-- <div class="row" style="margin-top: 30px;">
        <div class="col s12">
            <div class="card-panel hoverable" style="border-radius: 10px; padding: 20px; background: #f9f9f9;">
                <h5 style="color: #B35458; font-weight: 500; margin-bottom: 20px;">Quick Stats</h5>
                <div class="row" style="margin-bottom: 0;">
                    <div class="col s12 m4 center-align">
                        <div style="padding: 15px; border-right: 1px solid #eee;">
                            <span style="font-size: 36px; color: #B35458; font-weight: 500;">24</span>
                            <p style="color: #666;">Active Orders</p>
                        </div>
                    </div>
                    <div class="col s12 m4 center-align">
                        <div style="padding: 15px; border-right: 1px solid #eee;">
                            <span style="font-size: 36px; color: #B35458; font-weight: 500;">56</span>
                            <p style="color: #666;">Menu Items</p>
                        </div>
                    </div>
                    <div class="col s12 m4 center-align">
                        <div style="padding: 15px;">
                            <span style="font-size: 36px; color: #B35458; font-weight: 500;">8</span>
                            <p style="color: #666;">Categories</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</div>

<?php require('layout/about-modal.php'); ?>
<?php require('layout/footer.php'); ?>

<style>
    .dashboard-card {
        display: block;
        transition: transform 0.3s ease;
    }
    .dashboard-card:hover {
        transform: translateY(-5px);
        text-decoration: none;
    }
    .card-panel.hoverable {
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }
    .card-panel.hoverable:hover {
        box-shadow: 0 8px 24px rgba(0,0,0,0.12);
    }
</style>