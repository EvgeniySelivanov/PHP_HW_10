<div class="container">
    <h1>Create category</h1>
    <form action="/store-category" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary mt-5">Save</button>
    </form>
</div>