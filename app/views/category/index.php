<div class="container">
    <h1>Categories</h1>
    
    <a href="/create-category" class="btn btn-primary my-5">Add Category</a>

    <table class="table">
        <tbody>
            <?php foreach($categories as $category):?>
            <tr>
                <td><?=$category->id?></td>
                <td><?=$category->name?></td>
                <td><?=$category->description?></td>
                <td><a href="/edit-category?id=<?=$category->id?>" class="btn btn-warning">Edit</a></td>
                <td><a href="/delete-category?id=<?=$category->id?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>