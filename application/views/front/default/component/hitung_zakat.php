<script src="<?php echo base_url(); ?>assets/jquery/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/jquery/jquery.inputmask.min.js"></script>

<style>
    .shuffle-btn-group-1 {
        display: inline-block;
        margin: 5px 0 5px;
        width: 100%;
        border-bottom: 3px solid #ffb600;
    }

    .shuffle-btn-group-1 label {
        display: inline-block;
        color: #212121;
        font-size: 14px;
        padding: 6px 25px;
        padding-top: 10px;
        font-weight: 700;
        text-transform: uppercase;
        transition: all 0.3s;
        cursor: pointer;
        margin: 0;
    }

    .shuffle-btn-group-1 label.active {
        color: #212121;
        background: #ffb600;
    }

    .shuffle-btn-group-1 label input {
        display: none;
    }

    /* Project shuffle Item */
    .shuffle-item-1 {
        padding: 0;
    }
    .project-img-container-2 {
        width: 95%;
        margin: 0px auto;
        display: flex;
        background-color: #fff;
        padding: 10px;
    }
    .shuffle-hidden-test{
        display: none;
    }
</style>
<script src="<?php echo base_url(); ?>assets/jquery/jquery-3.5.1.min.js"></script>
<section class="content col-sm-12" style="padding: 0px !important">
    <div id='bayar-zakat-container' class="row">
        <div class="col-12">
            <div class="shuffle-btn-group-1">
                <label class="active" for="zakatpenghasilan">
                    <input type="radio" name="shuffle-filter-1" id="zakatpenghasilan" value="zakatpenghasilan" checked="checked">Zakat Penghasilan
                </label>
                <label for="zakatmaal">
                    <input type="radio" name="shuffle-filter-1" id="zakatmaal" value="zakatmaal">Zakat Maal
                </label>
            </div><!-- project filter end -->

            <div class="row shuffle-wrapper-1">
                <!--<div class="col-1 shuffle-sizer-1"></div>-->

                <div id="shuffle-ke-1" class="col-lg-12 col-md-12 shuffle-item-1" data-groups="[&quot;zakatpenghasilan&quot;]" style="opacity: 1;">
                    <div class="project-img-container-2">
                        <div class="gallery-popup-1" style='width: 100%'>
                            <div class="tab-pane fade active show" id="content-income" role="tabpanel" aria-labelledby="content-income-tab">
                                <form>
                                    <div class="form-group">
                                        <p>
                                            Zakat Penghasilan atau yang dikenal juga sebagai Zakat Profesi adalah bagian dari zakat maal yang wajib dikeluarkan atas harta yang berasal dari pendapatan / penghasilan rutin dari pekerjaan yang tidak melanggar syariah.
                                            <br>
                                            Kadar Zakat Penghasilan senilai <b>2,5%</b>.
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Penghasilan/Gaji Saya per Bulan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" name="monthly_income" id="monthly_income" class="form-control border-left-0 nominal" placeholder="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Penghasilan Lain-lain Saya per Bulan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" name="other_income" id="other_income" class="form-control border-left-0" placeholder="0" value="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Hutang / Cicilan Untuk Kebutuhan Pokok</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" name="installment" id="installment" class="form-control border-left-0" placeholder="0" value="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Jumlah Penghasilan per Bulan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text readonly" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="income" name="income" class="form-control border-left-0" placeholder="0" readonly="readonly" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nisab Zakat Penghasilan</label>
                                        <p>
                                            Nisab adalah syarat jumlah minimum (ambang batas) harta yang dapat dikategorikan sebagai harta wajib zakat. Untuk penghasilan yang diwajibkan zakat adalah penghasilan yang berada diatas nisab.
                                            <br>
                                            Nisab Zakat Penghasilan adalah setara <b>653kg beras</b>.
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Masukan Harga Beras Saat Ini (per kg)</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="rice_value" name="rice_value" class="form-control border-left-0" placeholder="0" value="10000" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Besarnya Nisab Zakat Penghasilan per Bulan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text readonly" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="nisab_income" name="nisab_income" class="form-control border-left-0" placeholder="0" value="6530000" readonly="readonly" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Apakah Saya Wajib Membayar Zakat</label>
                                        <input type="text" name="is_important_pay" class="form-control" placeholder="Ya/Tidak" readonly="readonly">
                                    </div>
                                    <div class="form-group hide">
                                        <label class="font-weight-bold">Jumlah yang Saya Harus Bayarkan per Tahun</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text readonly" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="total_pay_yearly" name="total_pay_yearly" class="form-control border-left-0" placeholder="0" readonly="readonly" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Jumlah yang Saya Harus Bayarkan per Bulan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text readonly" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="total_pay_monthly" name="total_pay_monthly" class="form-control border-left-0" placeholder="0" readonly="readonly" inputmode="numeric">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- shuffle item 1 end -->
                <br/>
                <div id="shuffle-ke-2" class="col-lg-12 col-md-12 shuffle-item-1 shuffle-hidden-test" data-groups="[&quot;zakatmaal&quot;]" style="opacity: 0;">
                    <div class="project-img-container-2">
                        <div class="gallery-popup-1" style='width: 100%'>
                            <div class="tab-pane fade active show" id="content-maal" role="tabpanel" aria-labelledby="content-maal-tab">
                                <form>
                                    <div class="form-group">
                                        <p>Zakat Harta (Maal) adalah sejumlah harta yang wajib dikeluarkan bila telah mencapai batas minimal tertentu (nisab) dalam kurun waktu (haul) setiap satu tahun kalender.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Harta dalam Bentuk Tabungan/Giro/Deposito</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="savings_assets" name="savings_assets" class="form-control border-left-0" placeholder="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Harta dalam Bentuk Logam Mulia</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="gold_assets" name="gold_assets" class="form-control border-left-0" placeholder="0" value="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Harta dalam Bentuk Surat Berharga</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="document_assets" name="document_assets" class="form-control border-left-0" placeholder="0" value="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Harta dalam Bentuk Properti</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="property_assets" name="property_assets" class="form-control border-left-0" placeholder="0" value="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Harta dalam Bentuk Kendaraan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="vehicle_assets" name="vehicle_assets" class="form-control border-left-0" placeholder="0" value="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Harta dalam Bentuk Koleksi Seni &amp; Barang Antik</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="antique_assets" name="antique_assets" class="form-control border-left-0" placeholder="0" value="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Harta dalam Bentuk Stok Barang Dagangan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="stock_assets" name="stock_assets" class="form-control border-left-0" placeholder="0" value="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Harta dalam Bentuk Lainnya</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="other_assets" name="other_assets" class="form-control border-left-0" placeholder="0" value="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Jumlah Harta</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text readonly" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="total_assets" name="total_assets" class="form-control border-left-0" placeholder="0" value="0" readonly="readonly" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Hutang Jatuh Tempo Saat Membayar Kewajiban Zakat</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="installment_maal" name="installment_maal" class="form-control border-left-0" placeholder="0" value="0" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Jumlah Harta yang Dihitung Zakatnya</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text readonly" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="total_pay_assets" name="total_pay_assets" class="form-control border-left-0" placeholder="0" value="0" readonly="readonly" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nisab Zakat Harta (Maal)</label>
                                        <p>
                                            Untuk harta yang diwajibkan zakat adalah harta yang berjumlah diatas nisab.
                                            <br>
                                            Nisab Zakat Harta (Maal) adalah setara dengan <b>85gr emas 24 karat</b>.
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Masukan Harga Emas Saat Ini (per gram)</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="gold_value" name="gold_value" class="form-control border-left-0" placeholder="0" value="900000" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Besarnya Nisab Zakat Maal per Tahun</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text readonly" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="nisab_gold" name="nisab_gold" class="form-control border-left-0" placeholder="0" readonly="readonly" value="76500000" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Apakah Saya Wajib Membayar Zakat Maal</label>
                                        <input type="text" id="is_important_pay_maal" name="is_important_pay_maal" class="form-control" placeholder="Ya/Tidak" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Jumlah yang Saya Harus Bayarkan per Tahun</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text readonly" id="basic-addon1">Rp.</span>
                                            </div>
                                            <input type="text" id="total_yearly_maal" name="total_yearly_maal" class="form-control border-left-0" placeholder="0" readonly="readonly" inputmode="numeric">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- shuffle item 2 end -->
                <br/>
            </div><!-- shuffle end -->
        </div>
    </div><!-- Content row end -->
