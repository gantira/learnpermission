<div class="form-group">
    <label for="parent_id">Parent</label>
    <select name="parent_id" id="parent_id" class="form-control">
        <option selected disabled>Choose a parent</option>
        @foreach ($navigations as $item)
            <option {{ $item->id == $navigation->parent_id ? 'selected' : '' }} value="{{ $item->id }}">
                {{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="permission_name">Permission</label>
    <select name="permission_name" id="permission_name" class="form-control">
        <option selected disabled>Choose a Permission</option>
        @foreach ($permissions as $item)
            <option {{ $item->name == $navigation->permission_name ? 'selected' : '' }} value="{{ $item->name }}">
                {{ $item->name }}</option>
        @endforeach
    </select>
    @error('permission_name')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ old('name') ?? $navigation->name }}" type="text" name="name" id="name" class="form-control"
                placeholder="Create new Post">
            @error('name')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="url">URL</label>
            <input value="{{ old('url') ?? $navigation->url }}" type="text" name="url" id="url" class="form-control"
                placeholder="posts/create">
            @error('url')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>

<button type="submit" class="btn btn-success">{{ $submit }}</button>
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#navigation-{{ $navigation->id }}">Delete</button>
