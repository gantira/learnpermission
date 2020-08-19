<div class="form-group">
    <label for="name" class="form-group">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $role->name }}">
</div>
<div class="form-group">
    <label for="guard_name" class="form-group">Guard Name</label>
    <input type="text" name="guard_name" id="guard_name" class="form-control" placeholder='default to "web"' value="{{ old('guard_name') ?? $role->guard_name }}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $submit }}</button>
</div>
