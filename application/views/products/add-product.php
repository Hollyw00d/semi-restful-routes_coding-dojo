<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a Product | Semi RESTful Route Demo</title>
    <link rel="stylesheet" href="/assets/css/styles.css"/>
</head>
<body>

<div id="wrapper">

    <h1>Add a New Product</h1>

    <?php
    // Load the form helper
    $this->load->helper('form');
    // Load the form_validation library
    $this->load->library('form_validation');
    ?>

    <div class="error">
        <?php
        // Show validation errors if they exist
        echo validation_errors();
        ?>
    </div>

    <form action="<?php echo base_url() . 'products/new'; ?>" method="post" id="add-product">
        <input type="hidden" name="add_product"/>
        <p>
            <label for="name">Name</label><br />
            <input type="text" name="name" value="<?php echo set_value('name'); ?>"/>
        </p>

        <p>
            <label for="description">Description</label><br />
            <input type="text" name="description" value="<?php echo set_value('description'); ?>"/>
        </p>

        <p>
            <label for="price">Price</label><br />
            <input type="type" name="price" value="<?php echo set_value('price'); ?>"/>
        </p>
        <p>
            <input type="submit" value="Create"/>
        </p>
    </form>

    <p>&nbsp;</p>

    <p><strong><a href="<?php echo base_url() . 'reset' ?>">Reset Form and Go Home</a></strong></p>


</div>

</body>
</html>