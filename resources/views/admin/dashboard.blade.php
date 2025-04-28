@extends('admin.layout')

@section('content')
  <div class="container-fluid">
    <h2>Tableau de bord</h2>
    <h5 class="pb-3">Bienvenue sur votre tableau de bord d'administration</h5>
  <div class="row">
    <!-- Agencies Card 1 -->
    <div class="col-xl-3 col-sm-6 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold py-3">Agences</p>
                <h5 class="font-weight-bolder mb-0">{{ $agenciesCount }}</h5>
                <p><span class="text-success">+35% </span>than last week</p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="material-icons opacity-10">business</i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Offers Card 2 -->
    <div class="col-xl-3 col-sm-6 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold py-3">Offres</p>
                <h5 class="font-weight-bolder mb-0">{{ $productsCount }}</h5>
                <p><span class="text-success">+60% </span>than last week</p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                <i class="material-icons opacity-10">inventory_2</i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Agencies Card 3 (duplicate) -->
    <div class="col-xl-3 col-sm-6 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold py-3">Agences</p>
                <h5 class="font-weight-bolder mb-0">{{ $agenciesCount }}</h5>
                <p><span class="text-success">+40% </span>than last week</p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="material-icons opacity-10">business</i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Offers Card 4 (duplicate) -->
    <div class="col-xl-3 col-sm-6 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold py-3">Offres</p>
                <h5 class="font-weight-bolder mb-0">{{ $productsCount }}</h5>
                <p><span class="text-success">+55% </span>than last week</p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                <i class="material-icons opacity-10">inventory_2</i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


{{-- Ligne Chart --}}
<div class="row mt-2 border-radius-lg p-3">
  <div class="col-12">
    <div class="card">
      <div class="card-header pb-0">
        <h6>Évolution Annuelle</h6>
      </div>
      <div class="card-body py-1 px-3">
        {{-- on force 100px de haut ici --}}
        <div class="chart" style="height: 400px; position: relative;">
          <canvas id="lineChart"></canvas>
        </div>
      </div>
    </div>
  </div>


  {{-- after the line chart --}}
    <div class="row mt-4">
      <div class="col-12">
        <div class="card ">
          <div class="card-header pb-0">
            <h6>Activités récentes</h6>
          </div>
          <div class="card-body p-3">
            <ul class="list-group">
              @foreach($recentActivities as $act)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                    <strong>{{ ucfirst($act->activity_type) }}</strong>
                    {{ $act->entity_type }}:
                    <em>{{ $act->entity_name }}</em>
                  </div>
                  <span class="text-secondary text-xs">
                    {{ $act->created_at->format('d/m H:i') }}
                  </span>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

@endsection

@push('scripts')
<script>
  const ctx = document.getElementById('lineChart').getContext('2d');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: @json($months),
      datasets: [
        {
          label: 'Agences créées',
          data: @json($agencyCounts),
          borderColor: '#4e73df',
          backgroundColor: 'rgba(78,115,223,0.2)',
          fill: true,
          tension: 0.3
        },
        {
          label: 'Offres créées',
          data: @json($productCounts),
          borderColor: '#1cc88a',
          backgroundColor: 'rgba(28,200,138,0.2)',
          fill: true,
          tension: 0.3
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false, // <— important
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
</script>
@endpush
