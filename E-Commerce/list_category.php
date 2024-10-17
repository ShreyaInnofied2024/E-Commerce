<?php
include('category.php');

    $category = new Category('Apple',30);
    $result= $category->list();
    if (count($result) > 0) {
        echo "<table border=1px solid black>";
        echo "<tr><th>Id</th><th>Name</th><th>Quantity</th><th>Actions</th></tr>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['quantity']) . "</td>";
            echo "<td>
                  <a href='/E-Commerce/form_category.php?id=" . htmlspecialchars($row['id']) . "' style='text-decoration:none;'>
                      <button>Edit</button>
                  </a>
                  <a href='/E-Commerce/delete_category.php?id=" . htmlspecialchars($row['id']) . "' style='text-decoration:none;'>
                      <button>Delete</button>
                  </a>
                  <a href='/E-Commerce/view_category.php?id=" . htmlspecialchars($row['id']) . "' style='text-decoration:none;'>
                      <button>View</button>
                  </a>
                  <a href='/E-Commerce/add_category.php' style='text-decoration:none;'>
                      <button>Add</button>
                  </a>
              </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No products found in the database.";
    }


