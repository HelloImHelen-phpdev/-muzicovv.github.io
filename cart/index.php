<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>Shopping Cart</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link href="\source\css\style.css@v=2.0.0.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css">
</head>
<body>
<header>
    <div class="content-wrapper">
        <h1>Shopping Cart</h1>
        <nav>
            <a href="index.php.html">Home</a>
            <a href="index.php@page=products.html">Products</a>
            <a href="index.php@page=myaccount.html">My Account</a>
        </nav>
        <div class="link-icons">
            <div class="search">
                <i class="fas fa-search" title="Search"></i>
                <input type="text" placeholder="Search...">
            </div>
            <a href="index.php@page=cart.html" title="Shopping Cart">
                <i class="fas fa-shopping-cart"></i>
                <span>0</span>
            </a>
            <a class="responsive-toggle" href="index.php@page=cart.html#">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </div>
</header>
<main>
    <div class="cart content-wrapper">
        <h1>Shopping Cart</h1>
        <form action="index.php@page=cart.html" method="post">
            <table>
                <thead>
                <tr>
                    <td colspan="2">Product</td>
                    <td class="rhide"></td>
                    <td class="rhide">Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="6" style="text-align:center;">You have no products added in your Shopping Cart</td>
                </tr>
                </tbody>
            </table>
            <div class="total">
                <span class="text">Subtotal</span>
                <span class="price">&dollar;0.00</span>
                <span class="note">(shipping and tax calculated at checkout)</span>
            </div>
            <div class="buttons">
                <input type="submit" value="Update" name="update" class="btn">
                <input type="submit" value="Empty Cart" name="emptycart" class="btn">
                <input type="submit" value="Checkout" name="checkout" class="btn">
            </div>
        </form>
    </div>
</main>
<footer>
    <div class="content-wrapper">
        <p>&copy; 2023, <a href="https://codeshack.io/package/php/advanced-shopping-cart-system/" target="_blank">Shopping Cart System</a></p>
    </div>
</footer>
<script>const currency_code="&dollar;",base_url="https://codeshack.io/projects/shoppingcart/advanced/",rewrite_url=false;</script>
<script src="script.js@v=2.0.0"></script>
</body>
</html>