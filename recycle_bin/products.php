<?php
    require_once "../controller/RecycleBinController.php";
    $controller = new RecycleBinController();
    $products = $controller->products();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="flex justify-between py-4">
        <h1 class="text-lg ml-6 font-bold italic font-lg">Product Table</h1>
        <div>
            <a href="../products" class="bg-blue-500 py-2 px-3 text-gray-100 mr-2 rounded-md">Back</a>
            <a href="../products/create.php" class="bg-blue-500 py-2 px-3 text-gray-100 mr-2 rounded-md">Add +</a>
        </div>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stock
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created_at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Updated_at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                <tr class="border-b text-grey-100 bg-gray-800 border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $product->id; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $product->name; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $product->price; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $product->stock; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $product->description; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $product->category; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $product->created_at; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <?php echo $product->updated_at; ?>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                        <!-- <form action="destory.php" method="POST">
                            <input type="hidden" type="text" name="id" value="<?php echo $product->id; ?>">
                            <button class="px-4 py-2 bg-red-400 rounded-md">delete</button>
                        </form> -->
                        <a class="px-3 py-2 bg-red-400 rounded-md" href="../recycle_bin/restore.php?id=<?php echo $product->id; ?>">Restore</a>
                        <a class="px-3 py-2 bg-blue-400 rounded-md" href="../products/edit.php?id=<?php echo $product->id; ?>">Edit</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>