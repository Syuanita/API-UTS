<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Welcome to the Dashboard</h1>
        <p class="text-center">Choose a section to view data:</p>
        <div class="row justify-content-center">
            <!-- Categories Link -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <p class="card-text">View all categories available in the system.</p>
                        <a href="{{ url('/categories') }}" class="btn btn-primary">Go to Categories</a>
                    </div>
                </div>
            </div>
            <!-- Orders Link -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <p class="card-text">View all orders placed by customers.</p>
                        <a href="{{ url('/orders') }}" class="btn btn-primary">Go to Orders</a>
                    </div>
                </div>
            </div>
            <!-- Products Link -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text">View all products available in the catalog.</p>
                        <a href="{{ url('/products') }}" class="btn btn-primary">Go to Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
