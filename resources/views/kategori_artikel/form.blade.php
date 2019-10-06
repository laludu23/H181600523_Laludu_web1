@csrf

<div class="form-group">
        @csrf
        <label for="name">Nama Kategori Artikel:</label>
        <input type="text" class="form-control" name="nama"/>
    </div>
    <div class="form-group">
        <input id="users_id" type="hidden" class="form-control" name="users_id" value="{!! Auth::id() !!}" />
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
