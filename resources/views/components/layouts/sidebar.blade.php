<div>
    @can('create post')
        <div class="mb-4">
            <small class="d-block text-secondary mb-2 text-uppercase">Posts</small>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    Create new post
                </a>
                <a href="#" class="list-group-item list-group-item-action">Data Table Post</a>
            </div>
        </div>
    @endcan

    @can('create category')
        <div class="mb-4">
            <small class="d-block text-secondary mb-2 text-uppercase">Categories</small>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    Create a Category
                </a>
                <a href="#" class="list-group-item list-group-item-action">Data Table Category</a>
            </div>
        </div>
    @endcan

    @can('show users')
        <div class="mb-4">
            <small class="d-block text-secondary mb-2 text-uppercase">Users</small>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    Create a User
                </a>
                <a href="#" class="list-group-item list-group-item-action">Data Table User</a>
            </div>
        </div>
    @endcan

    <div class="mb-4">
        <small class="d-block text-secondary mb-2 text-uppercase">Logout</small>

        <div class="list-group">
            <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>


</div>
