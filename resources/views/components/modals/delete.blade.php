@props(['id', 'title' => 'Are you sure?', 'message', 'action', 'buttonText' => 'Delete'])

<div class="modal modal-blur fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body py-4 text-center">
        <x-tabler-alert-triangle class="icon text-danger icon-lg mb-2" />
        <h3>{{ $title }}</h3>
        <div class="text-secondary">{{ $message }}</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col">
              <button type="button" class="btn w-100" data-bs-dismiss="modal">Cancel</button>
            </div>
            <div class="col">
              <form method="POST" action="{{ $action }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger w-100">{{ $buttonText }}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
