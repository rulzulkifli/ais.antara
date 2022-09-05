<link href="<?=BASE_URL;?>/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2><small>GL</small><br>Daftar Jurnal Eliminasi</h2>
    </div>
    <div class="col-lg-4 b-r-sm m-t-lg">
        <a class="btn btn-primary dim pull-right" href="/GL/Transaksi/jurnal_eliminasi"><i class="fa fa-plus m-r-sm"></i>Buat Jurnal Umum</a>
    </div>
</div>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li><a class="nav-link" href="<?=BASE_URL?>/keuangan/daftar_jurnal_umum">Jurnal Umum</a></li>
                    <li><a class="nav-link" href="<?=BASE_URL?>/keuangan/daftar_jurnal_penyesuaian">Jurnal Penyesuaian</a></li>
                    <li><a class="nav-link active" data-toggle="tab" href="#tab-1">Eliminasi</a></li>
                    <li><a class="nav-link" href="<?=BASE_URL?>/keuangan/daftar_jurnal_konsolidasi">Konsolidasi</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <table class="dt-jurnal table table-striped table-bordered" style="width:100%">
                                <thead class="table-header">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Kode Jurnal</th>
                                        <th>Keterangan</th>
                                        <th>Mata Uang</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
<script src="<?=BASE_URL?>/js/plugins/dataTables/datatables.min.js"></script>
<script>
    $(document).ready(function(){
        $('.dt-jurnal').DataTable({
            "pageLength": 10,
            "ordering": false,
            "processing": true,
            "serverSide": true,
            "ajax": {
               // contentType: 'application/json; charset=utf-8',
                //dataType: 'json',
                type: 'POST',
                url :"<?=BASE_URL?>/Keuangan/da_get_data_jurnal_umum",
                data:{jenis:"ELIM", kode_jurnal:"", keterangan:""}
            },
            "dom": '<"top">rt<"bottom"ip><"clear">',
            "columns":[ {data:"id"}, { data: "tanggal" }, {data:"kode_jurnal"}, {data:"keterangan"}, {data:"mata_uang"}, { data: "total" }],
            "columnDefs": [
                {
                    targets:[0], "className":"text-center",
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1 ;
                    }
                },
                {
                    targets:[1],
                    render:function(data, type, row, meta){
                        var d = new Date(data);
                        var date = d.getDate();
                        var month = d.getMonth(); //Be careful! January is 0 not 1
                        var year = d.getFullYear();

                        return year + "/" +(month + 1) + "/" + date;
                    }
                },
                {
                    targets:[2], "className":"text-center",
                    render: function (data, type, row, meta) {
                        return '<a href="">'+data+'</a>';
                    }
                },
                {
                    targets:[1,4],
                    "className":"text-center"
                },
                /*{
                    targets:[5], "className":"text-right",
                    render: function (data, type, row, meta) {
                        return reformat(data , row.mata_uang);
                    }
                },*/
            ],
            "language": {
                "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ transaksi",
                "sInfoEmpty":"",
                "emptyTable": "<div class='m-t-md'>Anda belum memiliki transaksi</div>",
                "processing":"<img src='/Images/loadcolor.gif'  width='50px'/>Loading ..."
            },
            "paginate": {
                "first":      "Pertama",
                "last":       "Terakhir",
                "next":       "Selanjutnya",
                "previous":   "Sebelumnya"
            }
        });
    });
</script>