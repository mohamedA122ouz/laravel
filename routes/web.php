<?php

use Illuminate\Support\Facades\Route;
$products = [
    [
        "src" => "https://fhafnb.com/wp-content/uploads/2024/01/gourmet-coffee.jpg",
        "details" => "A rich and aromatic blend of coffee beans, perfect for your morning energy boost.",
        "name" => "Premium Coffee",
        "more_details" => "Coffee is one of the most popular beverages in the world, enjoyed by millions for its bold flavor and energizing effect. It is made from roasted coffee beans, which come from the Coffea plant. There are many varieties of coffee, including Arabica and Robusta, each with its unique taste and characteristics. Coffee contains caffeine, a natural stimulant that helps improve concentration and alertness. Many people start their day with a cup of coffee to wake up and boost productivity. The process of making coffee involves grinding the beans, brewing them with hot water, and extracting the rich flavors. Some prefer their coffee black, while others enjoy it with milk, sugar, or flavored syrups. Specialty coffees such as espresso, cappuccino, and latte have gained popularity in coffee shops worldwide. Additionally, coffee has several health benefits, including antioxidants that help fight inflammation and reduce the risk of diseases like Parkinson’s and Alzheimer’s. Moderate coffee consumption has been linked to improved heart health and a lower risk of type 2 diabetes. Whether enjoyed hot or iced, coffee remains a staple drink in many cultures."
    ],
    [
        "src" => "https://healthnewshub.org/wp-content/uploads/2024/12/Green-Tea-Ozempic.jpg",
        "details" => "Refreshing green tea leaves, known for their antioxidants and calming effect.",
        "name" => "Green Tea",
        "more_details" => "Green tea is a widely consumed beverage known for its numerous health benefits. It originates from China and Japan and is made from unoxidized Camellia sinensis leaves, which retain their natural green color. Green tea is rich in antioxidants called catechins, which help reduce inflammation, boost metabolism, and support overall health. Studies suggest that drinking green tea regularly can enhance brain function, improve fat burning, and lower the risk of chronic diseases such as heart disease and cancer. The tea contains a moderate amount of caffeine, providing a gentle energy boost without the jitters associated with coffee. Additionally, green tea is often used for relaxation due to its amino acid L-theanine, which promotes calmness and focus. Popular variations include matcha, a powdered form of green tea with higher nutrient concentration. Whether enjoyed hot or iced, green tea is a refreshing and beneficial beverage for both body and mind."
    ],
    [
        "src" => "https://portal.elsupplier.com/backend/public/storage/products/darkChocolate-463813283-770x533-1643121048.jpg",
        "details" => "Delicious dark chocolate, rich in cocoa and perfect for sweet cravings.",
        "name" => "Dark Chocolate",
        "more_details" => "Dark chocolate is a luxurious treat made from cocoa solids, cocoa butter, and minimal sugar. Unlike milk chocolate, dark chocolate has a higher percentage of cocoa, giving it a richer taste and more health benefits. It is packed with antioxidants called flavonoids, which help reduce inflammation, improve heart health, and lower blood pressure. Many studies suggest that consuming dark chocolate in moderation can enhance brain function, improve mood, and even protect the skin from UV damage. The magnesium content in dark chocolate supports muscle relaxation and stress relief. It is often used in desserts such as brownies, cakes, and truffles. Choosing dark chocolate with at least 70% cocoa ensures the best health benefits while maintaining its rich, indulgent flavor."
    ],
    [
        "src" => "https://naturelandorganics.com/cdn/shop/articles/8_Healthy_Benefits_Of_Organic_Raw_Honey_-_NaturelandOrganics_1200x1200.jpg?v=1658902907",
        "details" => "Pure natural honey, a healthy sweetener packed with nutrients.",
        "name" => "Organic Honey",
        "more_details" => "Organic honey is a natural sweetener produced by bees from the nectar of flowers. It is unprocessed and retains all its beneficial nutrients, including vitamins, minerals, and antioxidants. Honey has been used for centuries in traditional medicine to treat wounds, soothe sore throats, and boost immunity. It contains antibacterial and antifungal properties that help protect against infections. Unlike refined sugar, honey has a lower glycemic index, meaning it provides a more stable source of energy without causing rapid blood sugar spikes. It is commonly used in teas, desserts, and skincare products. Raw honey is particularly beneficial because it contains pollen, enzymes, and other bioactive compounds that promote digestive health and overall well-being."
    ],
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Orangejuice.jpg/640px-Orangejuice.jpg",
        "details" => "Freshly squeezed orange juice, full of vitamin C and refreshing taste.",
        "name" => "Orange Juice",
        "more_details" => "Orange juice is a refreshing and nutritious beverage made from freshly squeezed oranges. It is packed with vitamin C, an essential nutrient that supports the immune system, improves skin health, and aids in iron absorption. Orange juice also contains potassium, folate, and antioxidants that help maintain heart health and reduce the risk of chronic diseases. Many people enjoy it as a morning drink to kickstart their day with a boost of energy. While fresh-squeezed juice is the healthiest option, commercially available orange juice is often fortified with additional vitamins and minerals. Some varieties include pulp for extra fiber, while others are smooth and easy to drink. Whether enjoyed alone or mixed into smoothies, orange juice remains a favorite beverage for its delicious taste and numerous health benefits."
    ]
];


Route::get('/', function () use($products) {
    return view('index',["products"=>$products]);
    // return $products;
});
Route::get("/product/{id}", function ($id) use($products){
    return view("product",["product"=>$products[$id]]);
});
Route::get("/aboutme", function (){
    return view("aboutme");
});
