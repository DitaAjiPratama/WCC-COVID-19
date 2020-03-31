</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white d-print-none">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <!-- <span>Copyright &copy; Your Website 2019</span> -->
      <span><a href="https://widuricomputercommunity.com" target="_blank">Widuri Computer Community</a> - <a href="LICENSE.txt" target="_blank">Copyright (c) 2020 WCC</a></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

</body>

</html>

<!-- scrpit charts  -->

<?php $data_jakarta = mysqli_query($con, "SELECT positif, sembuh, meninggal FROM provinsi WHERE nama='Jakarta'"); ?>
<script  type="text/javascript">
  var ctx = document.getElementById("piechart").getContext("2d");
  var data = {
            labels: ["Positif","Sembuh","Meninggal"],
            datasets: [
            {
              label: 'Chart COVID-19',
              data: [<?php while ($p = mysqli_fetch_array($data_jakarta)) { echo '"' . $p['positif'] . '","' . $p['sembuh'] . '","' . $p['meninggal'] . '"';}?>],
              backgroundColor: [
                '#57C4ED',
                '#79CAC5',
                '#4A4A4A'
                  ]
            }
            ]
            };

  var myPieChart = new Chart(ctx, {
                  type: 'pie',
                  data: data,
                  options: {
                    legend: {
                        fontColor: "white"
                    },
                    responsive: true
                }
              });

</script>

<!-- end script -->
