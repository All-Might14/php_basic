<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-[40%] mx-auto shadow-lg my-12  py-4" >
        <h1 class="text-center text-lg">Product</h1>
        <form class="w-[90%] mx-auto" action="../products/store.php" method="POST">
            <div class="my-3">
                <label for="name">Name</label>
                <input class="w-full px-3 border-2 border-indigo-500 ring-blue-500" required type="text" name="name">
            </div>
            <div class="my-3">
                <label for="price">Price</label>
                <input class="w-full px-3 border-2 border-indigo-500 ring-blue-500" required type="number" name="price">
            </div>
            <div class="my-3">
                <label for="stock">Stock</label>
                <input class="w-full px-3 border-2 border-indigo-500 ring-blue-500" required type="number" name="stock">
            </div>
            <div class="my-3">
                <label for="category">Category</label>
                <input class="w-full px-3 border-2 border-indigo-500 ring-blue-500" required type="text" name="category">
            </div>
            <div class="my-3">
                <label for="description">Description</label>
                <textarea name="description" class="w-full px-3 border-2 border-indigo-500 ring-blue-500" requried></textarea>
            </div>
            <button class="w-full bg-blue-700 py-2 my-3 text-gray-100 hover:bg-blue-600">Add</button>
        </form>
        <div class="w-[90%] mx-auto">
            <a href="../products/index.php">
            <button  class="w-full bg-gray-700 py-2 text-gray-100 hover:bg-gray-600">Back</button>

            </a>
        </div>
    </div>
</body>
</html>