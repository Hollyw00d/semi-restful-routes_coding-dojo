<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product <?php echo $single_record['id']; ?> Info | Semi RESTful Route Demo</title>
    <link rel="stylesheet" href="/assets/css/styles.css"/>
</head>
<body>

<div id="wrapper">

    <h1>Product <?php echo $single_record['id']; ?></h1>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        </thead>

        <tbody>
            <tr>
                <td><?php echo $single_record['id']; ?></td>
                <td><?php echo $single_record['name']; ?></td>
                <td><?php echo $single_record['description']; ?></td>
                <td class="text-align-right"><?php echo $single_record['price']; ?></td>
            </tr>
        </tbody>
    </table>

    <h3><a href="<?php echo base_url() . 'products/edit/' . $single_record['id']; ?>">Edit</a></h3>
    <h3><a href="<?php echo base_url() . 'reset'; ?>">Back</a></h3>

</div>

</body>
</html>