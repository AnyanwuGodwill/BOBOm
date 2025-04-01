<section class="food-categories" style="background: #f9f9f9; padding: 80px 0;">
    <div class="container">
        <div class="section-header center" style="margin-bottom: 60px;">
            <h2 class="header" style="font-size: 2.8rem; color: #333; font-weight: 700; position: relative;">
                Discover Our Regional Cuisines
                <div style="position: absolute; bottom: -15px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: #ee6e73; border-radius: 2px;"></div>
            </h2>
            <p class="subheader" style="color: #666; font-size: 1.1rem; max-width: 700px; margin: 20px auto 0;">
                Explore the diverse culinary traditions from different regions
            </p>
        </div>

        <div class="category-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; padding: 0 20px;">
            <!-- Northwest Meals Card -->
            <div class="category-card" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08); transition: all 0.3s ease;">
                <div class="category-image" style="height: 220px; overflow: hidden; position: relative;">
                    <img src="images/banner1.png" alt="Northwest Meals" 
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                    <div class="category-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.3); display: flex; align-items: flex-end; padding: 20px;">
                        <h3 style="color: white; font-size: 1.8rem; margin: 0; text-shadow: 1px 1px 3px rgba(0,0,0,0.5);">Northwest Meals</h3>
                    </div>
                </div>
                <div class="category-content" style="padding: 25px;">
                    <p style="color: #666; margin-bottom: 25px; min-height: 60px;">
                        Wanna check out the Mouth-Watering Foods of this category? Explore Now!
                    </p>
                    <div class="category-actions" style="display: flex; justify-content: space-between; align-items: center;">
                        <a href="#northwestModal" class="btn-flat waves-effect modal-trigger" style="color: #ee6e73;">
                            Learn More
                        </a>
                        <a href="food-categories.php?region=northwest" class="btn waves-effect" style="background: #ee6e73; border-radius: 30px;">
                            Explore
                        </a>
                    </div>
                </div>
            </div>

            <!-- West Meals Card -->
            <div class="category-card" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08); transition: all 0.3s ease;">
                <div class="category-image" style="height: 220px; overflow: hidden; position: relative;">
                    <img src="images/banner2.jpg" alt="West Meals" 
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                    <div class="category-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.3); display: flex; align-items: flex-end; padding: 20px;">
                        <h3 style="color: white; font-size: 1.8rem; margin: 0; text-shadow: 1px 1px 3px rgba(0,0,0,0.5);">West Meals</h3>
                    </div>
                </div>
                <div class="category-content" style="padding: 25px;">
                    <p style="color: #666; margin-bottom: 25px; min-height: 60px;">
                        Wanna check out the Mouth-Watering Foods of this category? Explore Now!
                    </p>
                    <div class="category-actions" style="display: flex; justify-content: space-between; align-items: center;">
                        <a href="#westModal" class="btn-flat waves-effect modal-trigger" style="color: #ee6e73;">
                            Learn More
                        </a>
                        <a href="food-categories.php?region=west" class="btn waves-effect" style="background: #ee6e73; border-radius: 30px;">
                            Explore
                        </a>
                    </div>
                </div>
            </div>

            <!-- Littoral Meals Card -->
            <div class="category-card" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08); transition: all 0.3s ease;">
                <div class="category-image" style="height: 220px; overflow: hidden; position: relative;">
                    <img src="images/banner5.jpeg" alt="Littoral Meals" 
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                    <div class="category-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.3); display: flex; align-items: flex-end; padding: 20px;">
                        <h3 style="color: white; font-size: 1.8rem; margin: 0; text-shadow: 1px 1px 3px rgba(0,0,0,0.5);">Littoral Meals</h3>
                    </div>
                </div>
                <div class="category-content" style="padding: 25px;">
                    <p style="color: #666; margin-bottom: 25px; min-height: 60px;">
                        Wanna check out the Mouth-Watering Foods of this category? Explore Now!
                    </p>
                    <div class="category-actions" style="display: flex; justify-content: space-between; align-items: center;">
                        <a href="#littoralModal" class="btn-flat waves-effect modal-trigger" style="color: #ee6e73;">
                            Learn More
                        </a>
                        <a href="food-categories.php?region=littoral" class="btn waves-effect" style="background: #ee6e73; border-radius: 30px;">
                            Explore
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="center" style="margin-top: 50px;">
            <a href="food-categories.php" class="btn-large waves-effect" style="background: #ee6e73; border-radius: 50px; padding: 0 40px;">
                Discover More Cuisines &raquo;
            </a>
        </div>
    </div>
