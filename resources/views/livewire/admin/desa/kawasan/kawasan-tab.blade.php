<div wire:ignore.self class="tab-pane fade show profile-edit pt-3" id="kawasan-tab">
  <h5 class="card-title">Desa Kawasan</h5>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-create-bumdes"
    wire:click='resetField'>
    <i class="bi bi-plus-lg"></i> Desa
  </button>

  <!-- Table with hoverable rows -->
  {{-- @if ($bumdeses->count() > 0) --}}
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" style="white-space: nowrap">No</th>
          <th scope="col" style="white-space: nowrap">Kategori</th>
          <th scope="col" style="white-space: nowrap">Desa</th>
          <th scope="col" style="white-space: nowrap">nama kawasan</th>
          <th scope="col" style="white-space: nowrap">foto</th>
          <th scope="col" style="white-space: nowrap">Deskripsi</th>
          <th scope="col" style="white-space: nowrap">Action</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($bumdeses as $bumdes) --}}
        <tr>
          <th scope="row" style="white-space: nowrap" class="text-center">1</th>
          <td style="white-space: nowrap">x</td>
          <td style="white-space: nowrap">x</td>
          <td style="white-space: nowrap">x</td>
          <td style="white-space: nowrap">x</td>
          <td style="white-space: nowrap">x</td>
          <td style="white-space: nowrap">
            <span wire:click='setField(x)' class="badge bg-warning text-white" data-bs-toggle="modal"
              data-bs-target="#modal-edit-bumdes" style="cursor: pointer">
              <i class="bi bi-pencil-square"></i>
            </span>
            <span wire:click='setField(x)' class="badge bg-danger" data-bs-toggle="modal"
              data-bs-target="#modal-delete-bumdes" style="cursor: pointer">
              <i class="bi bi-trash"></i>
            </span>
          </td>
        </tr>
        {{-- @endforeach --}}
      </tbody>
    </table>
  </div>
  {{-- @else --}}
  <h4 class="text-center">
    Kategori Belum Ditambahkan
  </h4>
  {{-- @endif --}}
  <!-- End Table with hoverable rows -->
</div>
