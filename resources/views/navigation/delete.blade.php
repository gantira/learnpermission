<!-- Modal -->
<div class="modal fade" id="navigation-{{ $navigation->id }}" tabindex="-1" role="dialog"
    aria-labelledby="navigation-{{ $navigation->id }}Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Are You Sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    {{ $navigation->name }} - <a href="{{ url($navigation->url) }}">{{ $navigation->url }}</a>
                </div>
                <div class="row justify-content-between">
                    <form action="{{ route('navigation.delete', $navigation) }}" method="post"
                        id="delete-{{ $navigation->id }}">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
                <div class="d-flex">
                    <button type="button" class="btn btn-danger w-50"
                        onclick="event.preventDefault();getElementById('delete-{{ $navigation->id }}').submit();">Yes</button>
                    <div class="mx-1"></div>
                    <button type="button" class="btn btn-secondary w-50" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
