<link href="<?=BASE_URL?>/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<link href="<?=BASE_URL?>/css/plugins/dataTables/datatableCustom.css" rel="stylesheet">

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>
                    <small>Vendor</small><br>
                    Vendor</h2>
                </div>
                <div class="col-lg-4">
                    <div class="title-action">
                        <button id="btn-tambah-vendor" class="btn btn-primary btn-md dim pull-right"><i class="fa fa-plus m-r-sm"></i>Buat Vendor Baru</button>
                    </div>
                </div>
</div>

<div class="wrapper wrapper-content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ibox-title bg-warning">
                                        <h5> Penjualan Belum Dibayar (dalam IDR)<span class="label label-warning pull-right"> 0 </span></h5>                    
                                    </div>
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <small>Total</small>
                                                <h3 class="">Rp 0,0</h3>                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ibox-title bg-danger">
                                        <h5> Penjualan Jatuh Tempo (dalam IDR)<span class="label label-danger pull-right"> 0 </span></h5>                    
                                    </div>
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <small>Total</small>
                                                <h3 class="">Rp 0,0</h3>                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ibox-title bg-primary">
                                        <h5> Bayaran Diterima 30-Hari Terakhir (dalam IDR)<span class="label label-success pull-right"> 0 </span></h5>                    
                                    </div>
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <small>Total</small>
                                                <h3 class="">Rp 0,0</h3>                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">            
                                    <div class="wrapper wrapper-content animated fadeInRight">   
                                                <div class="ibox float-e-margins">
                                                    <div class="ibox-content">    
                                                    <h2 style="display: inline-block"> Daftar Vendor </h2>
                                                        <table class="dgvendor table-striped table-bordered" style="width:100%">
                                                            <thead class="table-header">
                                                                <tr>
                                                                    <th>ID</th> 
                                                                    <th>Kode</th> 
                                                                    <th>Nama</th>  
                                                                    <th>Bentuk</th>
                                                                    <th>Jenis</th>
                                                                    <th>NPWP</th>
                                                                    <th>Saldo(dalam IDR)</th>  
                                                                    <th>Edit</a></th>  
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
<script src="<?=BASE_URL?>/js/plugins/dataTables/datatables.min.js"></script>
<script src="<?=BASE_URL?>/js/plugins/dataTables/fixedColumns.js"></script>
<script src="<?=BASE_URL?>/js/redirect.js"></script>

<script type="text/javascript">
        $(document).ready(function () {
            $('.dgvendor').DataTable({dom: '<"html5buttons"<"btn-cetak"B>>lTfgitp',
                            buttons: ['excel'],
                "ordering": false,
                "ajax": {
                    "type": "POST",
                    "url": "lihatvendor",
                    "contentType": "application/json; charset=utf-8"

                }, "columns": [
                      { data: "id", visible: false }, 
                      { data: "kode" }, 
					  { data: "nama" }, 
					  { data: "Bentuk", "sClass": "text-center" }, 
					  { data: "Jenis", "sClass": "text-center" }, 
					  { data: "npwp", "sClass": "text-center" }, 
					  { data: "saldo", "sClass": "text-center" }
                        , {
                            "data": null,
                            "width": "100px",
                            "sClass": "text-center",
                            "orderable": false,
                            "mRender": function (data, type, row) {
                                var url;
                                url = '/MasterData/Transaksi/editvendor' + '?id=' + row.id + '&nama=' + row.nama;
                                return '<a href="' + url + '" title="Edit Akun"><img src="../../Images/edit.png"></a>';
                            }
                        }
                    ]
            });

            $('#btn-tambah-vendor').on('click', function (b) {
                var return_url = "master_vendor"; 
                $.redirect('MasterData/tambah_vendor',{ return_url:return_url}, "POST", null, true);                              
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            var bodys = $('body');
            bodys.addClass('fixed-sidebar');
            $('.sidebar-collapse').slimScroll({
                height: '100%',
                railOpacity: 0.9
            });

            var username = "120220057";

            $('#spesial_link').on('click', function (e) {                
                $.ajax({
                    //contentType: 'application/json;',
                    dataType: 'html',
                    type: 'POST',
                    url: '/Pages/GotoPresensi',
                    data: { nip: username},
                    success: function (result) {  
                        console.log(result);               
                        if (JSON.parse(result).status == "sukses") {
                            window.location.href = JSON.parse(result).url;
                        }                        
                    }
                });
                
                e.preventDefault();
            });
        });
    </script>
