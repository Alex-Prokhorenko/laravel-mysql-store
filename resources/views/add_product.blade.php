<form action="" method="POST">
    @csrf
    <label>Title:<input name="title"/></label>
    <label>Price<input name="price"/></label>
    <label>Category<input name="category_id"/></label>
    <label>Description<input name="description"/></label>
    <label>Image<input name="image"/></label>
    <input type="submit"/>
</form>
