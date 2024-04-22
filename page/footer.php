</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ilham Hidayatullah 2024</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js"></script>
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/js/demo/chart-area-demo.js"></script>
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/js/demo/chart-pie-demo.js"></script>
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/js/demo/datatables-demo.js"></script>
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/vendor/sweetalert2/sweetalert2.min.js"></script>
<script src="../vendor/startbootstrap-sb-admin-2-gh-pages/vendor/sweetalert2/jsku.js"></script>

<script>
//ambil data dari tombol edit

$(document).on("click", "#editbuttonuser", function() {
    let id = $(this).data('id');
    let username = $(this).data('username');
    let level = $(this).data('level');
    let status = $(this).data('status');

    $(" .modal-body #id").val(id);
    $(" .modal-body #username").val(username);
    $(" .modal-body #level").val(level);
    if (status === "aktif") {
        $("#flexRadioDefault1").prop("checked", true);
    } else {
        $("#flexRadioDefault2").prop("checked", true);
    }
});
</script>



</body>

</html>