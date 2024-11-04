<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Orders</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody id="order-table">
                <!-- Data will be inserted here -->
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            // Fetch orders from API
            $.ajax({
                url: '/api/orders',
                method: 'GET',
                success: function(response) {
                    let orders = response;
                    let html = '';

                    orders.forEach(function(order) {
                        html += `
                            <tr>
                                <td>${order.id}</td>
                                <td>${order.product_id}</td>
                                <td>${order.product ? order.product.name : 'N/A'}</td>
                                <td>${order.quantity}</td>
                            </tr>
                        `;
                    });

                    $('#order-table').html(html);
                },
                error: function(error) {
                    console.log("Error fetching orders:", error);
                }
            });
        });
    </script>
</body>
</html>
