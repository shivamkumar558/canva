<!DOCTYPE html>
<html lang="en">

<?php require('connection.php');?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="rupee-indian.png">
    <title>FARZI</title>
</head>

<body>
    <h2>Add new product</h2>
    <form action="" method="get">
        <label for="product-name">Product Name</label>
        <input type="text" name="Product-name"><br>
        
        <label for="price">price</label>
        <input type="text" name="price"><br>
        <!-- <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">JavaScript</label> -->
        <label for="created-in">Creation Date:</label>
        <input type="date" name="created-in"><br>
        
        <label for="size">size:</label>
        <input type="text" name="size"><br>

        <label for="artist-name">Artist Name</label>
        <input type="text" name="artist-name"><br>

        <label for="main-product-img">Main product image</label>
        <input type="file" name="main-product-img"><br>

        <label for="view-product-img">view product image</label>
        <input type="file" name="view-product-img"><br>
        <label for="view-product-img">view product image</label>
        <input type="file" name="viewproduct-img"><br>
        <label for="view-product-img">view product image</label>
        <input type="file" name="viewproduct-img"><br>
        <label for="view-product-img">view product image</label>
        <input type="file" name="viewproduct-img"><br>


        
        
        <select id="art-category" name="art-category">
            <option value="digital">digital</option>
            <option value="abstract">abstract</option>
            <option value="potrait">potrait</option>
            <option value="Realism">Realism</option>
        </select><br>

        <textarea name="product-desc" rows="10" cols="30">
            The cat was playing in the garden.
        </textarea><br>

        <label for="medium">Medium:</label>
        <input type="text" name="medium"><br>

        <label for="shipping">Shipping</label>
        <input type="text" name="shipping"><br>

        <button type="submit">Add product</button>

    </form>
</body>

</html>