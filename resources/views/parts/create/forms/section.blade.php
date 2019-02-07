<form method="POST" action="/questionnaire/create/section">
    @csrf
    <div class="form-group">
        <label for="section_name">
            Section name
        </label>
        <input
            class="form-control"
            type="text"
            name="name"
            id="section_name"
            placeholder="Type a text"
            required>
    </div>
    <div class="form-group">
        <label for="section_order">
            Section order
        </label>
        <input
            class="form-control"
            type="number"
            name="order"
            id="section_order"
            placeholder="Type a text"
            required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>