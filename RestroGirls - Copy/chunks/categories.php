<?php
require('backends/connection-pdo.php');

$sql = 'SELECT * FROM categories ORDER BY name ASC';
$query = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="categories-section" style="background: #f8f9fa; padding: 60px 0;">
    <div class="container">
        <div class="section center" style="margin-bottom: 50px;">
            <h2 class="header" style="font-size: 2.8rem; color: #333; font-weight: 700; margin-bottom: 15px;">Our Food Categories</h2>
            <p class="subheader" style="color: #666; font-size: 1.2rem; max-width: 700px; margin: 0 auto;">
                Explore our diverse selection of culinary categories
            </p>
        </div>

        <?php if (empty($arr_all)): ?>
            <div class="empty-state center" style="background: white; padding: 40px; border-radius: 8px; box-shadow: 0 2px 15px rgba(0,0,0,0.05);">
                <i class="material-icons large" style="color: #999; font-size: 4rem;">category</i>
                <h4 style="color: #555; margin: 20px 0 10px;">No Categories Available</h4>
                <p style="color: #777; max-width: 500px; margin: 0 auto;">
                    We're currently updating our categories. Please check back later!
                </p>
            </div>
        <?php else: ?>
            <div class="categories-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px;">
                <?php foreach ($arr_all as $category): ?>
                    <div class="category-card" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08); transition: all 0.3s ease;">
                        <div class="category-image" style="height: 200px; overflow: hidden; position: relative;">
                            <img src="<?php echo !empty($category['image']) ? 'uploads/categories/'.htmlspecialchars($category['image']) : 'images/default-category.jpg'; ?>" 
                                 alt="<?php echo htmlspecialchars($category['name']); ?>" 
                                 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                                 onerror="this.src='images/default-category.jpg'">
                            <div class="category-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); padding: 20px;">
                                <h3 style="margin: 0; color: white; font-size: 1.5rem;">
                                    <?php echo htmlspecialchars($category['name']); ?>
                                </h3>
                            </div>
                        </div>
                        <div class="category-content" style="padding: 20px;">
                            <p style="color: #666; margin-bottom: 20px; min-height: 60px;">
                                <?php echo htmlspecialchars($category['short_desc']); ?>
                            </p>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <a href="foods.php?id=<?php echo $category['id']; ?>" 
                                   class="btn waves-effect" 
                                   style="background: #ee6e73; border-radius: 30px; padding: 0 30px;">
                                    View Menu
                                </a>
                                <a class="btn-floating waves-effect waves-light grey lighten-3 modal-trigger" 
                                   href="#categoryModal<?php echo $category['id']; ?>"
                                   style="box-shadow: none;">
                                    <i class="material-icons" style="color: #555;">info</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Category Modal -->
                    <div id="categoryModal<?php echo $category['id']; ?>" class="modal" style="border-radius: 10px; max-width: 800px;">
                        <div class="modal-content" style="padding: 40px;">
                            <div class="row">
                                <div class="col s12 m6">
                                    <img src="<?php echo !empty($category['image']) ? 'uploads/categories/'.htmlspecialchars($category['image']) : 'images/default-category.jpg'; ?>" 
                                         alt="<?php echo htmlspecialchars($category['name']); ?>" 
                                         style="width: 100%; border-radius: 8px;"
                                         onerror="this.src='images/default-category.jpg'">
                                </div>
                                <div class="col s12 m6">
                                    <h4 style="margin-top: 0; color: #333;">
                                        <?php echo htmlspecialchars($category['name']); ?>
                                    </h4>
                                    <p style="color: #666; line-height: 1.6;">
                                        <?php echo htmlspecialchars($category['long_desc']); ?>
                                    </p>
                                    <div class="modal-footer" style="padding: 20px 0 0;">
                                        <a href="foods.php?id=<?php echo $category['id']; ?>" 
                                           class="btn waves-effect" 
                                           style="background: #ee6e73; border-radius: 30px;">
                                            View Full Menu
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

<!-- Materialize CSS -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize modals
        var modals = document.querySelectorAll('.modal');
        M.Modal.init(modals);
        
        // Add hover effect to category cards
        var cards = document.querySelectorAll('.category-card');
        cards.forEach(function(card) {
            var img = card.querySelector('img');
            card.addEventListener('mouseenter', function() {
                img.style.transform = 'scale(1.05)';
            });
            card.addEventListener('mouseleave', function() {
                img.style.transform = 'scale(1)';
            });
        });
    });
</script>