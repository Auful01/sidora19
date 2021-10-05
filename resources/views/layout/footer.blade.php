    <!-- footer -->
    <script src="{{url('dashboard/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{url('dashboard/js/bootstrap.min.js')}}"></script>
    <script src="{{url('dashboard/js/chart.min.js')}}"></script>
    <script src="{{url('dashboard/js/chart-data.js')}}"></script>
    <script src="{{url('dashboard/js/easypiechart.js')}}"></script>
    <script src="{{url('dashboard/js/easypiechart-data.js')}}"></script>
    <script src="{{url('dashboard/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('dashboard/js/custom.js')}}"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js "></script>
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        window.onload = function () {
    var chart1 = document.getElementById("line-chart").getContext("2d");
    window.myLine = new Chart(chart1).Line(lineChartData, {
    responsive: true,
    scaleLineColor: "rgba(0,0,0,.2)",
    scaleGridLineColor: "rgba(0,0,0,.05)",
    scaleFontColor: "#c5c7cc"
    });
};
$(document).ready(function() {
    $('#tableok').DataTable();
} );

$(document).ready(function() {
    $('#myTable').DataTable();
} );
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
    </script>

    <script>
        $(document).ready(function(){
            $('.btn-modal-editRs').on('click',function(){
                let id = $(this).data('kode');
                let nm = $(this).data('nama');
                let almt = $(this).data('alamat');
                let wa = $(this).data('wa');
                let tel = $(this).data('telp');
                let em = $(this).data('email');
                let op = $(this).data('opr');
                let map = $(this).data('maps');
                let url = $(this).data('url');
                $('.nama').val(nm);
                $('.alamat').val(almt);
                $('.wa').val(wa);
                $('.email').val(em);
                $('.telepon').val(tel);
                $('.opr').val(op);
                $('.maps').val(map);
                $('.url').attr('action', url);
            })
        })

        $(document).ready(function(){
            $('.btn-modal-detailRs').on('click',function(){
                let id = $(this).data('kode');
                let nm = $(this).data('nama');
                let almt = $(this).data('alamat');
                let wa = $(this).data('wa');
                let tel = $(this).data('telp');
                let em = $(this).data('email');
                let op = $(this).data('opr');
                let map = $(this).data('maps');
                let url = $(this).data('url');
                $('.nama').html(nm);
                $('.alamat').html(almt);
                $('.wa').html(wa);
                $('.email').html(em);
                $('.telepon').html(tel);
                $('.opr').html(op);
                $('.maps').attr('href', map);
                $('.url').attr('action', url);
            })
        })

        $(document).ready(function(){
            $('.province').on('change', function(){
                let id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url : '/regency/'+id,
                    dataType : "json",
                    success:function(data){
                        let code = "";
                        console.log(data, id);
                        $('.regency').empty();
                        data.forEach(element => {
                            $('.regency').append('<option value="'+ element.id+'">'+ element.name +'</option>');
                        });
                    }
                })
            })
        })

        $(document).ready(function(){
            $('.regency').on('change', function(){
                let id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url : '/district/'+id,
                    dataType : "json",
                    success:function(data){
                        let code = "";
                        console.log(data, id);
                        $('.district').empty();
                        data.forEach(element => {
                            $('.district').append('<option value="'+ element.id+'">'+ element.name +'</option>');
                        });
                    }
                })
            })
        })

        $(document).ready(function(){
            $('.district').on('change', function(){
                let id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url : '/village/'+id,
                    dataType : "json",
                    success:function(data){
                        let code = "";
                        console.log(data, id);
                        $('.village').empty();
                        data.forEach(element => {
                            $('.village').append('<option value="'+ element.id+'">'+ element.name +'</option>');
                        });
                    }
                })
            })
        })
    </script>
