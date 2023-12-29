<?php
include 'database.php';

// Create a connection
//$db = new Database();

// Fetch products from the database
$sql = "SELECT * FROM product";

$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Output data of each row
//     while ($row = $result->fetch_assoc()) {
//         echo "Product ID: " . $row["Product_Id"] . "<br>";
//         echo "Product Name: " . $row["Product_name"] . "<br>";
//         echo "Description: " . $row["Product_description"] . "<br>";
//         echo "Cost: $" . $row["Product_cost"] . "<br>";
//         echo "Product Image: " . $row["Product_image"] . "<br>";
//         echo "<hr>";
//     }
// } else {
//     echo "No products found.";
// }

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #282c34;
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            margin-bottom: 20px;
            position: absolute;
            top: 0;
            width: 100%;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .navbar a.active {
            background-color: #4CAF50;
        }
        .product-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 60px;
        }
        .product-card {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .product-card img {
            width: 200px;
            height: 200px;
        }
        button {
            padding: 10px;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
        #cart {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
        }
        .text-container {
            text-align: center;
            margin-top: 100px;
            width: 80%;
            color: #f2f2f2;
        }

        .text-container h1 {
            color: #4CAF50;
        }
    </style>
    <script>
        var cart = { total: 0, quantity: 0 };

        function addToCart(price) {
            cart.total += price;
            cart.quantity += 1;
            document.getElementById('cart-total').textContent = 'Total: $' + cart.total;
            document.getElementById('cart-quantity').textContent = 'Quantity: ' + cart.quantity;
        }
        function checkout() {
            alert('Total price: $' + cart.total + '\nTotal quantity: ' + cart.quantity);
        }
    </script>
</head>
<body>
    <div class="navbar">
        <a href="home.html">Home</a>
        <a href="about_us.html">About Us</a>
        <a href="contact_us.html">Contact Us</a>
        <a href="products.html" class="active">Products</a>
        <a href="#search">Search</a>
        <a href="#order">Order</a>
        <a href="customer_registration.html">Customer Registration</a>
    </div>
    <div class="text-container">
        <h1>Our Game Catalogue</h1>
        <p>Explore our collection of exciting and immersive computer games. Each product is designed to provide you with an unforgettable gaming experience. Just click "Add to Cart" to begin your next gaming adventure!</p>
    </div>
    <div class="product-container">

    <?php
        // Fetch products from database
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="product-card">';
                echo '<img src="'.$row["Product_image"].'" alt="'.$row["Product_name"].'">';
                echo '<h2>'.$row["Product_name"].'</h2>';
                echo '<p>'.$row["Product_description"].'</p>';
                echo '<p>Price: $'.$row["Product_cost"].'</p>';
                echo '<button onclick="addToCart('.$row["Product_cost"].')">Add to Cart</button>';
                echo '</div>';
            }
        } else {
            echo "No products found";
        }
    
    ?>
        
        <!-- <div class="product-card">
            <img src="https://via.placeholder.com/200" alt="Race Car">
            <h2>Game 1</h2>
            <p>This is a great game!</p>
            <p>Price: $400</p>
            <button onclick="addToCart(400)">Add to Cart</button>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/200" alt="Mountain Race">
            <h2>Game 2</h2>
            <p>This game is amazing!</p>
            <p>Price: $900</p>
            <button onclick="addToCart(900)">Add to Cart</button>
        </div> -->
    </div>
    <div id="cart">
        <h2>Cart</h2>
        <p id="cart-quantity">Quantity: 0</p>
        <p id="cart-total">Total: $0</p>
        <button onclick="checkout()">Checkout</button>
    </div>
</body>
