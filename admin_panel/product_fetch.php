
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Card Container */
.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-around;
    margin-top: 20px;
}

/* Individual Product Card */
.card {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 250px;
    text-align: center;
    transition: transform 0.3s ease;
    overflow: hidden; /* Hide any overflow */
    border: 1px solid #eee;
}

.card:hover {
    transform: translateY(-10px);
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover; /* Ensures the image fits well inside the card */
    border-radius: 8px;
}

.card h3 {
    font-size: 20px;
    margin-top: 15px;
    color: #333;
}

.card p {
    font-size: 16px;
    color: #555;
    margin: 10px 0;
}

.card .buy-btn {
    padding: 10px 15px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.card .buy-btn:hover {
    background-color: #218838;
}

/* Style for the search input */
input[type="text"] {
    padding: 8px;
    width: 300px;
    margin-right: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    padding: 8px 15px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>

</head>

<body>
<form method="post">
    <input type="text" placeholder="Search Here" name="search">
    <input type="submit" name="btn">
</form>

<?php
include("connection.php");

if (isset($_POST['btn'])) {
    // Ensure to escape user input to prevent SQL injection
    $search = mysqli_real_escape_string($connection, $_POST['search']);

    // Correct SQL query (fixing the 'FORM' typo)
    $select = "SELECT * FROM admin WHERE item LIKE '%$search%'";

    // Execute the query
    $final = mysqli_query($connection, $select);

    // Check if any rows were returned
    if (mysqli_num_rows($final) > 0) {
        echo "<div class='card-container'>"; // Start the card container
        while ($row = mysqli_fetch_assoc($final)) {
            // Display the product result inside a card
            echo "<div class='card'>";
            echo "<img src='" . $row['image'] . "' alt='Product Image'>";  // Assuming 'image' column stores the image URL
            echo "<h3>" . $row['item'] . "</h3>"; // Product name
            echo "<p>" . $row['description'] . "</p>"; // Product description
            echo "<p><strong>Price: $</strong>" . $row['price'] . "</p>"; // Product price
            echo "<button class='buy-btn'>Buy Now</button>"; // Buy button (Optional)
            echo "</div>";
        }
        echo "</div>"; // End the card container
    } else {
        echo "No results found.";
    }
}
?>







</body>

</html>