</section>
<script>
// Shuffle js filter and masonry
    function projectShuffle() {
        if ($('#bayar-zakat-container .shuffle-wrapper-1').length !== 0) {
            var Shuffle = window.Shuffle;
            var myShuffle = new Shuffle(document.querySelector('.shuffle-wrapper-1'), {
                itemSelector: '.shuffle-item-1',
                sizer: '.shuffle-sizer-1',
                buffer: 0
            });
            $('input[name="shuffle-filter-1"]').on('change', function (evt) {
                var input = evt.currentTarget;
                if (input.checked) {
                    myShuffle.filter(input.value);
                }
            });
            $('.shuffle-btn-group-1 label').on('click', function () {
                $('.shuffle-btn-group-1 label').removeClass('active');

                $(this).addClass('active');

                $('#shuffle-ke-2').removeClass('shuffle-hidden-test');
            });
        }
    }

    $(document).ready(function () {
        setTimeout(function () {
            projectShuffle();
        }, 500);
        
        setTimeout(function () {
            
            //hitung zakat - script 1
            var monthlySelector = document.getElementById("monthly_income");
            var otherSelector = document.getElementById("other_income");
            var installSelector = document.getElementById("installment");
            var incomeSelector = document.getElementById("income");
            var nisabSelector = document.getElementById("nisab_income");
            var riceSelector = document.getElementById("rice_value");
            var totalYearlySelector = document.getElementById("total_pay_yearly");
            var totalMonthlySelector = document.getElementById("total_pay_monthly");

//            window.addEventListener('load', function () {
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(monthlySelector);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(otherSelector);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(installSelector);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(incomeSelector);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(nisabSelector);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(riceSelector);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(totalYearlySelector);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(totalMonthlySelector);
//            });

            $('input[name="monthly_income"]').bind('keyup', function () {
                var monthlyIncome = $(this).val().split('.').join(""); // penghasilan perbulan
                var otherIncome = $('input[name="other_income"]').val() === "" ? 0 : $('input[name="other_income"]').val().split('.').join(""); // penghasilan tambahan
                var installment = $('input[name="installment"]').val() === "" ? 0 : $('input[name="installment"]').val().split('.').join(""); // hutang / cicilan
                var income = parseInt(monthlyIncome) + parseInt(otherIncome) - parseInt(installment); // total penghasilan bersih
                var nisabIncome = $('input[name="nisab_income"]').val().split('.').join(""); // total nisab
                var netIncome = (parseInt(income) / 100 * 2.5); // total kewajiban zakat penghasilan

                $('input[name="income"]').val(isNaN(income) ? 0 : income);

                // check if netcome > nisab
                if (income >= nisabIncome) {
                    $('input[name="is_important_pay"]').val('Ya');
                    $('input[name="total_pay_yearly"]').val(netIncome * 12);
                    $('input[name="total_pay_monthly"]').val(netIncome);
                } else {
                    $('input[name="is_important_pay"]').val('Tidak');
                    $('input[name="total_pay_yearly"]').val(0);
                    $('input[name="total_pay_monthly"]').val(0);
                }
            });

            $('input[name="other_income"]').bind('keyup', function () {
                var monthlyIncome = $('input[name="monthly_income"]').val().split('.').join(""); // penghasilan perbulan
                var otherIncome = $(this).val().split('.').join(""); // penghasilan tambahan
                var installment = $('input[name="installment"]').val() === "" ? 0 : $('input[name="installment"]').val().split('.').join(""); // hutang / cicilan
                var income = parseInt(monthlyIncome) + parseInt(otherIncome) - parseInt(installment); // total penghasilan bersih
                var nisabIncome = $('input[name="nisab_income"]').val().split('.').join(""); // total nisab
                var netIncome = (parseInt(income) / 100 * 2.5); // total kewajiban zakat penghasilan

                $('input[name="income"]').val(isNaN(income) ? parseInt(monthlyIncome) : income);

                // check if netcome > nisab
                if (income >= nisabIncome) {
                    $('input[name="is_important_pay"]').val('Ya');
                    $('input[name="total_pay_yearly"]').val(netIncome * 12);
                    $('input[name="total_pay_monthly"]').val(netIncome);
                } else {
                    $('input[name="is_important_pay"]').val('Tidak');
                    $('input[name="total_pay_yearly"]').val(0);
                    $('input[name="total_pay_monthly"]').val(0);
                }
            });

            $('input[name="installment"]').bind('keyup', function () {
                var monthlyIncome = $('input[name="monthly_income"]').val().split('.').join(""); // penghasilan perbulan
                var otherIncome = $('input[name="other_income"]').val().split('.').join(""); // penghasilan tambahan
                var installment = $(this).val().split('.').join(""); // hutang / cicilan
                var income = parseInt(monthlyIncome) + parseInt(otherIncome) - parseInt(installment); // total penghasilan bersih
                var nisabIncome = $('input[name="nisab_income"]').val().split('.').join(""); // total nisab
                var netIncome = (parseInt(income) / 100 * 2.5); // total kewajiban zakat penghasilan

                $('input[name="income"]').val(isNaN(income) ? parseInt(monthlyIncome) + parseInt(otherIncome) : income);

                // check if netcome > nisab
                if (income >= nisabIncome) {
                    $('input[name="is_important_pay"]').val('Ya');
                    $('input[name="total_pay_yearly"]').val(netIncome * 12);
                    $('input[name="total_pay_monthly"]').val(netIncome);
                } else {
                    $('input[name="is_important_pay"]').val('Tidak');
                    $('input[name="total_pay_yearly"]').val(0);
                    $('input[name="total_pay_monthly"]').val(0);
                }
            });

            //calculation if rice value is change
            $('input[name="rice_value"]').bind('keyup', function () {
                var monthlyIncome = $('input[name="monthly_income"]').val().split('.').join(""); // penghasilan perbulan
                var otherIncome = $('input[name="other_income"]').val().split('.').join(""); // penghasilan tambahan
                var installment = $('input[name="installment"]').val().split('.').join(""); // hutang / cicilan
                var income = parseInt(monthlyIncome) + parseInt(otherIncome) - parseInt(installment); // total penghasilan bersih
                var nisabIncome = $(this).val().split('.').join("") * 653; // total nisab
                var netIncome = (parseInt(income) / 100 * 2.5); // total kewajiban zakat penghasilan

                $('input[name="nisab_income"]').val(isNaN(nisabIncome) ? 0 : nisabIncome);

                // check if netcome > nisab
                if (income >= nisabIncome) {
                    $('input[name="is_important_pay"]').val('Ya');
                    $('input[name="total_pay_yearly"]').val(netIncome * 12);
                    $('input[name="total_pay_monthly"]').val(netIncome);
                } else {
                    $('input[name="is_important_pay"]').val('Tidak');
                    $('input[name="total_pay_yearly"]').val(0);
                    $('input[name="total_pay_monthly"]').val(0);
                }
            });

            //btn for reset
            $('.btn-reset').bind('click', function () {
                //reset zakat penghasilan input
                $('input[name="monthly_income"]').val(0);
                $('input[name="other_income"]').val(0);
                $('input[name="installment"]').val(0);
                $('input[name="income"]').val(0);
                $('input[name="total_pay_yearly"]').val(0);
                $('input[name="total_pay_monthly"]').val(0);
                $('input[name="is_important_pay"]').val('');
                //reset zakat maal input
                $('input[name="savings_assets"]').val(0);
                $('input[name="gold_assets"]').val(0);
                $('input[name="document_assets"]').val(0);
                $('input[name="property_assets"]').val(0);
                $('input[name="vehicle_assets"]').val(0);
                $('input[name="antique_assets"]').val(0);
                $('input[name="stock_assets"]').val(0);
                $('input[name="other_assets"]').val(0);
                $('input[name="total_assets"]').val(0);
                $('input[name="total_pay_assets"]').val(0);
                $('input[name="installment_maal"]').val(0);
                $('input[name="total_yearly_maal"]').val(0);
            });

            //hitung zakat - script 2
            var saving = document.getElementById("savings_assets");
            var gold = document.getElementById("gold_assets");
            var documents = document.getElementById("document_assets");
            var property = document.getElementById("property_assets");
            var vechicle = document.getElementById("vehicle_assets");
            var antique = document.getElementById("antique_assets");
            var stock = document.getElementById("stock_assets");
            var other = document.getElementById("other_assets");
            var goldValue = document.getElementById("gold_value");
            var nisabGold = document.getElementById("nisab_gold");
            var totalAssets = document.getElementById("total_assets");
            var totalPayAssets = document.getElementById("total_pay_assets");
            var installmentMaal = document.getElementById("installment_maal");
            var totalMaal = document.getElementById("total_yearly_maal");

//            window.addEventListener('load', function () {
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(saving);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(gold);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(documents);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(property);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(vechicle);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(antique);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(stock);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(other);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(goldValue);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(nisabGold);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(totalAssets);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(totalPayAssets);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(installmentMaal);
                Inputmask({'alias': 'decimal', 'groupSeparator': '.', 'digits': 0, 'placeholder': '0', 'rightAlign': false}).mask(totalMaal);
//            });

            // calculation for total assets
            $('input[name="savings_assets"]').bind('keyup', function () {
                var savingsAssets = $(this).val().split('.').join("");
                var goldAssets = $('input[name="gold_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="gold_assets"]').val().split('.').join("");
                var documentAssets = $('input[name="document_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="document_assets"]').val().split('.').join("");
                var propertyAssets = $('input[name="property_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="property_assets"]').val().split('.').join("");
                var vehicleAssets = $('input[name="vehicle_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="vehicle_assets"]').val().split('.').join("");
                var antiqueAssets = $('input[name="antique_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="antique_assets"]').val().split('.').join("");
                var stockAssets = $('input[name="stock_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="stock_assets"]').val().split('.').join("");
                var otherAssets = $('input[name="other_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="other_assets"]').val().split('.').join("");
                var totalAssets = parseInt(savingsAssets) + parseInt(goldAssets) + parseInt(documentAssets) +
                        parseInt(propertyAssets) + parseInt(vehicleAssets) + parseInt(antiqueAssets) +
                        parseInt(stockAssets) + parseInt(otherAssets);

                $('input[name="total_assets"]').val(isNaN(totalAssets) ? 0 : totalAssets);

                var totalAssets = isNaN(totalAssets) ? 0 : totalAssets;
                var nisabAssets = $('input[name="nisab_gold"]').val().split('.').join("");
                var installmentMaal = $('input[name="installment_maal"]').val().split('.').join("") === "" ? 0 : $('input[name="installment_maal"]').val().split('.').join("");
                var totalPayAssets = parseInt(totalAssets) - parseInt(installmentMaal);
                var netAssets = totalPayAssets / 100 * 2.5;

                $('input[name="total_pay_assets"]').val(isNaN(totalPayAssets) ? 0 : totalPayAssets);

                // check if netcome > nisab
                if (totalPayAssets >= nisabAssets) {
                    $('input[name="is_important_pay_maal"]').val('Ya');
                    $('input[name="total_yearly_maal"]').val(netAssets);
                    $('input[name="total_monthly_maal"]').val(netAssets / 12);
                } else {
                    $('input[name="is_important_pay_maal"]').val('Tidak');
                    $('input[name="total_yearly_maal"]').val(0);
                    $('input[name="total_monthly_maal"]').val(0);
                }
            });

            $('input[name="gold_assets"]').bind('keyup', function () {
                var savingsAssets = $('input[name="savings_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="savings_assets"]').val().split('.').join("");
                var goldAssets = $(this).val().split('.').join("");
                var documentAssets = $('input[name="document_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="document_assets"]').val().split('.').join("");
                var propertyAssets = $('input[name="property_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="property_assets"]').val().split('.').join("");
                var vehicleAssets = $('input[name="vehicle_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="vehicle_assets"]').val().split('.').join("");
                var antiqueAssets = $('input[name="antique_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="antique_assets"]').val().split('.').join("");
                var stockAssets = $('input[name="stock_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="stock_assets"]').val().split('.').join("");
                var otherAssets = $('input[name="other_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="other_assets"]').val().split('.').join("");
                var totalAssets = parseInt(savingsAssets) + parseInt(goldAssets) + parseInt(documentAssets) +
                        parseInt(propertyAssets) + parseInt(vehicleAssets) + parseInt(antiqueAssets) +
                        parseInt(stockAssets) + parseInt(otherAssets);

                $('input[name="total_assets"]').val(isNaN(totalAssets) ? 0 : totalAssets);

                var totalAssets = isNaN(totalAssets) ? 0 : totalAssets;
                var nisabAssets = $('input[name="nisab_gold"]').val().split('.').join("");
                var installmentMaal = $('input[name="installment_maal"]').val().split('.').join("") === "" ? 0 : $('input[name="installment_maal"]').val().split('.').join("");
                var totalPayAssets = parseInt(totalAssets) - parseInt(installmentMaal);
                var netAssets = totalPayAssets / 100 * 2.5;

                $('input[name="total_pay_assets"]').val(isNaN(totalPayAssets) ? 0 : totalPayAssets);

                // check if netcome > nisab
                if (totalPayAssets >= nisabAssets) {
                    $('input[name="is_important_pay_maal"]').val('Ya');
                    $('input[name="total_yearly_maal"]').val(netAssets);
                    $('input[name="total_monthly_maal"]').val(netAssets / 12);
                } else {
                    $('input[name="is_important_pay_maal"]').val('Tidak');
                    $('input[name="total_yearly_maal"]').val(0);
                    $('input[name="total_monthly_maal"]').val(0);
                }
            });

            $('input[name="document_assets"]').bind('keyup', function () {
                var savingsAssets = $('input[name="savings_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="savings_assets"]').val().split('.').join("");
                var goldAssets = $('input[name="gold_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="gold_assets"]').val().split('.').join("");
                var documentAssets = $(this).val().split('.').join("");
                var propertyAssets = $('input[name="property_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="property_assets"]').val().split('.').join("");
                var vehicleAssets = $('input[name="vehicle_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="vehicle_assets"]').val().split('.').join("");
                var antiqueAssets = $('input[name="antique_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="antique_assets"]').val().split('.').join("");
                var stockAssets = $('input[name="stock_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="stock_assets"]').val().split('.').join("");
                var otherAssets = $('input[name="other_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="other_assets"]').val().split('.').join("");
                var totalAssets = parseInt(savingsAssets) + parseInt(goldAssets) + parseInt(documentAssets) +
                        parseInt(propertyAssets) + parseInt(vehicleAssets) + parseInt(antiqueAssets) +
                        parseInt(stockAssets) + parseInt(otherAssets);

                $('input[name="total_assets"]').val(isNaN(totalAssets) ? 0 : totalAssets);

                var totalAssets = isNaN(totalAssets) ? 0 : totalAssets;
                var nisabAssets = $('input[name="nisab_gold"]').val().split('.').join("");
                var installmentMaal = $('input[name="installment_maal"]').val().split('.').join("") === "" ? 0 : $('input[name="installment_maal"]').val().split('.').join("");
                var totalPayAssets = parseInt(totalAssets) - parseInt(installmentMaal);
                var netAssets = totalPayAssets / 100 * 2.5;

                $('input[name="total_pay_assets"]').val(isNaN(totalPayAssets) ? 0 : totalPayAssets);

                // check if netcome > nisab
                if (totalPayAssets >= nisabAssets) {
                    $('input[name="is_important_pay_maal"]').val('Ya');
                    $('input[name="total_yearly_maal"]').val(netAssets);
                    $('input[name="total_monthly_maal"]').val(netAssets / 12);
                } else {
                    $('input[name="is_important_pay_maal"]').val('Tidak');
                    $('input[name="total_yearly_maal"]').val(0);
                    $('input[name="total_monthly_maal"]').val(0);
                }
            });

            $('input[name="property_assets"]').bind('keyup', function () {
                var savingsAssets = $('input[name="savings_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="savings_assets"]').val().split('.').join("");
                var goldAssets = $('input[name="gold_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="gold_assets"]').val().split('.').join("");
                var documentAssets = $('input[name="document_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="document_assets"]').val().split('.').join("");
                var propertyAssets = $(this).val().split('.').join("");
                var vehicleAssets = $('input[name="vehicle_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="vehicle_assets"]').val().split('.').join("");
                var antiqueAssets = $('input[name="antique_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="antique_assets"]').val().split('.').join("");
                var stockAssets = $('input[name="stock_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="stock_assets"]').val().split('.').join("");
                var otherAssets = $('input[name="other_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="other_assets"]').val().split('.').join("");
                var totalAssets = parseInt(savingsAssets) + parseInt(goldAssets) + parseInt(documentAssets) +
                        parseInt(propertyAssets) + parseInt(vehicleAssets) + parseInt(antiqueAssets) +
                        parseInt(stockAssets) + parseInt(otherAssets);

                $('input[name="total_assets"]').val(isNaN(totalAssets) ? 0 : totalAssets);

                var totalAssets = isNaN(totalAssets) ? 0 : totalAssets;
                var nisabAssets = $('input[name="nisab_gold"]').val().split('.').join("");
                var installmentMaal = $('input[name="installment_maal"]').val().split('.').join("") === "" ? 0 : $('input[name="installment_maal"]').val().split('.').join("");
                var totalPayAssets = parseInt(totalAssets) - parseInt(installmentMaal);
                var netAssets = totalPayAssets / 100 * 2.5;

                $('input[name="total_pay_assets"]').val(isNaN(totalPayAssets) ? 0 : totalPayAssets);

                // check if netcome > nisab
                if (totalPayAssets >= nisabAssets) {
                    $('input[name="is_important_pay_maal"]').val('Ya');
                    $('input[name="total_yearly_maal"]').val(netAssets);
                    $('input[name="total_monthly_maal"]').val(netAssets / 12);
                } else {
                    $('input[name="is_important_pay_maal"]').val('Tidak');
                    $('input[name="total_yearly_maal"]').val(0);
                    $('input[name="total_monthly_maal"]').val(0);
                }
            });

            $('input[name="vehicle_assets"]').bind('keyup', function () {
                var savingsAssets = $('input[name="savings_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="savings_assets"]').val().split('.').join("");
                var goldAssets = $('input[name="gold_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="gold_assets"]').val().split('.').join("");
                var documentAssets = $('input[name="document_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="document_assets"]').val().split('.').join("");
                var propertyAssets = $('input[name="property_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="property_assets"]').val().split('.').join("");
                var vehicleAssets = $(this).val().split('.').join("");
                var antiqueAssets = $('input[name="antique_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="antique_assets"]').val().split('.').join("");
                var stockAssets = $('input[name="stock_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="stock_assets"]').val().split('.').join("");
                var otherAssets = $('input[name="other_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="other_assets"]').val().split('.').join("");
                var totalAssets = parseInt(savingsAssets) + parseInt(goldAssets) + parseInt(documentAssets) +
                        parseInt(propertyAssets) + parseInt(vehicleAssets) + parseInt(antiqueAssets) +
                        parseInt(stockAssets) + parseInt(otherAssets);

                $('input[name="total_assets"]').val(isNaN(totalAssets) ? 0 : totalAssets);

                var totalAssets = isNaN(totalAssets) ? 0 : totalAssets;
                var nisabAssets = $('input[name="nisab_gold"]').val().split('.').join("");
                var installmentMaal = $('input[name="installment_maal"]').val().split('.').join("") === "" ? 0 : $('input[name="installment_maal"]').val().split('.').join("");
                var totalPayAssets = parseInt(totalAssets) - parseInt(installmentMaal);
                var netAssets = totalPayAssets / 100 * 2.5;

                $('input[name="total_pay_assets"]').val(isNaN(totalPayAssets) ? 0 : totalPayAssets);

                // check if netcome > nisab
                if (totalPayAssets >= nisabAssets) {
                    $('input[name="is_important_pay_maal"]').val('Ya');
                    $('input[name="total_yearly_maal"]').val(netAssets);
                    $('input[name="total_monthly_maal"]').val(netAssets / 12);
                } else {
                    $('input[name="is_important_pay_maal"]').val('Tidak');
                    $('input[name="total_yearly_maal"]').val(0);
                    $('input[name="total_monthly_maal"]').val(0);
                }
            });

            $('input[name="antique_assets"]').bind('keyup', function () {
                var savingsAssets = $('input[name="savings_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="savings_assets"]').val().split('.').join("");
                var goldAssets = $('input[name="gold_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="gold_assets"]').val().split('.').join("");
                var documentAssets = $('input[name="document_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="document_assets"]').val().split('.').join("");
                var propertyAssets = $('input[name="property_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="property_assets"]').val().split('.').join("");
                var vehicleAssets = $('input[name="vehicle_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="vehicle_assets"]').val().split('.').join("");
                var antiqueAssets = $(this).val().split('.').join("");
                var stockAssets = $('input[name="stock_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="stock_assets"]').val().split('.').join("");
                var otherAssets = $('input[name="other_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="other_assets"]').val().split('.').join("");
                var totalAssets = parseInt(savingsAssets) + parseInt(goldAssets) + parseInt(documentAssets) +
                        parseInt(propertyAssets) + parseInt(vehicleAssets) + parseInt(antiqueAssets) +
                        parseInt(stockAssets) + parseInt(otherAssets);

                $('input[name="total_assets"]').val(isNaN(totalAssets) ? 0 : totalAssets);

                var totalAssets = isNaN(totalAssets) ? 0 : totalAssets;
                var nisabAssets = $('input[name="nisab_gold"]').val().split('.').join("");
                var installmentMaal = $('input[name="installment_maal"]').val().split('.').join("") === "" ? 0 : $('input[name="installment_maal"]').val().split('.').join("");
                var totalPayAssets = parseInt(totalAssets) - parseInt(installmentMaal);
                var netAssets = totalPayAssets / 100 * 2.5;

                $('input[name="total_pay_assets"]').val(isNaN(totalPayAssets) ? 0 : totalPayAssets);

                // check if netcome > nisab
                if (totalPayAssets >= nisabAssets) {
                    $('input[name="is_important_pay_maal"]').val('Ya');
                    $('input[name="total_yearly_maal"]').val(netAssets);
                    $('input[name="total_monthly_maal"]').val(netAssets / 12);
                } else {
                    $('input[name="is_important_pay_maal"]').val('Tidak');
                    $('input[name="total_yearly_maal"]').val(0);
                    $('input[name="total_monthly_maal"]').val(0);
                }
            });

            $('input[name="stock_assets"]').bind('keyup', function () {
                var savingsAssets = $('input[name="savings_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="savings_assets"]').val().split('.').join("");
                var goldAssets = $('input[name="gold_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="gold_assets"]').val().split('.').join("");
                var documentAssets = $('input[name="document_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="document_assets"]').val().split('.').join("");
                var propertyAssets = $('input[name="property_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="property_assets"]').val().split('.').join("");
                var vehicleAssets = $('input[name="vehicle_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="vehicle_assets"]').val().split('.').join("");
                var antiqueAssets = $('input[name="antique_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="antique_assets"]').val().split('.').join("");
                var stockAssets = $(this).val().split('.').join("");
                var otherAssets = $('input[name="other_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="other_assets"]').val().split('.').join("");
                var totalAssets = parseInt(savingsAssets) + parseInt(goldAssets) + parseInt(documentAssets) +
                        parseInt(propertyAssets) + parseInt(vehicleAssets) + parseInt(antiqueAssets) +
                        parseInt(stockAssets) + parseInt(otherAssets);

                $('input[name="total_assets"]').val(isNaN(totalAssets) ? 0 : totalAssets);

                var totalAssets = isNaN(totalAssets) ? 0 : totalAssets;
                var nisabAssets = $('input[name="nisab_gold"]').val().split('.').join("");
                var installmentMaal = $('input[name="installment_maal"]').val().split('.').join("") === "" ? 0 : $('input[name="installment_maal"]').val().split('.').join("");
                var totalPayAssets = parseInt(totalAssets) - parseInt(installmentMaal);
                var netAssets = totalPayAssets / 100 * 2.5;

                $('input[name="total_pay_assets"]').val(isNaN(totalPayAssets) ? 0 : totalPayAssets);

                // check if netcome > nisab
                if (totalPayAssets >= nisabAssets) {
                    $('input[name="is_important_pay_maal"]').val('Ya');
                    $('input[name="total_yearly_maal"]').val(netAssets);
                    $('input[name="total_monthly_maal"]').val(netAssets / 12);
                } else {
                    $('input[name="is_important_pay_maal"]').val('Tidak');
                    $('input[name="total_yearly_maal"]').val(0);
                    $('input[name="total_monthly_maal"]').val(0);
                }
            });

            $('input[name="other_assets"]').bind('keyup', function () {
                var savingsAssets = $('input[name="savings_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="savings_assets"]').val().split('.').join("");
                var goldAssets = $('input[name="gold_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="gold_assets"]').val().split('.').join("");
                var documentAssets = $('input[name="document_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="document_assets"]').val().split('.').join("");
                var propertyAssets = $('input[name="property_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="property_assets"]').val().split('.').join("");
                var vehicleAssets = $('input[name="vehicle_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="vehicle_assets"]').val().split('.').join("");
                var antiqueAssets = $('input[name="antique_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="antique_assets"]').val().split('.').join("");
                var stockAssets = $('input[name="stock_assets"]').val().split('.').join("") === "" ? 0 : $('input[name="stock_assets"]').val().split('.').join("");
                var otherAssets = $(this).val().split('.').join("");
                var totalAssets = parseInt(savingsAssets) + parseInt(goldAssets) + parseInt(documentAssets) +
                        parseInt(propertyAssets) + parseInt(vehicleAssets) + parseInt(antiqueAssets) +
                        parseInt(stockAssets) + parseInt(otherAssets);

                $('input[name="total_assets"]').val(isNaN(totalAssets) ? 0 : totalAssets);

                var totalAssets = isNaN(totalAssets) ? 0 : totalAssets;
                var nisabAssets = $('input[name="nisab_gold"]').val().split('.').join("");
                var installmentMaal = $('input[name="installment_maal"]').val().split('.').join("") === "" ? 0 : $('input[name="installment_maal"]').val().split('.').join("");
                var totalPayAssets = parseInt(totalAssets) - parseInt(installmentMaal);
                var netAssets = totalPayAssets * 0.25;

                $('input[name="total_pay_assets"]').val(isNaN(totalPayAssets) ? 0 : totalPayAssets);

                // check if netcome > nisab
                if (totalPayAssets >= nisabAssets) {
                    $('input[name="is_important_pay_maal"]').val('Ya');
                    $('input[name="total_yearly_maal"]').val(netAssets);
                    $('input[name="total_monthly_maal"]').val(netAssets / 12);
                } else {
                    $('input[name="is_important_pay_maal"]').val('Tidak');
                    $('input[name="total_yearly_maal"]').val(0);
                    $('input[name="total_monthly_maal"]').val(0);
                }
            });

            //calculation total assets for zakat maal
            $('input[name="installment_maal"]').bind('keyup', function () {
                var totalAssets = $('input[name="total_assets"]').val().split('.').join("");
                var nisabAssets = $('input[name="nisab_gold"]').val().split('.').join("");
                var installmentMaal = $(this).val().split('.').join("");
                var totalPayAssets = parseInt(totalAssets) - parseInt(installmentMaal);
                var netAssets = totalPayAssets * 0.25;

                $('input[name="total_pay_assets"]').val(isNaN(totalPayAssets) ? 0 : totalPayAssets);

                // check if netcome > nisab
                if (totalPayAssets >= nisabAssets) {
                    $('input[name="is_important_pay_maal"]').val('Ya');
                    $('input[name="total_yearly_maal"]').val(netAssets);
                    $('input[name="total_monthly_maal"]').val(netAssets / 12);
                } else {
                    $('input[name="is_important_pay_maal"]').val('Tidak');
                    $('input[name="total_yearly_maal"]').val(0);
                    $('input[name="total_monthly_maal"]').val(0);
                }
            });

            //calculation if gold value is change
            $('input[name="gold_value"]').bind('keyup', function () {
                var totalAssets = $('input[name="total_assets"]').val().split('.').join("");
                var nisabAssets = $(this).val().split('.').join("") * 85;
                var installmentMaal = $('input[name="installment_maal"]').val().split('.').join("") === "" ? 0 : $('input[name="installment_maal"]').val().split('.').join("");
                var totalPayAssets = parseInt(totalAssets) - parseInt(installmentMaal);
                var netAssets = totalPayAssets * 0.25;

                $('input[name="total_pay_assets"]').val(isNaN(totalPayAssets) ? 0 : totalPayAssets);
                $('input[name="nisab_gold"]').val(isNaN(nisabAssets) ? 0 : nisabAssets);

                // check if netcome > nisab
                if (totalPayAssets >= nisabAssets) {
                    $('input[name="is_important_pay_maal"]').val('Ya');
                    $('input[name="total_yearly_maal"]').val(netAssets);
                    $('input[name="total_monthly_maal"]').val(netAssets / 12);
                } else {
                    $('input[name="is_important_pay_maal"]').val('Tidak');
                    $('input[name="total_yearly_maal"]').val(0);
                    $('input[name="total_monthly_maal"]').val(0);
                }
            });
        }, 1000);
        
    });
</script>

<script>
    $('.btn-do-zakat').on('click', function () {
        var zakatTotal = null;
        if ($("ul#action-tab a.active").attr('data-zakat') === 'monthly') {
            zakatTotal = $('#total_pay_monthly').val().split('.').join("");
        }

        if ($("ul#action-tab a.active").attr('data-zakat') === 'maal') {
            zakatTotal = $('#total_yearly_maal').val().split('.').join("");
        }

        window.location = "/donasi?nominal=" + zakatTotal + '&type=Zakat';
    });
</script>