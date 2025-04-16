<script>
    
    function changepost(id){
      if($('#'+id).hasClass('fa-chevron-down')){
        $('#'+id).removeClass('fa-chevron-down').addClass('fa-chevron-up');
      }else{
        $('#'+id).removeClass('fa-chevron-up').addClass('fa-chevron-down');
      }
    }
    
    // Toggle Script
    const toggleBtn = document.getElementById('toggleSidebarBtn');
    const app = document.getElementById('app');

    toggleBtn.addEventListener('click', () => {
      app.classList.toggle('sidebar-collapsed');
    });
</script>


@include('layouts.chart.chart1')
@include('layouts.chart.chart2')