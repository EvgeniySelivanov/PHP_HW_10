<div class="container">
    <h1>Edit category</h1>
    <form action="/update-category" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" value="<?=$category->name?>">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"><?=$category->description?></textarea>
        </div>
        <input type="hidden" name="id" value="<?=$category->id?>">
        <button class="btn btn-primary mt-5">Save</button>
    </form>
</div>