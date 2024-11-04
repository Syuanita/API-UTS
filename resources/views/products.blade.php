<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Products</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody id="product-list">
                <!-- Data will be loaded here from API -->
            </tbody>
        </table>
    </div>
    <script>
        fetch('/api/products')
            .then(response => response.json())
            .then(data => {
                const productList = document.getElementById('product-list');
                data.forEach(product => {
                    const row = document.createElement('tr');
                    row.innerHTML = `<td>${product.id}</td><td>${product.name}</td><td>${product.price}</td><td>${product.description}</td>`;
                    productList.appendChild(row);
                });
            });
    </script>
</body>
</html>
