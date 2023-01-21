<form action="/public/form_data_result" method="post">
    @csrf
    <label>Title:<input name="title"/></label>
    <label>Price<input name="price"/></label>
    <label>Description<input name="description"/></label>
    <label>Image<input name="image"/></label>
    <label>Category<input name="category"/></label>
    <input type="submit"/>
</form>
