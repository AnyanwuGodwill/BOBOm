<?php
require('backends/connection-pdo.php');

// Secure SQL query with prepared statement
if (isset($_REQUEST['id'])) {
    $sql = 'SELECT * FROM food WHERE cat_id = :id ORDER BY fname ASC';
    $query = $pdoconn->prepare($sql);
    $query->execute(['id' => $_REQUEST['id']]);
} else {
    $sql = 'SELECT * FROM food ORDER BY fname ASC';
    $query = $pdoconn->prepare($sql);
    $query->execute();
}

$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="fcategories" style="background: #f5f5f5; padding: 40px 0;">

    <div class="container">

        <?php if (isset($_SESSION['msg'])) : ?>
            <div class="alert-card <?php echo strpos($_SESSION['msg'], 'Success') !== false ? 'success' : 'error'; ?>">
                <p><?php echo htmlspecialchars($_SESSION['msg']); ?></p>
            </div>
            <?php unset($_SESSION['msg']); ?>
        <?php endif; ?>

        <div class="section center" style="margin-bottom: 40px;">
            <h3 class="header" style="font-size: 2.5rem; color: #333; font-weight: 700;">Our Delicious Menu</h3>
            <p class="subheader" style="color: #666; font-size: 1.2rem;">Choose from our selection of tasty dishes</p>
        </div>

        <?php if (count($arr_all) == 0) : ?>
            <div class="empty-state">
                <i class="material-icons large" style="color: #999;">fastfood</i>
                <h4>No Food Items Available</h4>
                <p>We're currently updating our menu. Please check back later!</p>
            </div>
        <?php else : ?>

            <div class="food-grid">
                <?php foreach ($arr_all as $item) : ?>
                    <div class="food-card">
                        <div class="food-image">
                            <?php
                            $imagePath = 'uploads/' . htmlspecialchars($item['image']);
                            $defaultImage = 'images/default-food.jpg'; // Fallback image
                            ?>
                            <img src="<?php echo file_exists($imagePath) ? $imagePath : $defaultImage; ?>" 
                                 alt="<?php echo htmlspecialchars($item['fname']); ?>" 
                                 onerror="this.src='<?php echo $defaultImage; ?>'">
                            <div class="price-tag">
                                XAF <?php echo number_format($item['price'], 2); ?>
                            </div>
                        </div>
                        <div class="food-content">
                            <h4><?php echo htmlspecialchars($item['fname']); ?></h4>
                            <p class="food-desc"><?php echo htmlspecialchars($item['description']); ?></p>
                            <div class="food-actions">
                                <a href="#details-<?php echo $item['id']; ?>" class="btn-flat details-btn modal-trigger">
                                    <i class="material-icons left">info</i>Details
                                </a>
                                <a href="backends/order-food.php?id=<?php echo $item['id']; ?>" 
                                   class="btn order-btn waves-effect waves-light">
                                    <i class="material-icons left">shopping_cart</i>Order Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Structure -->
                    <div id="details-<?php echo $item['id']; ?>" class="modal food-modal">
                        <div class="modal-content">
                            <h4><?php echo htmlspecialchars($item['fname']); ?></h4>
                            <div class="row">
                                <div class="col s12 m6">
                                    <img src="<?php echo file_exists($imagePath) ? $imagePath : $defaultImage; ?>" 
                                         class="responsive-img" 
                                         alt="<?php echo htmlspecialchars($item['fname']); ?>">
                                </div>
                                <div class="col s12 m6">
                                    <p><strong>Description:</strong></p>
                                    <p><?php echo htmlspecialchars($item['description']); ?></p>
                                    <p><strong>Price:</strong> XAF <?php echo number_format($item['price'], 2); ?></p>
                                    <div class="modal-footer">
                                        <a href="backends/order-food.php?id=<?php echo $item['id']; ?>" 
                                           class="btn order-btn waves-effect waves-light">
                                            <i class="material-icons left">shopping_cart</i>Order Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>

    </div>

</section>

<style>
    /* Custom Styles */
    .alert-card {
        padding: 15px;
        border-radius: 4px;
        margin: 20px 0;
        color: white;
        text-align: center;
    }
    .alert-card.success {
        background-color: #4CAF50;
    }
    .alert-card.error {
        background-color: #F44336;
    }
    .empty-state {
        text-align: center;
        padding: 40px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .food-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
    }
    .food-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    .food-card:hover {
        transform: translateY(-5px);
    }
    .food-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }
    .food-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .food-card:hover .food-image img {
        transform: scale(1.05);
    }
    .price-tag {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(238, 110, 115, 0.9);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: bold;
    }
    .food-content {
        padding: 20px;
    }
    .food-content h4 {
        margin: 0 0 10px;
        color: #333;
        font-size: 1.4rem;
    }
    .food-desc {
        color: #666;
        margin-bottom: 20px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .food-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .details-btn {
        color: #ee6e73;
    }
    .order-btn {
        background: #ee6e73 !important;
    }
    .food-modal {
        max-width: 800px;
        width: 90%;
        border-radius: 8px;
    }
    @media (max-width: 600px) {
        .food-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    // Initialize modals
    document.addEventListener('DOMContentLoaded', function() {
        var modals = document.querySelectorAll('.modal');
        M.Modal.init(modals);
    });
</script>