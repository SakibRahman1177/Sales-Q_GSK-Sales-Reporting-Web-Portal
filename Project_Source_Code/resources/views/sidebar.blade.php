<!--Main Navigation-->

<link rel="stylesheet" href="{{ asset('css/head.css') }}">
<link rel="stylesheet" href="{{ asset('css/collapsed.css') }}">
<header>
  <!-- Sidebar -->
  <nav
       id="sidebarMenu"
       class="collapse d-lg-block sidebar collapse bg-white"
       >
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           aria-current="true"
           >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i
            ><span>Main dashboard</span>
        </a>
        <a class="list-group-item list-group-item-action py-2 ripple"
           aria-current="true"
           data-mdb-toggle="collapse"
           aria-expanded="true"
           aria-controls="collapseExample1"
           href="#"
           >
          <i class="fas fa-chart-area fa-fw me-3"></i
            ><span>Brand Wise Sales</span>
        </a>
        <ul
            id="collapseExample1"
            class="collapse show list-group list-group-flush"
            >
          <li class="list-group-item py-1">
            <a href="" class="text-reset">Sensodyne</a>
          </li>
          <li class="list-group-item py-1">
            <a href="" class="text-reset">Paradontax</a>
          </li>
          <li class="list-group-item py-1">
            <a href="" class="text-reset">Eno</a>
          </li>
</ul>
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-lock fa-fw me-3"></i><span>Outlet Wise Sales</span></a
          >
          <ul
            id="collapseExample1"
            class="collapse show list-group list-group-flush"
            >
          <li class="list-group-item py-1">
            <a href="" class="text-reset">Area</a>
          </li>
</ul>
  
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           >
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>Chambers Location</span>
        </a>
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-globe fa-fw me-3"></i
          ><span>International</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-building fa-fw me-3"></i
          ><span>Partners</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-calendar fa-fw me-3"></i
          ><span>Calendar</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a
          >
      </div>
    </div>
  </nav>
  </header>
  <link rel="stylesheet" href="{{ asset('/css/head.js') }}">
  <script>
    // Graph
var ctx = document.getElementById("myChart");

var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ],
    datasets: [
      {
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: "transparent",
        borderColor: "#007bff",
        borderWidth: 4,
        pointBackgroundColor: "#007bff",
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: false,
          },
        },
      ],
    },
    legend: {
      display: false,
    },
  },
});
</script>