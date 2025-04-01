<section class="empowerment-section" style="background: linear-gradient(135deg, #fff5f5 0%, #fff 100%); padding: 80px 0;">
    <div class="container">
        <div class="section-header center" style="margin-bottom: 50px;">
            <h2 class="header" style="font-size: 2.8rem; color: #d81b60; font-weight: 700; position: relative; display: inline-block;">
                Restaurant Powered By Girls
                <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: #ff8a80; border-radius: 2px;"></div>
            </h2>
        </div>

        <div class="empowerment-content" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center;">
            <div class="empowerment-text" style="flex: 1; min-width: 300px; padding: 20px;">
                <div class="card" style="border: none; border-radius: 12px; box-shadow: 0 10px 30px rgba(216, 27, 96, 0.1); padding: 30px; height: 100%;">
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                        Our restaurant is proud to be a female-powered culinary destination where passion meets professionalism. 
                        Every dish we serve represents the dedication and skill of our all-women team, from our executive chefs 
                        to our service staff. We've created more than just a dining establishment - we've built a platform for 
                        women in the food industry to showcase their talents, break barriers, and redefine fine dining.
                    </p>
                    <div style="margin-top: 30px; display: flex; justify-content: center;">
                        <a href="#!" class="btn-large waves-effect" style="background: #d81b60; border-radius: 50px; padding: 0 40px;">
                            Meet Our Team
                        </a>
                    </div>
                </div>
            </div>

            <div class="empowerment-image" style="flex: 1; min-width: 300px; padding: 20px;">
                <div class="card" style="border: none; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(216, 27, 96, 0.1);">
                    <img src="images/pile.jpeg" alt="Our female culinary team" style="width: 100%; height: auto; display: block;">
                    <div class="card-content" style="padding: 25px; background: #fff;">
                        <h5 style="color: #d81b60; font-weight: 600; margin-bottom: 20px;">By choosing to dine with us, you're supporting:</h5>
                        <ul class="empowerment-list" style="padding-left: 20px;">
                            <li style="margin-bottom: 12px; position: relative; padding-left: 30px; color: #555;">
                                <i class="material-icons" style="position: absolute; left: 0; color: #ff8a80; font-size: 1.2rem;">favorite</i>
                                Women's leadership in the culinary arts
                            </li>
                            <li style="margin-bottom: 12px; position: relative; padding-left: 30px; color: #555;">
                                <i class="material-icons" style="position: absolute; left: 0; color: #ff8a80; font-size: 1.2rem;">school</i>
                                Professional development programs for female chefs
                            </li>
                            <li style="margin-bottom: 12px; position: relative; padding-left: 30px; color: #555;">
                                <i class="material-icons" style="position: absolute; left: 0; color: #ff8a80; font-size: 1.2rem;">equalizer</i>
                                Equal opportunities in the restaurant industry
                            </li>
                            <li style="margin-bottom: 12px; position: relative; padding-left: 30px; color: #555;">
                                <i class="material-icons" style="position: absolute; left: 0; color: #ff8a80; font-size: 1.2rem;">spa</i>
                                Sustainable sourcing from women-owned farms
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
    .empowerment-section {
        position: relative;
        overflow: hidden;
    }
    
    .empowerment-section::before {
        content: "";
        position: absolute;
        top: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background: #ffcdd2;
        border-radius: 50%;
        opacity: 0.3;
        z-index: 0;
    }
    
    .empowerment-section::after {
        content: "";
        position: absolute;
        bottom: -80px;
        left: -80px;
        width: 300px;
        height: 300px;
        background: #f8bbd0;
        border-radius: 50%;
        opacity: 0.2;
        z-index: 0;
    }
    
    .empowerment-content > * {
        position: relative;
        z-index: 1;
    }
    
    @media (max-width: 768px) {
        .empowerment-text, .empowerment-image {
            flex: 100% !important;
        }
        
        .section-header h2 {
            font-size: 2.2rem !important;
        }
    }
</style>