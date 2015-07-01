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

    <div class="success">
        <?php
        // Show a success message if a product
        // has been entered into the database
        echo $this->session->userdata('message');
        // After that unset the session variable
        $this->session->unset_userdata('message');


        // Show a session variable on a successful
        // record delete
        echo $this->session->userdata('delete_success');
        $this->session->unset_userdata('delete_success');
        ?>
    </div>

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
            foreach(array_reverse($products) as $row)
            {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo ucfirst($row['name']); ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td class="text-align-right"><?php echo $row['price']; ?></td>
                    <td class="border-bottom">
                        <a href="<?php echo base_url() . 'products/show/' . $row['id']; ?>">Show</a>
                    </td>
                    <td class="border-bottom">
                        <a href="<?php echo base_url() . 'products/edit/' . $row['id']; ?>">Edit</a>
                    </td>
                    <td class="border-bottom-right">
                        <form action="<?php echo base_url() . 'products/remove/' . $row['id']; ?>" method="post">
                            <input type="hidden" name="remove" value="<?php echo $row['id']; ?>"/>
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