@if (session()->has('success'))
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-body d-flex justify-content-between text-white fw-bold"
        style="background: rgb(167, 255, 167); border-radius: 5px">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
@elseif (session()->has('failed'))
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body d-flex justify-content-between text-white fw-bold"  style="background: rgb(255, 167, 167); border-radius: 5px">
      {{ session('failde') }}

      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>
@endif
