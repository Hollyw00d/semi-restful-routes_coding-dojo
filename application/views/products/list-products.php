<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Products | Semi RESTful Route Demo</title>
    <link rel="stylesheet" href="/assets/css/styles.css"/>
</head>
<body>

<div id="wrapper">

    <h1>Products</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>

                <th>Price</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($products as $row)
            {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo ucfirst($row['name']); ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td class="border-bottom">
                        <form action="<?php echo base_url() . 'products/show/' . $row['id']; ?>" method="post">
                            <input type="hidden" name="show"/>
                            <input type="submit" value="Show"/>
                        </form>
                    </td>
                    <td class="border-bottom">
                        <form action="<?php echo base_url() . 'products/edit/' . $row['id']; ?>" method="post">
                            <input type="hidden" name="edit"/>
                            <input type="submit" value="Edit"/>
                        </form>
                    </td>
                    <td class="border-bottom-right">
                        <form action="<?php echo base_url() . 'products/remove/' . $row['id']; ?>" method="post">
                            <input type="hidden" name="remove"/>
                            <input type="submit" value="Remove"/>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <p>&nbsp;</p>

    <h3><a href="<?php echo base_url() . 'products/new'; ?>">Add a New Product</a></h3>

    <p>&nbsp;</p>

    <p><strong><a href="<?php echo base_url() . 'reset' ?>">Reset Form</a></strong></p>

</div>

</body>
</html>