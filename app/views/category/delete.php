<div class="container">
    <h1>Delete category</h1>
    <form action="/deleteCategory" method="POST">
        <div class="form-group">
            <label for="">Name</label>
            <input name="name" type="text" class="form-control"  value="<?=$category->name?>" disabled>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" disabled class="form-control"><?=$category->description?></textarea>
        </div>
      <input type="hidden" name="id" value="<?=$category->id?>"> 
        
      <button class="btn btn-danger mt-5">Delete</button>
    </form>
</div>