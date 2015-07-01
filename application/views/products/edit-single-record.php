<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product <?php echo $single_record['id']; ?> | Semi RESTful Route Demo</title>
    <link rel="stylesheet" href="/assets/css/styles.css"/>
</head>
<body>

<div id="wrapper">

    <h1>Edit Product <?php echo $single_record['id']; ?></h1>

    <div class="success">
        <?php
        echo $this->session->userdata('update_success');
        $this->session->unset_userdata('update_success');
        ?>
    </div>

    <form action="<?php echo base_url() . 'products/update/' . $single_record['id']; ?>" method="post" id="update-form">
        <input type="hidden" name="update"/>
        <p>
            <label for="name">Name:</label><br />
            <input type="text" name="name" value="<?php echo $single_record['name']; ?>"/>
        </p>

        <p>
            <label for="description">Description:</label><br />
            <input type="text" name="description" value="<?php echo $single_record['description']; ?>"/>
        </p>

        <p>
            <label for="price">Price:</label><br />
            <input type="text" name="price" value="<?php echo $single_record['price']; ?>"/>
        </p>

        <p>
            <input type="submit" value="Update"/>
        </p>
    </form>


    <h3><a href="<?php echo base_url() . 'products/show/' . $single_record['id']; ?>">Show</a></h3>
    <h3><a href="<?php echo base_url() . 'reset'; ?>">Go Home</a></h3>

</div>

</body>
</html>