</section>

<!-- Northwest Modal -->
<div id="northwestModal" class="modal" style="border-radius: 12px; max-width: 800px;">
    <div class="modal-content" style="padding: 40px;">
        <h4 style="margin-top: 0; color: #333;">Northwest Meals</h4>
        <div class="row">
            <div class="col s12 m6">
                <img src="images/banner1.png" alt="Northwest Meals" style="width: 100%; border-radius: 8px;">
            </div>
            <div class="col s12 m6">
                <p style="color: #666; line-height: 1.8;">
                    Northwest meals encompass a wide variety of regional cuisine native to the northwest. Given the range of diversity in soil type, climate and occupations, these cuisines vary significantly from each other and use locally available chocolates, herbs, vegetables and fruits. The dishes are then served according to taste in either mild, medium or hot. Northwest food is also heavily influenced by religious and cultural choices.
                </p>
                <div class="modal-footer" style="padding: 20px 0 0;">
                    <a href="food-categories.php?region=northwest" class="btn waves-effect" style="background: #ee6e73; border-radius: 30px;">
                        Explore Menu
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- West Modal -->
<div id="westModal" class="modal" style="border-radius: 12px; max-width: 800px;">
    <div class="modal-content" style="padding: 40px;">
        <h4 style="margin-top: 0; color: #333;">West Meals</h4>
        <div class="row">
            <div class="col s12 m6">
                <img src="images/banner2.jpg" alt="West Meals" style="width: 100%; border-radius: 8px;">
            </div>
            <div class="col s12 m6">
                <p style="color: #666; line-height: 1.8;">
                    West cuisine is an important part of western culture, which includes cuisine originating from the diverse villages of the west region. These traditional dishes have been passed down through generations and feature unique flavor combinations that reflect the local agriculture and cultural influences of the area.
                </p>
                <div class="modal-footer" style="padding: 20px 0 0;">
                    <a href="food-categories.php?region=west" class="btn waves-effect" style="background: #ee6e73; border-radius: 30px;">
                        Explore Menu
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Littoral Modal -->
<div id="littoralModal" class="modal" style="border-radius: 12px; max-width: 800px;">
    <div class="modal-content" style="padding: 40px;">
        <h4 style="margin-top: 0; color: #333;">Littoral Meals</h4>
        <div class="row">
            <div class="col s12 m6">
                <img src="images/banner5.jpeg" alt="Littoral Meals" style="width: 100%; border-radius: 8px;">
            </div>
            <div class="col s12 m6">
                <p style="color: #666; line-height: 1.8;">
                    Littoral cuisine includes the cuisines of coastal regions, featuring fresh seafood and tropical ingredients. These dishes showcase the bounty of the ocean combined with local spices and cooking techniques that have been perfected over centuries. The cuisine is known for its vibrant flavors and healthy preparation methods.
                </p>
                <div class="modal-footer" style="padding: 20px 0 0;">
                    <a href="food-categories.php?region=littoral" class="btn waves-effect" style="background: #ee6e73; border-radius: 30px;">
                        Explore Menu
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

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

<style>
    .food-categories {
        position: relative;
        overflow: hidden;
    }
    
    .category-card:hover {
        transform: translateY(-10px) !important;
        box-shadow: 0 15px 30px rgba(0,0,0,0.12) !important;
    }
    
    @media (max-width: 768px) {
        .category-grid {
            grid-template-columns: 1fr !important;
            padding: 0 10px !important;
        }
        
        .section-header h2 {
            font-size: 2.2rem !important;
        }
    }
</style>