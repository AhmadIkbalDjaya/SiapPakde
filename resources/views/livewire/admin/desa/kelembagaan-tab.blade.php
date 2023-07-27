<div wire:ignore.self class="tab-pane fade pt-3" id="kelembagaan-desa">
  <h5 class="card-title">Kelembagaan Desa</h5>
  {{-- tabs kelembagaan --}}
  <ul class="nav nav-tabs nav-tabs-bordered px-3 justify-content-between">

    <li class="nav-item">
      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#bpd-desa">BPD</button>
    </li>

    <li class="nav-item">
      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#pkk-desa">PKK</button>
    </li>

    <li class="nav-item">
      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#posyandu-desa">Posyandu</button>
    </li>

    <li class="nav-item">
      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kpm-desa">KPM</button>
    </li>

    <li class="nav-item">
      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#karang-taruna-desa">Karang
        Taruna</button>
    </li>

    <li class="nav-item">
      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#lpm-desa">LPM</button>
    </li>

  </ul>

  <div class="tab-content pt-2">

    {{-- Tab BPD  --}}
    <livewire:admin.desa.kelembagaan.bpd-tab :desa="$desa" />
    {{-- End Tab BPD  --}}

    {{-- Tab PKK  --}}
    <livewire:admin.desa.kelembagaan.pkk-tab :desa="$desa" />
    {{-- End Tab PKK  --}}

    {{-- Tab posyandu  --}}
    <livewire:admin.desa.kelembagaan.posyandu-tab :desa="$desa" />
    {{-- End Tab posyandu  --}}

    {{-- Tab kpm  --}}
    <livewire:admin.desa.kelembagaan.kpm-tab :desa="$desa" />
    {{-- End Tab kpm  --}}

    {{-- Tab karang-taruna  --}}
    <livewire:admin.desa.kelembagaan.karang-taruna-tab :desa="$desa" />
    {{-- End Tab karang-taruna  --}}

    {{-- Tab lpm  --}}
    <livewire:admin.desa.kelembagaan.lpm-tab :desa="$desa" />
    {{-- End Tab lpm  --}}

  </div>

</div>
