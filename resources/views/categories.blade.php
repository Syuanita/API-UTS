<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Categories</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody id="category-table">
                <!-- Data will be inserted here -->
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            // Fetch categories from API
            $.ajax({
                url: '/api/categories',
                method: 'GET',
                success: function(response) {
                    let categories = response;
                    let html = '';

                    categories.forEach(function(category) {
                        html += `
                            <tr>
                                <td>${category.id}</td>
                                <td>${category.name}</td>
                            </tr>
                        `;
                    });

                    $('#category-table').html(html);
                },
                error: function(error) {
                    console.log("Error fetching categories:", error);
                }
            });
        });
    </script>
</body>
</html>
