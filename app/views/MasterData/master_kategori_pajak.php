<link href="<?=BASE_URL?>/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<link href="<?=BASE_URL?>/css/plugins/dataTables/datatableCustom.css" rel="stylesheet">
<link href="<?=BASE_URL?>/css/plugins/datapicker/datepicker3.css" rel="stylesheet"/>
<link href="<?=BASE_URL?>/css/plugins/select2/select2.min.css" rel="stylesheet"/>
<link href="<?=BASE_URL?>/css/plugins/jasny/jasny-bootstrap.css" rel="stylesheet"/>
<link href="<?=BASE_URL?>/css/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>
<link href="<?=BASE_URL?>/css/plugins/jquery-confirm/jquery-confirm.css" rel="stylesheet"/>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>
        <small>Master Kategori Pajak</small><br>
                Master Kategori Pajak</h2>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
                                        <div class="row">               
                                            <div class="col-lg-12">
                                                <div class="ibox float-e-margins">
                                                    <div class="ibox-content">
                                                        <form class = "form-horizontal">                                 
                                                            <div class="pull-left col-sm-12" style="padding-left: 10px;">                                  
                                                            <div class="row form-group">
                                                                <label class="col-sm-2 control-label text-right">Kode :</label>
                                                                    <div class="col-lg-1"> 
                                                                         <input class="form-control input-sm" id="kode" name="kode" placeholder="" required="" type="text" value="" />
                                                                    </div>
                                                                </div>
                                                                 <div class="row form-group">
                                                                <label class="col-sm-2 control-label text-right">Nama :</label>
                                                                    <div class="col-lg-4"> 
                                                                         <input class="form-control input-sm" id="nama" name="nama" placeholder="" required="" type="text" value="" />
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                <label class="col-sm-2 control-label text-right">Tarif :</label>
                                                                <div class="col-lg-1">                                            
                                                                     <input class="form-control input-sm" id="Tarif" name="Tarif" placeholder="" required="" type="text" value="" />                                          
                                                                </div>
                                                                  <label>%</label>
                                                            </div>  
                                                             <div class="row form-group">
                                                              <label class="col-sm-2 control-label text-right">Jenis :</label>
                                                                              <div class="col-lg-2">
                                                                                 <select class="form-control input-sm" id="Jenis" name="Jenis" placeholder=""><option value="Penjualan">Penjualan</option>
                                                                                        <option value="Pembelian">Pembelian</option>
                                                                                </select>  
                                                                            </div> 
                                                             </div>
                                                             <div class="row form-group"> 
                                                             <label class="col-sm-2 control-label"></label>
                                                              <div class="col-lg-2">                                        
                                                               <button type="button" class="btn btn-info" id="simpan">Simpan</button> 
                                                              <button type="button" class="btn btn-info" id="lihat">Lihat</button>                                                                                           
                                                              </div> 
                                                              </div>                                   
                                                            </div> 
                                                        </form> 
                                                         <h2 style="display: inline-block"> Daftar Pajak</h2> 
                                                         <table class="dgpajak table-striped table-bordered" style="width:100%">
                                                            <thead class="table-header">
                                                                <tr>
                                                                    <th>ID</th> 
                                                                    <th>Kode</th>  
                                                                    <th>Nama</th>
                                                                    <th>Tarif (%)</th> 
                                                                    <th>Jenis</th>                                              
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

<script async src="https://www.googletagmanager.com/gtag/js?id=G-3GVVLQKP3R"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-3GVVLQKP3R');
</script>
<script src="<?=BASE_URL?>/js/plugins/dataTables/datatables.min.js"></script>
<script src="<?=BASE_URL?>/js/plugins/datapicker/bootstrap-datepicker.js"></script>

<script src="<?=BASE_URL?>/js/plugins/select2/select2.full.min.js"></script>
<script src="<?=BASE_URL?>/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="<?=BASE_URL?>/js/plugins/jasny/jasny-bootstrap.js"></script>
<script src="<?=BASE_URL?>/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?=BASE_URL?>/js/plugins/jquery-confirm/jquery-confirm.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
         $('#Jenis').select2(); 
               $('#simpan').on('click',function(){

               if($('#kode').val()=='')
	                {
                        $('#kode').select();
                         $.alert({
                            title: 'Informasi',
                            content: 'Kode di isi!',
                            type:"red"
                        });		               
		                return false;
	                }
                    if($('#nama').val()=='')
	                {
                        $('#nama').select();
                         $.alert({
                            title: 'Informasi',
                            content: 'Nama harus di isi!',
                            type:"red"
                        });		               
		                return false;
	                }
                    if($('#Tarif').val()=='')
	                {
                        $('#Tarif').select();
                         $.alert({
                            title: 'Informasi',
                            content: 'Tarif harus di isi!',
                            type:"red"
                        });		               
		                return false;
	                }

                    var kode =  $('#kode').val();                    
                    var nama =  $('#nama').val(); 
                    var Tarif =  $('#Tarif').val();  
                    var Jenis =  $('#Jenis').val();
                var data = JSON.stringify({'kode':kode ,'nama':nama ,'Tarif':Tarif,'Jenis':Jenis});                   
                    $.confirm({
                        title: 'Konfirmasi',
                        content: 'Simpan Kategori Pajak Baru ?',    
                        type: 'blue',
                        buttons: {
                            Batal: function () {
                            },
                            Ya: {
                                text: 'Ya',
                                btnClass: 'btn-blue',
                                action: function(){
                                    $.ajax({
                                        contentType: 'application/json; charset=utf-8',
                                        dataType: 'json',
                                        type: 'POST',
						                url: "/MasterData/Transaksi/simpanpajak",
						                data: data,
						                success: function (result) {
                                            if(result.status == 1)
                                            {
                                                    $.alert({
                                                        title: 'Informasi',
                                                        content: result.msg,
                                                        type:"blue",
                                                        buttons:{
                                                            Ok:function(){
                                                                location.href = result.url;
                                                            }
                                                        }
                                                    });
                                             }
                                            else
                                            {
                                                 $.alert({
                                                        title: 'Informasi',
                                                        content: result.msg,
                                                        type:"red"
                                                    });
                                            }                                          
                                        }
                                    });
                                }
                            }
                        }
                    });
            });        

             $('#lihat').on('click',function(){
                   BindTable();
                 });
           
          function BindTable()
          {
            $('.dgpajak').DataTable({
                "ordering": false,
                "ajax": {
                    dataType: 'json',
                    "type": "POST",
                    "url": "<?=BASE_URL?>/MasterData/da_get_data_pajak",
                    "contentType": "application/json; charset=utf-8"
                    
                }, "columns": [
                      { data: "id", visible: false }, { data: "kode_pajak", "sClass": "text-center" }, { data: "nama_pajak"}, { data: "tarif", "sClass": "text-center" }, { data: "jenis_transaksi", "sClass": "text-center" }
                        , {
                            "data": null,
                            "width": "100px",
                            "sClass": "text-center",
                            "orderable": false,
                            "mRender": function (data, type, row) {
                                var url;
                                url = '/MasterData/Transaksi/editpajak' + '?id=' + row.id;
                                return '<a href="' + url + '" title="Edit Akun"><img src="<?=BASE_URL?>/Img/edit.png"></a>';
                            }
                        }
                    ]
            });                        
          }     
                       
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