<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<div id="sidebar-overlay"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
{{-- <!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script> --}}
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
{{-- <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> --}}
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/js/select2.min.js"></script>
<script src="/js/jquery.mask.min.js"></script>
<script src="/js/jquery.sparkline.min.js"></script>
<script src="/js/jquery.steps.min.js"></script>
<script src="/js/select2.min.js"></script>
<script src="/js/jquery.timepicker.js"></script>

<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
{{-- <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script> --}}

<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
{{-- Datatables --}}
<script src="/js/datatables/jquery.dataTables.min.js"></script>
<script src="/js/datatables/dataTables.bootstrap4.min.js"></script>
<!-- sweetalert -->
<script src="/js/sweetalert2.all.min.js"></script>


<script>
    $(".so_nota").hide();
    $(".nota_idade").hide();
    $(".so_idade").hide();
    $(".intervalo_de_idade").hide();
    $(".intervalo_de_idade_nota").hide();

    $('#tipo_filtro').change(function() {
        if ($('#tipo_filtro').val() == "1") {
            $(".so_nota").show();
        } else {
            $(".so_nota").hide();
        }

        if ($('#tipo_filtro').val() == "2") {
            $(".so_idade").show();
        } else {
            $(".so_idade").hide();
        }

        if ($('#tipo_filtro').val() == "3") {
            $(".nota_idade").show();
        } else {
            $(".nota_idade").hide();
        }
        if ($('#tipo_filtro').val() == "4") {
            $(".intervalo_de_idade").show();
        } else {
            $(".intervalo_de_idade").hide();
        }
        if ($('#tipo_filtro').val() == "5") {
            $(".intervalo_de_idade_nota").show();
        } else {
            $(".intervalo_de_idade_nota").hide();
        }
    });
</script>






<script>
   

    cb(start, end);
    $('.input-placeholder').mask("00/00/0000", {
        placeholder: "__/__/____"
    });
    $('.input-zip').mask('00000-000', {
        placeholder: "____-___"
    });
    $('.input-money').mask("#.##0,00", {
        reverse: true
    });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/,
                optional: true
            }
        },
        placeholder: "___.___.___.___"
    });
    
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script>
    console.log("Entrada")
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "order": [
                [0, 'desc']
            ]
        });
    });
</script>

@if (session('permissao'))
    <script>
        Swal.fire(
            'Você não tem permissão para acessar essa aba',
            '',
            'error'
        )
    </script>
@endif













</body>

</html>
