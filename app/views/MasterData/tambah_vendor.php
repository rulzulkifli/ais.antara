<style>
        .select2-dropdown
        {
            z-index:9999;
        }
        
        .alamat-tagih2, .alamat-tagih3
        {
            display:none;
        }
</style>

<link href="<?=BASE_URL?>/css/plugins/select2/select2.min.css" rel="stylesheet">
<link href="<?=BASE_URL?>/css/plugins/select2/select2-bootstrap4.min.css" rel="stylesheet">
<link href="<?=BASE_URL?>/css/plugins/steps/jquery.steps.css" rel="stylesheet"/>
<link href="<?=BASE_URL?>/css/plugins/jquery-confirm/jquery-confirm.css" rel="stylesheet"/>


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>
        <small>Pembelian</small><br>
        Tambah Vendor</h2>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight" style="margin-left: 10px; margin-right: 10px;">
                    <div class="row">
                        <div class="ibox col-md-12">
                            <div class="ibox-content">
                                <form  id="form-vendor" role="form"  class="wizard-big">
                                    <h1>Data Umum</h1>
                                    <fieldset style="position: relative;!important">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="font-normal">Bentuk</label> 
                                                        <div>
                                                            <select id="bentuk" class="form-control required" style="width:100%">
                                                                <option value="">Pilih Bentuk Usaha</option>
                                                                    <option value="Perusahaan">Perusahaan</option>   
                                                                    <option value="Perorangan">Perorangan</option>   
                                                                    <option value="Agen">Agen</option>   
                                                            </select>
                                                        </div>
                                                    </div>          
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="font-normal">Jenis</label>
                                                        <div>
                                                            <select id="jenis" class="form-control required" style="width:100%">
                                                                <option value="">Pilih Jenis Usaha</option>
                                                                    <option value="Swasta">Swasta</option>   
                                                                    <option value="BUMN">BUMN</option>   
                                                                    <option value="Pemerintahan">Pemerintahan</option>   
                                                                    <option value="NGO">NGO</option>   
                                                                    <option value="Yayasan">Yayasan</option>   
                                                                    <option value="BUT">BUT</option>   
                                                                    <option value="PMA">PMA</option>   
                                                                    <option value="KSO">KSO</option>   
                                                                    <option value="Koperasi">Koperasi</option>   
                                                                    <option value="Karyawan">Karyawan</option>   
                                                                    <option value="Non Karyawan">Non Karyawan</option>   
                                                                    <option value="Luar Negeri">Luar Negeri</option>   
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                            <label class="font-normal">Nama</label>
                                                            <div>
                                                                <input class="form-control input-sm required" id="nama" name="nama" style="width:100%;" type="text" value="" />
                                                            </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-lg-7">
                                                            <label class="font-normal">NPWP</label>
                                                            <div>
                                                                <input class="form-control input-sm required" id="npwp" name="npwp" style="width:50%;" type="text" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-lg-5 hidden" id="nik-container">
                                                            <label class="font-normal">NIK</label>
                                                            <div>
                                                                <input class="form-control input-sm" id="nik" name="nik" type="text" value="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="font-normal">Kontak</label>
                                                        <div>
                                                            <input class="form-control input-sm" id="kontak" name="kontak" type="text" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="font-normal">Telepon</label>
                                                        <div>
                                                            <input class="form-control input-sm" id="telepon" name="telepon" type="text" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="font-normal">Email</label>
                                                        <div>
                                                            <input class="form-control input-sm" id="email" name="email" type="text" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="font-normal">Website</label>
                                                        <div>
                                                            <input class="form-control input-sm" id="web" name="web" type="text" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group alamat">
                                                <label class="font-normal">Domisili</label>
                                                <div>
                                                    <textarea class="form-control input-sm required" cols="20" id="domisili" name="domisili" rows="2" style="width:100%;">
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group alamat">
                                                <label class="font-normal">Alamat Pajak</label>
                                                <span class="pull-right text-success">
                                                    <small><a class="idem">Sama dengan domisili</a> | <a title="Hapus alamat" class="hapus-alamat">x</a></small>
                                                    </span>
                                                <div>
                                                    <textarea class="form-control input-sm" cols="20" id="alamat-pajak" name="alamat-pajak" rows="2" style="width:100%;">
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group alamat">
                                                <label class="font-normal">Alamat Pengiriman</label><span class="pull-right text-success">
                                                <small><a class="idem">Sama dengan domisili</a> | <a title="Hapus alamat" class="hapus-alamat">x</a></small>
                                                </span>
                                                <div>
                                                    <textarea class="form-control input-sm" cols="20" id="alamat-pengiriman" name="alamat-pengiriman" rows="2" style="width:100%;">
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group alamat">
                                                <label class="font-normal">Alamat Penagihan</label><span class="pull-right text-success">
                                                <small><a class="idem">Sama dengan domisili</a> | <a class="tambah-alamat-tagih2">+</a> | <a title="Hapus alamat" class="hapus-alamat">x</a></small>
                                                </span>
                                                <div>
                                                    <textarea class="form-control input-sm" cols="20" id="alamat-penagihan1" name="alamat-penagihan1" rows="2" style="width:100%;">
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="alamat-tagih2">
                                                <div class="form-group alamat">
                                                    <label class="font-normal">Alamat Penagihan 2</label><span class="pull-right text-success">
                                                    <small><a class="idem">Sama dengan domisili</a> | <a class="tambah-alamat-tagih3">+</a> | <a title="Hapus alamat" class="hapus-alamat">x</a></small>
                                                    </span>
                                                    <div>
                                                        <textarea class="form-control input-sm" cols="20" id="alamat-penagihan2" name="alamat-penagihan2" rows="2" style="width:100%;">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alamat-tagih3">
                                                <div class="form-group alamat">
                                                    <label class="font-normal">Alamat Penagihan 3</label><span class="pull-right text-success">
                                                    <small><a class="idem">Sama dengan domisili</a> | <a title="Hapus alamat" class="hapus-alamat">x</a></small>
                                                    </span>
                                                    <div>
                                                        <textarea class="form-control input-sm" cols="20" id="alamat-penagihan3" name="alamat-penagihan3" rows="2" style="width:100%;">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </fieldset>
                                    <h1>Penjurnalan</h1>
                                    <fieldset>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-normal">Akun Hutang</label>
                                                <div>
                                                    <select id="akun-hutang" class="form-control" style="width:100%;">
                                                        <option value="">Pilih Akun</option>
                                                            <optgroup label='HUTANG USAHA'>
                                                                {
                                                                            <option value="211001">211001 - HUTANG USAHA</option>
                                                                            <option value="211002">211002 - HUTANG USAHA (USD)</option>
                
                                                            </optgroup>
                                                            <optgroup label='HUTANG OPEX'>
                                                                {
                                                                            <option value="212001">212001 - HUTANG KARYAWAN</option>
                                                                            <option value="212002">212002 - HUTANG KARYAWAN (USD)</option>
                                                                            <option value="212003">212003 - HUTANG BUA</option>
                                                                            <option value="212004">212004 - HUTANG BUA (USD)</option>
                                                                            <option value="212005">212005 - HUTANG PEMASARAN</option>
                                                                            <option value="212006">212006 - HUTANG PEMASARAN (USD)</option>
                                                                            <option value="212007">212007 - HUTANG PIHAK KETIGA KARYAWAN</option>
                                                                            <option value="212008">212008 - HUTANG PIHAK KETIGA KARYAWAN (USD)</option>
                                                                            <option value="212009">212009 - Hutang Pihak Ketiga Karyawan - Koperasi</option>
                                                                            <option value="212010">212010 - Hutang Pihak Ketiga Karyawan - DPA</option>
                                                                            <option value="212011">212011 - Hutang Pihak Ketiga Karyawan - YKKA</option>
                                                                            <option value="212012">212012 - Hutang Pihak Ketiga Karyawan - SPA</option>
                                                                            <option value="212013">212013 - Hutang Obat Apotek</option>
                
                                                            </optgroup>
                                                            <optgroup label='HUTANG ASET'>
                                                                {
                                                                            <option value="213001">213001 - HUTANG ASET SARANA</option>
                                                                            <option value="213002">213002 - HUTANG ASET SARANA (USD)</option>
                                                                            <option value="213003">213003 - HUTANG ASET PRASARANA</option>
                                                                            <option value="213004">213004 - HUTANG ASET PRASARANA (USD)</option>
                
                                                            </optgroup>
                                                            <optgroup label='HUTANG LEMBAGA KEUANGAN'>
                                                                {
                                                                            <option value="214001">214001 - HUTANG BANK</option>
                                                                            <option value="214002">214002 - HUTANG BANK (USD)</option>
                                                                            <option value="214003">214003 - HUTANG LEMBAGA KEUANGAN LAINNYA</option>
                                                                            <option value="214004">214004 - HUTANG LEMBAGA KEUANGAN LAINNYA (USD)</option>
                                                                            <option value="214005">214005 - HUTANG ENTITAS LAIN</option>
                                                                            <option value="214006">214006 - HUTANG ENTITAS LAIN (USD)</option>
                
                                                            </optgroup>
                                                            <optgroup label='HUTANG KERJASAMA USAHA'>
                                                                {
                                                                            <option value="215001">215001 - HUTANG INVESTASI PROJECT</option>
                                                                            <option value="215002">215002 - HUTANG INVESTASI JANGKA PANJANG</option>
                
                                                            </optgroup>
                                                            <optgroup label='HUTANG DARI PENGURUS PERUSAHAAN'>
                                                                {
                                                                            <option value="216001">216001 - HUTANG DARI PENGURUS PERUSAHAAN</option>
                
                                                            </optgroup>
                                                            <optgroup label='PDD, DP DAN BYMHD'>
                                                                {
                                                                            <optgroup label='PDD'>
                                                                            {
                                                                                    <option value="217101">217101 - PDD PROJECT</option>
                                                                                    <option value="217102">217102 - PDD NON PROJECT</option>
                
                                                                        }
                                                                            </optgroup>
                                                                            <optgroup label='DP'>
                                                                            {
                                                                                    <option value="217201">217201 - DP CUSTOMER</option>
                
                                                                        }
                                                                            </optgroup>
                                                                            <optgroup label='BYMHD'>
                                                                            {
                                                                                    <option value="217301">217301 - BYMHD KARYAWAN</option>
                                                                                    <option value="217302">217302 - BYMHD PENISUN</option>
                                                                                    <option value="217303">217303 - BYMHD ASURANSI</option>
                                                                                    <option value="217304">217304 - BYMHD BUA LAINNYA</option>
                                                                                    <option value="217305">217305 - BYMHD PEMASARAN</option>
                
                                                                        }
                                                                            </optgroup>
                
                                                            </optgroup>
                                                            <optgroup label='HUTANG PAJAK'>
                                                                {
                                                                            <option value="218001">218001 - Hutang PPh Ps. 21</option>
                                                                            <option value="218002">218002 - Hutang PPh Ps. 22</option>
                                                                            <option value="218003">218003 - Hutang PPh Ps. 23</option>
                                                                            <option value="218004">218004 - Hutang PPh Ps. 23 Final</option>
                                                                            <option value="218005">218005 - Hutang PPh Ps. 25</option>
                                                                            <option value="218006">218006 - Hutang PPh Ps. 29</option>
                                                                            <option value="218008">218008 - HUTANG PAJAK TANGGUHAN</option>
                                                                            <option value="218009">218009 - HUTANG PPN KELUARAN</option>
                                                                            <option value="218010">218010 - HUTANG PPN KELUARAN WAPU</option>
                                                                            <option value="218011">218011 - Hutang PPh Pasal 4 (2)</option>
                                                                            <option value="218012">218012 - HUTANG PPN MASUKAN WAPU</option>
                                                                            <option value="218013">218013 - Hutang Pajak Lainnya</option>
                                                                            <option value="218014">218014 - Hutang PPh Ps. 26</option>
                                                                            <option value="218015">218015 - Hutang PPh Ps. 24</option>
                                                                            <option value="218016">218016 - Hutang PPN 1107</option>
                                                                            <option value="218017">218017 - Hutang PPN 1111</option>
                                                                            <option value="218018">218018 - Hutang PPN Luar Negeri</option>
                                                                            <option value="218019">218019 - Hutang PPN Import</option>
                
                                                            </optgroup>
                                                            <optgroup label='HUTANG LAINNYA'>
                                                                {
                                                                            <option value="219001">219001 - Hutang Lain-Lain</option>
                                                                            <option value="219002">219002 - Hutang Lain-Lain (USD)</option>
                
                                                            </optgroup>
                
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="font-normal">Akun Beban</label>
                                                <div>
                                                    <select id="akun-beban" class="form-control" style="width:100%;">
                                                        <option value="">Pilih Akun</option>
                                                            <optgroup label='HPP PSO'>
                                                                {
                                                                            <option value="511001">511001 - HPP PSO CETAK </option>
                                                                            <option value="511002">511002 - HPP PSO MATERIAL </option>
                                                                            <option value="511003">511003 - HPP PSO PIHAK KE-3 </option>
                                                                            <option value="511004">511004 - HPP PSO SDM </option>
                                                                            <option value="511005">511005 - HPP PSO PEMBELIAN </option>
                                                                            <option value="511006">511006 - HPP PSO PERSEDIAAN </option>
                                                                            <option value="511007">511007 - HPP PSO ATK </option>
                                                                            <option value="511008">511008 - HPP PSO TRANSPORT </option>
                                                                            <option value="511009">511009 - HPP PSO MARKETING/SUCCESS FEE </option>
                                                                            <option value="511010">511010 - HPP PSO BUNGA PINJAMAN </option>
                                                                            <option value="511011">511011 - HPP PSO RAPAT</option>
                                                                            <option value="511012">511012 - HPP PSO DISTRIBUSI</option>
                                                                            <option value="511013">511013 - HPP PSO SPPD</option>
                
                                                            </optgroup>
                                                            <optgroup label='HPP KOMERSIL'>
                                                                {
                                                                            <option value="512001">512001 - HPP KOMERSIL CETAK </option>
                                                                            <option value="512002">512002 - HPP KOMERSIL MATERIAL </option>
                                                                            <option value="512003">512003 - HPP KOMERSIL PIHAK KE-3 </option>
                                                                            <option value="512004">512004 - HPP KOMERSIL SDM</option>
                                                                            <option value="512005">512005 - HPP KOMERSIL PEMBELIAN </option>
                                                                            <option value="512006">512006 - HPP KOMERSIL PERSEDIAAN </option>
                                                                            <option value="512007">512007 - HPP KOMERSIL ATK </option>
                                                                            <option value="512008">512008 - HPP KOMERSIL TRANSPORT </option>
                                                                            <option value="512009">512009 - HPP KOMERSIL MARKETING/SUCCESS FEE </option>
                                                                            <option value="512010">512010 - HPP KOMERSIL BUNGA PINJAMAN  </option>
                                                                            <option value="512011">512011 - HPP KOMERSIL RAPAT</option>
                                                                            <option value="512012">512012 - HPP KOMERSIL DISTRIBUSI</option>
                                                                            <option value="512013">512013 - HPP KOMERSIL SPPD</option>
                
                                                            </optgroup>
                                                            <optgroup label='HPP IMQ'>
                                                                {
                                                                            <option value="513001">513001 - HPP IMQ CETAK </option>
                                                                            <option value="513002">513002 - HPP IMQ MATERIAL </option>
                                                                            <option value="513003">513003 - HPP IMQ PIHAK KE-3 </option>
                                                                            <option value="513004">513004 - HPP IMQ SDM </option>
                                                                            <option value="513005">513005 - HPP IMQ PEMBELIAN </option>
                                                                            <option value="513006">513006 - HPP IMQ PERSEDIAAN </option>
                                                                            <option value="513007">513007 - HPP IMQ ATK </option>
                                                                            <option value="513008">513008 - HPP IMQ TRANSPORT </option>
                                                                            <option value="513009">513009 - HPP IMQ MARKETING/SUCCESS FEE </option>
                                                                            <option value="513010">513010 - HPP IMQ BUNGA PINJAMAN </option>
                                                                            <option value="513011">513011 - HPP IMQ RAPAT</option>
                                                                            <option value="513012">513012 - HPP IMQ DISTRIBUSI</option>
                                                                            <option value="513013">513013 - HPP IMQ SPPD</option>
                
                                                            </optgroup>
                                                            <optgroup label='HPP AKUEL'>
                                                                {
                                                                            <option value="514001">514001 - HPP AKUEL CETAK </option>
                                                                            <option value="514002">514002 - HPP AKUEL MATERIAL </option>
                                                                            <option value="514003">514003 - HPP AKUEL PIHAK KE-3 </option>
                                                                            <option value="514004">514004 - HPP AKUEL SDM </option>
                                                                            <option value="514005">514005 - HPP AKUEL PEMBELIAN </option>
                                                                            <option value="514006">514006 - HPP AKUEL PERSEDIAAN </option>
                                                                            <option value="514007">514007 - HPP AKUEL ATK </option>
                                                                            <option value="514008">514008 - HPP AKUEL TRANSPORT </option>
                                                                            <option value="514009">514009 - HPP AKUEL MARKETING/SUCCESS FEE </option>
                                                                            <option value="514010">514010 - HPP AKUEL BUNGA PINJAMAN </option>
                                                                            <option value="514011">514011 - HPP AKUEL RAPAT</option>
                                                                            <option value="514012">514012 - HPP AKUEL DISTRIBUSI</option>
                                                                            <option value="514013">514013 - HPP AKUEL SPPD</option>
                
                                                            </optgroup>
                                                            <optgroup label='BEBAN KARYAWAN'>
                                                                {
                                                                            <optgroup label='REGULER TANI'>
                                                                            {
                                                                                    <option value="611101">611101 - GAJI</option>
                                                                                    <option value="611102">611102 - INCENTIF</option>
                                                                                    <option value="611103">611103 - BONUS</option>
                                                                                    <option value="611104">611104 - THR</option>
                                                                                    <option value="611105">611105 - TUNJANGAN TETAP</option>
                                                                                    <option value="611106">611106 - ASURANSI</option>
                                                                                    <option value="611107">611107 - COP</option>
                                                                                    <option value="611108">611108 - KOMISI</option>
                                                                                    <option value="611109">611109 - LEMBUR</option>
                                                                                    <option value="611110">611110 - PENSIUN</option>
                                                                                    <option value="611111">611111 - PENGHARGAAN KARYAWAN</option>
                                                                                    <option value="611112">611112 - PESANGON</option>
                                                                                    <option value="611113">611113 - PELATIHAN</option>
                                                                                    <option value="611114">611114 - OUTBOUND</option>
                                                                                    <option value="611115">611115 - IBO</option>
                                                                                    <option value="611116">611116 - REKRUTASI</option>
                                                                                    <option value="611117">611117 - PROMOSI</option>
                
                                                                        }
                                                                            </optgroup>
                                                                            <optgroup label='OUTSOURCE'>
                                                                            {
                                                                                    <option value="611201">611201 - GAJI - OUTSOURCE</option>
                                                                                    <option value="611202">611202 - INCENTIF - OUTSOURCE</option>
                                                                                    <option value="611203">611203 - BONUS - OUTSOURCE</option>
                                                                                    <option value="611204">611204 - THR - OUTSOURCE</option>
                                                                                    <option value="611205">611205 - TUNJANGAN - OUTSOURCE</option>
                                                                                    <option value="611206">611206 - ASURANSI - OUTSOURCE</option>
                
                                                                        }
                                                                            </optgroup>
                                                                            <option value="611207">611207 - Tunjangan Tidak Tetap</option>
                
                                                            </optgroup>
                                                            <optgroup label='BUA'>
                                                                {
                                                                            <option value="612001">612001 - ATK</option>
                                                                            <option value="612002">612002 - LISTRIK</option>
                                                                            <option value="612003">612003 - TELEPON</option>
                                                                            <option value="612004">612004 - SEWA GEDUNG</option>
                                                                            <option value="612005">612005 - SEWA ALAT KERJA</option>
                                                                            <option value="612006">612006 - PERAWATAN ALAT KERJA</option>
                                                                            <option value="612007">612007 - INTERNET</option>
                                                                            <option value="612008">612008 - AIR</option>
                                                                            <option value="612009">612009 - RTK</option>
                                                                            <option value="612010">612010 - KONSULTAN</option>
                                                                            <option value="612011">612011 - KEANGGOTAAN</option>
                                                                            <option value="612012">612012 - RAPAT</option>
                                                                            <option value="612013">612013 - BUKU</option>
                                                                            <option value="612014">612014 - KONTRIBUSI LINGKUNGAN</option>
                                                                            <option value="612015">612015 - PERIJINAN</option>
                                                                            <option value="612016">612016 - MATERAI</option>
                                                                            <option value="612017">612017 - SPPD NON PROJECT</option>
                                                                            <option value="612018">612018 - TRANSPORT</option>
                                                                            <option value="612019">612019 - Biaya Lainnya</option>
                                                                            <option value="612020">612020 - Biaya Contigency &amp; Lain-lain</option>
                
                                                            </optgroup>
                                                            <optgroup label='MARKETING'>
                                                                {
                                                                            <option value="613001">613001 - JAMUAN</option>
                                                                            <option value="613002">613002 - PROMOSI</option>
                                                                            <option value="613003">613003 - PAMERAN</option>
                                                                            <option value="613004">613004 - JAMUAN PENAGIHAN</option>
                                                                            <option value="613005">613005 - TRANSPORT PENAGIHAN</option>
                                                                            <option value="613006">613006 - KOMISI PENAGIHAN</option>
                
                                                            </optgroup>
                                                            <optgroup label='DEPRESIASI'>
                                                                {
                                                                            <option value="621001">621001 - DEPRESIASI SARANA</option>
                                                                            <option value="621002">621002 - DEPRESIASI PRASARANA</option>
                                                                            <option value="621003">621003 - Biaya Penyusutan Aset Hak Guna</option>
                
                                                            </optgroup>
                                                            <optgroup label='BAD DEBT'>
                                                                {
                                                                            <option value="622100">622100 - BAD DEBT PENDAPATAN</option>
                
                                                            </optgroup>
                
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="font-normal">Akun Retur</label>
                                                <div>
                                                    <select id="akun-retur" class="form-control" style="width:100%;">
                                                        <option value="">Pilih Akun</option>
                                                            <optgroup label='HPP PSO'>
                                                                {
                                                                            <option value="511001">511001 - HPP PSO CETAK </option>
                                                                            <option value="511002">511002 - HPP PSO MATERIAL </option>
                                                                            <option value="511003">511003 - HPP PSO PIHAK KE-3 </option>
                                                                            <option value="511004">511004 - HPP PSO SDM </option>
                                                                            <option value="511005">511005 - HPP PSO PEMBELIAN </option>
                                                                            <option value="511006">511006 - HPP PSO PERSEDIAAN </option>
                                                                            <option value="511007">511007 - HPP PSO ATK </option>
                                                                            <option value="511008">511008 - HPP PSO TRANSPORT </option>
                                                                            <option value="511009">511009 - HPP PSO MARKETING/SUCCESS FEE </option>
                                                                            <option value="511010">511010 - HPP PSO BUNGA PINJAMAN </option>
                                                                            <option value="511011">511011 - HPP PSO RAPAT</option>
                                                                            <option value="511012">511012 - HPP PSO DISTRIBUSI</option>
                                                                            <option value="511013">511013 - HPP PSO SPPD</option>
                
                                                            </optgroup>
                                                            <optgroup label='HPP KOMERSIL'>
                                                                {
                                                                            <option value="512001">512001 - HPP KOMERSIL CETAK </option>
                                                                            <option value="512002">512002 - HPP KOMERSIL MATERIAL </option>
                                                                            <option value="512003">512003 - HPP KOMERSIL PIHAK KE-3 </option>
                                                                            <option value="512004">512004 - HPP KOMERSIL SDM</option>
                                                                            <option value="512005">512005 - HPP KOMERSIL PEMBELIAN </option>
                                                                            <option value="512006">512006 - HPP KOMERSIL PERSEDIAAN </option>
                                                                            <option value="512007">512007 - HPP KOMERSIL ATK </option>
                                                                            <option value="512008">512008 - HPP KOMERSIL TRANSPORT </option>
                                                                            <option value="512009">512009 - HPP KOMERSIL MARKETING/SUCCESS FEE </option>
                                                                            <option value="512010">512010 - HPP KOMERSIL BUNGA PINJAMAN  </option>
                                                                            <option value="512011">512011 - HPP KOMERSIL RAPAT</option>
                                                                            <option value="512012">512012 - HPP KOMERSIL DISTRIBUSI</option>
                                                                            <option value="512013">512013 - HPP KOMERSIL SPPD</option>
                
                                                            </optgroup>
                                                            <optgroup label='HPP IMQ'>
                                                                {
                                                                            <option value="513001">513001 - HPP IMQ CETAK </option>
                                                                            <option value="513002">513002 - HPP IMQ MATERIAL </option>
                                                                            <option value="513003">513003 - HPP IMQ PIHAK KE-3 </option>
                                                                            <option value="513004">513004 - HPP IMQ SDM </option>
                                                                            <option value="513005">513005 - HPP IMQ PEMBELIAN </option>
                                                                            <option value="513006">513006 - HPP IMQ PERSEDIAAN </option>
                                                                            <option value="513007">513007 - HPP IMQ ATK </option>
                                                                            <option value="513008">513008 - HPP IMQ TRANSPORT </option>
                                                                            <option value="513009">513009 - HPP IMQ MARKETING/SUCCESS FEE </option>
                                                                            <option value="513010">513010 - HPP IMQ BUNGA PINJAMAN </option>
                                                                            <option value="513011">513011 - HPP IMQ RAPAT</option>
                                                                            <option value="513012">513012 - HPP IMQ DISTRIBUSI</option>
                                                                            <option value="513013">513013 - HPP IMQ SPPD</option>
                
                                                            </optgroup>
                                                            <optgroup label='HPP AKUEL'>
                                                                {
                                                                            <option value="514001">514001 - HPP AKUEL CETAK </option>
                                                                            <option value="514002">514002 - HPP AKUEL MATERIAL </option>
                                                                            <option value="514003">514003 - HPP AKUEL PIHAK KE-3 </option>
                                                                            <option value="514004">514004 - HPP AKUEL SDM </option>
                                                                            <option value="514005">514005 - HPP AKUEL PEMBELIAN </option>
                                                                            <option value="514006">514006 - HPP AKUEL PERSEDIAAN </option>
                                                                            <option value="514007">514007 - HPP AKUEL ATK </option>
                                                                            <option value="514008">514008 - HPP AKUEL TRANSPORT </option>
                                                                            <option value="514009">514009 - HPP AKUEL MARKETING/SUCCESS FEE </option>
                                                                            <option value="514010">514010 - HPP AKUEL BUNGA PINJAMAN </option>
                                                                            <option value="514011">514011 - HPP AKUEL RAPAT</option>
                                                                            <option value="514012">514012 - HPP AKUEL DISTRIBUSI</option>
                                                                            <option value="514013">514013 - HPP AKUEL SPPD</option>
                
                                                            </optgroup>
                                                            <optgroup label='BEBAN KARYAWAN'>
                                                                {
                                                                            <optgroup label='REGULER TANI'>
                                                                            {
                                                                                    <option value="611101">611101 - GAJI</option>
                                                                                    <option value="611102">611102 - INCENTIF</option>
                                                                                    <option value="611103">611103 - BONUS</option>
                                                                                    <option value="611104">611104 - THR</option>
                                                                                    <option value="611105">611105 - TUNJANGAN TETAP</option>
                                                                                    <option value="611106">611106 - ASURANSI</option>
                                                                                    <option value="611107">611107 - COP</option>
                                                                                    <option value="611108">611108 - KOMISI</option>
                                                                                    <option value="611109">611109 - LEMBUR</option>
                                                                                    <option value="611110">611110 - PENSIUN</option>
                                                                                    <option value="611111">611111 - PENGHARGAAN KARYAWAN</option>
                                                                                    <option value="611112">611112 - PESANGON</option>
                                                                                    <option value="611113">611113 - PELATIHAN</option>
                                                                                    <option value="611114">611114 - OUTBOUND</option>
                                                                                    <option value="611115">611115 - IBO</option>
                                                                                    <option value="611116">611116 - REKRUTASI</option>
                                                                                    <option value="611117">611117 - PROMOSI</option>
                
                                                                        }
                                                                            </optgroup>
                                                                            <optgroup label='OUTSOURCE'>
                                                                            {
                                                                                    <option value="611201">611201 - GAJI - OUTSOURCE</option>
                                                                                    <option value="611202">611202 - INCENTIF - OUTSOURCE</option>
                                                                                    <option value="611203">611203 - BONUS - OUTSOURCE</option>
                                                                                    <option value="611204">611204 - THR - OUTSOURCE</option>
                                                                                    <option value="611205">611205 - TUNJANGAN - OUTSOURCE</option>
                                                                                    <option value="611206">611206 - ASURANSI - OUTSOURCE</option>
                
                                                                        }
                                                                            </optgroup>
                                                                            <option value="611207">611207 - Tunjangan Tidak Tetap</option>
                
                                                            </optgroup>
                                                            <optgroup label='BUA'>
                                                                {
                                                                            <option value="612001">612001 - ATK</option>
                                                                            <option value="612002">612002 - LISTRIK</option>
                                                                            <option value="612003">612003 - TELEPON</option>
                                                                            <option value="612004">612004 - SEWA GEDUNG</option>
                                                                            <option value="612005">612005 - SEWA ALAT KERJA</option>
                                                                            <option value="612006">612006 - PERAWATAN ALAT KERJA</option>
                                                                            <option value="612007">612007 - INTERNET</option>
                                                                            <option value="612008">612008 - AIR</option>
                                                                            <option value="612009">612009 - RTK</option>
                                                                            <option value="612010">612010 - KONSULTAN</option>
                                                                            <option value="612011">612011 - KEANGGOTAAN</option>
                                                                            <option value="612012">612012 - RAPAT</option>
                                                                            <option value="612013">612013 - BUKU</option>
                                                                            <option value="612014">612014 - KONTRIBUSI LINGKUNGAN</option>
                                                                            <option value="612015">612015 - PERIJINAN</option>
                                                                            <option value="612016">612016 - MATERAI</option>
                                                                            <option value="612017">612017 - SPPD NON PROJECT</option>
                                                                            <option value="612018">612018 - TRANSPORT</option>
                                                                            <option value="612019">612019 - Biaya Lainnya</option>
                                                                            <option value="612020">612020 - Biaya Contigency &amp; Lain-lain</option>
                
                                                            </optgroup>
                                                            <optgroup label='MARKETING'>
                                                                {
                                                                            <option value="613001">613001 - JAMUAN</option>
                                                                            <option value="613002">613002 - PROMOSI</option>
                                                                            <option value="613003">613003 - PAMERAN</option>
                                                                            <option value="613004">613004 - JAMUAN PENAGIHAN</option>
                                                                            <option value="613005">613005 - TRANSPORT PENAGIHAN</option>
                                                                            <option value="613006">613006 - KOMISI PENAGIHAN</option>
                
                                                            </optgroup>
                                                            <optgroup label='DEPRESIASI'>
                                                                {
                                                                            <option value="621001">621001 - DEPRESIASI SARANA</option>
                                                                            <option value="621002">621002 - DEPRESIASI PRASARANA</option>
                                                                            <option value="621003">621003 - Biaya Penyusutan Aset Hak Guna</option>
                
                                                            </optgroup>
                                                            <optgroup label='BAD DEBT'>
                                                                {
                                                                            <option value="622100">622100 - BAD DEBT PENDAPATAN</option>
                
                                                            </optgroup>
                
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-normal">Akun Diskon</label>
                                                <div>
                                                    <select id="akun-diskon" class="form-control" style="width:100%;">
                                                        <option value="">Pilih Akun</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="font-normal">Akun Pajak</label>
                                                <div>
                                                    <select id="akun-pajak" class="form-control" style="width:100%;">
                                                        <option value="">Pilih Akun</option>
                                                            <optgroup label='PREPAID PAJAK'>
                                                                {
                                                                            <option value="115001">115001 - Prepaid PPh Ps. 22</option>
                                                                            <option value="115002">115002 - Prepaid PPh Ps. 23</option>
                                                                            <option value="115003">115003 - Prepaid PPh Ps. 23 Final</option>
                                                                            <option value="115004">115004 - Prepaid PPh Ps. 25</option>
                                                                            <option value="115006">115006 - Prepaid Pajak Tangguhan</option>
                                                                            <option value="115007">115007 - Prepaid PPN Masukan Non Wapu</option>
                                                                            <option value="115008">115008 - Prepaid PPN Masukan Wapu</option>
                                                                            <option value="115009">115009 - Prepaid PPN Masukan Luar Negeri</option>
                                                                            <option value="115010">115010 - Prepaid PPN (Lebih bayar)</option>
                                                                            <option value="115011">115011 - Prepaid PPN Masukan Import</option>
                                                                            <option value="115012">115012 - Prepaid PPh Ps. 29</option>
                
                                                            </optgroup>
                
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="font-normal">Akun Pendapatan Lain</label>
                                                <div>
                                                    <select id="akun-pendapatan-lain" class="form-control" style="width:100%;">
                                                        <option value="">Pilih Akun</option>
                                                            <optgroup label='PENDAPATAN LAINNYA'>
                                                                {
                                                                            <option value="711001">711001 - PENDAPATAN BUNGA BANK</option>
                                                                            <option value="711002">711002 - PENDAPATAN LAINNYA</option>
                                                                            <option value="711003">711003 - Bagian laba (rugi) bersih anak perusahaan</option>
                                                                            <option value="711004">711004 - Pendapatan Bunga Deposito</option>
                                                                            <option value="711005">711005 - (Pendapatan)/Biaya Selisih Kurs</option>
                                                                            <option value="711006">711006 - Keuntungan Penjualan Aset</option>
                                                                            <option value="711007">711007 - Pendapatan cadangan pemulihan piutang</option>
                
                                                            </optgroup>
                
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
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

<script src="<?=BASE_URL?>/js/plugins/select2/select2.full.min.js"></script>
<script src="<?=BASE_URL?>/js/mask.js"></script>
<script src="<?=BASE_URL?>/js/plugins/steps/jquery.steps.min.js"></script>
<script src="<?=BASE_URL?>/js/jquery.validate.js"></script>
<script src="<?=BASE_URL?>/js/plugins/jquery-confirm/jquery-confirm.js"></script>


<script type="text/javascript">
        $(document).ready(function () {
            $("#form-vendor").steps({
                bodyTag: "fieldset",
                labels: {
                    finish: "Simpan",
                    next: "Selanjutnya",
                    previous: "Sebelumnya"
                },
                onStepChanging: function () {
                    if ($("#bentuk option:selected").val() === '') {
                        $('#bentuk').select2('open');
                        return false;
                    }

                    if ($("#jenis option:selected").val() === '') {
                        $('#jenis').select2('open');
                        return false;
                    }

                    if ($("#nama").val() === '') {
                        $.alert({
                            title: 'Informasi',
                            content: "Isi nama vendor!",
                            type: "red"
                        });
                        return false;
                    }

                    if ($("#npwp").val() === '') {
                        $.alert({
                            title: 'Informasi',
                            content: "Isi NPWP vendor!",
                            type: "red"
                        });
                        return false;
                    }

                    if ($("#domisili").val() === '') {
                        $.alert({
                            title: 'Informasi',
                            content: "Isi domisili vendor!",
                            type: "red"
                        });
                        return false;
                    }
                    return true;

                },
                onFinishing: function (event, currentIndex) {
                    /*if ($("#akun-hutang option:selected").val() === '') {
                        $('#akun-hutang').select2('open');
                        return false;
                    }

                    if ($("#akun-beban option:selected").val() === '') {
                        $('#akun-beban').select2('open');
                        return false;
                    }

                    if ($("#akun-retur option:selected").val() === '') {
                        $('#akun-retur').select2('open');
                        return false;
                    }

                    if ($("#akun-diskon option:selected").val() === '') {
                        $('#akun-diskon').select2('open');
                        return false;
                    }

                    if ($("#akun-pajak option:selected").val() === '') {
                        $('#akun-pajak').select2('open');
                        return false;
                    }

                    if ($("#akun-pendapatan-lain option:selected").val() === '') {
                        $('#akun-pendapatan-lain').select2('open');
                        return false;
                    }*/

                    simpanvendor();
                }
            });

            function simpanvendor() {
                var bentuk = $('#bentuk option:selected').val();
                var jenis = $('#jenis option:selected').val();
                var nama = $('#nama').val();
                var npwp = $('#npwp').val();
                var nik = $('#nik').val();
                var kontak = $('#kontak').val();
                var telepon = $('#telepon').val();
                var email = $('#email').val();
                var web = $('#web').val();
                var domisili = $('#domisili').val();
                var alamatpajak = $('#alamat-pajak').val();
                var alamatkirim = $('#alamat-pengiriman').val();
                var alamattagih1 = $('#alamat-penagihan1').val();
                var akunhutang = $('#akun-hutang option:selected').val();
                var akunbeban = $('#akun-beban option:selected').val();
                var akunretur = $('#akun-retur option:selected').val();
                var akundiskon = $('#akun-diskon option:selected').val();
                var akunpajak = $('#akun-pajak option:selected').val();
                var akunpendapatanlain = $('#akun-pendapatan-lain option:selected').val();
                var sumber = null;
                var return_url = "/MasterData/Transaksi/master_vendor";

                var data = JSON.stringify({bentuk:bentuk, jenis:jenis, nama:nama, npwp:npwp, nik:nik, kontak:kontak, telepon:telepon, email:email, web:web, 
                            domisili:domisili, alamat_pajak:alamatpajak, alamat_kirim:alamatkirim, alamat_tagih1:alamattagih1, 
                            akun_hutang:akunhutang, akun_beban:akunbeban, akun_retur:akunretur, akun_diskon:akundiskon, akun_pajak:akunpajak, 
                            akun_pendapatan_lain:akunpendapatanlain, sumber:sumber, return_url:return_url});

                $.confirm({
                    title: 'Konfirmasi',
                    content: 'Simpan data vendor berikut?',    
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
						            url: "/Pembelian/Master/SimpanVendor",
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
            }

            function disableNext() {
                var nextButton = $(".actions ul li:nth-child(2) a");
                buttonEnabled = $(".actions ul li:nth-child(2)").addClass("disabled").attr("aria-disabled", "true");
            }

            disableNext();

            $("#bentuk").select2({
                placeholder: "Pilih Bentuk Usaha",
                allowClear: true
            }).on('change', function(){
                if($(this).val()=='Perorangan')
                    $('#nik-container').removeClass('hidden');
                else
                    $('#nik-container').addClass('hidden');
            });

            $("#jenis").select2({
                placeholder: "Pilih Jenis Usaha",
                allowClear: true
            });

            $("#akun-hutang, #akun-beban, #akun-retur, #akun-diskon, #akun-pajak, #akun-pendapatan-lain").select2({
                placeholder: "Pilih Akun",
                allowClear: true
            });

            $('#akun-beban').on('change', function () {
                $('#akun-retur').val($(this).val()).trigger('change');

                //var idx = $(this).prop('selectedIndex');
                //$('#akun-diskon').prop('selectedIndex', idx).trigger('change');
            });

            $('#bentuk, #jenis').on('change', function () {
                $(this).trigger('blur');
            });

            $('#npwp').mask('99.999.999.9-999.999');

            $('.idem').on('click', function () {
                var obj = $(this).closest('.alamat').find('textarea');
                var domisili = $('#domisili').val();
                $('#' + obj.attr('id')).val(domisili);
            });

            $('.hapus-alamat').on('click', function () {
                var obj = $(this).closest('.alamat').find('textarea');
                $('#' + obj.attr('id')).val('');
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
