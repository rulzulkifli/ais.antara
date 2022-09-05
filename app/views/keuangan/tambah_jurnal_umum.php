<link href="<?=BASE_URL?>/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<link href="<?=BASE_URL?>/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="<?=BASE_URL?>/css/plugins/select2/select2.min.css" rel="stylesheet">
<link href="<?=BASE_URL?>/css/plugins/select2/select2-bootstrap4.min.css" rel="stylesheet">

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2><small>GL</small><br>Tambah Jurnal Umum</h2>
    </div>
    <div class="col-lg-4 b-r-sm m-t-lg">
        
    </div>
</div>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Horizontal form</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        
                    </div>
                </div>
                <div class="ibox-content">
                    <form role="form">
                        <div class="row m-b-sm">
                            <div class="col-lg-4">
                                <div class="form-group" id="data_1">
                                    <label class="font-normal">Tanggal Transaksi</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" name="tanggal" class="form-control" >
                                    </div>
                                </div>                  
                                <div class="form-group">
                                    <label class="font-normal">Keterangan</label> 
                                    <div class="">
                                        <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="font-normal">Mata Uang</label> 
                                    <div class="">
                                        <select id="matauang" class="form-control">
                                            <option value="IDR">Indonesia Rp</option>
                                            <option value="USD">US Dolar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-normal">Tags</label> 
                                    <div class="">
                                        <input name="tags" id="tags" class="form-control" style = "width:100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=BASE_URL?>/js/plugins/datapicker/bootstrap-datepicker.min.js"></script>
<script src="<?=BASE_URL?>/js/plugins/dataTables/datatables.min.js"></script>
<script src="<?=BASE_URL?>/js/plugins/select2/select2.full.min.js"></script>

<script>
        $(document).ready(function () {

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                dateformat: 'yy/mm/dd'
            }).datepicker('setDate','today');

            
            $('#matauang').select2();
        });
</script>
